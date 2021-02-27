@extends('admin.template')
@section('title', 'Add New Category')
@section('content')
<div class="row">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('categories.store') }}" method="POST" >
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                        @error('name')
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
