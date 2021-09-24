@extends('layouts.app')
@section('content')

    <div class="container">
        <h4>Mobile Health Administration</h4>

        <a class="btn btn-primary mx-1" href="/">View Courses</a>
        <a class="btn btn-primary mx-1 " href="/coursedates">View Course Dates</a>
        <a class="btn btn-primary mx-1 " href="/bookings">View Bookings</a>

        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Show Coursedates</h2>
                    <hr>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">

                            @method('PUT')
                            @csrf

                            <h6>ID</h6>
                            <p>{{$coursedate->id}}</p>
                            <h6>Course ID</h6>
                            <p>{{$coursedate->course_id}}</p>
                            <h6>Course Name</h6>
                            <p>course_name - Yet to show</p>
                            <h6>Scheduled Date</h6>
                            <p>{{$coursedate->scheduled_date}}</p>
                            <h6>Attendee Maximum </h6>
                            <p>{{$coursedate->max_attendee}}</p>
                            <h6>Venue</h6>
                            <p>{{$coursedate->venue}}</p>

                        </div>
                    </div>
                    @auth
                        <a class="btn btn-primary" href="/coursedates/{{$coursedate->id}}/edit">Edit Course Date</a>
                    @endauth
                    <a class="btn btn-warning mx-1" href="/coursedates/">View Course List</a>
                </div>


                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Field</th>
                        <th scope="col">Entry</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="col">ID</th>
                        <td scope="row">{{$coursedate->id}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Course ID</th>
                        <td scope="row">{{$coursedate->course_id}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Course Name</th>
                        <td scope="row">course_name - yet to show</td>
                    </tr>
                    <tr>
                        <th scope="col">Course Date</th>
                        <th scope="row">{{$coursedate->scheduled_date}}</th>
                    </tr>
                    <tr>
                        <th scope="col">Attendee Maximum</th>
                        <th scope="row">{{$coursedate->max_attendee}}</th>
                    </tr>
                    <tr>
                        <th scope="col">Venue</th>
                        <td scope="row">{{$coursedate->venue}}</td>
                    </tr>
                    </tbody>
                </table>
                    @auth
                        <a class="btn btn-primary" href="/coursedates/{{$coursedate->id}}/edit">Edit Course Date</a>
                    @endauth
                    <a class="btn btn-warning mx-1" href="/coursedates/">View Course List</a>
            </div>
        </div>
    </div>


@endsection
