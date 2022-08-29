<?php
/**
 * Class GS_ClientTest
 *
 * @package Wp_Stateless
 */

use wpCloud\StatelessMedia\GS_Client;

class GS_ClientTest extends WP_UnitTestCase {
    public function setUp(): void {
        parent::setUp();
    }
    public function tearDown(): void {
        parent::tearDown();
    }
	public function test_get_instance() {
        $args = array(
            client_id => "foo",
            service_account_name => "bar",
            key_file_path => "baz",
        );
        $instance = GS_Client::get_instance($args);
		$this->assert( gettype($instance) == 'object', 'get_instance should return an object' );
	}
}
