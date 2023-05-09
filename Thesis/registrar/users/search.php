<?php
  // Get the search query from the query string parameter
  $query = $_GET['q'];

  // Connect to the database and search for matching records
  $pdo = new PDO('mysql:host=localhost;dbname=mydatabase', 'username', 'password');
  $stmt = $pdo->prepare("SELECT * FROM mytable WHERE name LIKE :query");
  $stmt->bindValue(':query', '%' . $query . '%');
  $stmt->execute();
  $results = $stmt->fetchAll();

  // Return the search results as HTML
  foreach ($results as $result) {
    echo '<div>' . htmlspecialchars($result['name']) . '</div>';
  }
?>
