<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupEcomOrders extends Model
{
    use HasFactory;

    public function groupecom(){
        return $this->belongsTo(GroupEcom::class);
    }
}
