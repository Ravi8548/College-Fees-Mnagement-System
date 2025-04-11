<?php 
include('db.php');
$fees = $conn->query("SELECT * FROM task1  where id = {$_GET['id']}");
foreach($fees->fetch_array() as $k => $v){
	$$k= $v;
}
$task1 = $conn->query("SELECT * FROM task1 where id = $id ");
$fees = array();
// while($row=$task1->fetch_array()){
// 	$id[$row['id']] = $row;
// }
?>

<style>
	.flex{
		display: inline-flex;
		width: 100%;
	}
	.w-50{
		width: 50%;
	}
	.text-center{
		text-align:center;
	}
	.text-right{
		text-align:right;
	}
	table.wborder{
		width: 100%;
		border-collapse: collapse;
	}
	table.wborder>tbody>tr, table.wborder>tbody>tr>td{
		border:1px solid;
	}
	p{
		margin:unset;
	}

</style>
<div class="container-fluid">
<div class="container">

        <div class="image">
            <img src="svc.jpg" width=100>
        </div>
        <div class="text">
            <b><h1>Sarada Vilas College</h1></b>
			<div class="text">
			   <h2>Krishnamurthypuram, Mysuru - 04 <br>Office Copy</h2>
			   </div>
			   <style>
				.text {
					font-size: 50px;
					text-align: center;
				}
				</style>
        </div>
		<style>
.container {
display: grid;
align-items: center;
grid-template-columns: 1fr 1fr 1fr;
column-gap: 5px;
}
img {
max-width: 100px;
max-height: 100px;
}
.text {
font-size: 12px;
}
</style>
    </div>
	<hr>
	<div class="flex">
		<div class="w-50">
			<p>Reciept No. <b><?php echo $id ?></b></p>
			<p>Student Name: <b><?php echo ucwords($studentName) ?></b></p>
			<p>Gender: <b><?php echo $gender ?></b></p>
			<p>Father Name: <b><?php echo $fatherName ?></b></p>
			<p>Contact Number: <b><?php echo $contactNumber ?></b></p>
			<p>Date & Time - Ins 1: <b><?php echo $created_at1 ?></b></p>
		
		</div>
		<?php if($_GET['id'] > 0): ?>
		<div class="w-50">
		<p>Date & Time - Ins 2: <b><?php echo $created_at2 ?></b></p>
		<p>Date & Time - Ins 3: <b><?php echo $created_at3 ?></b></p>
		<p>Academic Year: <b>2023-24 </b></p>
			
			<p>Class: <b><?php echo ucwords($class) ?></b></p>
			<p>Course: <b><?php echo ucwords($course) ?></b></p>
			<p>Combination: <b><?php echo $combination ?></b></p>
			
		</div>
		<?php endif; ?>
	</div>
	<hr>
				<table width="100%">
					<tr>
					<div class="container1">
					<p>Aided/Unaided: <b><?php echo $au ?></b></p>
			<p>Marks: <b><?php echo $markss ?></b></p>
			<p>Percentage: <b><?php echo $percentage ?></b></p>
			<p>Category: <b><?php echo $category ?></b></p>
			
		</div>
		</table>
		<style>
.container1 {
display: grid;
align-items: center;
grid-template-columns: 1fr 1fr 1fr 1fr;
column-gap: 5px;
}
</style>
		</tr>
	
		</table>
		</div>
	<hr>
	<p><b>Payment Summary</b></p>
	<table class="wborder">
		<tr>
			<td width="50%">
				<p><b>Fee Details</b></p>
				<hr>
				
<table class="wborder  width = "100%">
<tr>
						<td class='text-left'>Tuition Fee &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; : <b> <?php  echo $Tuition ?> </b></td>
						<td class='text-centre'>Total Fee &emsp;&nbsp;&nbsp;: <b><?php echo $total ?></b></td>
						
					</tr>
					<tr>
						<td class='text-left'>Development & Maintainance Fee &nbsp;: <b><?php echo $dmFee ?></b></p></td>
						<td class='text-centre'>Installment 1 : <b><?php echo $pa1 ?></b></td>
						
					</tr>
					<tr>
					<td class='text-left'>Building Fee &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;: <b><?php echo $Building ?></b></td>
					<td class='text-centre'>Installment 2 : <b><?php echo $pa2 ?></b></td>	
						
					</tr>
					<tr>
						<td class='text-left'>Integrated/Miscellaneous Fee&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b><?php echo $imFee ?></b></td>
						<td class='text-centre'>Installment 3 : <b><?php echo $pa3 ?></b></td>
					</tr>

					</tr>
					<tr>
						<td class='text-left'>Total Fees In Words&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b><?php echo $tfiw ?></b></td>
						<td class='text-centre'>Balance &emsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b><?php echo $ba ?></b></td>
					</tr>

					
				</table>
				<!-- <table width="100%">
					<tr>
					<div class="w-50">
					<p>Total Fees In Words&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp; : <b><?php echo $tfiw ?></b></p>

				</table> -->
</table>

