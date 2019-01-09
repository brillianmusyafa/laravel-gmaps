<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Map;
use App\Kategory;
use Illuminate\Http\Request;
use Session;

class MapsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $maps = Map::paginate(25);

        return view('maps.index', compact('maps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $kat = Kategory::pluck('name','id');
        return view('maps.create',compact('kat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Map::create($requestData);

        Session::flash('flash_message', 'Map added!');

        return redirect('maps');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $map = Map::findOrFail($id);

        return view('maps.show', compact('map'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $map = Map::findOrFail($id);
        $kat = Kategory::pluck('name','id');
        return view('maps.edit',compact('kat','map'));
        // return view('maps.edit', compact('map'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $map = Map::findOrFail($id);
        $map->update($requestData);

        Session::flash('flash_message', 'Map updated!');

        return redirect('maps');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Map::destroy($id);

        Session::flash('flash_message', 'Map deleted!');

        return redirect('maps');
    }
}
