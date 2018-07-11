<?php
    include 'dbConnection.php';
    $conn = getDatabaseConnection("ottermart");
    
    function displayCatagories(){
        global $conn;
        
        $sql = "SELECT catID, catName from om_category ORDER BY catname";
        
        $stmt = $conn->prepare($sql);   //This will send the sql you provide
        $stmt->execute();               //This will execute the sql    
        $records = $stmt->fetchALL(PDO::FETCH_ASSOC);   //results of SQL
        //print_r($records);            //used to view results
        
        foreach($records as $record){
            
            echo "<option value='".$record["catId"]."'>".$record["catName"]."</option>";
        }
        
    }
    
    function displaySearchResults(){
        global $conn;
        
        if(isset($_GET['searchForm'])){
            
            echo "<h3>Products Found: <h3>";
            
            $namedParameters=array();
            
            $sql = "SELECT * FROM om_product WHERE 1";
            
            if(!empty($_GET['product'])){
                $sql.= " AND productName LIKE :productName"; //checks whether user has typed something in the "Product" text box
                $namedParameters[":productName"]="%". $_GET['product']."%";
            }
            
            if(!empty($_GET['category'])){  //checks whether user has selected a category
                $sql.= " AND catId = :categoryId";
                $namedParameters[":categoryId"]="%". $_GET['category']."%";
            }
            
            if (!empty($_GET['priceFrom'])){ //checks whether user has typed something in the "Price from" text box
                $sql .= " AND price >= :priceFrom";
                $namedParameters[":priceFrom"] = $_GET['[priceFrom'];
            }
            
            if (!empty($_GET['priceTo'])){ //checks whether user has typed something in the "price To" text box
                $sql .= " AND price <= :priceTo";
                $namedParameters[":priceTo"] = $_GET['[priceTo'];
            }
            
            if (isset($_GET['orderBy'])){
                 if($_GET['orderBy']== "price"){
                     $sql .= " ORDER BY price"; 
                 }else {
                     $sql .= " ORDER BY productName";
                 }
             }
            $stmt = $conn->prepare($sql);
            $stmt->execute($namedParameters); // We NEED to include $namedParameters here
            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach($records as $record){
                echo "<a href=\"purchaseHistory.php?productId=".$record["productId"]. "\"> History </a>";
                
                echo  $record["productName"] . " " . $record["productDescription"] . " $" . $record["price"] . "<br /><br />";
            }
        } 
    }
?>

<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>OtterMart Product Search</title>
      <link type="text/css" rel="stylesheet" href="css/styles.css" />
    </head>
    <body>
        
        <div>
            <h1>OtterMart Product Search</h1>
            <form>
                Product <input type="text" name="product"/>
                <br />
                Category:
                    <select name="category">
                        <option value="">Select One</option>
                        <?=displayCatagories()?>
                    </select>
                <br />
                Price: From <input type="text" name="priceFrom" size="7"/>
                       To   <input type="text" name="priceTo" size="7"/>
                <br>
                Order result by:
                <br>
                
                <input type="radio" name="orderBy" value="price"/>Price<br>
                <input type="radio" name="orderBy" value="name"/>Name
                
                <br><br>
                <input type="submit" value="Search" name="searchForm"/>
            </form>    
            <br />
        </div>
        <?= displaySearchResults()?>
      <hr>
    </body>
</html>