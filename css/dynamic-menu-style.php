.headerlogo,
.tm-header-icon, 
.tm-header-text-area,
.tm-header-icons .thememount-fbar-btn{
    height: <?php echo esc_html($header_height); ?>px;
    line-height: <?php echo esc_html($header_height); ?>px !important;
}


/**
* Responsive Menu
* ----------------------------------------------------------------------------
*/
@media (max-width: <?php echo esc_html($breakpoint); ?>px){

	.header-classic-vertical .thememount-slider-wrapper .rev_slider li.tp-revslider-slidesli {
		left: initial !important;
	}

	.tm-header-icon.tm-header-wc-cart-link{
    	display: none;
    }    
    #site-header-menu #site-navigation .menu-toggle,
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap .mega-menu-toggle {
    	top: <?php echo esc_html(ceil($header_height/2)-20); ?>px;
        display: block;
        position: absolute; 
        left: 0;       
        width: 40px;       
        background: none;
        z-index: 1;
        outline: none;
        padding: 0;
    }    

    #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-right{
        float: none;
    }    
    #site-header-menu #site-navigation .menu-toggle .tm-fixology-icon-bars,
    .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1 {
        display: inline-block;
        width: 4rem;
        height: 1px;
        background: #ecf0f1;
        border-radius: 0.28571rem;
        transition: 0.3s;
        position: relative;
    }
	#site-header-menu #site-navigation .menu-toggle .tm-fixology-icon-bars:before,
    .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:before {
        top: 1rem;
    }
    #site-header-menu #site-navigation .menu-toggle .tm-fixology-icon-bars:after,
    .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:after {
        top: -1rem;
    }    
    #site-header-menu #site-navigation .menu-toggle .tm-fixology-icon-bars:before, 
    #site-header-menu #site-navigation .menu-toggle .tm-fixology-icon-bars:after,
    
    .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:before, 
    .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:after {
        display: inline-block;
        width: 4rem;
        height: 1px;
        background: #ecf0f1;
        border-radius: 0.28571rem;
        transition: 0.3s;
        position: absolute;
        left: 0;
        content: '';
        -webkit-transform-origin: 0.28571rem center;
        transform-origin: 0.28571rem center;
        margin: 0;
    }

    #site-header-menu #site-navigation.toggled-on .menu-toggle .tm-fixology-icon-bars,    	
    .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle.mega-menu-open .mega-toggle-block-1 {
        background: transparent;
    }    
    #site-header-menu #site-navigation.toggled-on .menu-toggle .tm-fixology-icon-bars:before,
    #site-header-menu #site-navigation.toggled-on .menu-toggle .tm-fixology-icon-bars:after,
    
    .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle.mega-menu-open .mega-toggle-block-1:before, 
    .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle.mega-menu-open .mega-toggle-block-1:after {
        -webkit-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        top: 0;
        width: 4rem;
    }    
    #site-header-menu #site-navigation.toggled-on .menu-toggle .tm-fixology-icon-bars:before,
    .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle.mega-menu-open .mega-toggle-block-1:before {
        -webkit-transform: rotate3d(0, 0, 1, 45deg);
        transform: rotate3d(0, 0, 1, 45deg);
    }
    #site-header-menu #site-navigation.toggled-on .menu-toggle .tm-fixology-icon-bars:after,
    .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle.mega-menu-open .mega-toggle-block-1:after {
        -webkit-transform: rotate3d(0, 0, 1, -45deg);
        transform: rotate3d(0, 0, 1, -45deg);
    }	
	
	/*** Header Section ***/
	.site-header-main.tm-wrap{
		margin: 0 30px;
		width: auto;
		display: block;
	}	
	.site-header-main.tm-wrap .tm-wrap-cell {
		display: block;		
	}	
    .tm-header-icon{
        padding-right: 0px;
        padding-left: 20px;
        position: relative;
    } 
    .site-title{
        width: inherit;
        margin: 0 auto;
    }   	
    /*** Navigation ***/
    .main-navigation {
    	clear: both;
    }    
   	.site-branding,
    #site-header-menu #site-navigation li.mega-menu-megamenu > ul.mega-sub-menu,
    #site-header-menu #site-navigation div.mega-menu-wrap,
	.menu-tm-main-menu-container,
    #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-flyout ul.mega-sub-menu,
	#site-header-menu {
		float: none;	
    }      
	
    /*** Responsive Menu ***/    
    .righticon{
        position: absolute;
        right: 0px;
        z-index: 33;
        top: 15px;
        display: block;
    }    
	.righticon i{
		font-size:20px;
		cursor:pointer;
        display:block;
        line-height: 0px;
	} 
    /*** Default menu box ***/ 
    .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal,
    #site-header-menu #site-navigation div.nav-menu > ul{
    	position: absolute;
        padding: 10px 20px; 
        left: 0px;	
        box-shadow: rgba(0, 0, 0, 0.12) 3px 3px 15px;
        border-top: 3px solid <?php echo esc_html($skincolor); ?>;	 
        background-color: #333;       
        z-index: 100;
        width: 100%;
        top: <?php echo esc_html($header_height); ?>px;  
    }  
    
    <?php if($headerbg_color=='custom' && !empty($headerbg_customcolor['rgba']) ) : ?>
       	#site-header-menu #site-navigation div.nav-menu > ul,
        #site-header-menu #site-navigation .mega-menu-wrap .mega-menu{
            background-color: <?php  echo esc_html($headerbg_customcolor['rgba']); ?>;
        } 
	<?php endif; ?>
      
    <?php if( !empty($dropmenu_background['color']) ): ?>
    	.tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal, 
        #site-header-menu #site-navigation div.nav-menu > ul{
        	background-color: <?php echo esc_html($dropmenu_background['color']); ?>;
        }    
    <?php endif; ?>      
   
   
    #site-header-menu #site-navigation div.nav-menu > ul,
    #site-header-menu #site-navigation div.nav-menu > ul ul {
        overflow: hidden;
        max-height: 0px;
    }    
    #site-header-menu #site-navigation div.nav-menu > ul ul ul{
    	max-height: none;
    }    
    #site-header-menu #site-navigation div.nav-menu > ul > li{
    	position: relative;
        text-align: left;
    }    
    #site-header-menu #site-navigation.toggled-on div.nav-menu > ul{       
        display: block;
        max-height: 10000px;       
    }
    #site-header-menu #site-navigation.toggled-on div.nav-menu > ul ul.open {
    	max-height: 10000px;
    }   
    #site-header-menu #site-navigation div.mega-menu-wrap{
    	  position: inherit;
    }   
    #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal, 
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-flyout ul.mega-sub-menu{
    	width: 100%;
    }   
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-toggle-on > a, 
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item:hover > a,
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-flyout ul.mega-sub-menu li.mega-menu-item a {
    	background: none !important;
    }
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu > ul.mega-sub-menu > li.mega-menu-item{
    	float: none;
    }
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu > ul.mega-sub-menu > li{
    	width: 100% !important;
        padding-bottom: 0px;
    }
    #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-flyout ul.mega-sub-menu{
    	padding-left:15px;        
    }
    #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-flyout ul.mega-sub-menu li.mega-menu-item ul.mega-sub-menu a {
    	padding-left: 0px;
    }
    #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal ul.mega-sub-menu a,
    #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li ul.mega-sub-menu,
    #site-header-menu #site-navigation div.nav-menu > ul ul{
    	  background-color: transparent !important;
    }
    #site-header-menu #site-navigation div.nav-menu > ul > li a,    
    #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li a{
        display: block;
        padding: 15px 0px;        
        text-decoration: none;
        line-height: 18px;
        height: auto;
        line-height: 18px !important;
    }     
    #site-header-menu #site-navigation div.nav-menu > ul ul a, 
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.mega-menu-item a {
        margin: 0;
        display: block;
        padding: 15px 15px 15px 0px;
    }
    #site-header-menu #site-navigation div.nav-menu > ul > li li a:before,
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item li.mega-menu-item a:before{
        font-family: "FontAwesome";
        font-style: normal;
        font-weight: normal;
        speak: none;
        display: inline-block;
        text-decoration: inherit;
        margin-right: .2em;
        text-align: center;
        opacity: .8;
        font-variant: normal;
        text-transform: none;
        font-size: 13px;
        content: "\f105";
        margin-right: 8px;
        display: none;
    }         
    .tm-mmmenu-override-yes .mega-sub-menu {
     	display: none !important;
    }
    .mega-sub-menu.open, 
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li .mega-sub-menu .mega-sub-menu {
    	display: block !important;
    }
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu > ul.mega-sub-menu > li  {
        padding: 0px;
        padding-left: 0px;
    }  
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item > h4.mega-block-title{
    	margin-top:30px;
    }
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item:first-child > h4.mega-block-title{
    	margin-top: 0px;
    }      
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item{
   		position: relative;
    }
    #site-header-menu #site-navigation div.nav-menu > ul > li a, 
    #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li a{
    	display: inline-block;
    } 
 	
    /*** Defaultmenu ***/
    .tm-mmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li > a:hover,   
    .tm-mmenu-active-color-skin .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a:hover  
    
    .tm-dmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul  ul > li > a:hover, 
    .tm-dmenu-active-color-skin #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li > a:hover{
    	color: <?php echo esc_html($skincolor); ?>;
    }    
    
    <?php if( $mainmenu_active_link_color=='custom' && !empty($mainmenu_active_link_custom_color) ){ ?>
     /* Main Menu Active Link Color --------------------------------*/        
    .tm-mmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li > a:hover,   
    .tm-mmenu-active-color-custom .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a:hover{
         color: <?php echo esc_html($mainmenu_active_link_custom_color); ?>;
     }
    <?php } ?> 
    

	<?php if( $dropmenu_active_link_color=='custom' && !empty($dropmenu_active_link_custom_color) ){ ?>      
    .tm-dmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul  ul > li > a:hover, 
    .tm-dmenu-active-color-custom #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li > a:hover{
        color: <?php echo esc_html($dropmenu_active_link_custom_color); ?>;
    }    
    <?php } ?>    
 
    
    <?php if( !empty($dropdownmenufont['color']) ): ?>
    #site-header-menu #site-navigation div.nav-menu > ul > li > a,     
    .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal > li.mega-menu-item > a,    
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item > h4.mega-block-title,
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget,
    .righticon i  {
    	color: rgba( <?php echo thememount_hex2rgb($dropdownmenufont['color']); ?> , 1);
    } 
    #site-header-menu #site-navigation div.nav-menu > ul li,
  	.tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li {
    	border-bottom: 1px solid rgba( <?php echo thememount_hex2rgb($dropdownmenufont['color']); ?> , 0.15);
    }  
    #site-header-menu #site-navigation div.nav-menu > ul li li:last-child,
  	.tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li:last-child{
    	border-bottom: none;
    }     
    <?php endif; ?>
    
    

	/* Dynamic main menu color applying to responsive menu link text */           
    .menu-toggle i,     
    .tm-header-icons a{
		color: rgba( <?php echo thememount_hex2rgb($mainMenuFontColor); ?> , 1) ;
	}            
    .menu-toggle span,
    .menu-toggle span:after,
    .menu-toggle span:before,
    
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap .mega-menu-toggle span,
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap .mega-menu-toggle span:after,
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap .mega-menu-toggle span:before{
    	background-color: rgba( <?php echo thememount_hex2rgb($mainMenuFontColor); ?> , 1) ;
    }	
    #site-header-menu #site-navigation div.nav-menu > ul{
        padding-right: 15px;
        padding-left: 15px;
    }    
    #site-header-menu #site-navigation div.nav-menu > ul ul{
    	list-style: none;
    }      
    .tm-header-icons{
        position: absolute;
        top: 0;
        float: none;
        right: 0px;
        margin-right: 0px;
    }   
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item ul.mega-sub-menu.open, 
    #site-header-menu #site-navigation div.nav-menu > ul > li ul{       
        display: block !important;
        height: auto !important;  
    }    
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item ul.mega-sub-menu{
        opacity: 1;   
    }    
	.tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-flyout ul.mega-sub-menu ul.mega-sub-menu,
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item ul.mega-sub-menu, 
    #site-header-menu #site-navigation div.nav-menu > ul > li ul{
        background-image: none !important;      
    }   
    #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item ul.mega-sub-menu{
    	margin-top: 0;
    }      
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item ul.mega-sub-menu, 
    #site-header-menu #site-navigation div.nav-menu > ul > li ul,
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a.mega-menu-link{
    	background: none;
        background-image: none;
    }    
    .tm-header-overlay .tm-titlebar-wrapper .tm-titlebar-inner-wrapper{
    	padding-top: 0px;
    }     
    
    /*** Responsive icon color( If custom header background color ) ***/    
    
    /* White color */       
    .site-header.tm-bgcolor-skincolor .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1,
    .site-header.tm-bgcolor-skincolor .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:before, 
    .site-header.tm-bgcolor-skincolor .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:after,  
     
    .site-header.tm-bgcolor-darkgrey .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1,
    .site-header.tm-bgcolor-darkgrey .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:before, 
    .site-header.tm-bgcolor-darkgrey .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:after,  
    
	.tm-responsive-icon-white.tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1,
    .tm-responsive-icon-white.tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:before, 
    .tm-responsive-icon-white.tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:after,

    .tm-responsive-icon-white #site-header-menu #site-navigation .menu-toggle .tm-fixology-icon-bars,
    .tm-responsive-icon-white #site-header-menu #site-navigation .menu-toggle .tm-fixology-icon-bars:before, 
    .tm-responsive-icon-white #site-header-menu #site-navigation .menu-toggle .tm-fixology-icon-bars:after {
         background-color: #fff;
    }    
    .site-header.tm-bgcolor-skincolor .menu-toggle i, 
    .site-header.tm-bgcolor-skincolor .tm-header-icons a,      
    
    .site-header.tm-bgcolor-darkgrey .menu-toggle i, 
    .site-header.tm-bgcolor-darkgrey .tm-header-icons a,  
    
    .tm-responsive-icon-white .menu-toggle i, 
    .tm-responsive-icon-white .tm-header-icons a {
    	color: #fff;
    }      
      
     /* Dark color */  
    .site-header.tm-bgcolor-white #site-header-menu #site-navigation .menu-toggle .tm-fixology-icon-bars,
    .site-header.tm-bgcolor-white #site-header-menu #site-navigation .menu-toggle .tm-fixology-icon-bars:before,
    .site-header.tm-bgcolor-white #site-header-menu #site-navigation .menu-toggle .tm-fixology-icon-bars:after,     
      
    .site-header.tm-bgcolor-grey.tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1,
    .site-header.tm-bgcolor-grey.tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:before, 
    .site-header.tm-bgcolor-grey.tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:after,         
      
    .site-header.tm-bgcolor-white.tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1,
    .site-header.tm-bgcolor-white.tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:before, 
    .site-header.tm-bgcolor-white.tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:after,        
    
	.tm-responsive-icon-dark.tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1,
    .tm-responsive-icon-dark.tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:before, 
    .tm-responsive-icon-dark.tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle .mega-toggle-block-1:after,

    .tm-responsive-icon-dark #site-header-menu #site-navigation .menu-toggle .tm-fixology-icon-bars,
    .tm-responsive-icon-dark #site-header-menu #site-navigation .menu-toggle .tm-fixology-icon-bars:before, 
    .tm-responsive-icon-dark #site-header-menu #site-navigation .menu-toggle .tm-fixology-icon-bars:after{
         background-color: #262626;
    }      
    
    .site-header.tm-bgcolor-grey .menu-toggle i, 
    .site-header.tm-bgcolor-grey .tm-header-icons a,  
    
    .site-header.tm-bgcolor-white .menu-toggle i, 
    .site-header.tm-bgcolor-white .tm-header-icons a,    
    
    .tm-responsive-icon-dark .menu-toggle i, 
    .tm-responsive-icon-dark .tm-header-icons a {
    	color: #262626;
    }      
    
    .tm-responsive-icon-white #site-header-menu #site-navigation.toggled-on .menu-toggle .tm-fixology-icon-bars,
    .tm-responsive-icon-dark #site-header-menu #site-navigation.toggled-on .menu-toggle .tm-fixology-icon-bars,

    .site-header.tm-bgcolor-white #site-header-menu #site-navigation.toggled-on .menu-toggle .tm-fixology-icon-bars,
    .site-header.tm-bgcolor-darkgrey #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle.mega-menu-open .mega-toggle-block-1,
    .site-header.tm-bgcolor-skincolor #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle.mega-menu-open .mega-toggle-block-1,
    
    .site-header.tm-bgcolor-white.tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle.mega-menu-open .mega-toggle-block-1,
    .site-header.tm-bgcolor-grey.tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle.mega-menu-open .mega-toggle-block-1,
    
    .tm-responsive-icon-dark.tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle.mega-menu-open .mega-toggle-block-1,
    .tm-responsive-icon-white.tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu-toggle.mega-menu-open .mega-toggle-block-1{
    	background-color: transparent;
    } 
		
    
    /* Display None */
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a:after,  
	.tm-header-text-area,
    #site-header-menu #site-navigation div.nav-menu > ul{
    	display: none;
    }
    
    /* tm-header-style-infostack */     
    .tm-header-style-infostack .tm-header-icon.tm-header-btn-w,
    .tm-header-style-infostack .tm-header-widgets-wrapper{
    	display: none;    
    }    
    .tm-header-style-infostack .tm-stickable-header-w{
    	height: auto !important;
    }
    .tm-header-style-infostack.tm-header-overlay .tm-stickable-header-w{        
        top: 0;
    }

	/* classic-vertical header */	
	.tm-header-style-classic-vertical {
		background-color: inherit;
		position: initial;
		width: auto;
		height: auto;
	}
    body.header-classic-vertical {
		padding-left: 0px;
	} 
	.tm-header-style-classic-vertical #site-header-menu #site-navigation div.nav-menu > ul > li > a {
		height: auto;
		line-height: inherit !important;
	}	
	.tm-header-style-classic-vertical .tm-header-block.ps-container {
		overflow: visible !important;
	}
	.tm-header-style-classic-vertical .tm-stickable-header-w {
		display: block;
	}
	
	/* sticky footer bottom margin */	
	body .site-content-wrapper {
		margin-bottom: 0px !important;
	}
	
	/* searchbox */
	.tm-search-overlay {
		margin-top: 15px;
	}
		
}



