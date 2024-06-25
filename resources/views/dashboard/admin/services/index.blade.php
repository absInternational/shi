@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">Services</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('services.create') }}" class="m-0 btn btn-primary">Add New Service</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Service Name</th>
                                <th>Display Name</th>
                                <th>Heading One</th>
                                <th>Preview</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <td>{{ $service->name }}</td>
                                    <td>{{ $service->display_name }}</td>
                                    <td>{{ $service->heading_one }}</td>
                                    <td><a class="title" target="_blank"
                                            href="{{ route('service.details', $service->slug) }}">Open Link</a>
                                    </td>
                                    <td>
                                        @if ($service->status == 1)
                                            Active
                                        @else
                                            Inactive
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('services.edit', $service->id) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('services.destroy', $service->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this service?')">Delete</button>
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
