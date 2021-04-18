@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="/css/product.css">

<style>
    pre{
        font-size: 20px;
        color: #1E2188;
        font-weight: bold;
    }

    @media (max-width: 767px){
        pre{
            font-size: 16px;
        }
    }
</style>
@endsection

@section('content')
<main>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-3">
                <li class="breadcrumb-item">最新消息</li>
                <li class="breadcrumb-item active" aria-current="page">{{$news->title_ch}}</li>
            </ol>
        </nav>
        <div class="news">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img width="100%" src="{{$news->img}}" alt="">

                </div>
                <div class="col-12 col-md-6 mt-3 mt-md-0">
<pre style="white-space: break-spaces;word-break: break-all;">
{{$news->content_ch}}
</pre>
                </div>
                <div class="col-12 text-end" style="font-weight:bold">{{$news->date}}</div>
            </div>
        </div>
    </div>

</main>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.1/dist/lazyload.min.js"></script>

@endsection
