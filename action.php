<?php
session_start();
if(isset($_POST['submit'])){
    $email = $_POST['MERGE0'];
    $fname = $_POST['MERGE1'];
    $lname = $_POST['MERGE2'];
    $bday = $_POST['MERGE3'];
    $prcode = $_POST['MERGE4'];
    $country = $_POST['MERGE5'];
    $prinfo = $_POST['MERGE6'];
    $markinfo = $_POST['MERGE7'];
    
    if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        // MailChimp API credentials
        $apiKey = 'ed968aee7a6d70fdfa6ef8fcd6bae041-us16';
        $listID = '8690e84785';
        
        // MailChimp API URL
        $memberID = md5(strtolower($email));
        $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
        $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members/' . $memberID;
        
        // member information
        $json = json_encode([
            'email_address' => $email,
            'status'        => 'subscribed',
            'merge_fields'  => [
                'FNAME'     => $fname,
                'LNAME'     => $lname,
                'BIRTHDAY'  => $bday,
                'COUNTRY'   => $country,
                'PRODUCTINF'  => $prinfo,
                'MARKINFO'  => $markinfo,
                'NUMBER'  => $prcode
            ]
        ]);
        
        // send a HTTP POST request with curl
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        // store the status message based on response code
        if ($httpCode == 200) {
            $_SESSION['msg'] = '<p style="color: #34A853">You have successfully registered your product with us.</p>';
        } else {
            switch ($httpCode) {
                case 214:
                    $msg = 'You are already registered your product.';
                    break;
                default:
                    $msg = 'Some problem occurred, please try again.';
                    break;
            }
            $_SESSION['msg'] = '<p style="color: #EA4335">'.$msg.'</p>';
        }
    }else{
        $_SESSION['msg'] = '<p style="color: #EA4335">Please enter valid email address.</p>';
    }
}
// redirect to homepage
header('location:index.html');