<?php
include("db.php");
$studentName = '';
$gender = '';
$fatherName = '';
$contactNumber = '';
$class='';
$course = '';
$combination = '';
$au = '';
$markss = '';
$TMarks = '';
$percentage = '';
$category = '';
$Tuition = '';
$dmFee = '';
$Building = '';
$imFee = '';

$total = '';
$pa = '';
$ba = '';
$tfiw = '';
$created_at = '';
if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM task1 WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
  $studentName = $row['studentName'];
  $gender = $row['gender'];
  $fatherName = $row['fatherName'];
  $contactNumber = $row['contactNumber'];
  $class = $row['class'];
  $course = $row['course'];
  $combination = $row['combination'];
  $au = $row['au'];
  $markss = $row['markss'];
  $TMarks = $row['TMarks'];
  $percentage = $row['percentage'];
  $category = $row['category'];
  $Tuition = $row['Tuition'];
  $dmFee = $row['dmFee'];
  $Building = $row['Building'];
  $imFee = $row['imFee'];

  $total = $row['total'];
  $pa1 = $row['pa1'];
  $created_at1 = $row['created_at1'];
  $pa2 = $row['pa2'];
  $created_at2 = $row['created_at2'];
  $pa3 = $row['pa3'];
  $created_at3 = $row['created_at3'];
  $ba = $row['ba'];
  $tfiw = $row['tfiw'];

  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $studentName = $_POST['studentName'];
  $gender = $_POST['gender'];
  $fatherName = $_POST['fatherName'];
  $contactNumber = $_POST['contactNumber'];
  $class = $row['class'];
  $course = $_POST['course'];
  $combination = $_POST['combination'];
  $au = $_POST['au'];
  $markss = $_POST['markss'];
  $TMarks = $_POST['TMarks'];
  $percentage = $_POST['percentage'];
  $category = $_POST['category'];
  $Tuition = $row['Tuition'];
  $dmFee = $row['dmFee'];
  $Building = $row['Building'];
  $imFee = $row['imFee'];

  $total = $_POST['total'];
  $pa1 = $_POST['pa1'];
  $created_at1 = $_POST['created_at1'];
  $pa2 = $_POST['pa2'];
  $created_at2 = $_POST['created_at2'];
  $pa3 = $_POST['pa3'];
  $created_at3 = $_POST['created_at3'];
  $ba = $_POST['ba'];
  $tfiw = $_POST['tfiw'];
  


  $query = "UPDATE task1 set studentName = '$studentName', gender = '$gender', fatherName = '$fatherName', contactNumber = '$contactNumber', class = '$class', course = '$course', combination = '$combination', au = '$au' , markss = '$markss', TMarks = '$TMarks', percentage = '$percentage' , category = '$category' , Tuition = '$Tuition' , dmFee = '$dmFee' , Building = '$Building' , imFee = '$imFee' , total = '$total', pa1 = '$pa1', created_at1 = '$created_at1', pa2 = '$pa2', created_at2 = '$created_at2', pa3 = '$pa3', created_at3 = '$created_at3', ba = '$ba', tfiw = '$tfiw' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index11.php');
}

