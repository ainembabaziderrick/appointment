@extends('patient.layout.app')

@section('content')
<div class="pagetitle">
    <h1>Dermatology</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-24">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ url('admin/dermatology/add')}}" class="btn btn-primary">Add Dermatology</a>
                    </h5>
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Full Names</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($getRecord as $value)
                            <tr>
                            <th scope="row">{{$value->id}}</th>
                                <td>{{$value->name}}</td>
                                <td>{{$value->contact}}</td>
                                <td>{{$value->email}}</td>
                                <td>{{$value->address}}</td>
                                                              
                                <td>
                                        <div class="btn-group">
                                        <a href="{{url('patient/dermatology/add')}}" class="btn btn-sm btn-primary">Connect</a>
                                        
                                        </div>
                                    </td>
                                
                            </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</section>






@endsection