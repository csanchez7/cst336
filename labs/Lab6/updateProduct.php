<?php

    include '../dbConnection.php';
    
    $conn = getDatabaseConnection("ottermart");
    
    if (isset($_GET['productId'])){
        $product = getProductInfo();
    }
    
    function getProductInfo(){
        
        global $conn;
        
        $sql = "SELECT * FROM om_product WHERE productId = " . $_GET['productId'];
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $record = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $record;
    }
    
    function getCategories($catId){
        
        global $conn;
        
        $sql = "SELECT catId, catName
                FROM om_category
                ORDER BY catName";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($records as $record){
            echo "<option ";
            echo ($record['catId'] == $catId)? "selected": "";
            echo " value='".$record["catId"] . "'>". $record['catName'] ." </option>";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update Product</title>
    </head>
    <body>
        <form>
            <input type="hidden" name="productId" value="<?=$product['productId']?>"/>
            <strong>Product Name</strong><input type="text" class="form-control" name="productName" value="<?=$product['productName']?>"><br>
            <strong>Description</strong><textarea name="description" class="form-control" cols=50 rows=4> <?=$product['productDescription']?></textarea><br>
            <strong>Price</strong><input type="text" class="form-control" name="price" value="<?=$product['price']?>"><br>
            <strong>Category</strong> <select name="catId" class="form-control">
                <option value="">Select One</option>
                <?php 
                    getCategories($product['catId']);
                ?>
            </select> <br />
            <strong>Set Image Url</strong> <input type="text" name="productImage" value="<?=$product['productImage']?>" class="form-control"><br>
            <input type="submit" name="updateProduct" class='btn btn-primary' value="Update Product">
        </form>
    </body>
</html>