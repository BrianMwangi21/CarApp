<?php

namespace App\Http\Controllers;

use App\Cars;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;

class CarsController extends Controller
{
    public function getAll(Request $request) {
        $all_cars = Cars::orderBy('created_at', 'desc')->paginate(10);

        return view('home', [
            'all_cars' => $all_cars
        ]);
    }

    public function newCar(Request $request) {
        $cars = new Cars;
        $cars->id = Uuid::generate()->string;
        $cars->car_name = $request->carname;
        $cars->car_type = $request->cartype;
        $cars->car_model = $request->carmodel;
        $cars->car_amount = $request->caramount;
        $cars->car_description = $request->cardesc;
        $cars->car_image = $request->carimg;

        $saved = $cars->save();

        if( $saved ) {
            return redirect('/new-car')
                ->with("success", "Car created")
                ->withInput();
        }else {
            return redirect('/new-car')
                ->withError("Car not created. Try again")
                ->withInput();
        }
    }
}
