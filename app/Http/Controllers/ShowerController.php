<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shower;
use Image;

class ShowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showers = Shower::all();
        return view('showers.index', ['showers' => $showers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('showers.create');
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
            'title' => 'required',
            'name' => 'required',
            'type' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:png,jpeg,bmp'
        ]);

        Shower::create([
            'title' => $request->input('title'),
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'description' => $request->input('description'),
            'image' => $request->file('image'),
       ]);
        return redirect()->route('showers.index')
            ->with('success','Item created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shower = Shower::find($id);
        return view('showers.show', ['shower' => $shower]);
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
    }
}
