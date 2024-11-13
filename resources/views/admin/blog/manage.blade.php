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
                        <h3 class="text-center">Manage Blog</h3>
                    </div>
                </div>
            </div>
            <section>
                <div class="container">
                    <div class="row">
                        <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                        <div class="col-md-12 mx-auto">
                            <div class="text-end">
                                <a href="{{ route('blog.add') }}" class="btn btn-success mb-2">Add Blog</a>
                            </div>
                            <div class="card">
                                <div class="card-header text-center">Manage Blog</div>
                                <div class="card-body">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($blogs as $Blog)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $Blog->name }}</td>
                                                <td>
                                                    <img src="{{ asset($Blog->image) }}" alt="Blog-image" style="height:70px; width:70px;"/>
                                                </td>
                                                <td>{!! Str::limit($Blog->description, 50) !!}</td>
                                                <td>
                                                    @if ($Blog->status == 1)
                                                    <span class="badge bg-success">Active</span>
                                                    @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('blog.edit',$Blog->id) }}" class="btn btn-outline-info btn-sm"><i class="fa fa-edit"></i></a>
                                                    <a href="{{ route('blog.delete',$Blog->id) }}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure delete this?')"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>

                                            @endforeach

                                        </tbody>
                                    </table>
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
