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
		<style>
		@import url('https://fonts.googleapis.com/css?family=Varela+Round');
body{
font-family: 'Varela Round', sans-serif; 
font-size:24px;
background-color:black;
line-height: none;
}
.container{
max-width:auto;
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
}
.msgs {
 
  padding: auto;
  height:auto;
  width:auto;
}

.myclass{
    background-color:black;
}

.top{
    border-bottom: 1px solid rgba(0, 0, 0, 0);
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    padding: 10px 15px;
    margin: 10px;
    width:360px;
    height:119px;
    background-color: #428BCA;
    border-color: white;
    color: #FFFFFF;
}
  
.panel-heading {
    border-bottom: 1px solid rgba(0, 0, 0, 0);
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    padding: 10px 15px;
    background-color: black;
    border-color: black;
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


.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
    margin: 0;
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}

.table-user-information > tbody > tr > td {
    border-top: 0;
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
    
}

.buttons .btn{
    padding: 18px 40px;
    margin-bottom: 20px;
    margin-right: 13px;
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
.form-control{
height:50px;
 box-shadow: 10px 10px 8px 10px #888888;
 border:5px solid black;}
</style>
<body>

            <div class="panel-heading myclass">
                <h3 class="panel-title">Transfer Credits :</h3>
            </div>
            <br>
	
            <form class="form-group" action="payment.php" method="post">
                <?php
   $query="SELECT name FROM users";
   $data=mysqli_query($conn,$query);
    ?>
                <div class="col">
                    <label for="from">Select User From:</label>
                    <select class="form-control" name="from">
                        <option value="null">Not Selected</option>
                <?php 
          while($result= mysqli_fetch_array($data))
          {
           echo "<option value='" . $result['name']. "'>" . $result['name'] . "</option>";
            
          }
          ?>
                    </select>
                </div>
<br>

            <?php
   $query="SELECT name FROM users";
   $data=mysqli_query($conn,$query);
                                
    ?>
                <div class="col">
                    <label for="to">Select User To:</label>
                    <select class="form-control" name="to" >
                        <option value="null"><h1>Not Selected</h1></option>
                        <?php 
          while($result= mysqli_fetch_array($data))
          {
           echo "<option value='" . $result['name'] . "'>" . $result['name'] . "</option>";
            
          }
          ?>
                    </select>
                </div>
				<br>
				
			
				
				
                <div class="col">
                    <label for="amount">Credits:</label>
                    <input class="form-control" type="number" name="amount" min=1 autocomplete="off">
                </div>
                <br>
                <div class="col-sm-6 nopadding">
                    <br>
                    <div class="buttons" align="center">
                        <button type="submit" class="btn" name="submit" value="submit">Transfer credits</button>
                        <a href="index.html" class="btn" >Back</a>
                    </div>
                    </div>        
             
               
            </form>
			
<img src="unnamed.gif" align="center" >
</body>
</html>