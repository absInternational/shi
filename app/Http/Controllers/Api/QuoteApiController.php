<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quote;
use App\Models\QuoteVehicleInfo;
use App\Traits\ImageUploadTrait;

class QuoteApiController extends Controller
{
    use ImageUploadTrait;

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'available_at_auction' => 'required|in:0,1',
            'link' => 'nullable',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'trailer_type' => 'required|string|max:255',
            'condition' => 'required|string|max:255',
            'modification' => 'nullable|in:0,1',
            'modify_info' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',
            'origin' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'vehicles.*.year' => 'required|integer|min:1936',
            'vehicles.*.make' => 'required|string|max:255',
            'vehicles.*.model' => 'required|string|max:255',
        ]);

        $originValues = explode(',', $validatedData['origin']);
        $validatedData['origin_zip'] = isset($originValues[2]) ? trim($originValues[2]) : null;
        $validatedData['origin_city'] = isset($originValues[0]) ? trim($originValues[0]) : null;
        $validatedData['origin_state'] = isset($originValues[1]) ? trim($originValues[1]) : null;

        $destinationValues = explode(',', $validatedData['destination']);
        $validatedData['destination_zip'] = isset($destinationValues[2]) ? trim($destinationValues[2]) : null;
        $validatedData['destination_city'] = isset($destinationValues[0]) ? trim($destinationValues[0]) : null;
        $validatedData['destination_state'] = isset($destinationValues[1]) ? trim($destinationValues[1]) : null;

        $quote = Quote::create($validatedData);

        if ($request->hasFile('image')) {
            $quote->image = $this->uploadImage('quote_images', $request->file('image'));
            $quote->save();
        }

        $years = $request->input('year');
        $makes = $request->input('make');
        $models = $request->input('model');

        foreach ($years as $key => $year) {
            $vehicleData = [
                'year' => $year,
                'make' => $makes[$key],
                'model' => $models[$key],
            ];
            $quote->vehicles()->create($vehicleData);
        }

        return response()->json(['message' => 'Quote created successfully', 'quote' => $quote], 201);
    }
}
