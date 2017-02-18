<?php
    include 'conf.php';
    
    $sql = 'select *　from damulist';
    $ret = mysql_query($sql);
    $data = [];
    while($row = mysql_fetch_array($ret, MYSQL_ASSOC))
    {
        $data[] = $row;
    }
    echo json_decode($data);
?>