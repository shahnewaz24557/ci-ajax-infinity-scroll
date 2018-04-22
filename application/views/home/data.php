<!--
 * InfinityScroll v1.1 (https://github.com/shahnewaz24557/ci-ajax-infinity-scroll)
 * Copyright (c) 2018 Shahnewaz Ahmed
 * Licensed under MIT (https://github.com/shahnewaz24557/ci-ajax-infinity-scroll/blob/master/LICENSE)
 -->

<?php foreach($posts as $post){ ?>
<div>
	<h3><a href=""><?php echo $post->title ?></a></h3>
	<p><?php echo $post->description ?></p>
	<div class="text-right">
		<button class="btn btn-success">Read More</button>
	</div>
	<hr style="margin-top:5px;">
</div>
<?php } ?>