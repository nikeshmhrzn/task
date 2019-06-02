<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
            $items = Item::all();

        return view('items.index',compact('items'));

    }
    public function create(){

        return view('items.create');
    }

    public function store(Request $request){
        $input = $request->all();
        Item::create($input);

        return redirect(url('items'));
    }
}
