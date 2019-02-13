<!------------------------------------------------------------------------------
  Modification Log
  Date          Name            Description
  ----------    -------------   -----------------------------------------------
  2-12-2019      VHarper      Initial Deployment.
  ----------------------------------------------------------------------------->
<?php
//   Gets employees employeeID
     function getEmployees(){
        $db = Database::getDB();
        $query = 'SELECT * FROM employees
                  ORDER BY employeeID';
        $statement = $db->prepare($query);
        $statement->execute();
        $employees = $statement;

        return $employees;
        }
?>