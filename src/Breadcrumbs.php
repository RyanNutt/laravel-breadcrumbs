<?php

namespace Aelora\Breadcrumbs;

use Stringable;

class Breadcrumbs implements Stringable
{
    private array $crumbs = [];
    private $home = [];

    public function __construct()
    {
        if (config('breadcrumbs.home.include', true)) {
            $this->home = [
                'title' => config('breadcrumbs.home.text', ''),
                'url' => config('breadcrumbs.home.url', ''),
                'image' => config('breadcrumbs.home.image', ''),
            ];
        } else {
            $this->home = false;
        }
    }

    public static function create(): self
    {
        return new self();
    }

    public function add(string $title, string $url = '', string $image = ''): self
    {
        $this->crumbs[] = [
            'title' => $title,
            'url' => $url,
            'image' => $image,
        ];
        return $this;
    }

    public function setHome($title, string $url = '', string $image = ''): self
    {
        if ($title === false) {
            $this->home = false;
        } else {
            $this->home = [
                'title' => $title,
                'url' => $url,
                'image' => $image,
            ];
        }
        return $this;
    }

    public function reverse(): self
    {
        $this->crumbs = array_reverse($this->crumbs);
        return $this;
    }

    public function reset(): self
    {
        $this->crumbs = [];
        return $this;
    }

    public function count(): int
    {
        return count($this->crumbs);
    }

    /**
     * Returns the generated blade templates for the breadcrumbs, optionally
     * echoing it out as well.
     */
    public function generate(bool $echo = false): string
    {
        $out = '';
        if (is_array($this->home) && config('breadcrumbs.home.include', true)) {
            array_unshift($this->crumbs, $this->home);
        }

        $view = config('breadcrumbs.view', '');
        if (empty($view)) {
            $theme = strtolower(config('breadcrumbs.theme', 'tailwind'));
            $view = 'breadcrumbs::breadcrumbs-' . $theme;
        }

        $out .= view($view, ['crumbs' => $this->crumbs])->render();

        $itemList = [];
        foreach ($this->crumbs as $idx => $crumb) {
            $item = [];
            if (!empty($crumb['url'])) {
                $item['@id'] = $crumb['url'];
            }
            if (!empty($crumb['title'])) {
                $item['name'] = $crumb['title'];
            }
            if (!empty($crumb['image'])) {
                $item['image'] = $crumb['image'];
            }
            $listItem = [
                '@type' => 'ListItem',
                'position' => $idx + 1,
                'item' => $item,
            ];
            $itemList[] = $listItem;
        }

        $jsonld = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => $itemList,
        ];

        $out .= view('breadcrumbs::jsonld', ['jsonld' => $jsonld, 'crumbs' => $this->crumbs])->render();

        return $out;
    }

    public function __toString(): string
    {
        return $this->generate(false);
    }
}
