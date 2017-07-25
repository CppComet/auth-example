<?php

// More info about CppComet http://comet-server.org/doku.php/en
// More info about CometQL http://comet-server.org/doku.php/en:comet:cometql
// More info about auth in CppComet http://comet-server.org/doku.php/en:comet:authentication

header('Content-Type: text/html; charset=utf-8');
header("Access-Control-Allow-Origin: *");

$user_id = (int)$_GET['user_id'];
$msg = preg_replace("#[^A-z0-9 А-я]#usi", "", $_GET['msg']);

// We connect to the comet server with login and password for the access demo (you can get your data for connection after registration at comet-server.com)
// Login 15
// Password lPXBFPqNg3f661JcegBY0N0dPXqUBdHXqj2cHf04PZgLHxT6z55e20ozojvMRvB8
// CometQL_v1 database
$link = mysqli_connect("app.comet-server.ru", "15", "lPXBFPqNg3f661JcegBY0N0dPXqUBdHXqj2cHf04PZgLHxT6z55e20ozojvMRvB8", "CometQL_v1");

// The table “users_messages” intended sending messages to authorized users by their identifiers.
// More info about table “users_messages” https://comet-server.com/wiki/doku.php/en:comet:cometql#table_users_messages
mysqli_query($link,"INSERT INTO users_messages (id, event, message)VALUES ('".$user_id."', 'newMessage', '".$msg."')" );

if(mysqli_errno($link))
{
    echo mysqli_errno($link).": ".mysqli_error($link);
}
else
{
    echo "ok"; 
}

