@extends('layouts.app')

@section('content')
<div class="container">
        <div class="col-md-8 col-md-offset-2 mt-6">
            <div class="card">
                <h5>New appointment</h5>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="Enter appointment title">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="description" placeholder="Description"></textarea>
                    </div>
                    <div class="form-group">
                        <input id="picker" type="text" class="form-control" placeholder="Date and time">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Location">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Patient's name">
                    </div>
                    <button type="submit" class="btn btn-primary">Create appointment</button>
                </form>
            </div>
        </div>
</div>

<script>

</script>
@endsection