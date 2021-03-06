<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-reboot.css') }}" media="screen,print" />
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Kosugi+Maru" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset('js/slick-1.8.1/slick/slick.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('js/slick-1.8.1/slick/slick-theme.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" media="screen,print" />
		<!-- jQuery.jsの読み込み -->

		<link rel="stylesheet" href="https://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
		<script src="https://code.jquery.com/jquery-1.8.3.js" defer></script>
		<script type="text/javascript" src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" defer></script>
		<script type="text/javascript" src="{{ asset('js/slick-1.8.1/slick/slick.min.js') }}" defer></script>
		<script type="text/javascript" src="{{ asset('js/slick.js') }}" defer></script>
		<script type="text/javascript" src="{{ asset('js/smoothscroll.js') }}" defer></script>
		<script type="text/javascript" src="{{ asset('js/login.js') }}" defer></script>
		@yield('js')

        <script>
			var list_json =  [];
			var list_json = JSON.parse('{!! config('area_list') !!}');
			var list = [];
			for(var key in list_json){
				list.push(list_json[key]);
			}
		</script>
		<script type="text/javascript" src="{{ asset('js/autocomp.js') }}" defer></script>

	</head>
	<body>



		<div class="commom_container">
			@if(!Request::is('/'))
			<header>
				<div>
					<ul class="menu">
						<li><a href="{{route('home')}}">ホーム</a></li>
						<li><a href="/#concept">コンセプト</a></li>
						<li><a class="login" href="">ログイン</a></li>
					</ul>
				</div>
            </header>
			<div class="contents_container">

				<div class="js-modal"></div>
				<div class="js-window">
					@if(Auth::user())
					<div class="content__title">
						<h2>アカウント情報</h2>
						<img src="{{ asset('img/top/concept_1.png')}}" alt="image" class="left"/>
						<img src="{{ asset('img/top/concept_2.png')}}" alt="image" class="right"/>
					</div>
					<div class="account_profile">
						<img src="{{Auth::user()->picture}}" alt="image" />
						<p>{{Auth::user()->name}}</p>
					</div>
					<div class="btn">
						<a href="/auth/logout" class="square_btn">ログアウト</a>
					</div>
					@else

					<div class="content__title">
						<h2>ログインする</h2>
						<img src="{{ asset('img/top/concept_1.png')}}" alt="image" class="left"/>
						<img src="{{ asset('img/top/concept_2.png')}}" alt="image" class="right"/>
					</div>
					<a href="{{url('auth/google')}}">
						<div class="js-gbtn"></div>
					</a>
					@endif
				</div>

				<section class="content">
					<div class="content__title">
						<h2>@yield('title')</h2>
						<img src="{{ asset('img/top/concept_1.png')}}" alt="image" class="left"/>
						<img src="{{ asset('img/top/concept_2.png')}}" alt="image" class="right"/>
					</div>
					<div class="search">
						@if(!empty($freeword))
							<ul class="searchWord"><li><p>{{$freeword}}</p></li></ul>
						@endif
						<div class="searchBox">
                            <form id="searchForm" action="{{route('result')}}" method="GET">
									{{ csrf_field() }}
									<div class="searchBox__input"><input type="text" id="freeword" placeholder="地域を入力して検索"/></div>
									<div class="searchBox__submit"><input type="button" value="&#xf002"></div>
									<div class="searchBox__dumy"><input type="text" value="&#xf002"></div>
							</form>
						</div>
					</div>
			@endif

					@yield('content')
				</section>
			</div>


			<footer>
					<ul>
						<li><a href="{{route('kiyaku')}}" class="kiyakuink">利用規約</a></li>
						<li><a href="{{route('policy')}}" class="praivacyLink">プライバシーポリシー</a></li>
					</ul>
					<p>© Copyright 2019 ナンを食べに行こう All rights reserved.</p>
					<p>
						<a href="https://api.gnavi.co.jp/api/scope/" target="_blank">
						<img src="https://api.gnavi.co.jp/api/img/credit/api_155_20.gif" width="155" height="20" border="0" alt="グルメ情報検索サイト　ぐるなび">
						</a>
					</p>
			</footer>
		</div>
	</body>
</html>