<?php
/*
Template Name: Первая страница
 * Шаблон первой страницы (template-first-page.php)
 * @package WordPress
 * @subpackage medium
 */



get_header();

?>

	<script src="<?php bloginfo('template_directory'); ?>/assets/vendors/switcher/readcookies.js" ></script>
    
    <noscript>
        <div class="javascript-required">
            You seem to have Javascript disabled. This website needs javascript in order to function properly!
        </div>
    </noscript>
    	
	

	<div id="wrap">
	
		<div id="header-top">
        	
        
            
            <div class="container">
				<div class="row">
					<div class="span9" id="header-top-widget-area-1">
						
					   <div class="widget ewf_widget_contact_info">
                            
                            <ul>
                                <li>
                                    1926 Morris Street Gonzales, TX 78629 
                                </li>
                                <li>
                                    830-351-4523
                                </li>
                            </ul>
                            
                        </div>
						
					</div>
					<div class="span3" id="header-top-widget-area-2">
						
						<div class="widget widget_search">
                        
                            <form action="#" class="searchform" id="searchform" method="get" name="searchform">
                                <div>
                                    <label class="screen-reader-text" for="s">Search for:</label> 
                                    <input id="s" name="s" type="text" value="" placeholder="Search..."> 
                                    <input id="searchsubmit" type="submit" value="">
                                </div>
                            </form>
                            
                        </div>
						
					</div>
				</div>
			</div>
            
        
        
        </div>
		<div id="header-wrap">
			<div id="header">
			
			

				<div class="container">
                    <div class="row">
                        <div class="span3">
                        
                            
                            <div id="logo">
                                <a href="index.html" >
                                    <img src="<?php bloginfo('template_directory'); ?>/images/logo2.png"  alt="website logo">
                                </a>
                            </div>
                        
                        </div>
                        <div class="span9">
                        
                            
                            
                            <a href="#" id="mobile-menu-trigger">
                                <i class="fa fa-bars"></i>
                            </a>
                            
                            
                            
                            <nav>
                                <ul class="sf-menu fixed" id="menu">
                                    <li class="current">
                                    	<a href="index.html" >Home</a>
                                    </li>                                    
                                    <li class="dropdown">
                                        <a href="#">Pages</a>
                                        <ul>
                                            <li>
                                            	<a href="about-us.html" >About us</a>
                                            </li>
                                            <li>
                                            	<a href="services.html" >Services</a>
                                            </li>
                                            <li>
                                            	<a href="single-service.html" >Single service</a>
                                            </li>
                                            <li>
                                            	<a href="full-width-page.html" >Full width page</a>
                                            </li>
                                            <li>
                                            	<a href="page-right-sidebar.html" >Page right sidebar</a>
                                            </li>
                                            <li>
                                            	<a href="page-left-sidebar.html" >Page left sidebar</a>
                                            </li>
                                            <li>
                                            	<a href="blank-page.html" >Blank page</a>
                                            </li>
                                            <li>
                                            	<a href="page-404.html" >Page 404</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">3rd level dropdown</a>
                                                 <ul>
                                                    <li><a href="#">3rd level</a></li>
                                                    <li><a href="#">dropdown</a></li>
                                                    <li><a href="#">example</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                    	<a href="#">Portfolio</a>
                                        <ul>
                                        	<li class="dropdown">
                                            	<a href="#">Portfolio grid</a>
                                                <ul>
                                                	<li>
                                                    	<a href="portfolio-grid.html" >3 cols</a>
                                                    </li>
                                                    <li>
                                                    	<a href="portfolio-grid-gutter.html" >3 cols gutter</a>
                                                    </li>
                                                    <li>
                                                    	<a href="portfolio-grid-titles.html" >3 cols titles</a>
                                                    </li>
                                                    <li>
                                                    	<a href="portfolio-grid-gutter-titles.html" >3 cols gutter &amp; titles</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                            	<a href="#">Portfolio filterable</a>
                                                <ul>
                                                	<li>
                                                    	<a href="portfolio-filterable.html" >3 cols</a>
                                                    </li>
                                                    <li>
                                                    	<a href="portfolio-filterable-gutter.html" >3 cols gutter</a>
                                                    </li>
                                                    <li>
                                                    	<a href="portfolio-filterable-titles.html" >3 cols titles</a>
                                                    </li>
                                                    <li>
                                                    	<a href="portfolio-filterable-gutter-titles.html" >3 cols gutter &amp; titles</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                            	<a href="#">Portfolio masonry</a>
                                                <ul>
                                                	<li>
                                                    	<a href="portfolio-masonry.html" >3 cols</a>
                                                    </li>
                                                    <li>
                                                    	<a href="portfolio-masonry-gutter.html" >3 cols gutter</a>
                                                    </li>
                                                    <li>
                                                    	<a href="portfolio-masonry-titles.html" >3 cols titles</a>
                                                    </li>
                                                    <li>
                                                    	<a href="portfolio-masonry-gutter-titles.html" >3 cols gutter &amp; titles</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                            	<a href="#">Portfolio fullwidth</a>
                                                <ul>
                                                	<li>
                                                    	<a href="portfolio-fullwidth.html" >4 cols</a>
                                                    </li>
                                                    <li>
                                                    	<a href="portfolio-fullwidth-gutter.html" >4 cols gutter</a>
                                                    </li>
                                                    <li>
                                                    	<a href="portfolio-fullwidth-titles.html" >4 cols titles</a>
                                                    </li>
                                                    <li>
                                                    	<a href="portfolio-fullwidth-gutter-titles.html" >4 cols gutter &amp; titles</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                            	<a href="portfolio-single.html" >Portfolio single</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>                        	
                                        <a href="#">Components</a>
                                        
                                        <div class="sf-mega sf-mega-4-col">
                                            
                                            <div class="sf-mega-section">
    
                                                <ul>
                                                    <li>                                        	
                                                        <a href="components-grid.html" >
                                                            <i class="ifc-vpn"></i>
                                                            Grid
                                                        </a>
                                                    </li>
													<li>                                        	
                                                        <a href="components-typography.html" >
                                                            <i class="ifc-type"></i>
                                                            Typography
                                                        </a>
                                                    </li>
                                                    <li>                                        	
                                                        <a href="components-forms.html" >
                                                            <i class="ifc-generic_text"></i>
                                                            Forms
                                                        </a>
                                                    </li>
                                                    <li>                                        	
                                                        <a href="components-page-sections.html" >
                                                            <i class="ifc-cut"></i>
                                                            Page sections
                                                        </a>
                                                    </li>
                                                    <li>                                        	
                                                        <a href="components-parallax-backgrounds.html" >
                                                            <i class="ifc-layers"></i>
                                                            Parallax backgrounds
                                                        </a>
                                                    </li>
                                                    <li>                                        	
                                                        <a href="components-video-background.html" >
                                                            <i class="ifc-tv_show"></i>
                                                            Video background
                                                        </a>
                                                    </li>
                                                    <li>                                        	
                                                        <a href="components-accordion-toggles.html" >
                                                            <i class="ifc-week_view"></i>
                                                            Accordion and Toggles
                                                        </a>
                                                    </li>                                                                                                                                                        
                                                </ul>
                                            
                                            </div>
                                            
                                            <div class="sf-mega-section">
                                            
                                                <ul>
													<li>                                        	
                                                        <a href="components-alerts.html" >
                                                            <i class="ifc-warning_shield"></i>
                                                            Alerts
                                                        </a>
                                                    </li> 
													<li>                                        	
                                                        <a href="components-animations.html" >
                                                            <i class="ifc-joystick"></i>
                                                            Animations
                                                        </a>
                                                    </li>
													<li>                                        	
                                                        <a href="components-buttons.html" >
                                                            <i class="ifc-sent"></i>
                                                            Buttons
                                                        </a>
                                                    </li>
                                                    <li>                                        	
                                                        <a href="components-custom-lists.html" >
                                                            <i class="ifc-torah"></i>
                                                            Custom Lists
                                                        </a>
                                                    </li>
                                                    <li>                                        	
                                                        <a href="components-dividers.html" >
                                                            <i class="ifc-line"></i>
                                                            Dividers
                                                        </a>
                                                    </li>
                                                    <li>                                        	
                                                        <a href="components-google-maps.html" >
                                                            <i class="ifc-map_marker"></i>
                                                            Google maps
                                                        </a>
                                                    </li>
													<li>                                        	
                                                        <a href="components-headlines.html" >
                                                            <i class="ifc-up2"></i>
                                                            Headlines
                                                        </a>
                                                    </li>                                                                                                                                                          
                                                </ul>
                                            
                                            </div>
                                            
                                            <div class="sf-mega-section">
                                            
                                                <ul> 
                                                    <li>
                                                        <a href="components-icons.html" >
                                                            <i class="ifc-medium_icons"></i>
                                                            Icons
                                                        </a>
                                                    </li>
                                                    <li>                                        	
                                                        <a href="components-icon-boxes.html" >
                                                            <i class="ifc-inbox"></i>
                                                            Icon Boxes
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="components-image-galleries.html" >
                                                            <i class="ifc-stack_of_photos"></i>
                                                            Image galleries
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="components-multimedia-content.html" >
                                                            <i class="ifc-micro"></i>
                                                            Multimedia content
                                                        </a>
                                                    </li>
                                                    <li>                                        	
                                                        <a href="components-our-process.html" >
                                                            <i class="ifc-circuit"></i>
                                                            Our process
                                                        </a>
                                                    </li>
                                                    <li>                                        	
                                                        <a href="components-pricing-tables.html" >
                                                            <i class="ifc-price_tag"></i>
                                                            Pricing tables
                                                        </a>
                                                    </li> 
                                                    <li>                                        	
                                                        <a href="components-progress-counters.html" >
                                                            <i class="ifc-combo_chart"></i>
                                                            Progress &amp; Counters
                                                        </a>
                                                    </li>
                                                </ul>
                                                
                                            </div>
                                            
                                            <div class="sf-mega-section">
                                            
                                                <ul>
                                                	<li>
                                                        <a href="components-quotes-testimonials.html" >
                                                            <i class="ifc-quote"></i>
                                                            Quotes &amp; Testimonials
                                                        </a>
                                                    </li>
													<li>                                        	
                                                        <a href="components-sliders.html" >
                                                            <i class="ifc-tv"></i>
                                                            Sliders
                                                        </a>
                                                    </li>
													<li>                                        	
                                                        <a href="components-social-media.html" >
                                                            <i class="ifc-facebook"></i>
                                                            Social media
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="components-styled-tables.html" >
                                                            <i class="ifc-gantt_chart"></i>
                                                            Styled tables
                                                        </a>
                                                    </li>
                                                    <li>                                        	
                                                        <a href="components-tabs.html" >
                                                            <i class="ifc-data_in_both_directions"></i>
                                                            Tabs
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="components-team.html" >
                                                            <i class="ifc-group"></i>
                                                            Team
                                                        </a>
                                                    </li>  
                                                    <li>
                                                        <a href="components-wp-widgets.html" >
                                                            <i class="ifc-info"></i>
                                                            WP  Widgets
                                                        </a>
                                                    </li>
												</ul>
                                            
                                            </div>
                                            
                                        </div>
                                        
                                    </li>
                                    <li class="dropdown">
                                    	<a href="blog.html" >Blog</a>
                                        <ul>
                                        	<li>
                                            	<a href="blog.html" >Blog</a>
                                            </li>
                                            <li>
                                            	<a href="blog-post.html" >Blog post</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                    	<a href="contact-1.html" >Contact</a>
										<ul>
											<li>
												<a href="contact-1.html" >Contact 1</a>
											</li>
											<li>
												<a href="contact-2.html" >Contact 2</a>
											</li>
										</ul>
                                    </li>
                                </ul>
                            </nav>	
    
                        </div>
                    </div>		
				</div>
			
            

			</div>
		</div>	
		<div id="content">
		
		

			<div class="fullwidthbanner-container slider-revolution">
				<div class="fullwidthbanner">
					<ul>					   						                        
			<li data-transition="fade">
						
                            <img src="<?php bloginfo('template_directory'); ?>/images/slider.jpg"  alt="">
                            <!--
                            <div class="caption sfb"
                                 data-x="600"
                                 data-y="175"
                                 data-speed="600"
                                 data-start="1000"
                                 data-easing="easeOutExpo">
                                 <img src="/content/index/slider/slide-1-p1.png"  alt="">
                            </div>-->
                            
                            <div class="caption title sfl"
                                 data-x="50"
                                 data-y="220"
                                 data-speed="600"
                                 data-start="1500"
                                 data-easing="easeOutExpo">  
                                 Choose sfera
                            </div>
                            
                            <div class="caption text sfl"
                                 data-x="50"
                                 data-y="290"
                                 data-speed="600"
                                 data-start="2000"
                                 data-easing="easeOutExpo">
                                 Cras sed sapien et mi maximus porta et eget diam. Pellentesque at diam ac purus <br>
								 sollicitudin ullamcorper in nec sapien. Proin massa nibh, pharetra id vulputate sed, <br>
								 vestibulum ut quam. 
                            </div>
                            <!--
                            <div class="caption sfb"
                                 data-x="50"
                                 data-y="400"
                                 data-speed="600"
                                 data-start="2500"
                                 data-easing="easeOutExpo">
                                 <a class="btn" href="#">Read more</a>
                            </div>-->
                        
                        </li> 
                          
                    </ul>
                    
                </div>
            </div>
            
            <div class="container">    
                <div class="row">
                    <div class="span12">

						<div class="headline">
                        	
                            <h6>Sfera Theme</h6>
                            
                            <h3>Some Features</h3>
                            
                        </div>
                    
                    </div>
                </div>
            </div>
            
            <div class="container">    
                <div class="row">
                    <div class="span3">

						<div class="icon-box-1">
                            
                            <i class="ifc-tea"></i>
      
                            <div class="icon-box-content">
                            
                                <h5>
                                    <a href="single-service.html" >Branding</a>
                                </h5>
                                
                                <p>Lorem ipsum dolor sit amet, consect omis unde quam vitae moris elit. Etiam sit amet velit tortor.</p>
                            
                            </div>
                            
                        </div>
                    
                    </div>
                    <div class="span3">

						<div class="icon-box-1">
                            
                            <i class="ifc-fantasy"></i>
      
                            <div class="icon-box-content">
                            
                                <h5>
                                    <a href="single-service.html" >Development</a>
                                </h5>
                                
                                <p>Maecenas maximus felis ipsum, rhoncus gravida quam aliquet et. Integer sit amet aliquam purus.</p>
                            
                            </div>
                            
                        </div>
                    
                    </div>
                    <div class="span3">

						<div class="icon-box-1">
                            
                            <i class="ifc-register_editor"></i>
      
                            <div class="icon-box-content">
                            
                                <h5>
                                    <a href="single-service.html" >Logo design</a>
                                </h5>
                                
                                <p>Quisque lacus mi, consequat quis congue vitae, ornare eu quam. Vestibulum luctus ligula eget.</p>
                            
                            </div>
                            
                        </div>
                    
                    </div>
                    <div class="span3">

						<div class="icon-box-1">
                            
                            <i class="ifc-settings3"></i>
      
                            <div class="icon-box-content">
                            
                                <h5>
                                    <a href="single-service.html" >Support</a>
                                </h5>
                                
                                <p>Donec quis dolor sem. Nullam tempor ante ipsum, ut volutpat quam accumsan tristique dolor.</p>
                            
                            </div>
                            
                        </div>
                    
                    </div>
                </div>
            </div>
            
            <br><br>
            
            <div class="container">    
                <div class="row">
                    <div class="span12">

						<div class="headline" style="margin-bottom:75px;">
                        	
                            <h6>Our Work</h6>
                            
                            <h3>Portfolio</h3>
                            
                        </div>
                    
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="span12">
                    
                        <div class="portfolio-filter">
                    
                            <ul>
                                <li>
                                    <a class="active" href="#" data-filter="*">All</a>
                                </li>
                                <li>
                                    <a href="#" data-filter=".term-1">Branding</a>
                                </li>
                                <li>
                                    <a href="#" data-filter=".term-2">Design</a>
                                </li>
                                <li>
                                    <a href="#" data-filter=".term-3">Photography</a>
                                </li>
                            </ul>
                            
                        </div>
                
                    </div>
                </div>
            </div>
            
            <div class="portfolio-grid four-cols portfolio-isotope" style="margin-bottom:0;">
            	
                <div class="item term-2">
                	
                    <div class="portfolio-item">
                    
                        <div class="portfolio-item-preview">			
                        
                            <img src="<?php bloginfo('template_directory'); ?>/content/portfolio/480x300-1.jpg"  alt="">
                            
                            <div class="portfolio-item-overlay">                                                                                                                                    
                                
                                <div class="portfolio-item-overlay-actions">
                                    
                                    <a class="portfolio-item-zoom magnificPopup-gallery" href="content/portfolio/480x300-1.jpg" >
                                        <i class="ifc-zoom_in"></i>
                                    </a>

                                </div>
                            
                            </div>
                        
                        </div>
                        
                        <div class="portfolio-item-description">
                        
                            <h5>
                                <a href="portfolio-single.html" >Company branding</a>
                            </h5>
                            
                            <h6>Design</h6>
                        
                        </div>
        
                    </div>
                    
                </div>
                
                <div class="item term-1 term-3">
                	
                    <div class="portfolio-item">
                    
                        <div class="portfolio-item-preview">			
                        
                            <img src="<?php bloginfo('template_directory'); ?>/content/portfolio/480x300-2.jpg"  alt="">
                            
                            <div class="portfolio-item-overlay">                                                                                                                                    
                                
                                <div class="portfolio-item-overlay-actions">
                                    
                                    <a class="portfolio-item-zoom magnificPopup-gallery" href="content/portfolio/480x300-2.jpg" >
                                        <i class="ifc-zoom_in"></i>
                                    </a>

                                </div>
                            
                            </div>
                        
                        </div>
                        
                        <div class="portfolio-item-description">
                        
                            <h5>
                                <a href="portfolio-single.html" >City skyline</a>
                            </h5>
                            
                            <h6>Design</h6>
                        
                        </div>
        
                    </div>
                    
                </div>
                
                <div class="item term-1 term-2">
                	
                    <div class="portfolio-item">
                    
                        <div class="portfolio-item-preview">			
                        
                            <img src="<?php bloginfo('template_directory'); ?>/content/portfolio/480x300-3.jpg"  alt="">
                            
                            <div class="portfolio-item-overlay">                                                                                                                                    
                                
                                <div class="portfolio-item-overlay-actions">
                                    
                                    <a class="portfolio-item-zoom magnificPopup-gallery" href="content/portfolio/480x300-3.jpg" >
                                        <i class="ifc-zoom_in"></i>
                                    </a>

                                </div>
                            
                            </div>
                        
                        </div>
                        
                        <div class="portfolio-item-description">
                        
                            <h5>
                                <a href="portfolio-single.html" >Company branding</a>
                            </h5>
                            
                            <h6>Design</h6>
                        
                        </div>
        
                    </div>
                    
                </div>
                
                <div class="item term-3">
                	
                    <div class="portfolio-item">
                    
                        <div class="portfolio-item-preview">			
                        
                            <img src="<?php bloginfo('template_directory'); ?>/content/portfolio/480x300-4.jpg"  alt="">
                            
                            <div class="portfolio-item-overlay">                                                                                                                                    
                                
                                <div class="portfolio-item-overlay-actions">
                                    
                                    <a class="portfolio-item-zoom magnificPopup-gallery" href="content/portfolio/480x300-4.jpg" >
                                        <i class="ifc-zoom_in"></i>
                                    </a>

                                </div>
                            
                            </div>
                        
                        </div>
                        
                        <div class="portfolio-item-description">
                        
                            <h5>
                                <a href="portfolio-single.html" >Logo desing</a>
                            </h5>
                            
                            <h6>Design</h6>
                        
                        </div>
        
                    </div>
                    
                </div>
                
                <div class="item term-2 term-3">
                	
                    <div class="portfolio-item">
                    
                        <div class="portfolio-item-preview">			
                        
                            <img src="<?php bloginfo('template_directory'); ?>/content/portfolio/480x300-5.jpg"  alt="">
                            
                            <div class="portfolio-item-overlay">                                                                                                                                    
                                
                                <div class="portfolio-item-overlay-actions">
                                    
                                    <a class="portfolio-item-zoom magnificPopup-gallery" href="content/portfolio/480x300-5.jpg" >
                                        <i class="ifc-zoom_in"></i>
                                    </a>

                                </div>
                            
                            </div>
                        
                        </div>
                        
                        <div class="portfolio-item-description">
                        
                            <h5>
                                <a href="portfolio-single.html" >New York photography</a>
                            </h5>
                            
                            <h6>Design</h6>
                        
                        </div>
        
                    </div>
                    
                </div>
                
                <div class="item term-1">
                	
                    <div class="portfolio-item">
                    
                        <div class="portfolio-item-preview">			
                        
                            <img src="<?php bloginfo('template_directory'); ?>/content/portfolio/480x300-6.jpg"  alt="">
                            
                            <div class="portfolio-item-overlay">                                                                                                                                    
                                
                                <div class="portfolio-item-overlay-actions">
                                    
                                    <a class="portfolio-item-zoom magnificPopup-gallery" href="content/portfolio/480x300-6.jpg" >
                                        <i class="ifc-zoom_in"></i>
                                    </a>

                                </div>
                            
                            </div>
                        
                        </div>
                        
                        <div class="portfolio-item-description">
                        
                            <h5>
                                <a href="portfolio-single.html" >Company branding</a>
                            </h5>
                            
                            <h6>Design</h6>
                        
                        </div>
        
                    </div>
                    
                </div>
                
                <div class="item term-3">
                	
                    <div class="portfolio-item">
                    
                        <div class="portfolio-item-preview">			
                        
                            <img src="<?php bloginfo('template_directory'); ?>/content/portfolio/480x300-7.jpg"  alt="">
                            
                            <div class="portfolio-item-overlay">                                                                                                                                    
                                
                                <div class="portfolio-item-overlay-actions">
                                    
                                    <a class="portfolio-item-zoom magnificPopup-gallery" href="content/portfolio/480x300-7.jpg" >
                                        <i class="ifc-zoom_in"></i>
                                    </a>

                                </div>
                            
                            </div>
                        
                        </div>
                        
                        <div class="portfolio-item-description">
                        
                            <h5>
                                <a href="portfolio-single.html" >Company branding</a>
                            </h5>
                            
                            <h6>Design</h6>
                        
                        </div>
        
                    </div>
                    
                </div>
                
                <div class="item term-1 term-2">
                	
                    <div class="portfolio-item">
                    
                        <div class="portfolio-item-preview">			
                        
                            <img src="<?php bloginfo('template_directory'); ?>/content/portfolio/480x300-8.jpg"  alt="">
                            
                            <div class="portfolio-item-overlay">                                                                                                                                    
                                
                                <div class="portfolio-item-overlay-actions">
                                    
                                    <a class="portfolio-item-zoom magnificPopup-gallery" href="content/portfolio/480x300-8.jpg" >
                                        <i class="ifc-zoom_in"></i>
                                    </a>

                                </div>
                            
                            </div>
                        
                        </div>
                        
                        <div class="portfolio-item-description">
                        
                            <h5>
                                <a href="portfolio-single.html" >Company branding</a>
                            </h5>
                            
                            <h6>Design</h6>
                        
                        </div>
        
                    </div>
                    
                </div>
                
            </div>
            
            <div class="fullwidth-section custom-color-selected">
            	
                <div class="fullwidth-section-content">
                	
                    <div class="container">
                    	<div class="row">
                        	<div class="span8">
                            	
                                <h2 class="text-uppercase text-highlight no-margin-bottom">Do you like it?</h2>
                                
                                <p class="last">Vivamus vitae facilisis massa, nec luctus sem. Praesent in nibh nec est auctor rhoncus. 
                                Praesent auctor turpis vel eros porta eleifend. </p>
                                
                            </div>
                            <div class="span4 text-right">
                            
                            	<br>
                            	
                                <a class="btn" href="#">Read more</a>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="container">    
                <div class="row">
                    <div class="span12">

						<div class="headline">
                        	
                            <h6>Choose</h6>
                            
                            <h3>Our services</h3>
                            
                        </div>
                    
                    </div>
                </div>
            </div>
            
            <div class="container">    
                <div class="row">
                    <div class="span4">

						<div class="icon-box-2">
                            
                            <i class="ifc-tea"></i>
      
                            <div class="icon-box-content">
                            
                                <h5>
                                    <a href="single-service.html" >Branding</a>
                                </h5>
                                
                                <br class="clear">
                                
                                <p>Lorem ipsum dolor sit amet, consectet ur adi piscing elit. Etiam sit amet velit tortor.</p>
                                
                                <a href="single-service.html" >Read more</a>
                            
                            </div>
                            
                        </div>
                    
                    </div>
                    <div class="span4">

						<div class="icon-box-2">
                            
                            <i class="ifc-fantasy"></i>
      
                            <div class="icon-box-content">
                            
                                <h5>
                                    <a href="single-service.html" >Development</a>
                                </h5>
                                
                                <br class="clear">
                                
                                <p>Maecenas maximus felis ipsum, rhoncus gravida quam aliquet et integer sit amet.</p>
                                
                                <a href="single-service.html" >Read more</a>
                            
                            </div>
                            
                        </div>
                    
                    </div>
                    <div class="span4">

						<div class="icon-box-2">
                            
                            <i class="ifc-register_editor"></i>
      
                            <div class="icon-box-content">
                            
                                <h5>
                                    <a href="single-service.html" >Logo desing</a>
                                </h5>
                                
                                <br class="clear">
                                
                                <p>Donec nec nibh quis quam gravida maximus nec in magna. Donec arcu ligula non justo.</p>
                                
                                <a href="single-service.html" >Read more</a>
                            
                            </div>
                            
                        </div>
                    
                    </div>
                </div>
            </div>
            
            <div class="container">    
                <div class="row">                    
                    <div class="span4">

						<div class="icon-box-2">
                            
                            <i class="ifc-settings3"></i>
      
                            <div class="icon-box-content">
                            
                                <h5>
                                    <a href="single-service.html" >Support</a>
                                </h5>
                                
                                <br class="clear">
                                
                                <p>Praesent eros vitae aliquet aliquam, justo nibh nunc, id suscipit ex neque et enim.</p>
                                
                                <a href="single-service.html" >Read more</a>
                            
                            </div>
                            
                        </div>
                    
                    </div>
                    <div class="span4">

						<div class="icon-box-2">
                            
                            <i class="ifc-define_location"></i>
      
                            <div class="icon-box-content">
                            
                                <h5>
                                    <a href="single-service.html" >Retina ready</a>
                                </h5>
                                
                                <br class="clear">
                                
                                <p>Quisque imperdiet lacus pharetra nunc tincidunt, quis lobortis diam volutpat.</p>
                                
                                <a href="single-service.html" >Read more</a>
                            
                            </div>
                            
                        </div>
                    
                    </div>
                    <div class="span4">

						<div class="icon-box-2">
                            
                            <i class="ifc-java_coffee_cup_logo"></i>
      
                            <div class="icon-box-content">
                            
                                <h5>
                                    <a href="single-service.html" >Modern design</a>
                                </h5>
                                
                                <br class="clear">
                                
                                <p>Sed dictum enim id sapien maximus amet vehicula maecenas posuere ante et dolor.</p>
                                
                                <a href="single-service.html" >Read more</a>
                            
                            </div>
                            
                        </div>
                    
                    </div>
                </div>
            </div>
            
            <div class="fullwidth-section parallax" id="bg-1">
            	
                <div class="fullwidth-section-content">
                	
                    <div class="container">
                    	<div class="row">
                        	<div class="span6">
                            	
                                <div class="headline-2">
                                
                                	<h6>Our work</h6>
                                    
                                    <h1>Chose Sfera</h1>
                                	
                                </div>
                                
                                <p>Cras sed sapien et mi maximus porta et eget diam. Pellentesque at diam ac purus sollicitudin 
                                ullamcorper in nec sapien. Proin massa nibh, pharetra id vulputate sed, vestibulum ut quam. </p>
                                
                                <br>
                                
                                <a class="btn" href="#">Read more</a>
                                
                            </div>
                            <div class="span6">
                            	
                                <div class="images-slider">
                                	
                                    <ul class="slides">
                                    	<li>
                                        	<img src="<?php bloginfo('template_directory'); ?>/content/index/slider-2/600x285-1.png"  alt="">
                                        </li>
                                        <li>
                                        	<img src="<?php bloginfo('template_directory'); ?>/content/index/slider-2/600x285-2.png"  alt="">
                                        </li>
                                        <li>
                                        	<img src="<?php bloginfo('template_directory'); ?>/content/index/slider-2/600x285-3.png"  alt="">
                                        </li>
                                    </ul>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="fullwidth-section custom-color-selected" id="bg-2">
            	
                <div class="fullwidth-section-content">
                	
                    <div class="container">
                        <div class="row">
                            <div class="span3">
                            
                                <div class="milestone">
                                    
                                    <div class="milestone-content">
                                        <span class="milestone-value" data-stop="345" data-speed="2000"></span>
                                        <div class="milestone-description">Employes</div>
                                    </div>
                                   
                                </div>
                            
                            </div>
                            <div class="span3">
                            
                                <div class="milestone">
                                    
                                    <div class="milestone-content">
                                        <span class="milestone-value" data-stop="1165" data-speed="2000"></span>
                                        <div class="milestone-description">Happy Clients</div>
                                    </div>
                                   
                                </div>
                            
                            </div>
                            <div class="span3">
                            
                                <div class="milestone">
                                    
                                    <div class="milestone-content">
                                        <span class="milestone-value" data-stop="43" data-speed="2000"></span>
                                        <div class="milestone-description">Projects</div>
                                    </div>
                                   
                                </div>
                            
                            </div>
                            <div class="span3">
                    
                                <div class="milestone">
                                    
                                    <div class="milestone-content">
                                        <span>+</span>
                                        <span class="milestone-value" data-stop="45" data-speed="2000"></span>
                                        <span>K</span>
                                        <div class="milestone-description">Fb Fans</div>
                                    </div>
                                   
                                </div>
                            
                            </div> 
                        </div>
                    </div>
                
                </div>
                
            </div>
            
            <div class="container">    
                <div class="row">
                    <div class="span12">

						<div class="headline">
                        	
                            <h6>Clients</h6>
                            
                            <h3>Testimonials</h3>
                            
                        </div>
                    
                    </div>
                </div>
            </div>
            
            <div class="container">    
                <div class="row">
                    <div class="span6">

						<div class="clients-logos-slider">
                        	
                            <ul class="slides">
                            	<li>
                                	<img src="<?php bloginfo('template_directory'); ?>/content/clients-logos/160x100-1.png"  alt="">
                                    <img src="<?php bloginfo('template_directory'); ?>/content/clients-logos/160x100-2.png"  alt="">
                                </li>
                                <li>
                                	<img src="<?php bloginfo('template_directory'); ?>/content/clients-logos/160x100-3.png"  alt="">
                                    <img src="<?php bloginfo('template_directory'); ?>/content/clients-logos/160x100-4.png"  alt="">
                                </li>
                                <li>
                                	<img src="<?php bloginfo('template_directory'); ?>/content/clients-logos/160x100-5.png"  alt="">
                                    <img src="<?php bloginfo('template_directory'); ?>/content/clients-logos/160x100-6.png"  alt="">
                                </li>
                                <li>
                                	<img src="<?php bloginfo('template_directory'); ?>/content/clients-logos/160x100-7.png"  alt="">
                                    <img src="<?php bloginfo('template_directory'); ?>/content/clients-logos/160x100-8.png"  alt="">
                                </li>
                                <li>
                                	<img src="<?php bloginfo('template_directory'); ?>/content/clients-logos/160x100-9.png"  alt="">
                                    <img src="<?php bloginfo('template_directory'); ?>/content/clients-logos/160x100-10.png"  alt="">
                                </li>
                            </ul>
                            
                        </div>
                        
                        <div id="clients-logos-slider-controls">
                        
                        	<span id="clients-logos-slider-prev"></span>
                            <span id="clients-logos-slider-next"></span>
                        
                        </div>
                    
                    </div>
                    <div class="span6">

						<div class="testimonial">
                        	
                            <img src="<?php bloginfo('template_directory'); ?>/content/testimonials/90x90-1.jpg"  alt="">
                            
                            <blockquote>
                            	
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus sem et diam auctor 
                                pharetra. Etiam accumsan urna id erat pretium, a feugiat diam egestas. Nunc augue turpis, 
                                vehicula a dignissim sit amet, sagittis quis urna.</p>
                                
                            </blockquote>
                            
                            <h3>
                            	Jane Smith
                                <small><span>Manager / </span> The People Love</small>
                            </h3>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <div class="blog-post-strip" style="margin-bottom:-50px;">
            	
                <div class="item">
                	
                    <div class="post format-standard has-post-thumbnail hentry">                                        	
								                            
                        <a href="blog-post.html"  class="post-thumbnail">
                            <img src="<?php bloginfo('template_directory'); ?>/content/blog/385x385-1.jpg"  alt="" >	
                        </a>
                            
						<div class="post-overlay">		
					
                            <div class="post-header">															
                                
                                <span class="posted-on">July 21, 2015</span>
                                
                                <h3 class="post-title">
									<a rel="bookmark" href="blog-post.html" >The Journey Log</a>
								</h3>
                                
                                <span class="byline">by John Doe</span>
								
							</div>
							<div class="post-content"> 
								
								<p>
                                	<a class="more-link" href="blog-post.html" >Read More</a>
                                </p>
							
							</div>
                            
                        </div>    
                        
					</div>
                    
                </div>
                
                <div class="item">
                	
                    <div class="post format-standard has-post-thumbnail hentry">                                        	
								                            
                        <a href="blog-post.html"  class="post-thumbnail">
                            <img src="<?php bloginfo('template_directory'); ?>/content/blog/385x385-2.jpg"  alt="" >	
                        </a>
                            
						<div class="post-overlay">		
					
                            <div class="post-header">															
                                
                                <span class="posted-on">July 20, 2015</span>
                                
                                <h3 class="post-title">
									<a rel="bookmark" href="blog-post.html" >The Journey Log</a>
								</h3>
                                
                                <span class="byline">by John Doe</span>
								
							</div>
							<div class="post-content"> 
								
								<p>
                                	<a class="more-link" href="blog-post.html" >Read More</a>
                                </p>
							
							</div>
                            
                        </div>    
                        
					</div>
                    
                </div>
                
                <div class="item">
                	
                    <div class="post format-standard has-post-thumbnail hentry">                                        	
								                            
                        <a href="blog-post.html"  class="post-thumbnail">
                            <img src="<?php bloginfo('template_directory'); ?>/content/blog/385x385-3.jpg"  alt="" >	
                        </a>
                            
						<div class="post-overlay">		
					
                            <div class="post-header">															
                                
                                <span class="posted-on">July 19, 2015</span>
                                
                                <h3 class="post-title">
									<a rel="bookmark" href="blog-post.html" >The Journey Log</a>
								</h3>
                                
                                <span class="byline">by John Doe</span>
								
							</div>
							<div class="post-content"> 
								
								<p>
                                	<a class="more-link" href="blog-post.html" >Read More</a>
                                </p>
							
							</div>
                            
                        </div>    
                        
					</div>
                    
                </div>
                
                <div class="item">
                	
                    <div class="post format-standard has-post-thumbnail hentry">                                        	
								                            
                        <a href="blog-post.html"  class="post-thumbnail">
                            <img src="<?php bloginfo('template_directory'); ?>/content/blog/385x385-4.jpg"  alt="" >	
                        </a>
                            
						<div class="post-overlay">		
					
                            <div class="post-header">															
                                
                                <span class="posted-on">July 18, 2015</span>
                                
                                <h3 class="post-title">
									<a rel="bookmark" href="blog-post.html" >The Journey Log</a>
								</h3>
                                
                                <span class="byline">by John Doe</span>
								
							</div>
							<div class="post-content"> 
								
								<p>
                                	<a class="more-link" href="blog-post.html" >Read More</a>
                                </p>
							
							</div>
                            
                        </div>    
                        
					</div>
                    
                </div>
                
                <div class="item">
                	
                    <div class="post format-standard has-post-thumbnail hentry">                                        	
								                            
                        <a href="blog-post.html"  class="post-thumbnail">
                            <img src="<?php bloginfo('template_directory'); ?>/content/blog/385x385-5.jpg"  alt="" >	
                        </a>
                            
						<div class="post-overlay">		
					
                            <div class="post-header">															
                                
                                <span class="posted-on">July 17, 2015</span>
                                
                                <h3 class="post-title">
									<a rel="bookmark" href="blog-post.html" >The Journey Log</a>
								</h3>
                                
                                <span class="byline">by John Doe</span>
								
							</div>
							<div class="post-content"> 
								
								<p>
                                	<a class="more-link" href="blog-post.html" >Read More</a>
                                </p>
							
							</div>
                            
                        </div>    
                        
					</div>
                    
                </div>
                
            </div>
            
		

		</div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            





<?php get_footer(); ?>

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        