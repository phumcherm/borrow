<?php

//logout.php

// include('configlogin.php');

//Reset OAuth access token
// $client->revokeToken();
session_start();

//Destroy entire session data.
session_destroy();

//redirect page to index.php
header('location: /public/login.php');

?>