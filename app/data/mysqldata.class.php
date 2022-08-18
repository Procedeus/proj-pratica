<?php

class mysqldata{
    protected function connect(){
        try{
            return new PDO('mysql:dbname=teste;host=localhost;port=3306', 'root', '');
        } catch(PDOException $e){
            return null;
        }     
    }

    protected function execute($sql, $sql_params = []){
        $db = $this->connect();

        if($db == null){
            return;
        }

        $query = $db->prepare($sql);
        $query->execute($sql_params);
        $db = null;
    }
    
    protected function query($sql, $sql_params = []){
        $db = $this->connect();
        if($db == null){
            return [];
        }

        $query = null;

        if(empty($sql_params)){
            $query = $db->query($sql);
        } else {
            $query = $db->prepare($sql);
            $query->execute($sql_params);
        }

        $db = null;
        return $query;
    }
}
?>