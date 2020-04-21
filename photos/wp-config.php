<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'photos' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'PYdlUlUPaO^z 1M;/k+qoX&g`:#LV9R j6vrO.j6bgSv+@:}9t!:p6AQTJLiDa7{' );
define( 'SECURE_AUTH_KEY',  '!;e=mkA$)-8X{1gVx3#nJ!KlpK._cl.7eVVayrUl_+hCX-[5Nvm@D06}4Se;6[kg' );
define( 'LOGGED_IN_KEY',    '5=jGn^V4*yoGd]LR2Ms@(1P3]K!bwBv%TiOlN|)C(Y;8M]EW5!H.)FMFH73^|8E6' );
define( 'NONCE_KEY',        'C,2}eYX1D,QDmul}#M;3muzE8ql>t$wItwhq=|hO(.L6J&A&dn!j<MJiViFlq2G5' );
define( 'AUTH_SALT',        '`197_fJD%GKo8*(MD-Th5,Oc#oJ^_jTPv=%=Mbg2n`ug+FU:Z2;Mv<K){gj[HQ.V' );
define( 'SECURE_AUTH_SALT', 'gw-FS>MClZzZG:&@)gXR]*0f_*%I~<@N76!DXngLT?qzz^8! H|+k:#K}8S@N#:)' );
define( 'LOGGED_IN_SALT',   'kZh(+NVJG|Fv_?Hcr?b`C0+5M=6{S=eyicJEO_ N;%J`eVC9PMW2v(.7B*w9+OGm' );
define( 'NONCE_SALT',       '(Nz/xcksyds*e2[ABXADxXfS3Gn<,ya#+;tDf>m#ER{+>,%S3RpWJ]xoN$#VU@X8' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'photos_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
