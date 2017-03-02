<?php 

Class ModalProduct{

	public static function modalNewProduct(){
		?>

		<!-- Modal -->
		<div class="modal fade" id="newProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header modal-header-success">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Nuevo Producto</h4>
		      </div>
		      <div class="modal-body">
		        <div id="resultNewProduct"></div>

		        <form name="formNewProduct">

		        	<div class="row">
		        		<div class="col-lg-12 col-md-12">
		        			<label>Nombre Producto</label>
		        			<input type="text" class="form-control" name="nameProductNew" id="nameProductNew"><br>
		        		</div>

		        		<div class="col-lg-12 col-md-12">
		        			<label>Desccripcion Producto</label>
		        			<input type="text" class="form-control" name="descProductNew" id="descProductNew"><br>
		        		</div>

		        		<div class="col-lg-12 col-md-12">
		        			<label>Categoria Producto</label>
		        			<input type="text" class="form-control" name="categoryProductNew" id="categoryProductNew"><br>
		        		</div>

		        		<div class="col-lg-12 col-md-12">
		        			<label>Nombre Producto</label>
		        			<input type="number" class="form-control" name="priceProductNew" id="priceProductNew"><br>
		        		</div>
		        	</div>
		        </form>


		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		        <button type="button" class="btn btn-success" onclick="createProduct()">Guardar</button>
		      </div>
		    </div>
		  </div>
		</div>


		<?php
	}



}


?>