<?php
    
function create_chat_table(String $userName)
{

    $querry =
        "CREATE TABLE '$userName' (
            id int NOT NULL AUTO_INCREMENT,
            user_texts varchar(500),
            admin_texts varchar(500),
            text_at datetime DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (id))";
}
