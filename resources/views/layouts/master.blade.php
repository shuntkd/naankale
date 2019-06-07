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

		<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
		<script src="http://code.jquery.com/jquery-1.8.3.js" defer></script>
		<script type="text/javascript" src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" defer></script>
		<script type="text/javascript" src="{{ asset('js/slick-1.8.1/slick/slick.min.js') }}" defer></script>
		<script type="text/javascript" src="{{ asset('js/slick.js') }}" defer></script>
		<script type="text/javascript" src="{{ asset('js/smoothscroll.js') }}" defer></script>
		<script type="text/javascript" src="{{ asset('js/login.js') }}" defer></script>
		@yield('js')
        
        <script>
			window.noImagePath = "{{ asset('img/result/noImage.png')}}";
			var list_json =  [];
			var list_json = JSON.parse('{!! $area_list !!}');
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
						<p>{{Auth::user()}}</p>
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
						<ul class="searchWord"></ul>
						<div class="searchBox">
							<form method="get" action="{{route('result')}}">
									<div class="searchBox__input"><input type="text" name="freeword" id="freeword" placeholder="地域を入力して検索"/></div>
									<div class="searchBox__submit"><input type="submit" value="&#xf002"></div>
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
			</footer>
		</div>
	</body>
</html>

