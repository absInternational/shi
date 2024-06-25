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
                                <h1 class="h4 text-gray-900 mb-4">Add New Blog</h1>
                            </div>
                            <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Blog Title</label>
                                    <input class="form-control" type="text" name="post_name" placeholder="Blog Title" required />
                                    @if ($errors->has('post_name'))
                                        <span class="text-danger">{{ $errors->first('post_name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Slug Name</label>
                                    <input class="form-control" type="text" name="slug_name" placeholder="Use Slug-Name"
                                        required />
                                    @if ($errors->has('slug_name'))
                                        <span class="text-danger">{{ $errors->first('slug_name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category" class="form-control" required>
                                        <option value="">Select Category</option>
                                        <option value="marketing">Marketing</option>
                                        <option value="Blogs">Blogs</option>
                                    </select>
                                    @if ($errors->has('category'))
                                        <span class="text-danger">{{ $errors->first('category') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Blog Short Description</label>
                                    <!--<textarea class="ckeditorTn1 form-control" name="post_short_description" maxlength="10"></textarea>-->
                                    <input class="form-control" type="text" name="post_short_description"
                                        placeholder="Short Description" required />
                                    @if ($errors->has('post_short_description'))
                                        <span class="text-danger">{{ $errors->first('post_short_description') }}</span>
                                    @endif
                                </div>
                                {{-- <div class="form-group">
                                    <label>Blog Long Description</label>
                                    <!--<textarea class="ckeditorTn2 form-control" name="post_description" maxlength="10"></textarea>-->
                                    <textarea class="ckeditorzee2 form-control" name="post_description" maxlength="10"></textarea>
                                    @if ($errors->has('post_description'))
                                        <span class="text-danger">{{ $errors->first('post_description') }}</span>
                                    @endif
                                </div> --}}
                                <div class="form-group">
                                    <label>Blog Long Description</label>
                                    <textarea class="summernote form-control" name="post_description" maxlength="10"></textarea>
                                    @if ($errors->has('post_description'))
                                        <span class="text-danger">{{ $errors->first('post_description') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Meta Title</label>
                                    <input class="form-control" type="text" name="meta_title" placeholder="Meta Title"
                                        required />
                                    @if ($errors->has('meta_title'))
                                        <span class="text-danger">{{ $errors->first('meta_title') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Canonical Url</label>
                                    <input class="form-control" type="text" name="canonical_url" placeholder="Canonical Url"
                                         />
                                         {{-- @if ($errors->has('canonical_url'))
                                        <span class="text-danger">{{ $errors->first('canonical_url') }}</span>
                                    @endif --}}
                                </div>
                                <div class="form-group">
                                    <label>Meta Keyword</label>
                                    <input class="form-control" type="text" name="meta_keyword" placeholder="Meta Keyword"
                                        required />
                                    @if ($errors->has('meta_keyword'))
                                        <span class="text-danger">{{ $errors->first('meta_keyword') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <input class="form-control" type="text" name="meta_description"
                                        placeholder="Meta Description" required />
                                    @if ($errors->has('meta_description'))
                                        <span class="text-danger">{{ $errors->first('meta_description') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Upload Blog Image</label>
                                    <input type="file" name="image" class="form-control-file form-control height-auto"
                                        required />
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
