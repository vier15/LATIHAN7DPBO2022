<?php 

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";

		// Mengeksekusi query
		return $this->execute($query);
	}

	// Fungsi Add data
	function addData() {
		
		$name = $_POST['tname'];
		$details = $_POST['tdetails'];
		$subject = $_POST['tsubject'];
		$priority = $_POST['tpriority'];
		$deadline = $_POST['tdeadline'];

		echo $name;

		$query = "INSERT INTO tb_to_do (name_td, details_td, subject_td, priority_td, deadline_td, status_td)
		VALUES ('$name', '$details', '$subject', '$priority', '$deadline', 'Belum')";

		return $this->execute($query);

	}

	// Fungsi Delete data
	function deleteData($id) {

		$query = "DELETE FROM tb_to_do WHERE id = $id";

		return $this->execute($query);

	}

	// Fungsi Update data
	function updateData($id) {

		$query = "UPDATE tb_to_do SET status_td = 'Sudah' WHERE id = $id";

		return $this->execute($query);

	}
	
}

?>