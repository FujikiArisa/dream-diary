@extends('layouts.main')

@section('title','検索')

@section('end_head')
<link rel="stylesheet" href="{{ asset('static/css/search.css') }}">
@endsection

@section('h1')
<img src="/static/images/search/title-sp.svg" alt="">
@endsection

@section('h2')
<img src="/static/images/search/title.svg" alt="">
@endsection

@section('content')
<main>
    <form>
        @csrf
        <div class="search">
            <p>キーワード入力</p>
            <input type="search" placeholder="検索">
        </div>
        <!-- 検索 end -->

        <div class="filter">
            <p>しぼり込み</p>
            <!-- しぼり込み end -->
            <div>
                <div class="feel">
                    <p>夢タイプ</p>
                    <div>
                        <label for="good">
                            <img src="/static/images/common/star/good.svg" alt="">
                            <input type="checkbox" id="good" name="feel" value="1" checked>
                        </label>
                        <label for="normal">
                            <img src="/static/images/common/star/normal.svg" alt="">
                            <input type="checkbox" id="normal" name="feel" value="1" checked>
                        </label>
                        <label for="bad">
                            <img src="/static/images/common/star/bad.svg" alt="">
                            <input type="checkbox" id="bad" name="feel" value="1" checked>
                        </label>
                    </div>
                </div>
                <!-- 夢のタイプ end -->
                <div class="heart">
                    <label for="favorite-on">
                        <i class="fa-solid fa-heart"></i>
                        <input type="checkbox" name="favorite" id="favorite-on" checked>
                    </label>
                    <label for="favorite-off">
                        <i class="fa-solid fa-heart"></i>
                        <input type="checkbox" name="favorite" id="favorite-off" checked>
                    </label>
                </div>
                <!-- お気に入り end -->
            </div>
        </div>

        <div class="sort">
            <p>ならび替え</p>
            <select name="sort" id="">
                <option value="1">新しい順</option>
                <option value="2">古い順</option>
                <option value="3">お気に入り</option>
                <option value="4">ランダム</option>
            </select>
            <!-- ならび替え end -->
        </div>
        <button type="submit">検索</button>
                <!-- 検索ボタン end -->
    </form>
    
</main>

@endsection