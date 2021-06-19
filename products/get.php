<?php
    include '../config/database.php';

    $page = 0;
    $limit = 6;
    $skip = 0;


    if(isset($_GET['page'])){
        $page=$_GET['page'];
        $skip = ($page-1)*$limit;
    }

    $postQuery = $db->query("SELECT * FROM `posts` LIMIT $skip, $limit;");
    $page_response=$db->query("SELECT COUNT(*) as total FROM `posts`;");
    $count = $page_response->fetch_object()->total;
    $pages=ceil($count / $limit);
    $result = [
        'posts'=>[]
    ];

    while($row = $postQuery->fetch_object()){
        array_push($result['posts'],$row);
    }

    $result['totalPages'] = $pages;

    echo json_encode($result);