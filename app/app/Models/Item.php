<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ItemType;
class Item extends Model
{
        protected $guarded = [];
        public function type(){
                return $this->belongsTo(ItemType::class, 'item_type_id');
        } 
}
