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
                        <h3 class="text-center">Manage Client</h3>
                    </div>
                </div>
            </div>
            <section class="py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mx-auto">
                            <div class="text-end">
                                <a href="{{ route('client.add') }}" class="btn btn-success mb-2">Add Client</a>
                            </div>
                            <div class="card">
                                <div class="card-header">Manage Client</div>
                                <div class="card-body">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($clients as $Client)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $Client->name }}</td>
                                                <td>
                                                    <img src="{{ asset($Client->image) }}" alt="Client-image" style="height:90px; width:100px;"/>
                                                </td>
                                                <td>
                                                    @if ($Client->status == 1)
                                                    <span class="badge bg-success">Active</span>
                                                    @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('client.edit',$Client->id) }}" class="btn btn-outline-info"><i class="fa fa-edit"></i></a>
                                                    <a href="{{ route('client.delete',$Client->id) }}" class="btn btn-outline-danger" onclick="return confirm('Are you sure delete this?')"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>

                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    {{ $clients->links() }}
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
