<?php

namespace App\Http\Controllers;



use Auth;

use Illuminate\Http\Request;
use App\Advert;
use App\Category;
use DB;

class AdminAdvertsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth');
    }
    public function index()
    {
        $advert = Advert::all();
        /* $advert = Auth::user()->advert; */
        return view('admin.adverts.index',compact('advert'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $advert = Advert::all();
        $categories =  Category::pluck('name', 'id');

        return view('front-office.adverts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
            'category_id' => 'required',
            'city' => 'required',
        ]);

        $advert = new Advert;
        $advert->description = $request->input('description');
        $advert->category_id = $request->category_id;
        $advert->city = $request->city;
        $advert->user_id = Auth::user()->id;
        $advert->save();
        return redirect()->route('advert');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Advert  $advert
     * @return \Illuminate\Http\Response
     */
    public function show(Advert $advert)
    {
        $advert = Advert::find($id);
        return view('ront-office.adverts.index', compact('advert.show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Advert  $advert
     * @return \Illuminate\Http\Response
     */
    public function edit(Advert $advert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Advert  $advert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advert $advert)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Advert  $advert
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advert $id)
    {
        $advert = Advert::find($id);
        $advert->delete();
        return redirect()->route('car');
    }
}
