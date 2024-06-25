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
                                <h1 class="h4 text-gray-900 mb-4">Edit Service</h1>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('services.update', $service->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Service Name</label>
                                    <input id="name" class="form-control" type="text" name="name"
                                        value="{{ $service->name }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="name">Meta Title</label>
                                    <input id="meta_title" class="form-control" type="text" name="meta_title" required value="{{ $service->meta_title }}" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Meta Description</label>
                                    <input id="meta_description" class="form-control" type="text" name="meta_description" value="{{ $service->meta_description }}"  required />
                                </div>
                                <div class="form-group">
                                    <label for="name">Slug</label>
                                    <input id="slug_name" class="form-control" type="text" name="slug_name" value="{{ $service->slug }}" />
                                </div>
                                <div class="form-group">
                                    <label for="display_name">Service Display Name</label>
                                    <input id="display_name" class="form-control" type="text" name="display_name"
                                        value="{{ $service->display_name }}" required value="{{ $service->name }}" />
                                </div>
                                <div class="form-group">
                                    <label for="banner_image">Banner Image</label>
                                    <input id="banner_image" class="form-control" type="file" name="banner_image" />
                                </div>
                                <div class="form-group">
                                    <label for="image2">Image 2</label>
                                    <input id="image2" class="form-control" type="file" name="image2" />
                                </div>
                                <div class="form-group">
                                    <label for="image3">Image 3</label>
                                    <input id="image3" class="form-control" type="file" name="image3" />
                                </div>
                                <div class="form-group">
                                    <label for="heading_one">Heading One</label>
                                    <input id="heading_one" class="form-control" type="text" name="heading_one"
                                        value="{{ $service->heading_one }}" />
                                </div>
                                <div class="form-group">
                                    <label for="desc_one">Description One</label>
                                    <textarea id="desc_one" class="form-control" name="desc_one" rows="4">{{ $service->desc_one }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="heading_two">Heading Two</label>
                                    <input id="heading_two" class="form-control" type="text" name="heading_two"
                                        value="{{ $service->heading_two }}" />
                                </div>
                                <div class="form-group">
                                    <label for="desc_two_one">Descriptions of Heading Two</label>
                                    <input id="desc_two_one" class="form-control" type="text" name="desc_two_one"
                                        value="{{ $service->desc_two_one }}" /><br>
                                    <input class="form-control" type="text" name="desc_two_two"
                                        value="{{ $service->desc_two_two }}" /><br>
                                    <input class="form-control" type="text" name="desc_two_three"
                                        value="{{ $service->desc_two_three }}" /><br>
                                    <input class="form-control" type="text" name="desc_two_four"
                                        value="{{ $service->desc_two_four }}" /><br>
                                    <input class="form-control" type="text" name="desc_two_five"
                                        value="{{ $service->desc_two_five }}" /><br>
                                    <input class="form-control" type="text" name="desc_two_six"
                                        value="{{ $service->desc_two_six }}" /><br>
                                </div>
                                <div class="form-group">
                                    <label for="extra">Extra</label>
                                    <textarea id="extra" class="form-control summernote" name="extra" rows="4">{{ $service->extra }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category_id" class="form-control" required>
                                        <option value="" selected disabled>Select</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $service->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select id="status" name="status" class="form-control" required>
                                        <option value="1" {{ $service->status == 1 ? 'selected' : '' }}>Active
                                        </option>
                                        <option value="0" {{ $service->status == 0 ? 'selected' : '' }}>Inactive
                                        </option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Service</button>
                            </form>
                            @if ($errors->any())
                                <div class="alert alert-danger mt-3">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
