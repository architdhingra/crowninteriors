<?php
class DB_CONNECT {
    
    // constructor
    public function __construct() {
        
    }
    // destructor
    function __destruct() {
        $this->close();
    }
   
   public function connect(){
       $mysqli = new mysqli("crowninternationalregd.com", "ibigrhhe_ci", "]n6S4]03pH", "ibigrhhe_ci");
        return $mysqli;
   }
    /*function connect() {
        
        echo "test";
        $con = mysqli_connect("localhost", "ibigrhhe_ci", "w@d@cademy123!!") or die(mysqli_error());
        $db = mysqli_select_db("zadmin_wnd") or die(mysqli_error());
        
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }*/
        /* check if server is alive */
        /*if ($mysqli->ping()) {
            printf ("Our connection is ok!\n");
        } else {
            printf ("Error: %s\n", $mysqli->error);
        }
        
        // returing connection cursor
        return $con;
     
        
    }*/
    function close() {
        // closing db connection
       // mysqli_close($con);
    }
}
?>