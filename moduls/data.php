

  <?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=LanaCMS", "root", "");
    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);

    echo "<table><tr><th>Id</th><th>Name</th><th>email</th><th>data</th></tr>";
    while($row = $result->fetch()){
        echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["usernam"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["data"] . "</td>";
 
    }
    echo "</table>";
}
catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?> 