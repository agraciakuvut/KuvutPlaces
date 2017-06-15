<?php
    include '../src/KuvutPlaces/KuvutPlaces.php';

    $kuvutPlaces = new \agraciakuvut\KuvutPlaces('YOUR-API-KEY');
    $kuvutPlaces->setCountry('XX');
    $kuvutPlaces->setPlatform('YOUR-PLATFORM');
    $kuvutPlaces->setPostalCode('00000');
    $result = $kuvutPlaces->validate();
    var_dump($result);