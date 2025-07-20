<?php
//about theme info
add_action( 'admin_menu', 'sirat_gettingstarted' );
function sirat_gettingstarted() {    	
	add_theme_page( esc_html__('About Sirat', 'sirat'), esc_html__('Theme Demo Import', 'sirat'), 'edit_theme_options', 'sirat_guide', 'sirat_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function sirat_admin_theme_style() {
   wp_enqueue_style('sirat-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
   wp_enqueue_script('sirat-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
   wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri()).'/assets/css/fontawesome-all.css' );
}
add_action('admin_enqueue_scripts', 'sirat_admin_theme_style');

//guidline for about theme
function sirat_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'sirat' );
?>

<div class="wrapper-info">
    <div class="col-left sshot-section">
    	<h2><?php esc_html_e( 'Welcome to Sirat Theme', 'sirat' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','sirat'); ?></p>
    </div>
    <div class="col-right coupen-section">
    	<div class="logo-section">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
		</div>
		<div class="logo-right">			
			<div class="update-now">
				<div class="theme-info">
					<div class="theme-info-left">
						<h2><?php esc_html_e('TRY PREMIUM','sirat'); ?></h2>
						<h4><?php esc_html_e('SIRAT THEME','sirat'); ?></h4>
					</div>	
					<div class="theme-info-right"></div>
				</div>	
				<div class="dicount-row">
					<div class="disc-sec">	
						<h5 class="disc-text"><?php esc_html_e('GET THE FLAT DISCOUNT OF','sirat'); ?></h5>
						<h1 class="disc-per"><?php esc_html_e('20%','sirat'); ?></h1>	
					</div>
					<div class="coupen-info">
						<h5 class="coupen-code"><?php esc_html_e('"VWPRO20"','sirat'); ?></h5>
						<h5 class="coupen-text"><?php esc_html_e('USE COUPON CODE','sirat'); ?></h5>
						<div class="info-link">						
							<a href="<?php echo esc_url( SIRAT_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'UPGRADE TO PRO', 'sirat' ); ?></a>
						</div>	
					</div>	
				</div>				
			</div>
		</div> 
		
    </div>

    <div class="tab-sec">
		<div class="tab">
			<button class="tablinks" onclick="sirat_open_tab(event, 'theme_offer')"><?php esc_html_e( 'Demo Importer', 'sirat' ); ?></button>
			<button class="tablinks" onclick="sirat_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'sirat' ); ?></button>
			
		  	<button class="tablinks" onclick="sirat_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'sirat' ); ?></button>
		  	<button class="tablinks" onclick="sirat_open_tab(event, 'free_pro')"><?php esc_html_e( 'Free Vs Premium', 'sirat' ); ?></button>
		  	<button class="tablinks" onclick="sirat_open_tab(event, 'get_bundle')"><?php esc_html_e( 'Get 250+ Themes Bundle at $99', 'sirat' ); ?></button>
		</div>

		<?php
			$sirat_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$sirat_plugin_custom_css ='display: block';
			}
		?>

		<div id="theme_offer" class="tabcontent open">
			<div class="demo-content">
				<h3><?php esc_html_e( 'Click the below run importer button to import demo content', 'sirat' ); ?></h3>
				<?php 
				/* Get Started. */ 
				require get_parent_theme_file_path( '/inc/getstart/demo-content.php' );
			 	?>
			</div> 	
		</div>

		<div id="lite_theme" class="tabcontent">
			<?php  if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = Sirat_Plugin_Activation_Settings::get_instance();
				$sirat_actions = $plugin_ins->recommended_actions;
				?>
				<div class="sirat-recommended-plugins">
				    <div class="sirat-action-list">
				        <?php if ($sirat_actions): foreach ($sirat_actions as $key => $sirat_actionValue): ?>
				                <div class="sirat-action" id="<?php echo esc_attr($sirat_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($sirat_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($sirat_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($sirat_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','sirat'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($sirat_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'sirat' ); ?></h3>
				<hr class="h3hr">
			  	<p><?php esc_html_e('Sirat is a multipurpose theme known primarily for its simplicity apart from being clean, user-friendly as well as finely organised making it a very good choice when it comes to WordPress themes relevant for various business purposes like a Apps landing, Architects, startup, Social Media Management, Virtual Assistant Service, Webinar sign-up, ebook download, Service offering, One page website, landing pages, quotes blog Organizations, Consultant, Manufacture plant, Services, IT Firm, Cloth business, responsive landing page, course websites, wedding planners, sport/medical shops) political and WooCommerce storefront with a beautiful & professional design, shortcodes fashion store, Retailer, Wholesaler, Online business, Sign a petition, B2B, app landing page, builder, catering, course, fitness, landing, launch, Marketing, SEO Agency, Advertising agency, Insurance, generating form, University Landing page, corporate, portfolio, agency, startup, creative business, Event, Digital Health, Sell Your Art Online, Ideology-Based business, Print-On-Demand, Finance, Stock Market, IT infrastructure, business agency. The theme comes with a new header layout and there are more options of sidebar layout available for post and pages. Apart from that, there are more width options as well as preload options available. Another important thing with this particular WordPress theme is that it is lightweight and can be extended to the limit one likes. It also has the availability of the enable and disable button. With some of its exemplary features like WooCommerce, retina ready, clean code, flexible header, CTA, Right Sidebar, bootstrap framework, Schema friendly, customization options, mobile friendliness etc, This WP theme has content limit option and is also accompanied with blog post settings. Another important characteristic with it is the beauty it has and also the design that is immensely professional. Sirat is a fast theme and is accompanied with some of the best SEO practices in the online world. You have the option of customization a mentioned earlier making it extremely beneficial for personal portfolio. Apart from all this, Sirat is modern, luxurious, stunning as well as animated making it a fine option for the businesses where creativity is involved and it also has scroll top layout. Siart is translation ready and supports AR_ARABIC, DE_GERMAN, ES_SPANISH, FR_FRENCH, IT_ITALIAN, RU_RUSSIAN, ZH_CHINESE, TR_TURKISH languages. It fits creative business, small businesses restaurants, medical shops, startups, corporate businesses, online agencies and firms, portfolios, ecommerce. Sirat has banner opacity and colour changing feature included.','sirat'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'sirat' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'sirat' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( SIRAT_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'sirat' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'sirat'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'sirat'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'sirat'); ?></a>
					</div>
					<hr>				
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'sirat'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'sirat'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( SIRAT_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'sirat'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'sirat'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'sirat'); ?>  </p>
					<div class="info-link">
						<a href="<?php echo esc_url( SIRAT_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'sirat'); ?></a>
					</div>
			  		<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'sirat' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','sirat'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-admin-customizer"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=sirat_typography') ); ?>" target="_blank"><?php esc_html_e('Typography','sirat'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-welcome-write-blog"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=sirat_topbar') ); ?>" target="_blank"><?php esc_html_e('Topbar Settings','sirat'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=sirat_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Section','sirat'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=sirat_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','sirat'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=sirat_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','sirat'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=sirat_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','sirat'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=sirat_wocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','sirat'); ?></a>
								</div> 
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','sirat'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','sirat'); ?></a>
								</div> 
							</div>

						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','sirat'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','sirat'); ?></p>
	                <ul>
	                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','sirat'); ?></span><?php esc_html_e(' Go to ','sirat'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','sirat'); ?></b></p>

	                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','sirat'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
	                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','sirat'); ?></span><?php esc_html_e(' Go to ','sirat'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','sirat'); ?></b></p>
					  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','sirat'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
	                  	<p><?php esc_html_e(' Once you are done with this, then follow the','sirat'); ?> <a class="doc-links" href="https://preview.vwthemesdemo.com/docs/free-sirat/" target="_blank"><?php esc_html_e('Documentation','sirat'); ?></a></p>
	                </ul>
			  	</div>
			</div>
		</div>	


		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'sirat' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('Premium multipurpose WordPress theme is truly beneficial for wide range of businesses or any kind of startup and the best part of it is that it is not only simple and clean but is also user friendly as well apart from being lightweight and extensive to the limit as preferred by the user. Because of its splendid features, it has the potential to create any type of website related to the blog, portfolio or business and above that, it is accompanied with the WooCommerce store comprising of a design that is beautiful to the core and at the same time professional as well. Multipurpose WordPress theme is not only fast but responsive to the core other than being RTL and translation ready and highly suitable for some of the finest SEO practices. The ecommerce features with this premium category theme are unique and there is no doubt about this fact.','sirat'); ?></p>		    	
		    </div>
		    <div class="col-right-pro">
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( SIRAT_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'sirat'); ?></a>
					<a href="<?php echo esc_url( SIRAT_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'sirat'); ?></a>
					<a href="<?php echo esc_url( SIRAT_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'sirat'); ?></a>
					<a href="<?php echo esc_url( SIRAT_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get 250+ Themes Bundle at $99', 'sirat'); ?></a>
				</div>
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'sirat' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'sirat'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'sirat'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'sirat'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'sirat'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'sirat'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'sirat'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'sirat'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'sirat'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'sirat'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'sirat'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'sirat'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'sirat'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'sirat'); ?></td>
								<td class="table-img"><?php esc_html_e('15', 'sirat'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'sirat'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'sirat'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'sirat'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'sirat'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'sirat'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'sirat'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'sirat'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( SIRAT_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'sirat'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="get_bundle" class="tabcontent">		  	
		   <div class="col-left-pro">
		   	<h3><?php esc_html_e( 'WP Theme Bundle', 'sirat' ); ?></h3>
		    	<p><?php esc_html_e('Enhance your website effortlessly with our WP Theme Bundle. Get access to 250+ premium WordPress themes and 5+ powerful plugins, all designed to meet diverse business needs. Enjoy seamless integration with any plugins, ultimate customization flexibility, and regular updates to keep your site current and secure. Plus, benefit from our dedicated customer support, ensuring a smooth and professional web experience.','sirat'); ?></p>
		    	<div class="feature">
		    		<h4><?php esc_html_e( 'Features:', 'sirat' ); ?></h4>
		    		<p><?php esc_html_e('250+ Premium Themes & 5+ Plugins.', 'sirat'); ?></p>
		    		<p><?php esc_html_e('Seamless Integration.', 'sirat'); ?></p>
		    		<p><?php esc_html_e('Customization Flexibility.', 'sirat'); ?></p>
		    		<p><?php esc_html_e('Regular Updates.', 'sirat'); ?></p>
		    		<p><?php esc_html_e('Dedicated Support.', 'sirat'); ?></p>
		    	</div>
		    	<p><?php esc_html_e('Upgrade now and give your website the professional edge it deserves, all at an unbeatable price of $99!', 'sirat'); ?></p>
		    	<div class="pro-links">
					<a href="<?php echo esc_url( SIRAT_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'sirat'); ?></a>
					<a href="<?php echo esc_url( SIRAT_THEME_BUNDLE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'sirat'); ?></a>
				</div>
		   </div>
		   <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/bundle.png" alt="" />
		   </div>		    
		</div>
	</div>
</div>
<?php } ?>