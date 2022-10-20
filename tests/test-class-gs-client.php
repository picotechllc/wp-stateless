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
        // this is intended to be a (barely, technically) valid argument array
        $args_ok = array(
            'bucket' => "pail",
            'key_json' => '{"private_key":0,"client_id":1}',
            'client_id' => "foo-client",
        );
        $instance = GS_Client::get_instance($args_ok);
        $this->assertIsObject($instance, 'get_instance should return an object');
        $this->assertNotInstanceOf('WP_Error', $instance, 'get_instance should not return an error, but returned these: ' . implode($instance->get_error_messages()));

        // this empty array is not a valid argument to get_instance and should result in an error being returned
        $args_empty = array();
        $should_be_error = GS_Client::get_instance($args_empty);
        $this->assertInstanceOf('WP_Error', $should_be_error);
    }
}
