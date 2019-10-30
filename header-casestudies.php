<?php

/**

 * Displays the head section of the theme

 *

 * @package Omega

 * @subpackage Frontend

 * @since 0.1

 *

 * @copyright (c) 2014 Oxygenna.com

 * @license http://wiki.envato.com/support/legal-terms/licensing-terms/

 * @version 1.16.0

 */

?><!DOCTYPE html>

<!--[if IE 8 ]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->

<!--[if IE 9 ]> <html <?php language_attributes(); ?> class="ie9"> <![endif]-->

<!--[if gt IE 9]> <html <?php language_attributes(); ?>> <![endif]-->

<!--[if !IE]> <!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

    <head>
    
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TRP7VH2');</script>
<!-- End Google Tag Manager -->

        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <title><?php wp_title( '|', true, 'right' ); ?></title>

        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />



        <?php oxy_add_apple_icons( 'iphone_icon' ); ?>

        <?php oxy_add_apple_icons( 'iphone_retina_icon', '114x114' ); ?>

        <?php oxy_add_apple_icons( 'ipad_icon', '72x72' ); ?>

        <?php oxy_add_apple_icons( 'ipad_retina_icon', '144x144' ); ?>

        <link rel="shortcut icon" href="<?php echo oxy_get_option( 'favicon' ); ?>">



        <?php wp_head(); ?>

		<script async defer src="//assets.pinterest.com/js/pinit.js"></script>

<meta name="google-site-verification" content="d9A6WC2M--H2Hznh0yav4mUh8Tu4OT0GPy1soO7f0W8" />

<!-- Hotjar Tracking Code for https://www.thamesvalleylandscapes.co.uk/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1331444,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>


    </head>

    <body <?php body_class('transparent-header'); ?> >
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRP7VH2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<script type="text/javascript" src="http://www.qlzn6i1l.com/js/128768.js" ></script>

<noscript><img alt="" src="http://www.qlzn6i1l.com/128768.png" style="display:none;" /></noscript>

        <div class="pace-overlay"></div>

        <?php immedia_output_transparent_logo(); ?>
		
        <?php oxy_create_nav(); ?>

        <div id="content" role="main">