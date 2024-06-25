@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">All Site Reviews</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                {{-- <h6 class="m-0 font-weight-bold text-primary">All Reviews</h6> --}}
                <a href="{{ route('site.review.create') }}" class="m-0 btn btn-primary">Add Site Reviews</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Profile Name</th>
                                <th>Rating</th>
                                <th>Link URL</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($site_reviews as $site_review)
                                <tr>
                                    <td>{{ $site_review->profile_name }}</td>
                                    <td>{{ $site_review->rating }}</td>
                                    <td>{{ $site_review->rating_url }}</td>
                                    <td>
                                        <a href="{{ route('site.review.edit', $site_review->id) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('site.review.destroy', $site_review->id) }}"
                                            method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this review?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
