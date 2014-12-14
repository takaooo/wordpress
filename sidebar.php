<div id="sidebar">
<h2 ><?php _e('Categories'); ?></h2>
<ul >
<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
</ul>
<h2 ><?php _e('Archives'); ?></h2>
<ul >
<?php wp_get_archives('type=monthly'); ?>
</ul>
<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'my-simone' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>
</div>