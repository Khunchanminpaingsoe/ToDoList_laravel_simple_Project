@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <form method="POST">
            {{csrf_field()}}
            <label>Edit An Item</label>
            <br>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="name" value="{{$tk->content}}">
                <div class="input-group-append">
                    <button class="btn btn-primary ml-2" type="submit" id="button-addon2">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection