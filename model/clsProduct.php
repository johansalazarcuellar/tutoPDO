<?php 

Class Product{

	private $idProduct;
	private $nameProduct;
	private $descProduct;
	private $categoryProduct;
	private $priceProduct;


	public function __construct($idProduct,
								$nameProduct,
								$descProduct,
								$categoryProduct,
								$priceProduct){


		$this->idProduct 	   = $idProduct;
		$this->nameProduct 	   = $nameProduct;
		$this->descProduct 	   = $descProduct;
		$this->categoryProduct = $categoryProduct;
		$this->priceProduct    = $priceProduct;



	}

	public function getIdProduct(){
		return $this->idProduct;
	}

	public function getNameProduct(){
		return $this->nameProduct;
	}

	public function getDescProduct(){
		return $this->descProduct;
	}

	public function getCategoryProduct(){
		return $this->categoryProduct;
	}

	public function getPriceProduct(){
		return $this->priceProduct;
	}

}


?>