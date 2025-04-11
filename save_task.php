<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $id = $_POST['id'];
  $studentName = $_POST['studentName'];
  $gender = $_POST['gender'];
  $fatherName = $_POST['fatherName'];
  $contactNumber = $_POST['contactNumber'];
  $class = $_POST['class'];
  $course = $_POST['course'];
  $combination = $_POST['combination'];
  $au = $_POST['au'];
  $markss = $_POST['markss'];
  $TMarks = $_POST['TMarks'];
  $percentage = $_POST['percentage'];
  $category = $_POST['category'];
  $Tuition = $_POST['Tuition'];
  $dmFee = $_POST['dmFee'];
  $Building = $_POST['Building'];
  $imFee = $_POST['imFee'];

  $total = $_POST['total'];
  $pa1 = $_POST['pa1'];
  $created_at1 = $_POST['created_at1'];
  $pa2 = $_POST['pa2'];
  $created_at2 = $_POST['created_at2'];
  $pa3 = $_POST['pa3'];
  $created_at3 = $_POST['created_at3'];
  $ba = $_POST['ba'];
  $tfiw = $_POST['tfiw'];
  
  $query = "INSERT INTO task1(studentName, gender, fatherName, contactNumber, class, course, combination, au, markss, TMarks, percentage, category, Tuition, dmFee, Building, imFee, total, pa1, created_at1, pa2, created_at2, pa3, created_at3, ba, tfiw) VALUES ('$studentName', '$gender' , '$fatherName' , '$contactNumber' , '$class' , '$course' , '$combination' , '$au', '$markss', '$TMarks', '$percentage' , '$category' , '$Tuition' , '$dmFee' , '$Building' , '$imFee' , '$total' , '$pa1', '$created_at1', '$pa2', '$created_at2', '$pa3', '$created_at3', '$ba', '$tfiw')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die('Query Failed.');
  }

  $_SESSION['message'] = "Student Saved Successfully";
  $_SESSION['message_type'] = 'success';
  header('Location: index11.php');

}


?>