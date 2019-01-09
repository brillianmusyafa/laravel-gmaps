<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Kategory;
use Illuminate\Http\Request;
use Session;

class KategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $header = "Halaman Kategory";
        $header_description= "Index";
        $kategory = Kategory::paginate(25);

        return view('kategory.index', compact('kategory','header','header_description'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $header = "Create Kategory";
        $header_description= "create";
        return view('kategory.create',compact('header','header_description'));
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
        
        Kategory::create($requestData);

        Session::flash('flash_message', 'Kategory added!');

        return redirect('kategory');
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
        $kategory = Kategory::findOrFail($id);

        return view('kategory.show', compact('kategory'));
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
        $kategory = Kategory::findOrFail($id);

        return view('kategory.edit', compact('kategory'));
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
        
        $kategory = Kategory::findOrFail($id);
        $kategory->update($requestData);

        Session::flash('flash_message', 'Kategory updated!');

        return redirect('kategory');
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
        Kategory::destroy($id);

        Session::flash('flash_message', 'Kategory deleted!');

        return redirect('kategory');
    }
}
