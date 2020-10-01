<?php

    namespace elevenstack\axiosphp;

    class Axios 
    {
        public function fetch(String $url, Array $dados = [
            "method" => "GET",
            "body" => []
        ]){   
            $method = $dados["method"];
            $body_data = $dados["body"];
            $headers = ["Content-type': 'application/json; charset=UTF-8"];

            if(empty($body_data)){
                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

                $result = curl_exec($ch);
                curl_close($ch);
                return $result;
            }else{
                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($body_data));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

                $result = curl_exec($ch);
                curl_close($ch);
                return $result;
            }
        }
    }