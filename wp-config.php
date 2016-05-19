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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.eU~ms*uXx~R`C8fd_E(Oi5A?=*]HJlFK5kOW6ZC}=XqnV5Cu+u;p;y`*g;?QaKP');
define('SECURE_AUTH_KEY',  'ZI)=Tf.)}AAxGMKtc}4>$C+LuLA_-:$$Fy,-S@uI-3d&I&b!M=f!Q&b4DIU[V~>n');
define('LOGGED_IN_KEY',    'auhdMV`uIdIBGGL{{p#:|+<HU{|r.hB^1wrhToXWezd$,`r/u#n&cBaEt]c%[.Oz');
define('NONCE_KEY',        '!(AW&IlV/B?UP/q`.[j,9NP@Y&6A6#!qPiz$xZz8kf<M|?JjG%NVe70]u|T[j.OM');
define('AUTH_SALT',        '.=T)hy%(}hklbEmG(U w8WzY6dLd%*)^w/{!g6TN-OJv-=-wJ>H@o:.Z8X]arH4,');
define('SECURE_AUTH_SALT', 'P5!H[P%RV-#c~V%%j]@r=VcOXB8Q$Z%B]5_L7~H23ITm?Wn-/vtQCSEUmz}h3#[P');
define('LOGGED_IN_SALT',   'AL)iUS:zw[f7jl~#(@o`rBX@ey,Fv8#$ed?ha,ax)[Cm:vn=ALiVs,Rl(J]zJFpF');
define('NONCE_SALT',       ']yesJ7o~A]u??~+Bb4BRE1jh7vR7IZM^EBo/ANhjnLX=r_%X+c~pd<`eC,F[:+,M');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
