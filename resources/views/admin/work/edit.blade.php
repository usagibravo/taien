@extends('layouts.admin')
@section('title', '作品の編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>作品の編集</h2>
                <form action="{{ route('admin.work.update') }}" method="post" enctype="multipart/form-data">
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
                            <input type="text" class="form-control" name="title" value="{{ $work_form->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">表示順序（任意）</label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="showing_order" value="{{ $work_form->showing_order }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">本文（任意）</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="5">{{ $work_form->body }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                            <div class="form-text text-info">
                                設定中：{{ $work_form->image_path . ' (' . $work_form->image_width . ' x ' . $work_form->image_height . ')' }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row text-left mt-4">
                        <label class="col-md-2">作品タイプ</label>
                        <div class="col-md-3">
                            <select name="work_type">
                                <option value="{{ $work_form->work_type }}">{{ $work_form->work_type }}</option>
                                <option value="漢字書">漢字書</option>
                                <option value="ひらがな">ひらがな</option>
                                <option value="篆刻">篆刻</option>
                            </select>
                        </div>
                        @if ($work_form->image_path)
                            <img src="{{ asset('storage/image/' . $work_form->image_path) }}">
                        @endif
                    </div>
                    <div class="form-group row">
                            <input type="hidden" name="id" value="{{ $work_form->id }}">
                        <div class="col-md-10">
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection