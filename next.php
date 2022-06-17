<!doctype html>
<?php include 'connection.php'; ?>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admission Prediction System</title>
    <meta name="description" content="A Major Project By KD">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://www.clipartmax.com/png/middle/101-1019829_internet-multiple-tab-tabs-web-page-webpage-icon-web-page-tab-png.png">
    <link rel="shortcut icon" href="https://www.clipartmax.com/png/middle/101-1019829_internet-multiple-tab-tabs-web-page-webpage-icon-web-page-tab-png.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>


  <?php
  if(isset($_GET['rating'],$_GET['grescore'],$_GET['tofelscore'],$_GET['cgpa'],$_GET['name']))
  {
    $name=$_GET['name'];
    $rating=$_GET['rating'];
    $gre=$_GET['grescore'];
    $tofel=$_GET['tofelscore'];
    $cgpa=$_GET['cgpa'];
  }
  ?>
<div class="content">
	<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header pl-3">
							<strong class="card-title pl-2">Here are the List Of Colleges for <?php echo $name ?> with GRE=<?php echo $gre ?> , TOFEL=<?php echo $tofel; ?> , CGPA=<?php echo $cgpa; ?> & University Rating >= <?php echo $rating; ?> </strong>

						</div>
						<div class="card-body">
								<div class="tab-content pl-3 pt-2" id="nav-tabContent">
									<div class="tab-pane fade show active" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">

										<div class="row col-lg-12">



                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">College</th>
						    <th scope="col">Chance Of Admission</th>
                                        <th scope="col">Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                   $sql1=mysqli_query($db,"select * from colleges where rating>=$rating AND gre>=$gre AND tofel>=$tofel AND cgpa>=$cgpa");

                                     $i=1;
                                     while($row=mysqli_fetch_assoc($sql1)){ ?>
                                    <tr>
                                        <th scope="row"><?php echo $i; ?></th>
                                        <td><?php echo $row['college']; ?></td>
						    <td><?php echo $row['chance']*100; ?></td>
                                        <td><?php echo $row['rating']; ?></td>
                                    </tr>
                                      <?php  $i++; }   ?>
                                </tbody>
                            </table>
                        </div>



									</div>
									</div>

						</div>
					</div>

</div>
</div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>


</body>
</html>
