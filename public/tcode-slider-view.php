<?php

function tcode_slider_shortcode( ) {

	return tcode_slider_view();

}
add_shortcode( 'tocode-slider', 'tcode_slider_shortcode' );


function tcode_slider_view()
{?>
<div id="tcode-slider-id" class="carousel slide" data-ride="carousel">

	<div class="carousel-inner" role="listbox">
    <?php $slide_number=get_option('number_slides'); ?>
		<?php $args = array( 'post_type' => 'tocode-slider', 'posts_per_page' =>$slide_number );
			 $i=0;
			  	$slide_loop = new WP_Query( $args );
				  	$slides = array();
					  	while ( $slide_loop->have_posts() ) : $slide_loop->the_post();
						   $post_id = get_the_ID();
                  $slides[] = array('post_id' => $post_id); ?>
							       <div class="item <?php  echo $i==0 ? 'active' : ''; ?>">
               	      <?php the_post_thumbnail( 'full' );?>
									 	<div class="carousel-caption">';
									<?php if(get_option('display_header')=='Yes'){ ?>
									<h1 class="slider-title" style="color:<?php echo get_option('header_color'); ?>"><?php the_title() ; ?> </h1>
									<?php }?>
								<?php if(get_option('display_text')=='Yes'){ ?>
								<h2 class="slider-title-sm" style="color:<?php echo get_option('text_color'); ?>"><?php the_excerpt() ; ?></h2>
								<?php }?>
						</div>
				</div> <!--  items -->
			<?php $i++ ;	endwhile; ?>
	 </div>   <!--  carousel-inner -->
	 <?php
			 if( count( $slides ) > 1 ){ ?>
				 		<ol class="carousel-indicators">
				   				<?php foreach ($slides as $key => $slide) { ?>
					 				<li data-target="#tcode-slider-id" data-slide-to="<?php echo $key; ?>" <?php echo $key == 0 ? 'class="active"' : ''; ?>></li>
				 			<?php } ?>
				  </ol>
		<?php } ?>

			 <a class="left carousel-control" href="#tcode-slider-id" role="button" data-slide="prev">
		        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		        <span class="sr-only">Previous</span>
	     </a>
      <a class="right carousel-control" href="#tcode-slider-id" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>


</div>


<?php

   	wp_reset_postdata();
		wp_reset_query();

 } ?>
