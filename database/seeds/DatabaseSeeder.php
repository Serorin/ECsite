<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //データのクリア
        DB::table('items')->truncate();

        //データの挿入

        $ShiratamaFrozen = [
          "name" => "抹茶白玉フローズン",
          "img" => "img/抹茶白玉フローズン.png",
          "temp"=>NULL,
          "price" => "￥648",
          "price2"=>NULL,
        ];
        $WarabimotiFrozen = [
          "name" => "わらび餅フローズン",
          "img" => "img/わらび餅フローズン.png",
          "temp"=>NULL,
          "price" => "￥691",
          "price2"=>NULL,
        ];
        $Shiratamaparfait = [
          "name" => "抹茶白玉パフェ",
          "img"=>"img/抹茶白玉パフェ.png",
          "temp"=>NULL,
          "price" => "￥853",
          "price2"=>NULL,
        ];
        $Houzichocoparfait = [
          "name" => "ほうじ茶生チョコレートパフェ",
          "img" => "img/ほうじ茶生チョコレートパフェ.png",
          "temp"=>NULL,
          "price" => "￥950",
          "price2"=>NULL,
        ];
        $Shiratamafloat = [
          "name" => "抹茶白玉フロートラテ",
          "img" => "img/抹茶白玉フロートラテ.png",
          "temp" => "ICE",
          "price" => "レギュラー ￥616",
          "price2" => "ラージ ￥702",
        ];
        $ShiratamaAzuki = [
          "name" => "抹茶白玉あずきラテ",
          "img" => "img/抹茶白玉あずきラテ.png",
          "temp" => "HOT/ICE",
          "price" => "レギュラー ￥616",
          "price2" => "ラージ ￥702",
        ];
        DB::table('items')->insert([$ShiratamaFrozen,$WarabimotiFrozen,$Shiratamaparfait,$Houzichocoparfait,$Shiratamafloat,$ShiratamaAzuki]);
    }
}
