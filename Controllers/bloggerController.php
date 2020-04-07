
<?php

require_once '../Models/Blogger.php';

class bloggerController {

    
    public function getprofile($username) {
    $blogger = Blogger::getprofile($username);
    return $blogger;
    }

}
