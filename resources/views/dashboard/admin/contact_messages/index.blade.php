@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">All Contact Messages</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                {{-- <h6 class="m-0 font-weight-bold text-primary">All Contact Messages</h6> --}}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>message</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contactMessages as $row)
                                <tr>
                                    <td>{{ $row->first_name . ' ' . $row->last_name }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->subject }}</td>
                                    <td>{{ $row->message }}</td>
                                    <td>
                                        <a href="{{ route('contact_messages.show', $row->id) }}"
                                            class="btn btn-primary btn-sm">View</a>
                                        {{-- <a href="{{ route('contact_messages.destroy', $row->id) }}"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this message?')">Delete</a> --}}
                                        <form action="{{ route('contact_messages.destroy', $row->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this message?')">Delete</button>
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
