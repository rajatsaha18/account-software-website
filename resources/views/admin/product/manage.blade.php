@extends('admin.home.master')

@section('title')
Add Product
@endsection

@section('content')
<section class="py-2">
    <div class="pc-container">
        <div class="pc-content">
            <div class="row">
                <div class="col-md-12">

                    <div class="card card-body">
                        <h3 class="text-center">Manage Product</h3>
                    </div>
                </div>
            </div>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mx-auto">
                            <div class="text-end">
                                <a href="{{ route('product.add') }}" class="btn btn-success mb-2">Add Product</a>
                            </div>
                            <div class="card">
                                <div class="card-header text-center">Manage Product</div>
                                <div class="card-body">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th>Name</th>
                                                <th>Link</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ Str::limit($product->link, 30) }}</td>
                                                <td>
                                                    <img src="{{ asset($product->image) }}" alt="product-image" style="height:70px; width:70px;"/>
                                                </td>
                                                <td>
                                                    @if ($product->status == 1)
                                                    <span class="badge bg-success">Active</span>
                                                    @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('product.edit',$product->id) }}" class="btn btn-outline-info btn-sm"><i class="fa fa-edit"></i></a>
                                                    <a href="{{ route('product.delete',$product->id) }}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure delete this?')"><i class="fa fa-trash"></i></a>
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
