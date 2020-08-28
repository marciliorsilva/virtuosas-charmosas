<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p{r+ YH+Ed_+{ g?+Ei4%AV X,:-?8;YV|=7bAV]c VXzld9%Plq!uSq2#@agD(a' );
define( 'SECURE_AUTH_KEY',  'nv:zb8Fltxk0CdGasj4NgC`&E*JI+aQH=PY]&UG$TN]zdgWF,`e6% zPP|_ttvCP' );
define( 'LOGGED_IN_KEY',    'zmwvE%GpUG>l]XYZgf&s14/a8FWTS%M4v]}OwI,+pnA6{%@Nmr#l6k(U#rYGvAq1' );
define( 'NONCE_KEY',        'Gh[~jyEon-V<B{-Z$6]@W5$|Y6{md*Kw*&PO([w@FuCEF= HTfsE%p_[8-;o:h,8' );
define( 'AUTH_SALT',        'WH]E[;i0>5X{zoFcQ2iqJ>8{N&r--8~uY9=^TznWEL0Q~ Rix!d!N o@u.o<6%zh' );
define( 'SECURE_AUTH_SALT', 'f_u=NQg02Pr2)MSh,F}Twvh*#,_,^AYC-t/~2j)6zMWk`2t|c(GkG4<ZMHem4[9d' );
define( 'LOGGED_IN_SALT',   '@SkR2h60s($#lL)bbC~P%n+y2U&v*>%8H7!I|+gs]is-%kq)b!WrRog;ubpb^K[Q' );
define( 'NONCE_SALT',       'YBCXr7QP~zpjOJscRWXbMsT;& 6a$]FM@^J{TL+OuE}$dQ:!PM^LG{#S>S0Rl#pV' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
