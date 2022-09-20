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
 * * データベース設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** データベース設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp2' );

/** データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** データベースのホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AeBPs#|8[V87_X9<@bcu ~(U!DvIRN7274~Dcmp{xEz4>,%]/s6;o-Hstk6oaPf ' );
define( 'SECURE_AUTH_KEY',  'o+o{C(g;g1Xfa kW(68>i.Fc-670/;>`?Phm4+[.w0?p9J9LBKLV$`]!DO8o_Ki;' );
define( 'LOGGED_IN_KEY',    '=8H>/S[esf>5Hd<_+LczdS>9HDYZNrdD?D:N2J#)j)4Wvc>{S%tjCaroFtIW * u' );
define( 'NONCE_KEY',        'r<5oKj.fWE).={3,$VM8{_|W3#N~P6~9*(c:TE]+ZmUe-m/[H*T]ywQu%zHKEui4' );
define( 'AUTH_SALT',        'eLY_NkffPLDx50+8Q_,(X~C+H(Mrs@k[O!M/h%ipV#giS}yyL3NT(V04m3#9qJH ' );
define( 'SECURE_AUTH_SALT', '.%<Q?X3W0t-:{l=UVj}J+fR^&]y(MHKcY@K])BTkeGp|>I-rI*l!WkXN[:G#$Ny+' );
define( 'LOGGED_IN_SALT',   '9#:>-F3WH]$I}r=jW}<axHA%lyU|PkuH.Vz{v1(VGOeyHgD#dmz(sM+qblgb-Fpr' );
define( 'NONCE_SALT',       'A<8&+!A(Qa8pl4|w>3!OTt^Zrz]Y|IF7Yt*q)F;9UJ>}QTMbR2EvP ,DrK^{fg6Z' );

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
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
