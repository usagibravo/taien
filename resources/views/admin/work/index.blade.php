@extends('layouts.admin')
@section('title', '登録済み作品の一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>作品一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('admin.work.add') }}" role="botton" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ route('admin.work.index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            @csrf
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-works col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">順序</th>
                                <th width="20%">タイトル</th>
                                <th width="40%">本文</th>
                                <th width="10%">作品</th>
                                <th width="10%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($works as $work)
                                <tr>
                                    <td>{{ $work->showing_order }}</td>
                                    <td>{{ Str::limit($work->title, 50) }}</td>
                                    <td>{{ Str::limit($work->body, 100) }}</td>
                                    <td>
                                        <div class="list-item">
                                            @if ($work->image_path)
                                                <img src="{{ asset('storage/image/' . $work->image_path) }}">
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <a href="{{ route('admin.work.edit', ['id' => $work->id]) }}">編集</a> 
                                        </div>
                                        <div>
                                            <a href="{{ route('admin.work.delete', ['id' => $work->id]) }}">削除</a> 
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection