<?php


$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "1616525865:AAE7MYZ5AS-5cKQQV3vT8GqcFIOGYg3sFMA";
$chat_id = "";
$arr = array(
    'Foydalanuvhining ismi:' => $name,
    'Telefon:' => $phone,
    'Email' => $email
);

foreach($arr as $key => $value) {
    $txt .= "<b>" .$key. "</b>" .$value."%0A";
    };
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id} 
    &parse_mode=html&text={$txt}","r");
    if($sendToTelegram){
        echo '<h1 class="sucsess">Katta raxmat qabul qildik</h1>';
            return true;
    }
    else{
        header('Location: thank-you.html');
    }
?>