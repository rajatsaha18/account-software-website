@extends('admin.home.master')

@section('title')

@endsection

@section('content')
<section class="py-2">
    <div class="pc-container">
        <div class="pc-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <h3 class="text-center">Site Setting</h3>
                    </div>
                </div>
            </div>
            <section class="py-2">
                <div class="container">
                    <div class="row">
                        <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                        <div class="col-md-8 mx-auto">
                            <div class="card shadow-lg">
                                <div class="card-header text-center">Site Setting</div>
                                <div class="card-body">
                                    <form action="{{ route('sitesetting.new') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group mb-3">
                                            <label for="">Logo</label>
                                            <input type="file" name="image" class="form-control"/>
                                            @if ($data)
                                            <img src="{{ asset($data->image) }}" alt="logo" style="width: 80px"/>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Facebook</label>
                                            @if ($data)
                                            <input type="text" value="{{ $data->facebook }}" name="facebook" class="form-control"/>
                                            @else
                                            <input type="text" name="facebook" class="form-control"/>
                                            @endif

                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Twitter</label>
                                            @if ($data)
                                            <input type="text" value="{{ $data->twitter }}" name="twitter" class="form-control"/>
                                            @else
                                            <input type="text" name="twitter" class="form-control"/>
                                            @endif

                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Linkedin</label>
                                            @if ($data)
                                            <input type="text" value="{{ $data->linkedin }}" name="linkedin" class="form-control"/>
                                            @else
                                            <input type="text" name="linkedin" class="form-control"/>
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
