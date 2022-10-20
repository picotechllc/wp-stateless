<?php
/**
 * Class GS_ClientTest
 *
 * @package Wp_Stateless
 */

use wpCloud\StatelessMedia\GS_Client;

final class GS_ClientTest extends PHPUnit\Framework\TestCase
{
    public function test_get_instance() {
        $args_ok = array(
            'client_id' => "foo",
            'service_account_name' => "bar",
            'key_file_path' => "baz",
        );
        $instance = GS_Client::get_instance($args_ok);
        $this->assertIsObject($instance, 'get_instance should return an object' );
        $args_empty = array();
        $should_be_error = GS_Client::get_instance($args_empty);
        $this->assertInstanceOf('WP_Error', $should_be_error);
    }
}
