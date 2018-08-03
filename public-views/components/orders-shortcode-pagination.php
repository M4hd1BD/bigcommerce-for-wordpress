<?php
/**
 * Renders the button to load the next page in a paginated shortcode
 *
 * @var string $next_page_url
 */
?>

<?php if ( ! empty( $next_page_url ) ) { ?>
	<li class="bc-load-items__trigger bc-load-items__trigger--orders" data-js="load-items-trigger">
		<button type="button" class="bc-load-items__trigger-btn bc-load-items__trigger-btn--orders" data-js="load-items-trigger-btn"
		        data-href="<?php echo esc_url( $next_page_url ); ?>">
			<?php echo esc_html( apply_filters( 'bigcommerce/orders_shortcode/load_more_text', __( 'Load More', 'bigcommerce' ) ) ); ?>
			<i class="bc-icon icon-bc-chevron-down"></i>
		</button>
	</li>
<?php } ?>
