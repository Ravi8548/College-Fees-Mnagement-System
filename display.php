<?php include('db.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Sarada Vilas College</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container">
            <button class="btn btn-primary my-5"><a href="index11.php" class="text-light">Add Students</a></button>
            <button class="btn btn-primary my-5"><a href="report.php" class="text-light">Report Ins 1</a></button>
            <button class="btn btn-primary my-5"><a href="report copy.php" class="text-light">Report Ins 2</a></button>
            <button class="btn btn-primary my-5"><a href="report copy 2.php" class="text-light">Report Ins 3</a></button>
            <button class="btn btn-primary my-5"><a href="report1.php" class="text-light">Student Data Report</a></button>
            
        </div>

        <div class="col-md-8">
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
            
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          
          $query = "SELECT * FROM task1 order by id desc";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
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
            
            
            
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>">
              <button type="button" class="btn btn-warning">Edit</button>
              
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>">
              <button type="button" class="btn btn-danger">Delete</button>
              </a>
              <a href="print.php?id=<?php echo $row['id']?>">
              <button type="button" class="btn btn-success">Print</button>
              
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>
          </head>
<?php include('includes/footer.php'); ?>


<div class="text-center">
  <button onclick="window.print()" class="btn-btn-primary">Print</button>
          </div>


    </body>
</html>