<?php

/**
** Класс конфигурации базы данных
*/
class DB{

	public static function getDb(){
        $hostname="localhost";
        $username="murashev_ai";
        $password="ghtdtl1229";
        $dbname="Products";
        $usertable="Products";
        $link = mysqli_connect($hostname,$username, $password);
        mysqli_connect($hostname,$username, $password);
            
        mysqli_select_db($link,$dbname);
        
        # Проверка наличия записи
        
        $query = "SELECT * FROM $usertable";
        
        $result = mysqli_query($link,$query);
        return $result;
    }
}