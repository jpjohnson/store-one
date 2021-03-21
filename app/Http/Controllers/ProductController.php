<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function getData(Request $request){
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
        $query = Product::query()
            ->where('products.admin_id',$id)
            ->select('products.id','products.product_name','products.style','products.brand');
        return view('products', [
            'products' => 
            $query->paginate(6),
            'product_count' => Product::query()
                ->where('products.admin_id',$user['id'])
                ->count()
            , 'admin_id'=>$id,
            'admin_name'=>$user_name]);
        }else{
            return "no data";
        }
      }
}
