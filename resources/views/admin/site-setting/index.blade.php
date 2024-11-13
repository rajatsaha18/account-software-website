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
                        <div class="col-md-6 mx-auto">
                            <div class="card">
                                <div class="card-header text-center">Site Setting</div>
                                <div class="card-body">
                                    <form action="{{ route('sitesetting.new') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group mb-3">
                                            <label for="">Logo</label>
                                            <input type="file" name="logo" class="form-control"/>
                                            @if (isset($data))
                                            <img src="{{ asset($data->logo) }}" alt="sitesetting-image" style="height: 80px; width:80px;"/>

                                            @endif

                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Facebook Link</label>
                                            <input type="text" value="{{ isset($data->facebook) ? $data->facebook : '' }}" name="facebook" class="form-control"/>


                                            {{-- @if (isset($siteSetting))
                                            <input type="text" value="{{ $siteSetting->facebook }}" name="facebook" class="form-control"/>
                                            @else


                                            @endif --}}

                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Twitter Link</label>
                                            <input type="text" value="{{ isset($data->twitter) ? $data->twitter : '' }}" name="twitter" class="form-control"/>



                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Linkedin Link</label>
                                            <input type="text" value="{{ isset($data->linkedin) ? $data->linkedin : ''}}" name="linkedin" class="form-control"/>

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
