<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
// define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
// define('DB_USER', 'wordpress');

/** MySQL データベースのパスワード */
// define('DB_PASSWORD', 'wordpress');

/** MySQL のホスト名 */
// define('DB_HOST', 'wordpress_test_db:3306');

/** データベースのテーブルを作成する際のデータベースの文字セット */
// define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
// define('DB_COLLATE', '');

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'heroku_1bff9e81ade02e9');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'bdbacc7113cae6');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '6311e600');

/** MySQL のホスト名 */
define('DB_HOST', 'us-cdbr-iron-east-05.cleardb.net');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');
/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6bf130b885714d9a4c3eb3c1ca66f8aa567790f5');
define('SECURE_AUTH_KEY',  '01138154bd94d22336ac4364afee91afa17d99eb');
define('LOGGED_IN_KEY',    '7c7b3b93d00cbae675e447184de6452f479dba4d');
define('NONCE_KEY',        'fe5cca4d59d62c02b5e87d3bab01818bb6245f4c');
define('AUTH_SALT',        'b0473a4aa2f5571eb8a17dcb1ee486c9cccc48c5');
define('SECURE_AUTH_SALT', '5e0eb000dd3a477893f02345ebe8a84e9b97f7eb');
define('LOGGED_IN_SALT',   'cdaaf08576715cebf3070209a235f0be4c4265d3');
define('NONCE_SALT',       '68211f16aa6c4ef15de18aa4b0b2e2ae3581b704');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', true);

if ( WP_DEBUG ) {
    // debug.log ファイルに記録
    define( 'WP_DEBUG_LOG', true );
    // ブラウザ上に表示しない
    define( 'WP_DEBUG_DISPLAY', false );
    // ブラウザ上に表示しない
    @ini_set( 'display_errors',0 );
}

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


define('WP_HOME','https://pockeawa.herokuapp.com');
define('WP_SITEURL','https://pockeawa.herokuapp.com');