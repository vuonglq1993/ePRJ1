<?php
include_once 'functions/db.php';
    function get_collection_data() {
        $sql = "SELECT c.*, p.product_name, COUNT(p.product_id) AS product_count
                FROM collections c
                LEFT JOIN products p 
                ON c.collection_id = p.collection_id
                GROUP BY c.collection_id, c.collection_name";
        return select($sql);
    }