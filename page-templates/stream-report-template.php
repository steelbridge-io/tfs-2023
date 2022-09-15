<?php
/* 	Template Name: Stream Report
*   Template Post Type: page
*		Developed for The Fly Shop
*		SteelBridge Media
*/

include_once('post-meta/post-meta-stream-report.php');

get_header();
?>
  
  <!-- Banner -->
  <section id="banner">
    <div class="inner">
      <img src="<?php echo $tfs_logo_report; ?>" class="img-responsive center-block" alt="The Fly Shop Signature
  Destination">
      <h2><?php echo $stream_report_title; ?></h2>
      
      <?php if ( get_post_meta($post->ID, 'streamreport-description', true) )
        echo '<p class="template-description">' . $stream_report_description . '</p>' ?>
    
    </div>
    <a href="#main" class="more scrolly">Reports are here!</a>
  </section>
  
  <!-- Main -->
  <div class="clearfix">
    <article id="main">
      <section class="wrapper-less-padding-bottom style5">
        <div class="inner">
          <h2 class="text-center">Northern California Stream Report</h2>
          
          <div class="wide text-justify">
            <!-- The WordPress Loop. Used to display post/page content -->
            
            <?php if (have_posts()) :
              
              while (have_posts()) : the_post();
                
                the_content();
              
              endwhile;
            
            else :
            
            endif; ?>
          
          </div><!-- /.wide -->
        
        </div><!-- /.inner -->
      </section>
      <section class="wrapper-less-padding style5">
        
        <!-- ====== FEATURED REPORTS ====== -->
        
        <div class="container-fluid text-center mb-1618">
          <h2>Featured Reports</h2>
          <div class="row">
            
            <div class="col-xs-6 col-md-3">
              <a data-toggle="modal" href="#stream-report.php" data-target=".featuredreport1" role="button" class="thumbnail featuredreport clicky"><img src="<?php echo $featured1_image; ?>" alt="Northern California - The Fly Shop - Stream Report"></a>
            </div>
            
            <div class="col-xs-6 col-md-3">
              <a data-toggle="modal" data-target=".featuredreport2" role="button" class="thumbnail featuredreport"><img src="<?php echo $featured2_image; ?>" alt="Northern California - The Fly Shop - Stream Report"></a>
            </div>
            
            <div class="col-xs-6 col-md-3">
              <a data-toggle="modal" data-target=".featuredreport3" role="button" class="thumbnail featuredreport"><img src="<?php echo $featured3_image; ?>" alt="Northern California - The Fly Shop - Stream Report"></a>
            </div>
            
            <div class="col-xs-6 col-md-3">
              <a data-toggle="modal" data-target=".featuredreport4" role="button" class="thumbnail featuredreport"><img src="<?php echo $featured4_image; ?>" alt="Northern California - The Fly Shop - Stream Report"></a>
            </div>
          
          </div>
        </div>
        
        <!-- ====== /FEATURED REPORTS ====== -->
        
        <div class="inner">
          
          <div class="text-center">
            <h2>All Regional Reports</h2>
          </div>
          
          <div class="panel-group" id="accordion1">
            
            <!-- ====== RIVERS ===== -->
            
            <div class="panel panel-default">
              
              <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseTwo1">
                <img src="<?php echo $rivers_image; ?>" alt="stream-report" class="img-responsive center-block thumbnail">
                <h3>Expand All River Reports&nbsp;<span class="arrow-down"></span></h3>
              </div>
              
              <div id="collapseTwo1" class="panel-collapse collapse">
                <div class="panel-body">
                  <div class="panel-group" id="accordion-rivers" role="tablist" aria-multiselectable="true">
                    
                    <!-- ====== FALL RIVER ====== -->
                    
                    <div class="panel panel-default">
                      
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion-rivers" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>Fall River&nbsp;<span class="arrow-down">Expand</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php if(get_post_meta(get_the_ID(), 'fallriver-closed-checkbox', true) == '-danger') :?>
                              <span class="label label-default<?php echo $fallriver_closed_checkbox; ?>"><?php echo $fallriver_closed_message; ?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $fallriver_checkbox_poor; ?>">Poor</span>
                              <span class="label label-default<?php echo $fallriver_checkbox_fair; ?>">Fair</span>
                              <span class="label label-default<?php echo $fallriver_checkbox_fairgood; ?>">Fair to Good</span>
                              <span class="label label-default<?php echo $fallriver_checkbox_good; ?>">Good</span>
                              <span class="label label-default<?php echo $fallriver_checkbox_great; ?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          </div>
                        </div>
                      </div>
                      
                      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div id="fallriverreport">
                          <div class="report-panel">
                            
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-sm-6">
                                  <h4>Fall River Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Upated:&nbsp;</strong>
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $fallriver_report_date; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  </h4>
                                </div>
                              </div>
                            </div>
                            
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-sm-12">
                                  
                                  <p><strong>Report:</strong>
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $fallriver_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  </p>
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $fallriver_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  </p>
                                
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- ====== HAT CREEK ====== -->
                    
                    <div class="panel panel-default">
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion-rivers" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <div class="row">
                          <div class="col-sm-6">
                            <h4>Hat Creek&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
                          </div>
                          <div class="col-sm-6">
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php if(get_post_meta(get_the_ID(), 'hatcreek-closed-checkbox', true) == '-danger') :?>
                              <span class="label label-default<?php echo $hatcreek_closed_checkbox;?>"><?php echo $hatcreek_closed_message; ?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $hatcreek_checkbox_poor;?>">Poor</span>
                              <span class="label label-default<?php echo $hatcreek_checkbox_fair;?>">Fair</span>
                              <span class="label label-default<?php echo $hatcreek_checkbox_fairgood;?>">Fair to Good</span>
                              <span class="label label-default<?php echo $hatcreek_checkbox_good;?>">Good</span>
                              <span class="label label-default<?php echo $hatcreek_checkbox_great;?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          </div>
                        </div>
                      </div>
                      
                      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div id="hatcreekreport">
                          <div class="report-panel">
                            <div class="container-fluid">
                              <div class="row">
                                
                                <div class="col-sm-6">
                                  <h4>Hat Creek Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Updated:&nbsp;</strong>
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $hatcreek_report_update; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  </h4>
                                </div>
                              </div>
                              
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><strong>Report:</strong>
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $hatcreek_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $hatcreek_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- ====== KLAMATH RIVER ====== -->
                    
                    <div class="panel panel-default">
                      
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion-rivers" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>Klamath River&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php if(get_post_meta(get_the_ID(), 'klamathriver-closed-checkbox', true) == '-danger') :?>
                              <span class="label label-default<?php echo $klamathriver_closed_checkbox;?>"><?php echo $klamathriver_closed_message; ?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $klamathriver_checkbox_poor; ?>">Poor</span>
                              <span class="label label-default<?php echo $klamathriver_checkbox_fair; ?>">Fair</span>
                              <span class="label label-default<?php echo $klamathriver_checkbox_fairgood; ?>">Fair to Good</span>
                              <span class="label label-default<?php echo $klamathriver_checkbox_good; ?>">Good</span>
                              <span class="label label-default<?php echo $klamathriver_checkbox_great; ?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          </div>
                        </div>
                      </div>
                      
                      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="report-panel">
                          <div id="klamathriverreport">
                            <div class="container-fluid">
                              <div class="row">
                                
                                <div class="col-sm-6">
                                  <h4>Klamath River Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Updated:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $klamathriver_updated; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  
                                  </h4>
                                </div>
                              </div>
                            </div>
                            
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><strong>Report:</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $klamathriver_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $klamathriver_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- ====== LOWER SACRAMENTO RIVER ====== -->
                    
                    <div class="panel panel-default">
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingFour" data-toggle="collapse" data-parent="#accordion-rivers" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>Lower Sacramento&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php if(get_post_meta(get_the_ID(), 'lowersacramento-closed-checkbox', true) == '-danger') :?>
                              <span class="label label-default<?php echo $lowersacramento_closed_checkbox;?>"><?php echo $lowersacramento_closed_message; ?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $lowersacramento_checkbox_poor; ?>">Poor</span>
                              <span class="label label-default<?php echo $lowersacramento_checkbox_fair; ?>">Fair</span>
                              <span class="label label-default<?php echo $lowersacramento_checkbox_fairgood; ?>">Fair to Good</span>
                              <span class="label label-default<?php echo $lowersacramento_checkbox_good; ?>">Good</span>
                              <span class="label label-default<?php echo $lowersacramento_checkbox_great; ?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          
                          </div>
                        </div>
                      </div>
                      
                      
                      <div id="collapseFour" class="panel-collapse collapse report" role="tabpanel" aria-labelledby="headingTwo">
                        <div id="lowersacramentoreport">
                          <div class="report-panel">
                            <div class="container-fluid">
                              <div class="row">
                                
                                <div class="col-sm-6">
                                  <h4>Lower Sacramento River Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Updated:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    <?php echo $lowersacramento_updated; ?>
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  
                                  </h4>
                                </div>
                              </div>
                            </div>
                            
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><strong>Report:</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $lowersacramento_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $lowersacramento_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- ====== MCCLOUD RIVER ====== -->
                    
                    <div class="panel panel-default">
                      
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingFive" data-toggle="collapse" data-parent="#accordion-rivers" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>McCloud River&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php $mccloudriver_closed_checkbox = get_post_meta(get_the_ID(), 'mccloudriver-closed-checkbox', true);
                            if(get_post_meta(get_the_ID(), 'mccloudriver-closed-checkbox', true) == '-danger') :?>
                              <span class="label label-default<?php echo $mccloudriver_closed_checkbox;?>"><?php echo $mccloudriver_closed_message; ?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $mccloudriver_checkbox_poor;?>">Poor</span>
                              <span class="label label-default<?php echo $mccloudriver_checkbox_fair;?>">Fair</span>
                              <span class="label label-default<?php echo $mccloudriver_checkbox_fairgood;?>">Fair to Good</span>
                              <span class="label label-default<?php echo $mccloudriver_checkbox_good;?>">Good</span>
                              <span class="label label-default<?php echo $mccloudriver_checkbox_great;?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          </div>
                        </div>
                      </div>
                      
                      <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div id="mccloudriverreport">
                          <div class="report-panel">
                            <div class="container-fluid">
                              <div class="row">
                                
                                <div class="col-sm-6">
                                  <h4>McCloud River Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Updated:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $mccloudriver_updated; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  
                                  </h4>
                                </div>
                              </div>
                            </div>
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><strong>Report:</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $mccloudriver_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $mccloudriver_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- ====== PIT RIVER ====== -->
                    
                    <div class="panel panel-default">
                      
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingSix" data-toggle="collapse" data-parent="#accordion-rivers" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>Pit River&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php $pitriver_closed_checkbox = get_post_meta(get_the_ID(), 'pitriver-closed-checkbox', true);
                            if(get_post_meta(get_the_ID(), 'pitriver-closed-checkbox', true) == '-danger') :?>
                              <span class="label label-default<?php echo $pitriver_closed_checkbox;?>"><?php echo $pitriver_closed_message; ?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $pitriver_checkbox_poor; ?>">Poor</span>
                              <span class="label label-default<?php echo $pitriver_checkbox_fair; ?>">Fair</span>
                              <span class="label label-default<?php echo $pitriver_checkbox_fairgood; ?>">Fair to Good</span>
                              <span class="label label-default<?php echo $pitriver_checkbox_good; ?>">Good</span>
                              <span class="label label-default<?php echo $pitriver_checkbox_great; ?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          </div>
                        </div>
                      </div>
                      
                      <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                        <div id="pitriverreport">
                          <div class="report-panel">
                            <div class="container-fluid">
                              <div class="row">
                                
                                <div class="col-sm-6">
                                  <h4>Pit River Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Updated:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $pitriver_updated; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  
                                  </h4>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  
                                  <p><strong>Report:</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $pitriver_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $pitriver_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- ====== TRINITY RIVER ====== -->
                    
                    <div class="panel panel-default">
                      
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingSeven" data-toggle="collapse" data-parent="#accordion-rivers" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>Trinity River&nbsp;<span class="arrow-down">Expand</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php $trinityriver_closed_checkbox = get_post_meta(get_the_ID(), 'trinityriver-closed-checkbox', true);
                            if(get_post_meta(get_the_ID(), 'trinityriver-closed-checkbox', true) == '-danger') :?>
                              <span class="label label-default<?php echo $trinityriver_closed_checkbox;?>"><?php echo $trinityriver_closed_message; ?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $trinityriver_checkbox_poor; ?>">Poor</span>
                              <span class="label label-default<?php echo $trinityriver_checkbox_fair; ?>">Fair</span>
                              <span class="label label-default<?php echo $trinityriver_checkbox_fairgood; ?>">Fair to Good</span>
                              <span class="label label-default<?php echo $trinityriver_checkbox_good; ?>">Good</span>
                              <span class="label label-default<?php echo $trinityriver_checkbox_great; ?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          
                          </div>
                        </div>
                      </div>
                      
                      <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                        <div id="trinityriverreport">
                          <div class="report-panel">
                            <div class="container-fluid">
                              <div class="row">
                                
                                <div class="col-sm-6">
                                  <h4>Trinity River Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Upated:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $trinityriver_updated; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  
                                  </h4>
                                </div>
                              </div>
                            </div>
                            
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-sm-12">
                                  
                                  <p><strong>Report:</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $trinityriver_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $trinityriver_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- ====== UPPER SACRAMENTO RIVER ====== -->
                    <div class="panel panel-default">
                      
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingEight" data-toggle="collapse" data-parent="#accordion-rivers" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>Upper Sacramento River&nbsp;<span class="arrow-down">Expand</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php if(get_post_meta(get_the_ID(), 'uppersac-closed-checkbox', true) == '-danger') :?>
                              <span class="label label-default<?php echo $uppersac_closed_checkbox; ?>"><?php echo $uppersac_closed_message; ?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $uppersac_checkbox_poor; ?>">Poor</span>
                              <span class="label label-default<?php echo $uppersac_checkbox_fair; ?>">Fair</span>
                              <span class="label label-default<?php echo $uppersac_checkbox_fairgood; ?>">Fair to Good</span>
                              <span class="label label-default<?php echo $uppersac_checkbox_good; ?>">Good</span>
                              <span class="label label-default<?php echo $uppersac_checkbox_great; ?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          </div>
                        </div>
                      </div>
                      
                      <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                        <div class="report-panel">
                          <div id="uppersacramentoreport">
                            <div class="container-fluid">
                              <div class="row">
                                
                                <div class="col-sm-6">
                                  <h4>Upper Sacramento River Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Upated:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $uppersac_updated; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  </h4>
                                </div>
                              </div>
                            </div>
                            
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-md-12">
                                  
                                  <p><strong>Report:</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $uppersac_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  
                                  
                                  </p>
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $uppersac_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- ====== STILL WATERS ======= -->
            
            <div class="panel panel-default">
              <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseThree1">
                <img src="<?php echo $lakes_image; ?>" alt="lakes report" class="img-responsive center-block thumbnail">
                <h3>Expand All Still Waters Reports&nbsp;<span class="arrow-down"></span></h3>
              </div>
              <div id="collapseThree1" class="panel-collapse collapse">
                <div class="panel-body">
                  <div class="panel-group" id="accordion-lakes" role="tablist" aria-multiselectable="true">
                    
                    <!-- ====== BAUM LAKE ====== -->
                    <div class="panel panel-default">
                      
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingNine" data-toggle="collapse" data-parent="#accordion-lakes" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>BAUM LAKE&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php if(get_post_meta(get_the_ID(), 'baumlake-closed-checkbox', true) == '-danger') :?>
                              <span class="label label-default<?php echo $baumlake_closed_checkbox; ?>"><?php echo $baumlake_closed_message; ?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $baumlake_checkbox_poor; ?>">Poor</span>
                              <span class="label label-default<?php echo $baumlake_checkbox_fair;  ?>">Fair</span>
                              <span class="label label-default<?php echo $baumlake_checkbox_fairgood; ?>">Fair to Good</span>
                              <span class="label label-default<?php echo $baumlake_checkbox_good; ?>">Good</span>
                              <span class="label label-default<?php echo $baumlake_checkbox_great; ?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          </div>
                        </div>
                      </div>
                      
                      
                      <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                        <div class="report-panel">
                          <div id="baumlakereport">
                            <div class="container-fluid">
                              <div class="row">
                                
                                <div class="col-sm-6">
                                  <h4>Baum Lake Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Updated:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $baumlake_updated; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  
                                  </h4>
                                </div>
                              </div>
                              <div class="row">
                                
                                <div class="col-sm-12">
                                  <p><strong>Report:</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $baumlake_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $baumlake_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- ====== IRON CANYON RESERVOIR ====== -->
                    <div class="panel panel-default">
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingTen" data-toggle="collapse" data-parent="#accordion-lakes" href="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>Iron Canyon Reservoir&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php if(get_post_meta(get_the_ID(), 'ironcanyonres-closed-checkbox', true) == '-danger') :?>
                              <span class="label label-default<?php echo $ironcanyonres_closed_checkbox; ?>"><?php echo $ironcanyonres_closed_message; ?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $ironcanyonres_checkbox_poor; ?>">Poor</span>
                              <span class="label label-default<?php echo $ironcanyonres_checkbox_fair;  ?>">Fair</span>
                              <span class="label label-default<?php echo $ironcanyonres_checkbox_fairgood; ?>">Fair to Good</span>
                              <span class="label label-default<?php echo $ironcanyonres_checkbox_good; ?>">Good</span>
                              <span class="label label-default<?php echo $ironcanyonres_checkbox_great; ?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          </div>
                        </div>
                      </div>
                      
                      
                      <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                        <div class="report-panel">
                          <div id="ironcanyonreservoirreport">
                            <div class="container-fluid">
                              <div class="row">
                                
                                <div class="col-sm-6">
                                  <h4>Iron Canyon Reservoir Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Updated:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $ironcanyonres_updated; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  
                                  </h4>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><strong>Report:</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $ironcanyonres_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $ironcanyonres_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- ====== KESWICK RESERVOIR ====== -->
                    <div class="panel panel-default">
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingEleven" data-toggle="collapse" data-parent="#accordion-lakes" href="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>Keswick Reservoir&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php if(get_post_meta(get_the_ID(), 'keswickres-closed-checkbox', true) == '-danger') :?>
                              <span class="label label-default<?php echo $keswickres_closed_checkbox; ?>"><?php echo $keswickres_closed_message; ?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $keswickres_checkbox_poor; ?>">Poor</span>
                              <span class="label label-default<?php echo $keswickres_checkbox_fair;  ?>">Fair</span>
                              <span class="label label-default<?php echo $keswickres_checkbox_fairgood; ?>">Fair to Good</span>
                              <span class="label label-default<?php echo $keswickres_checkbox_good; ?>">Good</span>
                              <span class="label label-default<?php echo $keswickres_checkbox_great; ?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          
                          </div>
                        </div>
                      </div>
                      
                      
                      <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
                        <div class="report-panel">
                          <div id="keswickreservoirreport">
                            <div class="container-fluid">
                              <div class="row">
                                
                                <div class="col-sm-6">
                                  <h4>Keswick Reservoir Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Updated:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $keswickres_updated; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  
                                  </h4>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><strong>Report:</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $keswickres_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $keswickres_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                    <!-- ====== LAKE SHASTA ====== -->
                    <div class="panel panel-default">
                      
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingTwelve" data-toggle="collapse" data-parent="#accordion-lakes" href="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>Lake shasta&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php $lakeshasta_closed_checkbox = get_post_meta(get_the_ID(), 'lakeshasta-closed-checkbox', true);
                            if(get_post_meta(get_the_ID(), 'lakeshasta-closed-checkbox', true) == '-danger') :?>
                              <span class="label label-default<?php echo $lakeshasta_closed_checkbox;?>"><?php echo $lakeshasta_closed_message; ?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $lakeshasta_checkbox_poor; ?>">Poor</span>
                              <span class="label label-default<?php echo $lakeshasta_checkbox_fair; ?>">Fair</span>
                              <span class="label label-default<?php echo $lakeshasta_checkbox_fairgood; ?>">Fair to Good</span>
                              <span class="label label-default<?php echo $lakeshasta_checkbox_good; ?>">Good</span>
                              <span class="label label-default<?php echo $lakeshasta_checkbox_great; ?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          </div>
                        </div>
                      </div>
                      
                      <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
                        <div class="report-panel">
                          <div id="lakeshastareport">
                            <div class="container-fluid">
                              <div class="row">
                                
                                <div class="col-sm-6">
                                  <h4>Lake Shasta Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Updated:&nbsp;</strong>
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $lakeshasta_updated; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  </h4>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><strong>Report:</strong>
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $lakeshasta_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $lakeshasta_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- ====== LEWISTON LAKE ====== -->
                    <div class="panel panel-default">
                      
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingThirteen" data-toggle="collapse" data-parent="#accordion-lakes" href="#collapseThirteen" aria-expanded="true" aria-controls="collapseThirteen">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>Lewiston Lake&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
                          </div>
                          <div class="col-sm-6">
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php $lewistonlake_closed_checkbox = get_post_meta(get_the_ID(), 'lewistonlake-closed-checkbox', true);
                            if(get_post_meta(get_the_ID(), 'lewistonlake-closed-checkbox', true) == '-danger') :?>
                              <span class="label label-default<?php echo $lewistonlake_closed_checkbox;?>"><?php echo $lewistonlake_closed_message; ?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $lewistonlake_checkbox_poor; ?>">Poor</span>
                              <span class="label label-default<?php echo $lewistonlake_checkbox_fair; ?>">Fair</span>
                              <span class="label label-default<?php echo $lewistonlake_checkbox_fairgood; ?>">Fair to Good</span>
                              <span class="label label-default<?php echo $lewistonlake_checkbox_good; ?>">Good</span>
                              <span class="label label-default<?php echo $lewistonlake_checkbox_great; ?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          </div>
                        </div>
                      </div>
                      
                      <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
                        <div class="report-panel">
                          <div id="lewistonlakereport">
                            <div class="container-fluid">
                              <div class="row">
                                
                                <div class="col-sm-6">
                                  <h4>Lewiston Lake Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Updated:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $lewistonlake_updated; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  
                                  </h4>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><strong>Report:</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $lewistonlake_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $lewistonlake_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- ====== MANZANITA LAKE ====== -->
                    <div class="panel panel-default">
                      
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingFourteen" data-toggle="collapse" data-parent="#accordion-lakes" href="#collapseFourteen" aria-expanded="true" aria-controls="collapseFourteen">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>Manzanita Lake&nbsp;<a name="lowersac"></a><span class="arrow-down">Extend</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php $manzanitalake_closed_checkbox = get_post_meta(get_the_ID(), 'manzanitalake-closed-checkbox', true);
                            if(get_post_meta(get_the_ID(), 'manzanitalake-closed-checkbox', true) == '-danger') :?>
                              <span class="label label-default<?php echo $manzanitalake_closed_checkbox;?>"><?php echo $manzanitalake_closed_message; ?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $manzanitalake_checkbox_poor; ?>">Poor</span>
                              <span class="label label-default<?php echo $manzanitalake_checkbox_fair; ?>">Fair</span>
                              <span class="label label-default<?php echo $manzanitalake_checkbox_fairgood; ?>">Fair to Good</span>
                              <span class="label label-default<?php echo $manzanitalake_checkbox_good; ?>">Good</span>
                              <span class="label label-default<?php echo $manzanitalake_checkbox_great; ?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          </div>
                        </div>
                      </div>
                      
                      
                      <div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourteen">
                        <div class="report-panel">
                          <div id="manzanitalakereport">
                            <div class="container-fluid">
                              <div class="row">
                                
                                <div class="col-sm-6">
                                  <h4>Manzanita Lake Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Updated:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $manzanitalake_updated; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  
                                  </h4>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><strong>Report:</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $manzanitalake_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $manzanitalake_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- ====== MCCLOUD RESERVOIR ====== -->
                    <div class="panel panel-default">
                      
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingFifteen" data-toggle="collapse" data-parent="#accordion-lakes" href="#collapseFifteen" aria-expanded="true" aria-controls="collapseFifteen">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>McCloud Reservoir&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php $mccloudreservoir_closed_checkbox = get_post_meta(get_the_ID(), 'mccloudreservoir-closed-checkbox', true);
                            if(get_post_meta(get_the_ID(), 'mccloudreservoir-closed-checkbox', true) == '-danger') :?>
                              <span class="label label-default<?php echo $mccloudreservoir_closed_checkbox;?>"><?php echo $mccloudreservoir_closed_message; ?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $mccloudreservoir_checkbox_poor; ?>">Poor</span>
                              <span class="label label-default<?php echo $mccloudreservoir_checkbox_fair; ?>">Fair</span>
                              <span class="label label-default<?php echo $mccloudreservoir_checkbox_fairgood; ?>">Fair to Good</span>
                              <span class="label label-default<?php echo $mccloudreservoir_checkbox_good; ?>">Good</span>
                              <span class="label label-default<?php echo $mccloudreservoir_checkbox_great; ?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          
                          </div>
                        </div>
                      </div>
                      
                      
                      <div id="collapseFifteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFifteen">
                        <div class="report-panel">
                          <div id="mccloudreservoirreport">
                            <div class="container-fluid">
                              <div class="row">
                                
                                <div class="col-sm-6">
                                  <h4>McCloud Reservoir Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Updated:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $mccloudreservoir_updated; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  </h4>
                                </div>
                              </div>
                            </div>
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><strong>Report:</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $mccloudreservoir_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $mccloudreservoir_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- ====== PYRAMID LAKE ====== -->
                    <div class="panel panel-default">
                      
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingThirtythree" data-toggle="collapse" data-parent="#accordion-lakes" href="#collapseThirtythree" aria-expanded="true" aria-controls="collapseThirtythree">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>PYRAMID LAKE&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php $pyramidlake_closed_checkbox = get_post_meta(get_the_ID(), 'pyramidlake-closed-checkbox', true);
                            if(get_post_meta(get_the_ID(), 'pyramidlake-closed-checkbox', true) == '-danger') :?>
                              <span class="label label-default<?php echo $pyramidlake_closed_checkbox;?>"><?php echo $pyramidlake_closed_message; ?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $pyramidlake_checkbox_poor; ?>">Poor</span>
                              <span class="label label-default<?php echo $pyramidlake_checkbox_fair;  ?>">Fair</span>
                              <span class="label label-default<?php echo $pyramidlake_checkbox_fairgood; ?>">Fair to Good</span>
                              <span class="label label-default<?php echo $pyramidlake_checkbox_good; ?>">Good</span>
                              <span class="label label-default<?php echo $pyramidlake_checkbox_great; ?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          </div>
                        </div>
                      </div>
                      
                      
                      <div id="collapseThirtythree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirtythree">
                        <div class="report-panel">
                          <div id="baumlakereport">
                            <div class="container-fluid">
                              <div class="row">
                                
                                <div class="col-sm-6">
                                  <h4>Pyramid Lake Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Updated:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $pyramidlake_updated; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  
                                  </h4>
                                </div>
                              </div>
                              <div class="row">
                                
                                <div class="col-sm-12">
                                  <p><strong>Report:</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $pyramidlake_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $pyramidlake_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- ====== PRIVATE WATERS ====== -->
            
            <div class="panel panel-default">
              <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseFour1">
                <img src="<?php echo $private_waters_image; ?>" alt="private waters" class="img-responsive center-block thumbnail">
                <h3>Expand All Private Waters Reports&nbsp;<span class="arrow-down"></span></h3>
              </div>
              <div id="collapseFour1" class="panel-collapse collapse">
                <div class="panel-body">
                  <div class="panel-group" id="accordion-private" role="tablist" aria-multiselectable="true">
                    
                    <!-- ====== ANTELOPE CREEK LODGE ====== -->
                    <div class="panel panel-default">
                      
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingSixteen" data-toggle="collapse" data-parent="#accordion-private" href="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>Antelope Creek Lodge&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php //$antelopecreek_closed_checkbox = get_post_meta(get_the_ID(), 'antelopecreek-closed-checkbox', true);
                            if(get_post_meta(get_the_ID(), 'antelopecreek-closed-checkbox', true) == '-danger') :?>
                              <span class="label label-default<?php echo $antelopecreek_closed_checkbox;?>"><?php echo $antelopecreek_closed_message; ?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $antelopecreek_checkbox_poor;?>">Poor</span>
                              <span class="label label-default<?php echo $antelopecreek_checkbox_fair;?>">Fair</span>
                              <span class="label label-default<?php echo $antelopecreek_checkbox_fairgood;?>">Fair to Good</span>
                              <span class="label label-default<?php echo $antelopecreek_checkbox_good;?>">Good</span>
                              <span class="label label-default<?php echo $antelopecreek_checkbox_great;?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          </div>
                        </div>
                      </div>
                      
                      <div id="collapseSixteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSixteen">
                        <div class="report-panel">
                          <div id="antelopecreekreport">
                            <div class="container-fluid">
                              <div class="row">
                                
                                <div class="col-sm-6">
                                  <h4>Antelope Creek Lodge Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Updated:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $antelopecreek_updated; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  </h4>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><strong>Report:</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $antelopecreek_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $antelopecreek_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- ====== BAILEY CREEK LODGE ====== -->
                    
                    
                    <!-- ====== BATTLE CREEK RANCH ====== -->
                    <div class="panel panel-default">
                      
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingEighteen" data-toggle="collapse" data-parent="#accordion-private" href="#collapseEighteen" aria-expanded="true" aria-controls="collapseEighteen">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>Battle Creek&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php //$battlecreek_closed_checkbox = get_post_meta(get_the_ID(), 'battlecreek-closed-checkbox', true);
                            if(get_post_meta(get_the_ID(), 'battlecreek-closed-checkbox', true) == '-danger') :?>
                              <span class="label label-default<?php echo $battlecreek_closed_checkbox;?>"><?php echo $battlecreek_closed_message; ?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $battlecreek_checkbox_poor;?>">Poor</span>
                              <span class="label label-default<?php echo $battlecreek_checkbox_fair;?>">Fair</span>
                              <span class="label label-default<?php echo $battlecreek_checkbox_fairgood;?>">Fair to Good</span>
                              <span class="label label-default<?php echo $battlecreek_checkbox_good;?>">Good</span>
                              <span class="label label-default<?php echo $battlecreek_checkbox_great;?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          </div>
                        </div>
                      </div>
                      
                      <div id="collapseEighteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEighteen">
                        <div class="report-panel">
                          <div id="battlecreekreport">
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-sm-6">
                                  <h4>Battle Creek Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Updated:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $battlecreek_updated; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  
                                  </h4>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><strong>Report:</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $battlecreek_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $battlecreek_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- ====== BOLLIBOKKA FISHING CLUB ====== -->
                    <div class="panel panel-default">
                      
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingNineteen" data-toggle="collapse" data-parent="#accordion-private" href="#collapseNineteen" aria-expanded="true" aria-controls="collapseNineteen">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>Bollibokka&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php $bollibokka_closed_checkbox = get_post_meta(get_the_ID(), 'bollibokka-closed-checkbox', true);
                            if(get_post_meta(get_the_ID(), 'bollibokka-closed-checkbox', true) == '-danger') :?>
                              <span class="label label-default<?php echo $bollibokka_closed_checkbox;?>"><?php echo $bollibokka_closed_message; ?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $bollibokka_checkbox_poor; ?>">Poor</span>
                              <span class="label label-default<?php echo $bollibokka_checkbox_fair; ?>">Fair</span>
                              <span class="label label-default<?php echo $bollibokka_checkbox_fairgood; ?>">Fair to Good</span>
                              <span class="label label-default<?php echo $bollibokka_checkbox_good; ?>">Good</span>
                              <span class="label label-default<?php echo $bollibokka_checkbox_great; ?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          
                          </div>
                        </div>
                      </div>
                      
                      
                      <div id="collapseNineteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNineteen">
                        <div class="report-panel">
                          <div id="bollibokkareport">
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-sm-6">
                                  <h4>Bollibokka Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Updated:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $bollibokka_updated; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  
                                  </h4>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><strong>Report:</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $bollibokka_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $bollibokka_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- ====== CIRCLE SEVEN GUEST RANCH ====== -->
                    <div class="panel panel-default">
                      
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingTwentynine" data-toggle="collapse" data-parent="#accordion-rivers" href="#collapseTwentynine" aria-expanded="false" aria-controls="collapseTwentynine">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>Circle Seven&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php $circle7_closed_checkbox = get_post_meta(get_the_ID(), 'circle7-closed-checkbox', true);
                            if(get_post_meta(get_the_ID(), 'circle7-closed-checkbox', true) == '-danger') :?>
                              <span class="label label-default<?php echo $circle7_closed_checkbox;?>"><?php echo $circle7_closed_message; ?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $circle7_checkbox_poor; ?>">Poor</span>
                              <span class="label label-default<?php echo $circle7_checkbox_fair; ?>">Fair</span>
                              <span class="label label-default<?php echo $circle7_checkbox_fairgood; ?>">Fair to Good</span>
                              <span class="label label-default<?php echo $circle7_checkbox_good; ?>">Good</span>
                              <span class="label label-default<?php echo $circle7_checkbox_great; ?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          
                          </div>
                        </div>
                      </div>
                      
                      
                      <div id="collapseTwentynine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentynine">
                        <div class="report-panel">
                          <div id="circlesevenreport">
                            <div class="container-fluid">
                              <div class="row">
                                
                                <div class="col-sm-6">
                                  <h4>Circle Seven Guest Ranch Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Updated:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $bollibokka_updated; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  </h4>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><strong>Report:</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $bollibokka_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $bollibokka_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- ====== CLEAR CREEK RANCH ====== -->
                    <div class="panel panel-default">
                      
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingTwenty" data-toggle="collapse" data-parent="#accordion-private" href="#collapseTwenty" aria-expanded="true" aria-controls="collapseTwenty">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>Clear Creek Ranch&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php $clearcreek_closed_checkbox = get_post_meta(get_the_ID(), 'clearcreek-closed-checkbox', true);
                            if(get_post_meta(get_the_ID(), 'clearcreek-closed-checkbox', true) == '-danger') :?>
                              <span class="label label-default<?php echo $clearcreek_closed_checkbox; ?>"><?php echo $clearcreek_closed_message; ?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $clearcreek_checkbox_poor; ?>">Poor</span>
                              <span class="label label-default<?php echo $clearcreek_checkbox_fair; ?>">Fair</span>
                              <span class="label label-default<?php echo $clearcreek_checkbox_fairgood; ?>">Fair to Good</span>
                              <span class="label label-default<?php echo $clearcreek_checkbox_good; ?>">Good</span>
                              <span class="label label-default<?php echo $clearcreek_checkbox_great; ?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          </div>
                        </div>
                      </div>
                      
                      
                      <div id="collapseTwenty" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwenty">
                        <div id="clearcreekreport">
                          <div class="report-panel">
                            <div class="container-fluid">
                              <div class="row">
                                
                                <div class="col-sm-6">
                                  <h4>Clear Creek Ranch Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Updated:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $clearcreek_updated; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  
                                  </h4>
                                </div>
                              </div>
                            </div>
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><strong>Report:</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $clearcreek_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $clearcreek_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- ====== GOLD RIVER ====== -->
                    <div class="panel panel-default">
                      
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingTwentyeight" data-toggle="collapse" data-parent="#accordion-rivers" href="#collapseTwentyeight" aria-expanded="false" aria-controls="collapseTwentyeight">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>Gold River Lodge&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php //$goldriver_closed_checkbox = get_post_meta(get_the_ID(), 'goldriver-closed-checkbox', true);
                            if(get_post_meta(get_the_ID(), 'goldriver-closed-checkbox', true) == '-danger'):?>
                              <span class="label label-default<?php echo $goldriver_closed_checkbox; ?>"><?php echo $goldriver_closed_message;?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $goldriver_checkbox_poor; ?>">Poor</span>
                              <span class="label label-default<?php echo $goldriver_checkbox_fair; ?>">Fair</span>
                              <span class="label label-default<?php echo $goldriver_checkbox_fairgood; ?>">Fair to Good</span>
                              <span class="label label-default<?php echo $goldriver_checkbox_good; ?>">Good</span>
                              <span class="label label-default<?php echo $goldriver_checkbox_great; ?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          
                          </div>
                        </div>
                      </div>
                      
                      
                      <div id="collapseTwentyeight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentyeight">
                        <div class="report-panel">
                          <div id="goldriverreport">
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-sm-6">
                                  <h4>Gold River Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Updated:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $goldriver_updated; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  
                                  </h4>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><strong>Report:</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $goldriver_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $goldriver_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- ====== HAT CREEK RANCH ====== -->
                   <!-- <div class="panel panel-default">
                      
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingTwentyone" data-toggle="collapse" data-parent="#accordion-private" href="#collapseTwentyone" aria-expanded="true" aria-controls="collapseTwentyone">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>Hat Creek Ranch&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            
                             === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating ===
                             $hatcreekranch_closed_checkbox = get_post_meta(get_the_ID(), 'hatcreekranch-closed-checkbox', true);
                            if(get_post_meta(get_the_ID(), 'hatcreekranch-closed-checkbox', true) == '-danger'):
                              <span class="label label-default echo $hatcreekranch_closed_checkbox;"> echo $hatcreekranch_closed_message; </span>
                             else:
                              <span class="label label-default echo $hatcreekranch_checkbox_poor; ">Poor</span>
                              <span class="label label-default echo $hatcreekranch_checkbox_fair; ">Fair</span>
                              <span class="label label-default echo $hatcreekranch_checkbox_fairgood; ">Fair to Good</span>
                              <span class="label label-default echo $hatcreekranch_checkbox_good; ">Good</span>
                              <span class="label label-default echo $hatcreekranch_checkbox_great; ">Great</span>
                             endif;
                            
                             === END EDIT SECTION ===
                          
                          
                          </div>
                        </div>
                      </div>
                      
                      
                      <div id="collapseTwentyone" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentyone">
                        <div class="report-panel">
                          <div id="hatcreekranchreport">
                            <div class="container-fluid">
                              <div class="row">
                                
                                <div class="col-sm-6">
                                  <h4>Hat Creek Ranch Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Updated:&nbsp;</strong>
                                    
                                    
                                     === BEGIN EDIT SECTION: DATE ===
                                    
                                     echo $hatcreekranch_updated;
                                    
                                     === END EDIT SECTION: DATE ===
                                  
                                  </h4>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><strong>Report:</strong>
                                    
                                    
                                     === BEGIN EDIT SECTION: REPORT ===
                                    
                                     echo $hatcreekranch_report;
                                    
                                     === END EDIT SECTION: REPORT ===
                                  
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                     === BEGIN EDIT SECTION: HOT FLIES ===
                                    
                                     echo $hatcreekranch_hot_flies;
                                    
                                     === END EDIT SECTION: HOT FLIES ===
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> -->
                    
                    <!-- ====== LUK LAKE ====== -->
                    <div class="panel panel-default">
                      
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingTwentythree" data-toggle="collapse" data-parent="#accordion-private" href="#collapseTwentythree" aria-expanded="true" aria-controls="collapseTwentythree">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>Luk Lake&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php //$luklake_closed_checkbox = get_post_meta(get_the_ID(), 'luklake-closed-checkbox', true);
                            if(get_post_meta(get_the_ID(), 'luklake-closed-checkbox', true) == '-danger'):?>
                              <span class="label label-default<?php echo $luklake_closed_checkbox;?>"><?php echo $luklake_closed_message; ?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $luklake_checkbox_poor; ?>">Poor</span>
                              <span class="label label-default<?php echo $luklake_checkbox_fair; ?>">Fair</span>
                              <span class="label label-default<?php echo $luklake_checkbox_fairgood; ?>">Fair to Good</span>
                              <span class="label label-default<?php echo $luklake_checkbox_good; ?>">Good</span>
                              <span class="label label-default<?php echo $luklake_checkbox_great; ?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          
                          </div>
                        </div>
                      </div>
                      
                      
                      <div id="collapseTwentythree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentythree">
                        <div class="report-panel">
                          <div id="luklakereport">
                            <div class="container-fluid">
                              <div class="row">
                                
                                <div class="col-sm-6">
                                  <h4>Luk Lake Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Updated:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $luklake_updated; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  
                                  </h4>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><strong>Report:</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $luklake_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $luklake_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- ====== OASIS SPRINGS ====== -->
                    <div class="panel panel-default">
                      
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingTwentyseven" data-toggle="collapse" data-parent="#accordion-private" href="#collapseTwentyseven" aria-expanded="false" aria-controls="collapseTwentyseven">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>Oasis Springs&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php if(get_post_meta(get_the_ID(), 'oasissprings-closed-checkbox', true) == '-danger'):?>
                              <span class="label label-default<?php echo $oasissprings_closed_checkbox; ?>"><?php echo $oasissprings_closed_message; ?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $oasissprings_checkbox_poor; ?>">Poor</span>
                              <span class="label label-default<?php echo $oasissprings_checkbox_fair; ?>">Fair</span>
                              <span class="label label-default<?php echo $oasissprings_checkbox_fairgood; ?>">Fair to Good</span>
                              <span class="label label-default<?php echo $oasissprings_checkbox_good; ?>">Good</span>
                              <span class="label label-default<?php echo $oasissprings_checkbox_great; ?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          </div>
                        </div>
                      </div>
                      
                      <div id="collapseTwentyseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentyseven">
                        <div class="report-panel">
                          <div id="oasisspringsreport">
                            <div class="container-fluid">
                              <div class="row">
                                
                                <div class="col-sm-6">
                                  <h4>Oasis Springs Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Updated:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $oasissprings_updated; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  
                                  </h4>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><strong>Report:</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $oasissprings_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $oasissprings_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- ====== PEDROTTI PONDS ====== -->
                    
                    <!-- ====== ROCK CREEK LAKE ====== -->
                    <div class="panel panel-default">
                      
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingTwentyfour" data-toggle="collapse" data-parent="#accordion-private" href="#collapseTwentyfour" aria-expanded="true" aria-controls="collapseTwentyfour">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>Rock Creek Lake&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php if(get_post_meta(get_the_ID(), 'rockcreek-closed-checkbox', true) == '-danger'):?>
                              <span class="label label-default<?php echo $rockcreek_closed_checkbox; ?>"><?php echo $rockcreek_closed_message; ?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $rockcreek_checkbox_poor; ?>">Poor</span>
                              <span class="label label-default<?php echo $rockcreek_checkbox_fair; ?>">Fair</span>
                              <span class="label label-default<?php echo $rockcreek_checkbox_fairgood; ?>">Fair to Good</span>
                              <span class="label label-default<?php echo $rockcreek_checkbox_good; ?>">Good</span>
                              <span class="label label-default<?php echo $rockcreek_checkbox_great; ?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          </div>
                        </div>
                      </div>
                      
                      <div id="collapseTwentyfour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentyfour">
                        <div class="report-panel">
                          <div id="rockcreeklakereport">
                            <div class="container-fluid">
                              <div class="row">
                                
                                <div class="col-sm-6">
                                  <h4>Rock Creek Lake Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Updated:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $rockcreek_updated; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  
                                  </h4>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><strong>Report:</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $rockcreek_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $rockcreek_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- ====== SPINNER FALL LODGE ====== -->
                    
                    <!-- ====== SUGAR CREEK RANCH ====== -->
                    <div class="panel panel-default">
                      
                      <div class="panel-heading accordion-toggle collapsed" role="tab" id="headingThirtyone" data-toggle="collapse" data-parent="#accordion-private" href="#collapseThirtyone" aria-expanded="true" aria-controls="collapseThirtyone">
                        <div class="row">
                          
                          <div class="col-sm-6">
                            <h4>Sugar Creek&nbsp;<a name="sugarcreek"></a><span class="arrow-down">Expand</span></h4>
                          </div>
                          
                          <div class="col-sm-6">
                            
                            <!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
                            <?php if(get_post_meta(get_the_ID(), 'sugarcreek-closed-checkbox', true) == '-danger'):?>
                              <span class="label label-default<?php echo $sugarcreek_closed_checkbox;?>"><?php echo $sugarcreek_closed_message;?></span>
                            <?php else: ?>
                              <span class="label label-default<?php echo $sugarcreek_checkbox_poor; ?>">Poor</span>
                              <span class="label label-default<?php echo $sugarcreek_checkbox_fair; ?>">Fair</span>
                              <span class="label label-default<?php echo $sugarcreek_checkbox_fairgood; ?>">Fair to Good</span>
                              <span class="label label-default<?php echo $sugarcreek_checkbox_good; ?>">Good</span>
                              <span class="label label-default<?php echo $sugarcreek_checkbox_great; ?>">Great</span>
                            <?php endif; ?>
                            
                            <!-- === END EDIT SECTION === -->
                          
                          </div>
                        </div>
                      </div>
                      
                      <div id="collapseThirtyone" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirtyone">
                        <div class="report-panel">
                          <div id="sugarcreekranchreport">
                            <div class="container-fluid">
                              <div class="row">
                                
                                <div class="col-sm-6">
                                  <h4>Sugar Creek Ranch Report</h4>
                                </div>
                                
                                <div class="col-sm-6">
                                  <h4><strong>Updated:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: DATE === -->
                                    
                                    <?php echo $sugarcreek_updated; ?>
                                    
                                    <!-- === END EDIT SECTION: DATE === -->
                                  
                                  
                                  </h4>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><strong>Report:</strong>
                                    
                                    <!-- === BEGIN EDIT SECTION: REPORT === -->
                                    
                                    <?php echo $sugarcreek_report; ?>
                                    
                                    <!-- === END EDIT SECTION: REPORT === -->
                                  
                                  </p>
                                  
                                  <p><strong>Hot Flies:&nbsp;</strong>
                                    
                                    
                                    <!-- === BEGIN EDIT SECTION: HOT FLIES === -->
                                    
                                    <?php echo $sugarcreek_hot_flies; ?>
                                    
                                    <!-- === END EDIT SECTION: HOT FLIES === -->
                                  
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </article>
  </div>
  <!-- /.clearfix -->
  
  <!-- CTA -->
  <section id="cta" class="wrapper style4">
    <div class="inner">
      <header class="text-center">
        <h2 class="h2"><?php _e($cta_streamReport_intro ); ?></h2>
        <p class="lead text-center text-justify"><?php echo $cta_streamReport_content; ?></p>
      </header>
    </div>
  </section>

<?php get_footer('streamreport');
