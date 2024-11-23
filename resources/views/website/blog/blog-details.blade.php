@extends('website.layouts.master')
@section('content')

<style>
    /* Blog Details Section */
.blog-details-section {
    background-color: #f8f9fa;
    padding: 60px 0;
}

.blog-title {
    font-size: 32px;
    font-weight: bold;
    color: #333;
    margin-bottom: 30px;
}

.blog-card {
    border: none;
    border-radius: 10px;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    background-color: #fff;
}

.blog-image {
    width: 100%;
    height: auto;
    object-fit: cover;
    border-bottom: 4px solid #007bff; /* Adding a border below the image for style */
}

.blog-content {
    padding: 30px;
}

.blog-name {
    font-size: 24px;
    font-weight: bold;
    color: #007bff;
    margin-bottom: 15px;
}

.blog-description {
    font-size: 16px;
    line-height: 1.8;
    color: #555;
}

.blog-description p {
    margin-bottom: 20px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .blog-title {
        font-size: 28px;
    }

    .blog-name {
        font-size: 22px;
    }

    .blog-description {
        font-size: 15px;
    }
}

</style>

<section class="py-5 blog-details-section">
    <div class="container">
        <h2 class="text-center blog-title mb-5">Blogs</h2>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card blog-card">
                    <img src="{{ asset($blog->image) }}" alt="blog-image" class="img-fluid blog-image">
                    <div class="card-body blog-content">
                        <h4 class="blog-name">{{ $blog->name }}</h4>
                        <p class="blog-description">
                            {!! $blog->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- <section class="py-3">
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
</section> --}}
@endsection
