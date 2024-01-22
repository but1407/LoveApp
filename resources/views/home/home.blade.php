@php
    $base_url = config('app.base_url');
@endphp

@extends('layouts.master')

@section('title')
    <title>Home Page</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('home/home.css') }}">
@endsection

@section('content')
    @include('home.components.slider', ['sliders' => $sliders])


    <section>
        <div class="container">
            <div class="row">
                @include('components.sidebar')
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        @include('home.components.feature_product')


                    </div><!--features_items-->

                    @include('home.components.category_tab')

                    @include('home.components.recommend_product')

                </div>
            </div>
        </div>x`
    </section>
@endsection

@section('js')
    <link rel="stylesheet" href="{{ asset('home/home.js') }}">
@endsection
