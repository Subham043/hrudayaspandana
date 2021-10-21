<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Admin</title>
</head>

<body>
    <div class="container">
        <h3 class="mb-4"><?php echo $fname.' '.$lname; ?> tried to contact you. The details are given below:</h3>
        <table class="table table-striped table-hover">
           
            <tbody>
                <tr>
                    <th scope="row" style="width:10%">Name</th>
                    <td><?php echo $fname.' '.$lname; ?> </td>
                    
                </tr>
                <tr>
                    <th scope="row">Email</th>
                    <td><?php echo $email; ?></td>
                    
                </tr>
                <tr>
                    <th scope="row">Phone</th>
                    <td><?php echo $phone; ?></td>
                    
                </tr>
                <tr>
                    <th scope="row">Trust</th>
                    <td><?php echo $trust; ?></td>
                    
                </tr>
                <tr>
                    <th scope="row">Message</th>
                    <td><?php echo $message; ?></td>
                    
                </tr>
               
            </tbody>
        </table>
    </div>
</body>

</html>