@extends('layouts.app')

@section('css')

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">產品上架 - 新增</div>
                    <div class="card-body">
                        <form method="POST" action="/admin/products/store" enctype="multipart/form-data">
                            @csrf

                            <div class="event">
                                <div class="form-group row">
                                    <label for="img" class="col-2 col-form-label">上傳圖片</label>
                                    <div class="col-10">
                                        <input type="file" class="form-control-file" id="img" name="img">
                                    </div>
                                    <div class="col-12"><small class="text-danger">*注意：建議尺寸：300 * 200 (px)</small></div>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <label class="col-2" for="type">產品分類</label>
                                <div class="col-10">
                                    <select class="form-control" id="type" name="type">
                                        @foreach($types as $index => $type)
                                            <option value="{{$type->id}}" @if($index == 1)selected @endif>{{$type->type_name_ch}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <label for="name_ch" class="col-2 col-form-label">產品名稱(中)</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="name_ch" name="name_ch" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name_en" class="col-2 col-form-label">產品名稱(英)</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="name_en" name="name_en" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="content_ch" class="col-2 col-form-label">詳細訊息(中)</label>
                                <div class="col-10">
                                    <textarea class="form-control" id="content_ch" name="content_ch" required rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="content_en" class="col-2 col-form-label">詳細訊息(英)</label>
                                <div class="col-10">
                                    <textarea class="form-control" id="content_en" name="content_en" required rows="5"></textarea>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <label for="sort" class="col-2 col-form-label">排序</label>
                                <div class="col-10">
                                    <input type="number" class="form-control" id="sort" name="sort" required value="0" min="0" max="999">
                                </div>
                            </div>

                            <hr>

                            <button type="submit" class="btn btn-primary d-block mx-auto">新增</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection

