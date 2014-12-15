<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package my-simone
 */
?>

	</div><!-- #content -->    
    
    <div id="footer">
        <ul>
            <li>legal</li>
            <li><?php wp_loginout(); ?></li>
            <li>careers</li> 
        </ul>
    </div>
</div><!-- wrapper -->
<?php wp_footer(); ?>
</body>
</html>


