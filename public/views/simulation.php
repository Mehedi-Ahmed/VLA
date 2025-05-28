<?php
require_once '../../app/Classes/VehicleManager.php';

$manager = new VehicleManager(['name'=>'', 'type'=>'', 'price'=>'', 'image'=>'']);
$vehicles = $manager->getVehicles();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vehicle Simulation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #fff; color: #000; }
        .card { border: 1px solid #000; border-radius: 12px; }
        .btn-group .btn { border-radius: 0; }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Vehicle Simulation</h2>
            <a href="add.php" class="btn btn-dark">+ Add Vehicle</a>
        </div>
        <?php if (empty($vehicles)): ?>
            <p>No vehicles added yet.</p>
        <?php else: ?>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($vehicles as $v): ?>
                    <div class="col">
                        <div class="card h-100 p-3">
                            <img src="<?= $v['image'] ?>" class="card-img-top" alt="<?= $v['name'] ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($v['name']) ?></h5>
                                <p class="card-text">
                                    <strong>ID:</strong> <?= $v['id'] ?><br>
                                    <strong>Type:</strong> <?= htmlspecialchars($v['type']) ?><br>
                                    <strong>Price:</strong> $<?= htmlspecialchars($v['price']) ?>
                                </p>
                            </div>
                            <div class="card-footer text-center">
                                <a href="edit.php?id=<?= $v['id'] ?>" class="btn btn-sm btn-dark">Edit</a>
                                <a href="delete.php?id=<?= $v['id'] ?>" class="btn btn-sm btn-outline-dark ms-2">Delete</a>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
    <?php include 'footer.php'; ?>

</body>
</html>
