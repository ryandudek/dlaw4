<div class="library-list-page">
	<div class="row-fluid small bread-crumb-holder">
		<?php print $library_breadcrumbs; ?>
	</div>

	<h1 class="page-header library_header">
		<?php print drupal_get_title(); ?>
	</h1>

	<div class="block-content-wrapper library-view-wrapper">
		<div class="row">

			<div class="col-sm-8 left">	
				<div class="categories <?php if(empty($terms)) { echo "hide";} ?>">
	        <!-- <i class="icon expand-btn icon-expand hidden-desktop"></i> -->
	        
	        <div class="title hidden-desktop">
	        </div> 
	        <div class="listing expandable">

						<ul id="library-terms-list" class="library-nav">					
							<?php 
							//$tids = array();  
							?>
							<?php foreach ($terms as $term) :  ?>
							<li class="lead">
							<?php 
								print l($term->name, 'topics/' . $term->tid, array('html' => TRUE)); 
							?>
							</li>
							<?php endforeach; ?>
						</ul>

	        </div>
	      </div>
				
				<div class="library-view-link-page">
					<?php print theme('library_related_nodes', array('tids' => arg(1))); ?>
				</div>

			</div>

			<div class="col-sm-4 left-sidebar library_sidebar">
				<div id="block-library-library">
				<?php 
					$library_block = module_invoke('library', 'block_view',  'library');
					print $library_block['content'];
				?>
				</div>
			</div>


		</div>
	</div>
</div>


