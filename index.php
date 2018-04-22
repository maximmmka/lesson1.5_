<?php
    error_reporting(E_ALL);
    header ("Content-Type: text/html; charset=UTF-8");
    $content = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Kazan,ru&appid=c0d81a9055477ae89352fc8fce5d46d2&units=metric&lang=ru");
    $data = json_decode($content, true);
    $city = $data['name'];
    $weather = $data['weather'][0]['description'];
    $temp = $data['main']['temp'];
    $humidity = $data['main']['humidity'];
    $pressure = $data['main']['pressure'];
    $wind_deg = $data['wind']['deg'];
    $wind_speed = $data['wind']['speed'];
    echo "Город: $city";
    echo '<br/>';
    echo $weather;
    echo '<br/>';
    echo "температура воздуха: $temp ºС";
    echo '<br/>';
    echo "влажность воздуха: $humidity %";
    echo '<br/>';
    echo "атмосферное давление: $pressure гПа";
    echo '<br/>';
    echo "направление ветра: $wind_deg º";
    echo '<br/>';
    echo "скорость ветра: $wind_speed м/с";
?>