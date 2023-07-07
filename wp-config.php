<?php

/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'delndb');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'secret');

/** nome do host do MySQL */
define('DB_HOST', 'mysql');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '77Q>=<ua8FvhqL^xl[38u5G,iiUaLQ` ~7FAc1Pg+e cawwXZg7127lWjNXQ^u+)');
define('SECURE_AUTH_KEY',  'Z* o<c2u}M*#+L)n:?Fo#z6?(*/rAorXhytp50FRc~c._f`dI2q[lchLWy]<4`pL');
define('LOGGED_IN_KEY',    '(}VTtCpT2`IFg#:zzrAlAi8_#?_d(8N!/>2*/?q|&JUeiY-<kfw~c1Fh=2wF17X%');
define('NONCE_KEY',        ')EHRt$_9vAw?0l!NCTHN%T{Orcx0Y(3nT>|^e5MvGUrIS^|;S;[FN1/>R3VwW} >');
define('AUTH_SALT',        '0Gu4gfV$,pC*u).LxddPE&bW Lt(@gwwI,dfZIiR?RQ3h|$j#6uJ;MEBFMF8RIJ:');
define('SECURE_AUTH_SALT', '_*#ykOc$$Xn er>qxDOJD7xXoV;191[P#[~cX^FEmTZ wz2B>o=;O}jyn~~rx[2m');
define('LOGGED_IN_SALT',   'I>!lqoX`&#zL{3!(*(`//dHr(|TC4A+*q*McL(TI(B0.n8PRQ6jm1a-k*3-Lsjpx');
define('NONCE_SALT',       '`Tx&F=`T><WdWDAlcq#v5q3 b=#SbNQaW}vM9a$d{ypD&DvZd98CY`qoYMDB,Ll(');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'deln_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', true);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if (!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
