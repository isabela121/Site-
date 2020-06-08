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
define( 'DB_NAME', 'site' );

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
define( 'AUTH_KEY',         'Y7T]!|khB>A~ BVTh3<Di kW1wmb+jx0IUN9Ha2*V(.LP5^f&h|@*]b {:epc1BW' );
define( 'SECURE_AUTH_KEY',  'UyOcOA-R=Dk;].D!,Ek}4/9]ewL;lD6z_h/r__8ZzG3*Km}}4BZ%D|SBVpT MN!=' );
define( 'LOGGED_IN_KEY',    'GGxox+m)C_,JcTSvZuu)SW,6/!<q~vgphr?3)(WW(~,# +b)YX_ZJuSYV7h:`7>g' );
define( 'NONCE_KEY',        'N<T;iOVD^Nj]LZv>3D&$?#Ie.aAvcp+Z)bHnxw)H8f2]MBe;#]#WR91V61/fXJxj' );
define( 'AUTH_SALT',        'p(l`X6<CMqPa]P9$QXHrOyQJij/2QusyuM=NmxOd95&N3qHl6/Evk>eLde2.2I7(' );
define( 'SECURE_AUTH_SALT', '|9rAeNCg4x%_;6 UtRRV M&,oP!.FZe$5e]|/!8.!r(Ntd6>T`d3fnpsJ~@A_2nW' );
define( 'LOGGED_IN_SALT',   'ndf{VHt%WbU_`YQ,6<crpw)PF>ycxGmLf/8C:{GO;dRRpfD-kK:$9nt,NCs}>{i?' );
define( 'NONCE_SALT',       'CAZ{9VLwq<^{D`j`:vXe]{SD:YMd]hLwGYV132jDN<eM|f3fjfWqUMV57z6A3jg_' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_te';

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
