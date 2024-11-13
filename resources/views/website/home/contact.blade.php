@extends('website.layouts.master')
@section('content')
{{-- <style>
    img{
        height: 400px;
    }
</style> --}}

{{-- <section class="">
    <div class="row">
        <div class="col-md-12 ">
            <div class="card card-body py-5">
                <h3 class="text-center text-light">Contact</h3>
            </div>
        </div>
    </div>

</section> --}}
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                    <h3 class="text-center">Feeling Good</h3>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi soluta iure obcaecati debitis dignissimos numquam. Dolores perspiciatis dolor accusamus exercitationem quos veniam, consequuntur illum quis molestias consectetur quia voluptatum blanditiis.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi soluta iure obcaecati debitis dignissimos numquam. Dolores perspiciatis dolor accusamus exercitationem quos veniam, consequuntur illum quis molestias consectetur quia voluptatum blanditiis.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi soluta iure obcaecati debitis dignissimos numquam. Dolores perspiciatis dolor accusamus exercitationem quos veniam, consequuntur illum quis molestias consectetur quia voluptatum blanditiis.
                    </p>

                </div>
            </div>

            <div class="col-md-6">
                <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                <div class="card">
                    <div class="card-header text-center">Contact Form</div>
                    <div class="card-body">
                        <form action="{{ route('contact.form') }}" method="POST">
                            @csrf
                            <div class="from-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control"/>
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                            <div class="from-group mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control"/>
                                <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
                            </div>
                            <div class="from-group mb-3">
                                <label for="">Mobile</label>
                                <input type="mobile" name="mobile" class="form-control"/>
                                <span class="text-danger">{{ $errors->has('mobile') ? $errors->first('mobile') : '' }}</span>
                            </div>
                            <div class="from-group mb-3">
                                <label for="">Message</label>
                                <textarea name="message" class="form-control"></textarea>
                            </div>
                            <div class="from-group mb-3">
                                <label for=""></label>
                                <input type="submit" class="btn btn-primary" value="Submit"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>


@endsection
