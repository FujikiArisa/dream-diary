@extends('layouts.layout')

@section('title','ログイン')

@section('end_head')
<link rel="stylesheet" href="{{ asset('static/css/login.css') }}">
@endsection

@section('h1')
<img src="/static/images/login/title-sp.svg" alt="">
@endsection

@section('h2')
<img src="/static/images/login/title.svg" alt="">
@endsection

@section('content')
<main>
    <h6 id="logo_login"><img src="/static/images/common/logo.svg" alt=""></h6>
    <form action="{{ route('submit') }}" method="post">
        @csrf
        <div>
            <input type="email" name="email" placeholder="メールアドレスを入力">
        </div>
        <div>
            <input type="password" name="password" placeholder="パスワードを入力">
        </div>
        <div id="forgot">
            <a href="#">パスワードを忘れた方はこちら</a>
        </div>
        <div>
            <button type="submit">ログイン</button>
        </div>
    </form>
    <a href="#">新規登録</a>
</main>
@endsection