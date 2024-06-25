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
                                <h1 class="h4 text-gray-900 mb-4">Edit Review</h1>
                            </div>
                            <form action="{{ route('reviews.update', $review->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Site Name</label>
                                    <input class="form-control" type="text" name="site_name" value="{{ $review->site_name }}" placeholder="Site Name" required />
                                </div>
                                <div class="form-group">
                                    <label>Profile URL</label>
                                    <input class="form-control" type="text" name="profile_url" value="{{ $review->profile_url }}" placeholder="Profile URL" />
                                </div>
                                <div class="form-group">
                                    <label>Rating</label>
                                    <input class="form-control" type="number" name="rating" value="{{ $review->rating }}" placeholder="Rating" step="0.1" required />
                                </div>
                                <div class="form-group">
                                    <label>Number of Reviews</label>
                                    <input class="form-control" type="number" name="number_of_reviews" value="{{ $review->number_of_reviews }}" placeholder="Number of Reviews" />
                                </div>
                                <div class="form-group">
                                    <label>Review Date</label>
                                    <input class="form-control" type="date" name="review_date" value="{{ $review->review_date }}" />
                                </div>
                                <div class="form-group">
                                    <label>Person Name</label>
                                    <input class="form-control" type="text" name="person_name" value="{{ $review->person_name }}" placeholder="Person Name" />
                                </div>
                                <div class="form-group">
                                    <label>Rating URL</label>
                                    <input class="form-control" type="text" name="rating_url" value="{{ $review->rating_url }}" placeholder="Rating URL" />
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" rows="4" placeholder="Description">{{ $review->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <select name="type" class="form-control" required>
                                        <option value="Customer" {{ $review->type == 'Customer' ? 'selected' : '' }}>Customer</option>
                                        <!-- Add other options as needed -->
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Review</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
