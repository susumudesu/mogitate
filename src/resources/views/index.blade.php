@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="mogitate__content">
    <div class="sub-header">
        @if (session('message'))
        <div class="sub-header__title">
            <h2>{{ session('message') }}</h2>
        </div>
        @endif
        <nav>
            <ul class="sub-header__nav">
                <li class="sub-header__nav--item">
                    <a class="sub-header__nav--link" href="/products/register">+商品を追加</a>
                </li>
            </ul>
        </nav>
    </div>
    <form class="search-form" action="/products/search" method="get">
        @csrf
        <div class="search-form__item">
            <input class="search-form__item-input" type="text" name="name" placeholder="商品名で検索" value="{{ old('name') }}" />
        </div>
        <div class="search-form__button">
            <button class="search-form__button-submit" type="submit">検索</button>
        </div>
    </form>
</div>

@endsection