 <?php require_once('inc/top.php');  ?>
  <body>
   <div>
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
                     <h1><i class="fa fa-tachometer"></i> Users <small>View All Users</small></h1><hr/>
                     <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item active" aria-current="page"><a href="Index1.html"><i class=" fa fa-tachometer"></i> Dashboard </a></li>
                              <li class="breadcrumb-item active" aria-current="page"><i class=" fa fa-tachometer"></i> Users</li>
                            </ol>
                          </nav>
                          <div class="row">
                              <div class="col-sm-8">
                                  <form action="">
                                      <div class="col-xs-4">
                                          <div class="form-group">
                                              <select name="" id="" class="form-control">
                                              <option value="delete">Delete</option>
                                              <option value="author">Changed to Author</option>
                                              <option value="admin">Changed to Admin</option></select>
                                          </div>

                                      </div>
                                      <div class="col-xs-8">
                                          <input type="submit" class="btn btn-primary" value="Apply">
                                          <a href="#" class="btn btn-primary"> Add New</a>
                                      </div>
                                  </form>
                              </div>
                          </div>
                          <!--End of row-->
                          <!--Start of table-->
                     <hr>
                     <table class="table table-hover table-striped">
                         <thead>
                             <tr>
                                <th> <input type="checkbox"></th>
                                 <th>Sl</th>
                                 <th>Date</th>
                                 <th>Name</th>
                                 <th>Username</th>
                                 <th>Email</th>
                                 <th>Image</th>
                                 <th>Password</th>
                                 <th>Role</th>
                                 <th>Posts</th>
                                 <th>Edit</th>
                                 <th>Del</th>
                             </tr>
                         </thead>
                         <tr>
                             <td><input type="checkbox"></td>
                             <td>1</td>
                             <td>23 Mar 2018</td>
                             <td>Md Shahid</td>
                             <td>dshahid</td>
                             <td>dshahid3805@gamil.com</td>
                             <td><img src="img/profile_pic1.jpg" width="30px"></td>
                             <td>shahid380</td>
                             <td>Admin</td>
                             <td>11</td>
                             <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                             <td> <a href="#"><i class="fa fa-times"></i></a></td>
                         </tr>
                         <tr>
                                <td><input type="checkbox"></td>
                                <td>1</td>
                                <td>23 Mar 2018</td>
                                <td>Md Shahid</td>
                                <td>dshahid</td>
                                <td>dshahid3805@gamil.com</td>
                                <td><img src="img/profile_pic1.jpg" width="30px"></td>
                                <td>shahid380</td>
                                <td>Admin</td>
                                <td>11</td>
                                <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                                <td> <a href="#"><i class="fa fa-times"></i></a></td>
                            </tr>
                            <tr>
                                    <td><input type="checkbox"></td>
                                    <td>1</td>
                                    <td>23 Mar 2018</td>
                                    <td>Md Shahid</td>
                                    <td>dshahid</td>
                                    <td>dshahid3805@gamil.com</td>
                                    <td><img src="img/profile_pic1.jpg" width="30px"></td>
                                    <td>shahid380</td>
                                    <td>Admin</td>
                                    <td>11</td>
                                    <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                                    <td> <a href="#"><i class="fa fa-times"></i></a></td>
                                </tr>
                                <tr>
                                        <td><input type="checkbox"></td>
                                        <td>1</td>
                                        <td>23 Mar 2018</td>
                                        <td>Md Shahid</td>
                                        <td>dshahid</td>
                                        <td>dshahid3805@gamil.com</td>
                                        <td><img src="img/profile_pic1.jpg" width="30px"></td>
                                        <td>shahid380</td>
                                        <td>Admin</td>
                                        <td>11</td>
                                        <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                                        <td> <a href="#"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                    <tr>
                                            <td><input type="checkbox"></td>
                                            <td>1</td>
                                            <td>23 Mar 2018</td>
                                            <td>Md Shahid</td>
                                            <td>dshahid</td>
                                            <td>dshahid3805@gamil.com</td>
                                            <td><img src="img/profile_pic1.jpg" width="30px"></td>
                                            <td>shahid380</td>
                                            <td>Admin</td>
                                            <td>11</td>
                                            <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                                            <td> <a href="#"><i class="fa fa-times"></i></a></td>
                                        </tr>


                     </table>
                       
                 </div>
             </div>
         </div></div>
        
        

  </body>
</html>