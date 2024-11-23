@extends('admin.home.master')

@section('title')
About
@endsection

@section('content')
<section class="py-2">
    <div class="pc-container">
        <div class="pc-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <h3 class="text-center">About</h3>
                    </div>
                </div>
            </div>
            <section class="py-2">
                <div class="container">
                    <div class="row">
                        <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                        <div class="col-md-8 mx-auto">
                            <div class="card shadow-lg">
                                <div class="card-header text-center">About</div>
                                <div class="card-body">
                                    <form action="{{ route('about.new') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="">Name</label>
                                            @if ($about)
                                            <input type="text" value="{{ $about->name }}" name="name" class="form-control"/>
                                            @else
                                            <input type="text" name="name" class="form-control"/>
                                            @endif

                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Image</label>
                                            <input type="file" name="image" class="form-control"/>
                                            @if ($about)
                                            <img src="{{ asset($about->image) }}" alt="about-image" style="height: 80px; width:80px;"/>

                                            @endif

                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Description</label>
                                            @if ($about)
                                            <textarea name="description" id="ckeditor" class="form-control">{{ $about->description }}</textarea>
                                            @else
                                            <textarea name="description" id="ckeditor" class="form-control"></textarea>
                                            @endif

                                        </div>
                                        <div class="form-group mb-3">
                                            <label for=""></label>
                                            <input type="submit" class="btn btn-outline-success"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
</section>
@endsection
