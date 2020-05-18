<?php

    namespace App\Controllers;

    use App\Core\Model;
    use App\Core\View;
    use App\Models\Donor;

    class Donors{

        public function index(){
            error_reporting(0);
            session_start();
            if(isset($_SESSION['id'])){

                $action = Donor::myDonation();

                View::render("donors/index.html", [
                    "donations" => $action
                ]);

                session_destroy();
            } else{
                View::render("donors/identity.html");
            }
        }

        public function searchId(){
            error_reporting(0);
            session_start();
            if(isset($_SESSION['id'])){
                $action = Donor::myDonation();

                View::render("donors/index.html", [
                    "donations" => $action
                ]);

                session_destroy();
            } else{
                $id = $_POST['donorId'];
    
                $action = Donor::getId($id);
    
                if($action === 1){
                    $action = Donor::myDonation();
    
                    View::render("donors/index.html", [
                        "donations" => $action
                    ]);

                    session_destroy();
                } else{
                    View::render("donors/error.html");
                }
            }
        }

    }

?>