@extends('layouts.master')

@section('js')

<script type="text/javascript" src="{{ asset('js/apiShop.js') }}" defer></script>

@endsection('js')

@section('header')

    <div>
        <ul class="menu">
            <li><a href="index.html">ホーム</a></li>
            <li><a href="">コンセプト</a></li>
            <li><a href="">ログイン</a></li>
        </ul>
    </div>

@endsection('header')

@section('content')

<div class="contents_container">

    <section class="content">
        <div class="content__title">
            <h2>詳細情報</h2>
            <img src="assets/img/top/concept_1.png" alt="image" class="left"/>
            <img src="assets/img/top/concept_2.png" alt="image" class="right"/>
        </div>
        <div class="search">
            <div class="searchBox">
                    <form method="get" action="#">
                        <div class="searchBox__input"><input type="text" placeholder="地域を入力して検索"></div>
                        <div class="searchBox__submit"><input type="submit" value="&#xf002"></div>
                    </form>
            </div>
        </div>
                                
        <div class="shopContents">
            <div class="shopContents__container">
                    <div class="shopImg"></div>
                    <div class="shopProfile">
                        <div class="shopName">
                        </div>
                        <div>
                            <div class="btn">
                                <a href="#" class="square_btn">よく行くよ！</a>
                            </div>
                        </div>									
                    </div>
                    <p class="gLink"></p>
            </div>

            <div class="shopContents__comment">
                <div class="content__title--small">
                    <h3>コメント</h3>
                    <img src="assets/img/top/concept_1.png" alt="image" class="left"/>
                    <img src="assets/img/top/concept_2.png" alt="image" class="right"/>
                </div>

                <ul class="commentList">
                    <li class="comment">
                        <div><img src="assets/img/shop/icon.png" alt="image"></div>
                        <p>コメントコメントコメントコメントコメントコメントコメント</p>
                    </li>
                    <li class="comment">
                        <div><img src="assets/img/shop/icon.png" alt="image"></div>
                        <p>コメントコメントコメントコメントコメントコメントコメント</p>
                    </li>
                    <li class="comment">
                        <div><img src="assets/img/shop/icon.png" alt="image"></div>
                        <p>コメントコメントコメントコメントコメントコメントコメント</p>
                    </li>
                </ul>
                <form action="" method="post">
                    <div class="submitComment">								
                        <div class="icon"><img src="assets/img/shop/icon.png" alt="image"></div>
                        <div class="commentBox">											
                            <p><input type="text" class="commentBox__input" placeholder="コメントを入力"></p>
                            <input type="submit" class="commentBox__submit" value="投稿">																								
                        </div>							
                    </div>
                </form>	
            </div>
        </div>
    </section>

    </div>

@encsection('content')