<?php

       include_once '../connection.php';  
/**
 * Admin is a child of Users class
 *
 * @author Claire Winterbottom
 */
class Admin {//extends Users {
    private $firstname;
    private $lastname;
    
    function getFirstname() {
        return $this->firstname;
    }

    function getLastname() {
        return $this->lastname;
    }

    function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    function __construct() {
        parent::__construct();
        $this->firstname = $_POST['firstname'];
        $this->lastname = $_POST['lastname'];
    }

    public function __sanitise() {
        parent::__sanitise();
        $this->firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->lastname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    public function getprofile($username){
        $db = Db::getInstance();
    
     $req = $db->prepare('SELECT user_FN,user_LN,user_IMG FROM tadb.Users WHERE user_UN=:id');
        //the query was prepared, now replace :id with the actual $id value
           $req->execute(array('id' => $username));
      // $adminprofile = $req->fetchall(PDO::FETCH_OBJ);
     $adminprofile = $req->fetchall(PDO::FETCH_ASSOC);
        return  $adminprofile;
        
    }
}
if (isset($_POST['submit']) && empty($errors)) { //only inserts below into DB if submit button is pressed and errors array is empty
            
                 
        $new_mem = $con->prepare("INSERT INTO Users ( user_UN,  user_FN, user_SN, user_EMAIL, user_TYPE, user_PWD)
              VALUES (  :username, :userfn, :userln, :email, :type, :password)");

        $new_mem->execute([
            'username' => $userName,
            'password' => $hashed_password,
            'userfn' =>  $firstName,
            'userln' => $lastName,
            'email' => $email,
            'type' => $userType,
                ]);

        $loginMsg = '<div class="alert alert-success alert-dismissible fade show">
                <strong> <i class="icon fa fa-check"></i> You have successfully registered! Please <a href="../Views/loginView.php" >login.</a></strong>
             <button type="button" class="close" data-dismiss="alert">&times;</button></div>';
        return $loginMsg;
    }
