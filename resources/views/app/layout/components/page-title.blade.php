<section class="blue-title">
    <div class="container">
        <div class="title-block text-center">
            <h1 class="title-primary">
{{--                {{\Request::fullUrl()}}--}}
                @foreach($MyNavBar->roots() as $item)
{{--                    {{$item->url()}}--}}
                    @if($item->url() == \Request::fullUrl())
                        {!! $item->title !!}
                    @endif
                @endforeach
            </h1>
        </div>
    </div>
</section>
