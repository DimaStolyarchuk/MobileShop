@extends('layout')

<body class="main-layout ">
<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
</div>

@include('header')
<section class="slider_section">
    <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="images/banner.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <span>Свіжі новини </span>
                        <h1>Снижки на деяки товари нашего магазину до 25%</h1>
                        <p>Також якщо ви постійний клієнт нашого магазину, для Вас будуть працювати додаткові знижки
                            <br>до 30% та 35%. Ми цінуюмо та шануємо наших постійних клієнтів та завжди раді їх бачити.
                            <br>Якщо ви один з них, то тисніть на кнопку "Купити"</p>
                        <a class="buynow" href="{{ route('action') }}">Купити</a>
                        <ul class="social_icon">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="images/banner.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <span>Інші новини </span>
                        <h1>На деякі товари працює акція "Бонус +"</h1>
                        <p>Акція "Бонус +" - При купівлі певного товару Ви отримуєте до нього аксесуар.
                            <br> Це чудовий бонус для наших постійних покупців
                            <br> Якщо Вас це зацікавило, на кнопку "Купити" </p>
                        <a class="buynow" href="{{ route('second_action') }}">Купити</a>
                        <ul class="social_icon">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
        </a>
    </div>
</section>

<div class="brand">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Сторінка Asus</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-bg">
        <div class="container">
            <div class="row">
                @foreach($dataAsuse as $dataAsus)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="{{ asset('storage/app/public/'. $dataAsus->image) }}" alt="img" />
                            <h3 class="entry-title"><a rel="bookmark">{{ $dataAsus->name }}</a></h3>
                            {{--                                           <h1><a class="red" href="{{ route('category', ['id' => $dataCategory->id]) }}" rel="bookmark">{{ $dataCategory->description }}</a></h1>--}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@include('second_header')



