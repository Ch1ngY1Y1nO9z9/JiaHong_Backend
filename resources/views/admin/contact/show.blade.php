@extends('layouts.app')

@section('css')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <h4 class="card-header">
                        聯絡我們管理-查看更多
                    </h4>
                    <div class="card-body">
                        <form>
                            @csrf
                            <div class="form-group row">
                                <label for="date" class="col-2 col-form-label">寄件日期</label>
                                <div class="col-10">
                                    <input id="date" class="form-control" type="text" readonly value="{{$contact_info->created_at}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="country_name" class="col-2 col-form-label">姓名</label>
                                <div class="col-10">
                                    <input id="country_name" class="form-control" type="text" readonly value="{{$contact_info->name}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-2 col-form-label">Email</label>
                                <div class="col-10">
                                    <input id="email" class="form-control" type="text" readonly value="{{$contact_info->email}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone" class="col-2 col-form-label">聯絡電話</label>
                                <div class="col-10">
                                    <input id="phone" class="form-control" type="text" readonly value="{{$contact_info->phone}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="content" class="col-2 col-form-label">信件內容</label>
                                <div class="col-10">
                                    <textarea id="content" class="form-control" rows="3" disabled>{{$contact_info->content}}</textarea>
                                </div>
                            </div>

                            <hr>
                        </form>

                        <a href="/admin/contact" class="btn btn-primary d-block col-2 mx-auto">回到上一頁</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
