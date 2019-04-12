<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Category;
use App\Models\Status;

class ItemController extends Controller
{
    private $item;
    private $category;
    private $status;

    public function __construct(Item $item, Category $category, Status $status)
    {
        $this->middleware('auth:admin');
        $this->item = $item;
        $this->category = $category;
        $this->status = $status;
    }

    public function index(Request $request)
    {
        $inputs = $request->all();

        if(!empty($inputs)){
            $items = $this->item->getSearchItems($inputs);
        }else{
            $items = $this->item->all();
        }

        $categories = $this->category->all();

        $status = $this->status->all();
    	return view('admin.item.index', compact('items', 'categories', 'status'));
    }

    public function create()
    {
        return view('admin.item.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
    }
}
