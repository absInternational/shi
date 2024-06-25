<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehicleName;
use App\Models\Category;

class FormVehicleController extends Controller
{
    public function car()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();

        return view('frontend.forms.car', compact('makes'));
    }

    public function motorcycle()
    {
        return view('frontend.forms.motorcycle');
    }

    public function golf_cart()
    {
        return view('frontend.forms.golf_cart');
    }

    public function atv_utv()
    {
        return view('frontend.forms.atv_utv');
    }

    public function boat()
    {
        return view('frontend.forms.boat');
    }

    public function heavyEquipment()
    {
        $categories = Category::all();
        return view('frontend.forms.heavyEquipment', compact('categories'));
    }

    public function freight()
    {
        return view('frontend.forms.freight');
    }

    


    public function roro()
    {
        return view('frontend.forms.roro');
    }

    public function recreationalVehicle()
    {
        return view('frontend.forms.rv');
    }

    public function quoteForm()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();

        return view('frontend.forms.quote_form', compact('makes'));
    }

    public function commercialTruck()
    {
        return view('frontend.forms.commercial_truck');
    }

    public function constructionTransport()
    {
        return view('frontend.forms.construction_transport');
    }

    public function excavator()
    {
        return view('frontend.forms.excavator');
    }

    public function farmTransport()
    {
        return view('frontend.forms.farm_transport');
    }

    public function rvTransport()
    {
        return view('frontend.forms.rv_transport');
    }
}
