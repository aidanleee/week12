<?php

include 'function.php';

if(isset($_GET['movie'])) {
    // pass the connection and the movie id to a function
    $data = get_single_video($conn, $_GET['movies']);
    echo json_encode($data);
}

else {
    // pass the connection and the movie id to a function
    $data = get_all_videos($conn);
    echo json_encode($data);
}
?>