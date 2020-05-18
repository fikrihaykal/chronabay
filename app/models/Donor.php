<?php

    namespace App\Models;

    use App\Core\Model;

    use PDO;
    use PDOException;

    class Donor extends Model{
        public static function getId($id){
            try{
                error_reporting(0);
                session_start();
                if(isset($_SESSION['id'])){
                    View::render("donations/insert.html", [
                        "donorSession" => $_SESSION["id"]
                    ]);
                } else{
                    $db = static::getDb();
    
                    $stmt = $db->prepare('SELECT * FROM donors WHERE donorId = :id');
                    $stmt->bindParam(":id", $id);
                    $stmt->execute();
    
                    $results = $stmt->rowCount();
                    
                    if($results === 1){
                        session_start();
                        $_SESSION['id'] = $id;
                    }
                    
                    return $results;
                }
            } catch(PDOException $e){
                echo "Terjadi kegagalan koneksi database";
            }
        }

        public static function regDonor($donorId, $donorName, $city){
            try{
                error_reporting(0);
                session_start();
                if(isset($_SESSION['id'])){
                    View::render("donations/insert.html", [
                        "donorSession" => $_SESSION["id"]
                    ]);
                } else{
                    $db = static::getDb();
    
                    $stmt = $db->prepare("INSERT INTO donors (donorId, donorName, city) VALUES (?,?,?)");
                    $stmt->execute([$donorId, $donorName, $city]);
                    $results = $stmt->rowCount();
    
                    session_start();
                    $_SESSION['id'] = $donorId;
    
                    return $results;
                }
            } catch(PDOException $e){
                echo "Terjadi kegagalan menyimpan data";
            }
        }

        public static function myDonation(){
            try{
                $db = static::getDb();
                $sid = $_SESSION['id'];

                $stmt = $db->query("SELECT * FROM donations INNER JOIN donors ON donations.donorId=donors.donorId WHERE (dStatus=1 AND donations.donorId='$sid')");
                
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return $results;
            } catch(PDOException $e){
                echo "Terjadi kegagalan koneksi database";
            }
        }
    }

?>