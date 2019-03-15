<div class="comments-area">
    <h4><?php echo get_comments_number(); ?> Comments</h4>
    <?php 
        foreach($comments as $comment){
    ?>
    <div class="comment-list">
        <div class="single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
                <div class="thumb">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
                </div>
                <div class="desc">
                    <h5><a href="<?php comment_author_url(); ?>"><?php comment_author(); ?></a></h5>
                    <p class="date"><?php comment_date(); ?></p>
                    <p class="comment">
                        <?php comment_text(); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
</div>
<?php 
if(comments_open()){ 
?>
<div class="comment-form">
    <h4>Leave a Reply</h4>
    <form action="<?php echo site_url('wp-comments-post.php'); ?>" method="post" id="commentform">
    <input type="hidden" name="comment_post_ID" value='<?php echo $post->ID; ?>' id="comment_post_ID" />
        <div class="form-group form-inline">
            <div class="form-group col-lg-6 col-md-6 name">
                <input type="text" name="author" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter Name'">
            </div>
            <div class="form-group col-lg-6 col-md-6 email">
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email address"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
            </div>
        </div>
        <div class="form-group">
            <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''"
                onblur="this.placeholder = 'Subject'">
        </div>
        <div class="form-group">
            <textarea class="form-control mb-10" rows="5" name="comment" placeholder="Messege"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
        </div>
        <button type="submit" class="primary-btn submit_btn text-uppercase">Add Comment</button>
    </form>
</div>
<?php
}else{
    _e('Comments are closed', 'IPHSA');
}
?>