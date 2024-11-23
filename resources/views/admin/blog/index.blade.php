@extends('admin.home.master')

@section('title')
Add Blog
@endsection

@section('content')
<section class="py-2">
    <div class="pc-container">
        <div class="pc-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <h3 class="text-center">Add Blog</h3>
                    </div>
                </div>
            </div>
            <section class="py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div class="text-end">
                                <a href="{{ route('blog.manage') }}" class="btn btn-success mb-2">Manage Blog</a>
                            </div>
                            <div class="card shadow-lg">
                                <div class="card-header">Add Blog</div>
                                <div class="card-body">
                                    <form action="{{ route('blog.new') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="">Name</label>
                                            <input type="text" name="name" class="form-control"/>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Image</label>
                                            <input type="file" name="image" class="form-control"/>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Description</label>
                                            <textarea name="description" id="ckeditor" class="form-control"></textarea>
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
