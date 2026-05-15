<?php
/**
 * Plugin Name:       Howdy World
 * Plugin URI:        https://wordpress.org/plugins/howdy-world/
 * Description:       Replaces the "Howdy" greeting in the WordPress admin toolbar with a randomly selected greeting from dozens of languages around the world.
 * Version:           1.0.3
 * Requires at least: 5.0
 * Requires PHP:      7.2
 * Author:            topher1kenobe
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       howdy-world
 *
 * @package HowdyWorld
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'HOWDY_WORLD_VERSION', '1.0.3' );
define( 'HOWDY_WORLD_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

/**
 * Returns the full list of greetings in various languages.
 * Each entry: [ 'greeting' => string, 'language' => string, 'native' => string ]
 *
 * @return array
 */
function howdy_world_get_greetings() {
	return array(
		array(
			'greeting' => 'Howdy',
			'language' => 'English (Texan)',
			'native'   => 'Howdy',
		),
		array(
			'greeting' => 'Hello',
			'language' => 'English',
			'native'   => 'Hello',
		),
		array(
			'greeting' => 'Hola',
			'language' => 'Spanish',
			'native'   => 'Hola',
		),
		array(
			'greeting' => 'Bonjour',
			'language' => 'French',
			'native'   => 'Bonjour',
		),
		array(
			'greeting' => 'Hallo',
			'language' => 'German',
			'native'   => 'Hallo',
		),
		array(
			'greeting' => 'Ciao',
			'language' => 'Italian',
			'native'   => 'Ciao',
		),
		array(
			'greeting' => 'Olá',
			'language' => 'Portuguese',
			'native'   => 'Olá',
		),
		array(
			'greeting' => 'Привет',
			'language' => 'Russian',
			'native'   => 'Привет',
		),
		array(
			'greeting' => '你好',
			'language' => 'Mandarin Chinese',
			'native'   => '你好',
		),
		array(
			'greeting' => 'こんにちは',
			'language' => 'Japanese',
			'native'   => 'こんにちは',
		),
		array(
			'greeting' => '안녕하세요',
			'language' => 'Korean',
			'native'   => '안녕하세요',
		),
		array(
			'greeting' => 'مرحبا',
			'language' => 'Arabic',
			'native'   => 'مرحبا',
		),
		array(
			'greeting' => 'नमस्ते',
			'language' => 'Hindi',
			'native'   => 'नमस्ते',
		),
		array(
			'greeting' => 'Hej',
			'language' => 'Swedish',
			'native'   => 'Hej',
		),
		array(
			'greeting' => 'Hej',
			'language' => 'Danish',
			'native'   => 'Hej',
		),
		array(
			'greeting' => 'Hei',
			'language' => 'Finnish',
			'native'   => 'Hei',
		),
		array(
			'greeting' => 'Hallo',
			'language' => 'Dutch',
			'native'   => 'Hallo',
		),
		array(
			'greeting' => 'Ahoj',
			'language' => 'Czech',
			'native'   => 'Ahoj',
		),
		array(
			'greeting' => 'Cześć',
			'language' => 'Polish',
			'native'   => 'Cześć',
		),
		array(
			'greeting' => 'Szia',
			'language' => 'Hungarian',
			'native'   => 'Szia',
		),
		array(
			'greeting' => 'Γεια σου',
			'language' => 'Greek',
			'native'   => 'Γεια σου',
		),
		array(
			'greeting' => 'Merhaba',
			'language' => 'Turkish',
			'native'   => 'Merhaba',
		),
		array(
			'greeting' => 'Shalom',
			'language' => 'Hebrew',
			'native'   => 'שלום',
		),
		array(
			'greeting' => 'Salut',
			'language' => 'Romanian',
			'native'   => 'Salut',
		),
		array(
			'greeting' => 'Zdravo',
			'language' => 'Serbian',
			'native'   => 'Здраво',
		),
		array(
			'greeting' => 'Ahoj',
			'language' => 'Slovak',
			'native'   => 'Ahoj',
		),
		array(
			'greeting' => 'Pozdrav',
			'language' => 'Bulgarian',
			'native'   => 'Поздрав',
		),
		array(
			'greeting' => 'Sveiki',
			'language' => 'Latvian',
			'native'   => 'Sveiki',
		),
		array(
			'greeting' => 'Labas',
			'language' => 'Lithuanian',
			'native'   => 'Labas',
		),
		array(
			'greeting' => 'Tere',
			'language' => 'Estonian',
			'native'   => 'Tere',
		),
		array(
			'greeting' => 'Sawubona',
			'language' => 'Zulu',
			'native'   => 'Sawubona',
		),
		array(
			'greeting' => 'Jambo',
			'language' => 'Swahili',
			'native'   => 'Jambo',
		),
		array(
			'greeting' => 'Sannu',
			'language' => 'Hausa',
			'native'   => 'Sannu',
		),
		array(
			'greeting' => 'Moni',
			'language' => 'Chichewa',
			'native'   => 'Moni',
		),
		array(
			'greeting' => 'Dumela',
			'language' => 'Setswana',
			'native'   => 'Dumela',
		),
		array(
			'greeting' => 'Salaam',
			'language' => 'Persian (Farsi)',
			'native'   => 'سلام',
		),
		array(
			'greeting' => 'Salam',
			'language' => 'Azerbaijani',
			'native'   => 'Salam',
		),
		array(
			'greeting' => 'Salom',
			'language' => 'Uzbek',
			'native'   => 'Salom',
		),
		array(
			'greeting' => 'Sәlem',
			'language' => 'Kazakh',
			'native'   => 'Сәлем',
		),
		array(
			'greeting' => 'Salam',
			'language' => 'Kyrgyz',
			'native'   => 'Салам',
		),
		array(
			'greeting' => 'Pryvit',
			'language' => 'Ukrainian',
			'native'   => 'Привіт',
		),
		array(
			'greeting' => 'Vitaju',
			'language' => 'Belarusian',
			'native'   => 'Вітаю',
		),
		array(
			'greeting' => 'Gamarjoba',
			'language' => 'Georgian',
			'native'   => 'გამარჯობა',
		),
		array(
			'greeting' => 'Barev',
			'language' => 'Armenian',
			'native'   => 'Բարեւ',
		),
		array(
			'greeting' => 'Salam',
			'language' => 'Albanian',
			'native'   => 'Salam',
		),
		array(
			'greeting' => 'Dobar dan',
			'language' => 'Croatian',
			'native'   => 'Dobar dan',
		),
		array(
			'greeting' => 'Pozdravljeni',
			'language' => 'Slovenian',
			'native'   => 'Pozdravljeni',
		),
		array(
			'greeting' => 'Dia dhuit',
			'language' => 'Irish',
			'native'   => 'Dia dhuit',
		),
		array(
			'greeting' => 'Shwmae',
			'language' => 'Welsh',
			'native'   => 'Shwmae',
		),
		array(
			'greeting' => 'Moien',
			'language' => 'Luxembourgish',
			'native'   => 'Moien',
		),
		array(
			'greeting' => 'Hallo',
			'language' => 'Afrikaans',
			'native'   => 'Hallo',
		),
		array(
			'greeting' => 'Kaixo',
			'language' => 'Basque',
			'native'   => 'Kaixo',
		),
		array(
			'greeting' => 'Hola',
			'language' => 'Catalan',
			'native'   => 'Hola',
		),
		array(
			'greeting' => 'Saluton',
			'language' => 'Esperanto',
			'native'   => 'Saluton',
		),
		array(
			'greeting' => 'Aloha',
			'language' => 'Hawaiian',
			'native'   => 'Aloha',
		),
		array(
			'greeting' => 'Aaniin',
			'language' => 'Ojibwe',
			'native'   => 'Aaniin',
		),
		array(
			'greeting' => 'Halito',
			'language' => 'Choctaw',
			'native'   => 'Halito',
		),
		array(
			'greeting' => 'Osiyo',
			'language' => 'Cherokee',
			'native'   => 'ᎣᏏᏲ',
		),
		array(
			'greeting' => "Ya'at'eeh",
			'language' => 'Navajo',
			'native'   => "Yá'át'ééh",
		),
		array(
			'greeting' => 'Boozhoo',
			'language' => 'Anishinaabe',
			'native'   => 'Boozhoo',
		),
		array(
			'greeting' => 'God dag',
			'language' => 'Norwegian',
			'native'   => 'God dag',
		),
		array(
			'greeting' => 'Habari',
			'language' => 'Swahili (formal)',
			'native'   => 'Habari',
		),
		array(
			'greeting' => 'Namaskar',
			'language' => 'Bengali',
			'native'   => 'নমস্কার',
		),
		array(
			'greeting' => 'Vanakkam',
			'language' => 'Tamil',
			'native'   => 'வணக்கம்',
		),
		array(
			'greeting' => 'Namaskara',
			'language' => 'Kannada',
			'native'   => 'ನಮಸ್ಕಾರ',
		),
		array(
			'greeting' => 'Namaskaram',
			'language' => 'Telugu',
			'native'   => 'నమస్కారం',
		),
		array(
			'greeting' => 'Namaskar',
			'language' => 'Marathi',
			'native'   => 'नमस्कार',
		),
		array(
			'greeting' => 'Sat Sri Akal',
			'language' => 'Punjabi',
			'native'   => 'ਸਤ ਸ੍ਰੀ ਅਕਾਲ',
		),
		array(
			'greeting' => 'Ndewo',
			'language' => 'Igbo',
			'native'   => 'Ndewo',
		),
		array(
			'greeting' => 'Akwaaba',
			'language' => 'Akan/Twi',
			'native'   => 'Akwaaba',
		),
		array(
			'greeting' => 'Malo',
			'language' => 'Tongan',
			'native'   => 'Malo',
		),
		array(
			'greeting' => 'Bula',
			'language' => 'Fijian',
			'native'   => 'Bula',
		),
		array(
			'greeting' => 'Talofa',
			'language' => 'Samoan',
			'native'   => 'Talofa',
		),
		array(
			'greeting' => 'Ia ora na',
			'language' => 'Tahitian',
			'native'   => 'Ia ora na',
		),
		array(
			'greeting' => 'Kia ora',
			'language' => 'Maori',
			'native'   => 'Kia ora',
		),
		array(
			'greeting' => "G'day",
			'language' => 'Australian English',
			'native'   => "G'day",
		),
		array(
			'greeting' => 'Kamusta',
			'language' => 'Filipino/Tagalog',
			'native'   => 'Kamusta',
		),
		array(
			'greeting' => 'Helo',
			'language' => 'Malay',
			'native'   => 'Helo',
		),
		array(
			'greeting' => 'Halo',
			'language' => 'Indonesian',
			'native'   => 'Halo',
		),
		array(
			'greeting' => 'Sawadee',
			'language' => 'Thai',
			'native'   => 'สวัสดี',
		),
		array(
			'greeting' => 'Xin chao',
			'language' => 'Vietnamese',
			'native'   => 'Xin chào',
		),
		array(
			'greeting' => 'Mingalaba',
			'language' => 'Burmese',
			'native'   => 'မင်္ဂလာပါ',
		),
		array(
			'greeting' => 'Susaday',
			'language' => 'Khmer',
			'native'   => 'សួស្ដី',
		),
		array(
			'greeting' => 'Sabaidee',
			'language' => 'Lao',
			'native'   => 'ສະບາຍດີ',
		),
		array(
			'greeting' => 'Tashi Delek',
			'language' => 'Tibetan',
			'native'   => 'བཀྲ་ཤིས་བདེ་ལེགས',
		),
		array(
			'greeting' => 'Sain baina uu',
			'language' => 'Mongolian',
			'native'   => 'Сайн байна уу',
		),
		array(
			'greeting' => 'Salam',
			'language' => 'Kurdish',
			'native'   => 'سڵاو',
		),
		array(
			'greeting' => 'Marhaba',
			'language' => 'Lebanese Arabic',
			'native'   => 'مرحبا',
		),
		array(
			'greeting' => 'Zdravstvuyte',
			'language' => 'Russian (formal)',
			'native'   => 'Здравствуйте',
		),
		array(
			'greeting' => 'Guten Tag',
			'language' => 'German (formal)',
			'native'   => 'Guten Tag',
		),
		array(
			'greeting' => 'Kon\'nichiwa',
			'language' => 'Japanese (romaji)',
			'native'   => 'こんにちは',
		),
		array(
			'greeting' => 'Ni hao',
			'language' => 'Mandarin (pinyin)',
			'native'   => '你好',
		),
		array(
			'greeting' => 'Annyeong',
			'language' => 'Korean (casual)',
			'native'   => '안녕',
		),
		array(
			'greeting' => 'Terve',
			'language' => 'Finnish (casual)',
			'native'   => 'Terve',
		),
		array(
			'greeting' => 'Salve',
			'language' => 'Latin',
			'native'   => 'Salve',
		),
		array(
			'greeting' => 'Ave',
			'language' => 'Latin (classical)',
			'native'   => 'Ave',
		),
		array(
			'greeting' => 'Yassas',
			'language' => 'Greek (formal)',
			'native'   => 'Γεια σας',
		),
		array(
			'greeting' => 'Iyi gunler',
			'language' => 'Turkish (formal)',
			'native'   => 'İyi günler',
		),
		array(
			'greeting' => 'Zdravo',
			'language' => 'Macedonian',
			'native'   => 'Здраво',
		),
		array(
			'greeting' => 'Bok',
			'language' => 'Croatian (casual)',
			'native'   => 'Bok',
		),
		array(
			'greeting' => 'Hei hei',
			'language' => 'Icelandic',
			'native'   => 'Hei hei',
		),
		array(
			'greeting' => 'Hallo',
			'language' => 'Norwegian (casual)',
			'native'   => 'Hallo',
		),
	);
}

