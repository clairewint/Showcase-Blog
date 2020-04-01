<?php

/**
 * Subscriber is a child of Users class
 *
 * @author Claire Winterbottom
 */
class Subscriber extends Users{
Private $commentcount = 0; //I've set this to 0 as this won't be art of the information included when creating a new Blogger object,
                            //but I;m unsure if we should remove it as a property?

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
