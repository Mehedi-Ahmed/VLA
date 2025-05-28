<?php
require_once '../../app/Classes/VehicleManager.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $manager = new VehicleManager($_POST);
    $manager->addVehicle($_POST);
    header('Location: simulation.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Vehicle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #fff; color: #000; }
    </style>
</head>
<body>
    <div class="container py-5">
        <h2>Add Vehicle</h2>
        <form method="POST" class="mt-4">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input name="name" type="text" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Type</label>
                <input name="type" type="text" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input name="price" type="number" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Image URL</label>
                <input name="image" type="text" class="form-control" required>
            </div>
            <button class="btn btn-dark">Add</button>
        </form>
    </div>
    <?php include 'footer.php'; ?>

</body>
</html>
