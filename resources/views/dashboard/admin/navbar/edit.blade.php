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
                                <h1 class="h4 text-gray-900 mb-4">Edit Menu</h1>
                            </div>
                            <form action="{{ route('navbar.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Edit Menu</label>
                                    <input class="form-control" type="text" name="menu_name" placeholder="Edit Menu" value="{{ $menu->menu_name }}" required />
                                    @if ($errors->has('post_name'))
                                        <span class="text-danger">{{ $errors->first('menu_name') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="1" {{ $menu->status == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $menu->status == 0 ? 'selected' : '' }}>Inactive</option>
                                    </select>
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
