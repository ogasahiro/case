@extends('layouts.aap')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="attendance-table">
    <table class="attendance-table__inner">
      <tr class="attendance-table__row">
       <th class="attendance-table__header">名前</th>
       <th class="attendance-table__header">勤務開始</th>
       <th class="attendance-table__header">勤務終了</th>
       <th class="attendance-table__header">休憩時間</th>
       <th class="attendance-table__header">勤務時間</th>
      </tr>
      <tr class="attendance-table__row">
      @foreach ($works as $work)
       <td class="attendance-table__item">
        {{$work->getDetail()}}
       </td>
       <td class="attendance-table__item">
        {{$work->getDetail()}}
       </td>
       <td class="attendance-table__item">
        {{$work->getDetail()}}
       </td>
       <td class="attendance-table__item">
        {{$work->getDetail()}}
       </td>
       <td class="attendance-table__item">
        {{$work->getDetail()}}
       </td>
    </tr>
    @endforeach
  </table>
  {{ $works->links() }}
</div>
@endsection