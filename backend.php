<?php
        $username = "id2975419_root";
        $password = "Mymd@85478547";
        
//insert data to database
        if ($_POST["title"] != "" && $_POST["desc"] != "") {
                $conn = new PDO("mysql:host=localhost; dbname=id2975419_test", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO `todoList` (`title`, `desc`) VALUES ('$_POST[title]', '$_POST[desc]');";
                $conn->exec($sql);
        }

//delete data from database 
if ($_POST["sno"] != "") {
                $conn = new PDO("mysql:host=localhost; dbname=id2975419_test", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "DELETE FROM `todoList` WHERE sno='$_POST[sno]';";
                $conn->exec($sql);
        }
        
//getting data from database
        $db = new PDO("mysql:host=localhost; dbname=id2975419_test", $username, $password);
        $table = 'todoList';
        $stmt = $db->query('SELECT * from '.$table);
        $db = NULL;

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($rows);
?>