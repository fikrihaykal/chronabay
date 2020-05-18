<?php

    namespace App\Models;

    use App\Core\Model;

    use PDO;
    use PDOException;

    class Donation extends Model{
        public static function allDonation(){
            try{
                $db = static::getDb();

                $stmt = $db->query('SELECT * FROM donations INNER JOIN donors ON donations.donorId=donors.donorId WHERE dStatus=1');
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return $results;
            } catch(PDOException $e){
                echo "Terjadi kegagalan koneksi database";
            }
        }

        public static function customDonation($params){
            try{
                $db = static::getDb();

                $stmt = $db->query("SELECT * FROM donations INNER JOIN donors ON donations.donorId=donors.donorId WHERE (dStatus=1 AND jenis='$params[0]')");
                
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return $results;
            } catch(PDOException $e){
                echo "Terjadi kegagalan koneksi database";
            }
        }

        public static function addDonation($insId, $insJenis, $insJumlah){
            try{
                error_reporting(0);
                session_start();
                if(isset($_SESSION['id'])){
                    $db = static::getDb();
    
                    $sql = "INSERT INTO donations (donorId, jenis, amount, dStatus) VALUES (?,?,?,?)";
    
                    $stmt = $db->prepare($sql);
                    $stmt->execute([$insId, $insJenis, $insJumlah, 0]);
                    
                    $stmt2 = $db->query("SELECT * FROM donations WHERE(dStatus=0 AND donorId='$insId')");
    
                    $results = $stmt2->fetchAll(PDO::FETCH_ASSOC);
    
                    return $results;
                } else{
                    View::render("donations/identity.html");
                }
            } catch(PDOException $e){
                echo "Terjadi kegagalan koneksi database";
            }
        }

        public static function cancelCustom($cpost, $sid){
            try{
                error_reporting(0);
                session_start();
                if(isset($_SESSION['id'])){
                    $db = static::getDb();
    
                    $sql = "DELETE FROM donations WHERE donationId='$cpost'";
    
                    $stmt = $db->prepare($sql);
                    $stmt->execute();
                    
                    $stmt2 = $db->query("SELECT * FROM donations WHERE(dStatus=0 AND donorId='$sid')");
    
                    $results = $stmt2->fetchAll(PDO::FETCH_ASSOC);
    
                    return $results;
                } else{
                    View::render("donations/identity.html");
                }
            } catch(PDOException $e){
                echo "Terjadi kegagalan koneksi database";
            }
        }
    }

?>