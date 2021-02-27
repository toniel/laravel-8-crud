@extends('admin.template')
@section('title', 'Post')
@section('content')
<div class="row">

    <div class="container">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
          </div>
        @endif
        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-2" >Add New Post</a>
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Date Pusblished</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($posts as $post)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->content }}</td>
                                <td>{{ $post->date }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">No Post</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
