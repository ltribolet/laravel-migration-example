<?php

namespace App\Http\Controllers;

use App\Http\Resources\Item as ResourcesItem;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Resources\Items;

class IndexItems extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return ResourcesItem::collection(Item::all());
    }
}
