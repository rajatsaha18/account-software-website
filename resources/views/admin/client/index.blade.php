@extends('admin.home.master')

@section('title')
Add Client
@endsection

@section('content')
<section class="py-2">
    <div class="pc-container">
        <div class="pc-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <h3 class="text-center">Add Client</h3>
                    </div>
                </div>
            </div>
            <section class="py-2">
                <div class="container">
                    <div class="row">
                        <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                        <div class="col-md-6 mx-auto">
                            <div class="card">
                                <div class="card-header">Add Client</div>
                                <div class="card-body">
                                    <form action="{{ route('client.new') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="">Name</label>
                                            <input type="text" name="name" class="form-control"/>
                                            <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Image</label>
                                            <input type="file" name="image" class="form-control"/>
                                            <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">status</label>
                                            <select name="status" id="" class="form-control">
                                                <option value="1" selected>Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
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
