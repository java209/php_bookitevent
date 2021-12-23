<?php
    class crud{
        private $db;

        function __construct($conn){
            $this->db = $conn;
        }

        public function insertUser($fname, $lname, $dob, $email, $contact){
            try {
                //define sql statement to be executed
                $sql = "INSERT INTO user (firstname,lastname,dateofbirth,emailaddress,contactnumber)
                VALUES (:fname,:lname,:dob,:email,:contact)";
                //prepare the sql statement for execution
                $stmt =$this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                // execute statement
                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
       }

       public function insertEvent($fname, $lname, $ename, $doe, $eventdetail){
        try {
            //define sql statement to be executed
            $sql = "INSERT INTO event (firstname,lastname,eventname,doe,eventdetail)
            VALUES (:fname,:lname,:ename,:doe,:eventdetail)";
            //prepare the sql statement for execution
            $stmt =$this->db->prepare($sql);
            // bind all placeholders to the actual values
            $stmt->bindparam(':fname',$fname);
            $stmt->bindparam(':lname',$lname);
            $stmt->bindparam(':ename',$ename);
            $stmt->bindparam(':doe',$doe);
            $stmt->bindparam(':eventdetail',$eventdetail);
           // execute statement
            $stmt->execute();
            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
   }

       //VIEW user profile details
       public function getUserDetails($id){
        $sql = "select * from user where user_id = :id";
        $stmt = $this->db->prepare($sql);
           $stmt->bindparam(':id',$id);
           $stmt->execute();
           $result = $stmt->fetch();
           return $result;
       }

        //VIEW user profile
        public function getUserProfile(){
            try{
             $sql = "select * from user where user_id = user_id";
             $result = $this->db->query($sql);
             return $result;
            }
            catch (PDOException $e) {
             echo $e->getMessage();
             return false;
             }
 
        }
        
        //VIEW Events 
        public function getEvent(){
            try{
             $sql = "select * from event";
             $result = $this->db->query($sql);
             return $result;
            }
            catch (PDOException $e) {
             echo $e->getMessage();
             return false;
             }
 
        }

          //delete record
       public function deleteevent($id){
        try{
            $sql = "delete from event where event_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->execute();
            return true;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
            }
       }

        public function getEventDetails($id){
            $sql = "select * from event where event_id = :id";
            $stmt = $this->db->prepare($sql);
               $stmt->bindparam(':id',$id);
               $stmt->execute();
               $result = $stmt->fetch();
               return $result;
           }


           public function editevent($id,$fname, $lname, $eventname, $doe,$eventdetail){
            try{ 
                 $sql = "UPDATE `event` SET `firstname`=:fname,`lastname`=:lname,
                 `eventname`=:eventname,`doe`=:doe,`eventdetail`=:eventdetail,`
                 WHERE event_id = :id ";
                 
                 $stmt = $this->db->prepare($sql);
                 // bind all placeholders to the actual values
                 $stmt->bindparam(':id',$id);
                 $stmt->bindparam(':fname',$fname);
                 $stmt->bindparam(':lname',$lname);
                 $stmt->bindparam(':dob',$eventname);
                 $stmt->bindparam(':email',$doe);
                 $stmt->bindparam(':contact',$eventdetail);
 
                 // execute statement
                 $stmt->execute();
                 return true;
            }catch (PDOException $e) {
             echo $e->getMessage();
             return false;
            }
       
       
    }

    

}
?>   

