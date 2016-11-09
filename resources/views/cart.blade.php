<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ショッピングカート</title>
    <link rel="stylesheet" href="/css/EC.css">
  </head>
  <body>
    <div class="title">
        仮名サイト
    </div>

<br>
<br>

      @if($items)
      <div class="center">
        <table class="cart_table">
          <tr class="info2">
            <td>商品名</td>
            <td>価格</td>
          </tr>
          @foreach($items as $index=>$items)
          <tr>
            <td class="cart_td">{{$items->name}}</td>
            <td class="cart_td">￥{{$items->price}}</td>
            <td class="cart_td"><button onclick="location.href='/delete?index={{$index}}'">削除</button></td>
            <td class="cart_td"><button onclick="location.href='/delete/all?index={{$index}}'">全削除</button></td>
          </tr>
          @endforeach
        </table>
      </div>
      @else
      <div class="cart_center">
        <p>商品は入っていません。</p>
      </div>
      @endif
<br>
        <div class="cart_button">
          <button type="button" name="button" onclick="location.href='/'">買い物を続ける</button>
          <button type="button" name="button" onclick="location.href='/'">購入手続きへ</button>
        </div>

  </body>
</html>
