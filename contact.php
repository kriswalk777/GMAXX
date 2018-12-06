<?php
    $name = $_POST ['name'];
    $email = $_POST ['email'];
    $telephone = $_POST ['telephone'];
    $date = $_POST ['date'];
    $stime = $_POST ['stime'];
    $etime = $_POST ['etime'];
    $requests =$_POST ['requests'];


    $email_from = 'GMAXX Photography Site';
    $email_subject = 'New Message from GMAXX Contact';
    $email_body = "Name: $name.\n".
                  "Email: $email.\n".
                  "Telephone: $telephone.\n".
                  "Date: $date.\n".
                  "Start Time: $stime\n".
                  "End Time: $etime\n".
                  "Requests: $requests\n".;

    $to ="kwalker@mindpowermarketingstudio.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: index.html");
?>