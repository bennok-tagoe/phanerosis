<?php
/**
 * The template for displaying 404 pages (not found)
 *
 *
 * @package Phanerosis-child
 */

get_header();
?>
<div id="page-content">
	<section class="container">
	    <header>
	        <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'phanerosis' ); ?></h1>
	    </header>
	    <div class="block">
	        <div id="title-404">
	            <aside>404
	                <img src="assets/img/scissors.png" alt="">
	            </aside>
	            <h2>Page Not Found</h2>
	            <p><?php esc_html_e( 'Unfortunately the page you are looking for is not here.<br>You can go back or check these featured events or blog posts:', 'phanerosis' ); ?></p>
	        </div>
	    </div>
	</section>
</div>


<?php
get_footer();
