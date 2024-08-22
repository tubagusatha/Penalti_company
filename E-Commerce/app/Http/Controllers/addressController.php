<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class addressController extends Controller
{



    public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'address_label' => 'required|string|max:100',
        'recipient_name' => 'required|string',
        'recipient_mobile_number' => 'required|string',
        'address' => 'required|string',
        'state' => 'required|string',
        'city' => 'required|string',
        'subdistrict' => 'required|string',
        'postcode' => 'required|integer',
        'primary' => 'nullable|boolean',
    ]);

    // Generate the initial slug from the address label
    $slug = Str::slug($validatedData['address_label']);
    $originalSlug = $slug;
    $counter = 1;

    // Ensure the slug is unique
    while (Address::where('slug', $slug)->exists()) {
        $slug = $originalSlug . '-' . $counter;
        $counter++;
    }

    // Add the unique slug to the validated data
    $validatedData['slug'] = $slug;


   

    // Add the user_id to the validated data
    $validatedData['user_id'] = auth()->id();

    // Create the address record
    Address::create($validatedData);
// Redirect to the profile route with the authenticated user's ID
return redirect()->route('profile', ['id' => auth()->id()]);
}



public function destroy($id)
{
    $address = Address::findOrFail($id);
    $address->delete();

    return redirect()->back()->with('success', 'Address deleted successfully');
}

}
