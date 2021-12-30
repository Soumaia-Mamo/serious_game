<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    #main {

        background-repeat: no-repeat;
        background-size: 2000px 950px;
        background-image: url("https://st4.depositphotos.com/1015568/20274/v/600/depositphotos_202749546-stock-illustration-cute-kids-school-board-books.jpg");

    }

    .btn-labeled{
        width: 55%;
    height: 100%;
  
    }
    img{
        height: 75px;
        width:75px;
    }
.container{
    margin-top: 270px;
    padding-left: 100px;
}

.row{
    margin-top:50px
}

h1{
    color:white;
}
    
  
    </style>
</head>

<body id="main">

<div class="container">
<h1 class="my-5">Hoi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.Welkom op rekenspel .</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Stel je wachtwoord opnieuw in</a>
        <a href="logout.php" class="btn btn-danger ml-3">Uitloggen</a>
    </p>
   
        <div class="row">
            <div class="col-md-6">
                <a href="../login_systeem_leerling/game/optellen.php">
                    <button type="button" class="btn btn-labeled btn-success btn-lg">
                        <img src="..\login_systeem_docent\crud\css\plus.png" alt="plus icon">
                        Optellen</button></a>
            </div>
            <div class="col-md-6">
                <a href="../login_systeem_leerling/game/vermenigvuldigen.php">
                    <button type="button" class="btn btn-labeled btn-danger btn-lg">
                        <img src="..\login_systeem_docent\crud\css\multi.png" alt="plus icon">
                        vermenigvuldigen</button></a>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-6">

                <a href="../login_systeem_leerling/game/minsommen.php">
                    <button type="button" class="btn btn-labeled btn-warning btn-lg"><img
                            src="..\login_systeem_docent\crud\css\min.png" alt="plus icon">
                        Minsommen</button>

                </a>
            </div>
            <div class="col-md-6">

                <a href="../login_systeem_leerling/game/delen.php">
                    <button type="button" class="btn btn-labeled btn-primary btn-lg"><img
                            src="..\login_systeem_docent\crud\css\delen.png" alt="plus icon">
                        Delen</button>

                </a>
            </div>
</div>
    </div>
    </div>



    </div>
    </div>

</body>

</html>




