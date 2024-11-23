@extends('website.layouts.master')
@section('content')
<style>
    /* Custom Contact Page Styles */
.contact-section {
    background-color: #f9f9f9;
    padding: 60px 0;
}

.text-content {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    padding: 30px;
}

.text-title {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 20px;
    color: #333;
}

.text-description {
    font-size: 16px;
    color: #555;
    line-height: 1.6;
    margin-bottom: 15px;
}

.form-card {
    margin-top: 2px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

.form-header {
    background-color: #4834D4;
    color: white;
    padding: 15px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.form-group {
    margin-bottom: 20px;
}

.form-label {
    font-size: 14px;
    font-weight: bold;
    color: #333;
}

.form-input {
    border-radius: 5px;
    border: 1px solid #ddd;
    padding: 10px;
    font-size: 16px;
    width: 100%;
}

.form-input:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.form-submit {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

.form-submit:hover {
    background-color: #0056b3;
}
</style>

<section class="py-5 contact-section">
    <div class="container">
        <div class="row">
            <!-- Left Side: Text Content Section -->
            <div class="col-md-6 mb-4">
                <div class="card-body text-content">
                    <h3 class="text-center text-title">Feeling Good</h3>
                    <p class="text-description">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi soluta iure obcaecati debitis dignissimos numquam. Dolores perspiciatis dolor accusamus exercitationem quos veniam, consequuntur illum quis molestias consectetur quia voluptatum blanditiis.
                    </p>
                    <p class="text-description">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi soluta iure obcaecati debitis dignissimos numquam. Dolores perspiciatis dolor accusamus exercitationem quos veniam, consequuntur illum quis molestias consectetur quia voluptatum blanditiis.
                    </p>
                    <p class="text-description">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi soluta iure obcaecati debitis dignissimos numquam. Dolores perspiciatis dolor accusamus exercitationem quos veniam, consequuntur illum quis molestias consectetur quia voluptatum blanditiis.
                    </p>
                </div>
            </div>

            <!-- Right Side: Contact Form Section -->
            <div class="col-md-6">
                <!-- Contact Form Card -->
                <div class="card form-card">
                    <div class="card-header text-center form-header">Contact Us</div>
                    <div class="card-body">
                        <form action="{{ route('contact.form') }}" method="POST">
                            @csrf

                            <!-- Name Field -->
                            <div class="form-group mb-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control form-input" placeholder="Enter Name"/>
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>

                            <!-- Email Field -->
                            <div class="form-group mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control form-input" placeholder="Enter Email"/>
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>

                            <!-- Mobile Field -->
                            <div class="form-group mb-4">
                                <label for="mobile" class="form-label">Mobile</label>
                                <input type="text" name="mobile" class="form-control form-input" placeholder="Enter Mobile Number"/>
                                <span class="text-danger">{{ $errors->first('mobile') }}</span>
                            </div>

                            <!-- Message Field -->
                            <div class="form-group mb-4">
                                <label for="message" class="form-label">Message</label>
                                <textarea name="message" class="form-control form-input" rows="5"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group text-center">
                                <input type="submit" class="btn btn-primary form-submit" value="Submit"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                    <h3 class="text-center">Feeling Good</h3>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi soluta iure obcaecati debitis dignissimos numquam. Dolores perspiciatis dolor accusamus exercitationem quos veniam, consequuntur illum quis molestias consectetur quia voluptatum blanditiis.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi soluta iure obcaecati debitis dignissimos numquam. Dolores perspiciatis dolor accusamus exercitationem quos veniam, consequuntur illum quis molestias consectetur quia voluptatum blanditiis.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi soluta iure obcaecati debitis dignissimos numquam. Dolores perspiciatis dolor accusamus exercitationem quos veniam, consequuntur illum quis molestias consectetur quia voluptatum blanditiis.
                    </p>

                </div>
            </div>

            <div class="col-md-6">
                <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                <div class="card">
                    <div class="card-header text-center">Contact Form</div>
                    <div class="card-body">
                        <form action="{{ route('contact.form') }}" method="POST">
                            @csrf
                            <div class="from-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control"/>
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                            <div class="from-group mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control"/>
                                <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
                            </div>
                            <div class="from-group mb-3">
                                <label for="">Mobile</label>
                                <input type="mobile" name="mobile" class="form-control"/>
                                <span class="text-danger">{{ $errors->has('mobile') ? $errors->first('mobile') : '' }}</span>
                            </div>
                            <div class="from-group mb-3">
                                <label for="">Message</label>
                                <textarea name="message" class="form-control"></textarea>
                            </div>
                            <div class="from-group mb-3">
                                <label for=""></label>
                                <input type="submit" class="btn btn-primary" value="Submit"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section> --}}


@endsection
