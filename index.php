<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=0.3">
<meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo 'Quadratic Equation Solver'?></title>

      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="all,follow">
      <!-- Bootstrap CSS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <!-- Custom stylesheet - for your changes-->
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  
  <body>



<div class="jumbotron" style="">

  <div class="container">
    <div class="row">
  <div class="col-lg-6">
  <h3>Quadratic Equation Solver</h3>
  <p>I created this when I was having the #DevC30DaysOfCode. I love maths and coding so I decided to create this on the second say of the code Marathon</p>
<br><p><button type="button" onclick="calc()"  class="btn btn-primary shadow mr-2 outline-light" style="border-radius:0px; background: maroon; border-color: maroon;"><b> Calculate</b> </button>
<button type="button" onclick="reset()" class="btn btn-primary shadow mr-2 outline-light" style="border-radius:0px; background: maroon; border-color: maroon;"><b>Reset</b></button></center><br><hr>


<div id="ans"><p id="result">
The values of x are displayed here<br>after the values of a, b c are entered 
</p></div></center><hr>


<script type="text/javascript">
function calc(){
var z = prompt("please write the value of 'a' below");
var a = Number(z);
var y = prompt("please write the value of 'b' below");
var b = Number(y);
var x = prompt("please write the value of 'c' below");
var c = Number(x);
var d = b * b; 
var e = -1 * 4 * a * c; 
var f = d - e ;
var g = Math.sqrt(f) ;
var h = 2 * a ;
var i = -1 * b ;
var j = i + g ;
var k = j / h ;
var l = i - g; 
var m = l / h ; 
document.getElementById("result").innerHTML =
"The value of x is:"+"<br>"+
k+"<br>"+"or"+"<br>"+m ;
}
function reset(){
document.getElementById("result").innerHTML =
"The values of x are displayed here"+"<br>"+"after the values of a, b c are entered" ;
}
</script>


<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>

      <!-- JavaScript files-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>
