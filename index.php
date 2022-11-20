<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cz"><head>
<?php
error_reporting(1);
 include("index1.php");
?>
<title>Company name - title</title>
<head>
		<style>
	body {
	
  
    background-image: url("images/kartbgimg.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;

    background-repeat: no-repeat;
    background-size: 1350px 690px;
}
#abcd{
	position:absolute;
	top:5px;
	left:330px;
}
#abc{
	position:absolute;
	top:50px;
	left:100px;
}
#abcde{
	position:absolute;
	top:260px;
	left:330px;
}


	</style>
	</head>
	<body>
		

<img id="abcd" src="images/kart.png" />
<div id="abc">


		    <h5>&nbsp;</h5>
			<form method="post">
		    <input type="text" name="t1" value="search" onfocus="if(this.value=='search'){this.value='';}"onBlur="if(this.value==''){this.value='search';}"/>
            <input name="sear" type="submit" class="button" id="sub" value="Go" />
</form>
<?php
	if($_REQUEST['sear'])
	  {
	   $se=$_REQUEST['t1'];
	   if($se!=NULL)
	   {
	   echo "<script>location.href='index.php?se=$se'</script>";
	   }
        }
		?>
		

		  <h5>&nbsp;</h5>
		  <!--</form>-->
		

		<!-- End of Page Search --></span></a><br>
</div>
<div class="menu_header_left"> <span class="menu_text">MEN</span>
</div>
<div class="menu_header_right"> </div>
</div>
<div id="Menu_content"> <a class="menu_item" href="index.php?catg=1 & subcatg=Casual Shirts"><span>Casual Shirts</span></a><br>
<a class="menu_item" href="index.php?catg=1 & subcatg=Jeans"><span>Jeans</span></a><br>
<a class="menu_item" href="index.php?catg=1 & subcatg=T-Shirts"><span>T-shirts
</span></a><br>
<a class="menu_item" href="index.php?catg=1 & subcatg=Footwear"><span>Footwear</span></a><br>
<a class="menu_item" href="index.php?catg=1 & subcatg=Shorts"><span>Shorts</span></a><br>
<a class="menu_item" href="index.php?catg=1 & subcatg=watches"><span>Watches
</span></a><br>

</div>

<div class="menu_header_left"> <span class="menu_text">WOMEN</span>
</div>
<div class="menu_header_right"> </div>
<div id="Menu_content"> <a class="menu_item" href="index.php?catg=2 & subcatg=dresses"><span>Dresses</span></a><br>
<a class="menu_item" href="index.php?catg=2 & subcatg=Churidar Suits"><span>Churidar Suits</span></a><br>
<a class="menu_item" href="index.php?catg=2 & subcatg=Kurtas"><span>Kurtas</span></a><br>
<a class="menu_item" href="index.php?catg=2 & subcatg=Sandals"><span>Sandals</span></a><br>
<a class="menu_item" href="index.php?catg=2 & subcatg=Office Wear"><span>Office Wear</span></a><br>
<a class="menu_item" href="index.php?catg=2 & subcatg=Artificial Jewellery"><span>Artificial Jewellery</span></a><br>
</div>

<div class="menu_header_left"> <span class="menu_text">KIDS</span>
</div>
<div class="menu_header_right"> </div>
<div id="Menu_content"> <a class="menu_item" href="index.php?catg=3 & subcatg=Baby Apparel"><span>Baby Apparel</span></a><br>
<a class="menu_item" href="index.php?catg=3 & subcatg=Girls Apparel"><span>Girls Apparel</span></a><br>
<a class="menu_item" href="index.php?catg=3 & subcatg=Boys Apparel"><span>Boys Apparel</span></a><br>
<a class="menu_item" href="index.php?catg=3 & subcatg=Kids Toys"><span>Kids Toys</span></a><br>
<!--<a class="menu_item" href="?page=home"><span>Office Wear</span></a><br>
<a class="menu_item" href="?page=home"><span>Artificial Jewellery</span></a><br>-->
</div>

<div id="abcde">


						<h1 style="color:springgreen;"><b><u><marquee>TRENDING:</marquee></u></b></h1><hr>
						
								<table>
<tr>
<td>
<li><a href="login.php "><h1 style="color:green;"> LOGIN</h1></a></li>
</td>
</tr>						
			
		</div>						



</div>
</div>
</div>
</div>
</div>

</body></html>