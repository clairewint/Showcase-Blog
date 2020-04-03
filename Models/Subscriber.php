<?php

/**
 * Subscriber is a child of Users class
 *
 * @author Claire Winterbottom
 */
class Subscriber extends Users{
Private static $commentcount; //Making this attributes static means they don't need an object to be created in order to be used.
                                    //This means we can make the info submited on the registration page 
                                    //match the attributes needed in the constructor. 
function getCommentcount() {
    return $this->commentcount;
}

function setCommentcount($commentcount) {
    $this->commentcount = $commentcount;
}

function __construct($commentcount) {
    parent::__construct($username, $password, $email, $usertype);
    $this->commentcount = $commentcount;
}

}
