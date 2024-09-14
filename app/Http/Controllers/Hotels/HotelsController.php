<?php

namespace App\Http\Controllers\Hotels;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apartment\Apartment;

class HotelsController extends Controller
{

    public function rooms($id)
    {
        // Fetch all rooms for a given hotel, or return empty if none exist
        $getRooms = Apartment::where('hotel_id', $id)
            ->orderBy('id', 'desc')
            ->take(6)
            ->get();
    
        // Pass the rooms to the view
        return view('hotels.rooms', compact('getRooms'));
    }
    


}
