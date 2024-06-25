<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;
use App\Models\QuoteVehicleInfo;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class QuoteController extends Controller
{
    use ImageUploadTrait;

    public function store(Request $request)
    {
        $data = $request->all();
        $heading = $this->generateHeading($data);
        $name = $request->input('name', null);
        $email = $request->input('email', null);
        $phone = $request->input('phone', null);
        $year = $data['year'][0];
        $make = $data['make'][0];
        $model = $data['model'][0];
        $condition = $request->input('condition', null);
        $originData = $request->input('origin', null);
        $destinationData = $request->input('destination', null);
        $additional = $request->input('add_info', null);
        $transport = $request->input('trailer_type', [2]);
        $shippingdate = $request->input('dates', null);
        $link = $request->input('link', null);
        $modification = $request->input('modification', null);
        $modify_info = $request->input('modify_info', null);
        $category = $request->input('category', null);
        $boat_on_trailer = $request->input('boat_on_trailer', null);
        $length_ft = $request->input('length_ft', null);
        $length_in = $request->input('length_in', null);
        $width_ft = $request->input('width_ft', null);
        $width_in = $request->input('width_in', null);
        $height_ft = $request->input('height_ft', null);
        $height_in = $request->input('height_in', null);
        $weight = $request->input('weight', null);
        $subcategory = $request->input('subcategory', null);
        $load_type = $request->input('load_type', null);
        $load_method = $request->input('load_method', null);
        $unload_method = $request->input('unload_method', null);
        $available_at_auction = $request->input('available_at_auction', null);
        $commodity_detail = $request->input('commodity_detail', null);
        $handling_unit = $request->input('handling_unit', null);
        $commodity_unit = $request->input('commodity_unit', null);
        $trailer_specification = $request->input('trailer_specification', null);
        $equipment_type = $request->input('equipment_type', null);
        $stackable = $request->input('stackable', null);
        $hazardous = $request->input('hazardous', null);
        $pick_up_services = $request->input('pick_up_services', null);
        $deliver_services = $request->input('deliver_services', null);
        $ex_pickup_date = $request->input('ex_pickup_date', null);
        $ex_pickup_time = $request->input('ex_pickup_time', null);
        $ex_delivery_date = $request->input('ex_delivery_date', null);
        $ex_delivery_time = $request->input('ex_delivery_time', null);
        $protect_from_freezing = $request->input('protect_from_freezing', null);
        $sort_segregate = $request->input('sort_segregate', null);
        $blind_shipment = $request->input('blind_shipment', null);
        $vehicle_opt = $request->input('vehicle_opt', null);
        $frieght_class = $request->input('frieght_class', null);
        $ip = $request->ip();
        $source = 'ShipA1';

        $originValues = explode(',', $originData);
        $origin_zip = isset($originValues[2]) ? trim($originValues[2]) : null;
        $origin_city = isset($originValues[0]) ? trim($originValues[0]) : null;
        $origin_state = isset($originValues[1]) ? trim($originValues[1]) : null;

        $destinationValues = explode(',', $destinationData);
        $destination_zip = isset($destinationValues[2]) ? trim($destinationValues[2]) : null;
        $destination_city = isset($destinationValues[0]) ? trim($destinationValues[0]) : null;
        $destination_state = isset($destinationValues[1]) ? trim($destinationValues[1]) : null;

        $client = new Client();
        try {
            $response = $client->get("http://ipinfo.io/{$ip}/json");
            $ip_details = json_decode($response->getBody());
            $ipcity = $ip_details ? $ip_details->city : null;
            $ipregion = $ip_details ? $ip_details->region : null;
            $ipcountry = $ip_details ? $ip_details->country : null;
            $iploc = $ip_details ? $ip_details->loc : null;
            $ippostal = $ip_details ? $ip_details->postal : null;
        } catch (\Exception $e) {
            $ipcity = null;
            $ipregion = null;
            $ipcountry = null;
            $iploc = null;
            $ippostal = null;
        }

        $vehicles = [];

        foreach ($data['year'] as $index => $count) {
            $vehicles[] = [
                'year' => $data['year'][$index],
                'make' => $data['make'][$index],
                'model' => $data['model'][$index]
            ];
        }

        $post_array = [
            'appkey' => '0EO9KCH9NNI46HH60WOL5OW4TE0GCD6Y',
            'domain' => 'https://shawntransport.com',
            'product_url' => 'https://shipa1.com',
            'oname' => $name,
            'oemail' => $email,
            'ophone' => $phone,
            'ymk' => $heading,
            'vehicles' => $vehicles,
            'condition' => $condition,
            'originzsc' => $originData,
            'destinationzsc' => $destinationData,
            'add_info' => $additional,
            'transport' => $transport,
            'shippingdate' => $shippingdate,
            'car_type' => 1,
            'paneltype' => 2,
            'cname' => $name,
            'cemail' => $email,
            'main_ph' => $phone,
            'ip' => $ip,
            'ipcity' => $ipcity,
            'ipregion' => $ipregion,
            'ipcountry' => $ipcountry,
            'iploc' => $iploc,
            'ippostal' => $ippostal,
            'link' => $link,
            'modification' => $modification,
            'modify_info' => $modify_info,
            'category' => $category,
            'boat_on_trailer' => $boat_on_trailer,
            'length_ft' => $length_ft,
            'length_in' => $length_in,
            'width_ft' => $width_ft,
            'width_in' => $width_in,
            'height_ft' => $height_ft,
            'height_in' => $height_in,
            'weight' => $weight,
            'subcategory' => $subcategory,
            'load_type' => $load_type,
            'load_method' => $load_method,
            'unload_method' => $unload_method,
            'available_at_auction' => $available_at_auction,
            'commodity_detail' => $commodity_detail,
            'handling_unit' => $handling_unit,
            'commodity_unit' => $commodity_unit,
            'trailer_specification' => $trailer_specification,
            'equipment_type' => $equipment_type,
            'stackable' => $stackable,
            'hazardous' => $hazardous,
            'pick_up_services' => $pick_up_services,
            'deliver_services' => $deliver_services,
            'ex_pickup_date' => $ex_pickup_date,
            'ex_pickup_time' => $ex_pickup_time,
            'ex_delivery_date' => $ex_delivery_date,
            'ex_delivery_time' => $ex_delivery_time,
            'protect_from_freezing' => $protect_from_freezing,
            'sort_segregate' => $sort_segregate,
            'blind_shipment' => $blind_shipment,
            'vehicle_opt' => $vehicle_opt,
            'originzip' => $origin_zip,
            'originstate' => $origin_state,
            'origincity' => $origin_city,
            'destinationzip' => $destination_zip,
            'destinationstate' => $destination_state,
            'destinationcity' => $destination_city,
            'year' => $year,
            'make' => $make,
            'model' => $model,
            'frieght_class' => $frieght_class,
            'source' => $source,
        ];

        if ($request->hasFile('image')) {
            $imagePath = $this->uploadImage('quoteForm', $request->file('image'));
            $image = 'https://blog.shipa1.daydispatch.com/public/' . $imagePath;
            $post_array['image'] = $image;
            // dd($image);

        }

        // dd($request->toArray(), $post_array);

        try {
            $response = Http::post('https://washington.shawntransport.com/api/v2/website-quote', $post_array)->json();
            return back()->with('success', 'Quote created successfully');
        } catch (\Exception $e) {
            \Log::error($e->getMessage());

            return back()->with('error', 'An error occurred while creating the quote. Please try again later.');
        }
    }

    private function generateHeading($data)
    {
        $heading = '';
        foreach ($data['year'] as $index => $count) {
            if (isset($data['year'][$index]) && isset($data['make'][$index]) && isset($data['model'][$index])) {
                $heading .= $data['year'][$index] . ' ' . $data['make'][$index] . ' ' . $data['model'][$index] . '*^';
            }
        }
        return rtrim($heading, '*^');
    }

    private function generateStringFromArray($array)
    {
        return count($array) > 1 ? implode('*^', $array) : $array[0];
    }
}
