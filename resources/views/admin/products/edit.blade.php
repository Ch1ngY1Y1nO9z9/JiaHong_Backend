@extends('layouts.app')

@section('css')

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">產品上架 - 編輯</div>
                    <div class="card-body">
                        <form method="POST" action="/admin/products/update/{{$item->id}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="img" class="col-2 col-form-label">當前主要圖片</label>
                                <div class="col-10">
                                    <img width="200" src="{{$item->img}}" alt="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="img" class="col-2 col-form-label">上傳新主要圖片</label>
                                <div class="col-10">
                                    <input type="file" class="form-control-file" id="img" name="img">
                                </div>
                                <div class="col-12"><small class="text-danger">*注意：建議尺寸：300 * 200 (px)</small></div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <label for="img" class="col-2 col-form-label">當前產品圖片</label>
                                <div class="col-10">
                                    <div class="row">

                                        <div class="col">
                                            @if($item->img2)
                                            <img width="200" src="{{$item->img2}}" alt="">
                                            @endif
                                            <div>第一張產品圖</div>
                                            <div>
                                                <input type="file" class="form-control-file" id="img" name="img2">
                                            </div>
                                        </div>



                                        <div class="col">
                                            @if($item->img3)
                                            <img width="200" src="{{$item->img3}}" alt="">
                                            @endif
                                            <div>第二張產品圖</div>
                                            <div>
                                                <input type="file" class="form-control-file" id="img" name="img3">
                                            </div>
                                        </div>



                                        <div class="col">
                                            @if($item->img4)
                                            <img width="200" src="{{$item->img4}}" alt="">
                                            @endif
                                            <div>第三張產品圖</div>
                                            <div>
                                                <input type="file" class="form-control-file" id="img" name="img4">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-12"><small class="text-danger">*注意：建議尺寸：300 * 200 (px)</small></div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <label class="col-2" for="type">產品分類</label>
                                <div class="col-10">
                                    <select class="form-control" id="type" name="type">
                                        @foreach($types as $type)
                                            <option value="{{$type->id}}" @if($type->id == $item->type)selected @endif>{{$type->type_name_ch}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <label for="name_ch" class="col-2 col-form-label">產品名稱(中)</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="name_ch" name="name_ch" value="{{$item->name_ch}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name_en" class="col-2 col-form-label">產品名稱(英)</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="name_en" name="name_en" value="{{$item->name_en}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="content_ch" class="col-2 col-form-label">詳細訊息(中)</label>
                                <div class="col-10">
                                    <textarea class="form-control" id="content_ch" name="content_ch" required rows="5">{{$item->content_ch}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="content_en" class="col-2 col-form-label">詳細訊息(英)</label>
                                <div class="col-10">
                                    <textarea class="form-control" id="content_en" name="content_en" required rows="5">{{$item->content_en}}</textarea>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <label for="sort" class="col-2 col-form-label">排序</label>
                                <div class="col-10">
                                    <input type="number" class="form-control" id="sort" name="sort" required min="0" max="999" value="{{$item->sort}}">
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary d-block mx-auto">編輯</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
