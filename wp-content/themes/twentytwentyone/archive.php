<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
?>

<?php if ( have_posts() ) : ?>

	<header class="page-header alignwide">
		<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
		<?php if ( $description ) : ?>
			<!-- #hello world -->
			<div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
		<?php endif; ?>
	</header><!-- .page-header -->

	<div class="searchable">
		

		<input class="search-inpt" type="text" autofocus placeholder="Search posts"/>

		


		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<?php get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) ); ?>
		<?php endwhile; ?>

		<?php twenty_twenty_one_the_posts_navigation(); ?>


		<script type="text/javascript">
			;(function search () {
				;[...document.querySelectorAll('.searchable')].forEach(makeSearchable)
				
				function makeSearchable ($searchable) {
					const $searchableItems = [...$searchable.querySelectorAll('.post')]
					const $search = $searchable.querySelector('input')
					$search.addEventListener('keyup', (e) => {
						$searchableItems.forEach(function ($el) {
							const text = $el.getAttribute('data-search') || $el.innerText
							const show = new RegExp(e.target.value, 'i').test(text)
							$el.style.display = show ? '' : 'none'
						})
					})
				}
			})()
		</script>
	
	</div>


<?php else : ?>
	<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>

<?php get_footer(); ?>
