@extends('layouts.layout')

@section('main')
<div class="home">
  <div id="eyecatch">
    @component('components.header')
    @endcomponent
    <div class="title">
      <h1>FUKAGAWA-TEI</h1>
      <p>下町・深川の美味しいが<br id="br">そこにある</p>
    </div>
    <div class="number-box">
      <img class="logo" src="img/IMG_0674.gif">
      <div>
        <p>ご予約の方はこちらの<br>電話番号まで</p>
        <a href="tel:080-1111-2222" id="number">03-3642-4939</a>
      </div>
    </div>
  </div>
  <div class="flex">
    <h1 class="big-title">CONCEPT</h1>
    <div class="concept-box">
      <div class="concept-content">
        <h1>下町の小さなレストラン・深川亭</h1>
        <ol id="concept-list">
          <li>深川生まれ、深川育ちのシェフ</li>
          <li>安心・安全な食材を厳選調理</li>
          <li>素材の旨みを生かした鉄板料理</li>
        </ol>
        <p>くつろぎのひとときをお楽しみください</p>
      </div>
      <div class="concept-img">
        <img src="img/IMG_1414.jpg">
        <img src="img/IMG_1415.jpg">
      </div>
    </div>
  </div>
  <div class="flex">
    <h1 class="big-title">MENU</h1>
    <div class="menu-card">
      <img src="img/S__37855248.jpg" id="normal-img">
      <div class="menu-content" id="content1">
        <h1>・ジュージュー焼き</h1>
        <p>玉ねぎ、長ネギ、豚肉を煮込み、</p>
        <p>熱々の南部鉄器に乗せ、</p>
        <p>溶き卵をかけた料理です。</p>
      </div>
      <img src="img/S__37855248.jpg" id="response-img">
    </div>
    <div class="menu-card">
      <div class="menu-content" id="content2">
        <h1>・深川丼</h1>
        <p>深川丼はアオヤギを使った</p>
        <p>当店自慢の下町・深川の伝統食</p>
        <p>文献に残る明治初期の</p>
        <p>深川丼を再現しました。</p>
      </div>
      <img src="img/of6028b569ab05b44cb7b26df01fd8f6c_73073146_210815.jpg">
    </div>
    <a href="/menu" class="btn btn-border">メニューへ</a>
  </div>
  <div class="access">
    <h1 class="big-title">ACCESS</h1>
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
  <div class="flex">
    <h1 class="big-title">CONTACT</h1>
    <div class="contact">
      <div class="contact-box">
        <p>宴会やお席のご予約の</p>
        <p>ご相談は電話にて</p>
        <p>承ります</p>
      </div>
      <div class="num-box">
        <img src="img/icon_059850_256.png" alt="">
        <a href="tel:03-3642-4939">03-3642-4939</a>
      </div>
    </div>
  </div>
</div>
@endsection
