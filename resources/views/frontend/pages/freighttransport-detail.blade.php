@extends('frontend.layouts.app')

@section('content')


    <style>
        .tj-testimonial-section {
            padding: 50px 0;
            background: #f9f9f9;
        }

        .tj-testimonial2-section {
            padding: 50px 0;
            /* background: #f9f9f9; */
        }

        .carousel-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .card .row {
            display: flex;
            flex-wrap: wrap;
        }

        .card .col-6 {
            width: 50%;
        }

        .star {
            margin-top: 10px;
        }

        .fa-star {
            color: #f39c12;
        }

        .owl-nav button {
            background: none;
            border: none;
            font-size: 2rem;
            color: #333;
        }

        .owl-nav button {
            display: none;
            background: none;
            border: none;
            font-size: 2rem;
            color: #333;
        }

        .owl-dot {
            display: inline-block;
            width: 12px;
            height: 12px;
            background: #ddd;
            border-radius: 50%;
            margin: 0 5px;
        }

        .owl-dot.active {
            background: #333;
        }


        @keyframes custom-slides {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-80%);
            }
        }

        .custom-logos {
            overflow: hidden;
            padding: 30px 0px;
            white-space: nowrap;
            position: relative;
        }

        .custom-logos:before,
        .custom-logos:after {
            position: absolute;
            top: 0;
            content: '';
            width: 250px;
            height: 100%;
            z-index: 2;
        }

        .custom-logos:before {
            left: 0;
            background: linear-gradient(to left, rgba(255, 255, 255, 0), rgb(255, 255, 255));
        }

        .custom-logos:after {
            right: 0;
            background: linear-gradient(to right, rgba(255, 255, 255, 0), rgb(255, 255, 255));
        }

        .custom-logo-items {
            display: inline-block;
            animation: 35s custom-slides infinite linear;
        }

        .custom-logos:hover .custom-logo-items {
            animation-play-state: paused;
        }

        .custom-logo-items img {
            height: 100px;
        }


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

        .error-message {
            display: none;
            color: red;
        }

        .error-field {
            border: 2px solid red;
        }
    </style>



    <section class="tj-choose-us-section-freight">
        <div class="container mt-4">
            <div class="row mt-4">

                <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="choose-us-content-1">
                        <div class="tj-section-heading-freight">
                            <span class="sub-title active-shape2">Freight Shipping</span>
                            <h2 class="title text-white">RELIABLE, SECURE & VALUE FOR MONEY LOGISTICS SERVICES</h2>
                            <p class="desc text-white">
                                ShipA1 has pledged to provide all-in-one Freight Shipping solutions to all its
                                customers and seeks your trust in return of our services.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-6">
                                <div class="tj-icon-box3 text-center">
                                    <i class="flaticon flaticon-courier"></i>
                                    <h6 class="title">Optimized Cost</h6>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-6">
                                <div class="tj-icon-box3 text-center">
                                    <i class="flaticon flaticon-cargo"></i>
                                    <h6 class="title">Delivery on Time</h6>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-6">
                                <div class="tj-icon-box3 text-center">
                                    <i class="flaticon flaticon-agreement"></i>
                                    <h6 class="title">Safety &amp; Reliability</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                <div class="col-lg-6 mt-4" data-sal="slide-down" data-sal-duration="800">
                    <div class="tj-input-form mt-4 w-100" data-bg-image="">


                        <!-- <h4 class="title text-center">Instant Freight Quote!</h4> -->
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
                            <div class="container mt-2">
                                <!-- Step 1: Moving From/To -->
                                <div class="route_quote_info" id="step1">
                                    <div class="row">
                                        <h4 class="title text-center">Quote Request!</h4>
                                        <div class="col-xl-12 col-lg-12 mb-4">
                                            <h6 class="text-white">Moving From</h6>
                                            <label class="text-white mb-2">Where Are You Moving From?</label>
                                            <div class="single-input-field">
                                                <input class="form-control" type="text" id="pickup-location"
                                                    placeholder="Enter City or ZipCode" name="From_ZipCode" required>
                                                <ul class="suggestions suggestionsTwo"></ul>
                                                <label class="error-message" id="pickup-location-error">This field is
                                                    required.</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 mb-4">
                                            <h6 class="text-white">Moving To</h6>
                                            <label class="text-white mb-2">Where Are You Moving To?</label>
                                            <div class="single-input-field">
                                                <input class="form-control" type="text" id="delivery-location"
                                                    placeholder="Enter City or ZipCode" name="To_ZipCode" required>
                                                <ul class="suggestions suggestionsTwo"></ul>
                                                <label class="error-message" id="delivery-location-error">This field is
                                                    required.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="price__cta-btn text-center">
                                                <button class="tj-submit-btn" type="button" id="step1_next">
                                                    Next <i class="fa-light fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 2: Vehicle Information -->
                                <div class="vehicle_quote_info" id="step2" style="display: none;">
                                    <div class="row">
                                        <h4 class="title text-center">FREIGHT INFORMATION</h4>
                                        <!-- <select id="tabSelector" class="" aria-label="Tab selector" required>
                        <option value=""  disabled>Select a Vehicle</option>
                        <option value="Atv">Atv Utv Transport</option>
                        <option value="Boat-Transport">Boat Transport</option>
                        <option value="Car">Car</option>
                        <option value="Freight-Transportation" selected>Freight Transportation</option>
                        <option value="Golf-Cart">Golf Cart</option>
                        <option value="Heavy-Equipment">Heavy Equipment</option>
                        <option value="Motorcycle">Motorcycle</option>
                        <option value="RV-Transport">RV Transport</option>
                    </select> -->

                                        <div class="input-form">
                                            <label for="category">Category</label>
                                            <select class="form-control" id="category" name="category">
                                                <option value="" disabled selected>Select</option>
                                                <option value="LTL USED COMMERCIAL GOODS">LTL USED COMMERCIAL GOODS
                                                </option>
                                                <option value="LTL NEW COMMERCIAL GOODS">LTL NEW COMMERCIAL GOODS</option>
                                                <option value="LTL USED GOODS">LTL USED GOODS</option>
                                                <option value="LTL NEW GOODS">LTL NEW GOODS</option>
                                                <option value="FTL FULL TRUCK LOAD">FTL FULL TRUCK LOAD</option>
                                            </select>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="available_at_auction" name="available_at_auction"
                                                        value="1" />
                                                    <label class="form-check-label text-white" for="available_at_auction">
                                                        Available at
                                                        Auction?</label>
                                                </div>

                                                <div class="input-form div-link mt-3" style="display: none;">
                                                    <label class="d-block"> Enter Link:</label>
                                                    <input class="form-control" type="url" id="link"
                                                        name="link" placeholder="Enter Link" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="boat_on_trailer"
                                                        name="boat_on_trailer" value="1" />
                                                    <label class="form-check-label text-white" for="boat_on_trailer"> Is
                                                        your freight already on
                                                        a
                                                        trailer?</label>
                                                </div>

                                            </div>
                                        </div>




                                        <!-- <div class="row mt-3">
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
                                            <input type="email" id="email" name="email" placeholder="Email Address"
                                                required="" />
                                            <small id="errEmail" class="err-style"></small>
                                        </div>
                                    </div>
                                </div> -->
                                        <!-- <div class="form-group" style="display:none;">
                                    <label for="trailer_type" class="text-white">Select Trailer Type</label>
                                    <select class="form-control" id="trailer_type" name="trailer_type">
                                        <option value="RGN" selected>RGN</option>
                                        <option value="Stepdeck">Stepdeck</option>
                                        <option value="Flatbed">Flatbed</option>
                                        <option value="Hotshot">Hotshot</option>
                                        <option value="Landoll">Landoll</option>
                                    </select>
                                </div> -->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="input-form">
                                                    <label class="d-block">Commodity Detail:</label>
                                                    <input type="text" id="commodity_detail" name="commodity_detail"
                                                        placeholder="Commodity Detail" required="" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-form">
                                                    <label class="d-block">Handling Unit:</label>
                                                    <select class="form-control" id="handling_unit" name="handling_unit">
                                                        <option value="" selected disabled>Select</option>
                                                        <option value="Pallet">Pallet</option>
                                                        <option value="Crate">Crate</option>
                                                        <option value="Box">Box</option>
                                                        <option value="Bag">Bag</option>
                                                        <option value="Bale">Bale</option>
                                                        <option value="Bundle">Bundle</option>
                                                        <option value="Can">Can</option>
                                                        <option value="Carton">Carton</option>
                                                        <option value="Case">Case</option>
                                                        <option value="Coil">Coil</option>
                                                        <option value="Cylinder">Cylinder</option>
                                                        <option value="Drum">Drum</option>
                                                        <option value="Loose">Loose</option>
                                                        <option value="Pail">Pail</option>
                                                        <option value="Reel">Reel</option>
                                                        <option value="Roll">Roll</option>
                                                        <option value="Pipe">Pipe</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-form">
                                                    <label class="d-block">Commodity Unit:</label>
                                                    <input type="number" id="commodity_unit" name="commodity_unit"
                                                        placeholder="Unit" required="" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-form">
                                                    <label class="d-block">Trailer Specification</label>
                                                    <select id="example-multiple"
                                                        class="js-example-basic-multiple sel-mul" name="states[]"
                                                        multiple="multiple" style="width: 100%">

                                                        <option value="8">VAN (V)</option>
                                                        <option value="9">REEFER (RE)</option>
                                                        <option value="10">FLATBED (F)</option>
                                                        <option value="11">STEP DECK (SD)</option>
                                                        <option value="12">REMOVABLE GOOSENECK (RGN) </option>
                                                        <option value="13">CONESTOGA (CS)</option>
                                                        <option value="14">CONTAINER / DRAYAGE (C)</option>
                                                        <option value="15">TRUCK (T)</option>
                                                        <option value="16">HAZMAT (hazardous materials)</option>
                                                        <option value="17">POWER ONLY (PO)</option>
                                                        <option value="18">HOT SHOT (HS)</option>
                                                        <option value="19">LOWBOY (LB)</option>
                                                        <option value="20">ENDUMP (ED)</option>
                                                        <option value="21">LANDOLL (LD)</option>
                                                        <option value="22">PARTIAL (PT)</option>
                                                        <option value="23">20ft container</option>
                                                        <option value="24">40ft container</option>
                                                        <option value="25">48ft container</option>
                                                        <option value="26">53ft container</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-form">
                                                    <label class="d-block">Equipment Type</label>
                                                    <select id="example-multiple-2"
                                                        class="js-example-basic-multiple sel-mul" name="states[]"
                                                        multiple="multiple" style="width: 100%">


                                                        <option value="68">Air Ride(A)</option>
                                                        <option value="69">Blanket Wrap (B)</option>
                                                        <option value="70">B-Train (BT)</option>
                                                        <option value="71">Chain(CH)</option>
                                                        <option value="72">Chassis (CS)</option>
                                                        <option value="73">Conestoga(CO)</option>
                                                        <option value="74">Curtain(C)</option>
                                                        <option value="75">Double(2)</option>
                                                        <option value="76">Extendable (E)</option>
                                                        <option value="77">E-Track (ET)</option>
                                                        <option value="78">Hazmat (Z)</option>
                                                        <option value="79">Hot Shot (HS)</option>
                                                        <option value="80">Insulated (N)</option>
                                                        <option value="81">Lift Gate (LG)</option>
                                                        <option value="82">Load Out (LO)</option>
                                                        <option value="83">Load Ramp (LR)</option>
                                                        <option value="84">Moving (MV)</option>
                                                        <option value="85">Open Top (OT)</option>
                                                        <option value="86">Oversized (O)</option>
                                                        <option value="87">Pallet Exchange (X)</option>
                                                        <option value="88">Side Kit (S)</option>
                                                        <option value="89">Tarp(T)</option>
                                                        <option value="90">Team Driver(M)</option>
                                                        <option value="91">Temp Control (TC)</option>
                                                        <option value="92">Triple (3)</option>
                                                        <option value="93">Vented (V)</option>
                                                        <option value="94">Walking Floor (WF)</option>


                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="hazardous"
                                                        name="hazardous" value="1" />
                                                    <label class="form-check-label text-white" for="hazardous">
                                                        Hazardous</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="stackable"
                                                        name="stackable" value="1" />
                                                    <label class="form-check-label text-white" for="stackable">
                                                        Stackable</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pick_up_services" class="text-white">Pickup
                                                        Services</label>
                                                    <select class="form-control" id="pick_up_services"
                                                        name="pick_up_services">
                                                        <option value="" disabled selected>Select</option>
                                                        <option value="Construction / Utility">Construction / Utility
                                                        </option>
                                                        <option value="Container Station">Container Station</option>
                                                        <option value="Exhibition">Exhibition</option>
                                                        <option value="Inside Pickup">Inside Pickup</option>
                                                        <option value="Lift Gate Service">Lift Gate Service</option>
                                                        <option value="Residential">Residential</option>
                                                        <option value="Single Shipment">Single Shipment</option>
                                                        <option value="Sorting / Segregation">Sorting / Segregation
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="deliver_services" class="text-white">Deliver
                                                        Services</label>
                                                    <select class="form-control" id="deliver_services"
                                                        name="deliver_services">
                                                        <option value="" disabled selected>Select</option>
                                                        <option value="After Business Hours Delivery">After Business Hours
                                                            Delivery
                                                        </option>
                                                        <option value="Construction / Utility">Construction / Utility
                                                        </option>
                                                        <option value="Appointment">Appointment</option>
                                                        <option value="Container Station">Container Station</option>
                                                        <option value="Exhibition">Exhibition</option>
                                                        <option value="In Bond Freight">In Bond Freight</option>
                                                        <option value="In Bond TIR Caret">In Bond TIR Caret</option>
                                                        <option value="Inside - Same Level as Delivery Vehicle">Inside -
                                                            Same Level as
                                                            Delivery Vehicle</option>
                                                        <option value="Lift Gate Service">Lift Gate Service</option>
                                                        <option value="Residential">Residential</option>
                                                        <option value="Mine / Govt / Airport">Mine / Govt / Airport
                                                        </option>
                                                        <option value="Notification Prior Delivery">Notification Prior
                                                            Delivery
                                                        </option>
                                                        <option value="Delivery appointment required">Delivery appointment
                                                            required
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="input-form">
                                                    <label class="d-block"> Pickup Date:</label>
                                                    <input type="date" id="ex_pickup_date" name="ex_pickup_date"
                                                        required="" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-form">
                                                    <label class="d-block"> Pickup Time:</label>
                                                    <input type="time" id="ex_pickup_time" name="ex_pickup_time"
                                                        required="" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-form">
                                                    <label class="d-block"> Delivery Date:</label>
                                                    <input type="date" id="ex_delivery_date" name="ex_delivery_date"
                                                        required="" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-form">
                                                    <label class="d-block"> Delivery Time:</label>
                                                    <input type="time" id="ex_delivery_time" name="ex_delivery_time"
                                                        required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-form">
                                            <label class="d-block" class="text-white"> Image:</label>
                                            <input class="form-control image_input" type="file" id="image"
                                                name="image" placeholder="Upload File" />
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
                                        <div class="form-group">
                                            <label for="condition" class="text-white">Condition</label>
                                            <select class="form-control" id="condition" name="condition">
                                                <option value="Running" selected>Running</option>
                                                <option value="Non Running">Non Running</option>
                                            </select>
                                        </div>
                                        <div class="row mb-3 mt-3">
                                            <div class="col-md-4">

                                                <label class="lab-cos">Length</label>
                                                <div class="input-container">
                                                    <input type="number" id="feet-input" class="input-field"
                                                        placeholder="" min="0" maxlength="3"
                                                        oninput="limitDigits(this, 3)">
                                                    <span class="separator">(Ft.)</span>
                                                    <input type="number" id="inches-input" class="input-field"
                                                        placeholder="" min="0" max="11" maxlength="2"
                                                        oninput="limitDigits(this, 2)">
                                                    <span class="separators">(In.)</span>
                                                </div>
                                            </div>

                                            <div class="col-md-4">

                                                <label class="lab-cos">Width</label>
                                                <div class="input-container">
                                                    <input type="number" id="feet-input1" class="input-field"
                                                        placeholder="" min="0" maxlength="3"
                                                        oninput="limitDigits(this, 3)">
                                                    <span class="separator">(Ft.)</span>
                                                    <input type="number" id="inches-input1" class="input-field"
                                                        placeholder="" min="0" max="11" maxlength="2"
                                                        oninput="limitDigits(this, 2)">
                                                    <span class="separators">(In.)</span>
                                                </div>
                                            </div>

                                            <div class="col-md-4">

                                                <label class="lab-cos">Height</label>
                                                <div class="input-container">
                                                    <input type="number" id="feet-input2" class="input-field"
                                                        placeholder="" min="0" maxlength="3"
                                                        oninput="limitDigits(this, 3)">
                                                    <span class="separator">(Ft.)</span>
                                                    <input type="number" id="inches-input2" class="input-field"
                                                        placeholder="" min="0" max="11" maxlength="2"
                                                        oninput="limitDigits(this, 2)">
                                                    <span class="separators">(In.)</span>
                                                </div>
                                            </div>







                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">

                                                <label class="lab-cos">Weight</label>
                                                <div class="input-container1">
                                                    <input type="" id="feet-input" class="input-field-1"
                                                        placeholder="" min="0" maxlength="6"
                                                        oninput="limitDigits(this, 6)">
                                                    <span class="separators-w">(Lbs.)</span>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <h4 class="text-white">Additional Services</h4>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="protect_from_freezing" name="protect_from_freezing"
                                                        value="1" />
                                                    <label class="form-check-label text-white" for="protect_from_freezing"
                                                        style="font-size: 14px;"> Protect from freezing</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="sort_segregate"
                                                        name="sort_segregate" value="1" />
                                                    <label class="form-check-label text-white" for="sort_segregate"
                                                        style="font-size: 14px;"> Sort & Segregate</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="blind_shipment"
                                                        name="blind_shipment" value="1" />
                                                    <label class="form-check-label text-white" for="blind_shipment"
                                                        style="font-size: 14px;"> Blind Shipment</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="row select-bm" style="display:none;">
                                    <div class="col-md-12 text-center">
                                        <h4 class="text-white">Vehicle Information</h4>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-form tj-select">
                                            <label> Year</label>
                                            <select class="nice-select vehicle-year" name="year[]" id="year">
                                                <option value="2010" selected>Select Year</option>
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
                                            <input type="text" value="null" id="make" name="make[]"
                                                placeholder="Enter Make" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-form tj-select vehicle-model-div">
                                            <label>Model</label>
                                            <input type="text" id="model" value="null" name="model[]"
                                                placeholder="Enter Model" />
                                        </div>
                                    </div>
                                </div>

                                <a class="add-car" style="display:none;" id="addVehicleBtn"
                                    style="cursor: pointer; text-decoration: underline;"><i class="fa fa-plus"></i> Add
                                    Vehicle</a>

                                <div id="vehicles-container" style="display:none;">
                                </div> -->


                                        <!-- <label class="error-message" id="tabSelector-error">This field is required.</label> -->

                                        <div class="tab-content mt-3" id="additionalContent"></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="price__cta-btn">
                                                <button class="tj-submit-btn previous" id="step2_previous">
                                                    Previous <i class="fa-light fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="price__cta-btn float-end">
                                                <button class="tj-submit-btn" type="button" id="step2_next">
                                                    Next <i class="fa-light fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Step 3: Customer Information -->
                                <div class="basic_quote_info" id="step3" style="display: none;">
                                    <div class="row mb-3">
                                        <h4 class="text-center text-white">Customer Information</h4>
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="single-input-field">
                                                <label class="d-block text-white"> Your Name:</label>
                                                <input class="form-control" required name="Custo_Phone" type="tel"
                                                    placeholder="Customer Name">
                                                <!-- <input class="form-control" required name="Custo_Name" type="text" placeholder="Customer Name"> -->
                                                <label class="error-message" id="Custo_Name-error">This field is
                                                    required.</label>
                                            </div>
                                        </div>

                                        <!-- <div class="col-xl-4 col-lg-4">
                        <div class="single-input-field">
                            <label class="d-block text-white"> Phone:</label>
                            <input class="form-control" required name="Custo_Name" type="text" placeholder="Customer Phone">
                            <input class="form-control" required name="Custo_Phone" type="tel" placeholder="Customer Phone">
                            <label class="error-message" id="Custo_Phone-error">This field is required.</label>
                        </div>
                    </div> -->
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="single-input-field">
                                                <label class="d-block text-white">Phone:</label>
                                                <input id="phone" class="form-control" required name="Custo_Phone"
                                                    type="tel" placeholder="Customer Phone">
                                                <label class="error-message" id="Custo_Phone-error">This field is
                                                    required.</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-4">
                                            <div class="single-input-field">
                                                <label class="d-block text-white"> Email Address:</label>
                                                <input class="form-control" required name="Custo_Email" type="email"
                                                    placeholder="Email address">
                                                <label class="error-message" id="Custo_Email-error">This field is
                                                    required.</label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="price__cta-btn">
                                                <button class="tj-submit-btn previous" id="step3_previous">
                                                    Previous <i class="fa-light fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="price__cta-btn float-end">

                                                <button class=" tj-submit-btn " href="" type="submit"
                                                    id="submit_instant_code" value="Submit Form">
                                                    Calculate Price <i class="fa-light fa-arrow-right"></i>
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>






                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="tj-service-details pt-4 pb-0">
        <div class="container">
        <div class="row">
                    <div class="col-lg-6 sal-animate" data-sal="slide-right" data-sal-duration="800">
                        <div class="about_image text-center">
                            <img src="{{ asset('frontend/images/project/atv,utv-1.webp') }}" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6 sal-animate" data-sal="slide-left" data-sal-duration="800">
                        <div class="about-content-three">
                            <div class="tj-section-heading">
                                <span class="sub-title active-shape ">Ship A1 Transport</span>
                                <!-- <h2 class="title">Delivering Excellence in Air Freight Services</h2> -->
                                <p class="desc">
                                Want to ship your vehicle without worrying about emptying your bank account? At Ship A1 your comfort is our top priority, ship the best vehicles at reasonable rates without compromising quality. Our professional and expert team provides you with 100% insured and secure vehicle transport solutions that are specifically tailored to your needs.
                         <br> At Ship A1 you don’t just have 1 option for shipping your vehicle, here you can even find various suitable services! For shipping your luxurious vehicle, you can opt for enclosed trailers as they are made to protect your vehicle from road debris, scratches, the uncertainty of weather conditions, and potential risks. However, if you are searching for something equally cost-effective and safe, go for open transport! We have expedited options and door-to-door delivery for fast vehicle shipping.
                         <br> So, what are you waiting for? Get a free online quote now and enjoy the ride!
                                </p>
                            </div>
                            <!-- <div class="content-box d-flex align-items-center">
                                <div class="tj-icon-box">
                                    <div class="ab-text d-flex align-items-center">
                                        <div class="ab-icon">
                                            <img src="assets/images/icon/global.svg" alt="Icon">
                                        </div>
                                        <div class="ab-title">
                                            <h5 class="title">Our Mission</h5>
                                        </div>
                                    </div>
                                    <p class="desc">Lorem ipsum is simply velit anod ipas aliquet enean quis.</p>
                                </div>
                                <div class="tj-icon-box">
                                    <div class="ab-text d-flex align-items-center">
                                        <div class="ab-icon">
                                            <img src="assets/images/icon/winner.svg" alt="Icon">
                                        </div>
                                        <div class="ab-title">
                                            <h5 class="title">Our Vision</h5>
                                        </div>
                                    </div>
                                    <p class="desc">Lorem ipsum is simply velit anod ipas aliquet enean quis.</p>
                                </div>
                            </div> -->
                            <div class="tj-theme-button">
                                <a class="tj-primary-btn" href="contact.html">
                                    Read More <i class="flaticon-right-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="tj-section-heading text-center">
                        <span class="sub-title active-shape">Ship A1 Transport</span>
                        <p>
                            Hello, welcome to the terms and conditions of Ship A1 Transport. Thank you for trusting and
                            choosing Ship A1 Transport for your shipping solutions. Review the following terms and
                            conditions carefully before proceeding with our services.
                            Hello, welcome to the terms and conditions of Ship A1 Transport. Thank you for trusting and
                            choosing Ship A1 Transport for your shipping solutions. Review the following terms and
                            conditions carefully before proceeding with our services.
                            Hello, welcome to the terms and conditions of Ship A1 Transport. Thank you for trusting and
                            choosing Ship A1 Transport for your shipping solutions. Review the following terms and
                            conditions carefully before proceeding with our services.
                            Hello, welcome to the terms and conditions of Ship A1 Transport. Thank you for trusting and
                            choosing Ship A1 Transport for your shipping solutions. Review the following terms and
                            conditions carefully before proceeding with our services.

                        </p>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <!--=========== About Section Start =========-->
    <section class="tj-about-section pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape"> A1 Transportation Company</span>
                            <h2 class="title">What Makes Us Dependable?</h2>
                            <p class="desc">
                                Among all the shipping companies out there, factors that make us stand out from therest are:
                            </p>
                        </div>
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                                <div class="ab-icon">
                                    <img src="{{ asset('frontend/images/icon/global.svg') }}" alt="Icon" />
                                </div>
                                <div class="ab-title">
                                    <h5 class="title">Our Values</h5>
                                </div>
                            </div>
                            <p class="desc">
                                We are a licensed Transportation company with high moral values and have attained customer
                                satisfaction through their remarks on esteemed platforms.

                            </p>
                        </div>
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                                <div class="ab-icon">
                                    <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" />
                                </div>
                                <div class="ab-title">
                                    <h5 class="title">Scope of Services</h5>
                                </div>
                            </div>
                            <p class="desc">
                                Range of vehicles, we ship, is not limited to just conventional cars and motorbikes.
                            </p>
                        </div>
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                                <div class="ab-icon">
                                    <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" />
                                </div>
                                <div class="ab-title">
                                    <h5 class="title">Safety Is Our Priority</h5>
                                </div>
                            </div>
                            <p class="desc">
                                No matter which mode of transportation you use, ShipA1 assures its customers, utmostsecurity
                                to their assets.


                            </p>
                        </div>
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                                <div class="ab-icon">
                                    <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" />
                                </div>
                                <div class="ab-title">
                                    <h5 class="title">Skilful & Devoted Staff</h5>
                                </div>
                            </div>
                            <p class="desc">
                                Our team is loaded with highly experienced professionals of both customer dealing andvehicle
                                handling.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                    <div class="about-group-image d-flex flex-wrap align-items-start flex-column">
                        <div class="tj-icon-box2 text-center">
                            <div class="number-icon">
                                <i class="flaticon-in-person"></i>
                            </div>
                            <div class="about-number">
                                <div class="tj-count"><span class="odometer" data-count="1700">0</span></div>
                                <p class="desc">Satisfied Client</p>
                            </div>
                        </div>
                        <div class="image-box">
                            <img class="p-z-idex" src="{{ asset('frontend/images/about/resize 410-630.jpg') }}"
                                alt="Image" />
                        </div>
                        <img class="group-1 p-z-idex"
                            src="{{ asset('frontend/images/about/kuch-be-rak-dy-is-ka-nam.webp') }}" alt="Image" />
                        <img class="group-shape" src="{{ asset('frontend/images/about/ab-shape.png') }}"
                            alt="Image" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== About Section End =========-->

    <!--=========== Cta Section Start =========-->
    <section class="tj-cta-section icon-animate">
        <div class="cta-inner" data-bg-image="{{ asset('frontend/images/cta/Auto-Transport.webp') }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="cta-content-area">
                        <div class="cta-content">
                            <div class="cta-icon">
                                <i class="flaticon flaticon-freight"></i>
                            </div>
                            <div class="cta-text">
                                <h3 class="title">SHIP A CAR DIRECT FROM AUTO Auction</h3>
                                <p class="desc">We deliver quality, with prosperity. Because your Shipping needs, our
                                    solution.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 position-relative">
                    <div class="tj-theme-button">
                        <a class="tj-transparent-btn" href="contact.html">
                            Read More <i class="flaticon-right-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Cta Section End =========-->



    <!--=========== Team Section Start =========-->
    <section class="tj-team-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-section-heading text-center">
                        <span class="sub-title active-shape"> Our Services</span>
                        <h2 class="title">Pick Your Transport Type</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Team Section End =========-->

    <!--=========== Project Section Start =========-->
    <section class="tj-project-section">
        <div class="tj-project-slider owl-carousel">
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/project.jpg') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title">logistics</span>
                    <h4><a href="project-details.html" class="title-link">Freight Solution</a></h4>
                </div>
            </div>
            <!-- <div class="tj-project-item">
                    <img src="{{ asset('frontend/images/project/project1.jpg') }}" alt="Image" />
                    <div class="arrow-icon">
                        <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                    </div>
                    <div class="tj-project-content">
                        <span class="sub-title">CAR</span>
                        <h4><a href="project-details.html" class="title-link"> Sedan, SUV, Pickup etc.</a></h4>
                    </div>
                </div> -->
            <!-- <div class="tj-project-item">
                    <img src="{{ asset('frontend/images/project/project2.jpg') }}" alt="Image" />
                    <div class="arrow-icon">
                        <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                    </div>
                    <div class="tj-project-content">
                        <span class="sub-title"> MOTORCYCLE</span>
                        <h4><a href="project-details.html" class="title-link"> Mopeds, ATV, Power Sports etc.</a></h4>
                    </div>
                </div> -->
            <!-- <div class="tj-project-item">
                    <img src="{{ asset('frontend/images/project/project1.jpg') }}" alt="Image" />
                    <div class="arrow-icon">
                        <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                    </div>
                    <div class="tj-project-content">
                        <span class="sub-title"> HEAVY EQUIP.</span>
                        <h4><a href="project-details.html" class="title-link"> Trucks, Bulldozers, Mixer etc.</a></h4>
                    </div>
                </div> -->
            <!-- <div class="tj-project-item">
                    <img src="{{ asset('frontend/images/project/project.jpg') }}" alt="Image" />
                    <div class="arrow-icon">
                        <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                    </div>
                    <div class="tj-project-content">
                        <span class="sub-title">RORO</span>
                        <h4><a href="project-details.html" class="title-link">Cars, Trucks, trailers etc.</a></h4>
                    </div>
                </div> -->
            <!-- <div class="tj-project-item">
                    <img src="{{ asset('frontend/images/project/project1.jpg') }}" alt="Image" />
                    <div class="arrow-icon">
                        <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                    </div>
                    <div class="tj-project-content">
                        <span class="sub-title"> ATV/UTV</span>
                        <h4><a href="project-details.html" class="title-link">Sport, Quads, Military etc.</a></h4>
                    </div>
                </div> -->
            <!-- <div class="tj-project-item">
                    <img src="{{ asset('frontend/images/project/project2.jpg') }}" alt="Image" />
                    <div class="arrow-icon">
                        <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                    </div>
                    <div class="tj-project-content">
                        <span class="sub-title"> CONSTRUCTION</span>
                        <h4><a href="project-details.html" class="title-link"> Cranes, Drills, Grinders etc.</a></h4>
                    </div>
                </div> -->
            <!-- <div class="tj-project-item">
                    <img src="{{ asset('frontend/images/project/project1.jpg') }}" alt="Image" />
                    <div class="arrow-icon">
                        <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                    </div>
                    <div class="tj-project-content">
                        <span class="sub-title"> FARM</span>
                        <h4><a href="project-details.html" class="title-link">Tractor, Planter, Baler etc.</a></h4>
                    </div>
                </div> -->
            <!-- <div class="tj-project-item">
                    <img src="{{ asset('frontend/images/project/excavator-pickup.webp') }}" alt="Image" />
                    <div class="arrow-icon">
                        <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                    </div>
                    <div class="tj-project-content">
                        <span class="sub-title"> EXCAVATOR</span>
                        <h4><a href="project-details.html" class="title-link"> Digger, Driller, Miners etc.</a></h4>
                    </div>
                </div> -->
            <!-- <div class="tj-project-item">
                    <img src="{{ asset('frontend/images/project/project1.jpg') }}" alt="Image" />
                    <div class="arrow-icon">
                        <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                    </div>
                    <div class="tj-project-content">
                        <span class="sub-title"> TRUCKS</span>
                        <h4><a href="project-details.html" class="title-link">Commercial, Dump Trucks etc.</a></h4>
                    </div>
                </div> -->
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/reefer-truck-1.webp') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title"> Reefer</span>
                    <h4><a href="project-details.html" class="title-link"> frozen , refrigerated etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/7.webp') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title"> Hazmat</span>
                    <h4><a href="project-details.html" class="title-link"> Explosive, Flammable, etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/5.webp') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title"> Dry van</span>
                    <h4><a href="project-details.html" class="title-link">palletized, boxed, freight etc.</a></h4>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Project Section End =========-->

    <section class="tj-video-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="video-wrapper text-center">
                        <iframe width="80%" height="500"
                            src="https://www.youtube.com/embed/cr4Nya5jVn0?si=RLh4uuppLT63xVBT"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--========== Faq Section Start ==============-->
    <section class="tj-faq-section tj-faq-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-section-heading text-center">
                        <span class="sub-title active-shape"> How It’s Work</span>
                        <h2 class="title">Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                    <div class="tj-faq-left-content">
                        <div class="faq-image">
                            <img src="{{ asset('frontend/images/slider/FAQ.webp') }}" alt="Image" />
                        </div>
                        <div class="faq-content">
                            <div class="faq-icon">
                                <i class="fa-regular fa-check"></i>
                            </div>
                            <div class="faq-text">
                                <h6 class="title">Reliable & Trustworthy</h6>
                                <p>Trage agile frameworks to provide a robust synopsis for high level overviews.</p>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="faq-icon">
                                <i class="fa-regular fa-check"></i>
                            </div>
                            <div class="faq-text">
                                <h6 class="title">High Quality Material</h6>
                                <p>Trage agile frameworks to provide a robust synopsis for high level overviews.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                    <div class="tj-faq-area">
                    <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What should I choose for my luxurious vehicle?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>If you have a luxurious vehicle, we would suggest you go for the enclosed trailer as it protects your vehicle and offers you peace of mind, or if you are looking for a cheaper option then open transport is the best for you, without compromising the quality experience the best, safe and secure shipping with Ship A1!</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How do I get a quote?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>At Ship A1 we have the convenience of providing free online quotes to our customers, you can check them out at www.shipa1.com</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Can I track my vehicle during transport?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Yes!  ShipA1 provides a user-friendly tracking system for real-time updates on your vehicle's location throughout the journey.</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        How do I prepare my vehicle for transport?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>We'll provide detailed instructions, but you'll need to remove personal belongings, as well as make sure to follow guidelines or instructions based on the chosen transport method.</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        FAQ Five
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>FAQ Five Content: Trage agile frameworks to provide a robust synopsis for
                                            high level overviews.</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--========== Faq Section End ==============-->



    <!--=========== Blog Section Start =========-->
    <section class="tj-blog-section">
        <div class="container">
            <div class="row">
                <div class="tj-section-heading text-center">
                    <span class="sub-title active-shape">Latest News</span>
                    <h2 class="title">Latest News & Blog</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="tj-blog-item">
                        <div class="tj-blog-image">
                            <a href="#">
                                <img src="blog_images/1571406099.png" alt="Blog" />
                            </a>
                        </div>
                        <div class="blog-content-area">
                            <div class="blog-meta">
                                <div class="meta-date">
                                    <ul class="list-gap">
                                        <li>01</li>
                                        <li>Jan</li>
                                    </ul>
                                </div>
                                <div class="meta-list">
                                    <ul class="list-gap">
                                        <li><i class="fa-light fa-user"></i><a href="#">Ship A1</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-text-box">
                                <div class="blog-header">
                                    <h4>
                                        <a class="title-link" href="#">How Effective Auto S.....</a>
                                    </h4>
                                </div>
                                <div class="blog-button">
                                    <ul class="list-gap">
                                        <li>
                                            <a href="#">
                                                Read More <i class="fa-regular fa-arrow-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="tj-blog-item">
                        <div class="tj-blog-image">
                            <a href="#">
                                <img src="blog_images/1571406672.jpg" alt="Blog" />
                            </a>
                        </div>
                        <div class="blog-content-area">
                            <div class="blog-meta">
                                <div class="meta-date">
                                    <ul class="list-gap">
                                        <li>02</li>
                                        <li>Feb</li>
                                    </ul>
                                </div>
                                <div class="meta-list">
                                    <ul class="list-gap">
                                        <li><i class="fa-light fa-user"></i><a href="#">Ship A1</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-text-box">
                                <div class="blog-header">
                                    <h4>
                                        <a class="title-link" href="#">Door to Door Transpo...</a>
                                    </h4>
                                </div>
                                <div class="blog-button">
                                    <ul class="list-gap">
                                        <li>
                                            <a href="#">
                                                Read More <i class="fa-regular fa-arrow-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="tj-blog-item">
                        <div class="tj-blog-image">
                            <a href="#">
                                <img src="blog_images/1571407027.png" alt="Blog" />
                            </a>
                        </div>
                        <div class="blog-content-area">
                            <div class="blog-meta">
                                <div class="meta-date">
                                    <ul class="list-gap">
                                        <li>03</li>
                                        <li>Mar</li>
                                    </ul>
                                </div>
                                <div class="meta-list">
                                    <ul class="list-gap">
                                        <li><i class="fa-light fa-user"></i><a href="#">Ship A1</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-text-box">
                                <div class="blog-header">
                                    <h4>
                                        <a class="title-link" href="#">How are Oversized Ve...</a>
                                    </h4>
                                </div>
                                <div class="blog-button">
                                    <ul class="list-gap">
                                        <li>
                                            <a href="#">
                                                Read More <i class="fa-regular fa-arrow-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Blog Section End =========-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="path/to/jquery.min.js"></script>
    <script src="path/to/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example-multiple').select2();
        });
        $(document).ready(function() {
            $('#example-multiple-2').select2();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.your-select-element').select2();
        });
    </script>
    <script>
        $(document).ready(function() {
            var selectedTab = '';
            $('#tabSelector').change(function() {
                $('.vehicles-container').html('');
                selectedTab = $(this).val();
                var vehicleType = $(this).val();
                $('.tab-pane').removeClass('show active');
                $('#' + selectedTab).addClass('show active');

                $.ajax({
                    url: "{{ route('get.partial.form') }}",
                    method: 'GET',
                    data: {
                        vehicleType: vehicleType,
                    },
                    success: function(response) {
                        $('#additionalContent').html('');
                        $('#additionalContent').html(response);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
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
                            selectOptions += '<option value="' + model + '">' +
                                model +
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
        // document.querySelectorAll('input[type="text"]').forEach((input) => {
        //     input.addEventListener("input", function() {
        //         this.value = this.value.replace(/[^0-9]/g, "");
        //     });
        // });
    </script>

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
        $(document).ready(function() {
            function showError(field, message) {
                $('#' + field).addClass('error-field');
                $('#' + field + '-error').text(message).show();
            }

            function hideError(field) {
                $('#' + field).removeClass('error-field');
                $('#' + field + '-error').hide();
            }

            // Move to Step 2
            $('#step1_next').click(function() {
                var isValid = true;

                if (!$('#pickup-location').val()) {
                    showError('pickup-location', 'This field is required.');
                    isValid = false;
                } else {
                    hideError('pickup-location');
                }

                if (!$('#delivery-location').val()) {
                    showError('delivery-location', 'This field is required.');
                    isValid = false;
                } else {
                    hideError('delivery-location');
                }

                if (isValid) {
                    $('#step1').hide();
                    $('#step2').show();
                }
            });

            // Return to Step 1
            $('#step2_previous').click(function() {
                $('#step2').hide();
                $('#step1').show();
            });

            // Move to Step 3
            $('#step2_next').click(function() {
                var isValid = true;

                // if (!$('#tabSelector').val()) {
                //     showError('tabSelector', 'This field is required.');
                //     isValid = false;
                // } else {
                //     hideError('tabSelector');
                // }

                if (isValid) {
                    $('#step2').hide();
                    $('#step3').show();
                }
            });

            // Return to Step 2
            $('#step3_previous').click(function() {
                $('#step3').hide();
                $('#step2').show();
            });
        });
    </script>



    <script>
        $(document).ready(function() {
            $(document).on('change', '#available_at_auction', function() {
                if ($(this).is(':checked')) {
                    $('.div-link').show();
                } else {
                    $('.div-link').hide();
                }
            });

            $(document).on('change', '#modification', function() {
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

    <script>
        $(document).ready(function() {
            var selectedTab = '';
            $('#tabSelector').change(function() {
                $('.vehicles-container').html('');
                selectedTab = $(this).val();
                var vehicleType = $(this).val();
                $('.tab-pane').removeClass('show active');
                $('#' + selectedTab).addClass('show active');

                $.ajax({
                    url: "{{ route('get.partial.form') }}",
                    method: 'GET',
                    data: {
                        vehicleType: vehicleType,
                    },
                    success: function(response) {
                        $('#additionalContent').html('');
                        $('#additionalContent').html(response);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });

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



                newVehicleHtml += `
                        </select>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="input-form tj-select model-div">
                        <label>Model</label>
                        <select class="nice-select model" name="model[]" id="model" required></select>`;

                newVehicleHtml +=
                    `<span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 10px; color: red; cursor: pointer;"></i></span>`;

                newVehicleHtml += `
                            </div>
                            </div>
                            </div>
                            </div>
                            `;

                $('.vehicles-container').append(newVehicleHtml);
            }

            function addOtherVehicle() {
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
                                required="" />`
                newVehicleHtml +=
                    `<span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 10px; color: red; cursor: pointer;"></i></span>`;

                newVehicleHtml += `</div>
                                </div>
                                </div>
                                </div>
                                `;

                $('.vehicles-container').append(newVehicleHtml);
            }

            $(document).on('click', '.addVehicleBtn', function() {
                if ($('#tabSelector').val() == 'Car') {
                    addNewVehicle();
                } else {
                    addOtherVehicle();
                }
            });

            $(document).on('click', '.delete-vehicle', function() {
                $(this).closest('.vehicle-info').remove();
            });

            $(document).ready(function() {
                $(document).on('change', '.vehicle-year, .vehicle-make', function() {
                    var year = $('.vehicle-year').val();
                    var makeId = $('.vehicle-make').val();
                    if (year && makeId) {
                        getModel(year, makeId);
                    }
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
                                selectOptions += '<option value="' + model + '">' +
                                    model +
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

    <script>
        // document.querySelectorAll('input[type="text"]').forEach((input) => {
        //     input.addEventListener("input", function() {
        //         this.value = this.value.replace(/[^0-9]/g, "");
        //     });
        // });
    </script>

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

@endsection
