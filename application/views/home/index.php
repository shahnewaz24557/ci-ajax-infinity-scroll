<!--
 * InfinityScroll v1.1 (https://github.com/shahnewaz24557/ci-ajax-infinity-scroll)
 * Copyright (c) 2018 Shahnewaz Ahmed
 * Licensed under MIT (https://github.com/shahnewaz24557/ci-ajax-infinity-scroll/blob/master/LICENSE)
 -->

<div class="container">
	<h2 class="text-center">Codeigniter infinite scroll pagination</h2><br/>

	<div class="col-md-12" id="post-data">
		<?php $this->load->view('home/data', $posts); ?>
	</div>
</div>

<div class="ajax-load text-center" style="display:none">
	<p><img src="<?php echo base_url(); ?>assets/images/infinity_loader.gif"> Loading More post</p>
</div>

