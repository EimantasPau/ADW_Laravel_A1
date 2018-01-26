@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2 mt-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$appointment->title}}</h5>
                    <div class="form-group">
                        <strong><p>Description:</p></strong>
                        <p>{{$appointment->description}}</p>
                    </div>
                    <div class="form-group">
                        <strong><p>Date and time:</p></strong>
                        <p>{{$appointment->time}}</p>
                    </div>

                    <div class="form-group">
                        <strong><p>Location:</p></strong>
                        <p>{{$appointment->location}}</p>
                    </div>

                    <div class="form-group">
                        <strong><p>Patient's name:</p></strong>
                        <p>{{$appointment->patientName}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

    </script>
@endsection