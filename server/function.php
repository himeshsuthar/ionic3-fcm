<?php
include "config.php";

function sendNotification($title,$body,$token){

      define( 'API_ACCESS_KEY', 'AAAAJIvNRR4:APA91bHHeVMjkT4dL4dxa2JDRVnbn38Qzsm_zLULIS-025GTut3AMkP4ZDPWreryKaLNzSsMZgWEgbeSW44mIrkZBPIEqvhSjYR0hEWLELuVHUhzTkaxgkgqyWCU8c5wrfPX25KVsQq1h3IcJ1h4f3ONdZkzIsGdLA' );
      $registrationIds = $token;
       $msg = array
            (
      'body' 	=> $body,
      'title'	=> $title,
      'sound' => 'assets/notification.mp3',
            );

    $fields = array
        (
          'to'		=> $registrationIds,
          'notification'	=> $msg
        );


    $headers = array
        (
          'Authorization: key=' . API_ACCESS_KEY,
          'Content-Type: application/json'
          );
      $ch = curl_init();
      curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
      curl_setopt( $ch,CURLOPT_POST, true );
      curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
      curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
      curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
      curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
      $result = curl_exec($ch);
      curl_close($ch);
  echo $result;
}
?>
