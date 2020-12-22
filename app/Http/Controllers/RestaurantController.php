<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::get();
        return view('restaurants\index',compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restaurants\create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'name' => 'required|min:5|max:30',
            'address' => 'required|min:5|max:30',
            'zipCode' => 'required|min:4|max:10',
            'town' => 'required|min:3|max:30',
            'country' => 'required|min:3|max:30',
            'description' => 'required|min:10|max:500',
            'review' => 'required|min:1|max:1'
        ]);

        Restaurant::create([
            'name' => $request['name'],
            'address' => $request['address'],
            'zipCode' => $request['zipCode'],
            'town' => $request['town'],
            'country' => $request['country'],
            'description' => $request['description'],
            'review' => $request['review']
        ]);

        redirect('/restaurant/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view('restaurants\show',compact('restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurant = Restaurant::findOrFail($id);

        return view('restaurants\edit',compact('restaurant'));
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
        $this->validate(request(),[
            'name' => 'required|min:5|max:30',
            'address' => 'required|min:5|max:30',
            'zipCode' => 'required|min:4|max:10',
            'town' => 'required|min:3|max:30',
            'country' => 'required|min:3|max:30',
            'description' => 'required|min:10|max:500',
            'review' => 'required|min:1|max:1'
        ]);

        Restaurant::where("id", $id)->update($request->all());

        redirect('/restaurant/show/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Restaurant::where("id", $id)->delete();
        redirect('/restaurant');
    }
}
