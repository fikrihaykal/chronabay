<?php

    namespace App\Controllers;

    use App\Core\View;
    use App\Models\Transaction;

    class Transactions{

        public function index(){
            error_reporting(0);
            session_start();
            if(isset($_SESSION['id'])){
                $sid = $_POST['donorId'];
                $action = Transaction::checkout($sid);
    
                if($action > 0){
                    View::render("donations/insert.html", [
                        "donorSession" => $_SESSION["id"]
                    ]);
                } else{
                    session_destroy();
                    View::render("home/index.html");
                }
            } else{
                View::render("donations/identity.html");
            }
        }
    }

?>