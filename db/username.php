<?php

class username{
    private $db;

    function __construct($conn){
        $this->db = $conn;

        }

        public function insertusername($loginname,$password){
            try {
                $result = $this->getuserbyloginname($loginname);
                if($result['num'] > 0){
                    return false;
                }else{
                    $new_password = md5($password. $loginname);
                    //define sql statement to be executed
                $sql = "INSERT INTO username (loginname,password)
                VALUES (:loginname,:password)";
                //prepare the sql statement for execution
                $stmt =$this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':loginname',$loginname);
                $stmt->bindparam(':password',$new_password);
                // execute statement
                $stmt->execute();
                return true;
   
                }
                
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getusername($loginname,$password){
            try{
                $sql = "select * from username where loginname = :loginname AND password = :password";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':loginname',$loginname);
                $stmt->bindparam(':password',$password);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
                }catch (PDOException $e) {
                 echo $e->getMessage();
                 return false;
                 }
             }

        public function getuserbyloginname($loginname){
            try{
                $sql = "select count(*) as num from username where loginname = :loginname";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':loginname',$loginname);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
                }catch (PDOException $e) {
                 echo $e->getMessage();
                 return false;
                 }

        }

        }
   

?>