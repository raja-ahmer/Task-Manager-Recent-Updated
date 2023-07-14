@section('title')
    Category
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4 card p-3 bg-white">
                            <h3 class="text-center text-primary">Your Categories</h3>
                        </div>
                        <div class="table-responsive">
                            <a href="/add-category"><button class="btn btn-primary float-end m-3">Add Category</button></a>
                            <table id="categoryTable" class="table table-striped table-hover table-bordered datatable">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">Id</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($category as $item)
                                        <tr class="text-center">
                                            <td>{{ $item->categoryId }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            @if ($item->status == 1)
                                                <td>
                                                    <span class="mt-2 badge p-2 bg-success" style="color: #fff">Active</span>
                                                </td>
                                            @else
                                                <td>
                                                    <span class="mt-2 badge p-2 bg-danger" style="color: #fff">Not Active</span>
                                                </td>
                                            @endif
                                            <td>
                                                <a href="{{ route('edit_category', ['id' => $item->categoryId]) }}"
                                                    style="text-decoration: none"><button
                                                        class="btn btn-warning">Edit</button>&nbsp;</a>
                                                <a href="{{ route('delete_category', ['id' => $item->categoryId]) }}"
                                                    onclick="return confirm('Are you sure you want to delete?')"
                                                    style="text-decoration: none"><button
                                                        class="btn btn-danger">Delete</button></a>
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


    <script>
        let table = new DataTable('#categoryTable');
    </script>
@endsection
