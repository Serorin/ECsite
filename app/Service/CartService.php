<?php
namespace App\Service;

use Illuminate\Support\Facades\DB;

// カートの中身を保持するクラス
class CartService
{
  // カートの中にデータを入れる
  public function addItem($id){
  //idが一致するものをitemsテーブルから検索、取得
  $item = DB::table('items')->where('id',$id)->first();
  // セッションデータを取得、nullの場合は空の配列
  $items = session()->get("items",[]);
  //取得したデータにオブジェクトを保存
  $items[] = $item;
  //取得したデータをsessionに保存。
  // $_SESSION["items"]に保存するのと同じ
  session()->put("items",$items);
  }

  public function clear(){
    //sessionの全データを削除
    session()->flush();
  }

public function removeItem($index){
  // sessionから選んだ商品を削除
  // 例えば$items[0]の削除はitems.0と指定できる。
  session()->forget("items.$index");
}

public function getItems(){
  //セッションデータを取得、nullの場合は空の配列
  $items = session()->get("items",[]);
  return $items;
}
}
 ?>
