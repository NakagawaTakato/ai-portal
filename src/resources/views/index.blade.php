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
                <li class="container-always_header-nav-ul-li"><a href="/" class="container_one">サービス</a></li>
                <li class="container-always_header-nav-ul-li"><a href="/" class="container_two">カテゴリ</a></li>
                <li class="container-always_header-nav-ul-li"><a href="/" class="container_three">お問い合わせ</a></li>
                <li class="container-always_header-nav-ul-li"><a href="/" class="container_four">ユーザー</a></li>
                <li class="container-always_header-nav-ul-li"><a href="/" class="container_five">ログアウト</a></li>
                <li class="container-always_header-nav-ul-li"><a href="/" class="container_six">aaa</a></li>
            </ul>
        </nav>
    </header>

    <footer class="container-always_footer">
        <p>Copyright &copy; 2024 iMPRESS Inc.</p>
    </footer>

    <header>
    <h1>iMPRESS AI Portal site</h1>
    <nav>

    </nav>
    </header>

  <img src="images/top.png" alt="エドベース株式会社トップ画像">

  <main>
    <section>
      <h2>会社理念</h2>
      <h3>EdTechで人々に力を与えたい</h3>
      <p>自分の力を100%発揮できてない人はたくさんいると思います。本来持っているポテンシャルを我々のサービス/テクノロジーで開花させること。 </p>
      <p>眠っている才能を呼び覚まし、<strong>社会に貢献できる人材を創造すること。</strong>それが我々のミッションです。</p>
    </section>

    <section>
      <h2>自社プロダクト</h2>
      <p>開発・運営しているプロダクトです</p>

      <h3>ビジネスができるオンラインスクールのプラットフォーム</h3>
      <p>ただのeLearningサービスではありません。誰もがオンラインスクールをかんたんに運営することができます。講座を販売したり、サブスクリプションサービスを提供することができる今までにない教育プラットフォームです。</p>
      <p><a href="https://edbase.jp" target="_blank">https://edbase.jp</a></p>

      <h3>革新的テストの作成・結果の分析サービス</h3>
      <p>従来のテスト作成方法は面倒で修正が大変でした。Qeditorは革新的なテスト作成エディターを使って素早くテスト作成ができます。それだけではなく詳細な分析が可能。素早くクオリティの高いテスト作成のためのツールです。</p>
      <p><a href="https://qbase.biz" target="_blank">https://qbase.biz</a></p>
    </section>
  </main>

  <aside>
    <h2>Bunner</h2>
    <img src="images/banner.png" alt="">
  </aside>

  <footer>
    <p>エドベース株式会社</p>
  </footer>

</div>
@endsection
