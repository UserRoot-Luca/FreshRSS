<?php

/******************************************************************************/
/* Each entry of that file can be associated with a comment to indicate its   */
/* state. When there is no comment, it means the entry is fully translated.   */
/* The recognized comments are (comment matching is case-insensitive):        */
/*   + TODO: the entry has never been translated.                             */
/*   + DIRTY: the entry has been translated but needs to be updated.          */
/*   + IGNORE: the entry does not need to be translated.                      */
/* When a comment is not recognized, it is discarded.                         */
/******************************************************************************/

return array(
	'archiving' => array(
		'_' => 'アーカイブ',
		'exception' => '例外を除く',
		'help' => '個々のフィード設定内で、より多くの設定をしていただけます。',
		'keep_favourites' => 'お気に入りを消去しない',
		'keep_labels' => 'ラベルを消去しない',
		'keep_max' => '各フィードに残す記事の最大数',
		'keep_min_by_feed' => '各フィードに残す記事の最小数',
		'keep_period' => '記事を残す最大時間',
		'keep_unreads' => '未読の記事を消去しない',
		'maintenance' => 'メンテナンス',
		'optimize' => 'データベースを整理する',
		'optimize_help' => 'データベースサイズを減らすため、時々実行されます',
		'policy' => '不要なデータを削除する',
		'policy_warning' => 'すべての記事が、不要なデータを削除する設定がなされてないときは保存されます。',
		'purge_now' => '不要なデータをまとめて削除する',
		'title' => 'アーカイブ',
		'ttl' => '自動的に更新される時間',
	),
	'display' => array(
		'_' => '表示',
		'darkMode' => array(
			'_' => '自動ダークモード',
			'auto' => '自動',
			'help' => '対応するテーマのみ',
			'no' => '無効',
		),
		'icon' => array(
			'bottom_line' => '行の下部',
			'display_authors' => '著者',
			'entry' => '記事のアイコン',
			'publication_date' => '出版された日',
			'related_tags' => '記事のタグ',
			'sharing' => '共有',
			'summary' => '要約',
			'top_line' => '行の先頭',
		),
		'language' => '言語',
		'notif_html5' => array(
			'seconds' => '秒 (0秒だとタイムアウトしません)',
			'timeout' => 'HTML5 の通知タイムアウト時間',
		),
		'show_nav_buttons' => 'ナビゲーションボタンを表示する',
		'theme' => array(
			'_' => 'テーマ',
			'deprecated' => array(
				'_' => '非推奨',
				'description' => 'このテーマのサポートは終了しており、<a href="https://freshrss.github.io/FreshRSS/en/users/05_Configuration.html#theme" target="_blank">FreshRSSの将来のリリース</a>では利用できなくなります。',
			),
		),
		'theme_not_available' => 'テーマ“%s”はご利用いただけません。他のテーマをお選びください。',
		'thumbnail' => array(
			'label' => 'サムネイル',
			'landscape' => 'ランドスケープ',
			'none' => 'なし',
			'portrait' => 'ポートレート',
			'square' => '四角',
		),
		'timezone' => 'タイムゾーン',
		'title' => 'ディスプレイ',
		'website' => array(
			'full' => 'アイコンと名前',
			'icon' => 'アイコンのみ',
			'label' => 'Webサイト',
			'name' => '名前のみ',
			'none' => 'なし',
		),
		'width' => array(
			'content' => 'コンテンツ幅',
			'large' => '広い',
			'medium' => '中',
			'no_limit' => '最大幅',
			'thin' => '狭い',
		),
	),
	'logs' => array(
		'loglist' => array(
			'level' => 'ログのレベル',
			'message' => 'ログのメッセージ',
			'timestamp' => 'タイムスタンプ',
		),
		'pagination' => array(
			'first' => '先頭',
			'last' => '最後',
			'next' => '次へ',
			'previous' => '前へ',
		),
	),
	'privacy' => array(
		'_' => 'Privacy',	// TODO
		'retrieve_extension_list' => 'Retrieve extension list',	// TODO
	),
	'profile' => array(
		'_' => 'プロフィール',
		'api' => array(
			'_' => 'API管理',
			'check_link' => 'Check API status via: <kbd><a href="../api/" target="_blank">%s</a></kbd>',	// TODO
			'disabled' => 'The API access is disabled.',	// TODO
			'documentation_link' => 'See the <a href="https://freshrss.github.io/FreshRSS/en/users/06_Mobile_access.html#access-via-mobile-app" target="_blank">documentation and list of known apps</a>',	// TODO
			'help' => 'See <a href="http://freshrss.github.io/FreshRSS/en/users/06_Mobile_access.html#access-via-mobile-app" target=_blank>documentation</a>',	// TODO
		),
		'delete' => array(
			'_' => 'アカウント消去',
			'warn' => 'あなたのアカウントとそれに関連したデータが消去されます。',
		),
		'email' => 'Eメールアドレス',
		'password_api' => 'APIのパスワード<br /><small>(モバイルアプリなど)</small>',
		'password_form' => 'パスワード<br /><small>(Web-formのログイン時に使われます)</small>',
		'password_format' => '最低7文字必要です',
		'title' => 'プロフィール',
	),
	'query' => array(
		'_' => 'ユーザークエリ',
		'deprecated' => 'このクエリは有効ではありません。参照されているカテゴリやフィードはすでに消去されました。',
		'description' => '説明',
		'filter' => array(
			'_' => 'フィルターを適用:',
			'categories' => 'カテゴリごとに表示する',
			'feeds' => 'フィードごとに表示する',
			'order' => '日付ごとにソートする',
			'search' => '式',
			'shareOpml' => 'カテゴリとフィードのOPMLによる共有を有効にする',
			'shareRss' => 'HTMLとRSSによる共有を有効にする',
			'state' => '状態',
			'tags' => 'タグごとに表示する',
			'type' => 'タイプ',
		),
		'get_all' => 'すべての記事を表示する',
		'get_all_labels' => '任意のラベルで記事を表示する',
		'get_category' => 'カテゴリ“%s”を表示する',
		'get_favorite' => 'お気に入りの記事を表示する',
		'get_feed' => 'フィード“%s”を表示する',
		'get_important' => '重要なフィードからの記事を表示する',
		'get_label' => 'ラベル“%s”の記事を表示する',
		'help' => 'HTML/RSS/OPMLによるユーザークエリと再共有については <a href="https://freshrss.github.io/FreshRSS/en/users/user_queries.html" target="_blank">こちら</a>をご覧ください',
		'image_url' => '画像のURL',
		'name' => '名前',
		'no_filter' => 'フィルターはありません',
		'no_queries' => array(
			'_' => 'No user queries are saved yet.',	// TODO
			'help' => 'See <a href="https://freshrss.github.io/FreshRSS/en/users/user_queries.html" target="_blank">documentation</a>',	// TODO
		),
		'number' => 'クエリ n°%d',
		'order_asc' => '古い記事を最初に表示する',
		'order_desc' => '新しい記事を最初に表示する',
		'search' => '“%s”で検索する',
		'share' => array(
			'_' => 'このクエリをリンクで共有する',
			'disabled' => array(
				'_' => 'disabled',	// TODO
				'title' => 'Sharing',	// TODO
			),
			'greader' => 'Shareable link to the GReader JSON',	// TODO
			'help' => 'このクエリを誰かと共有したい場合は、このリンクを提供してください',
			'html' => 'HTMLページへの共有リンク',
			'opml' => 'フィードのOPMLリストへの共有リンク',
			'rss' => 'RSSフィードへの共有リンク',
		),
		'state_0' => 'すべての記事を表示する',
		'state_1' => '既読の記事を表示する',
		'state_2' => '未読の記事を表示する',
		'state_3' => 'すべての記事を表示する',
		'state_4' => 'お気に入りの記事を表示する',
		'state_5' => 'お気に入りの既読の記事を表示する',
		'state_6' => 'お気に入りの未読の記事を表示する',
		'state_7' => 'お気に入りの記事を表示する',
		'state_8' => 'お気に入りでない記事を表示する',
		'state_9' => 'お気に入りでない既読の記事を表示する',
		'state_10' => 'お気に入りでない未読の記事を表示する',
		'state_11' => 'お気に入りでない記事を表示する',
		'state_12' => 'すべての記事を表示する',
		'state_13' => 'すべての既読の記事を表示する',
		'state_14' => '未読の記事を表示する',
		'state_15' => 'すべての記事を表示する',
		'title' => 'ユーザークエリ',
	),
	'reading' => array(
		'_' => 'リーディング',
		'after_onread' => '“すべてに既読を付ける”を押した後,',
		'always_show_favorites' => 'デフォルトですべてのお気に入りの記事を表示する',
		'apply_to_individual_feed' => 'Applies to feeds individually',	// TODO
		'article' => array(
			'authors_date' => array(
				'_' => '著者と日付',
				'both' => 'ヘッダーとフッター',
				'footer' => 'フッター',
				'header' => 'ヘッダー',
				'none' => 'なし',
			),
			'feed_name' => array(
				'above_title' => '上のタイトル/タグ',
				'none' => 'なし',
				'with_authors' => '著者と日付の行',
			),
			'feed_title' => 'フィードのタイトル',
			'icons' => array(
				'_' => '記事アイコンの位置<br /><small>(リーディングビューのみ)</small>',
				'above_title' => 'タイトルの上',
				'with_authors' => '著者と日付の行',
			),
			'tags' => array(
				'_' => 'タグ',
				'both' => 'ヘッダーとフッター',
				'footer' => 'フッター',
				'header' => 'ヘッダー',
				'none' => 'なし',
			),
			'tags_max' => array(
				'_' => '表示されるタグの数の上限',
				'help' => '0に設定すると、折りたたまずにすべてのタグを表示します。',
			),
		),
		'articles_per_page' => '1ページ当たりの記事の数',
		'auto_load_more' => 'ページの下にもっと記事を読み込む',
		'auto_remove_article' => '記事を読んだら非表示にする',
		'confirm_enabled' => '“すべてに既読を付ける” を押したとき確認ダイアログを表示する',
		'display_articles_unfolded' => 'デフォルトで未分類の記事を表示する',
		'display_categories_unfolded' => '展開するカテゴリ',
		'headline' => array(
			'articles' => '記事: 開く/閉じる',
			'articles_header_footer' => '記事: ヘッダー/フッター',
			'categories' => '左のナビゲーション: カテゴリ',
			'mark_as_read' => 'チェックをつけた記事を既読にする',
			'misc' => 'その他',
			'view' => 'ビュー',
		),
		'hide_read_feeds' => 'カテゴリを非表示 & 未読の記事がないフィード ("すべてに既読を付ける”では適用しません)',
		'img_with_lazyload' => '<em>lazy load</em>を写真の読み込み時に使う',
		'jump_next' => '次の未読の姉妹記事へ移る',
		'mark_updated_article_unread' => '更新された記事を未読とする',
		'number_divided_when_reader' => 'リーディングビューを2分割する',
		'read' => array(
			'article_open_on_website' => '記事を元のWebサイトで開いたとき',
			'article_viewed' => '記事を読んだとき',
			'focus' => 'フォーカスしたとき (重要なフィードを除く)',
			'keep_max_n_unread' => '未読の記事として残す最大数',
			'scroll' => 'スクロールしているとき (重要なフィードを除く)',
			'upon_gone' => 'ニュースフィードの提供元がなくなったとき',
			'upon_reception' => '記事を受け取ったとき',
			'when' => '記事を既読にする…',
			'when_same_title_in_category' => 'if an identical title already exists in the top <i>n</i> newest articles of the category',	// TODO
			'when_same_title_in_feed' => 'すでに同一タイトルが上位n件の最新記事に存在するとき (of the feed)',	// DIRTY
		),
		'show' => array(
			'_' => '記事を表示する',
			'active_category' => 'アクティブなカテゴリ',
			'adaptive' => 'Show unreads if any, all articles otherwise',	// TODO
			'all_articles' => 'すべての記事を表示する',
			'all_categories' => 'すべてのカテゴリ',
			'no_category' => '未分類',
			'remember_categories' => '前回開いたカテゴリ',
			'unread' => '未読のみ表示する',
			'unread_or_favorite' => 'Show unreads and favourites',	// TODO
		),
		'show_fav_unread_help' => 'ラベルも適用する',
		'sides_close_article' => '記事の外をクリックすると記事を閉じるようにする',
		'sort' => array(
			'_' => '順序',
			'newer_first' => '最新のものを先頭にする',
			'older_first' => '最古のものを先頭にする',
		),
		'star' => array(
			'when' => 'Mark an article as favourite…',	// TODO
		),
		'sticky_post' => '開いたときにトップを記事にする',
		'title' => 'リーディング',
		'view' => array(
			'default' => 'デフォルトビュー',
			'global' => 'グローバルビュー',
			'normal' => 'ノーマルビュー',
			'reader' => 'リーディングビュー',
		),
	),
	'sharing' => array(
		'_' => '共有',
		'add' => '共有方法を追加する',
		'deprecated' => 'このサービスは非推奨でFreshRSSの<a href="https://freshrss.github.io/FreshRSS/en/users/08_sharing_services.html" title="Open documentation for more information" target="_blank">将来のリリース</a>から削除される予定です。',
		'diaspora' => 'Diaspora*',	// IGNORE
		'email' => 'Eメール',
		'facebook' => 'Facebook',	// IGNORE
		'more_information' => 'もっと多くの情報',
		'print' => '印刷',	// IGNORE
		'raindrop' => 'Raindrop.io',	// IGNORE
		'remove' => '共有方法を削除する',
		'shaarli' => 'Shaarli',	// IGNORE
		'share_name' => '共有する方法',
		'share_url' => 'URLを共有する',
		'title' => '共有',
		'bluesky' => 'Bluesky',	// TODO
		'twitter' => 'Twitter',	// IGNORE
		'wallabag' => 'wallabag',	// IGNORE
	),
	'shortcut' => array(
		'_' => 'ショートカット',
		'article_action' => '記事のアクション',
		'auto_share' => '共有',
		'auto_share_help' => '共有方法が一つしか設定されていないときにはそれが使われます。そうではなければ、番号によって共有方法にアクセスできます。',
		'close_dropdown' => 'メニューを閉じる',
		'collapse_article' => '折りたたむ',
		'first_article' => '初めの記事を開く',
		'focus_search' => '検索ボックスにアクセスする',
		'global_view' => 'グローバルビューに変更する',
		'help' => 'ドキュメントを表示する',
		'javascript' => 'JavaScriptはショートカットを使うときに必要です',
		'last_article' => '最近の記事を表示する',
		'load_more' => 'もっと記事を読み込む',
		'mark_favorite' => 'お気に入りを切り替える',
		'mark_read' => '既読/未読を切り替える',
		'navigation' => 'ナビゲーション',
		'navigation_help' => '<kbd>⇧ Shift</kbd>キーとの組み合わせで、フィードをナビゲーションします。<br/><kbd>Alt ⎇</kbd> キーとの組み合わせで、カテゴリをナビゲーションします。',
		'navigation_no_mod_help' => '以下のナビゲーションショートカットは、修飾キーをサポートしません。',
		'next_article' => '次の記事を開く',
		'next_unread_article' => '次の未読の記事を開く',
		'non_standard' => '(<kbd>%s</kbd>)のキーはショートカットにはなりません。',
		'normal_view' => 'ノーマルビューに切り替える',
		'other_action' => 'ほかのアクション',
		'previous_article' => '前の記事を表示する',
		'reading_view' => 'リーディングビューに切り替える',
		'rss_view' => 'RSSフィードとして開く',
		'see_on_website' => '元のWebサイトを開く',
		'shift_for_all_read' => '+ <kbd>Alt ⎇</kbd>で前の記事を既読にし、<br />+ <kbd>⇧ Shift</kbd>ですべての記事を既読にします。',
		'skip_next_article' => '次の記事を開かずにフォーカスする',
		'skip_previous_article' => '前の記事を開かずにフォーカスする',
		'title' => 'ショートカット',
		'toggle_media' => 'メディアの 再生/停止',
		'user_filter' => 'ユーザークエリにアクセスする',
		'user_filter_help' => 'ユーザークエリが一つしかなければ、それを使う。そうではなければ、番号でクエリを選択する。',
		'views' => 'ビュー',
	),
	'user' => array(
		'articles_and_size' => '%s 記事 (%s)',
		'current' => '現在のユーザー',
		'is_admin' => 'は管理者です',
		'users' => 'ユーザー',
	),
);
