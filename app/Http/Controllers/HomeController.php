<?php


namespace App\Http\Controllers;



class HomeController extends Controller
{
    public function index()
    {

        // $c = curl_init();
        // curl_setopt_array($c, array(CURLOPT_URL => 'https://www.commitstrip.com/en/feed/', CURLOPT_RETURNTRANSFER => TRUE));
        // $d = curl_exec($c);
        // curl_close($c);

        // $c = curl_init();

        // curl_setopt($c, CURLOPT_URL, "https://www.commitstrip.com/en/feed/");
        // curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        // curl_setopt($c, CURLOPT_CUSTOMREQUEST, 'GET');


        // curl_setopt($c, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/601.7.0 (KHTML, like Gecko) Version/9.0.1 Safari/537.81.8');
        // //curl_setopt($c, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)');
        // $d = curl_exec($c);
        // curl_close($c);
        // $xml = simplexml_load_string($d);
        // var_dump($xml);

        //////dhhdhdhhdhd

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://www.commitstrip.com/en/feed/');

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_POSTFIELDS, "user=1&a=1");
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

        $headers = array();
        $headers[] = 'Authority: www.commitstrip.com';
        $headers[] = 'Pragma: no-cache';
        $headers[] = 'Cache-Control: no-cache';
        $headers[] = 'Sec-Ch-Ua: ^^';
        $headers[] = 'Dnt: 1';
        $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
        $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36';
        $headers[] = 'Viewport-Width: 890';
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        $headers[] = 'X-Fb-Lsd: 1';
        $headers[] = 'Sec-Ch-Ua-Platform: ^^Windows^^""';
        $headers[] = 'Accept: /';
        $headers[] = 'Origin: www.commitstrip.com';
        $headers[] = 'Sec-Fetch-Site: same-origin';
        $headers[] = 'Sec-Fetch-Mode: cors';
        $headers[] = 'Sec-Fetch-Dest: empty';
        $headers[] = 'Referer: https://www.commitstrip.com/...';
        $headers[] = 'Accept-Language: pl-PL,pl;q=0.9,en-US;q=0.8,en;q=0.7';
        $headers[] = 'Cookie: datr=1; sb=2; usida=3; oo=4; dpr=5; locale=pl_PL; c_user=6; spin=7';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        // $rss = new SimpleXMLElement($result, true);
        // if (curl_errno($ch)) {
        //     echo 'Error:' . curl_error($ch);
        // }
        // curl_close($ch);

        // $xml = simplexml_load_string($result);
        // var_dump($xml);
        var_dump($result);
        // var_dump($rss);
        // var_dump($result->item[0]->title);


        
    

    }
}
