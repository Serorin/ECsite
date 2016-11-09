<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//コントローラーの使い方
//Route::get('/test','Test_Controller@index');
//jsのやつ
//Route::get('/api/test','Test_Controller@getdata');


Route::get('/', function() {
    return view("EC");
});

Route::get('/item',function(){
  return view("menu");
});

Route::get('/shop',function(){
  $name = "John Smith";
  return view("EC",["name" => $name]);
  //ECに$nameをとばす
});

Route::get('/cart',function(){
  return view("cart");
});

//便利なやつ
// Route::get("/ge",function(Request $request){
//   $id = $request ->get("id");
//   return view("EC",["name" => $id]);
// });


Route::get('/menu',function(Request $request){
  $Item = [];
  $id = $request -> get("id");

  if($id === "1"){
    $Item = DB::table('items')->where("id","1")->get();
  }

  if($id === "2"){
    $Item =   $Item = DB::table('items')->where("id","2")->get();
  }

  if($id ==="3"){
    $Item =   $Item = DB::table('items')->where("id","3")->get();
  }

  if($id === "4"){
    $Item =   $Item = DB::table('items')->where("id","4")->get();
  }

  if($id === "5"){
    $Item =   $Item = DB::table('items')->where("id","5")->get();
  }

  if($id === "6"){
    $Item = $Item = DB::table('items')->where("id","6")->get();
  }
  return view("menu",["menus"=>$Item]);
});


//カートに入れる
Route::post('/cart',function(Request $request){
  $id = $request->get("id");
  $cart = new \App\Service\CartService();
  $cart->addItem($id);
  return redirect("/cart");//カートページへのリダイレクト
});


//カートの中を一覧表示
Route::get('/cart',function(){
  $cart = new \App\Service\CartService();
  return view("cart",[//データを渡してビューを表示
    "items"=>$cart->getItems()
  ]);
});

//商品を削除
Route::get('/delete',function(Request $request){
  $index = $request->get("index");//削除した商品のindexを取得
  $cart = new \App\Service\CartService();
  $cart->removeItem($index);
  return redirect("/cart");
});

//カートを空にする
Route::get('/delete/all',function(){
  $cart = new \App\Service\CartService();
  $cart->clear();
  return redirect("/cart");//カートページヘのリダイレクト
});
