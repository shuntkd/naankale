@extends('layouts.master')


@section('title',"詳細情報")

@section('content')


                                
        <div class="shopContents">
            <div class="shopContents__container">
                    <div class="shopImg">
                        <img src="{{$img}}" alt="image">
                    </div>
                    <div class="shopProfile">
                        <div class="shopName">
                            <h3>{{$shopname}}</h3>
                            <p>{{$chiiki}}</p>
                        </div>
                        <!--<div>
                            <div class="btn">
                                <a href="" class="square_btn">よく行くよ！</a>
                            </div>
                        </div> 
                        -->	
                        @if(Auth::check())
                            @if(NULL !== App\Like::where(['guruid'=>$guruid])->first())
                                <form method="DELETE" action="{{route('likes.destroy',['guruid'=>$guruid])}}">  
                                @csrf
                                    
                                    <input name="user_id" type="hidden" value="{{Auth::user()->id}}">
                                    <button class="btn" type="submit">
                                        <p>よく行くよ！</p>
                                    </button>
                                </form>
                            @else
                                <form method="post" action="{{route('likes.store')}}">  
                                @csrf
                                    <input name="guruid" type="hidden" value="{{$guruid}}">
                                    <input name="user_id" type="hidden" value="{{Auth::user()->id}}">
                                    <button class="btn__untap" type="submit">
                                        <p>よく行く</p>
                                    </button>
                                </form>
                            @endif
                        @endif				
                    </div>
                    <p class="gLink">
                        <a href="{{$gurunabi}}">ぐるなびで詳しく見る→</a>
                    </p>
            </div>

            <div class="shopContents__comment">
                <div class="content__title--small">
                    <h3>コメント</h3>
                    <img src="{{ asset('img/top/concept_1.png')}}" alt="image" class="left"/>
                    <img src="{{ asset('img/top/concept_2.png')}}" alt="image" class="right"/>
                </div>

                <ul class="commentList">
                @if($comments!='')
                    @forelse($comments as $comment)
                        <li class="comment">
                            <div><img src="{{ asset('img/shop/icon.png')}}" alt="image"></div>
                            <p>{!! nl2br(e($comment->body)) !!}</p>
                        </li>
                    @empty
                        <li class="comment">
                            <div><img src="{{ asset('img/shop/icon.png')}}" alt="image"></div>
                            <p>コメントはまだありません</p>
                        </li>
                    @endforelse
                @else
                    <li class="comment">
                        <div><img src="{{ asset('img/shop/icon.png')}}" alt="image"></div>
                        <p>コメントはまだありません</p>
                    </li>
                @endif
                @if($comments!='')
                    {{ $comments->appends(request()->input())->links()}}
                @endif
                </ul>
                @if(Auth::check())
                <form action="{{route('comments.store')}}" method="post">
                @csrf
                    <div class="submitComment">								
                        <div class="icon"><img src="{{ Auth::user()->picture }}" alt="image"></div>
                        <div class="commentBox">
                            <input name="guruid" type="hidden" value="{{$guruid}}">	
                            <input name="user_id" type="hidden" value="{{Auth::user()->id}}">											
                            <p><input type="text" class="commentBox__input" name="body" placeholder="コメントを入力"></p>
                            <input type="submit" class="commentBox__submit" value="投稿">																								
                        </div>							
                    </div>
                </form>	
                @endif
            </div>
        </div>


@endsection('content')