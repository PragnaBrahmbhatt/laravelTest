<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
	public function parent()
    {
        return $this->belongsTo('App\Models\MenuItem','parent_id')->whereNull('parent_id')->with('parent');
    }

    public function children()
    {
        return $this->hasMany('App\Models\MenuItem','parent_id')->with('children');
    }
}
