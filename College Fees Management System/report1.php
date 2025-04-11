<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Report</title>
</head>
<body>
<table class="table table-bordered">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <center><h4>Student Data</h4></center>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <!-- <div class="card mt-4"> -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
									<th class="text-center">Reciept No</th>
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
                                <?php 
                                    $con = mysqli_connect("localhost","root","","crud3");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM task1 WHERE CONCAT(id,studentName,gender,fatherName,contactNumber,class,course,combination,au,markss,TMarks,percentage,category,Tuition,dmFee,Building,imFee,total,pa1,created_at1,pa2,created_at2,pa3,created_at3,ba,tfiw) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['studentName']; ?></td>
                                                    <td><?= $items['gender']; ?></td>
                                                    <td><?= $items['fatherName']; ?></td>
                                                    <td><?= $items['contactNumber']; ?></td>
                                                    <td><?= $items['class']; ?></td>
                                                    <td><?= $items['course']; ?></td>
                                                    <td><?= $items['combination']; ?></td>
                                                    <td><?= $items['au']; ?></td>
                                                    <td><?= $items['markss']; ?></td>
                                                    <td><?= $items['TMarks']; ?></td>
                                                    <td><?= $items['percentage']; ?></td>
                                                    <td><?= $items['category']; ?></td>
                                                    <td><?= $items['Tuition']; ?></td>
                                                    <td><?= $items['dmFee']; ?></td>
                                                    <td><?= $items['Building']; ?></td>
                                                    <td><?= $items['imFee']; ?></td>
                                                    <td><?= $items['total']; ?></td>
                                                    <td><?= $items['pa1']; ?></td>
                                                    <td><?= $items['created_at1']; ?></td>
                                                    <td><?= $items['pa2']; ?></td>
                                                    <td><?= $items['created_at2']; ?></td>
                                                    <td><?= $items['pa3']; ?></td>
                                                    <td><?= $items['created_at3']; ?></td>
                                                    <td><?= $items['ba']; ?></td>
                                                    <td><?= $items['tfiw']; ?></td>                                                    
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <div class="text-center">
  <button onclick="window.print()" class="btn-btn-primary">Print</button>
          </div>
          
</body>

</html>