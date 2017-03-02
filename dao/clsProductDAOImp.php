<?php 

include_once '../dao/clsDAOConnection.php';
include_once '../dao/clsProductDAO.php';
include_once '../model/clsProduct.php';



Class ProductDAOImp extends DAOConnection implements ProductDAO{


	private static $instance = null;

	public static function getInstance(){

		if (self::$instance == null) {
			
			self::$instance = new ProductDAOImp();
		}

		return self::$instance;
	}




	public function add($obj){


		try{

			$sql = "INSERT INTO product(nameProduct,descProduct,categoryProduct,priceProduct)
							    VALUES (:name,:desc,:category,:price)";

			$stmt = $this->con->prepare($sql);
			$rs = $stmt->execute(array(':name' => $obj->getNameProduct(),
									   ':desc' => $obj->getDescProduct(),
									   ':category' => $obj->getCategoryProduct(),
									   ':price'    => $obj->getPriceProduct()));


			if ($rs == 1) {
				return true;
			}else{
				return false;
			}

		}catch(PDOException $e){

			return $e->getMessage();
		}

	}



	public function update($obj){

		try{


			$sql = "UPDATE product SET nameProduct = ?,
									   descProduct = ?,
									   categoryProduct = ?,
									   priceProduct = ?
									WHERE idProduct = ?";

			$stmt = $this->con->prepare($sql);
			$rs = $stmt->execute(array($obj->getNameProduct(),
									   $obj->getDescProduct(),
									   $obj->getCategoryProduct(),
									   $obj->getPriceProduct(),
									   $obj->getIdProduct()));


			if ($rs == 1) {
				return true;
			}else{
				return false;
			}


		}catch(PDOException $e){

			return $e->getMessage();

		}
	}



	public function delete($idProduct){

		try{

			$sql = "DELETE FROM product WHERE idProduct = :idProduct";

			$stmt = $this->con->prepare($sql);
			$rs = $stmt->execute(array(':idProduct'=>$idProduct));

			if ($rs == 1) {
				return true;
			}else{
				return false;
			}

		}catch(PDOException $e){

			return $e->getMessage();

		}
	}




	public function findById($idProduct){

		try{

			$sql = "SELECT idProduct,
						   nameProduct,
						   descProduct,
						   categoryProduct,
						   priceProduct
					  FROM product
					 WHERE idProduct = :idProduct";

			$stmt = $this->con->prepare($sql);

			$stmt->execute(array(':idProduct' => $idProduct));

			$rs = $stmt->fetch();

			$objProduct = new Product($rs['idProduct'],
									  $rs['nameProduct'],
									  $rs['descProduct'],
									  $rs['categoryProduct'],
									  $rs['priceProduct']);

			return $objProduct;

		}catch(PDOException $e){

			return $e->getMessage();
		}
	}




	public function getAll(){

		try{

			$arrayProduct = array();

			$sql = "SELECT idProduct,
						   nameProduct,
						   descProduct,
						   categoryProduct,
						   priceProduct
					  FROM product";

			$stmt = $this->con->prepare($sql);

			$stmt->execute();

			$rs = $stmt->fetchAll();

			foreach($rs as $row){

				$objProduct = new Product($row['idProduct'],
										  $row['nameProduct'],
										  $row['descProduct'],
										  $row['categoryProduct'],
										  $row['priceProduct']);

				array_push($arrayProduct,$objProduct);
			}

			return $arrayProduct; 

		}catch(PDOException $e){


			return $e->getMessage();
		}
	}


}

 ?>