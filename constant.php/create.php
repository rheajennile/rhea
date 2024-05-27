<?php
include 'conn.php';

$errors = array(); //store errors

if(isset($_POST['register'])){
    // input
    $fields = array('ProductName', 'ProductID', 'Category', 'Quantity', 'Price', 'Supplier', 'PurchaseDate');
    foreach($fields as $field){
        if(empty($_POST[$field])){
            $errors[] = "Please fill in all fields.";
            break;
        }
    }
    
    // Error
    if(empty($errors)){
        $ProductName = mysqli_real_escape_string($link, $_POST['ProductName']);
        $ProductID = mysqli_real_escape_string($link, $_POST['ProductID']);
        $Category = mysqli_real_escape_string($link, $_POST['Category']);
        $Quantity = mysqli_real_escape_string($link, $_POST['Quantity']);
        $Price = mysqli_real_escape_string($link, $_POST['Price']);
        $Supplier = mysqli_real_escape_string($link, $_POST['Supplier']);
        $PurchaseDate = mysqli_real_escape_string($link, $_POST['PurchaseDate']);
        
        // database
        $insert_data = mysqli_query($link, "INSERT INTO tbl_products (ProductName, ProductID, Category, Quantity, Price, Supplier, PurchaseDate) 
        VALUES ('$ProductName', '$ProductID', '$Category', '$Quantity', '$Price', '$Supplier', '$PurchaseDate')");
        
        if($insert_data){
            echo "Product Added to Inventory Successfully";
            //index
            header("location: index.php");
            exit();
        } else {
            echo "Failed to Add Product to Inventory";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Inventory</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
        /* CSS Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            margin-top: 80px;
        }
        form {
            max-width: 300px;
            margin: 0 auto;
            background-color: #FFFF;
            padding: 50px;
        }
        label {
            display: block;
            margin-bottom: 6px;
        }
        input[type="text"],
        input[type="date"] {
            width: calc(100% - 12px);
            padding: 10px;
        }
        input[type="submit"],
        button[type="reset"] {
            color: #fff;
            border: none;
            padding: 5px 20px;
            border-radius: 10px;
            cursor: pointer;
        }
        input[type="submit"]:hover,
        button[type="reset"]:hover {
            background-color: #49108B;
        }
        .error {
            color: red;
            margin-bottom: 100px;
        }
    </style>
    </style>
</head>
<body>
<br>
<h2>Inventory</h2>
<!-- add product -->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <!-- Display validation errors  -->
    <?php if(!empty($errors)): ?>
        <div style="color: red;">
            <?php foreach($errors as $error): ?>
                <?php echo $error."<br>"; ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    
    <!-- Form Fields -->
    <label for="ProductName">Product Name:</label>
    <input type="text" name="ProductName"><br>
    <label for="ProductID">Product ID:</label>
    <input type="text" name="ProductID"><br>
    <label for="Category">Category:</label>
    <input type="text" name="Category"><br>
    <label for="Quantity">Quantity:</label>
    <input type="text" name="Quantity"><br>
    <label for="Price">Price:</label>
    <input type="text" name="Price"><br>
    <label for="Supplier">Supplier:</label>
    <input type="text" name="Supplier"><br>
    <label for="PurchaseDate">Purchase Date:</label>
    <input type="date" name="PurchaseDate><br>
    <input type="submit" name="register" value="Add Product" class="btn success">
    <button type="reset" class="btn danger">Reset</button>
</form>
</body>