<?php 
   $contacts = $_REQUEST['contacts'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing the Contacts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col">
            <form action="controller.php" method="GET">
            <h1 style="text-align: center">Displaying the Data</h1>    
            <button class="btn btn-primary" type="submit" name="page" value="add">Add Contact</button>
            <button class="btn btn-primary" type="submit" name="page" value="delete">Delete Contact</button>
            <table class="table table-bordered table-striped">
                
                <thead>
                    <tr>
                        <th>Contact ID</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        for($index=0;$index<count($contacts);$index++){
                            echo "<tr><td><input type=\"radio\" name=\"contactID\" value=\"".$contacts[$index]->getContactID()."\"></td>";
                            echo "<td>".$contacts[$index]->getUsername()."</td>";
                            echo "<td>".$contacts[$index]->getEmail()."</td>";
                            echo "<td>".$contacts[$index]->getPasswd()."</td></tr>";
                        }
                    ?>
                </tbody>        
            </table>  
            </form>
        </div>
    </div>
</body>
</html>
    