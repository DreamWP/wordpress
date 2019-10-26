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
define( 'DB_NAME', 'Dream' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'Dream' );

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
define( 'AUTH_KEY',         '5a/)U.JHWbm5*)Digmq@D^~Cc&*o^N?fPuIhP:aY*q6]8,!d6H[^eb$bf7fvIGm+' );
define( 'SECURE_AUTH_KEY',  'KY,|$iVW8#C&}@fcL)@qqh`>f*Xn(4Y7]BG 3/p8wb}U<rZ_n$KNLiiKDq2)iFAF' );
define( 'LOGGED_IN_KEY',    '+<@WAY:=v8frmR4UaoD~bSaVMai1-@)u*ozQ1eAZ;EvOP`%Uj>#NU|OyllOVSYuD' );
define( 'NONCE_KEY',        'u)]$4UMGGmD9My[I8~a. FWI9b1w,~;0a(4{!SzO2vqIOb)MV^>L`,4iwkAa@`-=' );
define( 'AUTH_SALT',        '4VfR:.Cr#0I9%o!s~ORoC7tu&><Wh_/L pAYpzIRmGVR~h*soQF ae0i@}-ChB(S' );
define( 'SECURE_AUTH_SALT', 'L!D^^&Nor`,mm/F^^;%b5Qmazi;;x5wPDsB-N a}3+zKic}q*eW%m&`NM#|, 9GM' );
define( 'LOGGED_IN_SALT',   'EZ`[hqno*~b8~f*Za Z4#zK g,*obdZ96^}$$=]j]QL>Hx@9u$Oi:KJ`[b.NRV3*' );
define( 'NONCE_SALT',       'OvV m#&)<tKDa)fi2o($IU#:sWQ^Em0Y/MKZ}+;L-sed(_ #(bpi<|87-*g$)h5.' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
