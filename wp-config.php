<?php
define('WP_CACHE', true); // Added by WP Rocket
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wmconvention');

/** MySQL数据库用户名 */
define('DB_USER', 'wmc');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'Novo2^ReniZanx');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`3|8xFq<e|rb+a:;{Mb4&7waUjFU@YV24w=R{Wf1RO,7vpp)!aJ?sZJ(/kY*UojJ');
define('SECURE_AUTH_KEY',  '&;#{/*PFf$&NtLx8Z%CWF*x)J=qZ<(Y:rd99ZgO7a*p+9{B6:!|=Z=NLJ&2U3v7,');
define('LOGGED_IN_KEY',    '6|5uSPp!_)!{^r^bmHr]39EP,7x}PRJ}?A1gK:M7VMq~7y_IDsM9:G6qT,&@hr.y');
define('NONCE_KEY',        '2bhvRC:)=U3TN~?+IH|xs[ar|z1P83 rV;prIvJtfo9K7]Mu>=0Rn;>{W.rpYdca');
define('AUTH_SALT',        '(k.,U!e5H9LHl:ge,5hQmO>|EsT*75-Js[g@?3O2/n~7N:<~K^n6>!]<Dr+[f|GH');
define('SECURE_AUTH_SALT', '+(][h!ipES]-_G/>xF[43G@X=Z(eXe`$Q`|/(VV Y.$Gcn!LaZynLUzxh,?JZ_MQ');
define('LOGGED_IN_SALT',   'wpJFS9x]2^wh$P~lE%6^6%SW8|e7T6bE*U<z-HR;af/2(ym1hNhO1&}>`h6nA.Z#');
define('NONCE_SALT',       'f7ng$ql@n0^<( W4RzZY2V{]y!,$%}O4P_)xS5!o0e+Niox<W2**ql0tQ^2QfoqF');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');

/** 禁用自动版本检查 */
define("OTGS_DISABLE_AUTO_UPDATES", true);
