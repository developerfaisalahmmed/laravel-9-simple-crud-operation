@extends('layouts.index')


@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12 col-sm-12 col-md-12 d-flex justify-content-between">
                    <h1 class="m-0"> Contact </h1>
                    <a href="{{route("contact.create")}}" class="btn btn-success "> New Contact </a>
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
                <div class="col-12 col-sm-12 col-md-12">
                    <table class="table table-bordered table-active dataTable">
                        <thead>
                        <tr>
                            <th> SL</th>
                            <th> Name</th>
                            <th> Email</th>
                            <th> Phone</th>
                            <th> Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $key=>$contact)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->phone}}</td>
                                <td>
                                    <a href="{{route('contact.edit',$contact->id)}}" class="btn btn-sm"> Edit </a>
                                    <a href="{{route('contact.delete',$contact->id)}}" class="btn btn-sm"> Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


@endsection
