@extends('layouts.app')
<style type="text/css">
    .feature-img img {
        width: 100%;
        text-align: center;
    }
    .text-area {
        border-bottom: 1px solid #f86629;
        margin-bottom: 20px;
    }
    .navbar-default {
        background-color: #f86629 !important;
    }
    .navbar-default .navbar-nav>li>a, .navbar-default .navbar-brand {
        color: #fff !important;
    }
</style>
@section('content')

<div class="container">
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </nav>
        <div class="feature-img col-md-6">
            <img src="{{asset('images/food1.jpg')}}">
            <div class="text-area">
                <h4>Jean Joun</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <p>Favorite food</p>
            </div>
        </div>
        <div class="feature-img col-md-6">
            <img src="{{asset('images/food2.jpg')}}">
            <div class="text-area">
                <h4>Jean Joun</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <p>Favorite food</p>
            </div>
        </div>
        <div class="feature-img col-md-4">
            <img src="{{asset('images/food3.jpg')}}">
            <div class="text-area">
                <h4>Jean Joun</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <p>Favorite food</p>
            </div>
        </div>
        <div class="feature-img col-md-4">
            <img src="{{asset('images/food4.jpg')}}">
            <div class="text-area">
                <h4>Jean Joun</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <p>Favorite food</p>
            </div>
        </div>
        <div class="feature-img col-md-4">
            <img src="{{asset('images/food1.jpg')}}">
            <div class="text-area">
                <h4>Jean Joun</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <p>Favorite food</p>
            </div>
        </div>
        <div class="feature-img col-md-4">
            <img src="{{asset('images/food3.jpg')}}">
            <div class="text-area">
                <h4>Jean Joun</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <p>Favorite food</p>
            </div>
        </div>
        <div class="feature-img col-md-4">
            <img src="{{asset('images/food4.jpg')}}">
            <div class="text-area">
                <h4>Jean Joun</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <p>Favorite food</p>
            </div>
        </div>
        <div class="feature-img col-md-4">
            <img src="{{asset('images/food1.jpg')}}">
            <div class="text-area">
                <h4>Jean Joun</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <p>Favorite food</p>
            </div>
        </div>
        <div class="feature-img col-md-6">
            <img src="{{asset('images/food1.jpg')}}">
            <div class="text-area">
                <h4>Jean Joun</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <p>Favorite food</p>
            </div>
        </div>
        <div class="feature-img col-md-6">
            <img src="{{asset('images/food2.jpg')}}">
            <div class="text-area">
                <h4>Jean Joun</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <p>Favorite food</p>
            </div>
        </div>
    </div>
</div>
@endsection