<?php

// (...)

class Radius
{
    // (...)

    public function Radius($ip_radius_server = '127.0.0.1', $shared_secret = '', $radius_suffix = '', $udp_timeout = 5, $authentication_port = 1812, $accounting_port = 1813)
    {
        // (...)
        
    }

    // (...)

    function AccessRequest($username = '', $password = '', $udp_timeout = 0)
    {

        // (...)

        $_socket_to_server = socket_create(AF_INET, SOCK_DGRAM, 17); // UDP packet = 17

        if ($_socket_to_server === FALSE) {
            // (...)
        } elseif (FALSE === socket_connect($_socket_to_server, $this->_ip_radius_server, $this->_authentication_port)) {
            // (...)
        } elseif (FALSE === socket_write($_socket_to_server, $packet_data, $packet_length)) {
            // (...)
        } else {
            // (...)
            $read_socket_array   = array($_socket_to_server);
            $write_socket_array  = NULL;
            $except_socket_array = NULL;

            $received_packet = chr(0);

            if (!(FALSE === socket_select($read_socket_array, $write_socket_array, $except_socket_array, $this->_udp_timeout))) {
                if (in_array($_socket_to_server, $read_socket_array)) {
                    if (FALSE === ($received_packet = @socket_read($_socket_to_server, 1024))) // @ used, than no error is displayed if the connection is closed by the remote host
                    {
                        // (...)
                    } else {
                        socket_close($_socket_to_server);
                    }
                }
            } else {
                socket_close($_socket_to_server);
            }
        }

        // (...)

        return (2 == ($this->_radius_packet_received));
    }
}

?>

Example
<?php
require_once('radius.class.php');
$radius = new Radius('127.0.0.1', 'secret');
if ($radius->AccessRequest('user', 'pass')) {
    echo "Authentication accepted.";
} else {
    echo "Authentication rejected.";
}
?>