<?php
class User {
	protected $name;
	protected $secondname;
	protected $fathersname;
	protected $birthdate;

	function __construct($name,$secondname,$fathersname,$birthdate) {
		$this->name = $name;
		$this->secondname = $secondname;
		$this->fathersname = $fathersname;
		$this->birthdate = $birthdate;
	}
	function Age() {
		return 2019 - $this->birthdate;
	}


}
class Student extends User {
	protected $faculty;
	protected $kafedra;
	protected $group;
	function __construct($name,$secondname,$fathersname,$birthdate,$faculty,$kafedra,$group) {
		parent::__construct($name,$secondname,$fathersname,$birthdate);
		$this->faculty = $faculty;
		$this->kafedra = $kafedra;
		$this->group = $group;
	}
	function enterance() {
		return "201" .$this->group[3];
	}
	function checksubgroup() {
		return $this->group[4];
	}

	function me() {
		echo "$this->name \t $this->secondname \t $this->group";
	}

}

$Leck = new Student("Vitaliy","Aseyev","Dmitrovich",2001,"IPT","Cybersecurity","FB-84");
$Leck->me();
echo "<br>";
echo $Leck->enterance();
echo "<br>";
echo $Leck->checksubgroup();
?>