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
                                <h1 class="h4 text-gray-900 mb-4">Add New Site Review</h1>
                            </div>
                            <form action="{{ route('site.review.store') }}" method="POST">
                                @csrf
                                
                                <div class="form-group">
                                    <label>Profile Name</label>
                                    <select name="profile_name" class="form-control" required>
                                        <option value="">Select</option>
                                        <option value="Trust Pilot">Trust Pilot</option>
                                        <option value="Transport Reviews">Transport Reviews</option>
                                        <option value="BBB">BBB</option>
                                        <option value="Google">Google</option>

                                        <!-- Add other options as needed -->
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Rating</label>
                                    <input class="form-control" type="number" name="rating" placeholder="Rating" step="0.1" required />
                                </div>

                                <div class="form-group">
                                    <label>Rating URL</label>
                                    <input class="form-control" type="text" name="rating_url" placeholder="Rating URL" />
                                </div>
                                
                                
                                <button type="submit" class="btn btn-primary">Add Site Review</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
