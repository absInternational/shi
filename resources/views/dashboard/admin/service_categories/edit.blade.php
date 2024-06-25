@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit Service Category</h1>
                            </div>
                            <form action="{{ route('service_categories.update', $serviceCategory->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" name="name" value="{{ $serviceCategory->name }}" required />
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control" required>
                                        <option value="active" @if ($serviceCategory->status == 'active') selected @endif>Active</option>
                                        <option value="inactive" @if ($serviceCategory->status == 'inactive') selected @endif>Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Service Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
