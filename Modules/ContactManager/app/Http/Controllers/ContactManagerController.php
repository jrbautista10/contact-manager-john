<?php

namespace Modules\ContactManager\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\ContactManager\Models\Contact;

class ContactManagerController extends Controller
{

    /**
     * Return a list of contacts with selected fields.
     */
    public function getAll()
    {
        return Contact::all();
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contactmanager::index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contactmanager::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('contactmanager::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('contactmanager::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {}
}
