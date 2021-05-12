<?php
class Records {	
   
	private $recordsTable = 'staff'; //For staff table
	private $recordTable = 'records'; //For records table
	private $cognitiveTable = "cognitive_data"; //For cognitive Table
	private $healthTable = "health_data"; //For health table
	private $nutritionTable = "nutrition_data"; //For nutrition table
	private $donorTable = "donors"; //For donors table
	public $staff_id;
	public $kayacare_id;
	public $fname;
	public $mname;
	public $lname;
	public $email;
	public $phone;
    public $address;
	public $dob;
	public $sex;
	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }	    
	
	public function listStaff(){
		
		$sqlQuery = "SELECT * FROM ".$this->recordsTable." ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'where(staff_id LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR kayacare_id LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR fname LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR mname LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR lname LIKE "%'.$_POST["search"]["value"].'%") ';	
			$sqlQuery .= ' OR email LIKE "%'.$_POST["search"]["value"].'%") ';
			$sqlQuery .= ' OR phone LIKE "%'.$_POST["search"]["value"].'%") ';	
			$sqlQuery .= ' OR address LIKE "%'.$_POST["search"]["value"].'%") ';
			$sqlQuery .= ' OR dob LIKE "%'.$_POST["search"]["value"].'%") ';	
			$sqlQuery .= ' OR sex LIKE "%'.$_POST["search"]["value"].'%") ';
		}
		
		
		
		$stmt = $this->conn->prepare($sqlQuery);
		$stmt->execute();
		$result = $stmt->get_result();	
		
		$stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->recordsTable);
		$stmtTotal->execute();
		$allResult = $stmtTotal->get_result();
		$allRecords = $allResult->num_rows;
		
		$displayRecords = $result->num_rows;
		$records = array();		
		while ($record = $result->fetch_assoc()) { 				
			$records[] = array(
				'staff_id' => $record['staff_id'],
				'kayacare_id' => $record['kayacare_id'],
				'fname' => $record['fname'],
				'mname' => $record['mname'],
				'lname' => $record['lname'],
				'email' => $record['email'],
				'phone' => $record['phone'],
				'address' => $record['address'],
				'dob' => $record['dob'],
				'sex' => $record['sex'],
				'delete' => '<button type="button" name="delete" id="'.$record["staff_id"].'"
				class="btn btn-danger btn-xs delete">Delete <a href="event.php" style="text-decoration:none;"></button>'
			);			
		}
		echo json_encode($records);
		return json_encode($records);
	}

	public function listRecords(){
		
		$sqlQuery = "SELECT * FROM ".$this->recordTable." ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'where(record_id LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR kayacare_id LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR development_gap LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR record_date LIKE "%'.$_POST["search"]["value"].'%" ';
			
		}
		
		
		
		$stmt = $this->conn->prepare($sqlQuery);
		$stmt->execute();
		$result = $stmt->get_result();	
		
		$stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->recordTable);
		$stmtTotal->execute();
		$allResult = $stmtTotal->get_result();
		$allRecords = $allResult->num_rows;
		
		$displayRecords = $result->num_rows;
		$records = array();		
		while ($record = $result->fetch_assoc()) { 				
			$records[] = array(
				'record_id' => $record['record_id'],
				'kayacare_id' => $record['kayacare_id'],
				'development_gap' => $record['development_gap'],
				'record_date' => $record['record_date'],
				'delete' => '<button type="button" name="delete" id="'.$record["record_id"].'"
				class="btn btn-danger btn-xs delete" >Delete</button>'
			);			
		}
		echo json_encode($records);
		return json_encode($records);
	}

	
	public function listDonors(){
		$sqlQuery = "SELECT * FROM ".$this->donorTable." ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'where(name LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR address LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR phone LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR nature LIKE "%'.$_POST["search"]["value"].'%" ';
			
		}
		
		
		
		$stmt = $this->conn->prepare($sqlQuery);
		$stmt->execute();
		$result = $stmt->get_result();	
		
		$stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->donorTable);
		$stmtTotal->execute();
		$allResult = $stmtTotal->get_result();
		$allRecords = $allResult->num_rows;
		
		$displayRecords = $result->num_rows;
		$records = array();		
		while ($record = $result->fetch_assoc()) { 				
			$records[] = array(
				'name' => $record['name'],
				'address' => $record['address'],
				'phone' => $record['phone'],
				'nature' => $record['nature']
			);			
		}
		echo json_encode($records);
		return json_encode($records);
	}
	

	public function listCognitive(){
		
		$sqlQuery = "SELECT * FROM ".$this->cognitiveTable." ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'where(record_id LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR rw_index LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR numeracy_skills LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR decision_making LIKE "%'.$_POST["search"]["value"].'%") ';	
			$sqlQuery .= ' OR ct_index LIKE "%'.$_POST["search"]["value"].'%") ';
			$sqlQuery .= ' OR problem_solving LIKE "%'.$_POST["search"]["value"].'%") ';	
			$sqlQuery .= ' OR curiosity LIKE "%'.$_POST["search"]["value"].'%") ';
			
		}
		
		
		
		$stmt = $this->conn->prepare($sqlQuery);
		$stmt->execute();
		$result = $stmt->get_result();	
		
		$stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->cognitiveTable);
		$stmtTotal->execute();
		$allResult = $stmtTotal->get_result();
		$allRecords = $allResult->num_rows;
		
		$displayRecords = $result->num_rows;
		$records = array();		
		while ($record = $result->fetch_assoc()) { 				
			$records[] = array(
				'record_id' => $record['record_id'],
				'rw_index' => $record['rw_index'],
				'numeracy_skills' => $record['numeracy_skills'],
				'decision_making' => $record['decision_making'],
				'ct_index' => $record['ct_index'],
				'problem_solving' => $record['problem_solving'],
				'curiosity' => $record['curiosity'],
				'delete' => '<button type="button" name="delete" id="'.$record["record_id"].'"
				class="btn btn-danger btn-xs delete" >Delete</button>'
			);			
		}
		echo json_encode($records);
		return json_encode($records);
	}

	public function listHealth(){
		$sqlQuery = "SELECT * FROM ".$this->healthTable." ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'where(record_id LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR length LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR weight LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR blood_pressure LIKE "%'.$_POST["search"]["value"].'%") ';	
			$sqlQuery .= ' OR immunization LIKE "%'.$_POST["search"]["value"].'%") ';
			$sqlQuery .= ' OR ears LIKE "%'.$_POST["search"]["value"].'%") ';	
			$sqlQuery .= ' OR eyes LIKE "%'.$_POST["search"]["value"].'%") ';
			$sqlQuery .= ' OR allergies LIKE "%'.$_POST["search"]["value"].'%") ';
			
		}
		
		
		
		$stmt = $this->conn->prepare($sqlQuery);
		$stmt->execute();
		$result = $stmt->get_result();	
		
		$stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->healthTable);
		$stmtTotal->execute();
		$allResult = $stmtTotal->get_result();
		$allRecords = $allResult->num_rows;
		
		$displayRecords = $result->num_rows;
		$records = array();		
		while ($record = $result->fetch_assoc()) { 				
			$records[] = array(
				'record_id' => $record['record_id'],
				'length' => $record['length'],
				'weight' => $record['weight'],
				'blood_pressure' => $record['blood_pressure'],
				'immunization' => $record['immunization'],
				'ears' => $record['ears'],
				'eyes' => $record['eyes'],
				'allergies' => $record['allergies'],
				'delete' => '<button type="button" name="delete" id="'.$record["record_id"].'"
				class="btn btn-danger btn-xs delete" >Delete</button>'
			);			
		}
		echo json_encode($records);
		return json_encode($records);
	}

	public function listNutrition(){
		$sqlQuery = "SELECT * FROM ".$this->nutritionTable." ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'where(record_id LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR iron_deficiency LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR zinc_deficiency LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR growth LIKE "%'.$_POST["search"]["value"].'%" ';
			
		}
		
		
		
		$stmt = $this->conn->prepare($sqlQuery);
		$stmt->execute();
		$result = $stmt->get_result();	
		
		$stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->nutritionTable);
		$stmtTotal->execute();
		$allResult = $stmtTotal->get_result();
		$allRecords = $allResult->num_rows;
		
		$displayRecords = $result->num_rows;
		$records = array();		
		while ($record = $result->fetch_assoc()) { 				
			$records[] = array(
				'record_id' => $record['record_id'],
				'iron_difficiency' => $record['zinc_difficiency'],
				'zinc_difficiency' => $record['zinc_difficiency'],
				'growth' => $record['growth'],
				'delete' => '<button type="button" name="delete" id="'.$record["record_id"].'"
				class="btn btn-danger btn-xs delete" >Delete</button>'
			);			
		}
		echo json_encode($records);
		return json_encode($records);
	}
	
}
?>