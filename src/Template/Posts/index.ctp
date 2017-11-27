<h3>Posts</h3>
<div class="row">
    <?php if(!empty($posts)): foreach($posts as $post): ?>
    <div class="post-box">
        <div class="post-content">
            <div class="caption">
                <h4><a href="javascript:void(0);"><?php echo $post->post_title; ?></a></h4>
                <p><?php echo $post->post_content; ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; else: ?>
    <p class="no-record">No post(s) found......</p>
    <?php endif; ?>
</div>