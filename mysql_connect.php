<?php #mysql_connect.php

// This file contains the database access information. This file also 
// establishes a connection to MySQL and selects the database.

// Set the database access information as constants.
DEFINE ('DB_USER', 'qrcdb');
DEFINE ('DB_PASSWORD', 'xxxxxxxxxxxxxxxxx');
DEFINE ('DB_HOST', 'qrcdb');
DEFINE ('DB_NAME', 'qrcdb');

if ($dbc = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD)) { // Make the connnection.

        if (!mysql_select_db (DB_NAME)) { // If it can't select the database.

                // Handle the error.
                my_error_handler (mysql_errno(), 'Could not select the database: ' . mysql_error());

                // Print a message to the user, include the footer, and kill the script.
                echo '<p><font color="red">The site is currently experiencing technical difficulties. We apologize for any inconvenience.</font></p>';
                include_once ('includes/footer.html');
                exit();

        } // End of mysql_select_db IF.

} else { // If it couldn't connect to MySQL.

        // Print a message to the user, include the footer, and kill the script.
        my_error_handler (mysql_errno(), 'Could not connect to the database: ' .                                                                                                  mysql_error());
        echo '<p><font color="red">The site is currently experiencing technical                                                                                                  difficulties. We apologize for any inconvenience.</font></p>';
        include_once ('includes/footer.html');
        exit();

} // End of $dbc IF.

// Function for escaping and trimming form data.
function escape_data ($data) {
        global $dbc;
        if (ini_get('magic_quotes_gpc')) {
                $data = stripslashes($data);
        }
        return mysql_real_escape_string (trim ($data), $dbc);
} // End of escape_data() function.
?>
