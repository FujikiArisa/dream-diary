@extends('layouts.main')

@section('title','マイページ')

@section('end_head')
<link rel="stylesheet" href="{{ asset('static/css/mypage.css') }}">
@endsection

@section('h1')
<img src="/static/images/mypage/title-sp.svg" alt="">
@endsection

@section('h2')
<img src="/static/images/mypage/title.svg" alt="">
@endsection

@section('content')
<main>
    <div>
        <div id="user">
            <img src="/static/images/mypage/badge/large.svg" alt="">
            <div>
                <div>
                    <p>ふじき</p>
                    <ul>
                        <li>
                            <span class="material-symbols-outlined">mail</span>
                            fujiki@gmail.com
                        </li>
                        <li>
                            <span class="material-symbols-outlined">calendar_month</span>
                            2024.05.01から利用しています
                        </li>
                    </ul>
                </div>
                <a href="#">
                    アカウント設定
                </a>
            </div>
        </div>
        <!-- ユーザーの情報 end -->
        <div id="score">
            <div class="month">
                <a href="#">
                    <span class="material-symbols-outlined">arrow_back_ios</span>
                </a>
                <p>2024.05</p>
                <a href="#">
                    <span class="material-symbols-outlined">arrow_forward_ios</span>
                </a>
            </div>
            <!-- 日付 end -->
            <p>合計20コの夢を記録しました</p>
            <ul>
                <li>
                    <div>
                        <p>良い夢</p>
                        <span class="star"><img src="/static/images/mypage/star/good.svg" alt=""></span>
                    </div>
                    <p><strong>3</strong>/20</p>
                </li>
                <li>
                    <div>
                        <p>普通の夢</p>
                        <span class="star"><img src="/static/images/mypage/star/normal.svg" alt=""></span>
                    </div>
                    <p><strong>10</strong>/20</p>
                </li>
                <li>
                    <div>
                        <p>悪い夢</p>
                        <span class="star"><img src="/static/images/mypage/star/bad.svg" alt=""></span>
                    </div>
                    <p><strong>7</strong>/20</p>
                </li>
            </ul>
            <!-- 夢の数 end -->
            <div class="question">
                <p id="question_btn">?</p>
                <div>
                    <p>1ヶ月間で記録した夢の数に応じて<br>バッチをゲットできます。</p>
                    <p>バッジは毎月1日にリセットされます。</p>
                    <table>
                        <tr>
                            <td>1～3コ</td>
                            <td>子ひつじ</td>
                        </tr>
                        <tr>
                            <td>4～9</td>
                            <td>若ひつじ</td>
                        </tr>
                        <tr>
                            <td>10～19</td>
                            <td>大ひつじ</td>
                        </tr>
                        <tr>
                            <td>20～</td>
                            <td>夢ひつじ</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- クエスチョンボタン end -->
        </div>
    </div>
</main>

@endsection