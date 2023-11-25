@extends('layouts.aap')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="todo__content">
  <div class="work">
    <form class="create-form" action="workstart" method="post">
      @csrf
      @method('post')
      <div class="create-form__button">
        <button class="create-form__button-submit" type="submit">勤務開始</button>
      </div>
    </form>
    <form class="create-form" action="workend" method="post">
      @csrf
      @method('post')
      <div class="search-form__button">
        <button class="search-form__button-submit" type="submit">勤務終了</button>
      </div>
    </form>
  </div>
  <div class="break">
    <form class="create-form" action="breakstart" method="post">
      @csrf
      @method('post')
      <div class="search-form__button">
        <button class="search-form__button-submit" type="submit">休憩開始</button>
      </div>
    </form>
    <form class="create-form" action="breakend" method="post">
      @csrf
      @method('post')
      <div class="search-form__button">
        <button class="search-form__button-submit" type="submit">休憩終了</button>
      </div>
    </form>
  </div>
</div>
@endsection