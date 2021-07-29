<?php
/**
* A Simple Category Template
*/
 
get_header(); 

$currentyear = date('Y');
	$currentmonth = date('m');
	$args = array(
	    'category_name' => 'choto-golpo',
		'posts_per_page' => 24,
		'monthnum' => $currentmonth,
		'year' => $currentyear,
	    'orderby' => 'date',
	    'order'   => 'ASC'
	);

	// The Query
	$the_query = new WP_Query( $args );
	
?>
 
<section id="gallery">
  <div class="container">
    <div class="row">
        
<?php 
// Check if there are any posts to display
if ( $the_query->have_posts() ) : 
// The Loop
while ( $the_query->have_posts() ) : $the_query->the_post();
?>        

    <div class="col-lg-4 mb-4">
    <div class="card">
      <img src="https://images.unsplash.com/photo-1477862096227-3a1bb3b08330?ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
        <p class="card-text"><?php the_excerpt(); ?></p>
       <a href="<?php the_permalink() ?>" class="btn btn-outline-success btn-sm">বিস্তারিত</a>
        <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
        <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
      </div>
     </div>
    </div>
    
<?php
endwhile;
endif;
// no posts found
echo "No Post Found.";
/* Restore original Post Data */
wp_reset_postdata();
?>



    
  </div>
</div>
</section>





<?php get_footer(); ?>









