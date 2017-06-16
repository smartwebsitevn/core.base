<section class="sidebar">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    	<?php
    		$first = true;
    		foreach ($categories as $row) 
    		{
    			if( $row->parent_id )
    				continue;
    			$row = mod('product_cat')->add_info( $row );

    			// Active menu
    			$active = false;
    			if( $this->_category )
    			{
    				if( $row->id == $this->_category->id )
    					$active = true;
    				else
    				{
    					foreach ($categories as $sub) 
		            	{
		            		if( $sub->id == $this->_category->id )
		            		{
		            			$active = true;
		            			break;
		            		}
		            	}
    				}
    			} 
    			else
    			{
    				if( $first )
    					$active = true;
    			}

    			
    			?>
    			<div class="panel panel-default">
		            <div class="panel-heading" role="tab" id="heading<?php echo $row->id ?>">
		                <h4 class="panel-title">
		                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $row->id ?>" aria-expanded="<?php echo $active ? 'true' : 'false' ?>">
		                        <?php echo $row->_icon ? '<img src="'.$row->_icon->url.'" alt="" class="svg" />' : '' ?> 
		                        <?php echo $row->name ?>
		                        <i class="fa fa-angle-down"></i>
		                    </a>
		                </h4>
		            </div>
		            <div id="collapse-<?php echo $row->id ?>" class="panel-collapse collapse <?php echo $active ? 'in' : '' ?>" role="tabpanel">
		                <div class="panel-body">
		                    <ul class="list-unstyled">
		                    	<?php
			                    	foreach ($categories as $sub) 
			                    	{
			                    		if( $sub->parent_id != $row->id )
			                    			continue;

			                    		$sub = mod('product_cat')->add_info( $sub );
			                    		?>
			                        	<li>
			                        		<a href="<?php echo site_url($sub->SEOurl, [ 'suffix' => false ]) ?>" title="<?php echo $sub->name ?>">
			                        			<?php echo $sub->_icon ? '<img src="'.$sub->_icon->url.'" alt="" class="svg" />' : '' ?> 
			                        			<?php echo $sub->name ?> 
			                        			<i class="fa fa-angle-right"></i>
			                        		</a>
			                        	</li>
			                    		<?php
			                    	}
		                    	?>
		                    </ul>
		                </div>
		            </div>
		        </div>
    			<?php

    			$first = false;
    		}
    	?>
    	<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a href="<?php echo site_url('lessons') ?>">
                    	<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 511 511" style="enable-background:new 0 0 511 511; width: 20px" xml:space="preserve">
<g>
	<path d="M463.5,32h-336C101.309,32,80,53.309,80,79.5v40V384H7.5c-4.142,0-7.5,3.358-7.5,7.5v40C0,457.691,21.309,479,47.5,479h336
		c26.191,0,47.5-21.309,47.5-47.5V127h72.5c4.142,0,7.5-3.358,7.5-7.5v-40C511,53.309,489.691,32,463.5,32z M47.5,464
		C29.58,464,15,449.42,15,431.5V399h72.461c0.013,0,0.026,0.002,0.039,0.002S87.526,399,87.539,399H336v32.5
		c0,12.56,4.9,23.997,12.889,32.5H47.5z M416,431.5c0,17.92-14.58,32.5-32.5,32.5S351,449.42,351,431.5v-40
		c0-4.142-3.358-7.5-7.5-7.5H95V119.5v-40C95,61.58,109.58,47,127.5,47h301.406C420.912,55.504,416,66.936,416,79.5v40V431.5z
		 M496,112h-65V79.5c0-17.92,14.58-32.5,32.5-32.5S496,61.58,496,79.5V112z"/>
	<path d="M159.5,104h-16c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h16c4.142,0,7.5-3.358,7.5-7.5S163.642,104,159.5,104z"/>
	<path d="M367.5,104h-176c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h176c4.142,0,7.5-3.358,7.5-7.5S371.642,104,367.5,104z"/>
	<path d="M159.5,144h-16c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h16c4.142,0,7.5-3.358,7.5-7.5S163.642,144,159.5,144z"/>
	<path d="M191.5,159h144c4.142,0,7.5-3.358,7.5-7.5s-3.358-7.5-7.5-7.5h-144c-4.142,0-7.5,3.358-7.5,7.5S187.358,159,191.5,159z"/>
	<path d="M159.5,184h-16c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h16c4.142,0,7.5-3.358,7.5-7.5S163.642,184,159.5,184z"/>
	<path d="M367.5,184h-176c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h176c4.142,0,7.5-3.358,7.5-7.5S371.642,184,367.5,184z"/>
	<path d="M159.5,224h-16c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h16c4.142,0,7.5-3.358,7.5-7.5S163.642,224,159.5,224z"/>
	<path d="M191.5,239h160c4.142,0,7.5-3.358,7.5-7.5s-3.358-7.5-7.5-7.5h-160c-4.142,0-7.5,3.358-7.5,7.5S187.358,239,191.5,239z"/>
	<path d="M159.5,264h-16c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h16c4.142,0,7.5-3.358,7.5-7.5S163.642,264,159.5,264z"/>
	<path d="M191.5,279h128c4.142,0,7.5-3.358,7.5-7.5s-3.358-7.5-7.5-7.5h-128c-4.142,0-7.5,3.358-7.5,7.5S187.358,279,191.5,279z"/>
	<path d="M159.5,304h-16c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h16c4.142,0,7.5-3.358,7.5-7.5S163.642,304,159.5,304z"/>
	<path d="M367.5,304h-176c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h176c4.142,0,7.5-3.358,7.5-7.5S371.642,304,367.5,304z"/>
	<path d="M159.5,344h-16c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h16c4.142,0,7.5-3.358,7.5-7.5S163.642,344,159.5,344z"/>
	<path d="M343.5,344h-152c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h152c4.142,0,7.5-3.358,7.5-7.5S347.642,344,343.5,344z"/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg> <?php echo lang('lesson_uncategory') ?></a>
                </h4>
            </div>
        </div>
    </div>
</section>