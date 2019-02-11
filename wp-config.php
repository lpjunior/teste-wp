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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'mr4g4gipuqyd9cv4');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'hd0angbfppu6b55q');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'u1a247wkltiqu43s');

/** Nome do host do MySQL */
define('DB_HOST', 'jw0ch9vofhcajqg7.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '*wqH~tK3%kbd3<Hy+UgaQ]iaXPR,b%tu}[a;4x#>SX(K>_7X6;HCy/D3#T-QOH|k');
define('SECURE_AUTH_KEY',  '~M^j!)P!~Xkj@}A8U{$c_8SW&]c|.4HTV$WTm#j3`6w>xfZfBp{yf[Zf(3JjEK!(');
define('LOGGED_IN_KEY',    ';gRUe(Ln96y.1) h0xn55:Q;.J>}`1rj*Zu5@MxMmPw_3*^WP^_0&FaGz$ +Y8vX');
define('NONCE_KEY',        '5!H@TP` WNI|@A(8zcV}51~yXG+6<i;ily2^0,nY*tiBJ-Mdn1b(5p$VTNM:?MxL');
define('AUTH_SALT',        '=.$D{&Y=}T?HnTR*KIW`x}o2&GT4{TC0ZYeXu||2`/I04A8<A<(A/~(C-0=+7]/F');
define('SECURE_AUTH_SALT', '!MU.99)-JL>OGTLOYoXHt]DI[U2{7opsr$&1VGUIKJ~23x|q<@b%mr@W]+1au`a+');
define('LOGGED_IN_SALT',   'FcedpSt j(joc72q!KDq2|q1Md-^t+okTps7eA| xzpOwh6&dqrbx0PzXn~,a|3H');
define('NONCE_SALT',       'kkIui).l=H+M4!$`S}2J>?78^gO3t>;.[P(9|x:j~L1F_Hf OSa<RItB/I^D!,%G');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
