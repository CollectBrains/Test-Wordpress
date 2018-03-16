<?php get_header(); ?>

<main class="clearfix">
	<div class="postsFlow clearfix">
		<?php the_post(); ?>
		<article class="postItem-full">
			<?php get_template_part('single-templates/content', get_post_format()) ?>
		</article>
	</div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>