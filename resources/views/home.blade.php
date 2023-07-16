@section('title')
    Home
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3 card p-3 bg-white">
                            <h3 class="text-center text-primary">
                                Your Tasks
                            </h3>
                        </div>
                        <div class="table-responsive">
                            <div class="m-3 float-end">
                                <a href="add-task"><button class="btn btn-primary">Add Task</button></a>
                                <select name="timeFilter" id="timeFilter" class="btn border dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <option value="today">Today</option>
                                    <option value="week">Last 7 Days</option>
                                    <option value="all">All</option>
                                </select>
                            </div>
                            <!-- Example single danger button -->
                            <table id="taskTable" class="table table-striped table-hover table-bordered w-100">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Start</th>
                                        <th scope="col">Expire</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Options</th>
                                    </tr>
                                </thead>
                                <tbody id="Content">
                                    @foreach ($task as $item)
                                        <tr class="text-center">
                                            <td>{{ $item->name }}</td>
                                            <td>{{ Str::substr($item->description, 0, 40) }}</td>
                                            <td>{{ $item->startDate }}</td>
                                            <td>{{ $item->endDate }}</td>
                                            <td>{{ $item->getCategory->name }}</td>
                                            <td><span class="badge bg-success p-2">Active</span></td>
                                            <td>
                                                <a href="{{ route('edit_task', ['id' => $item->taskId]) }}"
                                                    style="text-decoration: none"><button
                                                        class="btn btn-warning">Edit</button></a>
                                                &nbsp;
                                                <a href="{{ route('delete_task', ['id' => $item->taskId]) }}"
                                                    onclick="return confirm('Are you sure you want to delete?')"
                                                    style="text-decoration: none">
                                                    <button class="btn btn-danger">Delete</button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('dataTableScript')
    {{-- Data Table JS CDN --}}


    <script>
        let table = $('#taskTable').DataTable();
        //  new DataTable('#taskTable');

        // var table = $('#taskTable').DataTable({
        //     "paging": false,
        //     "ordering": false,
        //     "info": false,
        //     "searching": true,
        // });
    </script>

    {{-- AJAX Script to filter data in table by time --}}
    <script type="text/javascript">
        $(document).ready(function(){
            $('#timeFilter').on('change', function(){
                var filter = $(this).val();
                // alert(filter);
                $.ajax({
                    url : "{{ route('view_task') }}",
                    type : 'GET',
                    dataType : 'json',
                    data : {'timeFilter' : filter},
                    success:function(data){
                        console.log(data);
                        $('#Content').empty();
                        $('#Content').html(data.table);
                    }
                });
            });
        });
    </script>

@endsection
