<?php
    if((isset($_POST['user_name'])) && (isset($_POST['user_phone']) && $_POST['user_email']!="")){ 
        $to = 'info@marmoroc.com.ua';
        $subject = 'Новый контакт с сайта marmoroc.com.ua';
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
        $headers .= "From: Marmoroc <info@marmoroc.com.ua>\r\n"; 
        mail($to, $subject, $message, $headers);

        $lang = $_POST['lang'];

        header('Content-type: application/json');
        echo json_encode(array('status' => 'success', 'redirect' => $lang . '/thank_you.html'));
    } else {
        header('Content-type: application/json');
        echo json_encode(array('status' => 'error'));
    }

?>