<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OhMyBrew\ShopifyApp\Facades\ShopifyApp;
use Log;
use DB;
use App\Insta;
class ShopifyController extends Controller
{
    public function __construct() {
        $this->middleware(['auth.shop']);   
    }
    public function products(Request $request) {
        return $request;
    $shop = ShopifyApp::shop();
    $requests = $shop->api()->rest('GET', '/admin/api/2019-07/products.json');
    $script_tag = array(
    "script_tag" => array(
        "event" => "onload",
        "src" => "https://ars.taajmart.com/js/custom.js"
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
