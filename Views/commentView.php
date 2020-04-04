   <?php 
 include_once '../Controllers/commentController.php';
  ?>

<!----comment section---------------------------------------------------------------->    
        <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>The Awesome Isolation Blog</title>
        <link rel=stylesheet href="CSS/blog-section.css">
        <link rel=stylesheet href="CSS/comment-section.css">
        <link rel=stylesheet href="CSS/site-wide.css">
        <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"  crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>
        


	<div class="row">
		
		<div class="col-md-6 col-md-offset-3 comments-section">
			<!-- if user is not signed in, tell them to sign in. If signed in, present them with comment form -->
			<?php if (isset($user_id)): ?>
				<form class="clearfix" action="#" method="post" id="comment_form">
					<textarea name="comment_text" id="comment_text" class="form-control" cols="30" rows="3"></textarea>
					<button class="btn btn-primary btn-sm pull-right" name="comment_posted" id="submit_comment">Submit comment</button>
				</form>
			<?php else: ?>
				<div class="well" style="margin-top: 20px;">
					<h4 class="text-center"><a href="#ENTER-LOG-IN-PAGE">Sign in</a> to post a comment</h4>
				</div>
			<?php endif ?>
			
                        
                        
                        <!-- Display total number of comments on this post  -->
			<h2><span id="comments_count"><?php echo count($comments) ?></span> Comment(s)</h2>
			<hr>
                        
                        
                        
			<!-- comments wrapper -->
			<div id="comments-wrapper">
			<?php if (isset($comments)): ?>
				<!-- Display comments -->
				<?php foreach ($comments as $comment): ?>
				<!-- comment -->
				<div class="comment clearfix">
					<img src="profile.png" alt="" class="profile_pic">
					<div class="comment-details">
						<span class="comment-name"><?php echo getUsernameById($comment['user_ID']) ?></span>
						
						<p><?php echo $comment['comm_TXT']; ?></p>
						<a class="reply-btn" href="#" data-id="<?php echo $comment['comm_ID']; ?>">reply</a>
					</div>
					<!-- reply form -->
                                        <form action="#" class="reply_form clearfix" id="comment_reply_form_<?php echo $comment['comm_ID'] ?>" data-id="<?php echo $comment['comm_ID']; ?>">
						<textarea class="form-control" name="reply_text" id="reply_text" cols="30" rows="2"></textarea>
						<button class="btn btn-primary btn-xs pull-right submit-reply">Submit reply</button>
					</form>

					<!-- GET ALL REPLIES -->
					<?php $replies = getRepliesByCommentId($comment['comm_ID']) ?>
					<div class="replies_wrapper_<?php echo $comment['comm_ID']; ?>">
						<?php if (isset($replies)): ?>
							<?php foreach ($replies as $reply): ?>
								<!-- reply -->
								<div class="comment reply clearfix">
									<img src="profile.png" alt="" class="profile_pic">
									<div class="comment-details">
										<span class="comment-name"><?php echo getUsernameById($reply['ruser_ID']) ?></span>
										
										<p><?php echo $reply['reply_TXT']; ?></p>
										<a class="reply-btn" href="#">reply</a>
									</div>
								</div>
							<?php endforeach ?>
						<?php endif ?>
					</div>
				</div>
					<!-- // comment -->
				<?php endforeach ?>
			<?php else: ?>
				<h2>Be the first to comment on this post</h2>
			<?php endif ?>
			</div><!-- comments wrapper -->
		</div><!-- // all comments -->
	</div>

<!-- Javascripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap Javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="commentScripts.js"></script>
</body>
</html>