<?php

namespace App\Http\Controllers;

use App\Http\Resources\Item as ResourcesItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AddItem extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $item = Product::factory()->create([
            'user_id' => User::all()->random()->id,
        ]);

        return new ResourcesItem($item);
    }
}