@media (min-width: <?php echo esc_html($breakpoint); ?>px) {	
    .thememount-topbar-yes .tm-header-overlay .tm-stickable-header-w{
        top: 80px;
    }
    .tm-header-overlay .top-contact li {  
        padding-right: 30px;
    }
    .tm-header-overlay .top-contact li:after { 
        content: "";
        height: 22px;
        width: 1px;        
        display: block;
        position: absolute;
        right: 16px;
        top: 10px;
        background-color: rgba( 255,255,255 , 0.22);
    }
    .tm-header-overlay .tm-textcolor-dark .top-contact li:after { 
        background-color: rgba( 0,0,0 , 0.22);
    }
    .tm-header-overlay .top-contact li:last-child:after{
        display: none;
    }
	.tm-header-overlay .tm-header-block .site-header.tm-stickable-header.is_stuck {
		margin-top: 0px;
	}
	.tm-header-overlay .tm-header-block > .thememount-topbar-wrapper .tm-topbar-content {
		border-bottom: 1px solid #7b7e80;		
	}
	.tm-header-overlay .tm-header-block > .thememount-topbar-wrapper {
		position: absolute;
		z-index: 21;
		width: 100%;
		box-shadow: none;
		-khtml-box-shadow: none;
		-webkit-box-shadow: none;
		-moz-box-shadow: none;
		-ms-box-shadow: none;
		-o-box-shadow: none;
        height: 48px;
        top: 32px;	
	}	
	.site-header-main.container-full {
		padding: 0 50px;
	}
	.tm-stickable-header.is_stuck{    	 
        box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.06);
    }
    .tm-header-icon,
    .tm-header-icons, 
    .kwayy-fbar-btn, 
    .tm-header-icons 
    .thememount-fbar-btn a i, 
    .headerlogo, 
    #site-header-menu #site-navigation div.nav-menu > ul, 
    #site-header-menu #site-navigation div.nav-menu > ul > li, 
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li, #site-header-menu #site-navigation div.nav-menu > ul > li > a, .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a    {
        transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -webkit-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
    }
    .tm-header-icon{       
        position: relative;
    }
    #site-header-menu #site-navigation .nav-menu,
	.tm-header-text-area,    
    #site-header-menu, 
    .tm-header-icons, 
    .tm-header-icon,
    #site-header-menu #site-navigation .mega-menu-wrap, 
    .menu-tm-main-menu-container{
    	float: right;
    }    
	.navbar{
        vertical-align: top;
    }
    .menu-toggle {
        display: none;
        z-index: 10;	
    }
    .menu-toggle i{
        color:#fff;
        font-size:28px;
    }
    .toggled-on li, 
    .toggled-on .children {
        display: block;
    }		
    #site-header-menu #site-navigation div.mega-menu-wrap{
        clear: none;
        position: inherit;
    }
    #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal{
        position: static !important;       
    }
  
    #site-header-menu #site-navigation .nav-menu-wrapper > ul {
        margin: 0;
        padding: 0; 
    }
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li > a{
    	background: none;
    } 
	#site-header-menu #site-navigation div.nav-menu > ul{
    	margin: 0px;
    }    
    #site-header-menu #site-navigation div.nav-menu > ul > li,
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item{
        height: <?php echo esc_html($header_height); ?>px;
        line-height: <?php echo esc_html($header_height); ?>px !important;
    }  
    #site-header-menu #site-navigation div.nav-menu > ul > li,
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item {
        margin: 0;
        display: inline-block;
		border-bottom: 3px solid transparent;
    }  
    #site-header-menu #site-navigation div.nav-menu > ul > li{
        position: relative;
    }   
    #site-header-menu #site-navigation div.nav-menu > ul > li > a,
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a{
    	display: block;	
        margin: 0px 16px 0px 16px;
        padding:  0px; 
        text-decoration: none;
        position: relative;
        z-index: 1;       
        height: <?php echo esc_html($header_height); ?>px;
        line-height: <?php echo esc_html($header_height); ?>px !important;
    }
    .tm-main-menu-more-than-six #site-header-menu #site-navigation div.nav-menu > ul > li > a,
    .tm-main-menu-more-than-six .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a{
        margin: 0px 12px 0px 12px;
    }
    .tm-main-menu-more-than-six #site-header-menu #site-navigation div.nav-menu > ul > li:last-child > a,
    .tm-main-menu-more-than-six .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item:last-child > a{
        margin: 0px 16px 0px 10px;
    }

    #site-header-menu #site-navigation div.nav-menu > ul > li.page_item_has_children > a:after,
    #site-header-menu #site-navigation div.nav-menu > ul > li.menu-item-has-children > a:after,
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-menu-item-has-children > a:after {
        display: block;
		bottom: <?php echo ceil($header_height/2)-15; ?>px;
		margin-bottom: 3px;
        content: '';
        width: 0;
        height: 0;
        border-style: solid;
		border-width: 0 7px 3px 7px;;
        border-color: transparent;
        border-bottom: 3px solid <?php echo esc_html($skincolor); ?>;   
        position: absolute;
        left: 50%;
        bottom: 0;
        opacity: 0;
        visibility: hidden;
        transition: all .6s ease-in-out;
        -moz-transition: all .6s ease-in-out;
        -webkit-transition: all .6s ease-in-out;
        -o-transition: all .6s ease-in-out;
	}
    #site-header-menu #site-navigation div.nav-menu > ul > li.menu-item-has-children > a:after{
        transition: all .1s ease-in-out;
        -moz-transition: all .1s ease-in-out;
        -webkit-transition: all .1s ease-in-out;
        -o-transition: all .1s ease-in-out;
    }
    #site-header-menu #site-navigation div.nav-menu > ul > li.page_item_has_children:hover > a:after,
    #site-header-menu #site-navigation div.nav-menu > ul > li.menu-item-has-children:hover > a:after,    
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-menu-item-has-children:hover > a:after {
        opacity: 1;
        visibility: visible;        
    }   	
	.is_stuck #site-header-menu #site-navigation div.nav-menu > ul > li.menu-item-has-children > a:after,
    .is_stuck.tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-menu-item-has-children > a:after {
		bottom: <?php echo ceil($header_height_sticky/2)-15; ?>px;
        bottom: 0;
	}        

    /*** Defaultmenu ***/      
    .tm-dmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li li:hover > a,
    .tm-dmenu-active-color-skin .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal ul.mega-sub-menu li:hover > a,    
    .tm-dmenu-active-color-skin #site-header-menu #site-navigation div.nav-menu > ul > li li:hover > a,
    .tm-mmenu-active-color-skin .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item li:hover > a{
        color: <?php echo esc_html($skincolor); ?> ;
    }
    
	<?php if( $mainmenu_active_link_color=='custom' && !empty($mainmenu_active_link_custom_color) ){ ?>
        .tm-mmenu-active-color-custom .tm-header-icons .thememount-fbar-btn a:hover,
    	.tm-mmenu-active-color-custom .site-header .social-icons li > a:hover, 
        .tm-mmenu-active-color-custom .tm-header-icons .tm-header-search-link a:hover, 
        .tm-mmenu-active-color-custom .tm-header-icons .tm-header-wc-cart-link a:hover,        
        .tm-mmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li:hover > a,
    	.tm-mmenu-active-color-custom .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item:hover > a{
        	color: <?php echo esc_html($mainmenu_active_link_custom_color); ?> ;
        }        
        .tm-mmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li > a:before, 
        .tm-mmenu-active-color-custom .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a:before{
            background-color: <?php echo esc_html($mainmenu_active_link_custom_color); ?> ;
        }    
        
    <?php } ?>
    
	<?php if( $dropmenu_active_link_color=='custom' && !empty($dropmenu_active_link_custom_color) ){ ?>        
    /* Dropdown Menu Active Link Color -------------------------------- */        
    .tm-dmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li li:hover > a,
    
    .tm-dmenu-active-color-custom #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.mega-menu-item:hover > a, 
    .tm-dmenu-active-color-custom #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li:hover > a,
    .tm-dmenu-active-color-custom .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal ul.mega-sub-menu li:hover > a, 				
    .tm-mmenu-active-color-custom .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item li:hover > a{
        color: <?php echo esc_html($dropmenu_active_link_custom_color); ?>;
    }
    <?php } ?>        
    
    .is_stuck .tm-header-icons .tm-header-wc-cart-link a .thememount-cart-qty,
    .is_stuck .tm-header-icons .tm-header-wc-cart-link a, 

    .is_stuck .tm-header-icons .thememount-fbar-btn a,
	.is_stuck .tm-header-icons .tm-header-search-link a,    
    .is_stuck #site-header-menu #site-navigation div.nav-menu > ul > li > a,
    .is_stuck.tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a,
    
    #site-header-menu.is_stuck #site-navigation div.nav-menu > ul > li > a,
    .tm-mmmenu-override-yes #site-header-menu.is_stuck #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a{
    	color: <?php echo esc_html($stickymainmenufontcolor); ?>;
    }
    .site-header .social-icons li > a,
    .tm-header-icons .tm-header-search-link a,    
    .tm-header-icons .tm-header-wc-cart-link a,
    .tm-header-icons .thememount-fbar-btn a{
    	color: rgba( <?php echo thememount_hex2rgb($mainMenuFontColor); ?> , 1) ;
    }
    .tm-header-icons .tm-header-wc-cart-link a{
        border-color: rgba( <?php echo thememount_hex2rgb($mainMenuFontColor); ?> , 1) ;
    }
    .is_stuck .tm-header-icons .tm-header-wc-cart-link a{
        border-color: rgba( <?php echo thememount_hex2rgb($stickymainmenufontcolor); ?> , 1) ;
    }
    .site-header .social-icons li > a:hover,
	.tm-header-icons .tm-header-search-link a:hover,    
    .tm-header-icons .tm-header-wc-cart-link a:hover{
    	color: <?php echo esc_html($skincolor); ?> ;
    }
	.tm-header-icons .tm-header-wc-cart-link a:hover span.number-cart{
		background-color: rgba( <?php echo thememount_hex2rgb($mainMenuFontColor); ?> , 1) ;
		color: #232323;
	}
    .tm-header-style-classic .site-header.tm-bgcolor-white .tm-header-icons .tm-header-wc-cart-link a:hover span.number-cart{
    	color: #fff;
    }    
	.is_stuck  .tm-header-icons .tm-header-wc-cart-link a:hover span.number-cart{
		background-color: rgba( <?php echo thememount_hex2rgb($stickymainmenufontcolor); ?> , 1) ;		
	}   
    
    /*** Sub Navigation Section ***/
    header#masthead #site-header-menu #site-navigation div.nav-menu > ul li.last ul.sub-menu,
    header#masthead #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal li.mega-menu-flyout.last ul.mega-sub-menu,
    header#masthead #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal li.mega-menu-flyout.mega-last ul.mega-sub-menu{
        left: auto;
        right: 0px !important;
    }    
    header#masthead #site-header-menu #site-navigation div.nav-menu > ul li.last ul.sub-menu ul.sub-menu, 
    header#masthead #site-header-menu #site-navigation div.nav-menu > ul li.lastsecond ul.sub-menu ul.sub-menu, 
    
    header#masthead #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal li.mega-menu-flyout.lastsecond ul.mega-sub-menu ul.mega-sub-menu,
    header#masthead #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal li.mega-menu-flyout.last ul.mega-sub-menu ul.mega-sub-menu,
    header#masthead #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal li.mega-menu-flyout.mega-last ul.mega-sub-menu ul.mega-sub-menu{
    	left: -100%;
    }            
    #site-header-menu #site-navigation div.nav-menu > ul ul,
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-flyout ul.mega-sub-menu {
        width: 290px;
        padding: 0px;        
    }        
    #site-header-menu #site-navigation div.nav-menu > ul ul li > a,    
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.mega-menu-item > a,
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-megamenu .mega-sub-menu a {
        margin: 0;
        display: block;
        padding: 16px 10px 16px 15px;
        position: relative;         
    }
    .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item > h4.mega-block-title{
        padding: 16px 0px 16px 15px;
		background-color: #f5f5f5;
    }    
	#site-header-menu #site-navigation div.nav-menu > ul ul li:hover > a, 
	.tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.mega-menu-item:hover > a,
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-megamenu .mega-sub-menu a:hover {
        padding-left: 22px;
    }
    #site-header-menu #site-navigation div.nav-menu > ul ul li > a,    
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li > a{
        -webkit-transition: .3s linear;
        transition: .3s linear;
    }
    .tm-dmenu-sep-grey #site-header-menu #site-navigation div.nav-menu > ul ul li:hover > a,    
    .tm-dmenu-sep-grey .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li:hover > a{
        background-color: rgba(255, 255, 255, 0.74);
    } 
    .tm-dmenu-sep-white #site-header-menu #site-navigation div.nav-menu > ul ul li:hover > a,    
    .tm-dmenu-sep-white .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li:hover > a{
        background-color: rgba(0, 0, 0, 0.74);
    }
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu > ul.mega-sub-menu > li.mega-menu-item{
        padding: 0px;
    } 
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu > ul.mega-sub-menu > li.mega-menu-item:last-child{
    	border-right: none;
    }          
    #site-header-menu #site-navigation div.nav-menu > ul li:hover > ul {
        opacity: 1;
        display: block;
        visibility: visible;
        height: auto;
    } 
	#site-header-menu #site-navigation div.nav-menu > ul li > ul ul  {
        border-left: 0;
        left: 100%;
        top: 0;
        border-top: 0;
    }
    #site-header-menu #site-navigation ul ul li {
    	position: relative;
    }    
    #site-header-menu #site-navigation div.nav-menu > ul ul {
    	text-align: left;
        position: absolute;
        visibility: hidden;
        display: block;
        opacity: 0; 
        line-height: 14px;        
        padding-left: 0;
        margin: 0;
        list-style: none;
        left: 0;        
        border-radius: 0;
        -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
        box-shadow: 0 6px 12px rgba(0,0,0,.175);
        background-clip: padding-box;
        transition: all .2s ease;
        z-index: 99;
    }

    /*** Sep Section ***/
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal>li.mega-menu-megamenu>ul.mega-sub-menu li.mega-menu-item:after {
        content: ' ';
        display: block;
        width: 30px;
        height: 1000px;
        right: 0px;
        top: 0;
        position: absolute;
        border-right: 1px solid transparent;
    } 
    .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item > h4.mega-block-title,
    #site-header-menu #site-navigation div.nav-menu ul ul > li,
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li:not(.mega-menu-megamenu) ul.mega-sub-menu > li,
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-megamenu ul.mega-sub-menu .mega-menu-item li {
    	border-bottom: 1px solid transparent;
    }

    .tm-dmenu-sep-grey .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal>li.mega-menu-megamenu>ul.mega-sub-menu li.mega-menu-item:after {
        border-right-color: rgba(0,0,0,0.10);
    } 
    .tm-dmenu-sep-grey .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item > h4.mega-block-title,
    .tm-dmenu-sep-grey #site-header-menu #site-navigation div.nav-menu ul ul > li,
    .tm-dmenu-sep-grey .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li:not(.mega-menu-megamenu) ul.mega-sub-menu > li,
    .tm-dmenu-sep-grey .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-megamenu ul.mega-sub-menu .mega-menu-item li {
        border-bottom-color: rgba(0, 0, 0, 0.10);
    }

    .tm-dmenu-sep-white .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal>li.mega-menu-megamenu>ul.mega-sub-menu li.mega-menu-item:after {
        border-right-color: rgba(255,255,255,0.10);
    } 
    .tm-dmenu-sep-white .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item > h4.mega-block-title,
    .tm-dmenu-sep-white #site-header-menu #site-navigation div.nav-menu ul ul > li,
    .tm-dmenu-sep-white .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li:not(.mega-menu-megamenu) ul.mega-sub-menu > li,
    .tm-dmenu-sep-white .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-megamenu ul.mega-sub-menu .mega-menu-item li {
        border-bottom-color: rgba(255, 255, 255, 0.10);
    }
    .tm-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu li.mega-menu-item a.mega-menu-link{
        background: none;
    }

    /*** Sticky Header Height ***/ 
    header .is_stuck #site-header-menu #site-navigation,    
	.is_stuck .tm-header-text-area,
    .is_stuck .headerlogo,
    .is_stuck .thememount-fbar-btn,  
    .is_stuck .tm-header-icon,
    .is_stuck #site-header-menu #site-navigation div.nav-menu > ul > li,
    .is_stuck.tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li,    
    .is_stuck #site-header-menu #site-navigation div.nav-menu > ul > li > a, 
    .is_stuck.tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a{
        height: <?php echo esc_html($header_height_sticky); ?>px ;
        line-height: <?php echo esc_html($header_height_sticky); ?>px !important;
    }
    
    /*** Sub Navigation menu ***/
    #site-header-menu #site-navigation div.nav-menu > ul ul,
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li > ul.mega-sub-menu{
        top: auto;
        border-top: 3px solid <?php echo esc_html($skincolor); ?>;
        margin-top: -3px;
		-webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
		box-shadow: 0 6px 12px rgba(0,0,0,.175);
    }  
	.tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu > ul.mega-sub-menu{
		padding: 0px;        
	}    
    .tm-mmmenu-override-yes  #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu > ul.mega-sub-menu {
        overflow: hidden;
    }
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu > ul.mega-sub-menu > li.mega-menu-item:last-child:after {
    	border-right: none;
    } 
   
   
    /*** Sticky Sub Navigation menu ***/
    .is_stuck  #site-header-menu #site-navigation div.nav-menu > ul > li > ul, 
    .is_stuck.tm-mmmenu-override-yes  #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li > ul.mega-sub-menu{
        top: <?php echo esc_html($header_height_sticky); ?>px;
    } 
	
    /*** Header height ***/
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap .mega-menu-toggle + label{
        top: <?php echo esc_html(ceil($header_height/2)); ?>px;
    }  
    .site-header-main.container-fullwide{
    	padding-left: 30px;
        padding-right: 0px;
    }    
    
	/*** Header Icon border ***/
	.tm-header-icons{	
		position: relative;
        height: <?php echo esc_html($header_height); ?>px;
    }       
	.is_stuck .tm-header-icons{	
		border-left-color: rgba( <?php echo thememount_hex2rgb($stickymainmenufontcolor); ?> , 0.15) ;
        height: <?php echo esc_html($header_height_sticky); ?>px;
    }    
	header .site-header:after{
    	    content: "";
            height: 1px;
            position: absolute;
            bottom: 0px;
            left: 0px;
            width: 100%;           
			
	}
	header .is_stuck .site-header:after{
			border-bottom-color: rgba( <?php echo thememount_hex2rgb($stickymainmenufontcolor); ?> , 0.15) ;
	}
	
	/*** Header Text Area ***/
    .tm-header-style-classic .container-fullwide #site-header-menu{
        margin-right:20px;
    }
	.tm-header-text-area .tm-vc_btn3.tm-vc_btn3-shape-rounded {
		border-radius: 3px;
	}
	.tm-header-text-area .tm-vc_btn3.tm-vc_btn3-style-outline{
		border-width: 1px;
	}
	.tm-header-text-area .tm-vc_btn3.tm-vc_btn3-size-sm {
        padding: 8px 16px;
        font-size: 13px;
	}	
	.tm-sticky-bgcolor-white.is_stuck .tm-vc_btn3.tm-vc_btn3-color-white.tm-vc_btn3-style-outline {
		border-color: #262626;
		color: #262626;		
	}	
	
	/*** Mega menu widget calendar ***/
	#site-header-menu #site-navigation .mega-menu-item-type-widget.widget_calendar caption {
		padding: 0px;
	}
	#site-header-menu #site-navigation .mega-menu-item-type-widget.widget_calendar .calendar_wrap {
		padding-top:10px;
	}

    /*** Overlay Header ***/    
    .tm-header-overlay .tm-stickable-header-w{
    	background-color: transparent;
    }   
    .tm-header-overlay .site-header-menu.tm-bgcolor-darkgrey,   
    .tm-header-overlay .site-header.tm-bgcolor-darkgrey{
    	background-color: rgba(0, 0, 0, 0.40);
    }    
    .tm-header-overlay .site-header-menu.tm-bgcolor-grey, 
    .tm-header-overlay .site-header.tm-bgcolor-grey{
    	background-color: rgba(235, 235, 235, 0.38);
    }   
    .tm-header-overlay .site-header-menu.tm-bgcolor-white,
    .tm-header-overlay .site-header.tm-bgcolor-white{
    	background-color: rgba(255, 255, 255, 0.38);
    }   
    .tm-header-overlay .site-header-menu.tm-bgcolor-skincolor,
    .tm-header-overlay .site-header.tm-bgcolor-skincolor{
    	background-color: rgba( <?php echo thememount_hex2rgb($skincolor); ?> , 0.30);
    }    
    .tm-header-overlay .site-header-menu.tm-sticky-bgcolor-darkgrey.is_stuck{
    	background-color: #151515;
    }    
    .tm-header-overlay .site-header-menu.tm-sticky-bgcolor-grey.is_stuck{
    	background-color: #f5f5f5;
    }
    .tm-header-overlay .site-header-menu.tm-sticky-bgcolor-white.is_stuck{
    	background-color: #fff;
    }
    .tm-header-overlay .site-header-menu.tm-sticky-bgcolor-skincolor.is_stuck{
    	background-color: rgba( <?php echo thememount_hex2rgb($skincolor); ?> , 1);
    }          

    .tm-header-overlay .thememount-topbar-wrapper .thememount-fbar-btn a{
        background-color: transparent;
    }
    .tm-header-overlay .tm-header-block > .thememount-topbar-wrapper .tm-topbar-content {
        border-bottom: 1px solid rgba( <?php echo thememount_hex2rgb($mainMenuFontColor); ?> , 0.20) ;
    }    

    /*** Thememount Center Menu ***/ 	
	.tm-header-menu-position-center #site-header-menu{
		float: none;
	}
	.tm-header-menu-position-center #site-header-menu #site-navigation{
		text-align: center;
		width: 100%;
	}    
    .tm-header-menu-position-center #site-header-menu  #site-navigation .nav-menu,
	.tm-header-menu-position-center.tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap {		
		float: none;
		right: 0;
		left: 0;
		text-align: center;      
	}	
	.tm-header-menu-position-center.tm-mmmenu-override-yes  #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal {
		position: static !important;
		display: inline-block;
	}
	.tm-header-menu-position-center .site-header-menu.tm-wrap-cell{
		display: block;
	}
	.tm-header-menu-position-center .headerlogo, 
	.tm-header-menu-position-center .tm-header-icon, 
	.tm-header-menu-position-center .tm-header-text-area{
		position: relative;
		z-index: 2;
	}	

	
	/*** Thememount Left Menu ***/ 	
	.tm-header-menu-position-left #site-header-menu{
		float: none;
		display: block;
    }
    .tm-header-menu-position-left #site-header-menu #site-navigation .nav-menu,
	.tm-header-menu-position-left #site-header-menu #site-navigation div.mega-menu-wrap {
		float: none;
	}
	.tm-header-menu-position-left .site-branding{	
		padding-right: 25px;
	}	
	
	/*** Thememount Dropdown widht narrow ***/ 	
	.site-header-main.container-full #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu > ul.mega-sub-menu{		
		max-width: 1200px;
		right: 0;
		left: -15px;
		margin: 0px auto;
	}

	/* Header Social link */ 
    .site-header .tm-vc_btn3-container,
    .site-header .thememount-social-links-wrapper{
    	float: right;
    }
	.site-header .tm-vc_btn3-container{
    	margin-bottom: 0px;   
        margin-left: 20px;     
    }
    .site-header .social-icons {
        padding-top: 0;
        padding-bottom: 0;
    }  

    
    /***  Tm Header Style Infostack ***/     
    .tm-header-style-infostack #site-header-menu #site-navigation .nav-menu{
    	float: left;
    }    
    .tm-header-style-infostack  #site-header-menu{
    	float: none;
    }    
    .tm-header-style-infostack .tm-header-widgets-wrapper{
        position: relative;
        float: right;
        z-index: 112;
        height: <?php echo esc_html($header_height); ?>px;
        text-align: right;
        vertical-align: middle;
        display: table;
    }
    .tm-header-style-infostack .tm-header-widgets-wrapper .header-widget{
        display: table-cell;       
        padding: 0 24px;
        position: relative;
        vertical-align: middle;
        height: 100%;
        margin: 0;
        text-align: left;
        padding-right: 0;
	}
    .tm-header-style-infostack #site-header-menu #site-navigation div.mega-menu-wrap{
    	float: none;
    }    
    .tm-header-style-infostack .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li > ul.mega-sub-menu{
    	top: auto;
    }  
    .tm-header-style-infostack .header-content-main .header-content,
    .tm-header-style-infostack .header-content-main .header-icon{
        display: table-cell;
        vertical-align: middle;
    }
    .tm-header-style-infostack .tm-vc_icon_element {
        margin-bottom: 0px;
    }    
    .tm-header-style-infostack .tm-bgcolor-grey .header-content-main .header-content,
    .tm-header-style-infostack .tm-bgcolor-white .header-content-main .header-content{
    	color: rgba(0, 0, 0, 0.8);
    }       
    .tm-header-style-infostack .tm-bgcolor-skincolor .header-content-main .header-content,
    .tm-header-style-infostack .tm-bgcolor-darkgrey .header-content-main .header-content {
        color: rgba( 255,255,255,0.7);
    } 
    .tm-header-style-infostack .tm-bgcolor-skincolor .tm-vc_icon_element.tm-vc_icon_element-outer .tm-vc_icon_element-inner,
    .tm-header-style-infostack .tm-bgcolor-darkgrey .tm-vc_icon_element.tm-vc_icon_element-outer .tm-vc_icon_element-inner{	
    	color: #fff;
    }      
    header.tm-header-style-infostack .site-header:after{
        display: none;       
	}  
    .tm-header-style-infostack .tm-header-icon{
        padding-right: 0px;
        display: block;
        width: 60px;
        text-align: center;        
    }
	.tm-header-icon.tm-header-wc-cart-link + .tm-header-search-link {
		padding-right: 0px;
	}	
    .tm-header-style-infostack .thememount-fbar-btn.animated {
        -webkit-transform: translateX(0px);
        -ms-transform: translateX(0px);
        transform: translateX(0px);
    }  
    .tm-header-style-infostack .tm-header-icon.tm-header-btn-w{
        margin-left: 15px;
        padding-right: 0px;
        display: block;
        text-align: center;
        color: #fff;        
        width: auto;
    }
    .tm-header-style-infostack .tm-header-icon{
        margin-left: 0px;
    }
    .tm-header-style-infostack #site-header-menu #site-navigation .tm-header-icon.tm-header-btn-w a{
        color: #fff;
        font-size: 13px;
        padding: 0px 35px;
        display: block;
        letter-spacing: 1px;
        background-color: rgba(0, 0, 0, 0.13);
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
        font-weight: 700;
    } 
    .tm-header-style-infostack #site-header-menu #site-navigation .tm-header-icon.tm-header-btn-w a:hover{
        background-color: rgba(0, 0, 0, 0.20);
    }    
    .tm-header-style-infostack #site-header-menu #site-navigation div.nav-menu > ul > li, 
    .tm-header-style-infostack .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item,      
    .tm-header-style-infostack #site-header-menu #site-navigation div.nav-menu > ul > li > a, 
    .tm-header-style-infostack .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a,
    .tm-header-style-infostack .tm-header-icon, 
    .tm-header-style-infostack .tm-header-text-area,
    .tm-header-style-infostack .tm-header-icons,	
     header.tm-header-style-infostack #site-header-menu #site-navigation {
        height: <?php echo (thememount_header_menuarea_height()); ?>px;
        line-height: <?php echo (thememount_header_menuarea_height()); ?>px !important;
    }
    .tm-header-style-infostack .tm-header-icons .tm-header-wc-cart-link a{
        border: none;
        position: relative;
        top: 7px;       
    }
    .tm-header-style-infostack .tm-header-icons span.tm-header-wc-cart-link:nth-child(2) a:after{
        content: "";
        position: absolute;
        width: 1px;
        left: -17px;
        top: -3px;
        display: block;
        height: 90%;
        background-color: rgba(255, 255, 255, 0.2);
    }
    .tm-header-style-infostack .tm-header-icons .tm-header-search-link a:hover, 
    .tm-header-style-infostack .tm-header-icons .tm-header-wc-cart-link a:hover {
        color: rgba(255, 255, 255, 0.8);
    }
    .tm-header-style-infostack .tm-header-icons .tm-header-wc-cart-link span.number-cart{
        background-color: #fff;
        font-size: 12px;
        color: rgba(0, 0, 0, 0.8);
        bottom: 23px;
        left: 4px;
        width: 20px;
        height: 20px;
        line-height: 20px;
    }
    .tm-header-style-infostack .tm-header-icons{
        padding-left: 30px;
    }
    .tm-header-style-infostack .tm-header-icons:after{
        content: "";
        position: absolute;
        width: 5000px;
        left: 0;
        top: 0;
        right: auto;
        display: block;
        height: 100%;
        background-color: rgba( <?php echo thememount_hex2rgb($skincolor); ?> , 1);
        z-index: 0;
    }
    .tm-header-style-infostack .tm-header-icon {     
        z-index: 1;
    }
    .tm-header-style-infostack .tm-header-icons:before {
        position: absolute;
        top: 0;
        left: -40px;
        content: "";
        border-style: solid;
        border-width: <?php echo (thememount_header_menuarea_height()); ?>px 40px 0px 0px;
        border-color: transparent rgba( <?php echo thememount_hex2rgb($skincolor); ?> , 1) transparent rgba(255, 255, 255, 0);
    }
    .tm-header-style-infostack #site-header-menu #site-navigation div.nav-menu > ul > li > a:before, 
    .tm-header-style-infostack .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item > a:before{
        bottom: 0px;
    }
    .tm-header-style-infostack .site-header-menu .container.tm-container-for-header{
        position: relative;
    }
    
    /* Header sticky animation */ 
    .tm-header-style-infostack.tm-header-overlay .site-header{
        position: absolute;
        width: 100%;        
    }    
    .tm-header-style-infostack.tm-header-overlay .site-branding,
    .tm-header-style-infostack.tm-header-overlay .tm-header-widgets-wrapper{
        position: relative;     
        z-index: 1;
    }
    .tm-header-style-infostack.tm-header-overlay .tm-titlebar-wrapper{
        z-index: 0;
    }   

    .tm-header-style-infostack .tm-header-top-wrapper.container-fullwide{
    	padding-left: 15px;
        padding-right: 15px;
    }    
    
    /* Right to Left Dropdown menu */          
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-align-bottom-right ul.mega-sub-menu li > a:before {
        content: '\E83A';    
        left: auto;
        right: -14px;   
        -webkit-transition: right .2s ease-in-out;
        -moz-transition: right .2s ease-in-out;
        transition: right .2s ease-in-out;
	}    
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-menu-megamenu.mega-align-bottom-right ul.mega-sub-menu li.menu-item > a{
    	text-align: right;
    }    
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu.mega-align-bottom-right > ul.mega-sub-menu li.mega-menu-item:after {
        right: auto;
        left: 12px;
        position: absolute;
        border-right: none;
        border-left: 1px solid rgba(255,255,255,0.08);
    }  
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu.mega-align-bottom-right > ul.mega-sub-menu > li.mega-menu-item > h4.mega-block-title {
        text-align: right;
    }    
    
   .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-megamenu.mega-align-bottom-right > ul.mega-sub-menu > li.mega-menu-item:first-child:after {
    	border-left: none;
	}    
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-item ul.mega-sub-menu:before {
        content: " ";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;		
        display:block;
    }
	.tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal li.mega-menu-flyout ul.mega-sub-menu ul.mega-sub-menu{
        background-image: none !important;      
    }    
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-menu-megamenu.mega-align-bottom-right ul.mega-sub-menu li.menu-item:hover > a,    
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-align-bottom-right ul.mega-sub-menu li.mega-menu-item:hover > a {
    	padding-left: 0px;
        padding-right: 20px;
	}
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-align-bottom-right ul.mega-sub-menu li:hover > a:before {
        left: auto;
        right: 0px;
	}    
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-align-bottom-right ul.mega-sub-menu > li.mega-menu-item-type-widget div.textwidget{
        padding-left: 15px;
        text-align: right;
    }    
    /* Header sticky animation */        
    @keyframes menu_sticky {
        0%   {margin-top:-120px;opacity: 0;}
        50%  {margin-top: -64px;opacity: 0;}
        100% {margin-top: 0;opacity: 1;}
    }
    .site-header.is_stuck {
        position: fixed;
        width:100%;
        top:0;    
        z-index: 999;
        margin:0;
        animation-name: menu_sticky;
        -webkit-box-shadow: 0px 13px 25px -12px rgba(0,0,0,0.25);
        -moz-box-shadow: 0px 13px 25px -12px rgba(0,0,0,0.25);
        box-shadow: 0px 13px 25px -12px rgba(0,0,0,0.25);
        padding: 0;
    }    
    #site-header-menu #site-navigation div.nav-menu > ul > li ul li.page_item_has_children > a:after, 
    #site-header-menu #site-navigation div.nav-menu > ul > li ul li.menu-item-has-children > a:after{
        font-family: "FontAwesome";
        font-style: normal;
        font-weight: normal;
        speak: none;
        display: inline-block;
        text-decoration: inherit;
        text-align: center;
        opacity: .8;
        font-variant: normal;
        text-transform: none;
        font-size: 15px;
        content: "\f105";
        position: absolute;
        background-color: transparent;
        right: 12px;
        top: 15px;
        margin: 0;
    }    
    #site-header-menu #site-navigation div.nav-menu > ul > li.current-menu-item > a,
    #site-header-menu #site-navigation div.nav-menu > ul > li.current-menu-ancestor > a, 
    #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_item > a, 
    #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_ancestor > a, 
    #site-header-menu #site-navigation div.nav-menu > ul > li.current_page_parent > a,     
    
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-current-menu-item > a, 
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-current-menu-ancestor > a, 
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-current-menu-item > a, 
    .tm-mmmenu-override-yes #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item.mega-current-menu-ancestor > a{
    	font-weight: bold;
    }
    .tm-header-icon,
    .thememount-fbar-btn{
        margin-left: 17px;
    }

   
    /*** Header search separator ***/   
	.tm-header-style-classic  .tm-header-icons:before {
        display: block;
        content: '';
        position: absolute;
        left: 0px;
        top: 50%;
        height: 22px;
        width: 1px;
        background-color: #DCDCDC;
        margin-top: -11px;
	}
 	.tm-header-style-classic .tm-header-icons:before {
    	background-color: rgba( <?php echo thememount_hex2rgb($mainMenuFontColor); ?> , 0.22) ;
	}
    .tm-header-style-classic .is_stuck .tm-header-icons:before {
        background-color: rgba( <?php echo thememount_hex2rgb($stickymainmenufontcolor); ?> , 0.22) ;
    }   



}
