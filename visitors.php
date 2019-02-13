<!------------------------------------------------------------------------------
  Modification Log
  Date          Name            Description
  ----------    -------------   -----------------------------------------------
  2-12-2019      VHarper      Initial Deployment.
  ----------------------------------------------------------------------------->
<?php
    // Adds new visitor to the visitors database  
    function add_visitor ($name, $email, $phone, $message) {
        $db = Database::getDB();
        $query = 'INSERT INTO visitors
                     (name, email, phone, message)
                  VALUES
                     (:name, :email, :phone, :message)';
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':phone', $phone);
        $statement->bindValue(':message', $message);
        $statement->execute();
        $statement->closeCursor();
       /* echo "Fields: " . $fname . $email . $phone . $message;  */
    }
    // Joins the history databse with the Visitors/Employees database, based on their IDs
        function getVisitors($employeeID){
        $db = Database::getDB();

        $query2 = 'SELECT * FROM visitors
                join history on visitors.visitorID = history.visitorID
                WHERE employeeID = :employeeID
                ORDER BY email';
        $statement2 = $db->prepare($query2);
        $statement2->bindValue(":employeeID", $employeeID);
        $statement2->execute();
        $visitors = $statement2;
        return $visitors;
    }
    
    // Delete Visitors logic
    function deleteVisitor($visitorID){
        $db = Database::getDB();
        $visitorID = filter_input(INPUT_POST, 'visitorID', 
                FILTER_VALIDATE_INT);
        $query = 'DELETE FROM visitors
                  WHERE visitorID = :visitorID';
        $statement = $db->prepare($query);
        $statement->bindValue(':visitorID', $visitorID);
        $statement->execute();
        $statement->closeCursor();
        //echo ($visitorID);
        
    }
?>