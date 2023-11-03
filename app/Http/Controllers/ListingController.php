<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show all listings
    public function index() {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }
    // Show single listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // Create form
    public function create() {
        return view('listings.create');
    }

    // Store listing
    public function store(Request $request) {
        //dd($request->all());
        $formFields = $request->validate([
            'pet_name' => 'required',
            'shelter_name' => 'required',
            'pet_type' => 'required',
            'pet_gender' => 'required',
            'pet_age' => 'required',
            'tags'=> 'required',
            'description' => 'required',
            'pet_status' => 'required',
            'pet_image' => 'image|mimes:jpg,jpeg,png',
            ]); 

        if($request->hasFile('pet_image')) {
            $formFields['pet_image'] = $request->file('pet_image')->store('pets', 'public');
        }

        Listing::create($formFields);

        return redirect('/')->with('message', 'Pet added successfully!');
    }
}
