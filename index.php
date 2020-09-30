<?php
class emp
{
	// Define properties
	public $emp_name;
	public $emp_dept;
	public $emp_sal;

    // creating constructer function for initilize properties

    // Creating variable for initilize values
	function __construct($e_n, $e_d, $e_s)
	{
		// initilization of variable
		$this->emp_name = $e_n;
		$this->emp_dept = $e_d;
		$this->emp_sal = $e_s;
	}
    // Create base class method
	function detail()
	{
		// Printing structure using for view
		echo "<h2>Employee Detail</h2>";
		echo "Name : ".$this->emp_name."<br/>";
		echo "Department : ".$this->emp_dept."<br/>";
		echo "Salary : ".$this->emp_sal."<br/>";
	}


}

// base class inherit in drive class
class manager extends emp
	{
		// Define properties
		public $p_a = 1000; //petrol allowance
		public $t_a = 500; // phone allowance
		public $total_salary; // total salary 

		function detail()
		{
			// adding salary with petrol and phone allowance in total salary
			$this->total_salary = $this->emp_sal + $this->p_a + $this->t_a; 
			echo "<h2>Manager Detail</h2>";
			echo "Name : ".$this->emp_name."<br/>";
			echo "Department : ".$this->emp_dept."<br/>";
			echo "Salary : ".$this->total_salary."<br/>";
		}
	}

// Creating object of base class
$employee_detail = new emp("Radhamohan Sharma", "Information Technology", 10000);
// creating object of drive class
$manager_detail = new manager("Pradeep Choudhary", "Information Technology", 50000);


$employee_detail->detail();
$manager_detail->detail();
?>;
