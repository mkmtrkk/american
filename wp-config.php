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
define( 'DB_NAME', 'american' );

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
// <<<<<<< HEAD
// define( 'AUTH_KEY',         '%Ssj{gKBt:rDaB$CmeigBZs8;A$_KwI50)+U~1&R;tF1G=#e?|msL4T`xC!kblG[' );
// define( 'SECURE_AUTH_KEY',  '.*PL;I( 7P9EWmBot!4rUksCKNb3>Ui aXLa||OH5@?@<<UP9,Fg2uV;bLdc9*Li' );
// define( 'LOGGED_IN_KEY',    '(M,5|E:Bp>1]P37vlllhqrgk:SNI$(P;(#L$]D/dMZ9*hS)~@_Z)3j+w<CwILqD{' );
// define( 'NONCE_KEY',        '~.=}hTf<ZZ|]Nx[l!Ao{A=u>NeEAcOJyG-H0m!:%~=5L>[P*~wfZ%DPq*QeJ7xQv' );
// define( 'AUTH_SALT',        'e!ot6,=)@ 1=Vb[N:r/HYAPb.Aqob~o]>~_U)T_i#g>iS~~IO(7xOO7p,IL2hJho' );
// define( 'SECURE_AUTH_SALT', '~#>Q,kiNU#LyD4U!c2E+bak(8@%tvjsd}E8-W*i:r)~4eO[1*{t$*RT mp+L>Dq>' );
// define( 'LOGGED_IN_SALT',   '<uSrWfD[m9h{;<lM[s!Mp[-m/|} /3;_=]$wK;}2}i~ ? VTCw_pGJ]hK Dd=3 *' );
// define( 'NONCE_SALT',       'I[$M[0R!uI~QxVc7:pMJ&}>ib+^- v{k!UOwCOs{(fs-53yxv>OTL9|{Q|-Fo-#&' );
// =======
// define( 'AUTH_KEY',         'G/+X[9L4`riBKO/W<imP0|P^w%Q#LrMYY*bS-Ag+`90}J`<L:vzgq9oy]P9{O2ov' );
// define( 'SECURE_AUTH_KEY',  'Zk9Ln@2JJ~RMbO=V0A/LGpuA+,:h-@f%rcbq]z@b^o20b,W)]TR>i[k}Td|8Enb2' );
// define( 'LOGGED_IN_KEY',    'VEfwT!q^$$WHNDpHEw`-7)3jB4WQ9,%bl.MV4o:vN;[][7uyl)fXJQNX[#>{GpP8' );
// define( 'NONCE_KEY',        'hm%5cs-]`,w<XJu`BzMv|HQifCY-N)*iw=Z57v`HxK-MYmr-d<Uoe.avFpq0Lrf(' );
// define( 'AUTH_SALT',        'c%5(> WVC,CUS|eFH8:QoZcw_#zTVma_a^jp4+g!+K`8.FT}loM7&]bGZ0?V=Y$a' );
// define( 'SECURE_AUTH_SALT', 'F:9S(l-D}h{dMXf3pRD=A2QW9^e:@)&Bc(_ [dP)9hy/o[IP>js&f; zvU^<l3vM' );
// define( 'LOGGED_IN_SALT',   'uxcvWtx@D|Snxpzl/e4M=<5T3E#wg>R6xR;q]P8;RsQ%jsOkC.BM{/74Mq<2aAI=' );
// define( 'NONCE_SALT',       '9f86T<$c%D5+Z_iwyn5aj>?g!jpcJ:i3{s;JU6O{(Uap8-`tMA0~.0^.t},/%NC?' );
// >>>>>>> 19f0bd199af201a47267154c87dbb92f74c93ed4

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
