@extends('dashboard.admin.layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Blogs</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- <h6 class="m-0 font-weight-bold text-primary">All Blogs</h6> --}}
            <a href="{{ route('blogs.create') }}" class="m-0 btn btn-primary">Add Blog</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Preview</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                        <tr>
                            <td>{{ $blog->post_name }}</td>
                            <td>
                                {{Illuminate\Support\Str::limit($blog->post_short_description, 50, '...')}}
                            </td>
                            <td nowrap> <a class="title" target="_blank" href="{{ route('blog.details', $blog->slug_name) }}">Open Link</a>
                                    </td>
                            <td>
                                <img src="{{ asset($blog->post_image) }}" alt="{{ $blog->post_name }}"
                                    style="max-width: 150px; max-height: 100px;">
                            </td>
                            <td>
                                @if ($blog->status == 1)
                                    Active
                                @else
                                    Inactive
                                @endif
                            </td>
                            <td nowrap >
                                <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this blog?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-5">
                    {{ $blogs->links('pagination.simple-number') }}
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
