<?php

namespace App\Service;

class ReCaptchaChecker
{
    public function check($data)
    {
        $recaptcha = $this->checkReCaptcha($data);
        return $recaptcha["success"];
    }

    private function checkReCaptcha($token)
    {
        //reCaptcha
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, array(
            "secret" => $_ENV['RECAPTCHA_PRIVATE_KEY'],
            "response" => $token
        ));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        curl_close($curl);
        return json_decode($result, 1);
    }
}
