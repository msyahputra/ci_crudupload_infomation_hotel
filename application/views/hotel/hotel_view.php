					<form action="<?=base_url()?>hotel/index" method="get">
					<div class="col-md-12" style="text-align: center; padding-bottom: 15px;">
					<input type="text" name="cari" class="searc" placeholder="Search..">
					<input type="hidden" value="Cari" class="btn btn-primary" style="margin-left: 30px; height: 50px;">Cari</input>	
					</div>
					</form>
					<?php foreach ($data as $data): ?>
					<article class="mix portfolio_category_17 portfolio_category_5  mix_all" style="display: inline-block; opacity: 1;">
						<div class="image_holder">
							<a class="portfolio_link_for_touch" href="http://demo.qodeinteractive.com/bridge/portfolio_page/stockholm-fashion-destination/" target="_self">
								<span class="image">
									<img src="<?=base_url()?>assets/picture/<?=$data->foto?>" style="width: 500px; height: 300px;" class="attachment-full wp-post-image" alt="qode interactive strata">
								</span>
							</a>
							<span class="text_holder">
								<span class="text_outer">
									<span class="text_inner">
										<span class="feature_holder">
											<span class="feature_holder_icons">
												<a class="preview qbutton small white" href="<?=base_url()?>detail_hotel/detail/<?=$data->id?>" target="_self">Detail</a>
											</span>
										</span>
									</span>
								</span>
							</span>
						</div>
						<div class="portfolio_description ">
							<h5 class="portfolio_title">
								<a href="<?=base_url()?>detail_hotel/detail/<?=$data->id?>" target="_self"><?php echo $data->title?></a>
							</h5>
							<span class="project_category">RATING</span>
							<div class="row lead">
								<div id="stars" class="starrr"></div>
								<div class="price">
									<span>Rp. <?php echo number_format($data->harga)?></span>
								</div>
							</div>
						</div>
					</article>
				<?php endforeach; ?>
				<div class="filler"></div>
				<div class="filler"></div>
				<div class="filler"></div>
			</div>
   			 <div class="container">
     		 <?php echo $pagination ?>
   			  </div>
			<div class="portfolio_paging_loading">
				<a href="javascript: void(0)" class="qbutton">Loading...</a>
			</div>
		</div>

