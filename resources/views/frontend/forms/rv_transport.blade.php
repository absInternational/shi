@extends('frontend.layouts.app')

@section('content')


    <style>
        .lab-cos {
            font-size: 15px;
            font-weight: 500;
            color: var(--tj-white-color);
            margin-bottom: 10px;
        }


        .input-container {
            height: 34px;
            background: white;
            display: flex;
            align-items: center;
            /* border: 1px solid #ccc; */
            border-radius: 4px;
            padding: 8px 0px 8px 0px;
            width: fit-content;

        }

        .input-container1 {
            height: 34px;
            background: white;
            display: flex;
            align-items: center;
            /* border: 1px solid #ccc; */
            border-radius: 4px;
            padding: 8px 0px 8px 0px;
            width: fit-content;

        }

        .input-field {
            width: 50px;
            padding: 5px;
            font-size: 14px;
            border: none;
            outline: none;
        }

        .input-field-1 {
            width: 65px;
            padding: 0px 0px 0px 10px;
            font-size: 14px;
            border: none;
            outline: none;
        }

        .separator {
            margin: 0px 0px 0px 0px;
            font-size: 14px;
        }

        .separators {
            margin: 0px 5px 0px 0px;
            font-size: 14px;
        }

        .separators-w {
            margin: 0px 5px 0px 0px;
            font-size: 14px;
        }

        .input-container input[type="number"] {
            -moz-appearance: textfield;
        }

        .input-container input[type="number"]::-webkit-outer-spin-button,
        .input-container input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .form-wrap {
            margin-bottom: 10px;
            position: relative;
        }

        .form-label-outside {
            color: white;
            display: block;
            margin-bottom: 5px;
        }

        .input-container {
            display: flex;
            align-items: center;
        }

        .input-container input {
            border: none;
            /* border-bottom: 1px solid #ccc; */
            padding: 5px 0px 5px 0px;
            font-size: 14px;
            width: 38px;
            text-align: center;
            /* margin-right: 5px; */
        }

        .input-container .placeholders {
            /* color:white; */
            position: relative;
            right: 72px;
            color: black;
            display: inline-block;
            width: auto;

            padding: 0px 8px;
            /* background: white; */
        }

        .err-style {
            color: red;
        }

        .tj-input-form .input-form label {
            font-size: 15px;
            font-weight: 500;
            color: var(--tj-white-color);
            margin-bottom: 10px;
        }
    </style>
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">RV Transport</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span>RV Transport</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== breadcrumb End ==============-->

    <section class="tj-choose-us-section-rv">
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
                        <h4 class="title text-center">Instant RV Shipping Quote!</h4>
                        <form action="{{ route('submit.quote') }}" method="post" class="rd-mailform"
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
                            <input type="hidden" name="vehicle_opt" value="RV" hidden>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-form">
                                        <label class="d-block"> Your Name:</label>
                                        <input type="text" id="name" name="name" placeholder="Full Name"
                                            required="" />
                                        <small id="errName" class="err-style"></small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form">
                                        <label class="d-block"> Phone:</label>
                                        <input type="text" id="phone" name="phone" placeholder="Phone Number"
                                            required="" />
                                        <small id="errPhone" class="err-style"></small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form">
                                        <label class="d-block"> Email Address:</label>
                                        <input type="email" id="email" name="email" placeholder="Your Email Address"
                                            required="" />
                                        <small id="errEmail" class="err-style"></small>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block"> Pickup Location:</label>
                                        <input type="text" id="pickup-location" name="origin"
                                            placeholder="Ex: 90005 Or Los Angeles" required="" />
                                        <small id="errOLoc" class="err-loc"></small>
                                        <ul class="suggestions suggestionsTwo"></ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block"> Delivery Location:</label>
                                        <input type="text" id="delivery-location" name="destination"
                                            placeholder="Ex: 90005 Or Los Angeles" required="" />
                                        <small id="errDLoc" class="err-loc"></small>
                                        <ul class="suggestions suggestionsTwo"></ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row select-bm">
                                <div class="col-md-12 text-center">
                                    <h4 class="text-white">RV Information</h4>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form tj-select">
                                        <label> Year</label>
                                        <select class="nice-select vehicle-year" name="year[]" id="year">
                                            <option value="" disabled selected>Select Year</option>
                                            @php
                                                $currentYear = date('Y');
                                                for ($year = $currentYear; $year >= 1936; $year--) {
                                                    echo "<option value='$year'>$year</option>";
                                                }
                                            @endphp
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form tj-select">
                                        <label>Make</label>
                                        <input type="text" id="make" name="make[]" placeholder="Enter Make"
                                            required="" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form tj-select vehicle-model-div">
                                        <label>Model</label>
                                        <input type="text" id="model" name="model[]" placeholder="Enter Model"
                                            required="" />
                                    </div>
                                </div>
                            </div>

                            <a class="add-car" id="addVehicleBtn"><i class="fa fa-plus"></i> Add
                                RV</a>

                            <div id="vehicles-container">
                            </div>




                            <div class="row">
                                <div class="col-4">
                                    <div class="input-form">
                                        <label for="rv_type">RV Types</label>
                                        <select class="nice-select " id="rv_type" name="rv_type">
                                            <option value="" disabled selected>Select</option>
                                            <option value="Class A Motorhome">Class A Motorhome</option>
                                            <option value="Class B Motorhome">Class B Motorhome</option>
                                            <option value="Class C Motorhome">Class C Motorhome</option>
                                            <option value="Travel Trailer">Travel Trailer</option>
                                            <option value="Folding Tent Trailer">Folding Tent Trailer</option>
                                            <option value="Fifth-Wheel">Fifth-Wheel</option>
                                            <option value="Truck Camper">Truck Camper</option>
                                            <option value="Others">Other</option>
                                        </select>
                                        <input type="text" class="form-control" id="otherCategoryInput"
                                            name="rv_type" disabled style="display: none;" placeholder="Specify Please">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="trailer_type" class="text-white">Select Trailer Type</label>
                                        <select class="nice-select " id="trailer_type" name="trailer_type">
                                            <option value="" selected disabled>Select</option>
                                            <option value="VAN (V)">VAN (V)</option>
                                            <option value="FLATBED (F)">FLATBED (F)</option>
                                            <option value="STEP DECK (SD)">STEP DECK (SD)</option>
                                            <option value="REMOVABLE GOOSENECK (RGN)">REMOVABLE GOOSENECK (RGN)</option>
                                            <option value="CONESTOGA (CS)">CONESTOGA (CS)</option>
                                            <option value="CONTAINER / DRAYAGE (C)">CONTAINER / DRAYAGE (C)</option>
                                            <option value="TRUCK (T)">TRUCK (T)</option>
                                            <option value="POWER ONLY (PO)">POWER ONLY (PO)</option>
                                            <option value="HOT SHOT (HS)">HOT SHOT (HS)</option>
                                            <option value="LOWBOY (LB)">LOWBOY (LB)</option>
                                            <option value="ENDUMP (ED)">ENDUMP (ED)</option>
                                            <option value="LANDOLL (LD)">LANDOLL (LD)</option>
                                            <option value="PARTIAL (PT)">PARTIAL (PT)</option>
                                            <option value="20ft container">20ft container</option>
                                            <option value="40ft container">40ft container</option>
                                            <option value="48ft container">48ft container</option>
                                            <option value="53ft container">53ft container</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="condition" class="text-white">Condition</label>
                                        <select class="nice-select " id="condition" name="condition">
                                            <option value="Running" selected>Running</option>
                                            <option value="Non Running">Non Running</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3 mt-3">
                                <div class="col-md-3">

                                    <label class="lab-cos">Length</label>
                                    <div class="input-container">
                                        <input type="number" id="feet-input" class="input-field" placeholder=""
                                            min="0" maxlength="3" oninput="limitDigits(this, 3)">
                                        <span class="separator">(Ft.)</span>
                                        <input type="number" id="inches-input" class="input-field" placeholder=""
                                            min="0" max="11" maxlength="2" oninput="limitDigits(this, 2)">
                                        <span class="separators">(In.)</span>
                                    </div>
                                </div>

                                <div class="col-md-3">

                                    <label class="lab-cos">Width</label>
                                    <div class="input-container">
                                        <input type="number" id="feet-input1" class="input-field" placeholder=""
                                            min="0" maxlength="3" oninput="limitDigits(this, 3)">
                                        <span class="separator">(Ft.)</span>
                                        <input type="number" id="inches-input1" class="input-field" placeholder=""
                                            min="0" max="11" maxlength="2" oninput="limitDigits(this, 2)">
                                        <span class="separators">(In.)</span>
                                    </div>
                                </div>

                                <div class="col-md-3">

                                    <label class="lab-cos">Height</label>
                                    <div class="input-container">
                                        <input type="number" id="feet-input2" class="input-field" placeholder=""
                                            min="0" maxlength="3" oninput="limitDigits(this, 3)">
                                        <span class="separator">(Ft.)</span>
                                        <input type="number" id="inches-input2" class="input-field" placeholder=""
                                            min="0" max="11" maxlength="2" oninput="limitDigits(this, 2)">
                                        <span class="separators">(In.)</span>
                                    </div>
                                </div>

                                <div class="col-md-3">

                                    <label class="lab-cos">Weight</label>
                                    <div class="input-container1">
                                        <input type="" id="feet-input" class="input-field-1" placeholder=""
                                            min="0" maxlength="6" oninput="limitDigits(this, 6)">
                                        <span class="separators-w">(Lbs.)</span>

                                    </div>
                                </div>





                            </div>

                            <div class="row mt-3">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="load_method" class="text-white">Load Method</label>
                                        <select class="nice-select " id="load_method" name="load_method">
                                            <option value="" disabled selected>Select</option>
                                            <option value="LOADING DOCK">LOADING DOCK</option>
                                            <option value="CRANE">CRANE</option>
                                            <option value="FORKLIFT">FORKLIFT</option>
                                            <option value="DRIVE ROLL">DRIVE ROLL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="unload_method" class="text-white">Unload Method</label>
                                        <select class="nice-select " id="unload_method" name="unload_method">
                                            <option value="" disabled selected>Select</option>
                                            <option value="LOADING DOCK">LOADING DOCK</option>
                                            <option value="CRANE">CRANE</option>
                                            <option value="FORKLIFT">FORKLIFT</option>
                                            <option value="DRIVE ROLL">DRIVE ROLL</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="available_at_auction"
                                            name="available_at_auction" value="1" />
                                        <label class="form-check-label text-white" for="available_at_auction"> Available
                                            at
                                            Auction?</label>
                                    </div>

                                    <div class="input-form div-link mt-3" style="display: none;">
                                        <label class="d-block"> Enter Link:</label>
                                        <input class="form-control" type="url" id="link" name="link"
                                            placeholder="Enter Link" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="input-form mt-3">
                                        <label class="d-block" class="text-white"> Image:</label>
                                        <input class="form-control image_input" type="file" accept="image/*" multiple
                                            onchange="previewImages(event)">
                                        <div class="image-preview-container" id="imagePreviewContainer"></div>
                                        <!-- <input class="form-control image_input" type="file" id="image" name="image"
                                            placeholder="Upload File" /> -->
                                    </div>
                                </div>
                            </div>








                            <div class="tj-theme-button text-center mt-3">
                                <button class="tj-submit-btn" type="submit" value="submit">
                                    Calculate Price <i class="fa-light fa-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('extraScript')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        function limitDigits(element, maxDigits) {
            if (element.value.length > maxDigits) {
                element.value = element.value.slice(0, maxDigits);
            }
        }

        $(document).ready(function() {
            $('#inches-input').on('input', function() {
                if (this.value > 11) {
                    this.value = 11;
                } else if (this.value < 0) {
                    this.value = 0;
                }
            });

            // Optionally, you can also prevent the user from typing non-numeric characters.
            $('#feet-input, #inches-input').on('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        });

        $(document).ready(function() {
            $('#inches-input1').on('input', function() {
                if (this.value > 11) {
                    this.value = 11;
                } else if (this.value < 0) {
                    this.value = 0;
                }
            });

            // Optionally, you can also prevent the user from typing non-numeric characters.
            $('#feet-input1, #inches-input1').on('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        });

        $(document).ready(function() {
            $('#inches-input2').on('input', function() {
                if (this.value > 11) {
                    this.value = 11;
                } else if (this.value < 0) {
                    this.value = 0;
                }
            });

            // Optionally, you can also prevent the user from typing non-numeric characters.
            $('#feet-input, #inches-input2').on('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        });
    </script>

    <script>
        function moveToNext(current, nextId) {
            if (current.value.length >= current.maxLength) {
                document.getElementById(nextId).focus();
            }
        }


        // document.querySelectorAll('input[type="text"]').forEach((input) => {
        //     input.addEventListener("input", function() {
        //         this.value = this.value.replace(/[^0-9]/g, "");
        //     });
        // });
    </script>

    <script>
        $(document).ready(function() {
            $('#category').change(function() {
                var selectedCategory = $(this).val();
                if (selectedCategory === "Others") {
                    $('#otherCategoryInput').show();
                    $('#otherCategoryInput').attr('disabled', false);
                } else {
                    $('#otherCategoryInput').hide();
                    $('#otherCategoryInput').attr('disabled', true);
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            function addNewVehicle() {
                var newVehicleHtml =
                    `
                    <div class="vehicle-info">
                        <div class="row select-bm">
                            <div class="col-md-4">
                                <div class="input-form tj-select">
                                    <label> Year</label>
                                    <select class="nice-select year" name="year[]" id="year"> <option value="" disabled selected>Select Year</option>`;
                var currentYear = {{ date('Y') }};
                for (var year = currentYear; year >= 1936; year--) {
                    newVehicleHtml += `<option value="${year}">${year}</option>`;
                }

                newVehicleHtml +=
                    `</select>
                                </div>
                            </div>
                            <div class="col-md-4">
                <div class="input-form tj-select">
                    <label>Make</label>
                    <input type="text" id="make" name="make[]"
                                            placeholder="Enter Make" required="" />
                            </div>
                        </div>
                            <div class="col-md-4">
                                <div class="input-form tj-select model-div">
                                    <label>Model</label>
                                    <input type="text" id="model" name="model[]" placeholder="Enter Model"
                                        required="" />
                                    <!-- Bin icon for deleting vehicle -->
                                    <span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 10px; color: red; cursor: pointer;"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                `;

                $('#vehicles-container').append(newVehicleHtml);
            }

            $('#addVehicleBtn').click(function() {
                addNewVehicle();
            });

            $(document).on('click', '.delete-vehicle', function() {
                $(this).closest('.vehicle-info').remove();
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#available_at_auction').change(function() {
                if ($(this).is(':checked')) {
                    $('.div-link').show();
                } else {
                    $('.div-link').hide();
                }
            });

            $('#modification').change(function() {
                if ($(this).is(':checked')) {
                    $('.div-modify_info').show();
                } else {
                    $('.div-modify_info').hide();
                }
            });
        });
    </script>

    <script>
        function updateSuggestions(inputField, suggestionsList) {
            var inputValue = inputField.val();

            $.ajax({
                url: "{{ route('get.zipcodes') }}",
                method: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "input": inputValue
                },
                success: function(response) {
                    suggestionsList.empty();

                    $.each(response, function(index, suggestion) {
                        var listItem = $("<li>").text(suggestion).click(function() {
                            inputField.val(suggestion);
                            suggestionsList.css("display", "none");
                        });
                        suggestionsList.append(listItem);
                    });
                },
                error: function(xhr, status, error) {
                    console.error("Error:", error);
                }
            });
        }

        $("#pickup-location, #delivery-location").keyup(function() {
            var inputField = $(this);
            var suggestionsList = inputField.siblings(".suggestionsTwo");
            suggestionsList.css("display", "block");
            if (inputField.val() === "") {
                suggestionsList.css("display", "none");
            }
            updateSuggestions(inputField, suggestionsList);
        });
    </script>
@endsection
