<?php

require 'connection_jr.php';

class RequestAccessObject extends Database{

    public function addRequest($req_name, $req_date){
        $sql = "INSERT INTO user(req_name, req_date)  VALUES ('$req_name', '$req_date')";
        $result = $this->conn->query($sql);   
        return $result;
    }

    public function retrieveALLRequest(){
       
        $sql = "SELECT * FROM request WHERE req_status = 'A'";
        
        $result = $this->conn->query($sql);
        $rows = array();     
        while ($row=$result->fetch_assoc()){
        $rows[] = $row;
        }
        return $rows;
    }
    
    public function retrieveSingleRequest($id){
        $sql = "SELECT * FROM request WHERE req_id = '$id'";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }

    public function updateRequest($req_name, $req_date){
        $sql = "UPDATE request SET req_name = '$req_name', req_date = '$req_date') 
                WHERE req_id = '$req_id'";
        $result = $this->conn->query($sql);
        return $result;

    }
    
    public function deleteRequest($req_id){
        $sql = "UPDATE request SET req_status = 'D' WHERE req_id = '$req_id'";
        $result = $this->conn->query($sql); 
        return $result;
    }
    

   

}

?>