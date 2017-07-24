<?php

$link = mysqli_connect("app.comet-server.ru", "1668", "23gQu0am81DN732DNbpn4GSdzV6eul0tkKO3Z51n9mS62u2NozzjUOm9sSAHT5ut", "CometQL_v1");
mysqli_query($link, "INSERT INTO users_auth (id, hash )VALUES (3, 'userHash')" );
mysqli_query($link,"INSERT INTO users_messages (id, event, message)VALUES (3, 'event1', 'msg1')" );