/**
 * Picks a random greeting. A transient keyed to the request time keeps the
 * greeting stable across any AJAX calls that happen during the same page load.
 *
 * @return array  Keys: greeting, language, native.
 */
function howdy_world_get_random_greeting() {
	$greetings = howdy_world_get_greetings();

	// Static variable: pick once per PHP request, never persist to the
	// database. Every full page load gets a fresh random pick; multiple
	// hooks/filters within the same load all see the same greeting.
	static $chosen = null;

	if ( null === $chosen ) {
		$chosen = $greetings[ array_rand( $greetings ) ];
	}

	return $chosen;
}

/**
 * Replace the greeting via the gettext filter.
 * Catches the string before it is rendered on English installs.
 *
 * @param string $translated_text  Translated text.
 * @param string $text             Original text.
 * @param string $domain           Text domain.
 * @return string
 */
function howdy_world_filter_greeting( $translated_text, $text, $domain ) {
	if ( 'default' === $domain && false !== strpos( $text, 'Howdy' ) && false !== strpos( $text, '%1$s' ) ) {
		$chosen          = howdy_world_get_random_greeting();
		$translated_text = $chosen['greeting'] . ', %1$s!';
	}
	return $translated_text;
}
add_filter( 'gettext', 'howdy_world_filter_greeting', 10, 3 );

