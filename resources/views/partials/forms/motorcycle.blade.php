<input type="hidden" name="vehicle_opt" value="vehicle" hidden>



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

<div class="row mb-3">
    <div class="col-md-6">
        <div class="form-group">
            <label for="trailer_type" class="text-white">Select Trailer Type</label>
            <select class="nice-select " id="trailer_type" name="trailer_type">
                <option value="Open" selected>Open</option>
                <option value="Enclosed">Enclosed</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="condition" class="text-white">Condition</label>
            <select class=" nice-select" id="condition" name="condition">
                <option value="Running" selected>Running</option>
                <option value="Non Running">Non Running</option>
            </select>
        </div>
    </div>
</div>


<div class="input-form">
    <label class="d-block text-white"> Image:</label>
    <input class="form-control  image_input" type="file" id="image" name="image" placeholder="Upload File" />
</div>


<div class="row ms-3">
    <di class="col-md-6">
        <div class="form-group">
            <input class="form-check-input " type="checkbox" id="modification" name="modification" value="1" />
            <label class="form-check-label ms-4 text-white" for="modification">
                Modified?</label>
        </div>

        <div class="input-form div-modify_info" style="display: none;">
            <label class="d-block"> Modification Information:</label>
            <input class="" type="text" id="c" name="modify_info"
                placeholder="Enter Modification Information" />
        </div>
    </di>
    <di class="col-md-6">
    <div class="form-check">
            <input class="form-check-input" type="checkbox" id="available_at_auction" name="available_at_auction"
                value="1" required />
            <label class="form-check-label text-white" for="available_at_auction"> Available
                at
                Auction?</label>
        </div>

        <div class="input-form div-link" style="display: none;">
            <label class="d-block"> Enter Link:</label>
            <input class="" type="url" id="link" name="link" placeholder="Enter Link" required />
        </div>
    </di>
</div>
