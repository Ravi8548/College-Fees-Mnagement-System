<!DOCTYPE html>
<html>

<?php include("db.php");
 ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

      <div class="container">
            <button class="btn btn-primary my-5"><a href="display.php" class="text-light"><b>Student Details</b></a></button>
            
        </div>


      <!-- <div class="card card-body"> -->
      <body>
  
        <form action="save_task.php" method="POST">
          <div class="form-group">
          <label for="studentName"><b>Student Name</b></label>
            <input type="text" required name="studentName" class="form-control" placeholder="STUDENT NAME">
          </div>
          </div>
          <hr>
              <div class="form-group">
                <label for="gender"><b>Gender</b></label>
                <div>
                  <label for="male" class="radio-inline"
                    ><input
                      type="radio"  
                      name="gender"
                      value="Male" required
                      id="male"
                    /><b>   Male</b></label
                  ><br>
                  <label for="female" class="radio-inline"
                    ><input
                      type="radio"  
                      name="gender"
                      value="Female" required
                      id="female"
                    /><b>   Female</b></label
                  ><br>
                  <label for="others" class="radio-inline"
                    ><input
                      type="radio"  
                      name="gender" 
                      value="Others" required
                      id="others"
                    /><b>   Others</b></label
                  >
                </div>
              </div>
              <hr>
          <label for="fatherName"><b>Father Name</b></label>
            <input type="text" required name="fatherName" class="form-control" placeholder="FATHER NAME" autofocus>
          </div>
          <hr>
          <label for="contactNumber"><b>Contact Number</b></label>
            <input type="text" required name="contactNumber" class="form-control" placeholder="CONTACT NUMBER" autofocus>
          </div>
          <hr>
          <div class="form-group">
                <label for="class"><b>Class</b></label>
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
          <hr>
          <div class="form-group">
                <label for="course"><b>Course</b></label>
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
          <hr>
          <div class="form-group">
                <label for="combination"><b>Combination</b></label>
                <div>
                  <label for="PCMB" class="radio-inline"
                    ><input
                      type="radio"
                      name="combination"
                      value="PCMB" required
                      id="PCMB"
                    /><b>   PCMB</b></label
                  >&emsp;
                  <label for="PCMCs" class="radio-inline"
                    ><input
                      type="radio"
                      name="combination"
                      value="PCMCs" required
                      id="PCMCs"
                    /><b>   PCMCs</b></label
                  >&emsp;
                  <label for="PCME" class="radio-inline"
                    ><input
                      type="radio"
                      name="combination"
                      value="PCME" required
                      id="PCME"
                    /><b>   PCME</b></label
                  ><br>
                  <label for="EGBA" class="radio-inline"
                    ><input
                      type="radio"
                      name="combination"
                      value="EGBA" required
                      id="EGBA"
                    /><b>   EGBA</b></label
                  >&emsp;
                  <label for="EBACs" class="radio-inline"
                    ><input
                      type="radio"
                      name="combination"
                      value="EBACs" required
                      id="EBACs"
                    /><b>   EBACs</b></label
                  >&emsp;
                  <label for="BACSt" class="radio-inline"
                    ><input
                      type="radio"
                      name="combination"
                      value="BACSt" required
                      id="BACSt"
                    /><b>   BACSt</b></label
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
                  >&emsp;
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
          <hr>

