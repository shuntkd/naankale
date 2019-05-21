@extends('layouts.master')

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
                <h2>お店をさがす</h2>
                <img src="{{ asset('img/top/concept_1.png') }}" alt="image" class="left"/>
                <img src="{{ asset('img/top/concept_2.png') }}" alt="image" class="right"/>
            </div>


            <div class="search">
                <ul class="searchWord"></ul>
                <div class="searchBox">
                    <form method="get" action="#">
                            <div class="searchBox__input"><input type="text" name="freeword" id="freeword" placeholder="地域を入力して検索"/></div>
                            <div class="searchBox__submit"><input type="submit" value="&#xf002"></div>
                    </form>
                </div>
            </div>
                
            <ul class="thumbnail"></ul>
        </section>

    </div>
@endsection('content')