<?php 

Interface ProductDAO{

	public function add($obj);
	public function update($obj);
	public function findById($id);
	public function delete($id);
}

 ?>