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
  $id = $request->get("id");//idを取得
  $item = DB::table('items')->where('id',$id)->first();//idが一致するものをitemsテーブルから検索、取得
  $items = session()->get("items",[]);//セッションデータを取得、nullの場合は空の配列
  $items[] = $item;//取得したデータにオブジェクトを保存
  session()->put("items",$items);
  return redirect("/cart");//カートのページヘリダイレクト
});

//カートの中を一覧表示
Route::get('/cart',function(){
  $items = session()->get("items",[]);//セッションデータを取得、nullの場合は空の配列
  return view("cart",["items"=>$items]);
});

//商品を削除
Route::get('/delete',function(Request $request){
  $index = $request -> get("index");//削除した商品のindexを取得
  session()->forget("items.".$index);//sessionから選んだ商品を削除。例えば$items[0]の削除はitems.0と指定できる
  return redirect("/cart");
});

//カートを空にする
