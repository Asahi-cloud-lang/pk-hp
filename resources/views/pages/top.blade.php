@extends('layouts.base')

@section('title','トップ')

@section('content')

  <!-- home -->
  <section class="home">
    <div class="home-bg">
      <div class="home-content-lead">
        <h1>新人フリーランスが</h1>
        <h1><span>活きる</span>IT業界を</h1>
        <h1>目指して</h1>
      </div>
      <div class="home-logo">
        <img src="{{ asset('images/logo.png') }}" alt="logo">
      </div>
    </div>
    <nav class="home-gnav" class="fixed">
      <ul class="home-gnav-list">
        <li class="home-gnav-item">
          <a href="#">HOME<br><span>ホーム</span></a>
        </li>
        <li class="home-gnav-item">
          <a href="#">FREELANCE<br><span>フリーランス様へ</span></a>
        </li>
        <li class="home-gnav-item">
          <a href="#">COMPANY<br><span>企業様へ</span></a>
        </li>
        <li class="home-gnav-item">
          <a href="#">NEWS<br><span>新着情報</span></a>
        </li>
        <li class="home-gnav-item">
          <a href="#">PRODUCTION<br><span>制作実績</span></a>
        </li>
      </ul>
    </nav>
  </section>
  <!-- /.home -->

  <!-- recommend-user -->
  <section class="recommend-user">
    <div class="recommend-user-bg">
      <div class="recommend-user-content">
        <h1 class="recommend-user-content-title">
          FREELANCE<span>フリーランス様へ</span>
        </h1>
        <ul class="recommend-user-content-item">
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
        </ul>
        <div class="recommend-user-content-link">
          <a href="#">フリーランス様ページへ<span>→</span></a>
        </div>
      </div>
    </div>
  </section>
  <!-- /.recommend-user -->

  <!-- recommend-company -->
  <section class="recommend-company">
    <div class="recommend-company-bg">
      <div class="recommend-company-content">
        <h1 class="recommend-company-content-title">
          COMPANY<span>企業様へ</span>
        </h1>
        <ul class="recommend-company-content-item">
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
        </ul>
        <div class="recommend-company-content-link">
          <a href="#">企業様ページへ<span>→</span></a>
        </div>
      </div>
    </div>
  </section>
  <!-- /.recommend-company -->

  <!-- info -->
  <section class="info">
    <div class="info-bg">
      <div class="info-content">
        <div class="news-content info-content__width">
          <h1 class="news-content-title" colspan="2">NEWS<span>新着情報</span></h1>
          <ul class="news-content-item-list">
            <li>
              <div class="news-content-date"><span>2021</span><br>06.01</div>
              <div class="news-content-item">合同会社プログラム・キッチン設立</div>
            </li>
            <li>
              <div class="news-content-date"><span>2021</span><br>06.01</div>
              <div class="news-content-item">合同会社プログラム・キッチン設立</div>
            </li>
            <li>
              <div class="news-content-date"><span>2021</span><br>06.01</div>
              <div class="news-content-item">合同会社プログラム・キッチン設立</div>
            </li>
            <li>
              <div class="news-content-date"><span>2021</span><br>06.01</div>
              <div class="news-content-item">合同会社プログラム・キッチン設立</div>
            </li>
          </ul>
        </div>
        <div class="result-content info-content__width">
          <h1 class="result-content-title">
            PRODUCTION<span>制作実績</span>
          </h1>
          <ul class="result-content-item">
            <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
            <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
            <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
            <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
            <li><img src="{{ asset('images/home-bg.png') }}" alt="#"></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- /.info -->

  <!-- .contact -->
  <section class="contact">
    <div class="contact-bg">
      <table class="contact-form-table">
        <thead>
          <th class="contact-form-title" colspan="2">CONTACT<span>問い合わせ</span></th>
        </thead>
        <tbody>
          <tr>
            <th class="contact-form-item-first">企業名</th>
            <td>
              <input type="text" name="company-name" class="contact-form-area" required>
            </td>
          </tr>
          <tr>
            <th class="contact-form-item">お名前<span>*</span></th>
            <td>
              <input type="text" name="name" class="contact-form-area" required>
            </td>
          </tr>
          <tr>
            <th class="contact-form-item">メールアドレス<span>*</span></th>
            <td>
              <input type="text" name="email" class="contact-form-area" required>
            </td>
          </tr>
          <tr>
            <th class="contact-form-item">フリーランス/企業<span>*</span></th>
            <td>
              <input type="text" name="type" class="contact-form-area" required>
            </td>
          </tr>
          <tr>
            <th class="contact-form-item-last">お問い合わせ内容<span>*</span></th>
            <td>
              <textarea name="content" rows="10" class="contact-form-area" valign="top"></textarea>
            </td>
          </tr>
          <tr>
            <td colspan="2" class="contact-form-btn">
              <button>
                <a href="#" >問い合わせ内容送信<span>→</span></a>
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  <!-- /.contact -->
@endsection