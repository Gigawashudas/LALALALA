<?php
session_start();
include 'includes/db.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Products</h1>
    <div class="row">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='col-md-4'>";
                echo "<div class='card'>";
                echo "<img src='" . $row["image"] . "' class='card-img-top' alt='" . $row["name"] . "'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . $row["name"] . "</h5>";
                echo "<p class='card-text'>$" . $row["price"] . "</p>";
                echo "<a href='add_to_cart.php?id=" . $row["id"] . "' class='btn btn-primary'>Add to Cart</a>";
                echo "</div></div></div>";
            }
        } else {
            echo "No products found.";
        }
        ?>
    </div>
        <?php if (isset($_SESSION['username'])): ?>
            <p>Welcome, <?php echo $_SESSION['username']; ?>! <a href="logout.php">Logout</a></p>
        <?php else: ?>
            <p><a href="login.php">Login</a> or <a href="signup.php">Signup</a></p>
        <?php endif; ?>
</div>
</body>
</html>