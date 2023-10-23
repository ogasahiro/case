@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>ログイン</h2>
  </div>
  <form class="form" action="contacts/confirm" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="pass" name="pass" placeholder="パスワード" value="{{ old('pass') }}" />
        </div>
        <div class="form__error">
          @error('pass')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">ログイン</button>
    </div>
    <div class="login">
       <p>アカウントお持ちでない方はこちらから</p>
       <div class="p">会員登録</div>
     </div>
  </form>
</div>
@endsection