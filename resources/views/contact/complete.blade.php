@extends('layouts.user')

@section('title', '書家 大野泰園 / Shoka Ohno Taien - お問い合わせ - 完了')

@section('content')</title>
<section id="CONTACT" class="section bg bg-light">
    <div class="container">
        <h1 class="text-center mt-2 mb-5">お問い合わせありがとうございました。</h1>
        <div class="row col-md-4 mx-auto">
            <a href="{{ route('contact.edit') }}" class="btn btn-primary">お問い合わせ入力画面に戻る</a>
        </div>
    </div>
@endsection

