<div class="container">
	<h2 class="text-center">Codeigniter infinite scroll pagination</h2><br/>

	<div class="col-md-12" id="post-data">
		<?php $this->load->view('home/data', $posts); ?>
	</div>
</div>

<div class="ajax-load text-center" style="display:none">
	<p><img src="<?php echo base_url(); ?>assets/images/infinity_loader.gif"> Loading More post</p>
</div>

