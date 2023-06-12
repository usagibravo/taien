@extends('layouts.user')

@section('title', '書家 大野泰園 / Shoka Ohno Taien - お問い合わせ')

@section('content')
<section id="CONTACT" class="section bg bg-light">
   <div class="container">
      <div class="row">
         <div class="col-md-8 mx-auto">
            <h2 class="mb-md-3">お問い合わせフォーム</h2>
            <div class="form-group row">
               <div class="col-md-10 mb-md-3">
                  <label for="formNameInput" class="form-label">お名前（必須）</label>
                  <input class="form-control" type="text" placeholder="" id="formNameInput" name="name" autocomplete="name">
                  <p class="text-danger attention attention-name"></p>
               </div>
            </div>
            <div class="form-group row">
               <div class="col-md-10 mb-md-3">
                  <label for="formEmailInput" class="form-label">メールアドレス（必須）</label>
                  <input class="form-control" type="email" id="formEmailInput" placeholder="name@example.com" name="email" autocomplete="email" required>
                  <p class="text-danger attention attention-email"></p>
               </div>
            </div>
            <div class="form-group row">
               <div class="col-md-10 mb-md-3">
                  <label for="formSubjectInput" class="form-label">件名（必須）</label>
                  <input class="form-control" type="text" placeholder="" id="formSubjectInput" name="subject">
                  <p class="text-danger attention attention-subject"></p>
               </div>
            </div>
            <div class="form-group row">
               <div class="col-md-10 mb-md-3">
                  <label for="formBodyInput" class="form-label">お問い合わせ内容（必須）</label>
                  <textarea class="form-control" id="formBodyInput" rows="10"  placeholder="こちらに入力してください"name="body"></textarea>
                  <p class="text-danger attention attention-body"></p>
               </div>
            </div>
            <div class="form-group row">
               <div class="col-md-10">
                  <button type="button" class="form-btn btn btn-primary">確認画面へ</button>
               </div>   
            </div>

         </div>
      </div>
   </div>

   <!-- ここからModal記述 -->
   <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel">
      <div class="modal-dialog">
         <div class="modal-content">
            <form action="{{ route('contact.send') }}" method="post" enctype="multipart/form-data">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">入力内容の確認</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="閉じる"></button>
               </div>
               <div class="modal-body">
               @csrf
               @if (count($errors) > 0)
                  <ul>
                        @foreach($errors->all() as $e)
                           <li>{{ $e }}</li>
                        @endforeach
                  </ul>
               @endif
               <div>
                  <p class="text-muted">お名前</p>
                  <p class="px-2 modalName"></p>
                  <input class="modalName" type="hidden" name="name">
               </div>
               <div>
                  <p class="text-muted">メールアドレス</p>
                  <p class="px-2 modalEmail"></p>
                  <input class="modalEmail" type="hidden" name="email">
               </div>
               <div>
                  <p class="text-muted">件名</p>
                  <p class="px-2 modalSubject"></p>
                  <input class="modalSubject" type="hidden" name="subject">
               </div>
               <div>
                  <p class="text-muted">本文</p>
                  <p class="px-2 modalBody"></p>
                  <input class="modalBody" type="hidden" name="body">
               </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">戻る</button>
                  <button type="submit" class="btn btn-primary">送信</button>
               </div><!-- /.modal-footer -->
            </form>         
         </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->
   <script>
 

   </script>

</section>
@endsection