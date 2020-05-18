<?php

    namespace App\Models;

    use App\Core\Model;

    use PDO;
    use PDOException;

    class Transaction extends Model{
        public static function checkout($sid){
            try{
                error_reporting(0);
                session_start();
                if(isset($_SESSION['id'])){
                    $db = static::getDb();
    
                    $tid = strval(rand(1, 999999));
    
                    $sql = "INSERT INTO transactions (transactionId, donorId) VALUES (?,?)";
    
                    $stmt = $db->prepare($sql);
                    $stmt->execute([$tid, $sid]);
                    
                    $stmt2 = $db->query("UPDATE donations SET transactionId=$tid, dStatus=1 WHERE (donorId='$sid' AND dStatus=0)");
                    $stmt2->execute();
                } else{
                    View::render("donations/identity.html");
                }
            } catch(PDOException $e){
                echo "Terjadi kegagalan koneksi database";
            }
        }
    }

?>