<?php

   $dbhost = 'localhost:3306';  //mysql������������ַ
   $dbuser = 'root';      //mysql�û���
   $dbpass = '123456';//mysql�û�������
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }
   mysql_select_db( 'damu' );

   mysql_close($conn);