<?php 
   require_once('../crud/connectie.php');

    $db = new operations();
    $db->update();
    $id = $_GET['U_ID'];
    $result = $db->get_record($id);
    $data = mysqli_fetch_assoc($result);
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
        background-image: url("../../css/background-colors5.jpg");
        background-repeat: no-repeat;
        background-size: 100% 350%;
    }

    button {
        margin-left: 40%;
    }

    h2 {
        text-align: center;
    }
    </style>

</head>

<body id="body">

<a href="../../index.html"><img src="./css/home.png" width="60px" height="60px" alt="home logo">
</a>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2> Een leerling wijzigen </h2>
                    </div>
                    <?php $db->Store_Record(); ?>
                    <div class="card-body">
                        <form method="POST">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <input type="text" name="usernamevak" placeholder="username" class="form-control mb-2"
                                required value="<?php echo $data['username']; ?>">
                            <input type="text" name="passwordvak" placeholder="password" class="form-control mb-2"
                                required value="<?php echo $data['password']; ?>">

                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success" name="btn_update"> wijzigin </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>