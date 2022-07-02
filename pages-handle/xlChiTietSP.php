<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "SELECT P.*, C.Category_Name, PC.Publishing_Company_Name 
                FROM product P, category C, publishing_company PC 
                WHERE P.Category_Id = C.Category_Id AND P.Publishing_Company_Id = PC.Publishing_Company_Id AND P.Product_Id = $id";

        $result = LoadData($sql);
    }
?>