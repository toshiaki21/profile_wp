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
define( 'DB_NAME', 'wp1' );

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
define( 'AUTH_KEY',         'S<auf#8@`LX4fRuFrBqZ$`A$d{VC^s/H8#:fYpk-jHz9r/ncP:5L#T**cySh[0.R' );
define( 'SECURE_AUTH_KEY',  'OJKN`L!YsdpaJ-0i?sMq{)+ez@Ul`K)l_poLz0)*TMH CxQ~y7~r#-vvor|0[Kon' );
define( 'LOGGED_IN_KEY',    'eE?B&c2)_ibUL8f<*Y3-}uC=1(ovRoFcY[;i,-O<^R<)37nJnS^&Xy78FV}.!l+s' );
define( 'NONCE_KEY',        '/M% 4]!>4c^17OGt7` v)Q?dq;Vk%S2olm?+7>9xgN-&rR7oxHj|<iAW|GmH`YY]' );
define( 'AUTH_SALT',        '.n/+T}?tp/_TW.:zP[*BSpQb{Wh)_.Z-6bbZ #?*k{%1qmVz:ERXJzEuNF0xe[@H' );
define( 'SECURE_AUTH_SALT', 'SxLphXksxJ<7~}Omzv7w:=W$(pWqgDn}2cK[UD+mpz<f~d@P<y@q_le$1RqjHEca' );
define( 'LOGGED_IN_SALT',   '(Uj:H4@_!b6;nR0&JjboEGrC{s)5|ZYL(NJ-gZoGs]FBDk@E e:xUT(lBLIo]jta' );
define( 'NONCE_SALT',       'w,u2*x&!Ose6}*=hV%BTM]CJ8m/O)`wiH`{64YA9lyrl?[@I];CUGV:yfZ=bZsA`' );

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
