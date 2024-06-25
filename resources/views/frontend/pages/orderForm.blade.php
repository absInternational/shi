@extends('frontend.layouts.app')

@section('content')
    @include('partials.return_function2')
    <style>
        body {
            scroll-behavior: smooth;
        }

        @import url('https://fonts.googleapis.com/css?family=Open+Sans|Rock+Salt|Shadows+Into+Light|Cedarville+Cursive');

        @import url('https://fonts.googleapis.com/css?family=Open+Sans|Rock+Salt|Shadows+Into+Light|Cedarville+Cursive');

        .border {
            border: 1px solid #000000 !important;
        }

        .highlight {
            background: black;
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid black;
            border-radius: .25rem;
        }

        .mainTitle {
            width: 100%;
            float: left;
            padding: 10px;
            margin-bottom: 10px;
        }

        .text-justify {
            text-align: justify !important;
        }

        ul,
        ol {
            margin: 0px;
            padding: 0px;
            list-style-type: none;
        }

        .stepContainer span {
            font-size: 25px;
            width: 40px;
            background: #FF9800;
            padding: 10px;
            border-radius: 50%;
            margin-right: 2%;
            float: left;
            line-height: 20px;
            text-align: center;
            color: white;
            font-weight: 600;
        }

        .header_cover {
            width: 100%;
            height: 250px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .header_heading {

            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/opacity/see-through */
            color: white;
            font-weight: bold;
            position: absolute;
            top: 12pc;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 100%;
            padding: 20px;
            text-align: center;
        }

        .sign1 {
            padding: 19px 15px 12px 38px;
            font-size: 30px;
            line-height: 30px;
            color: #000;
            background: #fff;
            border: 1px solid #000;
            font-family: 'Shadows Into Light', cursive;
            font-weight: bold;
        }

        .sign2 {
            padding: 19px 15px 12px 38px;
            font-size: 30px;
            line-height: 30px;
            color: #000;
            background: #fff;
            border: 1px solid #000;
            font-family: 'Rock Salt', cursive;
            font-weight: bold;

        }

        .sign3 {
            padding: 19px 15px 12px 38px;
            font-size: 30px;
            line-height: 30px;
            color: #000;
            background: #fff;
            border: 1px solid #000;
            font-family: 'Jazz LET, fantasy';
            font-weight: bold;
        }

        .sign4 {
            padding: 19px 15px 12px 38px;
            font-size: 30px;
            line-height: 30px;
            color: #000;
            background: #fff;
            border: 1px solid #000;
            font-family: 'prestige';
            font-size: 36px;
            font-weight: bold;
        }

        .sign1:hover,
        .sign2:hover,
        .sign3:hover,
        .sign4:hover {
            background-color: black;
            color: white;
        }

        #signShw1,
        #signShw2,
        #signShw3,
        #signShw4 {
            width: 95%;

        }


        .checkedClass {
            background-color: black;
        }

        input[type=radio] {
            display: none;
        }

        .heading {
            line-height: 66px;
            font-size: 36px;
            font-family: math;
            font-weight: 900;
            float: left;
        }

        .subhead {
            float: right;
            margin-top: 15px;
            font-size: 23px;
            font-family: cursive;
        }

        .bg-secondary {
            background-color: #080808 !important;
        }

        .img {
            background-image: url(https://www.Autotransportgo.com/img/roadtransport.jpg);
            filter: drop-shadow(10px 10px 10px grey);
            width: 100%;
            height: 250px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            filter: blur(2px);
            -webkit-filter: blur(8px);


        }

        strong,
        h5 {
            font-family: "Luminari", "fantasy";
        }

        input,
        select,
        textarea {
            border: 1px solid #b0a6e0 !important;
        }

        body {
            /*background-image: linear-gradient(to right, rgb(109, 213, 250), rgb(255, 255, 255), rgb(41, 128, 185)) !important;*/
            box-shadow: 2px 2px #9E9E9E !important;
            background-color: white;
        }

        .card-header {
            color: black !important;
            justify-content: center !important;
            font-weight: 800 !important;
            font-size: 25px !important;
            border: 2px solid black !important;
            background-color: #6c757d47 !important;

        }

        .card-body {
            border: 2px solid black !important;
        }

        .stepTitle {
            position: relative;
            top: 12px;
        }

        .app-content .side-app {
            padding: 0px !important;
        }

        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>

    <section class="breadcrumb-wrapper" id="breadcrumb-wrapper-hide">
        <div class="container-flude">
            <div class="row">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-error">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="col-lg-12" data-sal="slide-down" data-sal-duration="800">
                    <div class="tj-input-form" data-bg-image="">
                        <h4 class="title">Enter Details</h4>
                        <form action="{{ route('get.order.details') }}" method="post" class="rd-mailform"
                            id="calculatePriceFrom" data-parsley-validate data-parsley-errors-messages-disabled
                            enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="number" name="order_id" id="order_id" class="form-control form-control-lg"
                                    placeholder="Enter order#" />
                                <label class="form-label" for="form3Example3">Order #.</label>
                            </div>

                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
                                    placeholder="Enter a valid email address" required />
                                <label class="form-label" for="form3Example3">Email address</label>
                                <div class="invalid-feedback fw-bold fs-5" style="display: none"></div>
                            </div>

                            <div class="tj-theme-button mt-3">
                                <button class="tj-submit-btn" type="submit" value="submit">
                                    Submit <i class="fa-light fa-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="breadcrumb-wrapper-2" id="all-order-details">
    </section>
@endsection

@section('extraScript')
    <script>
        $(document).ready(function() {
            function get_cartype($id) {
                if ($id == 1) {
                    return "Open";
                } else {
                    return "Enclosed";
                }
            }

            function get_condtion($id) {
                if ($id == 1) {
                    return "Running";
                } else {
                    return "Not- Running";
                }
            }


            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            $('#calculatePriceFrom').submit(function(event) {
                event.preventDefault();

                var formData = $('#calculatePriceFrom').serialize();
                $('.invalid-feedback').hide();
                $('#all-order-details').html('');

                $.ajax({
                    type: 'POST',
                    url: '{{ route('get.order.details') }}',
                    data: formData,
                    success: function(response) {
                        // Display SweetAlert input box
                        Swal.fire({
                            title: 'Verification Code',
                            input: 'text',
                            inputLabel: 'Enter verification code',
                            showCancelButton: true,
                            confirmButtonText: 'Verify',
                            cancelButtonText: 'Close',
                            preConfirm: (code) => {
                                if (!code) {
                                    Swal.showValidationMessage(
                                        'Verification code cannot be empty');
                                }
                                return code;
                            }
                        }).then((result) => {
                            if (result.isConfirmed) {
                                var verificationCode = result.value;
                                // Handle verification code
                                if (verificationCode !== "") {
                                    $.ajax({
                                        type: "POST",
                                        url: "{{ route('verify.email') }}",
                                        data: {
                                            code: verificationCode
                                        },
                                        headers: {
                                            'X-CSRF-TOKEN': csrfToken
                                        },
                                        success: function(response) {
                                            $('#all-order-details').html(
                                                response);
                                        },
                                        error: function(xhr, status, error) {
                                            console.error(xhr.responseText);
                                            console.log('das3214');
                                            $('.invalid-feedback').html(xhr
                                                .responseText);
                                            $('.invalid-feedback').show();
                                        }
                                    });
                                } else {
                                    alert("Please enter the verification code.");
                                }
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        // $('#all-order-details').html('');
                        var errorMessage = xhr.responseText;
                        $('.invalid-feedback').html(errorMessage);
                        $('.invalid-feedback').show();
                    }
                });
            });

            $(document).on('submit', '#submitEmailOrder', function() {
                event.preventDefault();

                var formData = $('#submitEmailOrder').serialize();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('order.form.store') }}',
                    data: formData,
                    success: function(response) {
                        console.log('response.message', response.message);
                        // $('#all-order-details').html('');
                        $('#all-order-details').html(response);
                    },
                    error: function(xhr, status, error) {
                        // $('#all-order-details').html('');
                        var errorMessage = xhr.responseText;
                        $('.invalid-feedback').html(errorMessage);
                        $('.invalid-feedback').show();
                    }
                });
            });

            $(document).on('submit', '#submitEmailOrderCard', function() {
                event.preventDefault();

                var formData = $('#submitEmailOrderCard').serialize();
                formData += '&save_but=' + $('#save_but_value').val();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('order.form.storeCard') }}',
                    data: formData,
                    success: function(response) {
                        console.log('response.message', response.message);
                        $('#all-order-details').html(`
                            <div class="alert alert-success">
                                ${response.message}
                            </div>
                            ${response}
                        `);
                        $('#calculatePriceFrom')[0].reset();
                    },
                    error: function(xhr, status, error) {
                        // $('#all-order-details').html('');
                        var errorMessage = xhr.responseText;
                        $('.invalid-feedback').html(errorMessage);
                        $('.invalid-feedback').show();
                    }
                });
            });

            $(document).on('click', '#submit_with_pay_btn', function() {
                $('#save_but_value').val('save_with_pay');
            });

            $(document).on('click', '#cancel_btn', function() {
                $('#save_but_value').val('save_without_pay');
            });
        });
    </script>
@endsection
