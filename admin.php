<?php include_once('templates/head.php');?>
<?php include_once('templates/header.php');?>
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <div class="row">
        <div class="col-md-12">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="linkedin_vanessa_pic.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Vanessa Ogbuehi</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div> 
          <!-- search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
          </ul>
          <div class="introduction" align="center">
            <p>Welcome to the Andela Dashboard, a small sample page showing you what an internal dashboard for a student and employee management system might look like. Built in HTML, CSS, JS, PHP, SQL</p>
            <p>Go ahead and check out the code for this project on Github, or go to my personal site for more projects!</p>
            <a href="https://github.com/VanessaO/andela-dash"><i class="fa fa-github fa-3x" aria-hidden="true"></i></a>
            <a href="http://vanessao.me/"><i class="fa fa-globe fa-3x" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small>Overview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Admin Overview</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="index.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="adminUsername">Username</label>
                  <input type="text" class="form-control" id="admin-username" placeholder="Enter Username" name="username">
                </div>
                <div class="form-group">
                  <label for="adminFirstName">First Name</label>
                  <input type="text" class="form-control" id="admin-firstname" placeholder="Enter First Name" name="first_name">
                </div>
                <div class="form-group">
                  <label for="adminLastName">Last Name</label>
                  <input type="text" class="form-control" id="admin-lastname" placeholder="Enter Last Name" name="last_name">
                </div>
                <div class="form-group">
                  <label for="adminEmail">Email address</label>
                  <input type="email" class="form-control" id="admin-Email" placeholder="Enter Email" name="email">
                </div>
                <div class="form-group">
                  <label for="adminCountry">Country</label>
                  <input type="text" class="form-control" id="admin-country" placeholder="Enter Country" name="country">
                </div>
                <div class="form-group">
                  <label for="adminCity">City</label>
                  <input type="text" class="form-control" id="admin-city" placeholder="Enter City" name="city">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!--right column-->
        <div class="col-md-6">
          <canvas id="countryChart" height="350" width="510"></canvas>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Admins</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Country</th>
                  <th>City</th>
                </tr>
                </thead>
                <tbody>
                  <?php include_once('config.php');
                    $admin_sql = 'SELECT * FROM admin';
                    $result = mysqli_query($con,$admin_sql);
                    $count = 0;
                    while($row = mysqli_fetch_assoc($result)){
                      $count++;
                  ?>
                  <tr>
                    <td> <?php echo $count; ?> </td>
                    <td> <?php echo $row['Username']; ?> </td>
                    <td> <?php echo $row['First_Name']; ?> </td>
                    <td> <?php echo $row['Last_Name']; ?> </td>
                    <td> <?php echo $row['Email']; ?> </td>
                    <td> <?php echo $row['Country']; ?> </td>
                    <td> <?php echo $row['City']; ?> </td>
                  </tr>
                  <?php
                  }
                  ?>
                </tbody>
                <tfoot>

                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Based on <a href="http://almsaeedstudio.com">AdminLTE</a> template.  Made with <span class="heart">&hearts;</span> by Vanessa Ogbuehi</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="dist/js/app.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- ChartJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });

  $.ajax({
    type: 'POST',
    url: 'country.php',
    success: function(data) {
      //console.log(data);
      pieChartData = data; //alert(JSON.stringify(data));
    
      var ctx = document.getElementById("countryChart").getContext('2d');
      var myChart = new Chart(ctx, {  
       "type":"pie",
       "data":{  
          "labels":[  
             "United States",
             "France",
             "Nigeria",
             "Ghana",
             "Other"
          ],
          "datasets":[  
             {  
                "data":[  
                   "1",
                   "1",
                   "1",
                   "1",
                   "1"
                ],
                "backgroundColor":[  
                   "#5AD3D1",
                   "#FF6384",
                   "#36A2EB",
                   "#FFCE56"
                ],
                "hoverBackgroundColor":[  
                   "#5AD3D1",
                   "#FF6384",
                   "#36A2EB",
                   "#FFCE56"
                ]
             }
          ]
       },
       "options":{  
          "responsive":false
       }
    }
    );
    }
  });
</script>
<?php include_once('footer.php');?>