<p class='text-right'><br><br><b>Authorised Signature</b> </p>
<hr>








<?php 
$fees = $conn->query("SELECT * FROM task1  where id = {$_GET['id']}");
foreach($fees->fetch_array() as $k => $v){
	$$k= $v;
}
$task1 = $conn->query("SELECT * FROM task1 where id = $id ");
$fees = array();
// while($row=$task1->fetch_array()){
// 	$id[$row['id']] = $row;
// }
?>

<style>
	.flex{
		display: inline-flex;
		width: 100%;
	}
	.w-50{
		width: 50%;
	}
	.text-center{
		text-align:center;
	}
	.text-right{
		text-align:right;
	}
	table.wborder{
		width: 100%;
		border-collapse: collapse;
	}
	table.wborder>tbody>tr, table.wborder>tbody>tr>td{
		border:1px solid;
	}
	p{
		margin:unset;
	}

</style>
<div class="container-fluid">
<div class="container">

        <div class="image">
            <img src="svc.jpg" width=100>
        </div>
        <div class="text">
            <b><h1>Sarada Vilas College</h1></b>
			<div class="text">
			   <h2>Krishnamurthypuram, Mysuru - 04 <br>Office Copy</h2>
			   </div>
			   <style>
				.text {
					font-size: 50px;
					text-align: center;
				}
				</style>
        </div>
		<style>
.container {
display: grid;
align-items: center;
grid-template-columns: 1fr 1fr 1fr;
column-gap: 5px;
}
img {
max-width: 100px;
max-height: 100px;
}
.text {
font-size: 12px;
}
</style>
    </div>
	<hr>
	<div class="flex">
		<div class="w-50">
			<p>Reciept No. <b><?php echo $id ?></b></p>
			<p>Student Name: <b><?php echo ucwords($studentName) ?></b></p>
			<p>Gender: <b><?php echo $gender ?></b></p>
			<p>Father Name: <b><?php echo $fatherName ?></b></p>
			<p>Contact Number: <b><?php echo $contactNumber ?></b></p>
			<p>Date & Time - Ins 1: <b><?php echo $created_at1 ?></b></p>
		
		</div>
		<?php if($_GET['id'] > 0): ?>
		<div class="w-50">
		<p>Date & Time - Ins 2: <b><?php echo $created_at2 ?></b></p>
		<p>Date & Time - Ins 3: <b><?php echo $created_at3 ?></b></p>
		<p>Academic Year: <b>2023-24 </b></p>
			
			<p>Class: <b><?php echo ucwords($class) ?></b></p>
			<p>Course: <b><?php echo ucwords($course) ?></b></p>
			<p>Combination: <b><?php echo $combination ?></b></p>
			
		</div>
		<?php endif; ?>
	</div>
	<hr>
				<table width="100%">
					<tr>
					<div class="container1">
					<p>Aided/Unaided: <b><?php echo $au ?></b></p>
			<p>Marks: <b><?php echo $markss ?></b></p>
			<p>Percentage: <b><?php echo $percentage ?></b></p>
			<p>Category: <b><?php echo $category ?></b></p>
			
		</div>
		</table>
		<style>
.container1 {
display: grid;
align-items: center;
grid-template-columns: 1fr 1fr 1fr 1fr;
column-gap: 5px;
}
</style>
		</tr>
	
		</table>
		</div>
	<hr>
	<p><b>Payment Summary</b></p>
	<table class="wborder">
		<tr>
			<td width="50%">
				<p><b>Fee Details</b></p>
				<hr>
				
<table class="wborder  width = "100%">
<tr>
						<td class='text-left'>Tuition Fee &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; : <b> <?php  echo $Tuition ?> </b></td>
						<td class='text-centre'>Total Fee &emsp;&nbsp;&nbsp;: <b><?php echo $total ?></b></td>
						
					</tr>
					<tr>
						<td class='text-left'>Development & Maintainance Fee &nbsp;: <b><?php echo $dmFee ?></b></p></td>
						<td class='text-centre'>Installment 1 : <b><?php echo $pa1 ?></b></td>
						
					</tr>
					<tr>
					<td class='text-left'>Building Fee &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;: <b><?php echo $Building ?></b></td>
					<td class='text-centre'>Installment 2 : <b><?php echo $pa2 ?></b></td>	
						
					</tr>
					<tr>
						<td class='text-left'>Integrated/Miscellaneous Fee&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b><?php echo $imFee ?></b></td>
						<td class='text-centre'>Installment 3 : <b><?php echo $pa3 ?></b></td>
					</tr>

					</tr>
					<tr>
						<td class='text-left'>Total Fees In Words&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b><?php echo $tfiw ?></b></td>
						<td class='text-centre'>Balance &emsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b><?php echo $ba ?></b></td>
					</tr>

					
				</table>
				<!-- <table width="100%">
					<tr>
					<div class="w-50">
					<p>Total Fees In Words&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp; : <b><?php echo $tfiw ?></b></p>

				</table> -->
</table>

<p class='text-right'><br><br><b>Authorised Signature</b> </p>
<hr>




