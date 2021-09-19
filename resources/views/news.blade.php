@extends('layouts.layout');

@section('title','お知らせ')

@section('main')
@component('components.header')
@endcomponent
<h1 class="news-title-sub">お知らせ</h1>

<div class="news">
  <h1 class="content-title">移転のお知らせ</h1>
  @foreach ($datas as $item)
  <p class="news-content">{{$item}}</p>
  @endforeach
</div>
<div class="news">
  <h1 class="content-title">お陰様で20周年を迎えました</h1>
  @foreach ($twenty as $item)
  <p class="news-content">{{$item}}</p>
  @endforeach
</div>
<div class="news">
  <h1 class="content-title">営業時間変更のお知らせ</h1>
  @foreach ($colona as $item)
  <p class="news-content">{{$item}}</p>
  @endforeach
</div>

@endsection