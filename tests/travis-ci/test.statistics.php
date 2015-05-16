<?php

/**
 * Tests to test that that testing framework is testing tests. Meta, huh?
 *
 * @package wordpress-plugins-tests
 */
class Tests_Statistics extends WP_UnitTestCase {

    /**
     * creates a dummy landing page for testing
     */
    function test_create_demo_lander() {
        /* register landing-page post type */


        /* load the class used to create the dummy landing page */
        include_once LANDINGPAGES_PATH . 'modules/module.install.php';
        $lp_id = inbound_create_default_post_type();
        $this->assertEquals(  $lp_id  , 3 );
    }



    /**
     * Check if landing-page post type exists
     */
    function test_check_if_landing_page_post_type_exist() {
        $this->assertTrue(post_type_exists( 'landing-page' ));
    }



    /**
     * Set landing page stats to zero for testing
     */
    function test_reset_landing_page_stats() {

        $options = get_option("lp_settings_general");
        $landing_page = get_post( $options['default_landing_page'] , ARRAY_A );

        print_r($landing_page);

    }

}


