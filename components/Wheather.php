<?php
namespace app\components;
use yii\base\Widget;
class Wheather extends Widget {
    public $message;
    public function init() {
        // your logic here
        parent::init();
        if ($this->message === null) {
            $this->message = 'Welcome Guest';
        } else {
            $this->message = 'Welcome ' . $this->message;
        }
    }
    public function run(){
        // you can load & return the view or you can return the output variable
        $apiKey = "be57fdf6469f8ca05b1fe99f40b5841f";
        $cityId = "1274746";
        $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;
        
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        
        curl_close($ch);
        $data = json_decode($response);
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        exit;
        $currentTime = time();
        return $this->render('wheatherWidget', ['message' => $this->message,'data'=>$data]);
    }
}
?>