/**
 * Directly manipulate the admin toolbar node as a belt-and-suspenders
 * approach. This fires after the toolbar is built and rewrites the
 * greeting text regardless of how WordPress translated it.
 *
 * Covers: non-English WP installs, language packs, and any WP version
 * that changed the exact greeting string.
 */
function howdy_world_replace_toolbar_greeting() {
	global $wp_admin_bar;

	if ( ! is_object( $wp_admin_bar ) ) {
		return;
	}

	$chosen = howdy_world_get_random_greeting();

	// The "my-account" node holds the display name + greeting.
	$my_account = $wp_admin_bar->get_node( 'my-account' );
	if ( ! $my_account ) {
		return;
	}

	$current_user = wp_get_current_user();
	$display_name = $current_user->display_name;

	// Build the new title, preserving the avatar markup if present.
	$title = $my_account->title;

	// Strip any existing greeting text that precedes the avatar/name span.
	// WP wraps the display name in <span class="display-name">.
	$new_greeting = esc_html( $chosen['greeting'] ) . ', ';

	// Replace whatever greeting text is there (Howdy/Hello/translated).
	// The display name appears inside a <span class="display-name"> element.
	$title = preg_replace(
		'/^[^<]+(?=<span|' . preg_quote( esc_html( $display_name ), '/' ) . ')/',
		$new_greeting,
		$title
	);

	// If the title has no spans (plain text fallback), do a simpler replace.
	if ( $title === $my_account->title ) {
		$escaped_name = preg_quote( esc_html( $display_name ), '/' );
		$title        = preg_replace(
			'/^.+?' . $escaped_name . '/',
			$new_greeting . esc_html( $display_name ),
			$my_account->title
		);
	}

	// Only update if we actually changed something.
	if ( $title && $title !== $my_account->title ) {
		$wp_admin_bar->add_node(
			array(
				'id'    => 'my-account',
				'title' => $title,
			)
		);
	}
}
add_action( 'wp_before_admin_bar_render', 'howdy_world_replace_toolbar_greeting', 99 );

