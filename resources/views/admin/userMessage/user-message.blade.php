@extends('admin.home.master')

@section('title')
User Message
@endsection

@section('content')
<section class="py-2">
    <div class="pc-container">
        <div class="pc-content">
            <div class="row">
                <div class="col-md-12">

                    <div class="card card-body">
                        <h3 class="text-center">Manage User Message</h3>
                    </div>
                </div>
            </div>
            <section>
                <div class="container">
                    <div class="row">
                        <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                        <div class="col-md-12 mx-auto">
                            <div class="card">
                                <div class="card-header text-center">Manage User Message</div>
                                <div class="card-body">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contacts as $contact)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $contact->name }}</td>
                                                <td>{{ $contact->email }}</td>
                                                <td>{{ $contact->mobile }}</td>
                                                <td>{!! Str::limit($contact->message, 30) !!}</td>
                                                <td>

                                                    <a href="{{ route('contact.delete',$contact->id) }}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure delete this?')"><i class="fa fa-trash"></i></a>
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
