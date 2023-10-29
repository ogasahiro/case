@extends('layouts.app') @section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection @section('content')
<div class="todo__alert">
  @if (session('message'))
  <div class="todo__alert--success">{{ session('message') }}</div>
  @endif @if ($errors->any())
  <div class="todo__alert--danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
</div>
<div class="todo__content">
  <form class="create-form" action="/works" method="post">
    @csrf
    <div class="create-form__button">
      <button class="create-form__button-submit" type="submit">勤務開始</button>
    </div>
  </form>
 <form class="search-form">
   <div class="search-form__button">
     <button class="search-form__button-submit" type="submit">勤務終了</button>
   </div>
 </form>
 <form class="search-form">
   <div class="search-form__button">
     <button class="search-form__button-submit" type="submit">休憩開始</button>
   </div>
 </form>
 <form class="search-form">
   <div class="search-form__button">
     <button class="search-form__button-submit" type="submit">休憩終了</button>
   </div>
 </form>
  </div>
</div>
@endsection