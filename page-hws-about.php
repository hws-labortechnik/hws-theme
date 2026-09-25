<?php
/**
 * Template Name: HWS About
 * Description: About HWS Labortechnik (EN/DE). Body copy is version-controlled in template-parts/about/.
 *
 * v3.1 2026-09-25 — spec: Qualmia/citehelm clients/hws/remediation/07-about-us-de-en.md
 * - DE body when TranslatePress serves German ($TRP_LANGUAGE === 'de_DE'), EN otherwise (incl. FR/PT/ES).
 * - The whole body sits in data-no-translation, so TranslatePress never retranslates either version.
 * - Scoped CSS only (.hws-about); the precompiled Tailwind build has no Typography plugin.
 * - JSON-LD reuses Yoast's Organization @id instead of declaring a competing entity.
 * Deliberately NOT named page-about.php: WordPress would auto-apply that to page 71 (/about/).
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

global $TRP_LANGUAGE;
$hws_about_lang = ( isset( $TRP_LANGUAGE ) && 'de_DE' === $TRP_LANGUAGE ) ? 'de' : 'en';

/*
 * Reserved image slots — a <figure> renders only when a URL is set. All empty until HWS supplies photos.
 * Alt text / captions are per language.
 */
$GLOBALS['hws_about_images'] = array(
	'hans-wilhelm' => array( 'url' => '', 'alt' => array( 'en' => 'Hans Wilhelm Schmidt', 'de' => 'Hans Wilhelm Schmidt' ) ),
	'rainer'       => array( 'url' => '', 'alt' => array( 'en' => 'Dr. Rainer Schmidt', 'de' => 'Dr. Rainer Schmidt' ) ),
	'hans-martin'  => array( 'url' => '', 'alt' => array( 'en' => 'Hans-Martin Schmidt', 'de' => 'Hans-Martin Schmidt' ) ),
	'workshop'     => array( 'url' => '', 'alt' => array( 'en' => 'The HWS glassblowing workshop in Mainz', 'de' => 'Die HWS-Glasbläserei in Mainz' ) ),
);
$GLOBALS['hws_about_lang'] = $hws_about_lang;

if ( ! function_exists( 'hws_about_figure' ) ) {
	/** Print a figure for an image slot, or nothing if the slot has no URL. */
	function hws_about_figure( $key ) {
		$slots = isset( $GLOBALS['hws_about_images'] ) ? $GLOBALS['hws_about_images'] : array();
		if ( empty( $slots[ $key ]['url'] ) ) {
			return;
		}
		$lang = $GLOBALS['hws_about_lang'];
		printf(
			'<figure class="hws-about__figure"><img src="%s" alt="%s" loading="lazy" decoding="async"></figure>',
			esc_url( $slots[ $key ]['url'] ),
			esc_attr( $slots[ $key ]['alt'][ $lang ] )
		);
	}
}

/* ---- JSON-LD ------------------------------------------------------------------------------ */
$hws_site   = 'https://www.hws-mainz.de/';
$hws_org_id = $hws_site . '#organization';                       // Yoast's Organization @id (verified 2026-09-25)
$hws_path   = wp_parse_url( get_permalink(), PHP_URL_PATH );
$hws_url    = untrailingslashit( $hws_site ) . ( 'de' === $hws_about_lang ? '/de' : '' ) . ( $hws_path ? $hws_path : '/' );

