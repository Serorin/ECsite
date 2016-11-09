<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/EC.css">
    <title>menu</title>
</head>

<body
<div class="title">
    仮名サイト
    <main>
      <div class="img">
          <img src="{{$menus[0]->img}}">
      </div>

      <div class="content">
          <h2>{{$menus[0]->name}}</h2>
            <?php if(!empty($menus[0]->temp)){?>
            <?php } ?>
            <p>￥{{$menus[0]->price}}</p>
            <div class="menu_botton">
            <form action="/cart?id={{$menus[0]->id}}" method="post">
              {{csrf_field()}}
              <ul class="action fit">
                <button type="button" name="button" onclick="location.href='/'">TOPに戻る</button>
                <input type="submit"  name ="button" class="button special fit" value="カートに追加">
            <!--<button type="button" name="button" onclick="location.href='cart'">カートに追加</button>-->
            <!--<button type="button" name="button" onclick="location.href='/'">TOPに戻る</buttonbutton>-->
          </div>
    </main>
</body>

</html>
