<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
</head>
<body>
    <div class="mb-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Comment</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        <?php echo $_POST["fname"]; ?>
                    </th>
                    <th scope="row">
                        <?php echo $_POST["lname"]; ?>
                    </th>
                    <th scope="row">
                        <?php echo $_POST["email"]; ?>
                    </th>
                    <th scope="row">
                        <?php echo $_POST["subject"]; ?>
                    </th>
                    <th scope="row">
                        <?php echo $_POST["comment"]; ?>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>