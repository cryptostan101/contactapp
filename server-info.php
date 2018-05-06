<?php

  # $_SERVER SUPERGLOBAL

  // Array with server info


  $server= [

    'HostAddress' => $_SERVER['SERVER_ADDR'],
    'HostPort' => $_SERVER['SERVER_PORT'],
    'HostName' => $_SERVER['SERVER_NAME'],
    'HostSoftware' => $_SERVER['SERVER_SOFTWARE'],
    'DocumentRoot' => $_SERVER['DOCUMENT_ROOT'],
    'CurrentPage' => $_SERVER['PHP_SELF'],
    'HostPath' => $_SERVER['SCRIPT_FILENAME']



  ];

  //print_r($server);




  // Array with client info

  $client = [

    'UserAgent' => $_SERVER['HTTP_USER_AGENT'],
    'RemoteAddress' => $_SERVER['REMOTE_ADDR'],
    'RemotePort' => $_SERVER['REMOTE_PORT']


  ];

  //print_r($client);








?>
