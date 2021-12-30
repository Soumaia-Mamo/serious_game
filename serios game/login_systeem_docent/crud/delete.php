<?php 


require_once('../crud/connectie.php');
$db = new operations();
    
    if(isset($_GET['D_ID']))
    {
        global $db;
        $ID = $_GET['D_ID'];

        if($db->Delete_Record($ID))
        {
            $db->set_messsage('<div class="alert alert-danger"> De leerling is verwijderd</div>');
            header("location:/serios game/login_systeem_docent/welcome.php");
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger">  Er is iets mis met het verwijderen van de leerling </div>'); 
        }
    }


?>