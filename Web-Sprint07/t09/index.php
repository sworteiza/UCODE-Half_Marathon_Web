<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $ts = time();
        $key = "98399478cfba480cb35fca56d0794344";
        $hash = md5($ts . "fe18d7e24af34ad712c31266997599979d2b4470" . $key);
        $api = curl_init("http://gateway.marvel.com/v1/public/comics?ts=$ts&apikey=$key&hash=$hash");
        curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($api, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($api, CURLOPT_HEADER, false);

        $exec = curl_exec($api);
        curl_close($api);
        $json = json_decode($exec, true);

        function ApiOut($json){
            echo '<div>';
                    foreach($json as $key => $value){
                        if(!is_array($value)){
                            echo "<div>$key:" . $value. "</div>";
                        }else{
                            echo "<p>" . $key . "</p>";
                            ApiOut($json[$key]);
                        }
                    }
                    echo '</div>';
        }

        ApiOut($json);
        
        

    ?>
</body>
</html>