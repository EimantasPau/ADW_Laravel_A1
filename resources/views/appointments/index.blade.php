@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <h5>My appointments</h5>
                <a class="btn btn-primary mb-3" href="{{route('create')}}">Create new appointment</a>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                </div>
                @if(count($appointments) == 0)
                    <div>You do not have any appointments at the moment.</div>
                @else
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Patient's name</th>
                            <th>Time</th>
                            <th>Location</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($appointments as $appointment)
                        <tr><td>{{$appointment->title}}</td>
                        <td>{{$appointment->description}}</td>
                        <td>{{$appointment->patientName}}</td>
                        <td>{{$appointment->time}}</td>
                        <td>{{$appointment->location}}</td>
                            <td><i class="material-icons">mode_edit</i><a onclick="event.preventDefault(); document.getElementById('destroy-form').submit();"><i class="material-icons">delete</i></a></td>
                            <form id="destroy-form" action="{{route('destroy', ['id' => $appointment->id]) }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            </form>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>
    @endsection