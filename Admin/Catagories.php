  <?php require_once('inc/top.php'); ?>
  <body>
   
     <?php require_once('inc/header.php'); ?>
    </nav>
        
       <?php require_once('inc/sidebar.php'); ?>
               
                 <div class="col-md-9">
                     <h1><i class="fa fa-folder-open"></i> Catagories <small> Different Catagories</small></h1><hr/>
                     <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <a href="Index1.php"> <li class="breadcrumb-item" aria-current="page"><i class=" fa fa-tachometer"></i> Dashboard</li></a>
                              <li style="padding-left:20px;" class="breadcrumb-item active" aria-current="page"><i class=" fa fa-folder-open"></i> Catagories</li>
                            </ol>
                          </nav>
                      <div class="row">
                          <div class="col-md-6">
                              <form action="">
                                  <div class="form-group">
                                      <label for="catagory">Catagory Name</label>
                                      <input type="text" placeholder="Catagory Name" class="form-control">

                                  </div>
                                  <input type="submit" value="Add Catagory" name="submit" class="btn btn-primary">
                              </form>
                          </div>
                          <div class="col-md-6">
                              <table class="table table-hover table-bordered">
                                  <thead>
                                      <tr>
                                          <th>Sl #</th>
                                          <th>Catagory Name</th>
                                          <th>Posts</th>
                                          <th>Edit</th>
                                          <th>Del</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>Video Tutorial</td>
                                      <td>12</td>
                                      <td> <a href="#"> <i class="fa fa-pencil"></i></a></td>
                                      <td><a href="#"><i class="fa fa-times"></i></a> </td>
                                    </tr>
                                    <tr>
                                      <td>1</td>
                                      <td>Video Tutorial</td>
                                      <td>12</td>
                                      <td> <a href="#"> <i class="fa fa-pencil"></i></a></td>
                                      <td><a href="#"><i class="fa fa-times"></i></a> </td>
                                    </tr>
                                    <tr>
                                      <td>1</td>
                                      <td>Video Tutorial</td>
                                      <td>12</td>
                                      <td> <a href="#"> <i class="fa fa-pencil"></i></a></td>
                                      <td><a href="#"><i class="fa fa-times"></i></a> </td>
                                    </tr>
                                    <tr>
                                      <td>1</td>
                                      <td>Video Tutorial</td>
                                      <td>12</td>
                                      <td> <a href="#"> <i class="fa fa-pencil"></i></a></td>
                                      <td><a href="#"><i class="fa fa-times"></i></a> </td>
                                    </tr>  
                                  </tbody>
                              </table>
                          </div>
                      </div>
                       
                 </div>
             </div>
             <!--DATA-->
         </div>

  </body>
</html>