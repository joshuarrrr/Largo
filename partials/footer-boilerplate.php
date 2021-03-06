<div id="boilerplate">
	<div class="row-fluid clearfix">
		<div class="span9">
			<ul id="footer-social" class="social-icons">
				<?php largo_social_links(); ?>
			</ul>
		</div>

		<?php if (INN_MEMBER) { ?>
		<div class="span3">
			<a href="//inn.org/">
				<img id="inn-logo" src="<?php echo(get_template_directory_uri() . "/img/inn_logo_reversetype.png"); ?>" alt="<?php printf(__("%s is a member of the Institute for Nonprofit News", "largo"), get_bloginfo('name')); ?>" />
			</a>
			<?php if ( of_get_option('inn_member_since') ) { ?>
			<p id="mobile-member-since" class="visible-phone"><?php printf(__("Proud member since %s", "largo"), of_get_option('inn_member_since') ); ?></p>
			<?php } ?>
		</div>
		<?php } ?>
	</div>

	<div class="row-fluid clearfix">
		<div class="span9">
			<div class="footer-bottom clearfix">

				<!-- If you enjoy this theme and use it on a production site we would appreciate it if you would leave the credit in place. Thanks :) -->
				<p class="footer-credit"><?php largo_copyright_message(); ?></p>
				<p class="footer-credit"><?php printf( __('This site built with <a href="%s">Project Largo</a> from <a href="%s">INN</a> and proudly powered by <a href="%s" rel="nofollow">WordPress</a>.', 'largo'),
						'http://largoproject.org',
						'http://inn.org',
						'http://wordpress.org'
					 );
				?></p>
			</div>
		</div>
		<div class="span3">
			<?php if ( INN_MEMBER && of_get_option('inn_member_since') ) { ?>
			<p class="hidden-phone"><?php printf(__("Proud member since %s", "largo"), of_get_option('inn_member_since') ); ?></p>
			<?php } ?>
		</div>
	</div>

	<div class="row-fluid clearfix">
		<div class="span12">
			<p class="back-to-top"><a href="#top"><?php _e('Back to top', 'largo'); ?> &uarr;</a></p>
			<?php largo_nav_menu(
				array(
					'theme_location' => 'footer-bottom',
					'container' => false,
					'depth' => 1
				) );
			?>
		</div>
	</div>
</div>
