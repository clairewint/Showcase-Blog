 <?php
       include_once '../connection.php';  

class Comments {

    public $id;
    public $text;
    public $status;
    public $userid;
    public $blogid;
    

    public function __construct($id, $text, $status, $userid, $blogid) {
        $this->id = $id;
        $this->text = $text;
        $this->status = $status;
        $this->userid = $userid;
        $this->text = $blogid;
    }
    
    

    //FUNCTION TO GET BLOG POST BASED ON ID
    public static function getBlog($id) {
      
        $db = Db::getInstance();
      
        $req = $db->prepare('SELECT * FROM blog_posts WHERE blog_ID=:id');
        $req->execute(array('id' => $id));
        $blog = $req->fetch();
        return $blog;
    }

    
    //FUNCTION TO GET ALL COMMENTS FROM DB
    
    public static function getComments($id) {
          $db = Db::getInstance();
    
     $req = $db->prepare('SELECT * FROM Comments WHERE blog_ID=:id');
        //the query was prepared, now replace :id with the actual $id value
           $req->execute(array('id' => $id));
        $comments = $req->fetchAll();
        return  $comments;
    }
 
    
    
     //FUNCTION TO USERNAME BY ID
      public static function getUsername($id)
	{
		$db = Db::getInstance();
                
                $req = $db->prepare('SELECT user_UN FROM Users WHERE user_ID=:id LIMIT 1');
		$req->execute(array('id' => $id));
                $username = $req->fetch();
                
		return $username['user_UN'];
	}
    
    
  	// Receives a comment id and returns the replies
        
        public static function getReplies($id)
	{
                $db = Db::getInstance();
                
                $req = $db->prepare('SELECT * FROM Replies WHERE comm_ID=:id');
		$req->execute(array('id' => $id));
                $replies = $req->fetchAll();
                return $replies;      
        
        }
        
        
    // Receives a post id and returns the total number of comments on that post  
//     function getCommentsCount($blog_ID)
//	{
//		$db = Db::getInstance();
//                
//                $req = $db->prepare('SELECT COUNT(*) AS total FROM Comments');
//		$req->execute();
//                $count = $req->fetch();
//                $data= $count['total'];
//                return $data;
//	}   
        
        
        
    
}

?><?php


