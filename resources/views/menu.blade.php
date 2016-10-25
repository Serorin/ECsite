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
            <p>{{$menus[0]->temp}}</p>
            <?php } ?>
            <p>{{$menus[0]->price}}</p>
            <?php if(!empty($menus[0]->price2)){ ?>
          <p>{{$menus[0]->price2}}</p>
          <?php } ?>
          <div class="menu_botton">
            <button type="button" name="button" onclick="location.href='cart'">カートに追加</button>
            <button type="button" name="button" onclick="location.href='/'">TOPに戻る</button>
          </div>
    </main>
</body>

</html>
