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
		@yield('js')
        
        <script>
            window.noImagePath = "{{ asset('img/result/noImage.png')}}";
        </script>

	</head>
	<body>

			
			
		<div class="commom_container">
			<header>
                @yield('header')
            </header>

			@yield('content')

			<footer>
					<ul>
						<li><a href="#kiyaku" class="kiyakuink">利用規約</a></li>
						<li><a href="#praivacy" class="praivacyLink">プライバシーポリシー</a></li>
					</ul>
					<p>© Copyright 2019 ナンを食べに行こう All rights reserved.</p>		
			</footer>
		</div>
	</body>
</html>

