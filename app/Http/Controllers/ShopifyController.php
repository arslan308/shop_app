<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Osiset\ShopifyApp\Facades\ShopifyApp;
// use Osiset\ShopifyApp\Models\Shop;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
// use Osiset\BasicShopifyAPI;
use Log;
use DB;
use App\Insta;
class ShopifyController extends Controller
{
    public function __construct() {
        $this->middleware(['auth.shopify']);   
    }
    public function products(Request $request) {
        $shop = Auth::user();
        $requests = $shop->api()->rest('GET', '/admin/api/2019-07/products.json');  ///  get all products
    $script_tag = array(
    "script_tag" => array(
        "event" => "onload",
        "src" => "https://ars.taajmart.com/js/custom.js"
    )
    );
    $html = view('snipet.insta-snippet')->render();   /// get all view html
    $snippet = array(
        "asset" => array(
          "key" => "snippets/easy-insta.liquid",
          "value" => $html
        )
        );
    $snpt =  $shop->api()->rest('PUT','/admin/api/2020-04/themes/85168357435/assets.json',$snippet);   ///// add snippet
    $page = array(
        "page" => array(
          "title"  => "Warranty information",
          "body_html"  => "<h2>Warranty</h2>\n<p>Returns accepted if we receive items <strong>30 days after purchase</strong>.</p>"
        )
    );
    $check  = 0;
    $pages = $shop->api()->rest('GET','/admin/api/2020-04/pages.json');  ///  get all pages
    foreach($pages->body->pages as $pagee){
        if($pagee->title == "Warranty information"){
            $check = 1;
        }
    }  
    if($check==0){
    $res = $shop->api()->rest('POST','/admin/api/2020-04/pages.json',$page);    ///  add page
    }

    $shop->api()->rest('POST','/admin/api/2020-04/script_tags.json',$script_tag);
    // $shop_detail = Insta::where('shop_id', '=', $shop->id)->first();
    return view("welcome", ["products"=>$requests]);  
    }
    public function insta(Request $request){
    $shop = Auth::user();
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
