@extends('website.layouts.master')
@section('content')
<style>
    /* Keyframes for smooth scrolling animation */
@keyframes scroll {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(calc(-250px * 7)); /* Adjust based on number of slides */
    }
}

/* Slider container */
.slider {
    margin: auto;
    overflow: hidden; /* Hide overflow for smooth sliding */
    position: relative;
    width: 100%; /* Full width of the container */
    height: 150px; /* Adjust height for the slider */
    display: flex;
    justify-content: center; /* Centers the slider horizontally */
    align-items: center; /* Centers slider content vertically */
}

/* Track for sliding the elements */
.slider .slide-track {
    display: flex;
    animation: scroll 40s linear infinite; /* Smooth infinite scroll */
    width: calc(250px * 14); /* Adjust width based on number of slides */
}

/* Individual slides */
.slider .slide {
    flex: 0 0 250px; /* Set fixed width of each slide */
    margin-right: 20px; /* Add spacing between slides */
    display: flex;
    justify-content: center; /* Center content horizontally */
    align-items: center; /* Center content vertically */
}

/* Image styling (centered in the slide) */
.slider img {
    max-width: 100px; /* Keep the image within bounds */
    max-height: 100px; /* Ensure the image fits well */
    object-fit: contain; /* Maintain aspect ratio */
    border-radius: 50%; /* Circular image */
    display: block;
    margin: auto; /* Center the image inside the slide */
    border: 2px solid #ccc; /* Optional: add a border around the image */
}

/*product code*/
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

/*===============about section==============*/

/* Section Background */
#about-section {
    background-color: #f8f9fa;
    padding: 50px 0;
}

/* About Content */


/* About Section */
#about-section {
    background-color: #f8f9fa;
    padding: 50px 0;
    margin-top: 30px;
}

/* About Content */
.about-content {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    height: 100%;
    display: flex;
    justify-content: center;
    flex-direction: column;
}

/* Title */
.about-title {
    font-size: 1.75rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
    text-transform: capitalize;
}

/* Description */
.about-description {
    color: #666;
    font-size: 1rem;
    line-height: 1.7;
    margin-bottom: 30px;
}

/* Image Container */
.about-image-container {
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.about-image {
    width: 100%;
    height: auto;
    max-height: 400px; /* Limit max height for large images */
    object-fit: cover;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.about-image:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

/* Responsive Design */
@media (max-width: 768px) {
    .about-title {
        font-size: 1.5rem;
    }

    .about-description {
        font-size: 0.95rem;
    }

    .about-image {
        max-height: 300px; /* Reduce image size for small screens */
    }
}




</style>

<!--About Section-->
<section id="about-section" class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center section_height">
            <div class="col-md-6 mb-4">
                <div class="d-flex flex-column justify-content-center h-100">
                    <h3 class="text-center about-title">{{ $about->name }}</h3>
                    <p class="about-description text-justify">{!! Str::limit($about->description, 850) !!}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-image-container">
                    <img src="{{ asset($about->image) }}" alt="about-image" class="img-fluid about-image">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section id="about-section" class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center section_height">
            <div class="col-md-6 mb-4">
                <div class="d-flex flex-column justify-content-center">
                    <h3 class="text-center about-title">{{ $about->name }}</h3>
                    <p class="about-description text-justify">{!! Str::limit($about->description, 850) !!}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="">
                    <img src="{{ asset($about->image) }}" alt="about-image" class="img-fluid about-image">
                </div>
            </div>
        </div>
    </div>
</section> --}}



<!--Products Start-->
<section id="product-section" class="py-5">
    <h2 class="text-center mb-5" id="product-title">Our Products</h2>
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="product-card card">
                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="product-image">
                    <div class="card-body">
                        <h5 class="product-name text-center">
                            <a href="{{ $product->link }}" class="product-link">{{ $product->name }}</a>
                        </h5>
                        <p class="product-description">{{ Str::limit(strip_tags($product->description), 100) }}</p>
                    </div>
                    <div class="card-footer bg-transparent text-center">
                        <a href="{{ $product->link }}" class="product-btn btn">View Details</a>
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
                        <div class="card card-body shadow-lg">
                            <img src="{{ asset($client->image) }}" alt="slider-img" />
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>


        </div>
    </div>


</section>

@endsection
