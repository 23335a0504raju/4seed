  <?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  

    <style> 
 * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
html {
    font-size: 10px;
    font-family:sans-serif;
    scroll-behavior: smooth;
}
a {
    text-decoration: none;
}
.container {
    min-height: 100vh;
    width: 100%;
    padding: 0px;
    padding-right: 0px;
    display: flex;
    align-items: center;
    justify-content: center;
}
img {
    height: 100vh;
    width: 100%;
    object-fit: cover;
}
p {
    color: black;
    font-size: 1.4rem;
    margin-top: 5px;
    line-height: 2.5rem;
    font-weight: 300;
    letter-spacing: 0.05rem;
}
.section-title {
    font-size: 4rem;
    font-weight: 300;
    color: black;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 0.2rem;
    text-align: center;
}
.section-title span {
    color: #8d021f;
    
}

.cta {
    display: inline-block;
    padding: 10px 30px;
    color: white;
    background-color: transparent;
    border: 2px solid crimson;
    font-size: 2rem;
    text-transform: uppercase;
    letter-spacing: 0.1rem;
    margin-top: 30px;
    transition: 0.3s ease;
    transition-property: background-color, color;
    text-align: center;
}
.cta:hover {
    color: ghostwhite;
    background-color: #363636;
    text-decoration: none;
}
.brand h1 {
    font-size: 4rem;
    text-transform: uppercase;
    color: white;
    font-weight: 50px;
    font-family:Gill Sans ;
}
.brand h1 span {
    color: #01796f;
}

#start {
    background-image: url("images/veg.jpeg");
    background-size: cover;
    background-position: top center;
    position: relative;
    z-index: 1;
}
#start::after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background-color: black;
    opacity: 0.7;
    z-index: -1;
}
.box-container{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
}


.box-container .box{
  flex:1 1 30rem;
  text-align: center;
  padding:10rem;
  border:.2rem solid rgba(0,0,0,.3);
  border-radius: 20px;
  overflow: hidden;
  position: relative;
  box-shadow: 0px 0px 18px 0 #0000002c;
}


.box-container .box .discount{
  position: absolute;
  top:1rem; left: 1rem;
  background:rgba(0,255,0,.1);
  color:black;
  padding:.7rem 1rem;
  font-size: 2rem;
}

.box-container .box h3{
  color: #222021;
  font-size: 2.5rem;
  text-transform: uppercase;
  font-weight: 20px;
}

</style>
</head>

<body>

  <section id="start">
    <div class="home container">
        <div>
            
              <div class="box-container">

        <div class="box">
            <span class="discount"></span>
           
            <h3><?php  
      
            $con=mysqli_connect("localhost","root","","4seed");
if(!$con){
  die('error'.mysqli_error($con));
} 


//for name
   $result = mysqli_query($con, "SELECT * FROM farmers");



while ($row = mysqli_fetch_array($result)) {
      if($row['pNum']==$_SESSION['phone']){
    
      $nam=$row["f_name"];
         
    }
    }









             $result = mysqli_query($con, "SELECT * FROM farmers");



while ($row = mysqli_fetch_array($result)) {
      if($row['pNum']==$_SESSION['phone']){
    
    
          echo ' <span >'.$nam.'</span>';
 echo ' <span >'.$row['l_name'].'</span>';
     echo '<span >'.$row['type'].'</span>';
     echo '<span >'.$_SESSION['phone'].'</span>';

    
    }
    }





/*
 $result = mysqli_query($con, "SELECT * FROM product");

 while ($row = mysqli_fetch_array($result)) {
      if($row['farmname']=$nam){
    
    //  echo 'hai <span class="discount">'.$row['farmname'].'</span>';

    }
    }*/


            //echo "hai".$_SESSION['phone'];
?> </h3>
            
            <div class="price"> <span> 0rs </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
        </div>



           
            
           
            <h3><?php
$result = mysqli_query($con, "SELECT * FROM product");
while ($row = mysqli_fetch_array($result)) {
      if($row["farmname"]==$nam){
    echo"<div class='box'>";
    echo 'hai <span>'.$row['filename'].'</span>';
    echo"</div>";
     

    }
    }
        ?></h3>
            
           
        </div>




  
  </section>


</body>
</html>