<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class DeleteItem extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(string $id)
    {
        Item::findOrFail($id)->delete();

        return response()->json(['success'], 200);
    }
}
