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
</style>
<section class="py-3">
    <h2 class="text-center mb-5">Blogs</h2>
    <div class="container">
        <form action="{{ route('blog.search') }}" method="GET">
            <div class="search-container">
                <input type="text" name="query" placeholder="Search">
                <button><i class="fa fa-search"></i></button>
            </div>
        </form>
        @if ($blogs->count() > 0)
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="{{ asset($blog->image) }}" alt="accounting" class="image-size-product">
                    <div class="card-body">
                        <a href="{{ $blog->link }}"><h4 class="text-center">{{ $blog->name }}</h4></a>
                        <p>{!! Str::limit($blog->description, 400 )!!}</p>
                        <div class="text-center">
                            <a href="{{ $blog->link }}" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <p>No blogs found for your search query.</p>
        @endif
    </div>
</section>
@endsection
