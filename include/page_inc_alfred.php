	<div>
	<a href="http://dev.ontheroad.jp/alfred/alfred_bunner" rel="attachment wp-att-3096"><img src="http://dev.ontheroad.jp/wp-content/uploads/2012/06/alfred_bunner.jpg" alt="" title="alfred_bunner" width="600" height="229" class="alignnone size-full wp-image-3096" /></a>
	</div>

	<p>
	超絶便利なランチャアプリ <a href="http://www.alfredapp.com/" target="_blank">Alfred</a> 関連のエントリが増えてきましたのでまとめてみました。今後も <a href="http://www.alfredapp.com/" target="_blank">Alfred</a> 関連のエントリをした場合は追加していきます。<br>
	<br>
	7日以内に更新された記事には「NEW」アイコン表示されます。<br>
	（最終更新日：2014年8月15日）<?php echo get_new_icon( strtotime("2013-04-17 00:00:00") ); ?><br>
	</p>
	
	<h3>お知らせ</h3>
	<p>
	（2014年8月14日）<?php echo get_new_icon( strtotime("2014-08-14 00:00:00") ); ?><br>
	Mac OS X Yosemite と Alfred Remote for iOS に対応した <a href="http://www.alfredapp.com/" target="_blank">Alfred 2.4</a> が公開されました。<br>
	<br>
	関連記事：<a href="http://dev.ontheroad.jp/archives/12328" target="_blank">Alfred Remote on iOS に対応した Alfred 2.4 正式版がリリースされました♪</a>
	</p>
	
	<a name="index" id="#index"></a><br>
	<h3>もくじ</h3>

	<blockquote>
	・ <a href="#install">インストール</a><br>
	　　（1）Alfred v1 本体と Powerpack をインストールしてみる<?php echo get_new_icon( strtotime("2012-06-11 00:00:00") ); ?><br>
	　　（2）Alfred v2 本体と Powerpack をインストールしてみる<?php echo get_new_icon( strtotime("2013-04-12 00:00:00") ); ?><br>
	　　（3）Alfred の設定画面を簡単に開くショートカットキー<?php echo get_new_icon( strtotime("2013-03-30 00:00:00") ); ?><br>
	　　
	<br>
	・<a href="#upgrade_to_v2">Alfred v2 への移行</a><br>
	　　（1）Alfred v1 の Powerpack を v2 にバージョンアップする方法<?php echo get_new_icon( strtotime("2013-04-04 00:00:00") ); ?><br>
	　　（2）Alfred v2 に Alfred v1 の設定をインポートする方法<?php echo get_new_icon( strtotime("2013-04-03 00:00:00") ); ?><br>
　　　　<br>
	・<a href="#general_usage">Alfred の基本操作 & 基本設定</a><br>
	　　（1）Alfredの基本的な使い方とか設定方法とか その1（検索&アクション）<?php echo get_new_icon( strtotime("2013-04-09 00:00:00") ); ?><br>
	　　（2）Alfredの基本的な使い方とか設定方法とか その2（システム関連の操作）<?php echo get_new_icon( strtotime("2013-04-16 00:00:00") ); ?><br>
