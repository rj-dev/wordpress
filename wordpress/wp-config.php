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
define('DB_NAME', 'blog_treinaweb');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'rT~/RO39{NubgC5ISpT-9^)9f/E9t~Du*GXT,%h#qM]I=8{bK.0&e!L[a.W,xO+,');
define('SECURE_AUTH_KEY',  '|:T4A,c$I*M,<T/u)!gobO[>ZjnRw2Uft0n[RAw_n6RfIu|{K3yW:.l<%Oy`Dt8|');
define('LOGGED_IN_KEY',    'qn<I~x23JYD21c^+BeaF^+j:q9&z|N,$/FduZpR4p&p!nfT1{ _vSR6,t?`|Pu{3');
define('NONCE_KEY',        'IrylT;6v|/{tF2%nr!(=ec*!o+cICjCrZgG#kZ6<c_|7<S|AyI<[G}9i8=ftA]Od');
define('AUTH_SALT',        'Y=p8j,} [2<DC}|*_p*[%,&2(|wMZWUN!6h9Cd=6f^>(DI02C{#wTUu-+i-sILoW');
define('SECURE_AUTH_SALT', 'dMRQjQeLKWBNhTCL#mb>Z|+J_v0|CHTdzQ`lIZlCX$isE$pWH~)BgyfdcGmp4r_J');
define('LOGGED_IN_SALT',   '(62.@D1Kkt [Kyk=q|W55$^U}k>^#EuoW;7]4YyLygApG-X+hM<Fne|-K[N&J9]U');
define('NONCE_SALT',       'R9xZ~%_pEE]I3UR~1 n;-Imd4[FD:Y C-.wg=927(;y}.suV=kw[wzj@|r-WK7.0');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
