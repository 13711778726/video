<?php
    $dbhost = '101.201.65.237';
    $dbuser = 'root';
    $dbpass = '123456';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    if(! $conn )
    {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db('damu');
    $sql = 'select * from damulist';
    $ret = mysql_query($sql);
    while($row = mysql_fetch_array($ret, MYSQL_ASSOC))
    {
        $data[] = $row;
    }
    echo json_encode($data);
?>
