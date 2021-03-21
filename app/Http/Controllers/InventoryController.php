<?php

namespace App\Http\Controllers;
use App\Models\Inventory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function show(Request $request){
        // logged in user
        $user = Auth::user();
        if(empty($user)){
            return redirect()->intended('/login');
        }

        // from paging links
        $id = $user['id'];
        $user_name = $user['name'];

        if(!empty($id)){
        // check if id is empty

        $filter = $request->query('filter');
        $low = $request->query('low');
        
        $invQuery = Inventory::query();
        
        $invQuery->join('products', 'products.id', '=', 'inventory.product_id')
            ->where('products.admin_id',$user['id'])
            ->select('products.product_name',
            'products.id', 'inventory.sku'
            , 'inventory.size', 'inventory.color', 'inventory.quantity'
            , 'inventory.price_cents', 'inventory.cost_cents');

        if (!empty($filter)) {
            $invQuery->where('products.id', 'like', '%'.$filter.'%')
            ->orWhere('inventory.sku', 'like','%'.$filter.'%')
            ->orWhere('products.product_name', 'like','%'.$filter.'%');
        }      
        
        // if(!empty($low)){
        //     $invQuery->where('inventory.quantity', '<',$low);
        //     dd($invQuery->toSQL());
        // }

        return view('inventory', [
            'inventory' => $invQuery->paginate(6),
            'inventory_count' =>  Inventory::query()
                ->join('products', 'products.id', '=', 'inventory.product_id')
                ->where('products.admin_id',$user['id'])
                ->count(),
            'admin_id'=>$id,
            'admin_name'=>$user_name,
            'filter'=>$filter,
            'low'=>$low]);
        }else{
            return "no data";
        }
      }
}
