<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    private $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function index()
    {
        $items = $this->item->all();
        return view('item.index', compact('items'));
    }
}
