<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wordpress' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'root' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '39<CrjGQ.RD9IfPO_B</|QB5O64JekY-jnAe$>,A:mZ;.kBJsLP +kr<pT6s~[Qe' );
define( 'SECURE_AUTH_KEY',  'xR~sbV0N%`C-_rh48X26>#&zYV]Lt%^T1mjSZ{Rg7yoa` AD#K=AxjHwD9Vh_Fzh' );
define( 'LOGGED_IN_KEY',    'f_QoR9h~R7}u+jb.ajDG|=dVOJ7~6I:unB,vI+AGs1%+MPF9)D)8{1uc~&(%Z9em' );
define( 'NONCE_KEY',        'frF>L-PE2NT<#]UmAbzY.km1 qD$*$c|z>*z-iY@&q&<rX%8A<PmPZk6Q(JrI>Nn' );
define( 'AUTH_SALT',        '$N`2xFTc?2}(5Z*{]a/o;fD^)h4XGz/y~#A5Y4q;WO P7qxKmd4MGrsUVM/2V@8S' );
define( 'SECURE_AUTH_SALT', '/7~T(B]zyP$KjUr(k|~,^Qc4;e8j,(S$=[=z#~@u1iCTUQCyHd%~(N(!eb9_sbd3' );
define( 'LOGGED_IN_SALT',   'u-~ C(P(fhK2L;E! EnKEL~gBW H7@pL9!rYc@`<)tNorDn`Q|$V1*SI+#B4T#>m' );
define( 'NONCE_SALT',       'QI}vh8]Hj*O]YNu<[E~;LZuN1Ov[Xqh+^ l2}nLJSv.?OB)!c5!:/8%uU;^rQthf' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
