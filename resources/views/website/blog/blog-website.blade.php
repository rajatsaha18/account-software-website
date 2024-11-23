@extends('website.layouts.master')
@section('content')
<style>
    .search-container {
    display: flex;
    align-items: center;
    background-color: #333; /* Dark background color */
    border-radius: 5px;
    width: 300px; /* Adjust width as needed */
    margin-bottom:20px!important;
}

.search-container input {
    border: none;
    padding: 10px;
    width: 100%;
    color: #fff; /* Text color */
    background-color: #333; /* Same background as container */
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}

.search-container input::placeholder {
    color: #ccc; /* Placeholder text color */
}

.search-container button {
    background-color: #4285F4; /* Button color */
    border: none;
    padding: 10px 15px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    cursor: pointer;
}

.search-container button i {
    color: white;
}
/*======blog======*/
/* Section Title */
#product-title {
    color: #333;
    letter-spacing: 2px;
    font-weight: bold;
    text-transform: uppercase;
}

/* Product Card */
.product-card {
    border: none;
    transition: transform 0.3s ease-in-out; /* Smooth hover effect */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Light shadow */
}

.product-card:hover {
    transform: translateY(-8px); /* Lift card on hover */
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15); /* Slightly darker shadow */
}

/* Product Image */
.product-image {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
}

/* Product Name Styling */
.product-name {
    font-weight: bold;
    font-size: 1.2rem;
}

.product-link {
    color: #333;
    text-decoration: none;
}

.product-link:hover {
    color: #007bff; /* Color change on hover */
    text-decoration: none;
}

/* Product Description */
.product-description {
    text-align: justify;
    color: #666;
}

/* Button Styling */
.product-btn {
    border: 1px solid #007bff;
    color: #007bff;
    padding: 5px 15px;
    font-size: 0.9rem;
    background-color: transparent;
    transition: all 0.3s ease;
}

.product-btn:hover {
    background-color: #007bff;
    color: #fff;
}
</style>
<section id="product-section" class="py-5">
    <h2 class="text-center mb-5" id="product-title">Our Products</h2>
    <div class="container">
        <form action="{{ route('blog.search') }}" method="GET">
            <div class="search-container">
                <input type="text" name="query" placeholder="Search">
                <button><i class="fa fa-search"></i></button>
            </div>
        </form>
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-md-4 mb-4">
                <div class="product-card card">
                    <img src="{{ asset($blog->image) }}" alt="{{ $blog->name }}" class="blog-image">
                    <div class="card-body">
                        <h5 class="product-name text-center">
                            <a href="{{ route('blog.details',$blog->slug) }}" class="product-link">{{ $blog->name }}</a>
                        </h5>
                        <p class="product-description">{!! Str::limit($blog->description, 100 )!!}</p>
                    </div>
                    <div class="card-footer bg-transparent text-center">
                        <a href="{{ route('blog.details',$blog->slug) }}" class="product-btn btn">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
{{-- <section class="py-3">
    <h2 class="text-center mb-5">Blogs</h2>
    <div class="container">
        <form action="{{ route('blog.search') }}" method="GET">
            <div class="search-container">
                <input type="text" name="query" placeholder="Search">
                <button><i class="fa fa-search"></i></button>
            </div>
        </form>
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-md-4 mb-2">
                <div class="card shadow-lg">
                    <img src="{{ asset($blog->image) }}" alt="accounting" class="image-size-product">
                    <div class="card-body">
                        <a href="{{ route('blog.details',$blog->slug) }}"><h4 class="text-center">{{ $blog->name }}</h4></a>
                        <p>{!! Str::limit($blog->description, 400 )!!}</p>
                        <div class="text-center">
                            <a href="{{ route('blog.details',$blog->slug) }}" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach


        </div>
    </div>
</section> --}}
@endsection
