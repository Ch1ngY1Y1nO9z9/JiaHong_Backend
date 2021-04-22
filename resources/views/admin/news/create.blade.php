@extends('layouts.app')

@section('css')

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">最新消息 - 新增</div>
                    <div class="card-body">
                        <form method="POST" action="/admin/news/store" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="date" value="">

                            <div class="event">
                                <div class="form-group row">
                                    <label for="img" class="col-2 col-form-label">上傳圖片</label>
                                    <div class="col-10">
                                        <input type="file" class="form-control-file" id="img" name="img" required>
                                    </div>
                                    <div class="col-12"><small class="text-danger">*注意：建議尺寸：360 * 360 (px)</small></div>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <label for="title_ch" class="col-2 col-form-label">標題(中)</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="title_ch" name="title_ch" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title_en" class="col-2 col-form-label">標題(英)</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="title_en" name="title_en" required>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="content_ch" class="col-2 col-form-label">內文(中)</label>
                                <div class="col-10">
                                    <textarea style="height:150px;" type="text" class="form-control" id="content_ch" name="content_ch" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="content_en" class="col-2 col-form-label">內文(英)</label>
                                <div class="col-10">
                                    <textarea style="height:150px;" type="text" class="form-control" id="content_en" name="content_en" required></textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="sort" class="col-2 col-form-label">排序</label>
                                <div class="col-10">
                                    <input type="number" class="form-control" id="sort" name="sort" required value="0" min="0" max="999">
                                </div>
                                <div class="col-12"><small class="text-danger">*注意：只會顯示數字最大的前兩則新聞</small></div>
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
    <script>
        var current_date = new Date();

        var date = current_date.getFullYear() + '.' + (current_date.getMonth() + 1) + '.' + current_date.getDate()

        document.querySelector('input[name="date"]').setAttribute('value', date)
    </script>
@endsection
