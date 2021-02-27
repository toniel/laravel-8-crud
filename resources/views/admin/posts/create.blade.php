@extends('admin.template')
@section('title', 'Add New Post')
@section('content')
<div class="row">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('posts.store') }}" method="POST" >
                    @csrf
                    <div class="form-group">
                        <label for="title">Category</label>

                       <select name="category_id" class="form-control @error('category_id') is-invalid @enderror ">
                           <option value="0">Select Category</option>
                           @foreach ($categories as $category)
                               <option {{ old('category_id')==$category->id?'selected':'' }} value="{{ $category->id }}">{{ $category->name }}</option>
                           @endforeach
                       </select>
                        @error('category_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">Content</label>
                        <textarea name="content" class="form-control  @error('content') is-invalid @enderror" id="" cols="30" rows="10">{{ old('content') }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
