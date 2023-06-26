<?php
    /**/
?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Ecoremont</title>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/css/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/adap320.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/adap1000.css">
		<style type="text/css">
			@font-face {
        		font-family: "Century Gothic";
        		src: url("<?php echo get_template_directory_uri(); ?>/fonts/GOTHIC.woff");
				font-weight:400;
      		}
			@font-face {
        		font-family: "Century Gothic";
        		src: url("<?php echo get_template_directory_uri(); ?>/fonts/GOTHICB.woff");
				font-weight:700;
      		}
			@font-face {
        		font-family: "Kharkiv Tone";
        		src: url("<?php echo get_template_directory_uri(); ?>/fonts/KharkivTone.woff");
				font-weight:400;
      		}
			@font-face {
        		font-family: "Gilroy";
        		src: url("<?php echo get_template_directory_uri(); ?>/fonts/gilroy-regular.woff");
				font-weight:400;
      		}
		</style>
    </head>
    <body style="background-image: url('<?php the_field('headerbackground'); ?>')">
        <header class="header">
            <img src="<?php the_field('logo'); ?>" class="ecoremontlogoheader">
            <div class="number">
                <a class="text2" style="text-decoration: none" href="tel: +77081821062">+7 (708) 182-10-62</a>
                <div class="text2" style="opacity: 70%; text-align: right; ">г.Алматы</div>
            </div>
        </header>

