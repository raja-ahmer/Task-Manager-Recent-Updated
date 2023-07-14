@section('title')
    Add Task
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <form method="post" action="#">
                            @csrf

                            <div class="mb-4 card p-3 bg-white">
                                <h3 class="text-center text-primary">
                                    New Task
                                </h3>
                            </div>

                            <div class="form-row mt-3 mb-3">
                                <div class="form-group col-md-6">
                                    <label for="name">Task Name</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Task Name Here..." required>
                                    <span class="text-danger">
                                        @error('name')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="form-row mt-3 mb-3">
                                <div class="form-group col-md-6">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="description" id="description" placeholder="Enter Task Description Here..."
                                        required></textarea>
                                    <span class="text-danger">
                                        @error('description')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="form-row mt-3 mb-3">
                                <div class="form-group col-md-4">
                                    <label for="start-date">Start Date</label>
                                    <input type="date" class="form-control" name="start-date" id="start-date" required>
                                    <span class="text-danger">
                                        @error('start-date')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group col-md-4 mt-3 mb-3">
                                    <label for="end-date">End Date</label>
                                    <input type="date" class="form-control" name="end-date" id="end-date" required>
                                    <span class="text-danger">
                                        @error('end-date')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="form-row mt-3 mb-3">
                                <div class="form-group col-md-4">
                                    <label for="category">Category</label>
                                    <select class="form-control" name="category" id="category" required>
                                        <option selected>Please Select</option>
                                        @foreach ($category as $item)
                                            <option value="{{ $item->categoryId }}">{{ $item->name }}</option>
                                        @endforeach

                                        {{-- <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option> --}}
                                    </select>
                                    <span class="text-danger">
                                        @error('category')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="form-row mt-3 mb-3">
                                <div class="form-group col-md-4">
                                    <label for="user">Created By</label>
                                    <select class="form-control" name="user" id="user" >
                                        @foreach ($user as $item)
                                            <option selected value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">
                                        @error('user')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary col-md-1 mt-2">Add</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
