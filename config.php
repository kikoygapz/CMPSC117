<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    fwrite($file,"name :");
    fwrite($file, $username ."\n");
    fwrite($file,"age :");
    fwrite($file, $age ."\n");
    fwrite($file,"address :");
    fwrite($file, $address ."\n");
    fwrite($file,"birthdate :");
    fwrite($file, $birthdate ."\n");
    fwrite($file,"email :");
    fwrite($file, $email ."\n");
    fwrite($file,"phone :");
    fwrite($file, $phone ."\n");
    fclose($file);
    header("location: profile.html");
 ?>
