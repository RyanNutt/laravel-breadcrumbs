<?php
return [
    'home' => [

        // Should the home link be automatically included in the breadcrumbs? You can also manually include
        // or exclude the home link when you build the breadcrumb class.
        'include' => true,

        'text' => 'Home',

        'url' => url('/'),

        'image' => '',
    ],

    // Which blade template to use. Currently only tailwind is supported. 
    'theme' => 'tailwind',

    // View to use to generate the HTML breadcrumbs. If defined, this will
    // override the theme above.
    'view' => '',

    // Character to use as a separator between crumbs. Use and encoded entity
    // if you want something like > 
    'separator' => '/',
];
