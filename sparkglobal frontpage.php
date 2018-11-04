<?php
/*
Template Name: Spark Global Frontpage
*/
?>

<?php get_header(); ?>

<?php get_template_part('elements/base/header');?>

<?php get_template_part('elements/base/navigation');?>

<!--Navigation-->
<?php 
/*<nav class="uk-cover-background uk-navbar uk-navbar-container" data-uk-sticky uk-navbar>

    <div class="uk-container uk-container-center">
        
            <a href="#" class="uk-navbar-brand">SPARK GLOBAL <img class="uk-margin uk-margin-remove" width=50 height=50 src="http://www.thebauerdesign.com/sparkglobal/wp-content/uploads/2017/05/74-691Z.png"></a>
            <div class="uk-navbar-center">
                <ul class="uk-navbar-nav">
                    <li class=""><a href="#main">Main</a></li>
                     <li class="uk-parent"><a href="#aboutus">About Us</a></li>
                    <li><a href="#activities">Activities/News</a></li>
                    <li><a href="#contactus">Contact Us</a></li>
                </ul>
            </div>
        
    </div>

</nav>
*/
?>

<div id="primary" class="content-area uk-block-default">

<div data-uk-slideshow>
<ul class="uk-slideshow" data-uk-slideshow="{autoplay:true}">
	<li><img width="1200" height="237" src=<?php 
					$file  = get_post_meta( get_the_ID(), 'sg_image1', true );
					echo esc_html( $file );
					?>>
	</li>
	<li><img width="1200" height="237" src=<?php 
					$file  = get_post_meta( get_the_ID(), 'sg_image2', true );
					echo esc_html( $file );
					?>>
	</li>
	<li><img width="1200" height="237" src=<?php 
					$file  = get_post_meta( get_the_ID(), 'sg_image3', true );
					echo esc_html( $file );
					?>>
	<li><img width="1200" height="237" src=<?php 
					$file  = get_post_meta( get_the_ID(), 'sg_image4', true );
					echo esc_html( $file );
					?>>
	</li>
	<li><img width="1200" height="237" src=<?php 
					$file  = get_post_meta( get_the_ID(), 'sg_image5', true );
					echo esc_html( $file );
					?>>
	</li>
	<li><img width="1200" height="237" src=<?php 
					$file  = get_post_meta( get_the_ID(), 'sg_image6', true );
					echo esc_html( $file );
					?>>
	</li>

</ul>
	<a class="" id="main"></a>
   

<hr class="uk-grid-divider" id="aboutus">
</div>

<!--Content-->

<!--main-->
<?php
/**
<div class="uk-block uk-block-default uk-block-large">
<div class="uk-container uk-container-center">
<h1 class="uk-text-left" id="main">Spark Global</h1>
<div class="uk-grid">
<div class="uk-width-medium-1-3">
<div class="uk-panel uk-panel-box uk-panel-box-primary uk-panel-hover">

<h3 class="uk-panel-title">
				<?php
					$text  = get_post_meta( get_the_ID(), 'sg_ih1', true );
					echo esc_html( $text );
					?></h3>
<p>              <?php
					$text  = get_post_meta( get_the_ID(), 'sg_i1', true );
					echo esc_html( $text );
					?></p>
</div>
</div>
<div class="uk-width-medium-1-3">
<div class="uk-panel uk-panel-box uk-panel-box-primary uk-panel-hover">
<h3 class="uk-panel-title">
				<?php
					$text  = get_post_meta( get_the_ID(), 'sg_ih2', true );
					echo esc_html( $text );
					?></h3>
<p>              <?php
					$text  = get_post_meta( get_the_ID(), 'sg_i2', true );
					echo esc_html( $text );
					?></p>
</div>
</div>
<div class="uk-width-medium-1-3">
<div class="uk-panel uk-panel-box uk-panel-box-primary uk-panel-hover">
<h3 class="uk-panel-title">
				<?php
					$text  = get_post_meta( get_the_ID(), 'sg_ih3', true );
					echo esc_html( $text );
					?></h3>
<p>              <?php
					$text  = get_post_meta( get_the_ID(), 'sg_i3', true );
					echo esc_html( $text );
					?></p>
</div>
</div>
</div>
</div>
</div>
**/
?>
<!--aboutus-->
<div class="uk-block uk-block-default">
<div class="uk-container uk-container-center">
<h1 class="uk-text-left" id="">About Us</h1>

<div class="uk-grid">
<div class="uk-grid uk-block uk-width-medium-1-2">
<article class="uk-article-header">
<h2 class="uk-panel-title">
				<?php
					$text  = get_post_meta( get_the_ID(), 'sg_aboutusheader', true );
					echo esc_html( $text );
					?></h2>
<div>
<p>              <?php
					echo wpautop( $text = get_post_meta( get_the_ID(), 'sg_aboutustext', true ) );
					esc_html( $text );
					
					?></p>
					<a class="uk-button uk-button-primary"  href="<?php echo esc_url( get_permalink( get_page_by_title( 'About Us' ) ) ); ?>">Read more</a>
					</div>
</article>
</div>

<div class="uk-width-medium-1-2">
<img width="400" height="300" src=<?php 
					$file  = get_post_meta( get_the_ID(), 'sg_aboutusimage', true );
					echo esc_html( $file );
					?>>

</div>
</div>
</div>
</div>

