<?php
//	$cat_now = get_the_category();
//	$cat_now = $cat_now[0];
//	$parent_id = $cat_now->category_parent;

//	$current_cat_id		= $cat_now->cat_ID;		// カテゴリID
//	$now_name	= $cat_now->cat_name;	// カテゴリ名

//	$current_cat_id 	= $cat_now->term_id;	// カテゴリID
//	$now_name	= $cat_now->name;		// カテゴリ名
//	$now_slug	= $cat_now->slug;		// スラッグ

	$current_cat_id = get_query_var('cat');
?>


<?php
// ---------------------------------------------
// 画像サイズは 620 x 174
// ---------------------------------------------

 if( is_category() ) {

	if( $current_cat_id == '117' ) {	?>		<!-- PC -->
		<p>パソコン。子供の頃にはとっても憧れのある響きだった訳ですが、スマホ全盛の昨今、パソコンっていう響きはちょっと古くさく感じますよね？だけど私にとってパソコンは、いつまでたっても憧れです！パソコンさいこー！</p>

	<?php } else if( $current_cat_id == '18' ) { ?>	<!-- Mac -->
		<img src="<?php bloginfo('template_directory'); ?>/images/category_header/mac.jpg" />
		<p>MacBook Air を愛用している管理人が、便利なアプリの紹介や Mac に関わることについてつらつらエントリしています。</p>

	<!-- -------------------------------------------------- -->
	<?php } else if( $current_cat_id == '334' )  { ?>	<!-- モバイル -->
		<p></p>

	<?php } else if( $current_cat_id == '72' )  { ?>	<!-- iOS -->
		<img src="<?php bloginfo('template_directory'); ?>/images/category_header/ios.jpg" />
		<p>iPhone, iPod Touch はもちろん、iPad, iPad mini の話題なんかを。私 iPhone を所有したことがありません。ずーっと iPod Touch。なので、iPhone のことは今イチわかりませんが、iPod Touch ならではのエントリを出来ればと思っとります。</p>

	<?php } else if( $current_cat_id == '293' )  { ?>	<!-- Android -->
		<p>はじめてのスマホがまさかの Android 端末（笑）。だけど Android もすごく良いですね♪わたくしの初めてのスマホは Nexus 5 です。スマホと言っても MVNO のデータ専用 SIM なので未だにガラケー持ちですが・・</p>

	<!-- -------------------------------------------------- -->
	<?php } else if( $current_cat_id == '244' )  { ?>	<!-- 開発・ブログ運営 -->
		<p>開発環境、フレームワーク、開発言語などについてのエントリー。このブログはブログタイトル通り WordPress で動いてるので WordPress の話題が多めかも。</p>

	<?php } else if( $current_cat_id == '4' )  { ?>		<!-- WordPress -->
		<img src="<?php bloginfo('template_directory'); ?>/images/category_header/wordpress.jpg" />
		<p>このブログは WordPress で動いている訳ですが、WordPress はカスタマイズ性にすぐれ、ブログはもちろんさまざまな WEB サイトの構築がお手軽に構築可能です。このブログをカスタマイズしながら覚えたことなどをつらつらエントリしていきます。</p>

	<?php } else if( $current_cat_id == '5' )  { ?>		<!-- HTML & CSS -->
		<img src="<?php bloginfo('template_directory'); ?>/images/category_header/html.jpg" /><!-- css.jpg もあり -->
		<p>何はともあれ HTML。HTML もバージョン 5 まで進化して、何が何だか良く分からないことも増えてきましたけど、ボチボチ 勉強していきたいと思います。また、CSS もまだまだ苦戦中。そもそもデザインセンスがないから、その辺はあきらめてます・・。</p>

	<?php } else if( $current_cat_id == '124' )  { ?>	<!-- JavaScript -->
		<img src="<?php bloginfo('template_directory'); ?>/images/category_header/javascript.jpg" />
		<p>今の WEB サイト構築に JavaScript は欠かせません。JQuery とかとっても便利なライブラリがあるので、それらを使えば、ぐりんぐりん動く WEB サイトが作れる（はず）。とかいいながら、私 JavaScript 全然わかってません。いや～ん。</p>

	<?php } else if( $current_cat_id == '13' )  { ?>	<!-- PHP -->
		<img src="<?php bloginfo('template_directory'); ?>/images/category_header/php.jpg" />
		<p>WordPress は PHP で動いてます。PHP を知らなくても WordPress を使う事はできるけど、PHP をちょっとでも知ってればカスタマイズの自由度も随分広がります。はじめはちょっと取っつきにくいけど、慣れてしまえば簡単（なはず）。なので一度挑戦してみる価値はあると思いますよ。</p>

	<?php } else if( $current_cat_id == '53' )  { ?>	<!-- データベース -->
		<img src="<?php bloginfo('template_directory'); ?>/images/category_header/mysql.jpg" />
		<p>ビッグデータの時代がやって来た！これから最も重要な技術の一つがデータベースかもしれませんね。もっとも私はそんなデータを扱うことも、扱える技術もありませんが・・。日々勉強ですね。</p>

	<?php } else if( $current_cat_id == '246' )  { ?>	<!-- サーバー -->
		<img src="<?php bloginfo('template_directory'); ?>/images/category_header/server.jpg" />
		<p>自宅で DELL の PC でサーバーを公開していたころが懐かしい今日この頃。今は月間数百円からレンタルサーバーがありますので自宅でサーバー立ち上げる意味はほとんどないと思いますが、さわさりとて簡単なサーバーの設定とか出来ると、やれることの幅がぐーーんと広がりますよね。</p>

	<?php } else if( $current_cat_id == '253' )  { ?>	<!-- WEB API -->
		<img src="<?php bloginfo('template_directory'); ?>/images/category_header/web_api.jpg" />
		<p>さまざまな企業やサイトが沢山の API を公開してくれているおかげで私のような個人でもリッチな WEB サイトの構築が簡単になりました。便利に使えるものはどんどん利用させてもらいましょう！</p>

	<?php } else if( $current_cat_id == '28' )  { ?>	<!-- クラウド/ソーシャル -->
		<img src="<?php bloginfo('template_directory'); ?>/images/category_header/social.jpg" />
		<p></p>

	<?php } else if( $current_cat_id == '249' )  { ?>	<!-- WEB パフォーマンス -->
		<img src="<?php bloginfo('template_directory'); ?>/images/category_header/web_performance.jpg" />
		<p>せっかく作った WEB サイトの表示が遅いともったいない。また SEO 的にもページの速度が重要になってるそうな。あーでもない、こーでもない、と試行錯誤していると勝手にいろんな知識が身に付いて、サイトの表示速度も速くなって・・ってパフォーマンスチューニングさいこーです。</p>

	<!-- -------------------------------------------------- -->
	<?php } else if( $current_cat_id == '260' )  { ?>	<!-- カメラ -->
		<img src="<?php bloginfo('template_directory'); ?>/images/category_header/camera.jpg" />
		<p>スマホカメラの進歩は目覚ましいですが、やっぱりファインダー除いて撮影したいよね！みたいな私のようなおっさんには一眼レフカメラは手放せません。震災の3日後に誕生した愛娘の専属パパカメラマンやってますww</p>

	<?php } else if( $current_cat_id == '382' )  { ?>	<!-- カメラ機材 -->
		<img src="<?php bloginfo('template_directory'); ?>/images/category_header/camera.jpg" />
		<p>一眼レフカメラのボディーやレンズについて色々とエントリーしています。私はキャノンユーザーなのでキャノン EOS 関連製品が中心になっちゃいますが、メーカー問わずスマホカメラなどの話題もエントリーしていきます！</p>

	<?php } else if( $current_cat_id == '384' )  { ?>	<!-- 撮影テクニック -->
		<img src="<?php bloginfo('template_directory'); ?>/images/category_header/camera.jpg" />
		<p></p>

	<?php } else if( $current_cat_id == '264' )  { ?>	<!-- RAW 現像 -->
		<img src="<?php bloginfo('template_directory'); ?>/images/category_header/camera.jpg" />
		<p></p>

	<?php } else if( $current_cat_id == '383' )  { ?>	<!-- 写真データ管理 -->
		<img src="<?php bloginfo('template_directory'); ?>/images/category_header/camera.jpg" />
		<p>とにかく溢れかえる写真データの管理方法にはいつも悩まされます。膨大な写真データを効率よくまとめたり、目的の写真をすぐに探し出したりできるように日々考えています。なんか良い方法があれば教えてやってください m(_ _)m</p>

	<?php } ?>
	
	<!-- -------------------------------------------------- -->
<?php

} else if( is_tag() ) {
	echo '<p></p>';
	
} else if( is_month() ) {
	echo '<p>その他の月別アーカイブはこちらから<br><br>';
	echo '<p><ul>';
	echo wp_get_archives('type=monthly');
	echo '<p></ul><div class="clear"></div>';
}

?>

