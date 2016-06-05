<?php

/*
 * Plugin Name: mPress Custom Feed Excerpts
 * Description: Customize your feed excerpts using the &lt;!--more--&gt; tag in posts.  Full text feeds must be enabled.
 * Plugin URI: https://wpscholar.com/wordpress-plugins/mpress-custom-feed-excerpts/
 * Author: Micah Wood
 * Author URI: https://wpscholar.com/
 * Version: 1.0
 * License: GPL3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * Copyright 2013-2016 by Micah Wood - All rights reserved.
 */

define( 'MPRESS_CUSTOM_FEED_EXCERPTS_VERSION', '1.0' );

if ( ! class_exists( 'mPress_Custom_Feed_Excerpts' ) ) {

	/**
	 * Class mPress_Custom_Feed_Excerpts
	 */
	class mPress_Custom_Feed_Excerpts {

		private static $instance;

		public static function get_instance() {
			return self::$instance ? self::$instance : new self();
		}

		private function __construct() {
			self::$instance = $this;
			add_filter( 'the_content_feed', array( $this, 'the_content_feed' ) );
		}

		public function the_content_feed( $content ) {
			if ( ! get_option( 'rss_use_excerpt' ) ) {
				$split = preg_split( '#<span id=\"more-\d+\"><\/span>#', $content, 2, PREG_SPLIT_NO_EMPTY );
				if ( count( $split ) === 2 ) {
					$content = balanceTags( $split[0] . $this->more_link(), true );
				}
			}

			return $content;
		}

		public function more_link_text() {
			global $post;
			$more_link_text = __( 'continue reading', 'mpress-custom-feed-excerpts' );
			preg_match( '#<!--more(.*?)?-->#', $post->post_content, $matches );
			if ( ! empty( $matches[1] ) ) {
				$more_link_text = strip_tags( wp_kses_no_null( trim( $matches[1] ) ) );
			}

			return $more_link_text;
		}

		public function more_link() {
			$link = sprintf(
				' <a href="%s#more-%d" class="more-link">%s</a>',
				get_permalink(),
				get_the_ID(),
				$this->more_link_text()
			);

			return apply_filters( 'mpress_custom_feed_excerpts_continue_reading_link', $link );
		}

	}

	add_action( 'plugins_loaded', array( 'mPress_Custom_Feed_Excerpts', 'get_instance' ) );

}