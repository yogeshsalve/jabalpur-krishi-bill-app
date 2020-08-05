<?php
include 'db.php';
if(isset($_POST['submit'])){
	//connect to the database
	$mysqli = NEW MySQLi("localhost", "root", "", "jabalpur-agri-bill");

}
else{

  $query = "select count(*) from agribill; ";

         
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    $appliedforCount = $row[0];

}
?>

<!-- TO GET FIRST RECORD -->
<?php
include 'db.php';

if(isset($_POST['submit'])){
	//connect to the database
	$mysqli = NEW MySQLi("localhost", "root", "", "jabalpur-agri-bill");

	
	


}
else{

  $query = "select id from agribill order by id asc limit 1; ";

         
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    $StartCount = $row[0];


}

?>
<!-- END FIRST RECORD CODE -->


<!-- TO GET LAST RECORD -->
<?php
include 'db.php';

if(isset($_POST['submit'])){
	//connect to the database
	$mysqli = NEW MySQLi("localhost", "root", "", "jabalpur-agri-bill");

	
	


}
else{





  $query = "select id from agribill order by id desc limit 1; ";

         
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    $EndCount = $row[0];


}

?>
<!-- END LAST RECORD CODE -->




<!DOCTYPE html>
<html>
   <head>
     <title>Import Data From Excel or CSV File to Mysql using PHPSpreadsheet</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/bootstrap.min.css" />
     <script src="css/jquery-3.2.1.slim.min.js"></script>
     <script src="css/popper.min.js"></script>
     <script src="js/bootstrap.min.js"></script>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


     <style> 
        .button1 { 
            background-color: white; 
            border: 2px solid black; 
            color: green; 
            padding: 5px 10px; 
            text-align: center; 
            display: inline-block; 
            font-size: 20px; 
            margin: 10px 30px; 
            cursor: pointer; 
            text-decoration:none; 
        } 
      </style> 

      <script>
          function checkforblank() {
            if (document.getElementById('from').value ==""){
              alert('Please enter value for from textbox');
              document.getElementById('from').style.bordercolor= "red";
              return false;
            }
            if (document.getElementById('to').value ==""){
              alert('Please enter value for to textbox');
              document.getElementById('to').style.bordercolor= "red";
              return false;
            }
          }
      </script>

      <script>
          function checkforblank1() {
            if (document.getElementById('from1').value ==""){
              alert('Please enter from value to delete');
              document.getElementById('from1').style.bordercolor= "red";
              return false;
            }
            if (document.getElementById('to1').value ==""){
              alert('Please enter to value to delete');
              document.getElementById('to1').style.bordercolor= "red";
              return false;
            }
          }
      </script>

   

      </head>
      <body>
      <div class="container">

      <br />
      <div class="panel panel-default">

      <div class="alert alert-info" role="alert">
      <h4 class="alert-heading" align="center"><b>मध्य प्रदेश पूर्व क्षेत्र विद्युत वितरण कम्पनी लि. (कृषी विद्युत देयक)</b></h4>
      </div> 

      <!-- SEARCH CODE -->
<?php
$con = new PDO("mysql:host=localhost;dbname=jabalpur-agri-bill",'root','');

if (isset($_POST["submit1"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT id FROM `agribill` WHERE CONS_NUM = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>

      <table>
				<tr>
				  <td><h3><b>Id is:  <?php echo $row->id; ?></b></h3></td>
			  </tr>
		  </table>
 
<?php 
	}
		
		
		else{
			echo "Consumer No. Does not exist";
		}


}

?>
<!-- SEARCH CODE ENDS -->

        <!-- SEARCH ACTION FORM -->
      <div class="alert alert-success">
      <form align="right" method="post">
          <input type="text1" id="search" name="search" placeholder="Consumer No."/>
          <input type="submit" id="submit1" name="submit1" class="btn btn-info" value="Search">
      </form>
      <!-- SEARCH ACTION FORM -->

      

      




























      
              Import Data From Excel or CSV File - (Kindly Delete first header row of file before uploading)
      </div>
      <div class="panel-body">
      <div class="table-responsive">
        <span id="message"></span>
          <form method="post" id="import_excel_form" enctype="multipart/form-data">
            <table class="table">
              <tr>
                <td width="25%" align="right">Select Excel File</td>
                <td width="50%"><input type="file" name="import_excel" /></td>
                <td width="25%"><input type="submit" name="import" id="import" class="btn btn-primary" value="Click to Import" /></td>
              </tr>
            </table>
          </form>
          <hr>
           
              <!-- panel for cards -->
          <div class="alert alert-success" role="alert">
          <!-- <h4 class="alert-heading">Well done!</h4> -->
          <h4><b>Total no. of records present: <?php echo $appliedforCount;?><br>[ Records available from ID :&nbsp;<?php echo $StartCount;?>  to  <?php echo $EndCount;?> ] </b></h4>
          <hr>

          <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
              <form action="print.php" method="post" onsubmit="return checkforblank()">
              <input type="text1" id="from" name="from" placeholder="From"/>
              <input type="text1" id="to" name="to" placeholder="To"/>
              <input type="submit" id="print" name="print" class="btn btn-primary" value="Click to Print">
              <hr>
              </form>

              <form action="delete.php" method="post" onsubmit="return checkforblank1()">
              <input type="text1" id="from1" name="from1" placeholder="From"/>
              <input type="text1" id="to1" name="to1" placeholder="To"/>
              <input type="submit" id="delete" name="delete" class="btn btn-danger" value="Click to Delete">
              </form>
            </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Recent Action :</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-success">Search Here</a>
              </div>
            </div>
            </div>
          </div>

          </div>
              <!-- panel for cards ends -->
          </div>
          </div>
        </div>
     </div>
     <script src="css/jquery.min.js"></script>
     
  </body>
</html>


      <script>
      $(document).ready(function(){
        $('#import_excel_form').on('submit', function(event){
          event.preventDefault();
          $.ajax({
            url:"import.php",
            method:"POST",
            data:new FormData(this),
            contentType:false,
            cache:false,
            processData:false,
            beforeSend:function(){
              $('#import').attr('disabled', 'disabled');
              $('#import').val('Importing...');
            },
            success:function(data)
            {
              $('#message').html(data);
              $('#import_excel_form')[0].reset();
              $('#import').attr('disabled', false);
              $('#import').val('Import');
            }
          })
        });
      });
      </script>
