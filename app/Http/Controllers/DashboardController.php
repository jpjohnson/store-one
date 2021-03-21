<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Inventory;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        if(empty($user)){
            return redirect()->intended('/login');
        }
        // show the form
        return view('dashboard',
        ['product_count' =>Product::query()
                ->where('products.admin_id',$user['id'])
                ->count(),
         'inventory_count' => Inventory::query()
                ->join('products', 'products.id', '=', 'inventory.product_id')
                ->where('products.admin_id',$user['id'])
                ->count(),
         'order_count' => Order::query()
                ->join('products', 'products.id', '=', 'orders.product_id')
                ->join('inventory', 'inventory.id', '=', 'orders.inventory_id')
                ->where('products.admin_id',$user['id'])
                ->count()
        ]
        );
          
    }

}
