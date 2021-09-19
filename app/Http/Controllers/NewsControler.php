<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsControler extends Controller
{
    public function index() {
        $datas = [
            '2021年3月、白河4丁目からお隣の三好4丁目に移転しました。',
            'これからもご愛顧賜ります様お願い申し上げます。'
        ];
        $twenty = [
            '日頃よりご来店下さるお客様に支えられ、2021年6月3日で深川亭は20周年を迎える事ができました。',
            '「初心忘るべからず」の気持ちを忘れる事なくスタッフ一同益々精進して参りますので',
            'これからもどうぞよろしくお願い申し上げます。'
        ];
        $colona = [
            '緊急事態措置期間中の営業時間',
            'ランチ　11:30〜14:00 ',
            '(ラストオーダー13:45)',
            'ディナー　17:30〜20:00',
            '(ラストオーダー19:30)',
            '⭐️お酒類のご提供は中止しております。',
            '⭐️本日分売切れ次第閉店させて頂きます。',
            '⭐️ディナータイムはテイクアウト賜ります。',
        ];
        return view('news',compact('datas','twenty','colona'));
    }
}
