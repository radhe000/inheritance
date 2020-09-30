<?php
class emp
{
	public $emp_name;
	public $emp_dept;
	public $emp_sal;

	function __construct($e_n, $e_d, $e_s)
	{
		$this->emp_name = $e_n;
		$this->emp_dept = $e_d;
		$this->emp_sal = $e_s;
	}

	function detail()
	{
		echo "<h2>Employee Detail</h2>";
		echo "Name : ".$this->emp_name."<br/>";
		echo "Department : ".$this->emp_dept."<br/>";
		echo "Salary : ".$this->emp_sal."<br/>";
	}


}

class manager extends emp
	{
		public $p_a = 1000;
		public $t_a = 500;
		public $total_salary;

		function detail()
		{
			$this->total_salary = $this->emp_sal + $this->p_a + $this->t_a; 
			echo "<h2>Manager Detail</h2>";
			echo "Name : ".$this->emp_name."<br/>";
			echo "Department : ".$this->emp_dept."<br/>";
			echo "Salary : ".$this->total_salary."<br/>";
		}
	}

$employee_detail = new emp("Radhamohan Sharma", "Information Technology", 10000);
$manager_detail = new manager("Pradeep Choudhary", "Information Technology", 50000);

$employee_detail->detail();
$manager_detail->detail();
?>;
