<?php

    namespace App\Controllers;

    use App\Models\Donation;
    use App\Core\View;

    class Home{
        public function index($params){
            View::render("home/index.html");
        }

        public function totalDonation(){
            $totalDonation = Donation::allDonation();
            
            View::render("home/total.html", [
                "donations" => $totalDonation
            ]);
        }

        public function customDonation($params){
            $totalDonation = Donation::customDonation($params);
            
            View::render("home/total.html", [
                "donations" => $totalDonation
            ]);
        }
    }

?>