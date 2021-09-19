@extends('layouts.layout');

@section('title','お問い合わせ')

@section('main')
@component('components.header')
@endcomponent
<div class="contact-page" id="confirm">
  <h1 class="big-title" style="color: black">確認</h1>
  <form method="POST" action="{{route('contact.send')}}" class="Form">
    @csrf
    <div class="Form-Item">
      <label class="Form-Item-Label">氏名</label>
      <label class="Form-Item-Label">{{$input["name"]}}</label>
    </div>
    <div class="Form-Item">
      <label class="Form-Item-Label">メールアドレス</label>
      <label class="Form-Item-Label">{{$input["email"]}}</label>
    </div>
    <div class="Form-Item">
      <label class="Form-Item-Label">お問い合わせ内容</label>
      <label class="Form-Item-Label">{{$input["body"]}}</label>
    </div>
    <div class="Form-Btn-Wrap">
      <input name="back" type="submit" value="戻る" class="Form-Btn">
      <input type="submit" value="送信" class="Form-Btn">
    </div>
  </form>
</div>
@endsection