$hws_ld = array(
	'@context' => 'https://schema.org',
	'@graph'   => array(
		array(
			'@type'      => 'AboutPage',
			'@id'        => $hws_url,                                // same @id Yoast uses for this page's WebPage node
			'url'        => $hws_url,
			'name'       => 'de' === $hws_about_lang ? 'Über HWS Labortechnik' : 'About HWS Labortechnik',
			'inLanguage' => $hws_about_lang,
			'isPartOf'   => array( '@id' => $hws_site . '#website' ),
			'about'      => array( '@id' => $hws_org_id ),
			'mainEntity' => array( '@id' => $hws_org_id ),
			'citation'   => array(
				'https://patents.google.com/patent/DE1777550U/de',
				'https://patents.google.com/patent/DE1965991U/de',
				'https://d-nb.info/840925476',
				'https://pubmed.ncbi.nlm.nih.gov/7228939/',
				'https://pubmed.ncbi.nlm.nih.gov/7263805/',
				'https://academic.oup.com/jat/issue/8/1',
				'https://link.springer.com/article/10.1007/BF03191951',
				'https://link.springer.com/article/10.1007/BF03192033',
				'https://patents.google.com/patent/DE3345196A1/en',
				'https://www.mycotoxin.de/mycotoxin-research',
				'https://www.inchem.org/documents/ehc/ehc/ehc105.htm',
				'https://patents.google.com/patent/DE9105761U1/en',
				'https://cordis.europa.eu/project/id/BRST985481',
			),
		),
		array(   // adds to Yoast's node (same @id); no competing Organization
			'@type'        => 'Organization',
			'@id'          => $hws_org_id,
			'legalName'    => 'HWS Hans W. Schmidt GmbH & Co. KG',
			'foundingDate' => '1941',
			'founder'      => array( '@id' => $hws_site . '#/schema/person/hans-wilhelm-schmidt' ),
		),
		array(
			'@type'         => 'Person',
			'@id'           => $hws_site . '#/schema/person/hans-wilhelm-schmidt',
			'name'          => 'Hans Wilhelm Schmidt',
			'alternateName' => 'Hans W. Schmidt',
		),
		array(
			'@type'       => 'Person',
			'@id'         => $hws_site . '#/schema/person/dr-rainer-schmidt',   // same stable @id as hws-schema.php
			'name'        => 'Dr. Rainer Schmidt',
			'jobTitle'    => 'Scientific Advisor',
			'affiliation' => array( '@id' => $hws_org_id ),
		),
		array(
			'@type'         => 'Person',
			'@id'           => $hws_site . '#/schema/person/hans-martin-schmidt',
			'name'          => 'Hans-Martin Schmidt',
			'alternateName' => 'Martin Schmidt',
			'jobTitle'      => 'CEO',
			'worksFor'      => array( '@id' => $hws_org_id ),
		),
	),
);

get_header();
?>
<style>
.hws-about{font-family:Roboto,ui-sans-serif,system-ui,sans-serif;color:#000;background:#f2f3f3}
.hws-about__inner{max-width:860px;margin:0 auto;padding:140px 24px 96px}
.hws-about h1{font-size:2.5rem;line-height:1.2;font-weight:300;margin:0 0 2rem}
.hws-about h2{font-size:1.75rem;line-height:1.3;font-weight:300;margin:3rem 0 1rem;padding-top:1.5rem;border-top:1px solid #d4d7d7}
.hws-about h3{font-size:1.25rem;line-height:1.4;font-weight:500;margin:2rem 0 .75rem}
.hws-about p{font-size:1.0625rem;line-height:1.75;font-weight:400;color:#1a1a1a;margin:0 0 1.1rem}
.hws-about em{font-style:italic}
.hws-about strong{font-weight:500}
.hws-about a{color:#000;text-decoration:underline;text-decoration-thickness:1px;text-underline-offset:3px;text-decoration-color:#8a8f8f;overflow-wrap:anywhere}
.hws-about a:hover,.hws-about a:focus{color:#4f4f4f;text-decoration-color:#000}
.hws-about__table{overflow-x:auto;-webkit-overflow-scrolling:touch;margin:1rem 0 1.5rem;border:1px solid #cfd3d3;border-radius:6px;background:#fff}
.hws-about table{width:100%;border-collapse:collapse;font-size:1rem;line-height:1.6}
.hws-about th,.hws-about td{border-bottom:1px solid #e1e4e4;padding:.7rem .9rem;text-align:left;vertical-align:top}
.hws-about tr:last-child td{border-bottom:0}
.hws-about th{background:#e9ebeb;font-weight:500}
.hws-about td:first-child{min-width:4.5em}
.hws-about__figure{margin:1rem 0 1.5rem}
.hws-about__figure img{display:block;max-width:100%;height:auto;border-radius:6px}
@media (max-width:767px){
.hws-about__inner{padding:110px 16px 64px}
.hws-about h1{font-size:2rem}
.hws-about h2{font-size:1.5rem;margin-top:2.25rem}
.hws-about p{font-size:1rem;line-height:1.7}
.hws-about table{font-size:.9375rem}
.hws-about th,.hws-about td{padding:.6rem .7rem}
}
</style>
<main>
<div class="hws-about" data-no-translation lang="<?php echo esc_attr( $hws_about_lang ); ?>">
<script type="application/ld+json"><?php echo wp_json_encode( $hws_ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ); ?></script>
<article class="hws-about__inner">
<?php get_template_part( 'template-parts/about/about', $hws_about_lang ); ?>
</article>
</div>
</main>
<?php get_footer(); ?>
