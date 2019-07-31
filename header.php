<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Project Title</title>
	<link media="all" rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
	<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.3.1.min.js" defer><\/script>')</script>
	<script src="<?php echo get_template_directory_uri() ?>/js/jquery.main.js" defer></script>
	<script src="<?php echo get_template_directory_uri() ?>/js/slick.js" defer></script>
</head>
<?php
$body_class = [];
if ( is_front_page() ) {
    $body_class[] = 'front-page';
}
global $post;
$body_class[] = $post->post_type;
$body_class[] = "post-{$post->ID}";
$body_class_attr = ( !empty($body_class) ) ? ' class="'. implode( ' ', $body_class ) . '"' : '';
?>
<body<?php echo $body_class_attr ?>>
	<div id="wrapper">
		<header id="header" class="header">
		    <div class="wrap wrap-1628">
                <div class="header-box" id="header-box" style="">
                    <strong class="header-logo">
                        <?php if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        } ?>
                    </strong>
                    <nav class="menu">
                        <a href="#" class="nav-opener">
                            <div class="nav-opener-icon">
                                <div class="line line_1"></div>
                                <div class="line line_2"></div>
                                <div class="line line_3"></div>
                            </div>
                        </a>
                        <div class="header-list-drop">
                            <ul class="header-list anchor-list">
                            	<li class="header-list-item"><a class="header-list-link" href="#event-header">Home</a></li>
                            	<li class="header-list-item"><a class="header-list-link" href="#event-main">Agenda</a></li>
                            	<li class="header-list-item"><a class="header-list-link" href="#timeline">Timeline</a></li>
                            	<li class="header-list-item"><a class="header-list-link" href="#event-footer">We are here</a></li>
	                        </ul>
	                    </div>
                    </nav>
                </div>
            </div>
		</header>