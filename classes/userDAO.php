<?php

require 'connection_jr.php';

class UserAccessObject extends Database{

    public function addUser($user_name, $user_email, $user_register_date, $user_password){
        $sql = "INSERT INTO user(user_name, user_email, user_register_date, user_password)  VALUES ('$user_name', '$user_email', '$user_register_date', '$user_password')";
        $result = $this->conn->query($sql);   
        return $result;
    }

    public function retrieveALLUser(){
       
        $sql = "SELECT * FROM user WHERE user_status = 'A'";
        
        $result = $this->conn->query($sql);
        $rows = array();     
        while ($row=$result->fetch_assoc()){
        $rows[] = $row;
        }
        return $rows;
    }
    
    public function retrieveSingleUser($id){
        $sql = "SELECT * FROM user WHERE user_id = '$id'";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }

    public function updateUser($user_name, $user_email, $user_register_date, $user_password){
        $sql = "UPDATE user SET user_name = '$user_name', user_email = '$user_email',
                user_register_date = '$user_register_date', user_password = '$user_password') 
                WHERE user_id = '$user_id'";
        $result = $this->conn->query($sql);
        return $result;

    }
    
    public function deleteUser($user_id){
        $sql = "UPDATE user SET user_status = 'D' WHERE user_id = '$user_id'";
        $result = $this->conn->query($sql); 
        return $result;
    }
    
    public function login($email, $password){
        $sql = "SELECT * FROM user
                WHERE user_email = '$email' AND user_password = '$password'";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }

   

}

?>