@extends('layouts.app')
<style type="text/css">
    .feature-img img {
        width: 100%;
        text-align: center;
    }
    .text-area {
        border-bottom: 1px solid #f86629;
        margin-bottom: 20px;
        min-height: 113px;
    }
    .navbar-default {
        background-color: #f86629 !important;
    }
    .navbar-default .navbar-nav>li>a, .navbar-default .navbar-brand {
        color: #fff !important;
    }
    .navbar {
        min-height: 57px !important;
    }
    .social-icons {
        font-size: 17px;
    }
    .social-icons a{
        color: #636b6f;
        margin-right: 10px;
    }
    .social-icons .btn-group a{
        margin-right: 0;
    }
    .social-icons a:hover{
        color: #f86629;
    }
    .social-icons a:active{
        color: #f86629;
    }
    .shop-area {
        width: 30px;
        margin-top: -34px;
        margin-right: 5px;
        border-radius: 50%;
        border: 1px solid #f86629;
    }
    .shop-area a img{
        border-radius: 50%;
    }
</style>
@section('content')

<div class="container">
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Khmer Food</li>
            </ol>
        </nav>
        <div class="feature-img col-md-6">
            <img src="{{asset('images/food1.jpg')}}">
            <div class="text-area">
                <h4>Jean Joun</h4>
                <div class="shop-area pull-right">
                    <abbr title="JLC">
                        <a href="javascript:void(0)">
                            <img src="{{asset('images/shop_logo.jpg')}}"/>
                        </a>
                    </abbr>
                </div>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <div class="social-icons">
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-thumbs-up"></i>
                    </a>
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-comment"></i>
                    </a>
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-share-square"></i>
                    </a>
                    <div class="btn-group pull-right">
                        <a href="javascript:void(0)" class="btn dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-ellipsis-h"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><a tabindex="-1" href="#"><i class="far fa-bookmark"></i>&nbsp;Save this food</a></li>
                            <li><a tabindex="-1" href="#"><i class="far fa-comment-dots"></i>&nbsp;Give feedback</a></li>
                            <li class="divider"></li>
                            <li> <a tabindex="-1" href="#"><i class="far fa-flag"></i>&nbsp;Report</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-img col-md-6">
            <img src="{{asset('images/food2.jpg')}}">
            <div class="text-area">
                <h4>Jean Joun</h4>
                <div class="shop-area pull-right">
                    <abbr title="JLC">
                        <a href="javascript:void(0)">
                            <img src="{{asset('images/shop_logo.jpg')}}"/>
                        </a>
                    </abbr>
                </div>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <div class="social-icons">
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-thumbs-up"></i>
                    </a>
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-comment"></i>
                    </a>
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-share-square"></i>
                    </a>
                    <div class="btn-group pull-right">
                        <a href="javascript:void(0)" class="btn dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-ellipsis-h"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><a tabindex="-1" href="#"><i class="far fa-bookmark"></i>&nbsp;Save this food</a></li>
                            <li><a tabindex="-1" href="#"><i class="far fa-comment-dots"></i>&nbsp;Give feedback</a></li>
                            <li class="divider"></li>
                            <li> <a tabindex="-1" href="#"><i class="far fa-flag"></i>&nbsp;Report</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-img col-md-4">
            <img src="{{asset('images/food3.jpg')}}">
            <div class="text-area">
                <h4>Jean Joun</h4>
                <div class="shop-area pull-right">
                    <abbr title="JLC">
                        <a href="javascript:void(0)">
                            <img src="{{asset('images/shop_logo.jpg')}}"/>
                        </a>
                    </abbr>
                </div>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <div class="social-icons">
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-thumbs-up"></i>
                    </a>
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-comment"></i>
                    </a>
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-share-square"></i>
                    </a>
                    <div class="btn-group pull-right">
                        <a href="javascript:void(0)" class="btn dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-ellipsis-h"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><a tabindex="-1" href="#"><i class="far fa-bookmark"></i>&nbsp;Save this food</a></li>
                            <li><a tabindex="-1" href="#"><i class="far fa-comment-dots"></i>&nbsp;Give feedback</a></li>
                            <li class="divider"></li>
                            <li> <a tabindex="-1" href="#"><i class="far fa-flag"></i>&nbsp;Report</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-img col-md-4">
            <img src="{{asset('images/food4.jpg')}}">
            <div class="text-area">
                <h4>Jean Joun</h4>
                <div class="shop-area pull-right">
                    <abbr title="JLC">
                        <a href="javascript:void(0)">
                            <img src="{{asset('images/shop_logo.jpg')}}"/>
                        </a>
                    </abbr>
                </div>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <div class="social-icons">
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-thumbs-up"></i>
                    </a>
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-comment"></i>
                    </a>
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-share-square"></i>
                    </a>
                    <div class="btn-group pull-right">
                        <a href="javascript:void(0)" class="btn dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-ellipsis-h"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><a tabindex="-1" href="#"><i class="far fa-bookmark"></i>&nbsp;Save this food</a></li>
                            <li><a tabindex="-1" href="#"><i class="far fa-comment-dots"></i>&nbsp;Give feedback</a></li>
                            <li class="divider"></li>
                            <li> <a tabindex="-1" href="#"><i class="far fa-flag"></i>&nbsp;Report</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-img col-md-4">
            <img src="{{asset('images/food1.jpg')}}">
            <div class="text-area">
                <h4>Jean Joun</h4>
                <div class="shop-area pull-right">
                    <abbr title="JLC">
                        <a href="javascript:void(0)">
                            <img src="{{asset('images/shop_logo.jpg')}}"/>
                        </a>
                    </abbr>
                </div>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <div class="social-icons">
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-thumbs-up"></i>
                    </a>
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-comment"></i>
                    </a>
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-share-square"></i>
                    </a>
                    <div class="btn-group pull-right">
                        <a href="javascript:void(0)" class="btn dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-ellipsis-h"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><a tabindex="-1" href="#"><i class="far fa-bookmark"></i>&nbsp;Save this food</a></li>
                            <li><a tabindex="-1" href="#"><i class="far fa-comment-dots"></i>&nbsp;Give feedback</a></li>
                            <li class="divider"></li>
                            <li> <a tabindex="-1" href="#"><i class="far fa-flag"></i>&nbsp;Report</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-img col-md-4">
            <img src="{{asset('images/food3.jpg')}}">
            <div class="text-area">
                <h4>Jean Joun</h4>
                <div class="shop-area pull-right">
                    <abbr title="JLC">
                        <a href="javascript:void(0)">
                            <img src="{{asset('images/shop_logo.jpg')}}"/>
                        </a>
                    </abbr>
                </div>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <div class="social-icons">
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-thumbs-up"></i>
                    </a>
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-comment"></i>
                    </a>
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-share-square"></i>
                    </a>
                    <div class="btn-group pull-right">
                        <a href="javascript:void(0)" class="btn dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-ellipsis-h"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><a tabindex="-1" href="#"><i class="far fa-bookmark"></i>&nbsp;Save this food</a></li>
                            <li><a tabindex="-1" href="#"><i class="far fa-comment-dots"></i>&nbsp;Give feedback</a></li>
                            <li class="divider"></li>
                            <li> <a tabindex="-1" href="#"><i class="far fa-flag"></i>&nbsp;Report</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-img col-md-4">
            <img src="{{asset('images/food4.jpg')}}">
            <div class="text-area">
                <h4>Jean Joun</h4>
                <div class="shop-area pull-right">
                    <abbr title="JLC">
                        <a href="javascript:void(0)">
                            <img src="{{asset('images/shop_logo.jpg')}}"/>
                        </a>
                    </abbr>
                </div>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <div class="social-icons">
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-thumbs-up"></i>
                    </a>
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-comment"></i>
                    </a>
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-share-square"></i>
                    </a>
                    <div class="btn-group pull-right">
                        <a href="javascript:void(0)" class="btn dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-ellipsis-h"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><a tabindex="-1" href="#"><i class="far fa-bookmark"></i>&nbsp;Save this food</a></li>
                            <li><a tabindex="-1" href="#"><i class="far fa-comment-dots"></i>&nbsp;Give feedback</a></li>
                            <li class="divider"></li>
                            <li> <a tabindex="-1" href="#"><i class="far fa-flag"></i>&nbsp;Report</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-img col-md-4">
            <img src="{{asset('images/food1.jpg')}}">
            <div class="text-area">
                <h4>Jean Joun</h4>
                <div class="shop-area pull-right">
                    <abbr title="JLC">
                        <a href="javascript:void(0)">
                            <img src="{{asset('images/shop_logo.jpg')}}"/>
                        </a>
                    </abbr>
                </div>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <div class="social-icons">
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-thumbs-up"></i>
                    </a>
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-comment"></i>
                    </a>
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-share-square"></i>
                    </a>
                    <div class="btn-group pull-right">
                        <a href="javascript:void(0)" class="btn dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-ellipsis-h"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><a tabindex="-1" href="#"><i class="far fa-bookmark"></i>&nbsp;Save this food</a></li>
                            <li><a tabindex="-1" href="#"><i class="far fa-comment-dots"></i>&nbsp;Give feedback</a></li>
                            <li class="divider"></li>
                            <li> <a tabindex="-1" href="#"><i class="far fa-flag"></i>&nbsp;Report</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-img col-md-6">
            <img src="{{asset('images/food1.jpg')}}">
            <div class="text-area">
                <h4>Jean Joun</h4>
                <div class="shop-area pull-right">
                    <abbr title="JLC">
                        <a href="javascript:void(0)">
                            <img src="{{asset('images/shop_logo.jpg')}}"/>
                        </a>
                    </abbr>
                </div>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <div class="social-icons">
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-thumbs-up"></i>
                    </a>
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-comment"></i>
                    </a>
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-share-square"></i>
                    </a>
                    <div class="btn-group pull-right">
                        <a href="javascript:void(0)" class="btn dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-ellipsis-h"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><a tabindex="-1" href="#"><i class="far fa-bookmark"></i>&nbsp;Save this food</a></li>
                            <li><a tabindex="-1" href="#"><i class="far fa-comment-dots"></i>&nbsp;Give feedback</a></li>
                            <li class="divider"></li>
                            <li> <a tabindex="-1" href="#"><i class="far fa-flag"></i>&nbsp;Report</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-img col-md-6">
            <img src="{{asset('images/food2.jpg')}}">
            <div class="text-area">
                <h4>Jean Joun</h4>
                <div class="shop-area pull-right">
                    <abbr title="JLC">
                        <a href="javascript:void(0)">
                            <img src="{{asset('images/shop_logo.jpg')}}"/>
                        </a>
                    </abbr>
                </div>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <div class="social-icons">
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-thumbs-up"></i>
                    </a>
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-comment"></i>
                    </a>
                    <span class="like-count">10</span>
                    <a href="javascript:void(0)">
                        <i class="far fa-share-square"></i>
                    </a>
                    <div class="btn-group pull-right">
                        <a href="javascript:void(0)" class="btn dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-ellipsis-h"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><a tabindex="-1" href="#"><i class="far fa-bookmark"></i>&nbsp;Save this food</a></li>
                            <li><a tabindex="-1" href="#"><i class="far fa-comment-dots"></i>&nbsp;Give feedback</a></li>
                            <li class="divider"></li>
                            <li> <a tabindex="-1" href="#"><i class="far fa-flag"></i>&nbsp;Report</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection