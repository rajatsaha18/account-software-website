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
                        <h3 class="text-center">Edit Client</h3>
                    </div>
                </div>
            </div>
            <section class="py-0">
                <div class="container">
                    <div class="row">
                        <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                        <div class="col-md-6 mx-auto">
                            <div class="text-end">
                                <a href="{{ route('client.manage') }}" class="btn btn-success mb-3">Back</a>
                            </div>
                            <div class="card">
                                <div class="card-header">Edit Client</div>
                                <div class="card-body">
                                    <form action="{{ route('client.update',$client->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="">Name</label>
                                            <input type="text" value="{{ $client->name }}" name="name" class="form-control"/>
                                            <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Image</label>
                                            <img src="{{ asset($client->image) }}" alt="client-image" style="height: 80px;width:80px;"/>
                                            <input type="file" name="image" class="form-control"/>
                                            <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">status</label>
                                            <select name="status" id="" class="form-control">
                                                <option value="1" {{ $client->status == 1 ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ $client->status == 0 ? 'selected' : '' }}>Inactive</option>
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