?>
<?php include('includes/header.php'); ?>
<!-- <div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto"> -->
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">Student Name
          <input name="studentName" type="text" class="form-control" value="<?php echo $studentName; ?>" placeholder="STUDENT NAME">
        </div>
        <div class="form-group">
                <label for="gender"><b>Gender</b></label>
                
          <div>
                  <label for="male" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="Male" required
                      id="male"
                    /><b>Male</b></label
                  ><br>
                  <label for="female" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="Female" required
                      id="female"
                    /><b>Female</b></label
                  ><br>
                  <label for="others" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="Others" required
                      id="others"
                    /><b>Others</b></label
                  >
                  
                </div>
        </div>
        <div class="form-group">Father Name
          <input name="fatherName" type="text" class="form-control" value="<?php echo $fatherName; ?>" placeholder="FATHER NAME">
        </div>
        <div class="form-group">Contact Number
          <input name="contactNumber" type="text" class="form-control" value="<?php echo $contactNumber; ?>" placeholder="CONTACT NUMBER">
        </div>
        <div class="form-group">
                <label for="class"><b>class</b></label>
                <div>
                  <label for="1Yr PUC" class="radio-inline"
                    ><input
                      type="radio"
                      name="class"
                      value="1Yr PUC" required
                      id="1Yr PUC"
                    /><b>   1Yr PUC</b></label
                  >&emsp;
                  <label for="2Yr PUC" class="radio-inline"
                    ><input
                      type="radio"
                      name="class"
                      value="2Yr PUC" required
                      id="2Yr PUC"
                    /><b>   2Yr PUC</b></label
                  >&emsp;
                  <label for="Degree" class="radio-inline"
                    ><input
                      type="radio"
                      name="class"
                      value="Degree" required
                      id="Degree"
                    /><b>   Degree</b></label
                  >
                </div>
                </div>
                </div>
                </div>
              </div>
          </div>
          <div class="form-group">
                <label for="course"><b>course</b></label>
                <div>
                  <label for="Science" class="radio-inline"
                    ><input
                      type="radio"
                      name="course"
                      value="Science" required
                      id="Science"
                    /><b>  Science</b></label
                  >&emsp;
                  <label for="Commerce" class="radio-inline"
                    ><input
                      type="radio"
                      name="course"
                      value="Commerce" required
                      id="Commerce"
                    /><b>   Commerce</b></label
                  >
                  </div>
                </div>
                </div>
                </div>
              </div>
          </div>
          <div class="form-group">
                <label for="combination"><b>Combination</b></label>
                <div>
                  <label for="PCMB" class="radio-inline"
                    ><input
                      type="radio"
                      name="combination"
                      value="PCMB" required
                      id="PCMB"
                    /><b>PCMB</b></label
                  >&emsp;
                  <label for="PCMCs" class="radio-inline"
                    ><input
                      type="radio"
                      name="combination"
                      value="PCMCs" required
                      id="PCMCs"
                    /><b>PCMCs</b></label
                  >&emsp;
                  <label for="PCME" class="radio-inline"
                    ><input
                      type="radio"
                      name="combination"
                      value="PCME" required
                      id="PCME"
                    /><b>PCME</b></label
                  ><br>
                  <label for="EGBA" class="radio-inline"
                    ><input
                      type="radio"
                      name="combination"
                      value="EGBA" required
                      id="EGBA"
                    /><b>EGBA</b></label
                  >&emsp;
                  <label for="EBACs" class="radio-inline"
                    ><input
                      type="radio"
                      name="combination"
                      value="EBACs" required
                      id="EBACs"
                    /><b>EBACs</b></label
                  >&emsp;
                  <label for="BACSt" class="radio-inline"
                    ><input
                      type="radio"
                      name="combination"
                      value="BACSt" required
                      id="BACSt"
                    /><b>BACSt</b></label
                  ><br>
                  <label for="B.Com" class="radio-inline"
                    ><input
                      type="radio"
                      name="combination"
                      value="B.Com" required
                      id="B.Com"
                    /><b>   B.Com</b></label
                  >&emsp;
                  <label for="BBA" class="radio-inline"
                    ><input
                      type="radio"
                      name="combination"
                      value="BBA" required
                      id="BBA"
                    /><b>   BBA</b></label
                  >&emsp;
                  <label for="B.Sc" class="radio-inline"
                    ><input
                      type="radio"
                      name="combination"
                      value="B.Sc" required
                      id="B.Sc"
                    /><b>   B.Sc</b></label
                  >&emsp;
                  <label for="B.Sc(Hons)" class="radio-inline"
                    ><input
                      type="radio"
                      name="combination"
                      value="B.Sc(Hons)" required
                      id="B.Sc(Hons)"
                    /><b>   B.Sc(Hon's)</b></label
                  > &emsp;
                  <label for="BCA" class="radio-inline"
                    ><input
                      type="radio"
                      name="combination"
                      value="BCA" required
                      id="BCA"
                    /><b>   BCA</b></label
                  >           
                </div>
                </div>   
                </div>
              </div>
          </div>
          <div class="form-group">
          <label for="au"><b>Aided/Unaided</b></label>              
                <div>
                  <label for="aided" class="radio-inline"
                    ><input
                      type="radio"
                      name="au"
                      value="Aided" required
                      id="aided"
                    /><b>Aided</b></label
                  >
                  <label for="unaided" class="radio-inline"
                    ><input
                      type="radio"
                      name="au"
                      value="Unaided" required
                      id="unaided"/><b>Unaided</b></label>

                </div>
              </div>
        </div>
        <div class="form-group">Marks Scored
          <input name="markss" id="markss" type="text" class="form-control" value="<?php echo $markss; ?>" placeholder="MARKS SCORED" onblur="rePer();"/>
        </div>
        <div class="form-group">Toatal Marks
          <input name="TMarks" id="TMarks" type="text" class="form-control" value="<?php echo $TMarks; ?>" placeholder="TOTAL MARKS" onblur="rePer();"/>
        </div>
        <div class="form-group">Percentage(%)
          <input name="percentage" id="percentage" type="text" class="form-control" value="<?php echo $percentage; ?>" placeholder="PERCENTAGE"/>
        </div>
        <script>
            function rePer()
            {
            var marks = parseInt(document.getElementById("markss").value);
            var Tmarks = parseInt(document.getElementById("TMarks").value);
            var Percentage=marks/Tmarks*100;
            document.getElementById("percentage").value = Percentage.toFixed(2);

            }
            </script>
       <div class="form-group">
                <label for="category"><b>Category</b></label>
                <div>
                  <label for="SC" class="radio-inline"
                    ><input
                      type="radio"
                      name="category"
                      value="SC" required
                      id="SC"
                    /><b>SC</b></label
                  >
                  <label for="ST" class="radio-inline"
                    ><input
                      type="radio"
                      name="category"
                      value="ST" required
                      id="ST"
                    /><b>ST</b></label
                  >
                  <label for="OBC" class="radio-inline"
                    ><input
                      type="radio"
                      name="category"
                      value="OBC" required
                      id="OBC"
                    /><b>OBC</b></label
                  >
                  <label for="GM" class="radio-inline"
                    ><input
                      type="radio"
                      name="category"
                      value="GM" required
                      id="GM"
                    /><b>GM</b></label
                  >
                  <label for="Others" class="radio-inline"
                    ><input
                      type="radio"
                      name="category"
                      value="Others" required
                      id="Others"
                    /><b>Others</b></label
                  >
                </div>
              </div>
          </div>
        <div class="form-group">Tuition Fee
          <input name="Tuition" id="Tuition" type="text" class="form-control" value="<?php echo $Tuition; ?>" placeholder="TUITION FEE" onblur="reSum();"/>
        </div>
        <div class="form-group">Development & Maintainance Fee
          <input name="dmFee" id="dmFee" type="text" class="form-control" value="<?php echo $dmFee; ?>" placeholder="DEVELOPMENT & MAINTAINANCE FEE" onblur="reSum();"/>
        </div>
        <div class="form-group">Building Fee
          <input name="Building" id="Building" type="text" class="form-control" value="<?php echo $Building; ?>" placeholder="BUILDING FEE" onblur="reSum();"/>
        </div>
        <div class="form-group">Integrated/Miscellaneous Fee
          <input name="imFee" id="imFee" type="text" class="form-control" value="<?php echo $imFee; ?>" placeholder="INTEGRATED/MISCELLANEOUS FEE" onblur="reSum();"/>
        </div>

        <div class="form-group">Total
          <input name="total" id="total" type="text" class="form-control" value="<?php echo $total; ?>" placeholder="TOTAL"/>
        </div>
       
        <script>

              function reSum()
                  {
                      var Tuition = parseInt(document.getElementById("Tuition").value);
                      var dmFee = parseInt(document.getElementById("dmFee").value);
                      var Building = parseInt(document.getElementById("Building").value);
                      var imFee = parseInt(document.getElementById("imFee").value);
                      document.getElementById("total").value = Tuition + dmFee + Building + imFee;
                  }

         </script>

<id="total" name="total" onblur="sum();"/>
        <div class="form-group">Installment 1
          <input name="pa1" id="pa1" type="text" class="form-control" value="<?php echo $pa1; ?>" placeholder="Installment 1" onblur="sum();"/>
        </div>
        <div class="form-group mb-3">
                                <label for="">Date & Time - Ins 1</label>
                                <input type="datetime-local" name="created_at1" class="form-control" value="<?php echo $created_at1; ?>" placeholder="DATE & TIME">
                            </div>
        <div class="form-group">Installment 2
          <input name="pa2" id="pa2" type="text" class="form-control" value="<?php echo $pa2; ?>" placeholder="Installment 2" onblur="sum();"/>
        </div>
        <div class="form-group mb-3">
                                <label for="">Date & Time - Ins 2</label>
                                <input type="datetime-local" name="created_at2" class="form-control" value="<?php echo $created_at2; ?>" placeholder="DATE & TIME">
                            </div>
        <div class="form-group">Installment 3
          <input name="pa3" id="pa3" type="text" class="form-control" value="<?php echo $pa3; ?>" placeholder="Installment 3" onblur="sum();"/>
        </div>
        <div class="form-group mb-3">
                                <label for="">Date & Time - Ins 3</label>
                                <input type="datetime-local" name="created_at3" class="form-control" value="<?php echo $created_at3; ?>" placeholder="DATE & TIME">
                            </div>
        <div class="form-group">Balance Amount
          <input name="ba" id="ba" type="text" class="form-control" value="<?php echo $ba; ?>" placeholder="BALANCE AMOUNT"/>
        </div>

        <script>
              function sum()
              {
                var total=parseInt(document.getElementById("total").value);
                var pa1=parseInt(document.getElementById("pa1").value);
                var pa2=parseInt(document.getElementById("pa2").value);
                var pa3=parseInt(document.getElementById("pa3").value);
                document.getElementById("ba").value = total - (pa1 + pa2 + pa3);
              }
          </script>

        <div class="form-group">Total Fees In Words
          <input name="tfiw" type="text" class="form-control" value="<?php echo $tfiw; ?>" placeholder="TOTAL FEES IN WORDS">
        </div>
          
          
        
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>