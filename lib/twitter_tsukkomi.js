


// ---------------------------------------------------------------------
// 関数：ログアウト処理
// ---------------------------------------------------------------------
function logout() {
	document.getElementById("userinfo").innerHTML = '';
	document.getElementById("tweetBox").innerHTML = '';
	twttr.anywhere.signOut();
}


// ---------------------------------------------------------------------
// 関数：接続ボタンなど
// ---------------------------------------------------------------------
function init() {

	twttr.anywhere(function(twitter) {

//			twitter("#connectButton").connectButton();
		twitter("#connectButton").connectButton({

			// 認証が完了した後の処理 -----------------------------
			authComplete: function() {

				var User = twitter.currentUser;
				document.getElementById("userinfo").innerHTML = [
				'<img src="', User.data('profile_image_url'), '"><span>', User.data('screen_name'), '</span>（<a href="javascript:logout(); void(0);">接続解除</a>）'
						].join('');
				getTweetBox();


			},

			// サインアウトした後の処理 -----------------------------
			signOut: function() {
//				document.getElementById("userinfo").innerHTML = 'ばいばい（userinfo）';
//				document.getElementById("tweetBox").innerHTML = 'ばいばい（tweetbox）';
			}
		});


		// 認証済みの場合
		if (twitter.isConnected()) {
			var User = twitter.currentUser;
			document.getElementById("userinfo").innerHTML = [
			'<img src="', User.data('profile_image_url'), '"> ', User.data('screen_name'),
			'（<a href="javascript:logout(); void(0);">接続解除</a>）',
//			'（<a href="javascript:getTweetBox(); void(0);">つぶやく</a>）</p>'
					].join('');

			getTweetBox();
		}
	});
}

// ---------------------------------------------------------------------
// 関数：ツイートボックスの表示
// ---------------------------------------------------------------------
function getTweetBox() {

	twttr.anywhere(function(twitter) {
			twitter("#tweetBox").tweetBox({
				height: 100,
				width: 600,
				label: "",
				defaultContent: "「<?= wp_title(''); ?>」 <?= the_permalink(); ?> #tsukkomi",
				onTweet:function( tweet, renderdTweet ) {
					document.getElementById("tweetBox").innerHTML = [
						'<p>つっこみありがとうございました。',
						'つっこみが表示されるまでに10秒くらいかかります。リロードしてみてください。<br>',
						'（<a href="javascript:getTweetBox(); void(0);">もう一回つっこむ！</a>）</p>'
					].join('');
				}
			});
	});
}
