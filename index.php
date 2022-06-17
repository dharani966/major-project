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
  <?php function get_safe_value($con,$str)
  {
      if($str!='')
      {
          $str=trim($str);
          return mysqli_real_escape_string($con,$str);
      }
  }

  if(isset($_POST['submit']))
  {

      $name=get_safe_value($db,$_POST['name']);
      $grescore=get_safe_value($db,$_POST['grescore']);
      $tofelscore=get_safe_value($db,$_POST['tofelscore']);
      $rating=get_safe_value($db,$_POST['rating']);
      $cgpa=get_safe_value($db,$_POST['cgpa']);
      $stream=get_safe_value($db,$_POST['stream']);
      $course=get_safe_value($db,$_POST['course']);



      }


   ?>
<div class="content">
	<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header pl-3">
							<strong class="card-title pl-2">Admission Prediction System</strong>

						</div>
						<div class="card-body">
								<div class="tab-content pl-3 pt-2" id="nav-tabContent">
									<div class="tab-pane fade show active" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
									<div class="row">
										<div class="row col-lg-12">
											<div class="card mt-2 col-lg-12" >
												<div class="card-body">
                          <form action="next.php" method="get">

                           <div class="form-group">
                               <label class="control-label mb-1">Name</label>
                               <input id="name" name="name" type="text" class="form-control">
                           </div>
                           <div class="row">
                           <div class="form-group col-md-6">
                               <label  class="control-label mb-1">GRE Score</label>
                               <input id="grescore" name="grescore" type="number" min="1" max="340" class="form-control" >
                           </div>
                           <div class="form-group col-md-6">
                               <label  class="control-label mb-1">Tofel Score</label>
                               <input id="tofelscore" name="tofelscore" type="number" min="1" max="320" class="form-control" >
                           </div>
                         </div>
                         <div class="row">
                           <div class="form-group col-md-6">
                               <label  class="control-label mb-1">Univeristy Rating</label>
                               <select name="rating" id="rating" class="form-control">
                                    <option value="0">Select Rating</option>
                                    <option value="1">#1</option>
                                    <option value="2">#2</option>
                                    <option value="3">#3</option>
                                    <option value="4">#4</option>
                                    <option value="5">#5</option>
                                </select>
                           </div>
                           <div class="form-group col-md-6">
                               <label  class="control-label mb-1">CGPA</label>
                               <input id="cgpa" name="cgpa" type="text" class="form-control" >
                           </div>
                           </div>
                           <div class="row">
                           <div class="form-group col-md-6">
                               <label  class="control-label mb-1">Specilization / Stream</label>
                               <select name="stream" id="stream" class="form-control">
                                    <option value="0">Select stream</option>
                                    <option value="1">CSE</option>
                                    <option value="2">ECE</option>
                                    <option value="3">MECH</option>
                                </select>
                           </div>

                           <div class="form-group col-md-6">
                               <label  class="control-label mb-1">Course</label>
                               <select name="course" id="course" class="form-control">
                                    <option value="0">Select Course</option>
                                    <option value="1">AI</option>
                                    <option value="2">ML</option>
                                    <option value="3">ROBOTICS</option>
                                </select>
                           </div>
                            </div>
                           <div>
                               <button type="submit" class="btn btn-success float-right">Predict</button>
                           </div>
                       </form>
                     </div>
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
