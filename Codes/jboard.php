<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Alumnite</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="jboard.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <header>
            <div class="header">
                <h1>ALUMNITE</h1>
            </div>
            <div class="sideNav">
                <a href="home.html">Home</a>
                <a class="active" href="jboard.html">Job Board</a>
                <a href="event.html">Events</a>
                <a href="#">Profile</a>
            </div>
            <div class="portal">
                <div class="board">
                <table>
                        <thead>
                            <tr>
                                <th>Job ID</th>
                                <th>Job Title</th>
                                <th>Company</th>
                                <th>Website</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $servername = "localhost:3307";
                            $username = "root";
                            $password = "";
                            $database = "alumnite";

                            $connection = new mysqli($servername, $username, $password, $database);

                            if($connection->connect_error){
                                die("Connection failed: " . $connection->connect_error);
                            }

                            $sql = "SELECT * FROM `job`";
                            $result = $connection->query($sql);

                            if(!$result){
                                die("Invalid query: " . $connection->error);
                            }

                            while($row = $result->fetch_assoc()){
                                echo "<tr>
                                        <th> . $row["id"] </th>
                                        <th> . $row["title"] </th>
                                        <th> . $row["company"] </th>
                                        <th> . $row["website"] </th>
                                      </tr>"
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </header>
    </body>
</html>
