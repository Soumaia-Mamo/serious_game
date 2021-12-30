<!-- <?php 

    
require_once('../login_systeem_docent/crud/connectie.php');

$db = new dbconfig();

    class operations extends dbconfig
    {
       //Invoegen :
        public function Store_Record()
        {
            global $db;
            if(isset($_POST['btn_save']))
            {
                $username      = $db->check($_POST['usernamevak']);
                $password      = $db->check($_POST['passwordvak']);

                if($this->insert_record($username,$password))
                {
                    echo '<div class="alert alert-success"> De leerling is opgeslagen </div>';
                }
                else
                {
                    echo '<div class="alert alert-danger"> Mislukt </div>';
                }
            }
        }

        // Invoegen .. Query :     
        function insert_record($username,$password)
        {
            global $db;
            $query = "insert into leerling (username,password) values('$username','$password')";
            $result = mysqli_query($db->connection,$query);

            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }


        // lezen :
        public function view_record()
        {
            global $db;
            $query = "select * from leerling";
            $result = mysqli_query($db->connection,$query);
            return $result;
        }

        // Krijgen :
        public function get_record($id)
        {
            global $db;
            $sql = "select * from leerling where id='$id'";
            $data = mysqli_query($db->connection,$sql);
            return $data;

        }

        // wijzigen1 :
        public function update()
        {
            global $db;

            if(isset($_POST['btn_update']))
            {
                $id           = $_POST['id'];
                $username     = $db->check($_POST['usernamevak']);
                $password     = $db->check($_POST['passwordvak']);

                if($this->update_record($id,$username,$password))
                {
                    $this->set_messsage('<div class="alert alert-success"> De leerling is bijgewerkt</div>');
                    header("location:index.php");
                }
                else
                {   
                    $this->set_messsage('<div class="alert alert-success"> Mislukt !</div>');
                }

               
            }
        }

        // wijzigen2 :
        public function update_record($id,$username,$password)
        {
            global $db;
            $sql = "update leerling set username='$username', password='$password' where id='$id'";
            $result = mysqli_query($db->connection,$sql);
            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }



        // Sessiebericht instellen :
        public function set_messsage($msg)
        {
            if(!empty($msg))
            {
                $_SESSION['Message']=$msg;
            }
            else
            {
                $msg = "serious game ";
            }
        }

        // Sessiebericht weergeven :
        public function display_message()
        {
            if(isset($_SESSION['Message']))
            {
                echo $_SESSION['Message'];
                unset($_SESSION['Message']);
            }
        }

        // verwijderen  :
        public function Delete_Record($id)
        {
            global $db;
            $query = "delete from leerling where id='$id'";
            $result = mysqli_query($db->connection,$query);
            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

      

    }




?> -->