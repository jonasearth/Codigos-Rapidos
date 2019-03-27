<?php

class Connection{


	function update_db($table, $rows, $condition){
    	$query = "UPDATE ".$table." SET ".$rows." ".$condition."";
    	if (mysqli_query($GLOBALS['conn'], $query)) {
    		return true;
		} else {
    		return false;
		}

    }

    function insert_db($table, $rows, $values){
    	$query = "INSERT INTO ".$table." ".$rows." VALUES (".$values.")";
    	if(mysqli_query($GLOBALS['conn'], $query)){
    		return true;
    	}else{
    		return false;
    	}

    }

    function select_db($rows, $table, $condition = "", $options = ""){	
    	$query = "SELECT ".$rows." FROM ".$table." ".$condition." ".$options."";
    	$result = mysqli_query($GLOBALS['conn'], $query);
    
        if (mysqli_num_rows($result) > 0) {
    		$rows = mysqli_fetch_assoc($result);
    		return $rows;
    	}else{
    		return false;
    	} 
    	
    }
    
    function delete_db($table, $condition){
    	$query = "DELETE FROM ".$table." ".$condition."";
    	if (mysqli_query($GLOBALS['conn'], $query)) {
    		return true;
		} else {
    		return false;
		} 

    }





}