  <?php require_once('inc/top.php'); ?>

  <body>
   
    <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">Md Shahid</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a style="color:white" class="nav-link" href="#"><i class="fa fa-plus-square"></i> Add Post </a>
          </li>
          <li class="nav-item">
            <a style="color:white" class="nav-link" href="#"><i class="fa fa-user-plus"></i> Add User</a>
          </li>
          <li class="nav-item">
            <a style="color:white" class="nav-link" href="#"><i class="fa fa-user"></i> Profile</a>
          </li>
          <li class="nav-item">
            <a style="color:white" class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
          </li>
        </ul>
       
      </div>
    </nav>

         <div id="dashboard" style="padding-top:10px;" class="container-fluid">
             <div class="row">
                 <div class="col-md-3">
                        <div class="list-group">
                                <a href="Index1.php" class="list-group-item list-group-item-action active">
                                       <i class="fa fa-tachometer"></i> Dashboard</a>
                                <a href="#" class="list-group-item list-group-item-action ">
                                 <i class="fa fa-file-text-o"></i> All Post <span class="badge">(14)</span>
                                </a>
                                <a href="Catagories.php" class="list-group-item list-group-item-action"><i class="fa fa-folder-open"></i> Catagories <span class="badge"> (14)</span></a>
                                <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-comment"></i> Comments <span class="badge">(14)</span></a>
                                <a href="Users.php" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> User <span class="badge">(14)</span></a>
                                
                          </div>
                 </div>
                 <div class="col-md-9">
                     <h1><i class="fa fa-tachometer"></i> Dashboard <small> Statistics Overview</small></h1><hr/>
                     <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item active" aria-current="page"><i class=" fa fa-tachometer"></i> Dashboard</li>
                            </ol>
                          </nav>
                          <div class="row tag-boxes">
                              <!--Start of comment box-->
                              <div class="col-md-6 col-lg-3">
                                  <div class="panel panel-primary">
                                      <div class="panel-heading">
                                           <div class="row">
                                               <div class="col-xs-3">
                                                   <i style="margin:20px;color:white;" class="fa fa-comments fa-5x"></i>

                                               </div>
                                           
                                          <div class="col-xs-9">
                                              <div class="text-right huge">11</div>
                                              <div class="text-right">New Comments</div>
                                          </div>
                                          </div>
                                      </div>
                                      <a href="#">
                                          <div class="panel-footer">
                                              <span style="padding-left:10px;" class="pull-left">View All Comments</span>
                                              <span style="padding-right:10px;"class="pull-right"><i class="fa fa-arrow-circle-right"></i> </span>
                                               <div class="clearfix"></div>
                                          </div>
                                      </a>
                                  </div>
                              </div>
                              <!--End of commment box-->

                              <!--start of Post box-->
                              <div class="col-md-6 col-lg-3">
                                    <div class="panel panel-red">
                                        <div class="panel-heading">
                                             <div class="row">
                                                 <div class="col-xs-3">
                                                     <i style="margin:20px;color:white;" class="fa fa-file-text fa-5x"></i>
  
                                                 </div>
                                             
                                            <div class="col-xs-9">
                                                <div class="text-right huge">11</div>
                                                <div class="text-right">All Post</div>
                                            </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                            <div class="panel-footer">
                                                <span style="padding-left:10px;" class="pull-left">View All Post</span>
                                                <span style="padding-right:10px;"class="pull-right"><i class="fa fa-arrow-circle-right"></i> </span>
                                                 <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                 <!--End of Post box-->
                                 <!--Start of Users box-->
                              <div class="col-md-6 col-lg-3">
                                    <div class="panel panel-green">
                                        <div class="panel-heading">
                                             <div class="row">
                                                 <div class="col-xs-3">
                                                     <i style="margin:20px;color:white;" class="fa fa-users fa-5x"></i>
  
                                                 </div>
                                             
                                            <div class="col-xs-9">
                                                <div class="text-right huge">11</div>
                                                <div class="text-right">Users</div>
                                            </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                            <div class="panel-footer">
                                                <span style="padding-left:10px;" class="pull-left">View All Users</span>
                                                <span style="padding-right:10px;"class="pull-right"><i class="fa fa-arrow-circle-right"></i> </span>
                                                 <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!--End of Users box-->
                                 <!--Start of Catagories box-->
                              <div class="col-md-6 col-lg-3">
                                    <div class="panel panel-yellow">
                                        <div class="panel-heading">
                                             <div class="row">
                                                 <div class="col-xs-3">
                                                     <i style="margin:20px;color:white;" class="fa fa-folder-open fa-5x"></i>
  
                                                 </div>
                                             
                                            <div class="col-xs-9">
                                                <div class="text-right huge">11</div>
                                                <div class="text-right">All Catagories</div>
                                            </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                            <div class="panel-footer">
                                                <span style="padding-left:10px;" class="pull-left">View All Catagories</span>
                                                <span style="padding-right:10px;"class="pull-right"><i class="fa fa-arrow-circle-right"></i> </span>
                                                 <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!--End of catagories box-->
                          </div>
                          <hr>
                          <h3>New Users</h3>
                          <table class="table table-hover">
                              <thead>
                                  <tr>
                                      <th>Sl #</th>
                                      <th>Date</th>
                                      <th>Name</th>
                                      <th>Username</th>
                                      <th>Role</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td>20 March 2018</td>
                                      <td>Md shahid</td>
                                      <td>dshahid380</td>
                                      <td>Admin</td>
                                  </tr>
                                  <tr>
                                        <td>1</td>
                                        <td>20 March 2018</td>
                                        <td>Md shahid</td>
                                        <td>dshahid380</td>
                                        <td>Admin</td>
                                    </tr>
                                    <tr>
                                            <td>1</td>
                                            <td>20 March 2018</td>
                                            <td>Md shahid</td>
                                            <td>dshhid380</td>
                                            <td>Admin</td>
                                     </tr>
                                        <tr>
                                                <td>1</td>
                                                <td>20 March 2018</td>
                                                <td>Md shahid</td>
                                                <td>dshahid380</td>
                                                <td>Admin</td>
                                            </tr>
                                            <tr>
                                                    <td>1</td>
                                                    <td>20 March 2018</td>
                                                    <td>Md shahid</td>
                                                    <td>dshahid380</td>
                                                    <td>Admin</td>
                                                </tr>
                              </tbody>
                          </table>
                         <a href="#" class="btn btn-primary">View All Users</a> 
                         <hr/>
                         <h3>New Posts</h3>
                         <table class="table table-hover">
                             <thead>
                                 <tr>
                                     <th>Sl #</th>
                                     <th>Date</th>
                                     <th>Post Title</th>
                                     <th>Catagory</th>
                                     <th>Views</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>1</td>
                                     <td>18 March 2018</td>
                                     <td>Googole is ruling the world in the field of Internet.</td>
                                     <td>Tech News</td>
                                     <td><i class="fa fa-eye"></i> 28</td>
                                 </tr>
                                 <tr>
                                        <td>1</td>
                                        <td>18 March 2018</td>
                                        <td>Googole is ruling the world in the field of Internet.</td>
                                        <td>Tech News</td>
                                        <td><i class="fa fa-eye"></i> 28</td>
                                    </tr>
                                    <tr>
                                            <td>1</td>
                                            <td>18 March 2018</td>
                                            <td>Googole is ruling the world in the field of Internet.</td>
                                            <td>Tech News</td>
                                            <td><i class="fa fa-eye"></i> 28</td>
                                     </tr>
                                     <tr>
                                            <td>1</td>
                                            <td>18 March 2018</td>
                                            <td>Googole is ruling the world in the field of Internet.</td>
                                            <td>Tech News</td>
                                            <td><i class="fa fa-eye"></i> 28</td>
                                        </tr>
                                        <tr>
                                                <td>1</td>
                                                <td>18 March 2018</td>
                                                <td>Googole is ruling the world in the field of Internet.</td>
                                                <td>Tech News</td>
                                                <td><i class="fa fa-eye"></i> 28</td>
                                            </tr>    
                             </tbody>
                         </table>
                     <a href="#" Class="btn btn-primary">View All Users</a><hr/>
                 </div>
             </div>
         </div>

  </body>
</html>
