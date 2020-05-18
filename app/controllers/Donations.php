<?php

    namespace App\Controllers;

    use App\Core\Model;
    use App\Core\View;
    use App\Models\Donation;
    use App\Models\Donor;

    class Donations{

        public function donorId(){
            error_reporting(0);
            session_start();
            if(isset($_SESSION['id'])){
                View::render("donations/insert.html", [
                    "donorSession" => $_SESSION["id"]
                ]);
            } else{
                View::render("donations/identity.html");
            }
        }

        public function searchId(){
            error_reporting(0);
            session_start();
            if(isset($_SESSION['id'])){
                View::render("donations/insert.html", [
                    "donorSession" => $_SESSION["id"]
                ]);
            } else{
                $id = $_POST['donorId'];
    
                $action = Donor::getId($id);
    
                if($action === 1){
                    View::render("donations/insert.html", [
                        "donorSession" => $_SESSION['id']
                    ]);
                } else{
                    View::render("donors/sign-up.html");
                }
            }
        }

        public function addDonor(){
            error_reporting(0);
            session_start();
            if(isset($_SESSION['id'])){
                View::render("donations/insert.html", [
                    "donorSession" => $_SESSION["id"]
                ]);
            } else{
                $donorId = $_POST['donorId'];
                $donorName = $_POST['donorName'];
                $city = $_POST['donorCity'];
    
                $action = Donor::regDonor($donorId, $donorName, $city);
    
                if($action > 0){
                    View::render("donations/insert.html", [
                        "donorSession" => $_SESSION["id"]
                    ]);
                } else{
                    View::render("donors/sign-up.html");
                }
            }
        }

        public function donationAdd(){
            error_reporting(0);
            session_start();
            if(isset($_SESSION['id'])){
                $insId = $_SESSION['id'];
                $insJenis = $_POST['jenis'];
                $insJumlah = $_POST['amount'];
    
                $action = Donation::addDonation($insId, $insJenis, $insJumlah);
    
                View::render("donations/insert.html", [
                    "donorSession" => $insId,
                    "donations" => $action
                ]);
            } else{
                View::render("donations/identity.html");
            }
        }

        public function cancelCustom(){
            error_reporting(0);
            session_start(0);
            if(isset($_SESSION['id'])){
                $cpost = $_POST['donationCancel'];
                $sid= $_SESSION['id'];

                $action = Donation::cancelCustom($cpost, $sid);

                View::render("donations/insert.html", [
                    "donorSession" => $sid,
                    "donations" => $action
                ]);
            } else{
                View::render("donations/identity.html");
            }
        }
    }

?>