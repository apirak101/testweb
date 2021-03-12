<?php 
    class $db;
        private $db;
        private $debug_mode;

    public function connect($user,$pass,$db,$debug){
        $this->db = mysqli("localhost",$user,$pass,$db);
        if($this->db->connect_errno){
            echo "Database connect fail {$this->db->connect_error}";
            exit(0);
        }else {
            $this->text_debug("database Connect success");
        }
    }
    public function query(){
        $this->db->query($sql);
    }

    public function close(){

    }

    private function text_debug(){
        if($this->debug_mode){
            echo $text;
        }
    }

?>