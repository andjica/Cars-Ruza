<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Car;
use App\Motor;
use App\Color;
use Mail;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //All cars with category and motor relationships
        $all_cars = Car::with('category','motor')->get();
        return view('pages.cars.all_cars',compact('all_cars'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['categories'] = Category::all();
        $data['colors'] = Color::all();
        return view('pages.createAd',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $this->validate($request, [
            'car' => 'required',
            'photo' => 'required',
            'desc1' => 'required',
            'desc2' => 'required',
            'desc3' => 'required',
            'desc4' => 'required',
            'motor_type' => 'required',
        ]);

        
        $image = request()->file('photo');
        $image_name = time().'.'.$image->getClientOriginalExtension();
        try{
            $image->move(public_path('\img'),$image_name);
        }
        catch(Exception $e)
        {
            $e->getMessage();
        }

        

        $id = Car::create([
            'car'           =>  request('car'),
            'image'         =>  $image_name,
            'desc1'         =>  request('desc1'),
            'desc2'         =>  request('desc2'),
            'desc3'         =>  request('desc3'),
            'desc4'         =>  request('desc4'),
            'category_id'   =>  request('category'),
            'user_id'       =>  auth()->user()->id,
            'cost'          =>  request('price')
        ])->id;

        Motor::create([
            'gearshift' => request('gearshift'),
            'type'      => request('motor_type'),
            'benzine'   => request('benzine'),
            'car_id'    => $id

        ]);

        CarColor::create([
            'car_id'    => $id,
            'color_id'  => request('color')
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $car = Car::find($id) ?? abort(403);
        return view('pages.cars.show',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $data['car'] = Car::with('motor')->find($id);
        $data['categories'] = Category::all();
        
        return view('pages.cars.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $image = request()->file('photo');

        if(!is_null($image))
        {
            $image_name = time().'.'.$image->getClientOriginalExtension();

            try
            {
                $image->move(public_path('\img'),$image_name);
            }
            catch(Exception $e)
            {
                $e->getMessage();
            }

            Car::where('id',$id)->update([
                'car' => request('car'),
                'desc1' =>request('desc1'),
                'desc2' =>request('desc2'),
                'desc3' =>request('desc3'),
                'desc4' =>request('desc4'),
                'cost' =>request('cost'),
                'image' => $image_name,
                'user_id' =>auth()->user()->id
            ]);

            Motor::where('car_id',$id)->update([
                'type' => request('motor_type'),
                'gearshift' => request('gearshift'),
                'benzine' => request('benzine')
            ]);
        }

        Car::where('id',$id)->update([
            'car' => request('car'),
            'desc1' =>request('desc1'),
            'desc2' =>request('desc2'),
            'desc3' =>request('desc3'),
            'desc4' =>request('desc4'),
            'cost' =>request('cost'),
            'user_id' =>auth()->user()->id
        ]);

        Motor::where('car_id',$id)->update([
            'type' => request('motor_type'),
            'gearshift' => request('gearshift'),
            'benzine' => request('benzine')
        ]);

        return redirect('/all_cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Car::destroy($id);
        // dd('kita');
        return redirect('/cars');
    }

    public function discount()
    {
        $id = request('id');
        $discount = request('discount');

        $cost = Car::where('id',$id)->first();
        return $cost->cost = $cost->cost - $cost->cost * $discount / 100;

    }

    public function update_cost($id)
    {
        $discount = request('discount');

        $cost = Car::where('id',$id)->first();
        $new_cost = $cost->cost - $cost->cost * $discount / 100;

        Car::where('id',$id)->update([
            'cost' => $new_cost
        ]);

        return redirect()->back();
    }

    public function car_invoice()
    {
        $car = Car::with('colors','motor','category')->find( request('id') );
        //Mail::to(request()->user())->send(new InvoiceCreated($car));
        return ($car);
    }
}
