<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vehicle Listing App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #fff;
            color: #000;
        }
        .container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h1 class="mb-4">Simple Vehicle Listing App</h1>
        <div class="d-grid gap-3 col-6 mx-auto">
            <a href="views/simulation.php" class="btn btn-dark btn-lg">View Vehicle Simulation</a>
            <a href="views/add.php" class="btn btn-outline-dark btn-lg">Add New Vehicle</a>
        </div>
    </div>
    <?php include 'footer.php'; ?>

</body>
</html>