　　　　<br>
	・ <a href="#finder">Alfred で Finder 操作を快適にしてみる</a><br>
	　　（1）Alfred でサクッとアプリを起動したりフォルダやファイルを開く<br>
	　　（2）Alfred でサクッとフォルダやファイルを任意のアプリケーションで開く<br>
	　　（3）Alfred でサクッとシステム関連の操作をしてみる<br>
	<br>
	・ <a href="#w_app">Alfred で いろいろなアプリと連携して便利につかう</a><br>
	　　（1）Alfred でサクっとアプリのアンインストールをしてみる<br>
	　　（2）Alfred v1 でサクッとつぶやいてみる（Twitter との連携） その1<br>
	　　（3）Alfred v1 でサクッとつぶやいてみる（Twitter との連携） その2<br>
	　　（4）Alfred でサクッと音楽を聴いてみる（ iTunes との連携）<br>
	　　（5）1.2へバージョンアップして 1Password と連携するようになりました<br>
	<br>
	・ （Alfred v1 の人向け）<a href="#global_hotkey">カスタムサーチ & グローバルホットキーを設定してさらに便利につかう</a><br>
	　　（1）これはすごい！Alfred のホットキーを設定したら Google 検索 がめっちゃ快適に！<br>
	　　（2）これはすごい！Alfred のホットキーを設定したら Google マップ検索がめっちゃ快適に！<br>
	　　（3）これはすごい！Alfred のホットキーを設定したら Google 画像検索がめっちゃ快適に！<br>
	　　（4）これはすごい！Alfred のホットキーを設定したら Wikipedia 検索がめっちゃ快適に！<br>
	　　（5）これはすごい！Alfred のホットキーを設定したら 辞書.app がめっちゃ快適に！<br>
	<br>
	・ （Alfred v2 の人向け）<a href="#workflow">Workflow を使い倒す！</a><br>
	　　（1）iTunes Search API でアプリ紹介用の HTML タグを簡単に生成してくれる workflow をつくった<?php echo get_new_icon( strtotime("2013-04-17 00:00:00") ); ?><br>
	　　（2）Alfred v2 の Workflow (AlfredTweet2) でつぶやいてみる<?php echo get_new_icon( strtotime("2013-04-15 00:00:00") ); ?><br>
	　　（3）Alfred の Workflow で Youtube 動画をダウンロードしてみた<?php echo get_new_icon( strtotime("2013-04-12 00:00:00") ); ?><br>
	　　（4）Alfred v2 の Workflow を使うと Amazon サジェストが利用できて アマゾン商品検索最強に！<br>
	　　（5）Alfred v2 で Workflow を作成して サクッと Google WEB 検索してみる<br>
	　　（6）Alfred v2 の Workflow を使うと Google サジェストが利用できて WEB 検索最強に！<br>
	</blockquote>

	<center>
		<script type="text/javascript"><!--
		google_ad_client = "ca-pub-9420456297086074";
		/* （dev）バナー 468x60（個別ページ） */
		google_ad_slot = "2097429908";
		google_ad_width = 468;
		google_ad_height = 60;
		//-->
		</script>
		<script type="text/javascript"
		src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		</script>
	</center>

	<a name="install" id="#install"></a><br>
	<h3>インストール & 設定</h3>
	<p>まずはインストールやら設定やら。</p>

	<ol>
	<li><a href="http://dev.ontheroad.jp/archives/3154">超絶便利なランチャアプリ Alfred v1 本体と Powerpack をインストールしてみる</a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2012/06/alfred_install-250x250.jpg" alt="" title="alfred_install" width="75" height="75" class="alignleft size-medium wp-image-3670" />
	更新日：2012年6月11日<?php echo get_new_icon( strtotime("2012-06-11 00:00:00") ); ?><br>
	Alfred v2 のインストールは以下の記事をご覧ください。
	<div class="clear"></div>
	</li><br>

	<li><a href="http://dev.ontheroad.jp/archives/10883">Mac ユーザー必須の神アプリ Alfred v2 本体と Powerpack をインストールしてみる</a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2012/06/alfred_install-250x250.jpg" alt="" title="alfred_install" width="75" height="75" class="alignleft size-medium wp-image-3670" />
	更新日：2013年4月12日<?php echo get_new_icon( strtotime("2013-04-12 00:00:00") ); ?><br>
	Alfred v2 本体（無料）と Alfred の機能を拡張する Powerpack（有料） のインストール方法です。
	<div class="clear"></div>
	</li><br>

	<li><a href="http://dev.ontheroad.jp/archives/10365">Alfred の設定画面を簡単に開くショートカットキー</a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2013/03/alfred_pref.jpg" alt="" title="alfred_install" width="75" height="75" class="alignleft size-medium wp-image-3670" />
	更新日：2013年3月30日<?php echo get_new_icon( strtotime("2013-03-30 00:00:00") ); ?><br>
	とにかく Alfred の設定をするときは設定画面を開かなきゃいけない訳ですが簡単に設定画面を開く方法です。
	<div class="clear"></div>
	</li><br>

	</ol>

	<?php include('to_pagetop.php'); ?>

	<a name="upgrade_to_v2" id="#upgrade_to_v2"></a><br>
	<h3>Alfred v2 への移行</h3>
	<p>Alfred は 2013年3月に v2 へメジャーアップグレードしました。</p>
	
	<ol>
	<li><a href="http://dev.ontheroad.jp/archives/10499">Alfred v1 の Powerpack を v2 にバージョンアップする方法</a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2013/04/Alfred-Preferences-36-1.jpg" width="75" height="75" class="alignleft size-medium wp-image-3670" />
	更新日：2013年4月4日<?php echo get_new_icon( strtotime("2013-04-04 00:00:00") ); ?><br>
	Alfred の機能拡張をする Powerpack（有料） のアップグレードの方法です。
	<div class="clear"></div>
	</li><br>

	<li><a href="http://dev.ontheroad.jp/archives/10481">Alfred v2 に Alfred v1 の設定をインポートする方法</a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2013/04/alfred_import.jpg" width="75" height="75" class="alignleft size-medium wp-image-3670" />
	更新日：2013年4月3日<?php echo get_new_icon( strtotime("2013-04-03 00:00:00") ); ?><br>
	Alfred v1 の設定を v2 に引き継ぐ方法です。
	<div class="clear"></div>
	</li><br>

	</ol>

	<?php include('to_pagetop.php'); ?>


	<a name="general_usage" id="#general_usage"></a><br>
	<h3>Alfred の基本操作 & 基本設定</h3>
	<p>Alfred は多機能すぎてどこから手をつけて良いのかわかりにくいのでまとめてみました。初めての Alfred な人はこちらからどうぞ。</p>
	
	<ol>
	
	<li><a href="http://dev.ontheroad.jp/archives/10817">Alfredの基本的な使い方とか設定方法とか その1（検索&アクション） </a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2013/04/mac_with_alfred.jpg" width="75" height="75" class="alignleft size-medium wp-image-3670" />
	更新日：2013年4月9日<?php echo get_new_icon( strtotime("2013-04-09 00:00:00") ); ?><br>
	まずは Alfred の基本操作「対象項目を選択して任意のアクションを実行する」を覚えましょう。
	<div class="clear"></div>
	</li><br>

	<li><a href="http://dev.ontheroad.jp/archives/10997">Alfredの基本的な使い方とか設定方法とか その2（システム関連の操作） </a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2013/04/mac_with_alfred.jpg" width="75" height="75" class="alignleft size-medium wp-image-3670" />
	更新日：2013年4月9日<?php echo get_new_icon( strtotime("2013-04-16 00:00:00") ); ?><br>
	Alfred では、Max OS X 自体の操作もできちゃいます。
	<div class="clear"></div>
	</li><br>

	</ol>

	<?php include('to_pagetop.php'); ?>

	<a name="finder" id="#finder"></a><br>
	<h3>Alfred で Finder 操作を快適にしてみる</h3>
	<p>Alfred を使えば、いまいち手に馴染まない Finder の操作が快適になります。</p>

	<ol>
	<li><a href="http://dev.ontheroad.jp/archives/1895">Alfred でサクッとアプリを起動したりフォルダやファイルを開く</a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2012/05/alfred_folder-150x150.png" alt="" title="alfred_folder" width="75" height="75" class="alignleft size-thumbnail wp-image-2203" />
	更新日：2012年5月9日<?php echo get_new_icon( strtotime("2012-05-09 00:00:00") ); ?><br>
	Alfred のもっとも基本的な使い方です。サクッとアプリを起動したりファイルを開きましょう。
	<div class="clear"></div>
	</li><br />

	<li><a href="http://dev.ontheroad.jp/archives/1892">Alfred でサクッとフォルダやファイルを任意のアプリケーションで開く</a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2012/05/alfred_application-150x150.png" alt="" title="alfred_application" width="75" height="75" class="alignleft size-thumbnail wp-image-2200" />
	更新日：2012年5月10日<?php echo get_new_icon( strtotime("2012-05-10 00:00:00") ); ?><br>
	ファイルを開くときに任意のアプリで開きたい時ってありますよね？例えば、.html ファイルは開くとブラウザが起動すると思いますが、テキストエディタで開きたい、みたいな。Windows で言うところの「送る」ですね。
	<div class="clear"></div>
	</li><br />

	<li><a href="http://dev.ontheroad.jp/archives/1888">Alfred でサクッとシステム関連の操作をしてみる</a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2012/05/alfred_system-150x150.png" alt="" title="alfred_system" width="75" height="75" class="alignleft size-thumbnail wp-image-2255" />
	更新日：2012年5月12日<?php echo get_new_icon( strtotime("2012-05-12 00:00:00") ); ?><br>
	ゴミ箱を開く、ゴミ箱、ログアウト、スリープ、シャットダウン、再起動、ディスクのイジェクト、ができます。
	<div class="clear"></div>
	</li><br />

	</ol>

	<?php include('to_pagetop.php'); ?>

	<a name="w_app" id="#w_app"></a><br>
	<h3>Alfred で いろいろなアプリと連携して便利につかう</h3>
	<p>Mac には沢山の便利なアプリがあるわけですが、Alfred と連動させることによって、より簡単にアプリを使う事ができるようになりますよ。</p>

	<ol>

	<li><a href="http://dev.ontheroad.jp/archives/1890">Alfred でサクっとアプリのアンインストールをしてみる（App Cleaner との連携）</a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2012/05/alfred_appcleaner-150x150.jpg" alt="" title="alfred_appcleaner" width="75" height="75" class="alignleft size-thumbnail wp-image-2083" />
	更新日：2012年5月11日<?php echo get_new_icon( strtotime("2012-05-11 00:00:00") ); ?><br>
	AppCleaner と連携することによって、Alfred から簡単にアプリをアンインストールできます。
	<div class="clear"></div>
	</li><br />

	<li><a href="http://dev.ontheroad.jp/archives/2761">Alfred v1 でサクッとつぶやいてみる（Twitter との連携） その1 – 導入・設定</a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2012/06/alfred_twitter-150x150.jpg" alt="" title="alfred_twitter" width="75" height="75" class="alignleft size-thumbnail wp-image-2979" />
	更新日：2012年6月3日<?php echo get_new_icon( strtotime("2012-06-03 00:00:00") ); ?><br>
	Twitter と連動することによって、Alfred から簡単につぶやけます。まずは設定をしましょう。
	<div class="clear"></div>
	</li><br />

	<li><a href="http://dev.ontheroad.jp/archives/2881">Alfred v1 でサクッとつぶやいてみる（Twitter との連携） その2 – AlfredTweetの使い方</a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2012/06/alfred_twitter-150x150.jpg" alt="" title="alfred_twitter" width="75" height="75" class="alignleft size-thumbnail wp-image-2979" />
	更新日：2012年6月5日<?php echo get_new_icon( strtotime("2012-06-05 00:00:00") ); ?><br>
	Twitter と連動することによって、Alfred から簡単につぶやけます。TL を見たりもできますよ。
	<div class="clear"></div>
	</li><br />

	<li><a href="http://dev.ontheroad.jp/archives/2773">Alfred でサクッと音楽を聴いてみる（ iTunes との連携）</a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2012/06/alfred_itunes-150x150.jpg" alt="" title="alfred_itunes" width="75" height="75" class="alignleft size-thumbnail wp-image-2962" />
	更新日：2012年6月6日<?php echo get_new_icon( strtotime("2012-06-06 00:00:00") ); ?><br>
	Alfred の Powerpack を導入すると利用できる iTunes Mini Player がとっても便利です！
	<div class="clear"></div>
	</li><br />

	<li><a href="http://dev.ontheroad.jp/archives/1711">ランチャーアプリ Alfred が1.2へバージョンアップして 1Password と連携するようになりました</a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2012/05/alfref_and_1pass-150x150.jpg" alt="" title="alfref_and_1pass" width="75" height="75" class="alignleft size-thumbnail wp-image-1823" />
	更新日：2012年5月7日<?php echo get_new_icon( strtotime("2012-05-07 00:00:00") ); ?><br>
	Mac 定番のパスワード管理ソフト 1Password と連動することで、より簡単にログインとかできちゃいます。
	</li><br />

	</ol>

	<?php include('to_pagetop.php'); ?>


	<a name="global_hotkey" id="#global_hotkey"></a><br>
	<h3>（ Alfred v1 な人向け）グローバルホットキーを設定してさらに便利につかう</h3>
	<p>Alfred のグローバルホットキーはただ単にアプリを起動するだけじゃありませんよ。<a href="http://www.alfredapp.com/" target="_blank">Alfred v2</a> では workflow を作成してまったく同じことを実現出来ます。</p>

	<ol>

	<li><a href="http://dev.ontheroad.jp/archives/3930">Alfred のホットキーを設定したら Google 検索がめっちゃ快適になった</a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2012/06/alfred_google-150x150.jpg" alt="" title="alfred_web_search" width="75" height="75" class="alignleft size-thumbnail wp-image-2255" />
	更新日：2012年6月15日<?php echo get_new_icon( strtotime("2012-06-15 00:00:00") ); ?><br>
	いつでも、どんなアプリからでも Google 検索が一瞬で行えます。
	<div class="clear"></div>
	</li><br />

	<li><a href="http://dev.ontheroad.jp/archives/5096">Alfred のホットキーを設定したら Google マップ検索がめっちゃ快適になった</a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2012/06/alfred_googlemaps-150x150.jpg" alt="" title="alfred_dictionary" width="75" height="75" class="alignleft size-thumbnail wp-image-2255" />
	更新日：2012年6月25日<?php echo get_new_icon( strtotime("2012-06-25 00:00:00") ); ?><br>
	いつでも、どんなアプリからでも Google マップ検索が一瞬で行えます。
	<div class="clear"></div>
	</li>

	<li><a href="http://dev.ontheroad.jp/archives/5107">Alfred のホットキーを設定したら Google 画像検索がめっちゃ快適になった</a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2012/06/alfred_google_images_logo-150x150.jpg" alt="" title="alfred_dictionary" width="75" height="75" class="alignleft size-thumbnail wp-image-2255" />
	更新日：2012年6月25日<?php echo get_new_icon( strtotime("2012-06-25 00:00:00") ); ?><br>
	いつでも、どんなアプリからでも Google 画像検索が一瞬で行えます。
	<div class="clear"></div>
	</li>

	<li><a href="http://dev.ontheroad.jp/archives/5081">Alfred のホットキーを設定したら Wikipedia 検索がめっちゃ快適になった</a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2012/06/alfred_wikipedia-150x150.jpg" alt="" title="alfred_dictionary" width="75" height="75" class="alignleft size-thumbnail wp-image-2255" />
	更新日：2012年6月25日<?php echo get_new_icon( strtotime("2012-06-25 00:00:00") ); ?><br>
	いつでも、どんなアプリからでも Wikipedia 検索が一瞬で行えます。
	<div class="clear"></div>
	</li>


	<li><a href="http://dev.ontheroad.jp/archives/4704">Alfred のカスタムサーチ&ホットキーで 辞書.app がめっちゃ快適になった</a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2012/06/alfred_dictionaly-150x150.jpg" alt="" title="alfred_dictionary" width="75" height="75" class="alignleft size-thumbnail wp-image-2255" />
	更新日：2012年6月21日<?php echo get_new_icon( strtotime("2012-06-21 00:00:00") ); ?><br>
	いつでも、どんなアプリからでも Mac に標準搭載の辞書.app を使って辞書が引けます。
	<div class="clear"></div>
	</li>

	</ol>

	<?php include('to_pagetop.php'); ?>


	<a name="workflow" id="#workflow"></a><br>
	<h3>（Alfred v2 な人向け）Alfre v2 の workflow を使い倒す！</h3>

	<p> Workflow を使うためには <a href="http://www.alfredapp.com/" target="_blank">Alfred v2</a> 以降のバージョンの <a href="http://www.alfredapp.com/" target="_blank">Alfred</a> が必要です。</p>
	
	<ol>
	<li><a href="http://dev.ontheroad.jp/archives/11016">iTunes Search API でアプリ紹介用の HTML タグを簡単に生成してくれる workflow をつくった（AppTag v1）</a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2013/04/alfred_apptag.png" alt="" title="AppTag" width="75" height="75" class="alignleft size-medium wp-image-3670" />
	更新日：2013年4月17日<?php echo get_new_icon( strtotime("2013-04-17 00:00:00") ); ?><br>
	iTunes Search API を使って、アプリ紹介用の HTML タグを自動生成する workflow 。
	<div class="clear"></div>
	</li><br>

	<li><a href="http://dev.ontheroad.jp/archives/10916">Alfred v2 の Workflow (AlfredTweet2) でつぶやいてみる</a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2013/04/alfredtwitter2.jpg"　width="75" height="75" class="alignleft size-medium wp-image-3670" />
	更新日：2013年4月15日<?php echo get_new_icon( strtotime("2013-04-15 00:00:00") ); ?><br>
	Alfred からツイッターでつぶやいたりすることが出来る workflow 。
	<div class="clear"></div>
	</li><br>

	<li><a href="http://dev.ontheroad.jp/archives/10852">Alfred の Workflow で Youtube 動画をダウンロードしてみた</a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2013/04/alfred_youtube.jpg" width="75" height="75" class="alignleft size-medium wp-image-3670" />
	更新日：2013年4月8日<?php echo get_new_icon( strtotime("2013-04-12 00:00:00") ); ?><br>
	Alfred から一発で YouTube 動画をダウンロードする workflow 。
	<div class="clear"></div>
	</li><br>

	<li><a href="http://dev.ontheroad.jp/archives/10507">Alfred v2 の Workflow を使うと Amazon サジェストが利用できて アマゾン商品検索最強に！</a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2013/04/alfred_amazon.jpg" width="75" height="75" class="alignleft size-medium wp-image-3670" />
	更新日：2013年4月8日<?php echo get_new_icon( strtotime("2013-04-08 00:00:00") ); ?><br>
	Alfred からアマゾン商品検索をする際に、検索キーワードのサジェスト機能を付ける workflow 。
	<div class="clear"></div>
	</li><br>

	<li><a href="http://dev.ontheroad.jp/archives/10382">Alfred v2 で Workflow を作成して サクッと Google WEB 検索してみる</a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2013/04/alfred_google.jpg" width="75" height="75" class="alignleft size-medium wp-image-3670" />
	更新日：2013年4月6日<?php echo get_new_icon( strtotime("2013-04-06 00:00:00") ); ?><br>
	Alfred v1 のグローバルホットキーを workflow で設定する方法。
	<div class="clear"></div>
	</li><br>

	<li><a href="http://dev.ontheroad.jp/archives/10327">Alfred v2 の Workflow を使うと Google サジェストが利用できて WEB 検索最強に！</a><br>
	<img src="http://dev.ontheroad.jp/wp-content/uploads/2013/03/alfred_google_suggest_eye_catch.jpg" width="75" height="75" class="alignleft size-medium wp-image-3670" />
	更新日：2013年3月27日<br>
	Alfred から Google WEB 検索をする際に、検索キーワードのサジェスト機能を付ける　workflow 。
	<div class="clear"></div>
	</li><br>

	</ol>

	<?php include('to_pagetop.php'); ?>


	<br />

	<p>
	いかがでしたでしょうか？いきなり全ての機能を使おうと思うとこんがらがってきますので、Mac で頻繁に行う操作が Alfred 経由で可能な場合に、ひとつづつ試してみると良いかもしれません。<br>
	<br>
	それでは、Alfred で快適な Mac ライフを！
	</p>
