@extends('frontend.layouts.main')
@section('main-container')

    <main>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="t-shirt">
                <a href="Contact.html">
                    <img src="{{url('frontend/pictures/sample1.png')}}" alt="T-Shirt 1">
                </a>
                <p>Plain black</p>
                <p>RS:1200</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="t-shirt">
                <a href="Contact.html">
                    <img src="{{url('frontend/pictures/sample2.png')}}" alt="T-Shirt 2">
                </a>
                <p>Plain  white</p>
                <p>RS:1200</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="t-shirt">
                <a href="Contact.html">
                    <img src="{{url('frontend/pictures/sample3.png')}}" alt="T-Shirt 3">
                </a>
                <p>Plain red</p>
                <p>RS:1500</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="t-shirt">
                <a href="Contact.html">
                    <img src="{{url('frontend/pictures/sample4.png')}}" alt="T-Shirt 4">
                </a>
                <p>Plain navy</p>
                <p>RS:1500</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="t-shirt">
                <a href="Contact.html">
                    <img src="{{url('frontend/pictures/sample5.png')}}" alt="T-Shirt 5">
                </a>
                <p>Plain purple</p>
                <p>RS:1500</p>
            </div>
        </div>
    </div>
</div>

    </main>
@endsection
