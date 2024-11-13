@extends('website.layouts.master')
@section('content')
<style>
    @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-250px * 7));

            }
        }

        .slider {
            height: 100px;
            margin: auto;
            overflow: hidden;
            position: relative;
            width: auto;
        }

        .slider .slide-track {
            animation: scroll 40s linear infinite;
            display: flex;
            width: calc(250px * 14);
        }

        .slider .slide {
            height: 100px;
            width: 250px;

        }
</style>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card card-body">
                    <h3 class="text-center">{{ $about->name }}</h3>
                    <p class="text-center">{!! Str::limit($about->description, 850) !!}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">
                    <img src="{{ asset($about->image) }}" alt="account-software"/>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Products Start-->
<section class="py-3">
    <h2 class="text-center mb-5">Products</h2>
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="{{ asset($product->image) }}" alt="accounting" class="image-size-product">
                    <div class="card-body">
                        <h5 class="text-bold text-center"><a href="{{ $product->link }}">{{ $product->name }}</a></h5>
                        <p>{!! Str::limit($product->description, 400 )!!}</p>
                        <div class="text-center">
                            <a href="{{ $product->link }}" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach


        </div>
    </div>
</section>
<!--Products End-->

<!--Auto logo move section use only css animation-->
<section class="py-5">
    <div class="container">
        <div class="row">
            <h2 class="text-center mb-5">Client</h2>
            <div class="slider">
                <div class="slide-track">
                    @foreach ($clients as $client)
                        <div class="slide">
                            <img src="{{ asset($client->image) }}" alt="slider-img" height="100" width="100" />
                        </div>
                    @endforeach
                    @foreach ($clients as $client)
                        <div class="slide">
                            <img src="{{ asset($client->image) }}" alt="slider-img" height="100" width="100" />
                        </div>
                    @endforeach


                </div>

            </div>

        </div>
    </div>


</section>

@endsection
