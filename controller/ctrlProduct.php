<?php 

include_once '../dao/clsProductDAOImp.php';


Class ctrlProduct{



	public static function getRowsProduct(){

		$arrayProduct = ProductDAOImp::getInstance()->getAll();

		foreach($arrayProduct as $objProduct){


			?>
			<tr>
				<td><?php echo $objProduct->getIdProduct(); ?></td>
				<td><?php echo $objProduct->getNameProduct(); ?></td>
				<td><?php echo $objProduct->getDescProduct(); ?></td>
				<td><?php echo $objProduct->getCategoryProduct(); ?></td>
				<td><?php echo $objProduct->getPriceProduct(); ?></td>
				<td>
					<a  data-toggle     ="modal" 
                        data-book-id    ="<?php //echo $objRole->getIdRole() ?>" 
                        data-book-Desc  ="<?php //echo $objRole->getDescRole() ?>"
                        href="#newProduct"  class="btn btn-warning btn-lg" >
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>  
				</td>
			</tr>

		<?php
		}


	}






	public function __construct(){

		if (isset($_POST['btnAction'])) {
			
			switch ($_POST['btnAction']) {

				case 'newProduct':


					if (isset($_POST['nameProductNew']) && $_POST['nameProductNew'] != null &&
						isset($_POST['descProductNew']) && $_POST['descProductNew'] != null &&
						isset($_POST['categoryProductNew']) && $_POST['categoryProductNew'] != null &&
						isset($_POST['priceProductNew']) && $_POST['priceProductNew'] != null ) {


						$objProduct = new Product(null,
												  $_POST['nameProductNew'],
												  $_POST['descProductNew'],
												  $_POST['categoryProductNew'],
												  $_POST['priceProductNew']);

						var_dump($objProduct);

						$val = ProductDAOImp::getInstance()->add($objProduct);


					}else{


						?>

					<div class="alert alert-warning fade in alert-dismissable">
					    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
					    <strong>ADVERTENCIA!</strong> Todos los campos son obligatorios
					</div>

					<?php


					}


				break;
				
				default:
					# code...
				break;
			}


		}
	}




}

$x = new ctrlProduct();
?>