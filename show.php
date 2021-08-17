<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $address = $salary = "";
$name_err = $address_err = $salary_err = "";
 
// Processing form data when form is submitted
{
    // Validate name
    
    $id =  3;

    
    // Check input errors before inserting in database
//    if(empty($name_err) && empty($address_err) && empty($salary_err)){
        // Prepare an insert statement
        $sql = "SELECT name from employees WHERE id = $id" ;
         
        // if($stmt = mysqli_prepare($link, $sql)){
        //     // Bind variables to the prepared statement as parameters
        //     mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_address, $param_salary);
            
        //     // Set parameters
        //     $param_name = $name;
        //     $param_address = $address;
        //     $param_salary = $salary;
            
        //     // Attempt to execute the prepared statement
        //     if(mysqli_stmt_execute($stmt)){
        //         // Records created successfully. Redirect to landing page
        //         header("location: index.php");
        //         exit();
        //     } else{
        //         echo "Oops! Something went wrong. Please try again later.";
        //     }
        // }
         
        // Close statement
    //     mysqli_stmt_close($stmt);
    // }
    
    // // Close connection
    // mysqli_close($link);
    $result = mysqli_query($link, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
    echo $row["name"];
        }


}


}

        // Free result set

?>
 
