@extends('layouts.sidebar')

@section('content')
<div class="vh-100 pt-5" style="background:#ECF1F6;">
  <div class="border w-75 m-auto pt-5 pb-5" style="border-radius:5px; background:#FFF;">
    <div class="w-75 m-auto border" style="border-radius:5px;">

      <p class="text-center">{{ $calendar->getTitle() }}</p>
      <div class="">
        {!! $calendar->render() !!}
      </div>
    </div>
    <div class="text-right w-75 m-auto">
      <input type="submit" class="btn btn-primary" value="予約する" form="reserveParts">
    </div>
  </div>
</div>
<div class="modal js-modal">
  <div class="modal__bg js-modal-close"></div>
  <div class="modal__content">
    <div class="w-50 m-auto">
      <p class="cancel_date"></p>
      <p class="cancel_part"></p>
      <p>上記の予約をキャンセルしてもよろしいですか？</p>
      <input type="hidden" value="" class="hidden_cancel_date" form="deleteParts" name="delete_date">
      <div class="d-flex" style="justify-content:space-between;">
        <input type="submit" class="p-1 btn btn-primary js-modal-close" style="width:100px; font-size:13px;" value="閉じる">
        <input type="submit" class="p-1 btn btn-danger" style="width:100px; font-size:12px;" value="キャンセル" form="deleteParts">
      </div>
    </div>
  </div>
</div>
@endsection