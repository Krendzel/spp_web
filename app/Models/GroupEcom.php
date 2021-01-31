<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupEcom extends Model
{
    use HasFactory;
    public function checkType($type){
        if ($type = 1){
            return "DHL";
        } elseif ($type = 2){
            return "DSV";
        } else {
            return "Inpost";
        }
    }
    public function groupecomorders(){
        return $this->hasMany(GroupEcomOrders::class);
    }

}
