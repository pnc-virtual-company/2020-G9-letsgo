<?= $this->include('layouts/navbar') ?>

<div class="container mt-5">
 <div class="container">
    <div class="row"> 
        <div class="col-12">
            <form action="">
                <div class="form-group">
                  <i class="large material-icons form-control-feedback">search</i>
                  <input type="text" class="form-control search_event" placeholder="Search" onkeyup="myFunction()" id="search">
                </div>
            </form>
        </div>
    </div>
 </div>

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6">
            <h2 class="title-category">Categories</h2>
        </div>
        <div class="col-sm-6">
            <a type="button" class="btnCreateCategory btn btn-warning btn-md text-white font-weight-bolder float-right" data-toggle="modal" data-target="#addCategory">
                <i class="material-icons float-left" data-toggle="tooltip" title="Create Category!" data-placement="left">add</i>&nbsp;Create
            </a>
        </div>
    </div>

    <div class="row"​​​​​ ​​​​>
        <div class="col-sm-12 table-responsive">
            <table class="table table-hover table-borderless" id="table">
                <?php foreach ($showCategory as $value):?>
                    <tbody>
                        <tr>
                            <td class="hide"><?= $value['id'] ?></td>
                            <td><?= $value['name'] ?></td>
                            <td class="text-right action_hidden">
                                <a href="" data-toggle="modal" data-target="#updateCategory"><i class="material-icons text-info editdata" data-toggle="tooltip" title="Edit Category!" data-placement="right">edit</i></a>
                                <a href="" data-toggle="modal" data-target="#removeCategory"><i class="material-icons text-danger deletedata" data-toggle="tooltip" title="Delete Category!" data-placement="right">delete</i></a>
                            </td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

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
                        <form action="admincontroller/insert" method="post">
                            <input type="text" class="form-control" placeholder="Enter Category Name" name="name">
                            <br>
                            <div class="float-right">
                                <a href="" class="text-uppercase text-dark">DISCARD</a>
                                <input type="submit" value="CREATE" class="createBtn text-warning">
                            </div>
                        </form>
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
                        <form action="admincontroller/updateCategory" method="post">
                            <input type="hidden" id="id" name = "id" >
                            <input type="text" id="name" class="form-control"  placeholder="Enter Category Name" name="name">
                            <br>
                            <div class="float-right">
                                <a href="" class="text-uppercase text-dark">DISCARD</a>
                                <input type="submit" value="UPDATE" class="createBtn text-warning">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal update category -->


        <!-- The Modal Remove Category-->
        <div class="modal mt-5" id="removeCategory">
            <div class="modal-dialog">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Category</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                    <p>Are you sure you want to remove selected item ?</p>
                        <form action="admincontroller/deleteCategory" method="post">
                            <input type="hidden" id="delete_id" name = "delete_id" >
                            <br>
                            <div class="float-right">
                                <a href="" class="text-uppercase text-dark">DISCARD</a>
                                <input type="submit" value="DELETE" class="createBtn text-warning">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Modal Remove Category-->
    </div>
</div>


    <script>
        $(document).ready(function(){

            // update category

            $('.editdata').on('click',function(){
                $('#updateCategory');
                $tr = $(this).closest('tr');
                var data = $tr.children('td').map(function(){
                    return $(this).text();
                }).get();
                $('#id').val(data[0]);
                $('#name').val(data[1]);
		    });

            // remove category

            $('.deletedata').on('click',function(){
                $('#removeCategory');
                $tr = $(this).closest('tr');
                var data = $tr.children('td').map(function(){
                    return $(this).text();
                }).get();
                $('#delete_id').val(data[0]);
		    });
        });

    </script>


    <script>
        function myFunction() {
          var input=""; 
          var filter="";
          var table=""; 
          var tr="";
          var td="";
          var txtValue="";
          input = document.getElementById("search");
          filter = input.value.toUpperCase();
          table = document.getElementById("table");
          tr = table.getElementsByTagName("tr");
          for (var i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }
          }
        }

    </script>
