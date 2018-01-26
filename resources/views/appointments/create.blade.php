@extends('layouts.app')

@section('content')
<div class="container">
        <div class="col-md-8 col-md-offset-2 mt-6">
            <div class="card">
                <h5>New appointment</h5>
                <form method="POST" action="{{route('store')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="Enter appointment title" name="title" value="{{old('title')}}">
                    </div>
                    @if($errors->has('title'))
                        <div class="alert alert-danger" role="alert">
                            {{$errors->first('title')}}
                        </div>
                        @endif
                    <div class="form-group">
                        <textarea class="form-control" id="description" placeholder="Description" name="description" value="{{old('description')}}"></textarea>
                    </div>
                    @if($errors->has('description'))
                        <div class="alert alert-danger" role="alert">
                            {{$errors->first('description')}}
                        </div>
                    @endif
                    <div class="form-group">
                        <input id="picker" type="text" class="form-control" placeholder="Date and time" name="time" value="{{old('time')}}">
                    </div>
                    @if($errors->has('time'))
                        <div class="alert alert-danger" role="alert">
                            {{$errors->first('time')}}
                        </div>
                    @endif
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Location" name="location" value="{{old('location')}}">
                    </div>
                    @if($errors->has('location'))
                        <div class="alert alert-danger" role="alert">
                            {{$errors->first('location')}}
                        </div>
                    @endif
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Patient's name" name="patientName" value="{{old('patientName')}}">
                    </div>
                    @if($errors->has('patientName'))
                        <div class="alert alert-danger" role="alert">
                            {{$errors->first('patientName')}}
                        </div>
                    @endif
                    <button type="submit" class="btn btn-primary">Create appointment</button>
                </form>
            </div>
        </div>
</div>
@endsection