/**
 * Add a Settings link on the Plugins list page.
 *
 * @param array $links Existing plugin action links.
 * @return array
 */
function howdy_world_plugin_action_links( $links ) {
	$settings_link = sprintf(
		'<a href="%s">%s</a>',
		esc_url( admin_url( 'options-general.php?page=howdy-world' ) ),
		esc_html__( 'Settings', 'howdy-world' )
	);
	array_unshift( $links, $settings_link );
	return $links;
}
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'howdy_world_plugin_action_links' );

// ── Settings page ─────────────────────────────────────────────────────────────

/**
 * Register the Settings sub-menu page.
 */
function howdy_world_admin_menu() {
	add_options_page(
		__( 'Howdy World Settings', 'howdy-world' ),
		__( 'Howdy World', 'howdy-world' ),
		'manage_options',
		'howdy-world',
		'howdy_world_settings_page'
	);
}
add_action( 'admin_menu', 'howdy_world_admin_menu' );

/**
 * Render the settings / reference page.
 */
function howdy_world_settings_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	$greetings = howdy_world_get_greetings();
	?>
	<div class="wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<p><?php esc_html_e( 'A random greeting from this list appears in your admin toolbar on every page load.', 'howdy-world' ); ?></p>

		<h2>
			<?php esc_html_e( 'All Supported Greetings', 'howdy-world' ); ?>
			<span style="font-weight:normal;font-size:14px;color:#666;">
				(<?php echo count( $greetings ); ?> <?php esc_html_e( 'languages', 'howdy-world' ); ?>)
			</span>
		</h2>
		<table class="widefat striped" style="max-width:680px;">
			<thead>
				<tr>
					<th><?php esc_html_e( 'Language', 'howdy-world' ); ?></th>
					<th><?php esc_html_e( 'Greeting (Latin)', 'howdy-world' ); ?></th>
					<th><?php esc_html_e( 'Native Script', 'howdy-world' ); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ( $greetings as $g ) : ?>
				<tr>
					<td><?php echo esc_html( $g['language'] ); ?></td>
					<td><?php echo esc_html( $g['greeting'] ); ?></td>
					<td><?php echo esc_html( $g['native'] ); ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<?php
}
