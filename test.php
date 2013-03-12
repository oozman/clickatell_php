<?php
require_once 'clickatell.php';

//Your ClickATell Credentials
$api_id = 'XXXX';
$user = 'XXXX';
$password = 'XXXX';

//Create a new ClickATell instance
$clickatell = new ClickATell($api_id, $user, $password);

//Get session_id
$session_id = $clickatell->get_session_id();

//Send an SMS
$is_sent = $clickatell->send('639171234567', 'Hello World, Hello Philippines!');

var_dump($session_id);
var_dump($is_sent);

#END OF PHP FILE