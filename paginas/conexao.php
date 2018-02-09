<?php

            define('MYSQL_HOST', "localhost");
            define('MYSQL_USER', "root");
            define('MYSQL_PASSWORD', "");
            define('MYSQL_DB_NAME', "siscomf");

            try{

            $pdo = new PDO('mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DB_NAME,MYSQL_USER,MYSQL_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo -> exec("SET CHARACTER SET utf8");

            }
            catch (PDOException $e){

                echo "Erro ao conectar com o MYSQL:".$e->getMessage();

            }
