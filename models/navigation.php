<?php

function saveNavigationEntry($data){
    global $db_connection;
    if($data['id']){
        // update
    }else{
        try{
            // create
//            var_dump($data);
//            die();
            $stmt = $db_connection->prepare("INSERT INTO navigations (title, nav_title, priority, starred) VALUES (?,?,?,?)");
            $stmt->bind_param("ssii", $title, $nav_title, $priority, $starred);
            $title = $data['title'];
            $nav_title = $data['nav_title'];
            $priority = $data['priority'] ?? 1;
            $starred = $data['starred'] == 0;
            $stmt->execute();

            die('Inserted ID ' . $stmt->insert_id);
            return $stmt->insert_id;
        }catch(Exception $e){
            die($e->getMessage());
            return false;
        }finally{
        }
        die('Inserted ID ' . $stmt->insert_id);

    }
    die('nathing');
}