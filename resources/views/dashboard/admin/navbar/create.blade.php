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
                                <h1 class="h4 text-gray-900 mb-4">Add New Menu</h1>
                            </div>
                            <form action="{{ route('navbar.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Add New Menu</label>
                                    <input class="form-control" type="text" name="menu_name" placeholder="Add New Menu" required />
                                    @if ($errors->has('post_name'))
                                        <span class="text-danger">{{ $errors->first('menu_name') }}</span>
                                    @endif
                                </div>
                                <input class="btn btn-outline-primary" type="submit" name="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
