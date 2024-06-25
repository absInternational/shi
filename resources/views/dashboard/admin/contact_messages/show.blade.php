@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Contact Message Details</h1>

        <!-- Contact Message Details -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Contact Message Details</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Name:</strong> {{ $contactMessage->first_name }} {{ $contactMessage->last_name }}</p>
                        <p><strong>Email:</strong> {{ $contactMessage->email }}</p>
                        <p><strong>Phone:</strong> {{ $contactMessage->phone }}</p>
                        <p><strong>Website:</strong> {{ $contactMessage->website }}</p>
                        <p><strong>Subject:</strong> {{ $contactMessage->subject }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Message:</strong> {{ $contactMessage->message }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
