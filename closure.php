



<?php

include 'database.php';
include 'head.php';
include 'header.php';

/**
 * Created by PhpStorm.
 * User: Daniele
 * Date: 29/12/2016
 * Time: 16:55
 */

$config = parse_ini_file('config.ini');

$db = new Gazelle\Database($config['db']);

?>

<body>
<div class="table-title">
    <h3>CHIUSURE</h3>
</div>
<div class="location-select">
    <!-- <label for="locations">Esercente: </label> -->
    <select id="locations" title="Test">
        <?php
        $locations = $db->quickQuery('SELECT DISTINCT locale FROM closure ORDER BY locale ASC', '');
        print_r($locations);
        foreach ($locations as $location){
            echo "<option value=". $location .">". $location ."</option>";
        }
        ?>
    </select>
</div>
    <table class="table-fill">
        <thead>
        <tr>
            <th class="text-left">ID</th>
            <th class="text-left">MODELLO</th>
            <th class="text-left">CNTIN PREC</th>
            <th class="text-left">CNTOT PREC</th>
            <th class="text-left">CNTIN ATT</th>
            <th class="text-left">CNTOT ATT</th>
        </tr>
        </thead>
    </table>

</body>