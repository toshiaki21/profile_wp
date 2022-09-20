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
define( 'DB_NAME', 'wpbeg' );

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
define( 'AUTH_KEY',         '5sqCO@jBXI`3^qt_NIDWTh@H(: %8@c8~-%yom(%Jof[mh.}rU~u@enYCVakG}Z.' );
define( 'SECURE_AUTH_KEY',  '8JdRzN/1Fa?UX#loAX#vI36{w+|)m}+Gj*qjSNC&:mqR|VL ,0,MPHX7z#.o(%$G' );
define( 'LOGGED_IN_KEY',    'F|jUsL1NqBuGAPp< @MO37e2:V9,]}Fz@us$B-u1nF!{dCEuMi8[19{rr*,so[oC' );
define( 'NONCE_KEY',        '`Z%gSz^~uh#1ReK}yvaJxN7)stglnIY06)6HwnQ<*HpupK _l[Oo>F|X`&zmYx:b' );
define( 'AUTH_SALT',        'f>WeM`20Zz%%QS}0F*Q&;*u0i|D@jD+H`*71k2VWFI5A9qZa7B$t7*J7<aG-7Uqk' );
define( 'SECURE_AUTH_SALT', '#e[SIh*>c6jds,$.uz>Wm}>Bfm$VbV!1cookNDj%rOcNT+G@GPXxrmXn`YQ(Z}GJ' );
define( 'LOGGED_IN_SALT',   'R`k k`FK8E-$TImgC>XeAy cu*20z,?ZX]Hr-&N1rp*;prL160R1-G&FqtlU;@FU' );
define( 'NONCE_SALT',       'u/Zwzq}(t+VUnj o)zlbKn2,kMY=is<PnoLkq*?V/02qbUZ>gUzI#~KB-:{hkI0s' );

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
