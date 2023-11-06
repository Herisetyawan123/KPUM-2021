<?php

function Sensor($no_wa) {
    $noPhone=$no_wa;
    $jmlSensor=4;
    $afterVal=4;
    $sensor = substr($noPhone, $afterVal, $jmlSensor);
    $noPhone2=explode($sensor,$noPhone);
    $newPhone=$noPhone2[0]."-XXXX-".$noPhone2[1];
    return $newPhone;
}

?>