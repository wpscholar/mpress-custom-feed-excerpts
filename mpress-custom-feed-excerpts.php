<?php

/*
 * Plugin Name: mPress Custom Feed Excerpts
 * Description: Customize your feed excerpts using the &lt;!--more--&gt; tag in posts.  Full text feeds must be enabled.
 * Plugin URI: https://wpscholar.com/wordpress-plugins/mpress-custom-feed-excerpts/
 * Author: Micah Wood
 * Author URI: https://wpscholar.com/
 * Version: 1.1
 * License: GPL3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * Copyright 2013-2017 by Micah Wood - All rights reserved.
 */

if ( ! function_exists( 'mpress_custom_feed_excerpts' ) ) {

	add_filter( 'the_content_feed', 'mpress_custom_feed_excerpts' );

	/**
	 * Customize the RSS feed content to include a summary and a read more link with optional custom text.
	 * Only applies if the RSS feed in the WordPress settings is configured to show the entire content.
	 *
	 * @param string $content
	 *
	 * @return string
	 */
	function mpress_custom_feed_excerpts( $content ) {
		if ( ! get_option( 'rss_use_excerpt' ) ) {
			$post = get_post();
			if ( $post ) {
				$data = get_extended( $post->post_content );
				$default_link_text = apply_filters(
					'mpress_custom_feed_excerpts_default_link_text',
					esc_html__( 'continue reading', 'mpress-custom-feed-excerpts' )
				);
				$link_text = empty( $data['more_text'] ) ? $default_link_text : $data['more_text'];
				$link = apply_filters(
					'mpress_custom_feed_excerpts_continue_reading_link',
					sprintf(
						' <a href="%s" class="more-link">%s</a>',
						esc_url( get_the_permalink( $post ) . '#more-' . absint( $post->ID ) ),
						esc_html( $link_text )
					)
				);
				$content = wpautop( force_balance_tags( $data['main'] . $link ) );
			}
		}

		return $content;
	}

}