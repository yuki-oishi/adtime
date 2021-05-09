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
define('DB_NAME', 'LA12988504-99');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'LA12988504');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'tHNNZ1xp');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql146.phy.lolipop.lan');

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
define('AUTH_KEY', '$8n2;je%x/VOxW~BX^uc^KM6ibA8yUu=XQr*Of6n``t~O5%sIu&)q;0R~lY?I7WI');
define('SECURE_AUTH_KEY', '%w!@"{Td7zhjYq"ofgFL$4oBi1u3a]M{^Y0ZS[vKLD3Ul2bma&xr+93:$^1@MTAX');
define('LOGGED_IN_KEY', 'G-3eb5AK[5O@xB(~Ns]v?JUCX]M.r:i%:L"R!J=eAX6?X)E%OEVDihs>(.]G[hGd');
define('NONCE_KEY', 'XqL]9&ZG^0%M-NmAOiQhCTB-vPp|F:B$[LbqL;)(#C]D6C,zXKr#2:#p?0Y]rP3!');
define('AUTH_SALT', '8PYM%LT7?e>qU*fSvZ?Pbi~VjTTKY*_=p_i0WpN-`vk{Y8j:lN5I4si}zxW8uyj$');
define('SECURE_AUTH_SALT', 'TUPcu4J,}=ZLJo[^r3;{.V0o^B?G~dileaQ_#Jg%Tij}2`WHz|Fw.-ETPqX<hMLQ');
define('LOGGED_IN_SALT', '162*T0WzpqGg0l(Cv-G>([D6y<njTQUvE!|XmYR=MvPxmqs@jlovA;*A;rFgz=wW');
define('NONCE_SALT', 'Sy;-oH-lg&c|t2FXu^7Gv0J}gL9s3YmHQC+GHrikbwW#l<*hVPJ2hR^p?#-9e~#j');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp20201129151806_';

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
define('WP_DEBUG', false);
define ('WPCF7_AUTOP', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
