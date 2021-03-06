
 <?php
 include_once '../Controllers/commentController.php';
 ?>
<div class="comment-block">
        <!----comment section---------------------------------------------------------------->    
        


	<div class="row">
		
		<div class="col-md-6 col-md-offset-3 comments-section">
			<!-- if user is not signed in, tell them to sign in. If signed in, present them with comment form -->
			<?php if (isset($user_id)): ?>
                        <form class="clearfix" action="commentsView.php" method="post" id="comment_form">
					<textarea name="comment_text" id="comment_text" class="form-control" cols="30" rows="3"></textarea>
                                        <button class="btn btn-primary btn-sm pull-right" name="submit_comment" id="submit_comment" >Submit comment</button>
				</form>
			<?php else: ?>
				<div class="well" style="margin-top: 20px;">
					<h4 class="text-center"><a href="loginView.php">Log in</a> to post a comment</h4>
				</div>
			<?php endif ?>
			
                        
                        
                        <!-- Display total number of comments on this post  -->
			<h2><span id="comments_count"><?php $comments=getBlogComments();echo count($comments) ?></span> Comment(s)</h2>
			<hr>
                        
                        
                        
                        
			<!-- comments wrapper -->
			<div id="comments-wrapper">
			<?php if (isset($comments)): ?>
				<!-- Display comments -->
				<?php foreach ($comments as $comment): ?>
				<!-- comment -->
				<div class="comment clearfix">
					<img src="<?php echo getProfileImagebyID($comment->userid)?>" alt="" class="profile_pic">
					
                                        <div class="comment-details">
						<span class="comment-name"><?php echo getUsernameById($comment->userid) ?></span>
						
                                         <p><?php echo $comment->text;?></p>   
                                         
                                        <!-- reply link -->        
						<a class="reply-btn" href="commentsView.php" data-id="<?php echo $comment->commid;?>">reply</a>
                                                <a class ="flag-btn" href="">report  &#128681;</a>
					</div>
                                        
                                        
                                        
                                        
                                        
                                        
					<!-- reply form -->
                                        <form action="commentsView.php" class="reply_form clearfix" id="comment_reply_form_<?php echo $comment->commid; ?>" data-id="<?php echo $comment->commid; ?>">
						<textarea class="form-control" name="reply_text" id="reply_text" cols="30" rows="2"></textarea>
						<button class="btn btn-primary btn-xs pull-right submit-reply">Submit reply</button>
					</form>

                                        
                                        
					<!-- GET ALL REPLIES -->
					<?php $replies = getRepliesByCommentId($comment->commid) ?>
					<div class="replies_wrapper_<?php echo $comment->commid; ?>">
						<?php if (isset($replies)): ?>
							<?php foreach ($replies as $reply): ?>
								
                                            
                                            <!-- reply -->
								<div class="comment reply clearfix">
									<img src="<?php echo getProfileImagebyID($comment->userid)?>" alt="" class="profile_pic">
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

<script src="../Controllers/commentScript.js"></script>
        </div>
