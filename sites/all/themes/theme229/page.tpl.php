<?php
// $Id: page.tpl.php,v 1.25 2008/01/24 09:42:53 goba Exp $
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
  <title><?php print $head_title ?></title>
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>

<!--[if lt IE 7]>
	<script type="text/javascript" src="<?php print base_path().path_to_theme() ?>/ie_png.js"></script>
	<script type="text/javascript">
		ie_png.fix('.logo');
	</script>
<![endif]-->

</head>
  
<body id="body">
	<div id="main">
	
		<div id="header">
			<div class="head-row1">
				<?php if ($logo) : ?>
					<a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print($logo) ?>" alt="<?php print t('Home') ?>" class="logo" /></a>
				<?php endif; ?>
				<?php if ($site_name) : ?>
					<h1 class="site-name"><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1>
				<?php endif; ?>
				
				<?php if ($site_slogan) : ?>
					<div class="slogan"><?php print($site_slogan) ?></div>
				<?php endif;?>
					
				<?php if ($mission != ""): ?>
					<div id="mission"><?php print $mission ?></div>
				<?php endif; ?>
				<?php print theme_image(path_to_theme().'/images/slogan.gif', '', '', array('class'=>'slogan-img')) ?>
			</div>
			<div class="head-row2">
				<div class="col1">
					<?php if (isset($primary_links)) : ?>
						<div class="pr-menu">
							<?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="col2">
					<div class="search-box">
						<?php if ($search_box): print $search_box;  endif; ?>
					</div>
				</div>
			</div>
		</div>
		
		<div id="cont">
			<div class="box1">
				<div class="tail-right">
					<div class="tail-left">
						<div class="corner-bottom-right">
							<div class="corner-bottom-left">
								<div class="indent">
								
									<?php if ($is_front != ""): ?>
										<div id="custom">
											<?php print $custom?>
										</div>
									<?php endif; ?>
									
									<div class="site-container">
												
										<?php if ($left != ""): ?>
											<div id="left-col">
												<div class="ind">
												
													<div class="box2">
													<div class="corner-bottom-left">
													<div class="corner-top-right">
													<div class="corner-top-left">
															<div class="wrapper">
														<div class="indent">
																<?php print $left?>
															</div>
														</div>
													</div>
													</div>
													</div>
													</div>
													
												</div>
											</div>
										<?php endif; ?>
										
                                        <?php if ($is_front != ""){ ?>
                                           <div id="cont-col">
										
												<?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
                                                <?php if ($title): print '
                                                    <h2'. ($tabs ? ' class="with-tabs title"' : '') .'>'. $title .'</h2>
                                                '; endif; ?>
                                                <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
                                                <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
                                                                 
                                                <?php if ($show_messages && $messages != ""): ?>
                                                    <?php print $messages ?>
                                                <?php endif; ?>
                                            
                                                <?php if ($help != ""): ?>
                                                    <div id="help"><?php print $help ?></div>
                                                <?php endif; ?>
                                            
                                                  <!-- start main content -->
                                                <?php print $content; ?>
                                                
                                            </div>
                                            
                                        <?php }else{?>
                                            
                                            <div id="cont-col">
                                                <div class="ind">
                                                    <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
                                                    <?php if ($title): print '
                                                        <h2'. ($tabs ? ' class="with-tabs title"' : '') .'>'. $title .'</h2>
                                                    '; endif; ?>
                                                    <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
                                                    <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
                                                                     
                                                    <?php if ($show_messages && $messages != ""): ?>
                                                        <?php print $messages ?>
                                                    <?php endif; ?>
                                                
                                                    <?php if ($help != ""): ?>
                                                        <div id="help"><?php print $help ?></div>
                                                    <?php endif; ?>
                                                
                                                      <!-- start main content -->
                                                    <?php print $content; ?>
                                                </div>
                                            </div>
                                         <?php } ?>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			
		<div id="footer">
			<div class="foot">
				<?php if ($footer_message || $footer) : ?>
				   <span><?php print $footer_message . $footer;?></span>
			   <?php endif; ?>
			</div>
		</div>
		
	</div>
<?php print $closure;?>
</body>
</html>