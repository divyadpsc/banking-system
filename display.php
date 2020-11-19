<!Doctype html>
<html>

<head>
    <title>Users-page</title>

    <link rel="icon" type="image/png" href="transfer1.png" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php
        include("connection.php");
        error_reporting(0);
        ?>
        
        <style type="text/css">
 .list-group{
  width: auto;
  height: auto;
 }

 .container{
  padding: auto;
  width: auto;
  height: 100%;
 }
 @import url('https://fonts.googleapis.com/css?family=Varela+Round');
body{
font-family: 'Varela Round', sans-serif; 
font-size:24px;
line-height: none;
background-color:black;
}
img{
	border:1px solid white;
}
.container{
max-width:auto;
background-color:black;
}
img{ max-width:90%;}
.list-group{
 float: left;
 width: 25vw;
 overflow:hidden; 
 clear:both;
 height: 800px;
 overflow-y: scroll;
 margin: 0px;
}
.pa{
	border:10px solid;
}
.footer1
{
    background-color:#1A3E16;
    color:white;
    height:8%;
    width: 100%;
    position: fixed;
    bottom:0px;
    text-align:center;
    z-index: 5;
    font-size: 15px;
  font-family: sans-serif;
}
.footer2
{
    background-color:#1A3E16;
    color:white;
    height:8%;
    width: 100%;
    position: relative;
    bottom:0px;
    text-align:center;
    z-index: 5;
    font-size: 15px;
  font-family: sans-serif;
}
.chat_img {
  float: left;
  width: 20%;
}

.list-group-item{
  padding: 30px;
  background-color:black;
}
.msgs {
 
  padding: auto;
  height:auto;
  width:auto;
}

.myclass{
    background-color:black;
}
#t{
	width:500px;
	height:500px;
}
.top{
    border-bottom: 1px solid rgba(0, 0, 0, 0);
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    padding: 10px 15px;
    margin: 10px;
    width:500px;
    height:200px;
    background-color: #428BCA;
    border-color: #428BCA;
    color: #FFFFFF;
}
  .pay{
	  margin-top:50px;
  }
.panel-heading {
    border-bottom: 1px solid rgba(0, 0, 0, 0);
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
	height:100px;
	width:1100px;
    padding: 10px 15px;
    background-color: black;
    border-color:white;
    color:#fff;
}   

.panel-title {
    width: auto;
    height: auto;
    font-size: 32px;
    font-weight:bold;
    margin: 10px;
    color: white;
}   
.cust{
	background-color:black;
	color:white;

}
.table-user-information{
	height:550px;
	width:550px;
}
/*.table-user-information > tbody > tr {
   
	
    margin: 0;
}*/

.table-user-information > tbody > tr:first-child {
    border-top: 0;
	color:white;

}

.table-user-information > tbody > tr > td {
    border-top: 0;
	color:white;
}
.panel-body{
	border:5px solid white;
	width:1000px;
}
.btn{
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-weight: normal;
    line-height: 1.42;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 31px;
    border-image: 4px;
    background-color: #2065d4; 
    color: black;
    font-weight: 600 !important;
    margin-right: 10px;  
    font-size: 18px;
	align:center;
    
}

.buttons .btn{
    padding: 18px 40px;
    margin-bottom: 20px;
    margin-right: 13px;
}
.i{
	height:400px;
	width:400px;
}
.btn:hover {
  background-color: #74de0b;
}

/*.his{
    font-size: 2px;
}*/

.backk button{
    position:relative;
left: 50%;
margin-top:50%;
}
</style>


</head>
<body>

    <?php
   $query="SELECT * FROM users";
   $data=mysqli_query($conn,$query);
   $total=mysqli_num_rows($data);

    if($total !=0)
  { 
?>
    <div class="container">
	<h1 class="cust"><b>CUSTOMERS'S LIST</h1></b>
        <div class="list-group">
		
            <?php
    while($result =mysqli_fetch_assoc($data))
    {
     ?>
	
	 
            <a class="list-group-item list-group-item-action flex-column align-items-start"
			 
                           href='display.php?id=<?php echo $result['id']; ?>'>
						  
                <div class="chat_img"> <img src="profile.jpg" alt="chat_img"> </div>
				
				 <h6>CLICK TO VIEW THE DETAILS</h6>
                <?php echo $result['name'];}
    }
     else
    {
    echo"No Record Found";
    }
    ?>
            </a>
        </div>
        <?php
   if (isset($_GET["id"])) { $id  = $_GET["id"]; } else { $id=0; 
};
   $data=mysqli_query($conn,"SELECT * FROM users WHERE id=$id ");
   $total=mysqli_num_rows($data);
   $result =mysqli_fetch_array($data);
?>

        <div class="col-sm-6">
            <div class="panel-heading">
                <h3 class="panel-title">User Information :</h3>
            </div>
            <div class="panel-body">
                <table class="table table-responsive table-user-information">
		<img src="unnamed.png" align="right" class="i">
                    <tbody>
                        <tr>
                            <td >Name:</td>
                            <td>
                                   <?php $val = isset($result['name']) ? $result['name'] : 0;
                     echo $val;?>

                            </td>
                        </tr>
                        <tr>
                            <td>Account ID:</td>
                            <td>
                                <?php $val = isset($result['id']) ? $result['id'] : 0;
                     echo $val;?>
                            </td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>
                                <?php $val = isset($result['email']) ? $result['email'] : 0;
                     echo $val;?>
                            </td>
                        </tr>
                        <tr>
                            <td>Credits</td>
                            <td>
                <?php $val = isset($result['credit']) ? $result['credit'] : 0;
                     echo $val;?>
                            </td>
                        </tr>
                    </tbody>
	
                </table>
				
								<form action="index.html">
					<button type="submit" class="btn" align="right">BACK</button>
					</form>
					  </div>
          

</body>

</html>
