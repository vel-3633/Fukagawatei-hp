@extends('layouts.layout');

@section('title','お問い合わせ')

@section('main')
@component('components.header')
@endcomponent
<div class="contact-confirm">
  <h1>送信完了</h1>
  <p>送信を確認いたしました。</p>
  <p>お問い合せいただき誠にありがとうございます。</p>
  <div class="Form-Btn-Wrap">
    <a href="{{url('/')}}" class="Form-Btn">戻る</a>
  </div>
</div>
@endsection