@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2 mt-6">
            <div class="card">
                <h5>Edit appointment</h5>
                <form method="POST" action="{{route('update', ['id'=>$appointment->id])}}">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="Enter appointment title" name="title" value="{{$appointment->title}}">
                    </div>
                    @if($errors->has('title'))
                        <div class="alert alert-danger" role="alert">
                            {{$errors->first('title')}}
                        </div>
                    @endif
                    <div class="form-group">
                        <textarea class="form-control" id="description" placeholder="Description" name="description">{{$appointment->description}}</textarea>
                    </div>
                    @if($errors->has('description'))
                        <div class="alert alert-danger" role="alert">
                            {{$errors->first('description')}}
                        </div>
                    @endif
                    <div class="form-group">
                        <input id="picker" type="text" class="form-control" placeholder="Date and time" name="time" value="{{$appointment->time}}">
                    </div>
                    @if($errors->has('time'))
                        <div class="alert alert-danger" role="alert">
                            {{$errors->first('time')}}
                        </div>
                    @endif
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Location" name="location" value="{{$appointment->location}}">
                    </div>
                    @if($errors->has('location'))
                        <div class="alert alert-danger" role="alert">
                            {{$errors->first('location')}}
                        </div>
                    @endif
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Patient's name" name="patientName" value="{{$appointment->patientName}}">
                    </div>
                    @if($errors->has('patientName'))
                        <div class="alert alert-danger" role="alert">
                            {{$errors->first('patientName')}}
                        </div>
                    @endif
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>

    <script>

    </script>
@endsection