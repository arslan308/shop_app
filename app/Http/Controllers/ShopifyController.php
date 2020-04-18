<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Osiset\ShopifyApp\Facades\ShopifyApp;
// use Osiset\ShopifyApp\Models\Shop;
// use App\Http\Controllers\Auth;
use Osiset\BasicShopifyAPI;
use Log;
use DB;
use App\Insta;
class ShopifyController extends Controller
{
    public function __construct() {
        $this->middleware(['auth.shopify']);   
    }
    public function products(Request $request) {
        return 123;
    $shop  = new BasicShopifyAPI();
    $requests = $shop->rest('GET', '/admin/api/2019-07/products.json');
    return $requests;

    $script_tag = array(
    "script_tag" => array(
        "event" => "onload",
        "src" => "https://496a76e6.ngrok.io/js/custom.js"
    )
    );
    $shop->api()->rest('POST', '/admin/api/2020-04/script_tags.json',$script_tag);
    $shop_detail = Insta::where('shop_id', '=', $shop->id)->first();
    return view("welcome", ["products"=>$requests , "shop_detail" => $shop_detail]);
    }
    public function insta(Request $request){
    $shop = ShopifyApp::shop();
    $user = Insta::where('shop_id', '=', $shop->id)->first();
   if ($user) {
    Insta::where('shop_id', '=', $shop->id)->update(['insta_token' => $request->insta_token]);
   }
   else{
    $data=array("shop_id" => $shop->id, "insta_token" =>$request->insta_token);
    DB::table('instas')->insert($data);
   }
    }
}
