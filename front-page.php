<?php get_header(); ?>
<!-- **************top of frontpage************** -->

	<div id="primary" class="site-content">
		<div id="content" role="main">
		<?php if ( 'page' == get_option('show_on_front') ): ?>
			<div class="sof">
				<?php if (have_posts()) : the_post(); ?>
					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
	
						<h2 class="entry-title"><?php the_title(); ?></h2>
				
						<div class="entry-content">
							<?php the_content(); ?>
						</div>
					</article>
				<?php else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.', 'usces'); ?></p>
				<?php endif; ?>
			</div><!-- .sof -->

		<?php else: ?>

			<section class="front-il cf">
			<!-- テーマオプションの商品リスト非表示 -->
				<!-- <?php if( have_posts() ) : ?>
					<?php while( have_posts() ) : the_post(); usces_the_item(); ?>
					
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						
							<div class="itemimg">
								<a href="<?php the_permalink(); ?>"><?php usces_the_itemImage( 0, 300, 300 ); ?></a>
								<?php welcart_basic_campaign_message(); ?>
							</div>
							<div class="itemprice"><?php usces_the_firstPriceCr(); ?><?php usces_guid_tax(); ?></div>
							<?php usces_crform_the_itemPriceCr_taxincluded(); ?>
							<?php if( !usces_have_zaiko_anyone() ) : ?>
							<div class="itemsoldout"><?php _e('Sold Out', 'usces' ); ?></div>
							<?php endif; ?>
							<div class="itemname"><a href="<?php the_permalink(); ?>"  rel="bookmark"><?php usces_the_itemName(); ?></a></div>
						
						</article>
					
					<?php endwhile; ?>
					
				<?php else: ?>
					
					<p class="no-date"><?php _e('Sorry, no posts matched your criteria.', 'usces'); ?></p>
				
				<?php endif; ?> -->
			
			</section><!-- .front-il -->

		<?php endif; ?>
				
		</div><!-- #content -->
	</div><!-- #primary -->

	<!-- === top contents === -->
	<!-- new item -->
	<?php
	$args = array(
		'id' => 'top-newitem',
		'slug' => 'itemnew',
		'color' => 'peach',
		'title' => true,
		'title-jp' => '新商品',
		'title-en' => 'new items',
		'swiper' => true,
		'disp-max' => 10,
		'seemore' => true,
	);
	show_postlist($args);
	// size category
	show_category_list('サイズ');
	// gift wrapping
	show_category_pagebanner('gift wrapping');
	// news
	show_newsline('news');

	$args = array(
		'slug' => 'topics',
		'color' => 'peach',
		'title' => true,
		'title-jp' => '特集',
		'title-en' => 'topics',
		'swiper' => false,
		'row' => 2,
		'disp-max' => 4,
		'seemore' => true,
		'clay' => true,
	);
	show_postlist($args);
	// instagram
	show_instagram();

	?>
	<!-- **************bottom of frontpage************** -->

<?php // get_sidebar('home'); ?>
<?php get_footer(); ?>
