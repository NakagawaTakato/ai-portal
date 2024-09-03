@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="container">
    <header class="container-always_header">
        <ul class="container-always_header-ul">
            <li class="container-always_header-li"><a href="/shop_all" class="container-group-text_one">iMPRESS Inc</a></li>
            <li class="container-always_header-li"><a href="/register" class="container-group-text_two">ホーム</a></li>
            <li class="container-always_header-li"><a href="/login" class="container-group-text_three">会社情報</a></li>
            <li class="container-always_header-li"><a href="/login" class="container-group-text_four">お問い合わせ</a></li>
        </ul>
        <nav>
            <ul class="container-always_header-nav-ul">
                <li class="container-always_header-nav-ul-li"><a href="/" class="container-always_header-nav-ul-li-text">サービス</a></li>
                <li class="container-always_header-nav-ul-li"><a href="/" class="container-always_header-nav-ul-li-text">カテゴリ</a></li>
                <li class="container-always_header-nav-ul-li"><a href="/" class="container-always_header-nav-ul-li-text">お問い合わせ</a></li>
                <li class="container-always_header-nav-ul-li"><a href="/" class="container-always_header-nav-ul-li-text">ユーザー</a></li>
                <li class="container-always_header-nav-ul-li"><a href="/" class="container-always_header-nav-ul-li-text">ログアウト</a></li>
                <li class="container-always_header-nav-ul-li"><a href="/" class="container-always_header-nav-ul-li-text">aaa</a></li>
            </ul>
        </nav>
    </header>

    <div class="container-box">

        <h2 class="container-h1">iMPRESS AI Portal site</h2>

        <div class="container-backgroudcolor"></div>

        <div class="container-space"></div>

        <main class="container-main">
            <section class="container-main-section_one">
                <img class="container-main-section-img" src="{{ asset('img/roboimage_last.png') }}" alt="">
                <h3 class="container-main-h3">iMPRESS-AI Chatbot</h3>
                <p class="container-main-text">iMPRESSパッケージユーザー様向けの</br>ユーザーサポートチャットボットです</p>
            </section>

            <section class="container-main-section_two">
                <img class="container-main-section-img" src="img/roboimage_sub.png" alt="">
                <h3 class="container-main-h3">Chatbot for guest</h3>
                <p class="container-main-text">ゲストユーザー様にiMPRESSの製品情報</br>などを私が詳しくご案内いたします！</p>
            </section>
        </main>

        <aside class="aside">
            <input type="aside-text"></input>
            <input class="aside-btn" type="submit" value="検索">
        </aside>

        <div>前へ</div>
        <div>1</div>
        <div>次へ</div>

    </div>

    <footer class="container-always_footer">
        <p>Copyright &copy; 2024 iMPRESS Inc.</p>
    </footer>


</div>
@endsection
