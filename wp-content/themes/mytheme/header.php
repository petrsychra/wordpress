<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mytheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!--<div id="page" class="site">-->
	<!--<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mytheme' ); ?></a>-->

	<header class="navbar-fixed-top">
        <div class="navbar navbar-default">
            <div class="container" id="obere-nav">
                <ul>
                    <li>
                        <a href="/referenzen.html">Referenzen</a>
                    </li>
                    <li>
                        <a href="/ueber-uns.html">&Uuml;ber einsnulleins</a>
                    </li>
                    <li>
                        <a href="/jobs">Karriere</a>
                    </li>
                    <li class="hidden-sm hidden-md hidden-lg">
                        <a href="https://einsnulleins.de/franchise/">Franchisenehmer werden</a>
                    </li>
                </ul>
                <div class="hidden-xs" id="franchisenehmer-werden">
                    <span class="hidden-sm hidden-xs">Sie wollen sich selbstst&auml;ndig machen? &ndash; </span>
                    <a href="https://einsnulleins.de/franchise/" target="_blank" rel="noopener">Franchisenehmer werden</a>
                </div>
            </div>
			<nav class="container">
		        <div class="navbar-header row">
                    <a class="header-brand" title="Zur Startseite" href="/wordpress">
                        <img class="einsnulleins-logo" height="60px" alt="einsnulleins Logo" height="60px" src="/wordpress/wp-content/uploads/2020/07/einsnulleins.png"/>
                    </a>
                </div>
                <div class="mittlere-nav row">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <button data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-default dropdown-toggle" id="dropdownMenu1" type="button">
                                <span aria-hidden="true" class="fa fa-phone"></span>
                            </button>
                            <ul aria-labelledby="dropdownMenu1" class="dropdown-menu">
                                <li>
                                    <div>
                                        <span>Allgemeine Anfragen</span>
                                        <a onclick="ga('send', 'event', 'Kontaktanfragen','Anruf - Menü','Zentrale');" href="tel:05207 92 99 500">
                                            <em class="fa fa-phone hidden-xs hidden-sm" aria-hidden="true">&nbsp;</em>
                                            05207 92 99 500
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span>Technischer Support</span>
                                        <a onclick="ga('send', 'event', 'Kontaktanfragen','Anruf - Menü','Zentrale');" href="tel:05207 92 99 555">
                                            <em class="fa fa-phone hidden-xs hidden-sm" aria-hidden="true">&nbsp;</em>
                                            05207 92 99 555
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a onclick="ga('send', 'event', 'Kontaktanfragen','E-Mail - Menü','Zentrale');" href="mailto:info@einsnulleins.de">
                                <em class="fa fa-envelope">&nbsp;</em>
                                <span class="hidden-xs hidden-sm">info@einsnulleins.de</span>
                            </a>
                        </li>
                        <li>
                            <a class="btn btn-green franchisenehmer-search-open" onclick="ga('send', 'event', 'Funnel','Dienstleister finden','Menü');">
                                <em class="fa fa-map-marker">&nbsp;</em>
                                <span class="hidden-xs">Jetzt Standort ausw&auml;hlen</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <hr class="row"/>
                <!--<nav class="submenu row">
                    <ul id="nav-alle-dienst">
                        <li>
                            <span id="collapse-alle-dienstleistungen" title="Alle Dienstleistungen ansehen">
                                Alle Dienstleistungen
                                <em class="fa fa-chevron-down">&nbsp;</em>
                            </span>
                        </li>
                    </ul>
                    <ul class="col-sm-12 collapse" id="ene-navbar-collapse">
                        <li>
                            <a href="/wordpress/it-service">
                                <em class="fa fa-cogs">&nbsp;</em>
                                IT-Service
                            </a>
                            <ul>
                                <li>
                                    <a href="/wordpress/it-service/desktop-management">Desktop Management</a>
                                </li>
                                <li>
                                    <a href="/wordpress/it-service/server-management">Server Management</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/wordpress/it-sicherheit">
                                <em class="fa fa-shield">&nbsp;</em>
                                IT-Sicherheit
                            </a>
                            <ul>
                                <li>
                                    <a href="/wordpress/it-sicherheit/anti-virus-management">Anti-Virus Management</a>
                                </li>
                                <li>
                                    <a href="/wordpress/it-sicherheit/backup-management">Backup Management</a>
                                </li>
                                <li>
                                    <a href="/wordpress/it-sicherheit/firewall-management">Firewall Management</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/wordpress/it-infrastruktur">
                                <em class="fa fa-code-fork">&nbsp;</em>
                                IT-Infrastruktur
                            </a>
                            <ul>
                                <li>
                                    <a href="/wordpress/it-infrastruktur/it-infrastrukturanalyse">IT-Infrastrukturanalyse</a>
                                </li>
                                <li>
                                    <a href="/wordpress/it-infrastruktur/vermietung-von-arbeitsplaetzen">Vermietung von Arbeitspl&auml;tzen</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/wordpress/cloud-losungen">
                                <em class="fa fa-cloud">&nbsp;</em>
                                Cloud-L&ouml;sungen
                            </a>
                            <ul>
                                <li>
                                    <a href="/wordpress/cloud-losungen/email-archivierung">E-Mail-Archivierung</a>
                                </li>
                                <li>
                                    <a href="/wordpress/cloud-losungen/server-in-der-cloud">Server in der Cloud</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>-->              
			<nav class="submenu row">
                    <ul id="nav-alle-dienst">
                        <li>
                            <span id="collapse-alle-dienstleistungen" title="Alle Dienstleistungen ansehen">
                                Alle Dienstleistungen
                                <em class="fa fa-chevron-down">&nbsp;</em>
                            </span>
                        </li>
                    </ul>
				<?php
				#wp_nav_menu(
				#	array(
				#		'theme_location' => 'menu-1',
				#		'menu_id'        => 'primary-menu',
				#	)
				#);
				?>
				<?php
				wp_nav_menu( array( 
				    'theme_location' => 'my-custom-menu') ); 
				?>

			</nav><!-- #site-navigation -->
		</nav>
	</header><!-- #masthead -->
