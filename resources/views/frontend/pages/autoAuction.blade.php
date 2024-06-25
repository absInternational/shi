@extends('frontend.layouts.app')

@section('content')

<style>
    .top-left-image {
        position: absolute;
    top: -25px;
    left: -25px;
    width: 100px;
    height: 100px; 
    }
</style>
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">Auctions Car Transport</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span> Auctions Car</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="tj-blog-standard">
        <div class="container">
            <div class="row">
            <div class="col-lg-8">
							<div class="image-container">
                                <img class="img-fluid" src="https://www.shipa1.com/img/banner-5-800x400-landing.webp" loading="lazy" alt="Auction Car Transport">
                            </div>
                             <br>
                    <div class="text-container text-left">
                        <h3>We deliver quality, with prosperity. Because your Shipping needs, our solution.</h3>
                        <p>You can be an auction dealer looking for a car shipping company to ship vehicles to other states to your clients, or a customer looking for an auto mover to transport automobile to your home on another state. Ship-A1 provides auction vehicle shipping services to auction dealers and direct customers to make transportation for vehicles easy and affordable. We ship automobiles for companies like Copart, iaai, manheim, auction direct usa and etc.</p> 
                        
                        <br>
                        <p>Many people use a shipping company to transport their vehicles from one place to another, but none quite so much as car dealerships. There are hundreds of car auction dealers across the United States, and some like Copart and auction direct USA host auctions across the United States. If you are shipping to or from such a sale, your best option would be to find a car shipping company that provides auction vehicle auto transport services. </p>
                        <br>
                        <p>The Internet has played a significant role in benefitting auction car shipping companies, with the majority of customers purchasing their next car from online auto auctions, and shipping their automobile home instead of going out and driving it home. This has led to the rise of the auctioned vehicle transport industry, which plays a crucial role in the survival of the auto shipping industry. Ship-A1 is an automobile shipping business, specializing in all range of transport like cars, excavators, trucks, SUVs, and motorcycles to anywhere across the United States. We have pledged to provide all-in-one auto transport solutions to all its customers and seek your trust in return for our services.</p>
                        <br>
                        <p>If you work for a vehicle dealership, or if you own one, then you know the importance of reliable auto transportation services to facilitate the shipment of individual automobile shipments from auction to consumers. There are a few things that you need to watch out for when getting the automobile to your customer, which includes.</p>
                        <br>
                        <h5>Price:</h5>
                        <p>When preparing to ship a vehicle for the customer, do not look for the company with an affordable price point. But look for the company which can get the job done without ultimately bankrupting you. You do not need to break the bank to ship a vehicle, you can get a necessary shipping service fit for an automobile at an affordable price.</p>
                        <br>
                        <h3>Quality Shipping Service:</h3>
                        <p>As previously mentioned, auto movers must get the vehicle to the destination on time, intact, and without any legal incidents every time. This might seem like common sense to you, but some fail at it, and these are not the type of companies you should be hiring. Experienced shipping companies boast about their services because they have the muscle to live up to their words.</p>
                        <br>
                        <h5>Insurance:</h5>
                        <p>According to federal law, all shipping companies should carry a valid insurance certificate. When speaking with an auto shipping representative, make sure that you understand the policy. Find out what damage is not covered, such as that which might occur during loading, offloading, and transit. A professional auto shipper like Ship-A1 will ensure that you are relaxed and comfortable with the process.</p>
                        <br>
                        <p>The best way to find the best car shipping auction services is to fill out our free online quote form and get multiple quotes to deliver your automobile from Ship-A1 because we are a reputable and reliable auto mover that has specialized in auction car shipping services. You can reach numerous free quotes that you can then differentiate against each other so you can find the best price to deliver your automobile. Even if you do not purchase your car at an auction, you can still get a free shipping quote, and this is a great source to help you find the appropriate auto transport company for your specific needs. </p>
                        <br>
                        <a href="#get-quote"><img src="https://www.shipa1.com/img/banner-1-1600-x200-landing.webp" width="100%" loading="lazy" alt="Auction Car Transport"></a>
                        <br>
                        <br>
                        <p>Many customers tend to score great deals on auto auctions, but moving the automobiles to the consumers can be a challenge. In my cases, vehicles need to be removed from the auction premises right away. If clients wish to deliver their car to their home on another state, you can contact Ship-A1 for auction to consumer car shipping.</p>
                        <br>
                        <p>If you are selling or purchasing a vehicle through an auction, you must contemplate how the automobile will arrive at its destination. There are two main options available, either you drive the car or hire an auto mover. Choosing to ship your vehicle is the safest option because there are several advantages to hiring a professional company to transport a vehicle to or from the auction house. Down below are listed some benefits:</p>
                        
                        <div class="list-wrapper">
                    		    <h4 class="list-title">Benefits</h4>
                    		<div class="list-style">
                    			<!-- <ul>
                    			    <li> -->
                    			        <div class="list-content">
                    			            <h6>Safer Form of Transport</h6>
                                            <p>We at Ship-A1 ensure that your automobile arrives in perfect condition, and so does the other shipping companies too. Driving your vehicle across the states will result in the number of miles the car will accumulate, more mileage means wear and tear, which is going to decrease your vehicle market value. With auto transport, you can rest assured that the vehicle will arrive in the condition you bought it in.</p>
                    			        </div>
                    			    <!-- </li>
                    			    <li> -->
                    			        <div class="list-content">
                    			            <h6>Customize Delivery</h6>
                                            <p>At Ship-A1, we provide a wide array of services, and you can choose the type of services that best fit your car requirements. We can also ship your inoperable vehicle, and also pick your vehicle directly from auction to your doorstep and save you from spending hours stuck behind the wheel.</p>
                    			        </div>
                    			    <!-- </li>
                    			    <li> -->
                    			        <div class="list-content">
                    			            <h6>Attractive Rates and Discounts</h6>
                                            <p>Many transport companies provide special discounts depending on the seasons. This feature is an advantage because it can save you a lot of money and time.</p>
                    			        </div>
                    			    <!-- </li>
                    			    <li> -->
                    			        <div class="list-content">
                    			            <h6>Save Money</h6>
                                            <p>Shipping your vehicle is often your least expensive choice once you calculate all the costs. An auto carrier moves several cars at once, not just your vehicle. By Delivering your automobiles, you do not need to pay for any accommodation, food, or gas. By shipping your car, you do not have to take time off from work.</p>
                    			        </div>
                    			    <!-- </li>
                    			</ul> -->
                    		</div>	
                        </div>
                        
                        
                        <div class="list-wrapper">
                            <h4 class="list-title">Auction Car Shipping Services</h4>
                            <p>Due to many variables during the auto transport process, it is recommended to plan in advance. The type of automobile you are shipping is going to decide which method of shipment is optimal for you. Here are some of the shipping services we provide:</p>
                    		<div class="list-style list-2ndstyle">
                    			<!-- <ul>
                                    <li> -->
                                        <div class="list-content">
                                       <h5 class="font-weight-bold">Open Carrier</h5>
                                        <p>Under open carrier transport, cars are shipped in the free trailer with automobiles being exposed to the atmosphere. But do not let these facts distract you from the affordability and cheap services provided by an open container. They are the most popular mode of transportation, mostly because the vehicles are shipped on a two-level trailer with 7 to 10 automobiles shipped at one time. This makes them cheaper and provides faster services due to their efficiency.</p>
                                        </div>
                                    <!-- </li>
                                </ul>
                                <ul>
                                    <li> -->
                                        <div class="list-content">
                                        <h5 class="font-weight-bold">Enclosed Carriers</h5>
                                        <p>Enclosed carriers are covered to protect the vehicle from dust, road debris, rain, and snow. This service is optimal for antique automobiles, which require special care and experienced crew. This is a premium service that comes with added features like extra vehicle insurance, constant surveillance, and updates. This service will cost you more, but it serves to offer more protection to the car.</p>
                                        </div>
                                    <!-- </li>
                                </ul>
                                <ul>
                                    <li> -->
                                        <div class="list-content">
                                        <h5 class="font-weight-bold">Door to Door Transport</h5>
                                        <p>Under door to door transport delivery, your automobile will be picked right from your door and will be delivered to your exact location. This is the most popular method of car shipping because it is more convenient for both the auto shipping company and the customer. With door to door delivery, you do not need to drive your vehicle to a terminal. You also do not need to pay to have it spend time in a card terminal.</p>
                                        </div>
                                    <!-- </li>
                                </ul>
                                <ul>
                                    <li> -->
                                        <div class="list-content">
                                       <h5 class="font-weight-bold">Expedited Shipping</h5>
                                        <p>The speed of delivery is what matters to the customers the most. I want your vehicle to be delivered within a particular time and can not afford the delay. Under standard shipping, your car would be delivered in more than 4 days, with expedited shipping your automobile would be delivered within four days.</p>
                                        </div>
                                    <!-- </li>
                                </ul> -->
                    		</div>	
                        </div>
                        
                        
                              </div> 
                    </div>
                
                <div class="col-lg-4 p-0">
                
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
                
                <!-- <span class="dix-1"> <img src="" alt=""> </span> -->
             <div class="tj-input-form-car" data-bg-image="">
                <img src="{{ asset('img/disco-.png') }}" alt="Your Image" class="top-left-image">
                <h4 class="title text-center">Instant Car Shipping Quote!</h4>
                        <form action="{{ route('submit.quote') }}"  method="post" class="rd-mailform "
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
                            <input type="hidden" name="vehicle_opt" value="vehicle" hidden>


                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-form">
                                        <label class="d-block"> Your Name:</label>
                                        <input type="text" id="name" name="name" placeholder=""
                                            required="" />
                                        <small id="errName" class="err-style"></small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form">
                                        <label class="d-block"> Phone:</label>
                                        <input type="text" id="phone" name="phone" placeholder=" "
                                            required="" />
                                        <small id="errPhone" class="err-style"></small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form">
                                        <label class="d-block"> Email Address:</label>
                                        <input type="email" id="email" name="email" placeholder=""
                                            required="" />
                                        <small id="errEmail" class="err-style"></small>
                                    </div>
                                </div>
                            </div>

                            <div class="row select-bm">
                                <div class="col-md-12 text-center">
                                    <h4 class="text-white mb-0">Vehicle Information</h4>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form tj-select">
                                        <label> Year</label>
                                        <select class="nice-select vehicle-year" name="year[]" id="year" required>
                                            <option value="" disabled selected>Select</option>
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
                                        <select class="nice-select vehicle-make" name="make[]" id="make" required>
                                            <option value="" disabled selected>Select</option>
                                            @foreach ($makes as $make)
                                                <option value="{{ $make->make }}">{{ $make->make }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form tj-select vehicle-model-div">
                                        <label>Model</label>
                                        <select class="nice-select vehicle-model" name="model[]" id="model" required>
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <a class="add-car-1 mb-2" id="addVehicleBtn">
                                <i class="fa fa-plus"> Add
                                    Vehicle </i>
                            </a>

                            <div id="vehicles-container">
                            </div>



                            <div class="row mt-0">
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block">Pickup Location:</label>
                                        <input type="text" id="pickup-location" name="origin"
                                            placeholder="" required="" />
                                        <small id="errOLoc" class="err-loc"></small>
                                        <ul class="suggestions suggestionsTwo"></ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block"> Delivery Location:</label>
                                        <input type="text" id="delivery-location" name="destination"
                                            placeholder="" required="" />
                                        <small id="errDLoc" class="err-loc"></small>
                                        <ul class="suggestions suggestionsTwo"></ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="line-height:23px;">
                                        <label for="trailer_type" class="text-white">Select</label>
                                        <select class="form-control" id="trailer_type" name="trailer_type">
                                            <option value="Open" selected>Open</option>
                                            <option value="Enclosed">Enclosed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="condition" class="text-white">Condition</label>
                                        <select class="form-control" id="condition" name="condition">
                                            <option value="Running" selected>Running</option>
                                            <option value="Non Running">Non Running</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="input-form mt-3">
                                <label class="d-block text-white"> Image:</label>
                                <input class="form-control image_input" type="file" id="image" name="image"
                                    placeholder="Upload File" />
                            </div>

                            <div class="row">
                                <di class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-check-input " type="checkbox" id="modification"
                                            name="modification" value="1" />
                                        <label class="form-check-label text-white ms-4" for="modification">
                                            Modified?</label>
                                    </div>

                                    <div class="input-form div-modify_info" style="display: none;">
                                        <label class="d-block"> Modification Information:</label>
                                        <input class="" type="text" id="c" name="modify_info"
                                            placeholder="Modification Info" />
                                    </div>
                                </di>
                                <div class="col-md-6">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="available_at_auction"
                                        name="available_at_auction" value="1" />
                                    <label class="form-check-label text-white" for="available_at_auction">Available at
                                        Auction?</label>
                                </div>

                                <div class="input-form div-link mt-3" style="display: none;">
                                    <label class="d-block"> Enter Link:</label>
                                    <input class="form-control" type="url" id="link" name="link"
                                        placeholder="Enter Link" />
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
                    <select class="nice-select year" name="year[]" required id="year"> <option value="" disabled selected>Select Year</option>`;
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
                    <select class="nice-select make" name="make[]" required id="make"> <option value="" disabled selected>Select Make</option>`;

                @foreach ($makes as $make)
                    newVehicleHtml += `<option value="{{ $make->make }}">{{ $make->make }}</option>`;
                @endforeach

                newVehicleHtml += `
                </select>
                </div>
                </div>
                <div class="col-md-4">
                <div class="input-form tj-select model-div">
                <label>Model</label>
                <select class="nice-select model" name="model[]" id="model" required>
                <!-- Options filled by JavaScript -->
                </select>
                <!-- Bin icon for deleting vehicle -->
                <span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 0px; color: red;"></i></span>
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

            $(document).on('change', '.year, .make', function() {
                var year = $(this).closest('.vehicle-info').find('.year').val();
                var makeId = $(this).closest('.vehicle-info').find('.make').val();
                var vehicleInfo = $(this).closest('.vehicle-info');
                if (year && makeId) {
                    getModel(year, makeId, vehicleInfo);
                }
            });

            function getModel(year, makeId, vehicleInfo) {
                console.log('yes inn');
                $.ajax({
                    url: "{{ route('get.models') }}",
                    method: 'GET',
                    data: {
                        year: year,
                        make: makeId
                    },
                    success: function(response) {
                        var modelsDropdown = vehicleInfo.find('.model');
                        modelsDropdown.empty();
                        var selectOptions = '<option value="">Select Model</option>';
                        $.each(response, function(index, model) {
                            selectOptions += '<option value="' + model + '">' + model +
                                '</option>';
                        });
                        modelsDropdown.html(selectOptions);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            }
        });
    </script>



    <script>
        $(document).ready(function() {
            $(document).on('change', '.vehicle-year, .vehicle-make', function() {
                var year = $('.vehicle-year').val();
                var makeId = $('.vehicle-make').val();
                if (year && makeId) {
                    getModel(year, makeId);
                }
            });
        });
            function getModel(year, makeId) {
                console.log('yes inn');
                $.ajax({
                    url: "{{ route('get.models') }}",
                    method: 'GET',
                    data: {
                        year: year,
                        make: makeId
                    },
                    success: function(response) {
                        var modelsDropdown = $('.vehicle-model-div');
                        modelsDropdown.empty();
                        var selectOptions =
                            '<label>Model</label> <select class="nice-select model" name="model[]" id="model" required> <option value="">Select Model</option>';
                        $.each(response, function(index, model) {
                            selectOptions += '<option value="' + model + '">' + model +
                                '</option>';
                        });
                        selectOptions += '</select>';
                        modelsDropdown.html(selectOptions);

                        console.log('yesssss', response);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            }

        

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