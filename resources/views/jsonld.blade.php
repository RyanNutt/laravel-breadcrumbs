{{-- View partial for the breadcrumb schema --}}
@if (count($crumbs) < 1)
    <!-- no breadcrumbs defined -->
@else
    <script type="application/ld+json">
        @json($jsonld)
    </script>
@endif
