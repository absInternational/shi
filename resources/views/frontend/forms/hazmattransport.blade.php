@extends('frontend.layouts.app')

@section('content')

    <style>
        .image-preview-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .image-preview {
            position: relative;
            display: inline-block;
        }

        .image-preview img {
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

        .remove-button {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: red;
            color: white;
            border: none;
            cursor: pointer;
            padding: 5px;
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

        .suggestionsTwo {
            background: #fff;
            font-size: 14px;
            margin-top: -2px;
            padding-bottom: 20px;
            list-style: none;
            line-height: 28px;
            padding-left: 14px;
            display: none;
        }

        .suggestionsTwo li {
            cursor: pointer;
        }

        .suggestionsTwo li:hover {
            color: #8fc445;
        }

        .image_input {
            padding: 0px !important;
            padding-left: 10px !important;
        }

        .select2 {
            color: #38413b;
            opacity: 2;
            font-size: 18px;
            border: 1px solid #318eefc9;
            font-family: inherit;
        }

        select {
            width: 100%;
            min-height: 100px;
            border-radius: 3px;
            border: 1px solid #444;
            padding: 10px;
            color: #444444;
            font-size: 14px;
        }
    </style>
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">Hazmat Transport</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span> Hazmat Transport</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== breadcrumb End ==============-->

    <section class="tj-choose-us-section-hazmat">
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
                        <h4 class="title text-center">Instant Hazmat Shipping Quote!</h4>
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
                            <div class="row">
                                <div class="input-form">
                                    <label for="category">Category</label>
                                    <select class="form-control" id="category" name="category">
                                        <option value="" disabled selected>Select</option>
                                        <option value="LTL USED COMMERCIAL GOODS">LTL USED COMMERCIAL GOODS</option>
                                        <option value="LTL NEW COMMERCIAL GOODS">LTL NEW COMMERCIAL GOODS</option>
                                        <option value="LTL USED GOODS">LTL USED GOODS</option>
                                        <option value="LTL NEW GOODS">LTL NEW GOODS</option>
                                        <option value="FTL FULL TRUCK LOAD">FTL FULL TRUCK LOAD</option>
                                    </select>
                                </div>
                            </div>





                            <div class="row mt-3">
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



                            <div class="form-group" style="display:none;">
                                <label for="trailer_type" class="text-white">Select Trailer Type</label>
                                <select class="form-control" id="trailer_type" name="trailer_type">
                                    <option value="RGN" selected>RGN</option>
                                    <option value="Stepdeck">Stepdeck</option>
                                    <option value="Flatbed">Flatbed</option>
                                    <option value="Hotshot">Hotshot</option>
                                    <option value="Landoll">Landoll</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-form">
                                        <label class="d-block"> Commodity Detail:</label>
                                        <input type="text" id="commodity_detail" name="commodity_detail"
                                            placeholder="Commodity Detail" required="" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form">
                                        <label class="d-block"> Select Handling Unit:</label>
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
                                        <label class="d-block"> Commodity Unit:</label>
                                        <input type="number" id="commodity_unit" name="commodity_unit"
                                            placeholder="Commodity Unit" required="" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block">Trailer Specification</label>
                                        <select id="example-multiple" class="js-example-basic-multiple sel-mul"
                                            name="states[]" multiple="multiple" style="width: 100%">

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
                                        <select id="example-multiple-2" class="js-example-basic-multiple sel-mul"
                                            name="states[]" multiple="multiple" style="width: 100%">


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
                                        <input class="form-check-input" type="checkbox" id="stackable" name="stackable"
                                            value="1" />
                                        <label class="form-check-label text-white" for="stackable"> Stackable</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="boat_on_trailer"
                                            name="boat_on_trailer" value="1" />
                                        <label class="form-check-label text-white" for="boat_on_trailer"> Is your freight
                                            already on
                                            a
                                            trailer?</label>
                                    </div>

                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="hazardous" name="hazardous"
                                            value="1" />
                                        <label class="form-check-label text-white" for="hazardous"> Hazardous</label>
                                    </div>
                                </div>
                                <div class="col-md-6">


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



                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pick_up_services" class="text-white">Pickup Services</label>
                                        <select class="form-control" id="pick_up_services" name="pick_up_services">
                                            <option value="" disabled selected>Select</option>
                                            <option value="Construction / Utility">Construction / Utility</option>
                                            <option value="Container Station">Container Station</option>
                                            <option value="Exhibition">Exhibition</option>
                                            <option value="Inside Pickup">Inside Pickup</option>
                                            <option value="Lift Gate Service">Lift Gate Service</option>
                                            <option value="Residential">Residential</option>
                                            <option value="Single Shipment">Single Shipment</option>
                                            <option value="Sorting / Segregation">Sorting / Segregation</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="deliver_services" class="text-white">Deliver Services</label>
                                        <select class="form-control" id="deliver_services" name="deliver_services">
                                            <option value="" disabled selected>Select</option>
                                            <option value="After Business Hours Delivery">After Business Hours Delivery
                                            </option>
                                            <option value="Construction / Utility">Construction / Utility</option>
                                            <option value="Appointment">Appointment</option>
                                            <option value="Container Station">Container Station</option>
                                            <option value="Exhibition">Exhibition</option>
                                            <option value="In Bond Freight">In Bond Freight</option>
                                            <option value="In Bond TIR Caret">In Bond TIR Caret</option>
                                            <option value="Inside - Same Level as Delivery Vehicle">Inside - Same Level as
                                                Delivery Vehicle</option>
                                            <option value="Lift Gate Service">Lift Gate Service</option>
                                            <option value="Residential">Residential</option>
                                            <option value="Mine / Govt / Airport">Mine / Govt / Airport</option>
                                            <option value="Notification Prior Delivery">Notification Prior Delivery
                                            </option>
                                            <option value="Delivery appointment required">Delivery appointment required
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
                            <div class="input-form ">
                                <label class="d-block" class="text-white"> Image:</label>
                                <input class="form-control image_input" type="file" accept="image/*" multiple
                                    onchange="previewImages(event)">
                                <div class="image-preview-container" id="imagePreviewContainer"></div>
                                <!-- <input class="form-control image_input" type="file" id="image" name="image" onchange="previewImage(event)" />
                                    <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 100px; max-height: 100px; margin-top: 10px;"> -->
                            </div>

                            <div class="form-group">
                                <label for="condition" class="text-white">Condition</label>
                                <select class="form-control" id="condition" name="condition">
                                    <option value="Running" selected>Running</option>
                                    <option value="Non Running">Non Running</option>
                                </select>
                            </div>
                            <div class="row mb-3">




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
                            <div class="row">
                                <h4 class="text-white">Additional Services</h4>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="protect_from_freezing"
                                            name="protect_from_freezing" value="1" />
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
                            <div class="row select-bm" style="display:none;">
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

                            <!-- <a class="add-car" style="display:none;" id="addVehicleBtn"
                                    style="cursor: pointer; text-decoration: underline;"><i class="fa fa-plus"></i> Add
                                    Vehicle</a> -->

                            <div id="vehicles-container" style="display:none;">
                            </div>
                            <div class="tj-theme-button mt-3">
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
        $(document).ready(function() {
            $('#example-multiple').select2();
        });
        $(document).ready(function() {
            $('#example-multiple-2').select2();
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
                                    <span class="delete-vehicle"><i class="fa fa-trash"></i></span>
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
