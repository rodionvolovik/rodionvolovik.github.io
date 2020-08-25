<?php

if((isset($_POST['user_name'])) && (isset($_POST['user_phone']) && $_POST['user_email']!="")){ 
    $to = 'rodionvolovik@gmail.com';
    $subject = 'Новый контакт с сайта nadra.pr.com';
    $message = '
        <html>
            <body>
                <p><b>Имя:</b> '.$_POST['user_name'].'</p>
                <p><b>Телефон:</b> '.$_POST['user_phone'].'</p>    
                <p><b>Email:</b> '.$_POST['user_email'].'</p>   
                <p><b>Комментарий:</b> '.$_POST['user_message'].'</p>                         
            </body>
        </html>'; 
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
    $headers .= "From: Marmoroc <nadra.priazovya@gmail.com>\r\n"; 
    mail($to, $subject, $message, $headers);

    echo json_encode(array('status' => 'success', 'redirect' => 'thank_you'));
} else {
    echo json_encode(array('status' => 'error'));
}

?>