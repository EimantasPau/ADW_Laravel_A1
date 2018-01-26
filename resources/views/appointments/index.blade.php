@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5>My appointments</h5>
                <a class="btn btn-primary mb-3" href="{{route('create')}}">Create new appointment</a>
                <form action="{{route('index')}}">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for..." name="keyword">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit">Go!</button>
                        </span>
                    </div>
                </form>
                @if($message = session('successMessage'))
                <div class="alert alert-success" role="alert">
                    {{$message}}
                </div>
                @endif
                @if(count($appointments) == 0)
                    <div>No appointments found.</div>
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
                            <td><a href="{{route('edit', ['id'=>$appointment->id])}}"><i class="material-icons">mode_edit</i></a>
                            </td>
                            <td><a href="#" onclick="event.preventDefault(); document.getElementById('destroy-form').submit();"><i class="material-icons">delete</i></a></td>
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
