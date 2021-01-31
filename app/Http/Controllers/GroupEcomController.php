<?php

namespace App\Http\Controllers;

use App\Models\GroupEcom;
use App\Models\GroupEcomOrders;
use Illuminate\Http\Request;

class GroupEcomController extends Controller
{
    public function index(){
        $pallets = GroupEcom::all();
//        $pallets_count = count();
        return view('group-ecom.index', ['pallets' => $pallets]);
    }
    public function details($pallet){
        $orders = GroupEcomOrders::where('groupecom_id', $pallet)->get();
//        dd($orders);

//        $pallets_count = count();
        return view('group-ecom.details', ['orders' => $orders]);
    }
}
