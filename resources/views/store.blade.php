@extends('layouts.layout')

@section('title','store')

@section('main')
    @component('components.header')
    @endcomponent
    <div class="access">
      <h1 class="big-title">店舗情報  -Information-</h1>
      <div class="access-box">
        <ul class="access-left">
          <li>●営業時間</li>
          <li>ランチ：11:30~14:00(13:45 L.O)</li>
          <li>ディナー：17:30~22:00(21:00 L.O)</li>
          <li>定休日：月曜日・第3 or第4火曜日</li>
          <li>東京都江東区三好4-8-12浅黄ビル1階</li>
          <li>（カード利用不可）</li>
        </ul>
        <ul class="access-right">
          <li>●アクセス</li>
          <li>東京メトロ半蔵門線「清澄白河駅」B2出口より徒歩9分</li>
          <li>都営地下鉄大江戸線「清澄白河駅」A3出口より徒歩13分</li>
          <li>東京メトロ東西線「木場駅」3番出口より徒歩15分</li>
          <li>都営地下鉄新宿線「菊川駅」Ａ4出口より徒歩15分</li>
        </ul>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6601.879752661119!2d139.80388823899315!3d35.681871742083445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188919194b12fd%3A0xf4f3b8245524ee8c!2z5rex5bed5Lqt!5e0!3m2!1sja!2sjp!4v1616219671816!5m2!1sja!2sjp" width="1000" height="500" style="border:0;" allowfullscreen="" loading="lazy" class="map"></iframe>
      <a href="https://goo.gl/maps/DxEEqTKUFnuio9gy7" class="btn btn-border">GoogleMap</a>
    </div>
@endsection