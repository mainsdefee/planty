<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
/*Retirer les élments dates / hauts de page/copyr*/
/*intégrer le liens mentions qui redirige vers la page mentions légales*/
?>
			<footer id="site-footer" class="header-footer-group">

				<div class="section-inner">

					 <a href="http://localhost/site-planty/mentions-legales/">Mentions légales</a>
						
						<?php
						if ( function_exists( 'the_privacy_policy_link' ) ) {
							the_privacy_policy_link( '<p class="privacy-policy">', '</p>' );
						}
						?>

					</div><!-- .footer-credits -->
						</span><!-- .to-the-top-short -->
					</a><!-- .to-the-top -->

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>