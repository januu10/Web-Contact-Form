<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body style="padding:50px">
    <h1>Contact Us / Feedback Form</h1>
    <div class="container">
        <form method="post" action="task.php" class="form-example" id="form">
            <div class="mb-3">
                <label for="fname">Enter First Name:</label>
                <input type="text" name="fname" id="fname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="lname">Enter Last Name:</label>
                <input type="text" name="lname" id="lname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email">Enter Email ID:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <select name="subject" id="subject" class="form-select">
                    <option value=""> -- </option>
                    <option value="Query"> Query </option>
                    <option value="Feedback"> Feedback </option>
                    <option value="Complain"> Complain </option>
                    <option value="Other"> Other </option>
                </select>                
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">Comment</label>
                <textarea name="comment" id="edit"></textarea>
                <script>
                    ClassicEdit
                        .create(document.querySelector('#edit'))
                        .catch(error => {
                            console.error(error);
                        });
                </script>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>

        </form> 
    </div>
</body>
</html>


<?php


?>