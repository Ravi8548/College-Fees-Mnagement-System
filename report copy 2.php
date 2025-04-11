<?php
$con=mysqli_connect('localhost','root','','crud3');
$sub_sql="";
$toDate=$fromDate="";
if(isset($_POST['submit'])){
	$from=$_POST['from'];
	$fromDate=$from;
	$fromArr=explode("/",$from);
	$from=$fromArr['2'].'-'.$fromArr['1'].'-'.$fromArr['0'];
	$from=$from." 00:00:00";
	
	$to=$_POST['to'];
	$toDate=$to;
	$toArr=explode("/",$to);
	$to=$toArr['2'].'-'.$toArr['1'].'-'.$toArr['0'];
	$to=$to." 23:59:59";
	
	// $sub_sql= " where created_at1 >= '$from' && created_at1 <= '$to' ";
  // $sub_sql= " where created_at2 >= '$from' && created_at2 <= '$to' ";
  $sub_sql= " where created_at3 >= '$from' && created_at3 <= '$to' ";
}

$res=mysqli_query($con,"select * from task1 $sub_sql order by id desc");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Report</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body>

<div class="container-fluid">
  <br/><h1>Report Of Installment 3</h1><br/>
  
  <div>
	<form method="post">
		<label for="from">From</label>
		<input type="text" id="from" name="from" required value="<?php echo $fromDate?>">
		<label for="to">to</label>
		<input type="text" id="to" name="to" required value="<?php echo $toDate?>">
		<input type="submit" name="submit" value="Filter">
	</form>
  </div>
  <br/><br/>
  <?php if(mysqli_num_rows($res)>0){?>
  <table class="table table-bordered">
    <thead>
      <tr>
      <th>Reciept No</th>
            <th>Student Name</th>
            <th>Gender</th>
            <th>Father Name</th>
            <th>Contact Number</th>
            <th>Class</th>
            <th>Course</th>
            <th>Combination</th>
            <th>Aid/Unaid</th>
            <th>Marks Scored</th>
            <th>Total Marks</th>
            <th>Percentage</th>
            <th>Category</th>
            <th>Tuition Fee</th>
            <th>Development & Maintainance Fee</th>
            <th>Building Fee</th>
            <th>Integrated/Miscellaneous Fee</th>
            <th>Total</th>
            <th>Installment 1</th>
            <th>Date & Time - Ins 1</th>
            <th>Installment 2</th>
            <th>Date & Time - Ins 2</th>
            <th>Installment 3</th>
            <th>Date & Time - Ins 3</th>
            <th>Balance Amount</th>
            <th>Total Fees In Words</th>

      </tr>
    </thead>
    <tbody>
      <?php while($row=mysqli_fetch_assoc($res)){?>
      <tr>
      <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['studentName']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['fatherName']; ?></td>
            <td><?php echo $row['contactNumber']; ?></td>
            <td><?php echo $row['class']; ?></td>
            <td><?php echo $row['course']; ?></td>
            <td><?php echo $row['combination']; ?></td>
            <td><?php echo $row['au']; ?></td>
            <td><?php echo $row['markss']; ?></td>
            <td><?php echo $row['TMarks']; ?></td>
            <td><?php echo $row['percentage']; ?></td>
            <td><?php echo $row['category']; ?></td>
            <td><?php echo $row['Tuition']; ?></td>
            <td><?php echo $row['dmFee']; ?></td>
            <td><?php echo $row['Building']; ?></td>
            <td><?php echo $row['imFee']; ?></td>

            <td><?php echo $row['total']; ?></td>
            <td><?php echo $row['pa1']; ?></td>
            <td><?php echo $row['created_at1']; ?></td>
            <td><?php echo $row['pa2']; ?></td>
            <td><?php echo $row['created_at2']; ?></td>
            <td><?php echo $row['pa3']; ?></td>
            <td><?php echo $row['created_at3']; ?></td>
            <td><?php echo $row['ba']; ?></td>
            <td><?php echo $row['tfiw']; ?></td>
            
      </tr>
	  <?php } ?>
    </tbody>
  </table>
  <?php } else {
	echo "No data found";  
  }
  ?>
</div>
<script>
  $( function() {
    var dateFormat = "dd/mm/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 1,
		  dateFormat:"dd/mm/yy",
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1,
		dateFormat:"dd/mm/yy",
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
  </script>
  <div class="text-center">
  <button onclick="window.print()" class="btn-btn-primary">Print</button>
          </div>
</body>
</html>