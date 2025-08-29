<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">🔍 Search for Services</h2>
    
    <!-- Search Form -->
    <form method="POST" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Enter service name..." required>
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

    <?php
    include 'db.php'; // Make sure db.php contains a valid $conn connection

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $search = "%" . $_POST['search'] . "%";

        $stmt = $conn->prepare("SELECT * FROM services WHERE name LIKE ?");
        $stmt->bind_param("s", $search);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if any results found
        if ($result->num_rows > 0) {
            echo "<div class='list-group'>";
            while ($row = $result->fetch_assoc()) {
                echo "<div class='list-group-item'>";
                echo "<h5 class='mb-1'>" . htmlspecialchars($row['name']) . "</h5>";
                echo "<p class='mb-1'>" . htmlspecialchars($row['description']) . "</p>";
                echo "</div>";
            }
            echo "</div>";
        } else {
            echo "<div class='alert alert-warning'>No services found matching your search.</div>";
        }
    }
    ?>
</div>

</body>
</html>
