<?php

class NewsController
{
    public static function getLatestNews($db) {
        try {
            $db->connect();
            $sql = "SELECT *, c.name as \"c_name\", s.name as \"s_name\" FROM news as n
            JOIN categories as c ON n.category_id = c.id
            JOIN services as s ON n.service_id = s.id
            JOIN users as u ON n.author_id = u.id
            ORDER BY date_posted DESC LIMIT 3";
            $results = $db->query($sql);
            $db->disconnect();
            return $results;
        } catch (Exception $e) {
            return false;
        }   
    }
}