@extends('layouts.admin_master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Category</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="image">Category Image</label>
                            <input type="file" name="image" id="image" class="form-control" accept="image/*">
                            @if($category->image)
                                <div class="mt-2">
                                    <label>Current Image:</label>
                                    <img src="{{ asset('storage/' . $category->image) }}" alt="Category Image" class="img-thumbnail" style="width: 100px; height: 100px;">
                                </div>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-warning">Update Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
