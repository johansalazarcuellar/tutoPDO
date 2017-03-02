<?php 

include_once '../controller/ctrlProduct.php';
include_once '../controller/ctrlPageSetUp.php';
include_once '../controller/ctrlMainMenu.php';
require_once 'modal/clsModalProduct.php';


ModalProduct::modalNewProduct();

?>
<!DOCTYPE html>
<html>

<?php  ctrlPageSetUp::getHead(); ?>

<body>


<div id="wrapper">

		<?php ctrlMainMenu::mainMenu(); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

        	 <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Administracion<small> Producto</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <a type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#newProduct">
							  Nuevo Producto
							<i class="fa fa-plus"></i></a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->


				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<table class="table table-bordered table-hover table-striped">
							<thead>
								<th>id Producto</th>
								<th>nombre Producto</th>
								<th>descripcion Producto</th>
								<th>Ctegoria Producto</th>
								<th>precio Producto</th>
								<th>Accion</th>
							</thead>
							<tbody>
								<?php ctrlProduct::getRowsProduct(); ?>
							</tbody>
						</table>
					</div>
				</div>

                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


<?php  ctrlPageSetUp::getFooter(); ?>
	
</body>
</html>