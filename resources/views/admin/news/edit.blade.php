@extends('layouts.app')

@section('css')
<style>
    /* .news_infos {
        position: relative;
    }

    .news_infos .btn-danger {
        border-radius: 50%;
        position: absolute;
        right: -5px;
        top: -5px;
    }

    .news_infos .sort {
        display: flex;
        margin-top: 5px;
    }

    .news_infos label {
        margin: 0 5px;
        line-height: 37px;
    }

    .news_infos input {
        width: 100%;
    }

    .time_btn {
        padding: 3px 20px;
        border: 1px solid black;
        cursor: pointer;
        height: 30px;
    }

    .time_btn.active {
        background-color: black;
        color: white;
    } */

</style>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">最新消息 - 編輯</div>

                    <div class="card-body">
                        <form method="POST" action="/admin/news/update/{{$news->id}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="date" value="{{$news->date}}">
                            <div class="form-group row">
                                <label for="img" class="col-2 col-form-label">當前圖片</label>
                                <div class="col-10">
                                    <img width="200" src="{{$news->img}}" alt="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="img" class="col-2 col-form-label">上傳新圖片</label>
                                <div class="col-10">
                                    <input type="file" class="form-control-file" id="img" name="img">
                                </div>
                                <div class="col-12"><small class="text-danger">*注意：建議尺寸：360 * 360 (px)</small></div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="title_ch" class="col-2 col-form-label">標題(中)</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="title_ch" name="title_ch" value="{{$news->title_ch}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title_en" class="col-2 col-form-label">標題(英)</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="title_en" name="title_en" value="{{$news->title_en}}" required>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="content_ch" class="col-2 col-form-label">內文(中)</label>
                                <div class="col-10">
                                    <textarea style="height:150px;" type="text" class="form-control" id="content_ch" name="content_ch" required>{{$news->content_ch}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="content_en" class="col-2 col-form-label">內文(英)</label>
                                <div class="col-10">
                                    <textarea style="height:150px;" type="text" class="form-control" id="content_en" name="content_en" required>{{$news->content_en}}</textarea>
                                </div>
                            </div>

                            <hr>
                            <div class="form-group row">
                                <label for="sort" class="col-2 col-form-label">排序</label>
                                <div class="col-10">
                                    <input type="number" class="form-control" id="sort" name="sort" value="{{$news->sort}}" required min="0" max="999">
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
<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.news_infos .btn-danger').click(function () {
    var info_imgs = $(this).data('infoimgs');

        $.ajax({
            method: 'POST',
            url: '/admin/ajax_delete_info_imgs',
            data: {info_imgs: info_imgs},
            success: function (res) {
                $( `.news_infos[data-infoimgs='${info_imgs}']` ).remove();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error(textStatus + " " + errorThrown);
            }
        });
    });

    function post_ajax_sort(element,info_imgs_id) {
        var info_imgs_id;
        var sort_value = element.value;

        $.ajax({
            method: 'POST',
            url: '/admin/ajax_sort_product_imgs',
            data: {info_imgs_id: info_imgs_id,sort_value: sort_value},
            success: function (res) {

            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error(textStatus + " " + errorThrown);
            }
        });
    }

    $(".time_btn").click(function () {
        $(".time_btn").removeClass('active');
        $(this).addClass('active');
        var time_value = this.textContent;
        $("#show_on_what_new").val(time_value);
    });
</script>
@endsection
