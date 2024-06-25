@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Service Categories</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                {{-- <h6 class="m-0 font-weight-bold text-primary">All Service Categories</h6> --}}
                <a href="{{ route('service_categories.create') }}" class="m-0 btn btn-primary">All Service
                    Categories</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($serviceCategories as $serviceCategory)
                                <tr>
                                    <td>{{ $serviceCategory->name }}</td>
                                    <td>
                                        @if ($serviceCategory->status == 'active')
                                            Active
                                        @else
                                            Inactive
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('service_categories.edit', $serviceCategory->id) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('service_categories.destroy', $serviceCategory->id) }}"
                                            method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this service category?')">Delete</button>
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
