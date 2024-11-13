@extends('admin.home.master')

@section('title')
Edit Blog
@endsection

@section('content')
<section class="py-2">
    <div class="pc-container">
        <div class="pc-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <h3 class="text-center">Edit Blog</h3>
                    </div>
                </div>
            </div>
            <section class="py-2">
                <div class="container">
                    <div class="row">
                        <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                        <div class="col-md-6 mx-auto">
                            <div class="text-end">
                                <a href="{{ route('blog.manage') }}" class="btn btn-success mb-2">Manage Blog</a>
                            </div>
                            <div class="card">
                                <div class="card-header">Edit Blog</div>
                                <div class="card-body">
                                    <form action="{{ route('blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="">Name</label>
                                            <input type="text" value="{{ $blog->name }}" name="name" class="form-control"/>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Image</label>
                                            <input type="file" name="image" class="form-control"/>
                                            <img src="{{ asset($blog->image) }}" alt="blog-image" style="height: 80px; width:80px;"/>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Description</label>
                                            <textarea name="description" id="ckeditor" class="form-control">{{ $blog->description }}</textarea>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">status</label>
                                            <select name="status" id="" class="form-control">
                                                <option value="1" {{ $blog->status == 1 ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ $blog->status == 0 ? 'selected' : '' }}>Inactive</option>
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
