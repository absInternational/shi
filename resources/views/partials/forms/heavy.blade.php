<div class="row">

    <div class="col-6">
        <div class="input-form">
            <label for="category">Category</label>
            <select class="nice-select " id="category" name="category">
                <option value="" disabled selected>Select</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <input type="text" class="form-control" id="otherCategoryInput" name="category" disabled
                style="display: none;" placeholder="Specify Category">
        </div>
    </div>
    <div class="col-6">
        <div class="input-form" id="subcategory-box">
            <label for="subcategory">Subcategory</label>
            <select class="nice-select " id="subcategory" name="subcategory">
                <option value="" disabled selected>Select</option>
            </select>
        </div>
    </div>
</div>
 
 
 <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="trailer_type" class="text-white">Select Trailer Type</label>
            <select class="nice-select " id="trailer_type" name="trailer_type">
                <option value="RGN" selected>RGN</option>
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
    <div class="col-md-6">
        <div class="form-group">
            <label for="condition" class="text-white">Condition</label>
            <select class="nice-select " id="condition" name="condition">
                <option value="Running" selected>Running</option>
                <option value="Non Running">Non Running</option>
            </select>
        </div>
    </div>
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

<div class="row mt-3">
    <div class="col-md-4">
        <div class="form-group">
            <label for="load_type" class="text-white">Load Type</label>
            <select class="nice-select " id="load_type" name="load_type">
                <option value="" disabled selected>Select</option>
                <option value="LTL (LESS THEN TRUCK LOAD)">LTL (LESS THEN TRUCK LOAD)</option>
                <option value="FTL (FULL TRUCK LOAD)">FTL (FULL TRUCK LOAD)</option>
            </select>
        </div>
    </div>
    <div class="col-md-4">
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
    <div class="col-md-4">
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
<div class="row mb-3">
<div class="col-md-4">

        <label class="lab-cos">Length</label>
        <div class="input-container">
            <input type="number" id="feet-input" class="input-field" placeholder="" min="0" maxlength="3"
                oninput="limitDigits(this, 3)">
            <span class="separator">(Ft.)</span>
            <input type="number" id="inches-input" class="input-field" placeholder="" min="0"
                max="11" maxlength="2" oninput="limitDigits(this, 2)">
            <span class="separators">(In.)</span>
        </div>
    </div>

    <div class="col-md-4">

        <label class="lab-cos">Width</label>
        <div class="input-container">
            <input type="number" id="feet-input1" class="input-field" placeholder="" min="0"
                maxlength="3" oninput="limitDigits(this, 3)">
            <span class="separator">(Ft.)</span>
            <input type="number" id="inches-input1" class="input-field" placeholder="" min="0"
                max="11" maxlength="2" oninput="limitDigits(this, 2)">
            <span class="separators">(In.)</span>
        </div>
    </div>
    <div class="col-md-4">

        <label class="lab-cos">Height</label>
        <div class="input-container">
            <input type="number" id="feet-input2" class="input-field" placeholder="" min="0"
                maxlength="3" oninput="limitDigits(this, 3)">
            <span class="separator">(Ft.)</span>
            <input type="number" id="inches-input2" class="input-field" placeholder="" min="0"
                max="11" maxlength="2" oninput="limitDigits(this, 2)">
            <span class="separators">(In.)</span>
        </div>
    </div>
</div>
<div class="row mb-3">




    

    

    <div class="col-md-6">

        <label class="lab-cos">Weight</label>
        <div class="input-container1">
            <input type="" id="feet-input" class="input-field-1" placeholder="" min="0"
                maxlength="6" oninput="limitDigits(this, 6)">
            <span class="separators-w">(Lbs.)</span>

        </div>
    </div>
</div>

