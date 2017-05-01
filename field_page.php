<div class="row txt-row">
<div class="col-lg-12">
<h1 class="text-center second_page_tittle">Field of Work</h1>
<p class="text-center">Together, we create access to information and build products that improve
people's lives. Want to be a part of our team? Find your role</p>

</div>
</div>
<div class="clearfix"></div>
<div class="row cat-row">
<?php 
$tax_name = 'CompanyType';
$parent_id = 110;
$terms = get_terms( $tax_name, array( 'parent' => $parent_id, 'pad_counts' => 1, ) );

foreach ( $terms as $single_term ) {

   ?>
<div class="col-lg-6">
<div class="companies-pg">
<div class="col-lg-5">
<img src="<?php echo z_taxonomy_image_url($single_term->term_id); ?>" class="catt-images" />
</div>

<div class="col-lg-7"> <a href="<?php echo esc_url( $category_link ); ?>" title="Category Name"><?php echo $single_term->name;  ?></a> 
			<?php $cat_desc =  category_description($single_term->term_id);
               $cat_desc = strip_tags($cat_desc);
               echo substr($cat_desc, 0, 65); echo "..."?>
		<?php echo $single_term->count. ' open positions';?>

</div>
</div>
</div>
<?php

}		 
		 
		 ?>
</div>
<div class="clearfix"></div>
<div class="row mail-row">
<div class="cust-mail">
<h4 class="text-center">Any Questions?</h4>
<div class="sep"></div>
<p class="text-center">Head of Human Resources
WMS Discovery Sdn Bhd
hamidi@wms.my</p>

</div>
</div>