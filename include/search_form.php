<!-- デフォルトの検索フォーム
<form method="get" id="searchform" action="<?php bloginfo('siteurl'); ?>/">
<div id="search">
<input class="searchinput" type="text" value="Search..." onclick="this.value='';" name="s" id="s" />
<input type="submit" class="searchsubmit" value="GO"/>
</div>
</form>
-->

<!-- Google カスタムサーチ -->
<form action="http://dev.ontheroad.jp/search" id="cse-search-box">
<div>
<input type="hidden" name="cx" value="partner-pub-9420456297086074:1786924076" />
<input type="hidden" name="cof" value="FORID:10" />
<input type="hidden" name="ie" value="UTF-8" />
<input type="text" name="q" size="25" />
<input type="submit" name="sa" value="検索" />
</div>
</form>

<!-- （人気のクエリのコード）-->
<script type="text/javascript" src="http://www.google.com/cse/query_renderer.js"></script>
<div id="queries"></div>
<script src="http://www.google.com/cse/api/partner-pub-9420456297086074/cse/1786924076/queries/js?oe=UTF-8&amp;callback=(new+PopularQueryRenderer(document.getElementById(%22queries%22))).render"></script>
<!-- Google カスタムサーチ -->