<div class="uk-block uk-block-secondary uk-block-large">
<div class="uk-container uk-container-center">
<h1 class="uk-text-left uk-contrast" id="">Products</h1>
<div class="uk-slidenav-position uk-margin" data-uk-slider="{autoplay: true}">
<div class="uk-slider-container">
<ul class="uk-slider uk-grid-width-medium-1-4">

<li><img width="600" height="400" src=<?php 
					$file  = get_post_meta( get_the_ID(), 'sg_bi1', true );
					echo esc_html( $file );
					?>></li>
<li><img width="600" height="400" src=<?php 
					$file  = get_post_meta( get_the_ID(), 'sg_bi2', true );
					echo esc_html( $file );
					?>></li>
<li><img width="600" height="400" src=<?php 
					$file  = get_post_meta( get_the_ID(), 'sg_bi3', true );
					echo esc_html( $file );
					?>></li>
<li><img width="600" height="400" src=<?php 
					$file  = get_post_meta( get_the_ID(), 'sg_bi4', true );
					echo esc_html( $file );
					?>></li>
<li><img width="600" height="400" src=<?php 
					$file  = get_post_meta( get_the_ID(), 'sg_bi1', true );
					echo esc_html( $file );
					?>></li>

</ul>
<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>
<hr class="uk-grid-divider" id="activities">
<div class="uk-container-center uk-grid-width-1-1 uk-panel-box">
<a class="uk-button uk-button-large uk-button-primary"  href="<?php echo esc_url( get_permalink( get_page_by_title( 'Products' ) ) ); ?>">See more products</a>
</div>
</div>

</div>

</div>
</div>
</div>
</div>
<hr class="uk-grid-divider" id="activities">




<!--activities-->
<div class="uk-container uk-container-center uk-margin-large">
<h1 class="" id="">Activities/News</h1>
<div class="uk-grid">
<div class="uk-width-medium-1-3">


<img  width="600" height="400" alt="" src=<?php $the_query = new WP_Query( 'posts_per_page=1' ); ?>
           
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
             <?php
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('large');
                } ?>
                
           <h2 class="uk-navbar-center"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
       
</div>

<div class="uk-width-medium-1-3">


<img  width="600" height="400" alt="" src=<?php $the_query = new WP_Query( 'posts_per_page=1&offset=1' ); ?>
           
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
             <?php
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('large');
                } ?>
                
           <h2 class="uk-navbar-center"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
       
</div>


<div class="uk-width-medium-1-3">


<img  width="600" height="400" alt="" src=<?php $the_query = new WP_Query( 'posts_per_page=1&offset=2' ); ?>
           
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
             <?php
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('large');
                } ?>
                
           <h2 class="uk-navbar-center"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
       
</div>

</div>

</div>

<?php /**
<div class="uk-width-medium-1-3">
<ul>
<li>
<img  width="600" height="400"  src=<?php $the_query = new WP_Query( 'posts_per_page=1&offset=2' ); ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>>
             <li>
             <?php
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('large');
                } ?>
                </li>
                <li> </li>
            <li><h2 class="uk-navbar-center"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2></li>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
</div>
</li>
</ul>
<div class="uk-width-medium-1-3">
<li>
<img  width="600" height="400" src=<?php $the_query = new WP_Query( 'posts_per_page=1&offset=2' ); ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>>
             <li><?php
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('large');
                } ?></li>
                <li> </li>
            <li><h2 class="uk-navbar-center"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2></li>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
</li>
</li>
</ul>
</div>
</div>
</div>
</div> **/

?>


<!--contactus-->
<hr class="uk-grid-divider" id="contactus">
<div class="uk-block uk-block-secondary uk-block-large uk-margin-bottom-remove">

<div class="uk-container uk-container-center uk-margin-large">
<div class="uk-grid" data-uk-grid-margin="">
<div class="uk-width-1-2 uk-panel uk-contrast">
<h1 class="uk-text-left uk-contrast" id="">Contact Us</h1>

<?php echo do_shortcode( '[contact-form-7 id="103" title="Work with us form"]' ); ?>
</div>


<div class="uk-width-medium-1-2">
<h1 class="uk-contrast">Map</h1>
<div id="map" style="width: 500px; height: 400px;"><script>function sgMap() {
var mapOptions = {
center: new google.maps.LatLng(13.8434754,100.4996946),
zoom: 10,

}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
var marker = new google.maps.Marker({
          position: mapOptions,
          map: map,
          title: 'Spark Global'
          });
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAuSGe3M1ddyFksZ2QnekRb73mS67862c&callback=sgMap" type="text/javascript"></script></div>
</div>

</div>
</div>
</div>
</div>	
</div>



		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );
			
    		//cmb2_output_file_list( 'sg_file_list', 'thumbnail' );
   
    

			

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->




<?php
get_template_part('elements/base/footer');
?>
		<?php
/**
 * Sample template tag function for outputting a cmb2 file_list
 *
 * @param  string  $file_list_meta_key The field meta key. ('lte_file_list')
 * @param  string  $img_size           Size of image to show

function cmb2_output_file_list( $file_list, $img_size = 'medium' ) {

	// Get the list of files
	$files = get_post_meta( get_the_ID(), 'sg_file_list', true );

	echo '<div class="uk-gallery">';
	// Loop through them and output an image
	foreach ( (array) $files as $attachment_id => $attachment_url ) {
		echo '<div class="file-list-image">';
		echo wp_get_attachment_image( $attachment_id, $img_size );
		echo '</div>';
	}
	echo '</div>';
}
**/

