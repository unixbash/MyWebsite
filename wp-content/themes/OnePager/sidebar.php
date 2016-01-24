<aside>

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
		<div class="widget">
			<?php get_search_form(); ?>
		</div>
		
		<div class="widget">
			<?php wp_list_pages('title_li=<h3 class="widget-title">Pages</h3>' ); ?>
		</div>
		
		<div class="widget">
			<h3 class="widget-title">Archives</h3>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
        </div>
		
		<div class="widget">
			<h3 class="widget-title">Categories</h3>
			<ul>
			   <?php wp_list_categories('show_count=1&title_li='); ?>
			</ul>
        </div>
		
		<div class="widget">
			<h3 class="widget-title">Meta</h3>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
				<?php wp_meta(); ?>
			</ul>
    	</div>

		<div class="widget">
			<h3 class="widget-title">Subscribe</h3>
			<ul>
				<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
				<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
			</ul>
		</div>
		
	<?php endif; ?>

</aside>