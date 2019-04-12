<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'item_name',
        'color',
        'quentity',
        'price',
        'status_id',
        'category_id',
    ];

    public function status()
    {
        return $this->belongsTo('App\Models\Status');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\category');
    }

    public function genre()
    {
        return $this->belongsTo('App\Models\genre');
    }

    public function getSearchItems($inputs)
    {
        return $this->searchItems($inputs)
                    ->dateRange($inputs)
                    ->priceRange($inputs)
                    ->get();
    }

    public function scopeSearchItems($query, $inputs)
    {

        $search = array_only($inputs, ['item_name', 'color', 'category_id', 'status_id']);

        foreach($search as $key => $value){
            if (isset($value)) {
                $query->where($key, 'like', '%'.$value.'%');
            }
        }
    }

    public function scopeDateRange($query, $inputs)
    {

        if(!empty($inputs['created_at-start']) && !empty($inputs['created_at-end'])){
            return $query->whereBetween('created_at', [$inputs['created_at-start'], $inputs['created_at-end']]);

        }elseif(!empty($inputs['created_at-start'])){
            return $query->where('created_at', '>=', $inputs['created_at-start']);

        }elseif(!empty($inputs['created_at-end'])){
            return $query->where('created_at', '<=', $inputs['created_at-end']);
        }
    }

    public function scopePriceRange($query, $inputs)
    {
        if(!empty($inputs['price_min']) && !empty($inputs['price_max'])){
            return $query->whereBetween('price', [$inputs['price_min'], $inputs['price_max']]);

        }elseif(!empty($inputs['price_min'])){
            return $query->where('price', '>=', $inputs['price_min']);

        }elseif(!empty($inputs['price_max'])){
            return $query->where('price', '<=', $inputs['price_max']);
        }
    }
}
