<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class CarsRentController extends Controller
{
    public function index(){
        $cars = Cars::select('*')->get();
        return view('cars', ['cars' => $cars]);
    }

    public function addCars(){
        return view('carsForm');
    }

    public function saveCars(Request $request){
        $input = $request->all();

        $this->validate($request, [
            'brand' => 'required|string',
            'model' => 'required|string',
            'license_number' => 'required|string',
            'price' => 'required|integer',
        ]);

        $cars = Cars::create($input);

        return redirect('cars');
    }
}
