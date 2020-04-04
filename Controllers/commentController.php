<?php 
  include_once '../Models/comments.php'; 
	// Set logged in user id: This is just a simulation of user login. We haven't implemented user log in
	// But we will assume that when a user logs in, 
	// they are assigned an id in the session variable to identify them across pages
	$user_id = 1;
        

        
        

        // get post with id 1 from database
//            if (!isset($_GET['id']))
//      echo "errorrrrrr";
//
//      try{
      $blog = Comments::getBlog($_GET['id']);
      require_once('../Views/blogView.php');
//      }
//      catch (Exception $ex){
//      echo "errorrrrrr";
//      }
    
        
        
    // Get all comments from database
        
                if (!$blog)
      echo "errorrrrrr";

      try{
      $comments = Comments::getComments($blog->id);
      }
      catch (Exception $ex){
      echo "errorrrrrr";
      }
      
        

	// Receives a user id and returns the username
        
      function getUsernameById($id)
	{ $userid = $id;
              $username= Comments::getUsername($id);
        return $username;
                
        }


	// Receives a comment id and returns the username
	function getRepliesByCommentId($id)
	{
		$replies= Comments::getReplies($id);

                return $replies;       
	}
        
        
        
	// Receives a post id and returns the total number of comments on that post
        
        
        
//	function getCommentsCountByPostId($_GET['id'])
//	{ $data= Comments::getCommentsCount($id);
//        return $data;
//                
//	}
        
        
        
      
// If the user clicked submit on comment form...
        
if (isset($_POST['comment_posted'])) {
  
	global $db;
        
        
	// grab the comment that was submitted through Ajax call
	$comment_text = $_POST['comment_text'];
        
        	
    
        
	// insert comment into database
	  $request = $db->prepare('INSERT INTO Comments (blog_ID, user_ID, comm_TXT) VALUES (1, :id, :text)');
	  $request->execute(array('id' => $user_id, 'text' => $comment_text));
          //$result = $req->fetch();
          
	// Query same comment from database to send back to be displayed
	$inserted_id = $db->lastInsertId();
       
         $req = $db->prepare('SELECT * FROM Comments WHERE comm_ID=:id');
	 $req->execute(array('id' => $inserted_id));
         $inserted_comment = $req->fetch();
        
	
	// if insert was successful, get that same comment from the database and return it
	if ($request) {
		$comment = "<div class='comment clearfix'>
					<img src='profile.png' alt='' class='profile_pic'>
					<div class='comment-details'>
						<span class='comment-name'>" . getUsernameById($inserted_comment['user_ID']) . "</span>
						
						<p>" . $inserted_comment['comm_TXT'] . "</p>
						<a class='reply-btn' href='#' data-id='" . $inserted_comment['comm_ID'] . "'>reply</a>
					</div>
					<!-- reply form -->
					<form action='post_details.php' class='reply_form clearfix' id='comment_reply_form_".$inserted_comment['comm_ID']."' data-id='" . $inserted_comment['comm_ID'] . "'>
						<textarea class='form-control' name='reply_text' id='reply_text' cols='30' rows='2'></textarea>
						<button class='btn btn-primary btn-xs pull-right submit-reply'>Submit reply</button>
					</form>
				</div>";
		$comment_info = array(
			'comment' => $comment,
			'comments_count' => getCommentsCountByPostId(1)
		);
		echo json_encode($comment_info);
		exit();
	} else {
		echo "error";
		exit();
	}
}




// If the user clicked submit on reply form...
if (isset($_POST['reply_posted'])) {
	global $db;
	// grab the reply that was submitted through Ajax call
	$reply_text = $_POST['reply_text']; 
	$comment_id = $_POST['comment_id']; 
	// insert reply into database
	$sql = "INSERT INTO replies (user_id, comment_id, body, created_at, updated_at) VALUES (" . $user_id . ", $comment_id, '$reply_text', now(), null)";
	$result = mysqli_query($db, $sql);
	$inserted_id = $db->insert_id;
	$res = mysqli_query($db, "SELECT * FROM replies WHERE id=$inserted_id");
	$inserted_reply = mysqli_fetch_assoc($res);
	// if insert was successful, get that same reply from the database and return it
	if ($result) {
		$reply = "<div class='comment reply clearfix'>
					<img src='profile.png' alt='' class='profile_pic'>
					<div class='comment-details'>
						<span class='comment-name'>" . getUsernameById($inserted_reply['user_id']) . "</span>
						<span class='comment-date'>" . date('F j, Y ', strtotime($inserted_reply['created_at'])) . "</span>
						<p>" . $inserted_reply['body'] . "</p>
						<a class='reply-btn' href='#'>reply</a>
					</div>
				</div>";
		echo $reply;
		exit();
	} else {
		echo "error";
		exit();
	}
}