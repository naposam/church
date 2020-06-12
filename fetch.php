<?php

//fetch.php

// include('database_connection.php');
$connect = new PDO("mysql:host=localhost;dbname=church", "root", "");

$column = array('fname', 'mname','lname','gender', 'address', 'phone_number', 'date_taken','temperature');

$query = "SELECT *,temperature_tbl.temperature,temperature_tbl.date_taken FROM members_registration LEFT JOIN temperature_tbl on members_registration.uid=temperature_tbl.uid ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE fname LIKE "%'.$_POST['search']['value'].'%" 
  OR mname LIKE "%'.$_POST['search']['value'].'%"
  OR lname LIKE "%'.$_POST['search']['value'].'%"
 OR gender LIKE "%'.$_POST['search']['value'].'%" 
 OR address LIKE "%'.$_POST['search']['value'].'%" 
 OR phone_number LIKE "%'.$_POST['search']['value'].'%" 
 OR date_taken LIKE "%'.$_POST['search']['value'].'%" 
 OR mname LIKE "%'.$_POST['search']['value'].'%"
  OR temperature LIKE "%'.$_POST['search']['value'].'%" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY reg_date DESC ';
}

$query1 = '';

if($_POST['length'] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['fname'].' '.$row['lname'].' '.$row['mname'];
 $sub_array[] = $row['temperature'];
 $sub_array[] = $row['gender'];
 $sub_array[] = $row['address'];
 $sub_array[] = $row['phone_number'];
 $sub_array[] = date('Y-m-d', strtotime($row["date_taken"]));
 $sub_array[] = date('H:i A',strtotime($row["date_taken"]));
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM members_registration";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'    => intval($_POST['draw']),
 'recordsTotal'  => count_all_data($connect),
 'recordsFiltered' => $number_filter_row,
 'data'    => $data
);

echo json_encode($output);

?>
