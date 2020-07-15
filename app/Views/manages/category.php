<?= $this->include('layouts/navbar') ?>
<div class="container mt-5">
 <div class="container">
    <div class="row"> 
        <div class="col-12">
            <form action="">
                <div class="form-group">
                  <i class="large material-icons form-control-feedback">search</i>
                  <input type="text" class="form-control search_event" placeholder="Search" name="search">
                </div>
            </form>
        </div>
    </div>
 </div>

<div class="container mt-5">
<div class="container">
    <table class="table table-borderless">
            <thead>
                <tr>
                    <td><h2><b>Categories</b> </h2></td>
                    <td class="text-right">        
                        <a type="button" class="btnCreateCategory btn btn-warning btn-md text-white font-weight-bolder float-right" data-toggle="modal" data-target="#addCategory">
                            <i class="material-icons float-left" data-toggle="tooltip" title="Create Category!" data-placement="left">add</i>&nbsp;Create
                        </a>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr class="show-hover">
                    <td>sport</td>
                    <td class="text-right deleteUpdateCategory">
                        <a href="" data-toggle="modal" data-target="#updateCategory"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Category!" data-placement="right">edit</i></a>
                        <a href="" data-toggle="modal" data-target="#remooveCategory" title="Delete Category!" data-placement="right"><i class="material-icons text-danger">delete</i></a>
                    </td>
                </tr>
                <tr  class="show-hover">
                    <td>music</td>
                    <td class="text-right deleteUpdateCategory">
                        <a href="" data-toggle="modal" data-target="#updateCategory"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Category!" data-placement="right">edit</i></a>
                        <a href="" data-toggle="modal" data-target="#remooveCategory" title="Delete Category!" data-placement="right"><i class="material-icons text-danger">delete</i></a>
                    </td>
                </tr>
                <tr  class="show-hover">
                    <td>football</td>
                    <td class="text-right deleteUpdateCategory">
                        <a href="" data-toggle="modal" data-target="#updateCategory"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Category!" data-placement="right">edit</i></a>
                        <a href="" data-toggle="modal" data-target="#remooveCategory" title="Delete Category!" data-placement="right"><i class="material-icons text-danger">delete</i></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <!--  end table for show category -->

        <!-- The Modal Create Category-->
        
        <div class="modal mt-5" id="addCategory">
            <div class="modal-dialog">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Create Category</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                        <input type="text" class="form-control" placeholder="Enter Category Name" name="createCategory">
                        <p class="text-danger">This category already exist</p>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <a href="" class="text-uppercase text-dark">DISCARD</a>
                        <a href="" class="text-uppercase text-warning">CREATE</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- end modal create category -->


        <!-- The Modal Update Category-->
        <div class="modal mt-5" id="updateCategory">
            <div class="modal-dialog">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Category</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                        <input type="text" class="form-control" placeholder="Enter Category Name" name="editCategory">
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <a href="" class="text-uppercase text-dark">DISCARD</a>
                        <a href="" class="text-uppercase text-warning">UPDATE</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- end modal update category -->


        <!-- The Modal Remove Category-->
        <div class="modal mt-5" id="remooveCategory">
            <div class="modal-dialog">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Remove itme ?</h4>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                        Are you sure you want to remove selected item ?
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <a href="" class="text-uppercase text-dark">DON'T REMOVE</a>
                        <a href="" class="text-uppercase text-warning">REMOVE</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- end Modal Remove Category-->
    </div>
</div>



