@extends('admin.template')
@section('title', 'Category')
@section('content')
<div class="row">

    <div class="container">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
          </div>
        @endif
        <a href="{{ route('categories.create') }}" class="btn btn-primary mb-2" >Add New Category</a>
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-warning" href="{{ route('categories.edit',$category) }}">Edit</a>
                                        <form action="{{ route('categories.destroy',$category) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Do you want to delete?')" type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        {{-- <a onclick="return confirm('Do you want to delete?')" class="btn btn-danger" href="{{ route('categories.destroy',$category) }}">Delete</a> --}}
                                    </div>
                                </td>
                            </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
