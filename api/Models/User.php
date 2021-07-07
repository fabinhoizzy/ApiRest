<?php
    namespace App\Models;

    class User
    {
        private static $table = 'user';

        public static function get(int $id) {
            $connPdo = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER,DBPASS);

            $sql = 'SELECT * FROM '.self::$table.' WHERE id = :id';
            $stmt = $connPdo->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            if($stmt->rowCount() > 0) {
                
            } else {
                throw new \Exception("Nenhum usuario encontrado!");
            }


        }
    }