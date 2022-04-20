@extends('layouts.index')


@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12 col-sm-12 col-md-12 d-flex justify-content-between">
                    <h1 class="m-0"> Contact </h1>
                    <a href="{{route("contact.index")}}" class="btn btn-success "> Contacts </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-8 col-md-8 mx-auto">
                    <form action="{{route('contact.update',$contact->id)}}" method="POST" >
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label"> Name </label>
                            <input type="text" class="form-control" id="name" name="name"  value="{{$contact->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"> Email </label>
                            <input type="email" class="form-control" id="email"  name="email" value="{{$contact->email}}">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label"> Phone </label>
                            <input type="number" class="form-control" id="phone"  name="phone" value="{{$contact->phone}}">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection
