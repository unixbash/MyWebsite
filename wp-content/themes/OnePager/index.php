

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Filip Nikolic - Portfolio</title>

<meta name="viewport" content="width=device-width,initial-scale=1">

<?php 
  $domainName =  $_SERVER['HTTP_HOST'];
?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/style.css" media="screen" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/media-queries.css" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/flex-slider/flexslider.css" type="text/css" media="screen" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/styles/prettyPhoto.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/styles/tipsy.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/flex-slider/jquery.flexslider-min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/jquery.prettyPhoto.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/jquery.tipsy.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/jquery.knob.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/jquery.isotope.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/jquery.smooth-scroll.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/setup.js"></script>	

</head>
<body>
<div id="wrap"> 
  <!-- wrapper -->
  <div id="sidebar"> 
    <!-- the  sidebar --> 
    <!-- logo --> 
    <img id="logo-img" src="http://farm4.staticflickr.com/3209/13041329923_c09742089c_n.jpg"/> </a> 
    <!-- navigation menu -->
    <ul id="navigation">
      <li><a href="#home" class="active">Home</a></li>
      <li><a href="#about">About Me</a></li>
      <li><a href="#skills">My Skills</a></li>
      <li><a href="#portfolio">Portfolio</a></li>
      <li><a href="#industries">Industries</a></li>
      <li><a href="#myclients">Play a Game</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </div>
  

  <div id="container"> 
    <!-- page container -->
    <div class="page" id="home"> 
      <!-- page home -->
      <div class="page_content">
	  
	  <?php $enableslider=ot_get_option('my_checkbox');if ( $enableslider[0]=='yes' ) { ?>
        <div class="gf-slider"> 
          <!-- slider -->
          <ul class="slides">
		  
		  <?php 


if ( function_exists( 'ot_get_option' ) ) {
  
  $enableslider=ot_get_option('my_checkbox');
  
  $slides = ot_get_option( 'my_slider',array());
  $client_settings = ot_get_option( 'client_settings',array());
  $industry_settings = ot_get_option( 'industry_settings',array());
  $skills = ot_get_option( 'skills_settings',array());
  $aboutus_desc = ot_get_option( 'aboutus_desc',array());
  $industry_desc = ot_get_option( 'industry_desc',array());
  $portfolio_desc = ot_get_option( 'portfolio_desc',array());
  $clients_desc = ot_get_option( 'clients_desc',array());
  $social_facebook = ot_get_option( 'social_facebook',array());
  $social_twitter = ot_get_option( 'social_twitter',array());
  $social_linkedin = ot_get_option( 'social_linkedin',array());
  
  
  
  if ( ! empty( $slides ) && $enableslider[0]=='yes' ) {
    foreach( $slides as $slide ) {
	 
      echo '<li> <?php if(!empty($slider_image1)){?>
					<img src="'.$slide['slider_image'].'" alt=""  /> <?php } ?>
              <p class="flex-caption">'. $slide['slider_caption'].'</p>
            </li>';
      
    }
  }
  
}  ?>
            
          </ul>
        </div>
		
		<?php } ?>
        <div class="space"> </div>
        <div class="clear"> </div>
        <!-- services -->
        
		
		<?php $i=0; if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php if ($i==0) { ?>
		<div class="one_half first">
          <div class="column_content">
             <h4>Welcome to my Website!</h4>
           
<?php if (has_post_thumbnail( $post->ID ) ){ ?>	
		   <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID ) ); ?>" class="left no_border" alt="" style="margin-top: 10px;
                                margin-right: 10px" />
								<?php } ?>
								
            <p> <small><?php the_content(__('Read More...', 'onepager')); ?></small></p>
          </div>
        </div>     <?php $i=1; }  else {  ?>

		
		<div class="one_half last">
          <div class="column_content">
             <h4><?php echo get_the_title(); ?></h4>
           
<?php if (has_post_thumbnail( $post->ID ) ){ ?>	
		   <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID ) ); ?>" class="left no_border" alt="" style="margin-top: 10px;
                                margin-right: 10px" />
								<?php } ?>
								
            <p> <small><?php the_content(__('Read More...', 'onepager')); ?></small></p>
          </div>
        </div>


<?php $i=0; } ?>		
	
		
		<?php endwhile; ?>
			
		<?php else : ?>

			<h2>Not Found</h2>

		<?php endif; ?>
		
		
       
        <div class="clear"> </div>
      </div>
    </div>
    <div class="page" id="about"> 
      <!-- page about -->
      <h3 class="page_title"> About Me</h3>
      <div class="page_content">
	  
	  I am a highly motivated, organised and hardworking 
	  individual, who is able to work under pressure and 
	  meet deadlines. I am reliable, confident and strive 
	  to continuously improve my skills and abilities to 
	  meet the emerging trends in the web design industry. 
	  I get on well with people and I have the ability to 
	  learn fast. I am ambitious and focused with a strong 
	  passion for technology.
        
      </div>
    </div>

