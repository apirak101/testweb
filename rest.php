<?php 
    include_once "dbcontrol.php";
    include_once "util.php";
    $debug_mode = false;
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        get_data($debug_mode);
    }else if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        text_debug("POST may be support next time<br>",$debug_mode);
    }else{
        http_response_code(405);
    }

    function get_data(){
        $my_db = new db("root","","book",false);
        $data = $my_db->query("select * from api");
        echo json_encode($data);
    }

?>