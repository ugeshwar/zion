<?php
$server="localhost";
$username="root";
$pass="";
$Database="project";

#Establishing connection
$conn=mysqli_connect($server,$username,$pass,$Database);
if (!$conn) 
{
  die("connection error:".mysqli_connect_error());
}

$result = mysqli_query($conn,"SELECT fname, lname, dob, gender, mnumber, email, education, percentage, yop, exp, cl, aadhar, pan, passport FROM users");

echo "<html>
<head>
<title>Table</title>
<link rel='stylesheet' type='text/css' href='../DataTables/datatables.min.css'/>
<script type='text/javascript' src='../DataTables/datatables.min.js'></script>


<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}


th {
    background-color: #4CAF50;
    color: black;
}
#one
{
  width:10em;
  margin-left:auto;
  margin-right:auto;
}
#two
{
  padding:20px 60px 20px 60px;
  background:transparent;
  border:3px solid black;
  border-radius:20px;
  color:white;
}

#two:hover
{
  background:black;
}
body
    {    
      background: url(../bg.jpg);
      background-repeat: repeat;
      color: white;
    }
</style>
<script type='text/javascript'>
    $(document).ready(function() {
            table= $('#example').DataTable(
              {
                select:{
                  style:'single'
                },
                'order': [[ 0, 'asc' ]]
              }
            );
          });
</script>
</head><body>
<table border='1' id='example'>
<thead>
<th>First Name</th>
<th>Last Name</th>
<th>Date of Birth</th>
<th>Gender</th>
<th>Mobile Number</th>
<th>Educational Qualification</th>
<th>Percentage</th>
<th>Year of Passing</th>
<th>Experience</th>
<th>Current Location</th>
<th>Aadhar Number</th>
<th>PAN Number</th>
<th>Passport Number</th>
</thead>";

while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['lname'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "<td>" . $row['mnumber'] . "</td>";
  echo "<td>" . $row['education'] . "</td>";
  echo "<td>" . $row['percentage'] . "</td>";
  echo "<td>" . $row['yop'] . "</td>";
  echo "<td>" . $row['exp'] . "</td>";
  echo "<td>" . $row['cl'] . "</td>";
  echo "<td>" . $row['aadhar'] . "</td>";
  echo "<td>" . $row['pan'] . "</td>";
  echo "<td>" . $row['passport'] . "</td>";
  echo "</tr>";

  }

echo "</table><br><br><div id='one'>
    <a href='../loginsuccess.html'><button id='two'>Back</button>
    </div>
</body>
</html>";

mysqli_close($conn);

?>
