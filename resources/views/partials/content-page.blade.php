<div class="pt-28 pb-12 md:py-24 {{ $class ?? "" }}">
    <div class="container mx-auto p-6 md:py-12 md:px-24 bg-beige">
        @php(the_content())
    </div>
</div>

@if ($pagination())
    <nav class="page-nav" aria-label="Page">
        {!! $pagination !!}
    </nav>
@endif