<div class="page" id="skills"> 
      <!-- page skills -->
      <h3 class="page_title"> My Skills</h3>
      <div class="page_content"> 
    
      <ul>
        <li> <strong>Languages:</strong> English (excellent), Serbian (mother tongue) and German (good).</li>

        <li> <strong> Great Customer Service Skills, </strong> as I have done a course from Customer Service Excellence in Ireland.</li>

        <li><strong>Programming: </strong>
        <ul>
          <li>Java: In my most recent project, I have created a game for Android.</li>
          <li>HTML5, CSS3, JavaScript: Able to create good quality websites which meet the industry standards (link to one of the websites I have created: http://goo.gl/tQJGGB).</li>
          <li>PHP and MySQL: Able to connect to and manipulate databases, create WordPress plugins, etc.</li></li>
        </ul>

        <li> <strong> Previous Experience </strong> using the WordPress and Woo Commerce platform and creating custom themes.</li>
        
        <li> <strong> Problem Solving </strong> and Excellent Design Skills using SolidWorks, Blender and Photoshop CS.</li>
        
        <li> <strong> Proficiency </strong> in the Windows Office Suite (Word, Excel, Access, PowerPoint, etc.).</li>
        
        <li> <strong> Familiar with penetration testing </strong> using Kali and the WiFi Pineapple. </li>
        
        <li> <strong> Able to perform computer repair, </strong> such as CPU replacement, running diagnostic tools, reinstalling OS, etc.</li>

      </ul>
        
        <div class="clear"> </div>
      </div>
    </div>

    <div class="page" id="portfolio"> 
      <!-- page portfolio -->
      <h3 class="page_title"> Portfolio</h3>
      <div class="page_content">
	  
	  <?php if(isset($portfolio_desc)) {echo $portfolio_desc;}  ?>
       
		    
        <ul >
        <ul id="works_filter">
		
          <li><a href="#" data-filter="*" class="selected">Show All</a></li>
		  <?php $terms = get_terms("portfolio-type");
 $count = count($terms);
 if ( $count > 0 ){
     
     foreach ( $terms as $term ) {
       echo '<li><a href="#" data-filter=".'.$term->name.'">'.$term->name.'</a></li>';
     }
     
 }  ?>
		  
        </ul>
        <div class="clear"> </div>
        <div id="works"> 
		
		  <?php 
		    $args = array(
                'post_type' => 'portfolio',
                'orderby' => 'menu_order',
                'order' => 'ASC',
                'posts_per_page' => -1
		    );
		    $query = new WP_Query( $args );

			while ( $query->have_posts() ) : $query->the_post(); ?>
				
				<?php 
				    $terms =  get_the_terms( $post->ID, 'portfolio-type' );
					
				    $term_list = '';
				    if( is_array($terms) ) {
				        foreach( $terms as $term ) {
    				        $term_list .= ($term->name);
    				        $term_list .= ' ';
    				    }
			        }

 
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );  
				?>
				
				
				
				<?php echo '<a rel="prettyPhoto[gallery]" href="'.$url.'"> <img class="work '.$term_list.'"'.'src="'.$url.'" alt="" /> </a>'  ?>
				
				<?php endwhile; ?>
          <!-- works --> 
          </div>
		
		<div class="clear"> </div>
      </div>
    </div>
    
    <div class="page" id="industries"> 
      <!-- page industries -->
      <h3 class="page_title"> Industries I am Interested in</h3>
      <div class="page_content">
        <?php echo $industry_desc;  ?>
        <div class="space"> </div>
        <div class="clear"> </div>
        <ul class="sublist">
		
     
        </ul>
        <div class="clear"> </div>
      </div>
    </div>
    <div class="page" id="myclients"> 
      <!-- page clients -->
      <h3 class="page_title"> Play a Game </h3>
      <div class="page_content">
          <a target="_blank" original-title="Play a Game" href="<?php  echo $domainName; ?>/game"><img src="http://s21.postimg.org/z7bbkxypi/flappy_bird.jpg"></a>
      </div>
    </div>
    <div class="page" id="contact"> 
      <!-- page contact -->
      <h3 class="page_title"> Let's Get in Touch</h3>
      <div class="page_content">
        <fieldset id="contact_form">
          <div id="msgs"> </div>
          <form id="cform" name="cform" method="post" action="">
            <input type="text" id="name" name="name" value="Full Name*" onfocus="if(this.value == 'Full Name*') this.value = ''"
                            onblur="if(this.value == '') this.value = 'Full Name*'" />
            <input type="text" id="email" name="email" value="Email Address*" onfocus="if(this.value == 'Email Address*') this.value = ''"
                            onblur="if(this.value == '') this.value = 'Email Address*'" />
            <input type="text" id="subject" name="subject" value="Subject*" onfocus="if(this.value == 'Subject*') this.value = ''"
                            onblur="if(this.value == '') this.value = 'Subject*'" />
            <textarea id="msg" name="msg" onfocus="if(this.value == 'Your Message*') this.value = ''"
                            onblur="if(this.value == '') this.value = 'Your Message*'">Your Message*</textarea>
            <button id="submit" class="button"> Send Message</button>
          </form>
        </fieldset>
        <div class="clear"> </div>
		<?php   ?>
        <ul class="social_icons">
          <li><a target="_blank" original-title="Follow me on Google+" href="https://plus.google.com/u/1/116749449325023235564/id" id="fb" posts="fb"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/google+.png" alt="Google+" /></a></li>
          <li><a target="_blank" original-title="Follow Me on Twitter" href="https://twitter.com/filip500filip" id="tw" > <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.png" alt="Twitter" /></a></li>
          <li><a target="_blank" original-title="Find me on LinkedIn" href="" id="ld" > <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin.png" alt="LinkedIn" /></a></li>
        </ul>
      </div>

    </div>
    <div class="footer">
	
    </div>
  </div>
</div>
<a class="gotop" href="#top">Top</a>


</body>
</html>
