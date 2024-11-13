@extends('website.layouts.master')
@section('content')

<section class="py-3">
    <h2 class="text-center mb-5">Blogs</h2>
    <div class="container">

        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <img src="{{ asset($blog->image) }}" alt="blog-image">
                    <div class="card-body">
                        <h4>{{ $blog->name }}</h4>
                        <p>
                            {!! $blog->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
