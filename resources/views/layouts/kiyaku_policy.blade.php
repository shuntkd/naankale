<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-reboot.css') }}" media="screen,print" />
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Kosugi+Maru" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" media="screen,print" />

	</head>
	<body>

			
			
		<div class="commom_container">
			<header>
				<div>
					<ul class="menu">
						<li><a href="{{route('home')}}">ホーム</a></li>
						<li><a href="/#concept">コンセプト</a></li>
						<li><a href="">ログイン</a></li>
					</ul>
				</div>
            </header>
			<div class="contents_container">

				<section class="content">
					<div class="content__title">
						<h2>@yield('title')</h2>
						<img src="{{ asset('img/top/concept_1.png')}}" alt="image" class="left"/>
						<img src="{{ asset('img/top/concept_2.png')}}" alt="image" class="right"/>
					</div>

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