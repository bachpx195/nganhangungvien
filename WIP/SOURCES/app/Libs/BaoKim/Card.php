<?php


namespace App\Libs\BaoKim;


class Card {

    public function baoKimCardApi($userData)
    {
        //TODO: Add config to pay by card
        $configs = [
            'merchant_id' => '23022',
            'api_username' => 'nganhangungviencom',
            'api_password' => 'mQ4zgTD9U2afiirsCBTZ',
            'secure_code' => '4867f6ab0f3c7844',
            'CORE_API_HTTP_PWD' => '23022czjGWxt2hAm2SJ2fYoMRH9aNCX2OBV',
            'CORE_API_HTTP_USR' => 'merchant_23022'
        ];

        //TESTING PURPOSES
        if (!empty($userData['is_dev']))
        {
            return array('success' => false, 'message' => 'somethingwrong with the topup');
            return array('success' => true, 'result' => 10);
        }

        $arrayPost = array(
            'merchant_id' => $configs['merchant_id'],
            'api_username' => $configs['api_username'],
            'api_password' => $configs['api_password'],
            'transaction_id' => time(),
            'card_id' => $userData['card_id'],
            'pin_field' => $userData['pin_field'],
            'seri_field' => $userData['seri_field'],
            'algo_mode' => 'hmac'
        );

        $bkUrl = 'https://www.baokim.vn/the-cao/restFul/send';
        ksort($arrayPost);
        $dataSign = hash_hmac('SHA1',implode('',$arrayPost),$configs['secure_code']);
        $arrayPost['data_sign'] = $dataSign;
        $curl = curl_init($bkUrl);

        curl_setopt_array($curl, array(
            CURLOPT_POST => true,
            CURLOPT_HEADER => false,
            CURLINFO_HEADER_OUT => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTPAUTH => CURLAUTH_DIGEST|CURLAUTH_BASIC,
            CURLOPT_USERPWD => $configs['CORE_API_HTTP_USR'].':'.$configs['CORE_API_HTTP_PWD'],
            CURLOPT_POSTFIELDS => http_build_query($arrayPost)
        ));

        $data = curl_exec($curl);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $result = json_decode($data,true);
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        if ($status == 200) {
            return array('success' => true, 'amount' => $result['amount'], 'err' => '');
        } else {
            return array('success' => false, 'err' => $result['errorMessage']);
        }
    }

}



