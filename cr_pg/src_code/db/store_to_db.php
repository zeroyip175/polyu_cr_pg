<?php
	require "../db/connection.php";
	
    // Check if the projects are selected
    if (!isset($_POST["project_options1"]) and !isset($_POST["project_options2"]) and !isset($_POST["project_options3"])){
        // Redirect to details page
        echo '<html>
                <head>
                    <meta http-equiv="refresh" content="5;url=../details.php?sid=' . $_POST["sid"] . '""/>
                </head>
                <body>
                    <h1>No project is selected</h1>
                    <h2>Redirecting to Details page in 5 seconds</h2>
                </body>
                </html>';
    }
    else if (!isset($_POST["project_options1"]) or !isset($_POST["project_options2"]) or !isset($_POST["project_options3"])){
        echo '<html>
                <head>
                    <meta http-equiv="refresh" content="5;url=../details.php?sid=' . $_POST["sid"] . '""/>
                </head>
                <body>
                    <h1>Some project suggestions are empty</h1>
                    <h2>Redirecting to Details page in 5 seconds</h2>
                </body>
                </html>';
    }
    else{
        $sug1 = $_POST["project_options1"];
        $sug2 = $_POST["project_options2"];
        $sug3 = $_POST["project_options3"];
        $stuid = $_POST["sid"];
		echo $sug1, $sug2, $sug3, $stuid;
        if ($sug1 == $sug2 or $sug1 == $sug3 or $sug2 == $sug3){
            echo '<html>
                <head>
                    <meta http-equiv="refresh" content="5;url=../details.php?sid=' . $_POST["sid"] . '""/>
                </head>
                <body>
                    <h1>Some project suggestions are duplicated</h1>
                    <h2>Redirecting to Details page in 5 seconds</h2>
                </body>
                </html>';
        }
        else{
            // Commit to db
            $sql = "UPDATE sug_ratings SET `$sug1` = 3, `$sug2` = 2, `$sug3` = 1 WHERE `Serial_No` = $stuid";
            if (mysqli_query($conn, $sql)){
                // Redirect to summary page
                echo '<html>
                        <head>
                            <meta http-equiv="refresh" content="5;url=../summary.php" />
                        </head>
                        <body>
                            <h1>Record updated successfully</h1>
                            <h2>Redirecting to Summary page in 5 seconds</h2>
                        </body>
                        </html>';
            }
            else{
                '<html>
                    <head>
                        <meta http-equiv="refresh" content="5;url=../details.php?sid=' . $_POST["sid"] . '" />
                    </head>
                    <body>
                        <h1>Error updating record: '. mysqli_error($conn) . '</h1>
                        <h2>Redirecting to Summary page in 5 seconds</h2>
                    </body>
                </html>';
            }
        }
    }

?>