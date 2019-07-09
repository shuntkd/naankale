@extends('layouts.master')

@section('js')



@endsection('js')

@section('content')

<div class="hero">
				<div class="searchBox">
					<form action="{{route('result')}}" method="GET" >
						<div class="searchBox__input"><input type="text" name="freeword" id="freeword" placeholder="地域を入力して検索"/></div>
						<i class="searchBox__submit"><input type="submit" id="submit" value="&#xf002"/></i>
					</form>
				</div>
					<a href="#concept" class="heroConcept">
							<p>コンセプト</p>
					</a>
			</div>

			

			<div class="contents_container">

				<section class="content">
					<div class="content__title">
						<h2>ナン好きがよく行くお店</h2>
						<p>どこに行けば良いかわからない人にオススメ</p>
						<img src="{{ asset('img/top/shop_1.png') }}" alt="image" class="left"/>
						<img src="{{ asset('img/top/shop_2.png') }}" alt="image" class="right"/>
					</div>
	
					<ul class="multiple-items">
					@for($i = 0; $i < count($array_likes['rest']); $i++)

						@if($array_likes['rest'][$i]['image_url']['shop_image1'])
							<?php $img_url = $array_likes['rest'][$i]['image_url']['shop_image1'];?>
						@elseif($array_likes['rest'][$i]['image_url']['shop_image2'])
							<?php $img_url = $array_likes['rest'][$i]['image_url']['shop_image1']; ?>
						@else
							<?php $img_url = asset('img/result/noImage.png'); ?>
						@endif

						<li>
							<a href="{{route('shop',['shop_content' => $array_likes['rest'][$i]])}}">
								<div class="swiper-slide"><img src="{{$img_url}}" alt="image"></div>
								<div class="shopName">
										<img src="{{ asset('img/top/shop_bk.png') }}" alt="image">
										<p>
											{{$array_likes['rest'][$i]['name']}}<br>
											{{$array_likes['rest'][$i]['access']['station']}}
										</p>
								</div>
							</a>
						</li>
					@endfor
					</ul>
				</section>


				<section class="content">
					
					<div class="content__title">
						<a id="concept"><h2>コンセプト</h2></a>
						<p>こんな方のためのサービスです</p>
						<img src="{{ asset('img/top/concept_1.png') }}" alt="image" class="left"/>
						<img src="{{ asset('img/top/concept_2.png') }}" alt="image" class="right"/>
					</div>
						
					<div class="conceptContent">
						<div>
							<h3>1 なんか辛そう</h3>
							<p>辛さを調節できる店舗がほとんどです。ぜひ勇気を出して行ってみてください</p>
							<img src="{{ asset('img/top/content_1_1.png') }}" alt="image" class="sub"/>
						</div>
						<div>
							<img src="{{ asset('img/top/content_1_2.png') }}" alt="image"/>	
						</div>
					</div>

					<div class="conceptContent_reverce">
						<div>
							<h3>2 ちょっと入りづらい</h3>
							<p>私も最初はそうでした。一度行ってみれば気にならなくなりますし、意外とたくさん人が来ていることに驚くと思います。それだけで行かないなんてもったいない！！</p>
							<img src="{{ asset('img/top/content_2_2.png') }}" alt="image" class="sub"/>								
						</div>
						<div>
							<img src="{{ asset('img/top/content_2_1.png') }}" alt="image"/>
						</div>
					</div>

					<div class="conceptContent">
						<div>
							<h3>3 どこに行けばいいの</h3>
							<p>そんな方の背中を押すために、このサービスを作りました。意外とたくさんお店があるので、近くのお店に行ってみてくださいね。</p>													
							<img src="{{ asset('img/top/content_3_2.png') }}" alt="image" class="sub_2"/>
						</div>
						<div>
							<img src="{{ asset('img/top/content_3_1.png') }}" alt="image"/>
						</div>
					</div>
					<p>
					“できたてのナン”の美味しさに感動して、なんでもっと早くいかなかったんだろう<br>
					私みたいに食わず嫌いをしている方もきっといるはず<br>
					そんな想いから作ったサービスです。
					</p>
					<div class="btn">
						<a href="#" class="square_btn">近くのお店をさがしてみる</a>
					</div>			
				</section>

			</div>


@endsection('content')
