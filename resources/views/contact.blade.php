@extends('layouts.layout');

@section('title','お問い合わせ')

@section('main')
@component('components.header')
@endcomponent
<div class="contact-page">
  <h1 class="big-title" id="otoiawase" style="color: black">お問い合わせ</h1>
  @if ($errors->any())
　　<div class="error">
　　　<ul>
  　　　@foreach ($errors->all() as $error)
　　　　<li>{{$error}}</li>
  　　　@endforeach
　　　</ul>
　　</div>
　@endif
  <form method="POST" action="{{route('contact.post')}}" class="Form">
    @csrf
    <div class="Form-Item">
      <label class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>氏名</label>
      <input type="text" name="name" class="Form-Item-Input" value="{{old('name')}}" placeholder="例）深川太郎">
    </div>
    <div class="Form-Item">
      <label class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</label>
      <input type="email" name="email" class="Form-Item-Input" value="{{old('email')}}" placeholder="例）example@gmail.com">
    </div>
    <div class="Form-Item">
      <label class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</label>
      <textarea name="body" class="Form-Item-Textarea">{{old('body')}}</textarea>
    </div>
    <input type="submit" class="Form-Btn" value="送信">
  </form>
</div>
@endsection