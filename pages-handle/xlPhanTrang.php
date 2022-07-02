<?php

    $current_page = isset($_GET['cur_page']) ? $_GET['cur_page'] : 1;
    $limit = 9;
    
    $total_page = ceil($total_records / $limit);

    if($current_page > $total_page)
        $current_page = $total_page;
    
    else if($current_page < 1)
        $current_page = 1;

    $start_page = ($current_page - 1) * $limit;   
    $sql .= " LIMIT $start_page, $limit";
    $result = LoadData($sql);

?>