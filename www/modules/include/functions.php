<?php
function get_categories(){
    global $link;
    $sql = "SELECT * FROM categories ";
    $result = mysqli_query($link, $sql);
    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $categories;
}

function get_posts(){
    global $link;
    $sql = "SELECT * FROM posts ";
    $result = mysqli_query($link, $sql);
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $posts;
}

function get_contacts(){
    global $link;
    $sql = "SELECT * FROM contacts ";
    $result = mysqli_query($link, $sql);
    $contacts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $contacts;
}

function get_post_by_id($post_id){
    global $link;
    $sql ="SELECT * FROM posts WHERE id = ".$post_id;
    $result = mysqli_query($link, $sql);
    $post = mysqli_fetch_assoc($result);
    return $post;
}