@extends('layouts.master')

@section('js')



@endsection('js')

@section('title',"お店をさがす")

@section('content')
                
    <ul class="thumbnail">
    @for($i = 0; $i < count($array_result['rest']); $i++)
        @if($array_result['rest'][$i]['image_url']['shop_image1'])
            <?php $img_url = $array_result['rest'][$i]['image_url']['shop_image1'];?>
        @elseif($array_result['rest'][$i]['image_url']['shop_image2'])
            <?php $img_url = $array_result['rest'][$i]['image_url']['shop_image1']; ?>
        @else
            <?php $img_url = asset('img/result/noImage.png'); ?>
        @endif
        <?php
            $img = \Image::make($img_url);
            $img->crop(477,477);

        ?>
        <li>
            <a href="{{route('shop',['shop_content' => $array_result['rest'][$i],'freeword'=>$freeword])}}">
                <div class="shopImg">
                    <img src={{$img_url}} class="thumb" alt="img">
                </div>
                <div class="shopName">
                    <p>
                        {{$array_result['rest'][$i]['name']}}<br>
                        {{$array_result['rest'][$i]['access']['station']}}
                    </p>
                </div>
            </a>
        </li>
    @endfor
    </ul>

@endsection('content')