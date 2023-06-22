@extends('layouts.admin')
@section('title', '作品の新規作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>作品新規作成</h2>
                <form action="{{ route('admin.work.create') }}" method="post" enctype="multipart/form-data">

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
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">表示順序（任意）</label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="showing_order" value="{{ old('showing_order') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">本文（オプション）</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="5">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">作品タイプ</label>
                        <div class="col-md-3">
                            <select name="work_type">
                                <option value="">{{ null !== old('work_type') ? old('work_type') : "---選択して下さい--" }}</option>
                                <option value="漢字書">漢字書</option>
                                <option value="ひらがな">ひらがな</option>
                                <option value="篆刻">篆刻</option>
                            </select>
                        </div>
                    </div>
                    @csrf
                    <input type="submit" class="btn btn-primary" value="作成">
                </form>
            </div>
        </div>
    </div>
@endsection