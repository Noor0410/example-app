@extends('frontend.layouts.main')
@section('main-container')
    <main>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="t-shirt">
                <a href="{{url('/Contact')}}">
                    <img src="{{url('frontend/pictures/g1.png')}}" alt="T-Shirt 1">
                </a>
                <p>Red</p>
                <p>RS:1200</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="t-shirt">
                <a href="{{url('/Contact')}}">
                    <img src="{{url('frontend/pictures/g2.png')}}" alt="T-Shirt 2">
                </a>
                <p>Black</p>
                <p>RS:1200</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="t-shirt">
                <a href="{{url('/Contact')}}">
                    <img src="{{url('frontend/pictures/g3.png')}}" alt="T-Shirt 3">
                </a>
                <p>Yellow</p>
                <p>RS:1500</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="t-shirt">
                <a href="{{url('/Contact')}}">
                    <img src="{{url('frontend/pictures/g4.png')}}" alt="T-Shirt 4">
                </a>
                <p>Navy</p>
                <p>RS:1500</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="t-shirt">
                <a href="{{url('/Contact')}}">
                    <img src="{{url('frontend/pictures/g5.png')}}" alt="T-Shirt 5">
                </a>
                <p>Cream</p>
                <p>RS:1500</p>
            </div>
        </div>
    </div>
</div>

    </main>
    @endsection