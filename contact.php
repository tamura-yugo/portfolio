<?php	session_start();
	$_SESSION['token'] = bin2hex(random_bytes(32));
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>portfolio</title>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
</head>
<body>

<header class="sticky">

<div class="header-background">
<div class="top-title">
<div>
<a href="index.html" class="site-title">お酒販売株式会社</a>
</div>
<div class="title-s">
<a href="" class="touka">お知らせ</a>
<a href="" class="touka">特集</a>
<a href="" class="touka">ライター紹介</a>
<a href="" class="touka">企業方針</a>
<a href="" class="touka">採用情報</a>
</div>
</div>
</div>

<div id="toggle">
  <div id="toggle-box">
      <span></span>
      <span></span>
      <span></span>
  </div>
</div>

<div id="nav-content">
  <nav>
    <div class="menu3">MENU</div>
    <div class="hmmenu">商品一覧</div>
      <ul class="hmenu1">
          <li><a href="product.html">ビール</a></li>
          <li><a href="product.html">日本酒</a></li>
          <li><a href="product.html">梅酒</a></li>
          <li><a href="product.html">ワイン</a></li>
          <li><a href="product.html">焼酎</a></li>
          <li><a href="product.html">洋酒</a></li>
      </ul>
        <div class="menu4">
          <div><a href="index.html">トップへ戻る</a></div>
          <div><a href="#">店舗について</a></div>
          <div><a href="#">お知らせ</a></div>
          <div><a href="#">特集</a></div>
          <div><a href="#">ライター紹介</a></div>
          <div><a href="#">企業方針</a></div>
          <div><a href="contact.php">お問い合わせ</a></div>
          <div><a href="#">採用情報</a></div>
        </div>
  </nav>
</div>

<nav>
  <ul class="menu">
    <li class="menu1" id="syouhinitiran">
      <a href="product.html">商品一覧</a>
      <ul class="menu2">
        <a href="product.html"><li>ビール</li></a>
        <a href="product.html"><li>日本酒</li></a>
        <a href="product.html"><li>梅酒</li></a>
        <a href="product.html"><li>ワイン</li></a>
        <a href="product.html"><li>焼酎</li></a>
        <a href="product.html"><li>洋酒</li></a>
      </ul>
    </li>
    <a href="#"><li id="tenponituite">店舗について</li></a>
    <a href="contact.php"><li id="otoiawase">お問い合わせ</li></a>
  </ul>
  </nav>

</header>

<div id="main">

  <ul class="breadcrumb breadcrumb-c">
    <li><a href="index.html">home</a></li>
    <li><a href="#">contact</a></li>
  </ul>

<div class="contact-width">
<div id="input" class="">
	<h2 class="contact-title">お問い合わせ</h2>

  <form id="fm" method="post" action="soshin.php">
  <input type="hidden" name="token" value="<?=$_SESSION['token']?>"> 
		<p class="contact-block">
	  	<label>	名前：</label>
			<input type="text" id="name" name="name" class="kakuninmae" required placeholder="Name" autocomplete="off">
		</p>

		<p class="contact-block">
			<label>	メールアドレス：</label>
				<input type="email" id="mail" name="mail" class="kakuninmae" required placeholder="Email" autocomplete="off">
		</p>

		<p class="contact-block">
			<label>	お問い合わせ内容：</label>
				<textarea id="comment" name="comment" class="kakuninmae" required placeholder="Message"></textarea>
    </p>

		<p><input id="kakuninbtn" type="button" value="確認へ"></p>
		</form>
</div>

<div id="kakuningamen" class="hidden">
<h2 class="contact-title">確認してください</h2>
<ul class="kakuningamen3">
  <li>
    <label>	名前：</label>
    <p class="kakuningamen2"></p>
  </li>

  <li>
    <label>	メールアドレス：</label>
    <p class="kakuningamen2"></p>
  </li>
  
  <li>
    <label>	コメント：</label>
    <p class="kakuningamen2"></p>
  </li>
  
  <li>
    <input id="btn_submit" type="button" value="送信" class="sousinbtn">
    <input id="btn_return" type="button" value="戻る">
  </li>
</ul>
</div>
</div>

  <footer>
    <div class="container">
    <div class="row">
    <div class="col-lg-2 col-6"><h3 class="footer-title">CATEGORY</h3>
    <ul class="footer-cat">
      <li>
        <a href="product.html" class="touka">
          ビール
        </a>
      </li>
      <li>
        <a href="product.html" class="touka">
          日本酒
        </a>
      </li>
      <li>
        <a href="product.html" class="touka">
          梅酒
        </a>
      </li>
      <li>
        <a href="product.html" class="touka">
          ワイン
        </a>
      </li>
      <li>
        <a href="product.html" class="touka">
          焼酎
        </a>
      </li>
      <li>
        <a href="product.html" class="touka">
          洋酒
        </a>
      </li>
    </ul></div>
    <div class="col-lg-4 col-6"><h3 class="footer-title">ABOUT</h3>
    <ul class="footer-cat">
      <li>
        <a href="#" class="touka">
          店舗について
        </a>
      </li>
      <li>
        <a href="#" class="touka">
          お知らせ
        </a>
      </li>
      <li>
        <a href="#" class="touka">
          特集
        </a>
      </li>
      <li>
        <a href="#" class="touka">
          ライター紹介
        </a>
      </li>
      <li>
        <a href="#" class="touka">
          企業方針
        </a>
      </li>
      <li>
        <a href="contact.php" class="touka">
          お問い合わせ
        </a>
      </li>
      <li>
        <a href="#" class="touka">
          採用情報
        </a>
      </li>
    </ul></div>
    <div class="col-lg-6 col-12"><div class="footer-syoukai"><h3 class="footer-title">お酒販売株式会社</h3>
    <div>色々なお酒を売っています。<br>新商品も随時入荷し、お客様のご要望に応えられるよう努めています。<br>ぜひ当店にお買い求めください。</div></div>
    <div class="stop-flex">
    <div class="stop"><img src="img/stop.png" alt=""></div>
    <div>お酒は20歳になってから。<br>お酒はおいしく適量を。<br>飲酒運転は絶対に止めましょう。<br>
    妊娠中や授乳期の飲酒は、胎児・乳児の発達に影響する恐れがありますので気をつけましょう。</div></div></div></div></div>
    <div class="copyright">© お酒販売株式会社</div>
  </footer>
  
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  
  </body>
  </html>

<script>
  $(function() {
    $('#toggle').on('click', function() {
      $('body').toggleClass('is-open');
      $('#main').toggleClass('overlay');
    });
    $(document).on('click','.overlay', function() {
      $('body').removeClass('is-open');
      $('#main').removeClass('overlay');
    });
  });


		$("#kakuninbtn").click(function(){
			$('.kakuninmae').each(function(i,e){
				$('.kakuningamen2').eq(i).text($(e).val());
			});

				$('#kakuningamen').removeClass('hidden');
				$('#input').addClass('hidden');
		});

		$("#btn_return").click(function(){
				$('#kakuningamen').addClass('hidden');
				$('#input').removeClass('hidden');
		});

		$("#btn_submit").click(function(){
			$('#fm').submit();
		});
</script>