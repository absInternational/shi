<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\VehicleName;
use App\Models\ZipCode;
use App\Models\Subcategory;
use App\Models\Category;

class MainController extends Controller
{
    public function trackOrder(Request $request)
    {
        $id = $request->order_num;
        $apiUrl = 'https://washington.shawntransport.com/api/tracking-order';

        $response = Http::post($apiUrl, [
            'id' => $id,
        ]);
        $responseData = $response->json();

        if ($responseData['status_code'] == 200) {
            return view('partials.orderTrackingTable', compact('responseData'));
        } else {
            return $responseData;
        }
    }

    public function getmake(Request $request)
    {
        $searchOrigin = $request->term;
        $origin = array();

        $selectOri = VehicleName::select('make')
            ->where('make', 'LIKE', $searchOrigin . '%')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->limit(10)
            ->get();

        if ($selectOri->isNotEmpty()) {
            foreach ($selectOri as $val) {
                $origin[] = $val->make;
            }
        }

        return $origin;
    }

    public function getmodel(Request $request)
    {
        $year = $request->year;
        $make = $request->make;
        $searchOrigin = $request->term;
        $model = array();

        $selectOri = VehicleName::select('model')
            ->where('model', 'LIKE', $searchOrigin . '%')
            ->where('make', 'LIKE', $make . '%')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('model')
            ->orderBy('model', 'ASC')
            ->limit(10)
            ->get();

        if ($selectOri->isNotEmpty()) {
            foreach ($selectOri as $val) {
                $model[] = $val->model;
            }
        }
        return $model;
    }

    public function get_zip(Request $request)
    {
        $searchOrigin = $request->input;
        $origin = [];

        $selectOri = ZipCode::select('city', 'state', 'zipcode')
            ->where('zipcode', 'LIKE', $searchOrigin . '%')
            ->orWhere('city', 'LIKE', $searchOrigin . '%')
            ->limit(10)
            ->get();

        if ($selectOri->isNotEmpty()) {
            foreach ($selectOri as $val) {
                $origin[] = $val->city . "," . $val->state . "," . $val->zipcode;
            }
        }

        return $origin;
    }

    public function get_subcategories(Request $request)
    {
        $category = $request->category;
        
        $subcategories = Subcategory::where('category_id', $category)->get();

        return $subcategories;
    }

    public function partialForm(Request $request)
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();

        $categories = Category::all();

        $vehicleType = $request->vehicleType;

        if ($request->vehicleType == 'Car') {
            return view('partials.forms.car2', compact('makes', 'vehicleType'));
        }
        elseif ($request->vehicleType == 'Golf-Cart') {
            return view('partials.forms.golf-cart', compact('makes', 'vehicleType'));
        }
        elseif ($request->vehicleType == 'Atv') {
            return view('partials.forms.atv', compact('makes', 'vehicleType'));
        }
        elseif ($request->vehicleType == 'Boat-Transport') {
            return view('partials.forms.boat', compact('makes', 'vehicleType'));
        }
        elseif ($request->vehicleType == 'Freight-Transportation') {
            return view('partials.forms.freight', compact('makes', 'vehicleType'));
        }
        elseif ($request->vehicleType == 'Heavy-Equipment') {
            return view('partials.forms.heavy', compact('makes', 'vehicleType', 'categories'));
        }
        elseif ($request->vehicleType == 'Motorcycle') {
            return view('partials.forms.motorcycle', compact('makes', 'vehicleType'));
        }
        elseif ($request->vehicleType == 'RV-Transport') {
            return view('partials.forms.rv', compact('makes', 'vehicleType'));
        }
        elseif ($request->vehicleType == 'Excavator-Tr') {
            return view('partials.forms.excavator', compact('makes', 'vehicleType'));
        }
        elseif ($request->vehicleType == 'Commercial-Truck') {
            return view('partials.forms.commercial-truck', compact('makes', 'vehicleType'));
        }
        elseif ($request->vehicleType == 'Consrtuction-Transport') {
            return view('partials.forms.consrtuction-transport', compact('makes', 'vehicleType'));
        }
        elseif ($request->vehicleType == 'Farm-Transport') {
            return view('partials.forms.farm-transport', compact('makes', 'vehicleType'));
        }

    }
}
