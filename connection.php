<?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "db_database";
                
                // Create connection
                $conn = mysqli_connect($servername,$username,$password,$dbname) or die ('nao rolou');
                // Check connection
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
?>