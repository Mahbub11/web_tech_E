<?php
require_once 'connection.php';

function updateProduct($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE seller set name = ?, email = ?, address = ?, phoneNo = ?, password = ?, status = ?, added_date = ? where id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['mob'], $data['email'],$data['address'],
            $data['pass'], $data['status'], $data['date'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function addSeller($data){
	$conn = db_conn();
    $selectQuery = "INSERT into seller (name,phoneNo,email,address,password,status,added_date)
   VALUES (:name, :phoneNo, :email, :address, :password, :status, :added_date)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':phoneNo' => $data['mob'],
        	':email' => $data['email'],
            ':address' => $data['address'],
            ':password' => $data['pass'],
            ':status' => $data['status'],
            ':added_date' => $data['date']
        	
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function getAllSeller(){

    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `seller` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

   
    
return $rows;
}

function showSeller($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `seller` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function deleteSeller($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `seller` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

// jjj


function updateBuyer($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE buyer set name = ?, email = ?, address = ?, phoneNo = ?, password = ?, added_date = ? where id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['mob'], $data['email'],$data['address'],
            $data['pass'], $data['date'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function addBuyer($data){
	$conn = db_conn();
    $selectQuery = "INSERT into buyer (name,phoneNo,email,address,password,added_date)
   VALUES (:name, :phoneNo, :email, :address, :password, :added_date)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':phoneNo' => $data['mob'],
        	':email' => $data['email'],
            ':address' => $data['address'],
            ':password' => $data['pass'],
            ':added_date' => $data['date']
        	
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function getAllBuyer(){

    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `buyer` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

   
    
return $rows;
}

function showBuyer($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `buyer` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function deleteBuyer($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `buyer` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}



?>