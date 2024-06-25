

            

            <div class="input-form">
                <label for="category">Select Boat Type</label>
                <select class="" id="category" name="category" style="display: none;">
                    <option value="" disabled="" selected="">Select</option>
                    <option value="Power Boat">Power Boat</option>
                    <option value="Sail Boat">Sail Boat</option>
                    <option value="Personal Watercraft">Personal Watercraft</option>
                    <option value="Boat Parts">Boat Parts</option>
                    <option value="Motor Boat">Motor Boat</option>
                    <option value="Others">Others</option>
                </select>
                <div class="nice-select" tabindex="0"><span class="current">Select</span>
                    <ul class="list">
                        <li data-value="" class="option selected disabled">Select</li>
                        <li data-value="Power Boat" class="option">Power Boat</li>
                        <li data-value="Sail Boat" class="option">Sail Boat</li>
                        <li data-value="Personal Watercraft" class="option">Personal Watercraft</li>
                        <li data-value="Boat Parts" class="option">Boat Parts</li>
                        <li data-value="Motor Boat" class="option">Motor Boat</li>
                        <li data-value="Others" class="option">Others</li>
                    </ul>
                </div>
                <input type="text" class="form-control" id="otherCategoryInput" name="category" disabled=""
                    style="display: none;" placeholder="Specify Category">
            </div>

            <div class="row select-bm">

<div class="col-md-4">
    <div class="input-form tj-select">
        <label> Year</label>
        <select class="nice-select vehicle-year" name="year[]" id="year">
            <option value="" disabled selected>Select Year
            </option>
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
        <input type="text" id="make" name="make[]" placeholder="Enter Make" required />
    </div>
</div>
<div class="col-md-4">
    <div class="input-form tj-select vehicle-model-div">
        <label>Model</label>
        <input type="text" id="model" name="model[]" placeholder="Enter Model" required/>
    </div>
</div>
</div>

<a class="add-car addVehicleBtn" id="addVehicleBtn"><i class="fa fa-plus"></i> Add
Vehicle</a>

<div class="vehicles-container">
</div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="trailer_type" class="text-white">Select Trailer
                            Type</label>
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


            <div class="row mb-3">




                <div class="col-md-4">

                    <label class="lab-cos">Length</label>
                    <div class="input-container">
                        <input type="number" id="feet-input" class="input-field" placeholder="" min="0" maxlength="3"
                            oninput="limitDigits(this, 3)">
                        <span class="separator">(Ft.)</span>
                        <input type="number" id="inches-input" class="input-field" placeholder="" min="0" max="11"
                            maxlength="2" oninput="limitDigits(this, 2)">
                        <span class="separators">(In.)</span>
                    </div>
                </div>

                <div class="col-md-4">

                    <label class="lab-cos">Width</label>
                    <div class="input-container">
                        <input type="number" id="feet-input1" class="input-field" placeholder="" min="0" maxlength="3"
                            oninput="limitDigits(this, 3)">
                        <span class="separator">(Ft.)</span>
                        <input type="number" id="inches-input1" class="input-field" placeholder="" min="0" max="11"
                            maxlength="2" oninput="limitDigits(this, 2)">
                        <span class="separators">(In.)</span>
                    </div>
                </div>

                <div class="col-md-4">

                    <label class="lab-cos">Height</label>
                    <div class="input-container">
                        <input type="number" id="feet-input2" class="input-field" placeholder="" min="0" maxlength="3"
                            oninput="limitDigits(this, 3)">
                        <span class="separator">(Ft.)</span>
                        <input type="number" id="inches-input2" class="input-field" placeholder="" min="0" max="11"
                            maxlength="2" oninput="limitDigits(this, 2)">
                        <span class="separators">(In.)</span>
                    </div>
                </div>
                </div>
                <div class="row">

                
                <div class="col-md-4">

                    <label class="lab-cos">Weight</label>
                    <div class="input-container1">
                        <input type="" id="feet-input" class="input-field-1" placeholder="" min="0" maxlength="6"
                            oninput="limitDigits(this, 6)">
                        <span class="separators-w">(Lbs.)</span>

                    </div>
                </div>
                </div>





           

            <div class="row">
                <div class="col-md-6">

                <div class="form-check">
            <input class="form-check-input" type="checkbox" id="available_at_auction" name="available_at_auction"
                value="1" required />
            <label class="form-check-label text-white" for="available_at_auction"> Available
                at
                Auction?</label>
        </div>

        <div class="input-form div-link" style="display: none;">
            <label class="d-block mb-2"> Enter Link:</label>
            <input class="" type="url" id="link" name="link" placeholder="Enter Link" required />
        </div>

                </div>


                <div class="col-md-6">


                    <div class="form-group mb-0">
                        <input class="form-check-input" type="checkbox" id="modification" name="modification"
                            value="1" />
                        <label class="form-check-label ms-4 text-white" for="modification"> Modified?</label>
                    </div>

                    <div class="input-form div-modify_info" style="display: none;">
                        <label class="d-block"> Modification Information:</label>
                        <input class="" type="text" id="c" name="modify_info"
                            placeholder="Enter Modification Information" />
                    </div>
                </div>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="boat_on_trailer" name="boat_on_trailer"
                    value="1" />
                <label class="form-check-label text-white" for="boat_on_trailer"> Is your boat on
                    trailer?</label>
            </div>
            <div class="input-form mt-3">
                <label class="d-block text-white"> Image:</label>
                <input class="form-control image_input" type="file" accept="image/*" multiple onchange="previewImages(event)">
    <div class="image-preview-container" id="imagePreviewContainer"></div>
                <!-- <input class="form-control image_input" type="file" id="image" name="image" placeholder="Upload File" /> -->
            </div>
            