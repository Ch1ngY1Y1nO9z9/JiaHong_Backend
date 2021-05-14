@extends('layouts.template_en')

@section('css')
<link rel="stylesheet" href="/css/product.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" />

{{-- <style>
    main #news .container .link .news_pic {
        background-size: cover;
        background-position: center;
    }
</style> --}}
@endsection

@section('content')
<main>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-3">
                <li class="breadcrumb-item">Products</li>
                <li class="breadcrumb-item active" aria-current="page">{{$type->type_name_en}}</li>
            </ol>
        </nav>
        <div class="products">
            @foreach ($products as $product)
            <div class="product">
                <div class="row">
                    <div class="product_thumbnail col-5 col-md-3">
                        <div class="product_pic">

                            <a href="{{$product->img}}" data-lightbox="product{{$product->id}}" data-title="{{$product->name_en}}">
                                <img class="product_main" width="100%" class="lazy" data-src="{{$product->img}}" src="{{$product->img}}" alt="">
                            </a>
                        </div>
                        <div class="product_name">
                            {{$product->name_en}}
                        </div>
                        @if($product->img2 || $product->img3 || $product->img4)
                        <div class="product_imgs row">
                            <div class="col-3">
                                <div style="border: 1px solid #1E2188;">
                                    <img class="product_img" width="100%" src="{{$product->img}}" alt="">
                                </div>
                            </div>
                            @if($product->img2)
                            <div class="col-3">
                                <div style="border: 1px solid #1E2188;">
                                    <img class="product_img" width="100%" src="{{$product->img2}}" alt="">
                                </div>
                            </div>
                            @endif

                            @if($product->img3)
                            <div class="col-3">
                                <div style="border: 1px solid #1E2188;">
                                    <img class="product_img" width="100%" src="{{$product->img3}}" alt="">
                                </div>
                            </div>
                            @endif

                            @if($product->img4)
                            <div class="col-3">
                                <div style="border: 1px solid #1E2188;">
                                    <img class="product_img" width="100%" src="{{$product->img4}}" alt="">
                                </div>
                            </div>
                            @endif
                        </div>
                    @endif
                    </div>
                    <div class="product_detail col-7 col-md-9">
<pre>
{{$product->content_en}}
</pre>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>

</main>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.1/dist/lazyload.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous"></script>

    <script>

        $('.product_img').hover(function(){
            img_link = $(this).attr('src');
            $(this).parent().parent().parent().parent().find('a').attr('href', img_link)
            $(this).parent().parent().parent().parent().find('.product_main').attr('src', img_link)

        })

    </script>

@endsection
