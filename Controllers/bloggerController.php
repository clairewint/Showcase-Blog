
<?php
require_once '../Models/Blogger.php';
class bloggerController {
    

    
    public function getprofile($username){
          //get user from session when available
        //$id=1;
        $blogger= Blogger::getprofile($username);
       
    return $blogger;
    
    
}
}


