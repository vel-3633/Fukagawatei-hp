@extends('layouts.layout');

@section('title','お問い合わせ')

@section('main')
@component('components.header')
@endcomponent
<h1 class="menu-title">ランチ</h1>
<ol class="menu-list" id="menu-list1">
  <li class="menu-list-sub-title">ALL 1000円</li>
  @foreach ($datas as $data)
  <li>{{$data}}</li>
  @endforeach
  <li>※★印のメニューはご飯の大盛りサービス致します。</li>
  <li>平日は全てのランチにコーヒーが付きます。</li>
</ol>
<h1 class="menu-title">ディナー</h1>
<ol class="menu-list">
  <li class="menu-list-sub-title">鉄板料理</li>
  @foreach ($teppan as $key => $data)
  <li>
    <div class="menu-wrap">
      <p>{{$key}}</p>
      <p>{{$data}}円</p>
    </div>
  </li>
  @endforeach
  <li class="menu-list-sub-title">鉄鍋料理</li>
  @foreach ($tetunabe as $key => $data)
  <li>
    <div class="menu-wrap">
      <p>{{$key}}</p>
      <p>{{$data}}円</p>
    </div>
  </li>
  @endforeach<li class="menu-list-sub-title">旬の魚料理</li>
  @foreach ($fish as $key => $data)
  <li>
    <div class="menu-wrap">
      <p>{{$key}}</p>
      <p>{{$data}}円</p>
    </div>
  </li>
  @endforeach<li class="menu-list-sub-title">フレッシュ野菜料理</li>
  @foreach ($vegitable as $key => $data)
  <li>
    <div class="menu-wrap">
      <p>{{$key}}</p>
      <p>{{$data}}円</p>
    </div>
  </li>
  @endforeach<li class="menu-list-sub-title">その他料理</li>
  @foreach ($others as $key => $data)
  <li>
    <div class="menu-wrap">
      <p>{{$key}}</p>
      <p>{{$data}}円</p>
    </div>
  </li>
  @endforeach
</ol>
<h1 class="menu-title">シェフのおすすめコース料理</h1>
<ol class="menu-list">
  @foreach ($corses as $key => $data)
  <li>
    <div class="menu-wrap">
      <p>{{$key}}</p>
      <p>{{$data}}円</p>
    </div>
  </li>
  @endforeach
  <li><p class="menu-check">※料理の内容は、季節により異なりますので</p></li>
  <li><p class="menu-check">スタッフにお気軽にお問い合わせください</p></li>
</ol>
@endsection