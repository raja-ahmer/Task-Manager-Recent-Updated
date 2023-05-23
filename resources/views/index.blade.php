@extends('layout.main')

{{-- @section('main-section') --}}
@section('title')
    {{'| Home'}}
@endsection

@section('content')
    <div class="container">
        <h4>This is home page.</h4>
        <div class="text-right">
            <a href="/add-task">
                <button type="submit" class="btn btn-secondary text-center">Create New Task</button>
            </a>
        </div>

        <div class="table">
            <table class="table-responsive table-striped table-hover table-bordered datatable">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Start</th>
                        <th scope="col">End</th>
                        <th scope="col">Status</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($task as $value)
                        <tr>
                            <th>{{$value->task_id}}</th>
                            <td>{{$value->title}}</td>
                            <td>{{ Str::substr($value->description, 0, 50)}}</td>
                            <td>{{$value->start_date}}</td>
                            <td>{{$value->end_date}}</td>
                            @if ($value->status == 1)
                                <td class="badge bg-success" style="color: #fff; margin:12px;">
                                    Active
                                </td>
                            @else
                                <td class="badge bg-danger" style="color: #fff; margin:12px;">
                                    Not Active
                                </td>
                            @endif
                            <td>
                                <a href="{{ route('edit_task', ['id' => $value->task_id]) }}" style="text-decoration:none">
                                    <button class="btn btn-secondary"> <i class="fas fa-edit "></i></button> &nbsp;
                                </a>
                                <a href="{{ route('delete_task', ['id' => $value->task_id]) }}" style="text-decoration:none" onclick="return confirm('Are you sure you want to delete?')">
                                    <button id="delete" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
{{-- @endsection --}}
