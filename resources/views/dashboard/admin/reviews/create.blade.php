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
                                <h1 class="h4 text-gray-900 mb-4">Add New Review</h1>
                            </div>
                            <form action="{{ route('reviews.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Site Name</label>
                                    <input class="form-control" type="text" name="site_name" placeholder="Site Name" required />
                                </div>
                                <div class="form-group">
                                    <label>Profile URL</label>
                                    <input class="form-control" type="text" name="profile_url" placeholder="Profile URL" />
                                </div>
                                <div class="form-group">
                                    <label>Rating</label>
                                    <input class="form-control" type="number" name="rating" placeholder="Rating" step="0.1" required />
                                </div>
                                <div class="form-group">
                                    <label>Number of Reviews</label>
                                    <input class="form-control" type="number" name="number_of_reviews" placeholder="Number of Reviews" />
                                </div>
                                <div class="form-group">
                                    <label>Review Date</label>
                                    <input class="form-control" type="date" name="review_date" />
                                </div>
                                <div class="form-group">
                                    <label>Person Name</label>
                                    <input class="form-control" type="text" name="person_name" placeholder="Person Name" />
                                </div>
                                <div class="form-group">
                                    <label>Rating URL</label>
                                    <input class="form-control" type="text" name="rating_url" placeholder="Rating URL" />
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" rows="4" placeholder="Description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <select name="type" class="form-control" required>
                                        <option value="Customer">Customer</option>
                                        <!-- Add other options as needed -->
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Review</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
