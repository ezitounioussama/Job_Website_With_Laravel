<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // Show All Listings 
    public function index()
    {
        return view(
            'listings.index',
            [
                'listings' => Listing::latest()->filter(request(['tag', 'search']))->simplePaginate(4)
            ]
        );
    }
    // Show Single Listing
    public function show(Listing $listing)
    {
        return view(
            'listings.show',
            [
                'listing' => $listing
            ]
        );
    }

    public function create()
    {
        return view(
            'listings.create'
        );
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created succesfully');
    }

    public function edit(Listing $listing)
    {
        return view('listings.edit', ['listing' => $listing]);
    }

    public function update(Listing $listing, Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Listing updated succesfully');
    }

    public function delete(Listing $listing)
    {
        $listing->delete();
        return redirect('/')->with('message', 'Listing Deleted succesfully');
    }
}
