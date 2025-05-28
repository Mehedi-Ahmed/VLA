<?php
require_once '../../app/Classes/VehicleManager.php';

$manager = new VehicleManager(['name'=>'', 'type'=>'', 'price'=>'', 'image'=>'']);
$vehicles = $manager->getVehicles();

$id = $_GET['id'] ?? '';
$vehicle = array_filter($vehicles, fn($v) => $v['id'] === $id);
$vehicle = $vehicle ? array_values($vehicle)[0] : null;

if (!$vehicle) {
    echo "Vehicle not found!";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $manager->editVehicle($id, $_POST);
    header('Location: simulation.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Vehicle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #fff; color: #000; }
    </style>
</head>
<body>
    <div class="container py-5">
        <h2>Edit Vehicle</h2>
        <form method="POST" class="mt-4">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input name="name" type="text" value="<?= $vehicle['name'] ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Type</label>
                <input name="type" type="text" value="<?= $vehicle['type'] ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input name="price" type="number" value="<?= $vehicle['price'] ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Image URL</label>
                <input name="image" type="text" value="<?= $vehicle['image'] ?>" class="form-control" required>
            </div>
            <button class="btn btn-dark">Update</button>
        </form>
    </div>
    <?php include 'footer.php'; ?>

</body>
</html>
