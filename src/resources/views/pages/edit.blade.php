@extends('layouts.main')

@section('title','編集')

@section('end_head')
<link rel="stylesheet" href="{{ asset('static/css/editdiary.css') }}">
@endsection

@section('h1')
<img src="/static/images/editdiary/title-sp.svg" alt="">
@endsection

@section('h2')
<img src="/static/images/editdiary/title.svg" alt="">
@endsection

@section('content')

<main>
    <div>
        <img src="/static/images/newdiary/ringnote_01.svg" alt="">
        <form action="{{ route('edit.register', ['id' => $diary->id]) }}" method="post">
            @csrf
            <div id="when">
                <label for=""><span>Q.</span>いつ夢を見ましたか</label>
                <input type="date" name="when" value="{{ $diary->when->format('Y-m-d') }}">
            </div>
            <!-- いつ end -->
            <div id="feel">
                <label for=""><span>Q.</span>どんな気分でしたか</label>
                <div>
                    <label for="good">
                        <img src="/static/images/common/star/good.svg" alt="">
                        <input type="radio" id="good" name="feel" value="1" {{ $diary->isFeel(1) }}>
                        <p>良い夢</p>
                    </label>
                    <label for="normal">
                        <img src="/static/images/common/star/normal.svg" alt="">
                        <input type="radio" id="normal" name="feel" value="2" {{ $diary->isFeel(2) }}>
                        <p>普通の夢</p>
                    </label>
                    <label for="bad">
                        <img src="/static/images/common/star/bad.svg" alt="">
                        <input type="radio" id="bad" name="feel" value="3" {{ $diary->isFeel(3) }}>
                        <p>悪い夢</p>
                    </label>
                </div>
            </div>
            <!-- 気分 end -->
            <div id="detail">
                <label for=""><span>Q.</span>どんな内容でしたか</label>
                <input type="text" name="title" placeholder="タイトルを入力" value="{{ $diary->title }}">
                <textarea name="content" id="content" placeholder="内容を入力">{{ $diary->content }}</textarea>
            </div>
            <!-- タイトル・内容 end -->
            <div class="error">
                @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
            <!-- エラー文 end -->
            <div id="submit">
                <a href="{{ route('top') }}">キャンセル</a>
                <button type="submit">完了</button>
            </div>
            <!-- 完了ボタン end -->
        </form>
        <img src="/static/images/newdiary/ringnote_03.svg" alt="">
    </div>
</main>

@endsection