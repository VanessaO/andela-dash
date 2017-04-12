<?php
    include_once('config.php');
    $country_sql = 'SELECT Country FROM admin';
    $result = mysqli_query($con,$country_sql);

    $country_array = array();
    while($row = mysqli_fetch_assoc($result)){
      $country_array[] = $row['Country'];
    }

    $arrDatasets = array('data' => array('1', '1', '1', '1','1'),'backgroundColor' => array('#5AD3D1','#FF6384', '#36A2EB', '#FFCE56'), 'hoverBackgroundColor' => array('#5AD3D1','#FF6384', '#36A2EB', '#FFCE56'));

    $arrReturn = array( 'type' => "pie", 'data' => array('labels' => $country_array, 'datasets' => array($arrDatasets)), 'options' => array('responsive' => false));

    print (json_encode($arrReturn));
?>