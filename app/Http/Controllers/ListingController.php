<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Listing;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $listing = Listing::paginate(15);

        return view('listing.index', compact('listing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('listing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['category_id' => 'unsigned', 'pricing_rate_id' => 'unsigned', 'available_quantity' => 'unsigned', 'supplier_id' => 'unsigned', ]);

        Listing::create($request->all());

        Session::flash('flash_message', 'Listing added!');

        return redirect('listing');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {
        $listing = Listing::findOrFail($id);

        return view('listing.show', compact('listing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {
        $listing = Listing::findOrFail($id);

        return view('listing.edit', compact('listing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['category_id' => 'unsigned', 'pricing_rate_id' => 'unsigned', 'available_quantity' => 'unsigned', 'supplier_id' => 'unsigned', ]);

        $listing = Listing::findOrFail($id);
        $listing->update($request->all());

        Session::flash('flash_message', 'Listing updated!');

        return redirect('listing');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
        Listing::destroy($id);

        Session::flash('flash_message', 'Listing deleted!');

        return redirect('listing');
    }
}
