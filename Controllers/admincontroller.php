<?php
require_once '../Models/Admin.php';
class Admincontroller {
    
    // protected properties, I need a profile pick, first name and last name for admin.
    //I need to pull in a list of bloggers and a list of subsribers
    //I need to be able to see items that have been flagged up as problems.
    
    public function getprofile($username){
          //get user from session when available
        //$id=1;
        $admin= Admin::getprofile($username);
       
    return $admin;
    
    
}
}
