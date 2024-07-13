@extends('doctor.layout.app')

@section('content')
<div class="pagetitle">
    <h1>Appointments</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-24">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <!-- <h5 class="card-title">
                        <a href="{{ url('admin/crimes/add')}}" class="btn btn-primary">Add Appointment</a>
                    </h5> -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Doctor</th>
                                <th scope="col">Full Names</th>
                                <th scope="col">Age</th>
                                <th scope="col">Address</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Reason</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($getRecord as $value)
                                <tr>
                                    <th scope="row">{{$value->id}}</th>
                                    <td>{{$value->doctor}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->age}}</td>
                                    <td>{{$value->address}}</td>
                                    <td>{{$value->contact}}</td>
                                    <td>{{$value->reason}}</td>
                                    <td>{{$value->date}}</td>

                                    <td>
                                        <div class="btn-group">
                                        <a href="{{url('doctor/appointments/edit/'.$value->id)}}" class="btn btn-sm btn-primary">Confirm</a>
                                        <a href="{{url('doctor/appointments/delete/'.$value->id)}}" class="btn btn-sm btn-danger">Decline</a>
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