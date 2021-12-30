

<?php 
   require_once('../login_systeem_docent/crud/connectie.php');
   


   $db = new operations();
    $result=$db->view_record();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>CRUD met behulp van OOP</title>

    
    <style>
    #body {
   background-image: url("../css/background-colors4.png");
   background-size: cover;
   background-repeat: no-repeat;
    }
    
    </style>
</head>
<body id="body" >

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="text-center text-dark"> serious game </h2>
                        <a href="./crud/create.php" class="btn btn-secondary">leerling Toevoegen</a>

                    </div>
                    <div class="card-body">
                        <?php
                          $db->display_message(); 
                          $db->display_message();
                        ?>
                        <table class="table table-bordered">
                            <tr>
                            <td style="width: 10%"> ID </td>
                                <td style="width: 10%"> username </td>
                                <td style="width: 20%"> password </td>
                                <td style="width: 20" colspan="2">Operations</td>
                            </tr>
                            <tr>
                                <?php 
                                    while($data = mysqli_fetch_assoc($result))
                                    {
                                ?>
                                    <td><?php echo $data['id'] ?></td>
                                    <td><?php echo $data['username'] ?></td>
                                    <td><?php echo $data['password'] ?></td>
                                    <td><a href="./crud/update.php?U_ID=<?php echo $data['id'] ?>" class="btn btn-success">wijzigen</a></td>
                                    <td><a href="./crud/delete.php?D_ID=<?php echo $data['id'] ?>" class="btn btn-danger">verwijderen</a></td>
                            </tr>
                            <?php
                                    }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>