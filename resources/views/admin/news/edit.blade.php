@extends('layouts.admin')
@section('title', 'ニュースの編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ニュースの編集</h2>
                <form action="{{ route('admin.news.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ $news_form->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">投稿日付</label>
                        <div class="col-md-10">
                            <input type="datetime-local" class="form-control" name="dated_at" value="{{ $news_form->dated_at }}" pattern="nnnn-nn-nnTnn:nn">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="15">{{ $news_form->body }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-6">
                            <input type="file" class="form-control-file" name="image">
                            <div class="form-text text-info">
                                設定中：{{ $news_form->image_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                        @if ($news_form->image_path)
                            <img src="{{ asset('storage/image/' . $news_form->image_path) }}">
                        @endif
                    </div>
                    <div class="form-group row">
                            <input type="hidden" name="id" value="{{ $news_form->id }}">
                        <div class="col-md-10">
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection