@section('title')
    Add Category
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
                                <h3 class="text-center text-primary">Add New Category</h3>
                            </div>

                            <div class="form-row mt-3 mb-3">
                                <div class="form-group col-md-6">
                                    <label for="categoryName">Category Name</label>
                                    <input type="text" class="form-control" name="categoryName" id="categoryName"
                                        placeholder="Category Name Here..." required>
                                    <span class="text-danger">
                                        {{-- @error('categoryName')
                                            {{$message}}
                                        @enderror --}}
                                    </span>
                                </div>
                            </div>
                            <div class="form-row mt-3 mb-3">
                                <div class="form-group col-md-6">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option selected>Please Select</option>
                                        <option value="1">Active</option>
                                        <option value="0">Not Active</option>
                                    </select>
                                    <span class="text-danger">
                                        {{-- @error('status')
                                            {{$message}}
                                        @enderror --}}
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
