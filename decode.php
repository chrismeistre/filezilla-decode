<?php
    if (empty($argv[1])) { die("no file specified\n"); }

    $filename = $argv[1];

    $xml = simplexml_load_file($filename);

    foreach ($xml->Servers->Server as $server) {
        print "===========================================\n";
        print "Host: " . $server->Host."\n";
        print "User: " . $server->User."\n";
        print "Password: " . base64_decode($server->Pass)."\n";
        print "===========================================\n";
    }

