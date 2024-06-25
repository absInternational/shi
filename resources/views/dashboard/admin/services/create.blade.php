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
                                <h1 class="h4 text-gray-900 mb-4">Add New Service</h1>
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
                            <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Service Name</label>
                                    <input id="name" class="form-control" type="text" name="name" required />
                                </div>
                                <div class="form-group">
                                    <label for="name">Meta Title</label>
                                    <input id="meta_title" class="form-control" type="text" name="meta_title" required />
                                </div>
                                <div class="form-group">
                                    <label for="name">Meta Description</label>
                                    <input id="meta_description" class="form-control" type="text" name="meta_description" required />
                                </div>
                                <div class="form-group">
                                    <label for="name">Slug</label>
                                    <input id="slug_name" class="form-control" type="text" name="slug_name" />
                                </div>
                                <div class="form-group">
                                    <label for="display_name">Service Display Name</label>
                                    <input id="display_name" class="form-control" type="text" name="display_name"
                                        required />
                                </div>
                                <div class="form-group">
                                    <label>Banner Image</label>
                                    <input class="form-control" type="file" name="banner_image"
                                        placeholder="Banner Image" required />
                                </div>
                                <div class="form-group">
                                    <label>Image 2</label>
                                    <input class="form-control" type="file" name="image2" placeholder="Image 2" />
                                </div>
                                <div class="form-group">
                                    <label>Image 3</label>
                                    <input class="form-control" type="file" name="image3" placeholder="Image 3" />
                                </div>
                                <div class="form-group">
                                    <label>Heading One</label>
                                    <input class="form-control" type="text" name="heading_one"
                                        placeholder="Heading One" />
                                </div>
                                <div class="form-group">
                                    <label>Text To Show</label>
                                    <textarea class="form-control" name="text_to_show" rows="4" placeholder="Text To Show"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Description One</label>
                                    <textarea class="form-control" name="desc_one" rows="4" placeholder="Description One"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Heading Two</label>
                                    <input class="form-control" type="text" name="heading_two"
                                        placeholder="Heading Two" />
                                </div>
                                <div class="form-group">
                                    <label>Descriptions of Heading Two</label>
                                    <input class="form-control" type="text" name="desc_two_one"
                                        placeholder="Desc Two One" /><br>
                                    <input class="form-control" type="text" name="desc_two_two"
                                        placeholder="Desc Two Two" /><br>
                                    <input class="form-control" type="text" name="desc_two_three"
                                        placeholder="Desc Two Three" /><br>
                                    <input class="form-control" type="text" name="desc_two_four"
                                        placeholder="Desc Two Four" /><br>
                                    <input class="form-control" type="text" name="desc_two_five"
                                        placeholder="Desc Two Five" /><br>
                                    <input class="form-control" type="text" name="desc_two_six"
                                        placeholder="Desc Two Six" /><br>
                                </div>
                                <div class="form-group">
                                    <label>Extra</label>
                                    <textarea class="form-control summernote" name="extra" rows="4" placeholder=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category_id" class="form-control" required>
                                        <option value="" selected disabled>Select</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control" required>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Service</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