<div class="form-group">              
                <div>
                  <label for="aided" class="radio-inline"
                    ><input
                      type="radio"
                      name="au"
                      value="Aided" required
                      id="aided"
                    /><b>   Aided</b></label
                  >&emsp;
                  <label for="unaided" class="radio-inline"
                    ><input
                      type="radio"
                      name="au"
                      value="Unaided" required
                      id="unaided"/><b>   Unaided</b></label>

                </div>
              </div>
              <hr>
              <label for="markss"><b>Marks Scored</b></label>
            <input type="text" required required id="markss" value="0" name="markss" class="form-control" placeholder="MARKS SCORED" onblur="rePer();"/>
          </div>
          <hr>
              <label for="TMarks"><b>Total Marks</b></label>
            <input type="text" required id="TMarks" value="" name="TMarks" class="form-control" placeholder="TOTAL MARKS" onblur="rePer();"/>
          </div>
          <hr>
          <label for="percentage"><b>Percentage</b></label>
            <input type="text" required id="percentage" value="" name="percentage" placeholder="PERCENTAGE"/>
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
          <hr>
          <div class="form-group">
                <label for="category"><b>Category</b></label>
                <div>
                  <label for="SC" class="radio-inline"
                    ><input
                      type="radio"
                      name="category"
                      value="SC" required
                      id="SC"
                    /><b>   SC</b></label
                  >&emsp;
                  <label for="ST" class="radio-inline"
                    ><input
                      type="radio"
                      name="category"
                      value="ST" required
                      id="ST"
                    /><b>   ST</b></label
                  >&emsp;
                  <label for="OBC" class="radio-inline"
                    ><input
                      type="radio"
                      name="category"
                      value="OBC" required
                      id="OBC"
                    /><b>   OBC</b></label
                  >&emsp;
                  <label for="GM" class="radio-inline"
                    ><input
                      type="radio"
                      name="category"
                      value="GM" required
                      id="GM"
                    /><b>   GM</b></label
                  >&emsp;
                  <label for="Others" class="radio-inline"
                    ><input
                      type="radio"
                      name="category"
                      value="Others" required
                      id="Others"
                    /><b>   Others</b></label
                  >
                </div>
              </div>
          </div>
          <hr>
          </select>
          <label for="Tuition"><b>Tuition Fee</b></label>
            <input type="text" required id="Tuition" value="5068" name="Tuition" class="form-control" placeholder="TUITION FEE" onblur="reSum();"/>
          </div>
          <hr>
          <label for="dmFee"><b>Development & Maintainance Fee</b></label>
            <input type="text" required id="dmFee" value="0" name="dmFee" class="form-control" placeholder="DEVELOPMENT & MAINTAINANCE FEE" onblur="reSum();"/>
          </div>
          <hr>
          <label for="Building"><b>Building Fee</b></label>
            <input type="text" required id="Building" value="0" name="Building" class="form-control" placeholder="BUILDING FEE" onblur="reSum();"/>
          </div>
          <hr>
          <label for="imFee"><b>Integrated/Miscellaneous Fee</b></label>
            <input type="text" required id="imFee" value="0" name="imFee" class="form-control" placeholder="INTEGRATED/MISCELLANEOUS FEE" onblur="reSum();"/>
          </div>
          
          <hr>
          <label for="total"><b>Total Fee</b></label>
          <input type="text" required id="total" value="" name="total" placeholder="TOTAL FEE"/>

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

</div>
 
 <br>
 <hr>
          <id="total" name="total" onblur="sum();"/>

          <label for="pa1"><b>Installment 1</b></label>
          <input type="text" id="pa1" value="0" required name="pa1" class="form-control" placeholder="Installment 1" onblur="sum();"/>
          </div>
          <div class="form-group mb-3">
          <label for=""><b>Date & Time - Ins 1</b></label>
                                <input type="datetime-local" name="created_at1" class="form-control">
                            </div>
          <hr>
          <label for="pa2"><b>Installment 2</b></label>
          <input type="text" id="pa2" value="0"  required name="pa2" class="form-control" placeholder="Installment 2" onblur="sum();"/>
          </div>
          <div class="form-group mb-3">
          <label for=""><b>Date & Time - Ins 2</b></label>
                                <input type="datetime-local" name="created_at2" class="form-control">
                            </div>
          <hr>
          <label for="pa3"><b>Installment 3</b></label>
          <input type="text" id="pa3" value="0" required name="pa3" class="form-control" placeholder="Installment 3" onblur="sum();"/>
          </div>
          <div class="form-group mb-3">
                                <label for=""><b>Date & Time - Ins 3</b></label>
                                <input type="datetime-local" name="created_at3" class="form-control">
                            </div>
          <hr>
          <label for="ba"><b>Balance Amount</b></label>
          <input type="text" id="ba" required name="ba" placeholder="BALANCE AMOUNT"/>
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

          <hr>
          <label for="tfiw"><b>Total Fees In Words</b></label>
          
          <input typex="text" required name="tfiw" class="form-control" placeholder="TOTAL FEES IN WORDS" autofocus>
          </div>
          <hr>

          

          <script>
          </script>

          <small>&copy; Sarada Vilas College</small>
 
   
       
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="SUBMIT" >

          
       
        </form>
      </div>
    </div>
</body>
</html>    