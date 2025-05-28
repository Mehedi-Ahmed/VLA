<?php
require_once '../../app/Classes/VehicleManager.php';

$id = $_GET['id'] ?? null;

if ($id) {
    $manager = new VehicleManager(['name'=>'', 'type'=>'', 'price'=>'', 'image'=>'']);
    $manager->deleteVehicle($id);
}

header('Location: simulation.php');
exit;