<?php 
$fees = $conn->query("SELECT * FROM task1  where id = {$_GET['id']}");
foreach($fees->fetch_array() as $k => $v){
	$$k= $v;
}
$task1 = $conn->query("SELECT * FROM task1 where id = $id ");
$fees = array();
// while($row=$task1->fetch_array()){
// 	$id[$row['id']] = $row;
// }
?>

<style>
	.flex{
		display: inline-flex;
		width: 100%;
	}
	.w-50{
		width: 50%;
	}
	.text-center{
		text-align:center;
	}
	.text-right{
		text-align:right;
	}
	table.wborder{
		width: 100%;
		border-collapse: collapse;
	}
	table.wborder>tbody>tr, table.wborder>tbody>tr>td{
		border:1px solid;
	}
	p{
		margin:unset;
	}

</style>
<div class="container-fluid">
<div class="container">

        <div class="image">
            <img src="svc.jpg" width=100>
        </div>
        <div class="text">
            <b><h1>Sarada Vilas College</h1></b>
			<div class="text">
			   <h2>Krishnamurthypuram, Mysuru - 04 <br>Office Copy</h2>
			   </div>
			   <style>
				.text {
					font-size: 50px;
					text-align: center;
				}
				</style>
        </div>
		<style>
.container {
display: grid;
align-items: center;
grid-template-columns: 1fr 1fr 1fr;
column-gap: 5px;
}
img {
max-width: 100px;
max-height: 100px;
}
.text {
font-size: 12px;
}
</style>
    </div>
	<hr>
	<div class="flex">
		<div class="w-50">
			<p>Reciept No. <b><?php echo $id ?></b></p>
			<p>Student Name: <b><?php echo ucwords($studentName) ?></b></p>
			<p>Gender: <b><?php echo $gender ?></b></p>
			<p>Father Name: <b><?php echo $fatherName ?></b></p>
			<p>Contact Number: <b><?php echo $contactNumber ?></b></p>
			<p>Date & Time - Ins 1: <b><?php echo $created_at1 ?></b></p>
		
		</div>
		<?php if($_GET['id'] > 0): ?>
		<div class="w-50">
		<p>Date & Time - Ins 2: <b><?php echo $created_at2 ?></b></p>
		<p>Date & Time - Ins 3: <b><?php echo $created_at3 ?></b></p>
		<p>Academic Year: <b>2023-24 </b></p>
			
			<p>Class: <b><?php echo ucwords($class) ?></b></p>
			<p>Course: <b><?php echo ucwords($course) ?></b></p>
			<p>Combination: <b><?php echo $combination ?></b></p>
			
		</div>
		<?php endif; ?>
	</div>
	<hr>
				<table width="100%">
					<tr>
					<div class="container1">
					<p>Aided/Unaided: <b><?php echo $au ?></b></p>
			<p>Marks: <b><?php echo $markss ?></b></p>
			<p>Percentage: <b><?php echo $percentage ?></b></p>
			<p>Category: <b><?php echo $category ?></b></p>
			
		</div>
		</table>
		<style>
.container1 {
display: grid;
align-items: center;
grid-template-columns: 1fr 1fr 1fr 1fr;
column-gap: 5px;
}
</style>
		</tr>
	
		</table>
		</div>
	<hr>
	<p><b>Payment Summary</b></p>
	<table class="wborder">
		<tr>
			<td width="50%">
				<p><b>Fee Details</b></p>
				<hr>
				
<table class="wborder  width = "100%">
<tr>
						<td class='text-left'>Tuition Fee &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; : <b> <?php  echo $Tuition ?> </b></td>
						<td class='text-centre'>Total Fee &emsp;&nbsp;&nbsp;: <b><?php echo $total ?></b></td>
						
					</tr>
					<tr>
						<td class='text-left'>Development & Maintainance Fee &nbsp;: <b><?php echo $dmFee ?></b></p></td>
						<td class='text-centre'>Installment 1 : <b><?php echo $pa1 ?></b></td>
						
					</tr>
					<tr>
					<td class='text-left'>Building Fee &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;: <b><?php echo $Building ?></b></td>
					<td class='text-centre'>Installment 2 : <b><?php echo $pa2 ?></b></td>	
						
					</tr>
					<tr>
						<td class='text-left'>Integrated/Miscellaneous Fee&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b><?php echo $imFee ?></b></td>
						<td class='text-centre'>Installment 3 : <b><?php echo $pa3 ?></b></td>
					</tr>

					</tr>
					<tr>
						<td class='text-left'>Total Fees In Words&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b><?php echo $tfiw ?></b></td>
						<td class='text-centre'>Balance &emsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b><?php echo $ba ?></b></td>
					</tr>

					
				</table>
				<!-- <table width="100%">
					<tr>
					<div class="w-50">
					<p>Total Fees In Words&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp; : <b><?php echo $tfiw ?></b></p>

				</table> -->
</table>

<p class='text-right'><br><br><b>Authorised Signature</b> </p>

