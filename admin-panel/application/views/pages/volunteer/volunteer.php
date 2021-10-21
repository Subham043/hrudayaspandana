<!DOCTYPE html>
<html>

   <head>
      <title><?php echo $title ?></title>
      <meta charset="UTF-8">
      <meta name="description" content="Free Web tutorials">
      <meta name="keywords" content="HTML,CSS,XML,JavaScript">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="<?php echo base_url()?>assets/fonts/css/all.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/materialize.min.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/dataTable/datatables.min.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/dataTable/button/css/buttons.dataTables.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
      
      <style type="text/css">
         .dash-list a .list-dashboard{transition: 0.5s}
         .dash-list a:hover .list-dashboard{transform: scale(1.1);background: #f3f3f3 !important}
         .super{background-color:  #827717; color:  #fff ; padding: 6px 7px; }
         .sub{background-color:  #a1887f; color:  #fff ; padding: 6px 7px; }
         .notactive{background-color: #1565c0 ;color:  #fff ; padding: 6px 7px; } 
         .isactive{background-color: #2e7d32  ;color:  #fff ; padding: 6px 11px; } 
       </style>
   </head>
   <body>
      <!-- headder -->
         <div id="header-include">
           <?php $this->load->view('include/header.php'); ?>
         </div>
      <!-- end headder -->
      <!-- main layout -->
      <section class="sec-top">
         <div class="container-wrap">
            <div class="row">
              <!-- menu  -->

              <div id="sidemenu-include">
                <?php $this->load->view('include/menu.php'); ?>
              </div>


               <div class="col m12 s12 l9">
                  <div class="main-bar">
                     <br>
                    <div class="row">
                                <div class="col 12 m6">
                                    <p class="h5-para black-text m0">Volunteers</p>
                                </div>
                                
                            </div>

                     
                     <!-- end dash -->
                     

                     <!-- chart-table -->
                     <!-- shorting -->
                     <div class="shorting-table">
                        <div>
                           <div class="col l12 m12 s12">
                              <div class="">
                                 <p class="h5-para-p2">Manage Enquiries </p>
                                <table id="dynamic" class="striped">
                                    <thead>
                                       <tr class="tt">
                                          <th id="a" class="h5-para-p2" width="130px">Sl No.</th>
                                          <th id="g" class="h5-para-p2" width="62px">Action</th>
                                          <th id="b" class="h5-para-p2" width="100px">Name</th>
                                          <th id="b" class="h5-para-p2" width="100px">Email</th>
                                          <th id="b" class="h5-para-p2" width="100px">Phone</th>
                                          <th id="b" class="h5-para-p2" width="100px">Aadhaar</th>
                                          <th id="b" class="h5-para-p2" width="100px">User Status</th>
                                         
                                       </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    if (!empty($result)) {
                                        $count = 0;
                                      foreach ($result as $key => $value) { $count = $count+1;
                                      ?>
                                      <tr>
                                      <td ><?php echo (!empty($result))?$count:'---'  ?></td>
                                      <td class="action-btn  center-align">
                                        <!-- view user -->
                                        <a href="<?php echo base_url('volunteer/view/'.$this->encryption_url->safe_b64encode($value->id).'') ?>"  class="blue hoverable"><i class="far fa-eye "></i></i></a>
                                        <!-- view user -->
                                      </td>
                                      <td ><?php echo (!empty($value->fname))?$value->fname.' '.$value->lname:'---' ; ?></td>
                                      <td ><?php echo (!empty($value->email))?$value->email:'---' ; ?></td>
                                      <td ><?php echo (!empty($value->phone))?$value->phone:'---' ; ?></td>
                                      <td ><?php echo (!empty($value->aadhaar))?$value->aadhaar:'---' ; ?></td>
                                      <td><?php echo $value->user_id!=null?'<p class="status green darken-2">Registered</p>':'<p class="status red darken-2">Not Registered</p>' ; ?>
                                                    </td>
                                        </tr>
                                    <?php } } ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- end footer -->
      <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url()?>assets/js/materialize.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url()?>assets/js/script.js"></script>
      <script type="text/javascript" src="<?php echo base_url()?>assets/js/chart.min.js"></script>
      <!-- data table -->
      <script type="text/javascript" src="<?php echo base_url()?>assets/dataTable/datatables.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url()?>assets/dataTable/button/js/dataTables.buttons.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url()?>assets/dataTable/button/js/buttons.flash.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url()?>assets/dataTable/button/js/buttons.html5.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url()?>assets/dataTable/button/js/pdfmake.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url()?>assets/dataTable/button/js/vfs_fonts.js"></script>
       <script>
  <?php $this->load->view('include/message.php'); ?>
    
  </script>

      <script>
          $(document).ready( function () {
              $('table').DataTable({
                  dom: 'Bfrtip',
                  buttons: [
                      'copy', 'csv', 'excel', 'pdf'
                  ], 
              });
              $('select').formSelect();
          } );
      </script>
      
</body>
</html>
