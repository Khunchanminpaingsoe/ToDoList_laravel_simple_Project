@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <form  action="{{url("add")}}" method="POST">
            {{csrf_field()}}
            <label>Add An Item</label>
            <br>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter An Item Name" name="name">
                <div class="input-group-append">
                    <button class="btn btn-primary ml-2" type="submit" id="button-addon2">ADD</button>
                </div>
            </div>
        </form>
    </div>

    <!-- table -->
    <div class="container-fluid">
        <table class="table table-striped task-table">

            <thead>
            <th>Tasks</th>

            </thead>

            <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>
                        <a href="{{url("complete/$task->id")}}" class="btn btn-primary btn-sm text-white">completed</a>
                    </td>
                    <td>
                        @if($task->complete == 1)
                            <div><del>{{$task->content}}</del></div>
                            @else
                            <div>{{$task->content}}</div>
                            @endif
                    </td>
                    <td>
                        <div class="col-md-12 offset-md-8">
                        <a href="{{url("edit/$task->id")}}" class="btn btn-primary btn-sm text-white">
                            <i class="fa fa-btn fa-edit"></i>
                        </a>
                        <a href="{{url("destroy/$task->id")}}" class="btn btn-danger btn-sm text-white">
                            <i class="fa fa-btn fa-trash"></i>
                        </a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection