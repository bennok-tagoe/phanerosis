<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 *
 * @package Phanerosis
 */

?>
</div>
        <footer id="page-footer">
            <div class="inner">
                <div class="footer-bottom">
                    <div class="container">
                        <span class="left"><?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'phanerosis' ), 'phanerosis', '<a href="http://phanet.net/">Phanerosis Prayer Network International</a>' );
				?></span>
                            <span class="right">
                                <a href="#page-top" class="to-top roll"><i class="fa fa-angle-up"></i></a>
                            </span>
                    </div>
                </div>
                <!--/.footer-bottom-->
            </div>
        </footer>
        <!--end Page Footer-->
    </div>
    <!-- end Inner Wrapper -->
</div>
<!-- end Outer Wrapper-->

<script>
    $(window).load(function(){
        var rtl = false; // Use RTL
        initializeOwl(rtl);
    });
</script>

<!--[if lte IE 9]>
<script type="text/javascript" src="assets/js/ie-scripts.js"></script>
<![endif]-->
</body>
</html>