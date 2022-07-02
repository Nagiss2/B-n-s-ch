<?php
    function isChecked_LoaiSach($category_id){
        if($_REQUEST['view'] == "filter"){
            if(isset($_SESSION['ds_LoaiSach'])){
                if(array_key_exists($category_id, $_SESSION['ds_LoaiSach']))
                    return 'value="' . $category_id . '" checked>';
                else
                    return 'value="' . $category_id . '">';
            }	 
            else
                return 'value="' . $category_id . '">';
        }
        else{
            unset($_SESSION['ds_LoaiSach']);
            return 'value="' . $category_id . '">';
        }
    }

    function isChecked_NXB($publishing_company_id){
        if($_REQUEST['view'] == "filter"){
            if(isset($_SESSION['ds_NXB'])){
                if(array_key_exists($publishing_company_id, $_SESSION['ds_NXB']))
                    return 'value="' . $publishing_company_id . '" checked>';
                else
                    return 'value="' . $publishing_company_id . '">';
            }	 
            else
                return 'value="' . $publishing_company_id . '">';
        }
        else{
            unset($_SESSION['ds_NXB']);
            return 'value="' . $publishing_company_id . '">';
        }
    }

?>