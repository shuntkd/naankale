@extends('layouts.master')

@section('js')

<script type="text/javascript" src="{{ asset('js/apiShop.js') }}" defer></script>

@endsection('js')

@section('title',"詳細情報")

@section('content')


                                
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
                    <img src="{{ asset('img/top/concept_1.png')}}" alt="image" class="left"/>
                    <img src="{{ asset('img/top/concept_2.png')}}" alt="image" class="right"/>
                </div>

                <ul class="commentList">
                    <li class="comment">
                        <div><img src="{{ asset('img/shop/icon.png')}}" alt="image"></div>
                        <p>コメントコメントコメントコメントコメントコメントコメント</p>
                    </li>
                    <li class="comment">
                        <div><img src="{{ asset('img/shop/icon.png')}}" alt="image"></div>
                        <p>コメントコメントコメントコメントコメントコメントコメント</p>
                    </li>
                    <li class="comment">
                        <div><img src="{{ asset('img/shop/icon.png')}}" alt="image"></div>
                        <p>コメントコメントコメントコメントコメントコメントコメント</p>
                    </li>
                </ul>
                <form action="" method="post">
                    <div class="submitComment">								
                        <div class="icon"><img src="{{ asset('img/shop/icon.png')}}" alt="image"></div>
                        <div class="commentBox">											
                            <p><input type="text" class="commentBox__input" placeholder="コメントを入力"></p>
                            <input type="submit" class="commentBox__submit" value="投稿">																								
                        </div>							
                    </div>
                </form>	
            </div>
        </div>


@endsection('content')