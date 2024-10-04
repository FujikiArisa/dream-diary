@extends('layouts.main')

@section('title','カレンダー')

@section('end_head')
<link rel="stylesheet" href="{{ asset('static/css/calendar.css') }}">
@endsection

@section('h1')
<img src="/static/images/calendar/title-sp.svg" alt="">
@endsection

@section('h2')
<img src="/static/images/calendar/title.svg" alt="">
@endsection

@section('content')
<main>
    <div>
        <div id="calendar">
            カレンダーを表示
        </div>
        <!-- カレンダー end -->
        <div class="diary">
            <img src="/static/images/common/star_chain/normal.svg" alt="">
            <div>
                <p>私はほかああその下宿がかりというはずのために受けたらです。</p>
                <p>欄をすれますものは大分前の多分なですで。よく大森さんに意味め多少混同にすれた悪口その人私か持とというお意味だっないんですから、
                    ある元来は私か癪徳義をあろて、向さんのものが学校のあなたがいくら実反抗と上げるて誰用をお評を見ようにけっしてお実在を通じべきですば、
                    いくらかつて発見があれますといなつもりをいれあり。
                    ある元来は私か癪徳義をあろて、向さんのものが学校のあなたがいくら実反抗と上げるて誰用をお評を見ようにけっしてお実在を通じべきですば、
                    いくらかつて発見があれますといなつもりをいれあり。
                </p>
            </div>
            <div>
                <p>2024.05.13</p>
                <div>
                    <span class="delete-btn"><i class="fa-solid fa-trash-can"></i></span>
                    <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
                    <label for="favorite">
                        <i class="fa-solid fa-heart"></i>
                        <input type="checkbox" name="favorite" id="favorite">
                    </label>
                </div>
            </div>
        </div>
        <!-- 夢日記 end -->
    </div>

    <section class="delete">
        <div>
            <p>日記を削除してよろしいですか？</p>
            <div>
                <p class="cancel">キャンセル</p>
                <button class="delete-btn-2">削除</button>
            </div>
        </div>
    </section>
    <!-- 削除確認画面 end -->
</main>

@endsection

