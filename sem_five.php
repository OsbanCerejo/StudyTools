<?php
 
 
include "dbh.php";
 
 $query=mysqli_query($conn,"select * from upload");
 $rowcount=mysqli_num_rows($query);
 ?>

<html>
	<head>
		<title>StudyTools</title>
		<link rel="stylesheet" href="../css/main.css" />
		<link rel="stylesheet" href="../css/font-awesome.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../js/smoothscroll.js"></script>
	
	</head>
	<body>
		<header id="header">
				<a href="../index.html" class="logo"><img src="images/menubar.png"></a>
				<a href="../index.html" class="name">Study Tools</a>
				<a href="../login.html" class="btn login" style="float:right; margin-top:1%; margin-right:1%">LOG OUT</a>
				
		</header>
		
		<section id="cn" class="sectionsem">
			<div class="wrapper">
				<h1 style="color:#FAAF3C">Computer Networks</h1>
				<h2>MU Papers</h2>
				<table>
					<colgroup>
						<col style="width:25%">
						<col style="width:25%">
						<col style="width:25%">
						<col style="width:25%">
					</colgroup>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
					
					</tr>
					<tr>

					</tr></div>
					
					
				</table>
			</div>
		</section>
		
		<section id="mp" class="sectionsem">
			<div class="wrapper">
				<h1 style="color:#FAAF3C">Microprocessors</h1>
				<h2>MU Papers</h2>
				<table>
					<colgroup>
						<col style="width:25%">
						<col style="width:25%">
						<col style="width:25%">
						<col style="width:25%">
					</colgroup>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					
						<table >
						<?php
						for($i=0;$i<=$rowcount;$i++)
						{
						 $row=mysqli_fetch_array($query);
						 
						 ?>
						
			
						<tr>
						<td><a href="upload/<?php echo $row["file"] ?>"><?php echo $row["file"] ?></a></td>
					</tr>
					<?php
						}
					?>
					
					</table>
				</table>
				<br>
				<h2>Assignments</h2>
				<table name="S5CN">
					<colgroup>
						<col style="width:25%">
						<col style="width:25%">
					</colgroup>
					<tr>
						<td></td>
						<td></td>
                    </tr>
                    </table>
                    <br>
				<h2>IAT Question Banks</h2>
				<table>
					<colgroup>
						<col style="width:25%">
						<col style="width:25%">
						
					</colgroup>
					<tr>
						<td></td>
						<td></td>
                    </tr>
                </table>
			</div>
		</section>
		
		<section id="os" class="sectionsem">
			<div class="wrapper">
				<h1 style="color:#FAAF3C">Operating Systems</h1>
				<h2>MU Papers</h2>
				<table>
					<colgroup>
						<col style="width:25%">
						<col style="width:25%">
						<col style="width:25%">
						<col style="width:25%">
					</colgroup>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						
					</tr>
					<tr>
					
					</tr>
				</table>
                    <br>
				<h2>IAT Question Banks</h2>
				<table>
					<colgroup>
						<col style="width:25%">
						<col style="width:25%">
						
					</colgroup>
					<tr>
						<td></td>
						<td></td>
                    </tr>
                </table>
			</div>
		</section>
		
		<section id="sooad" class="sectionsem">
			<div class="wrapper">
				<h1 style="color:#FAAF3C">SOOAD</h1>
				<h2>MU Papers</h2>
				<table>
					<colgroup>
						<col style="width:25%">
						<col style="width:25%">
						<col style="width:25%">
						<col style="width:25%">
					</colgroup>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						
					</tr>
					<tr>
					
					</tr>
				</table>
			</div>
		</section>
																								
		<footer id="footer">
				<div>
					<h2>Get In Touch</h2>
					<ul class="icon">
						<li><span class="fa-phone"></span> <a href="#">+91 8308259805</a></li>
						<li><span class="fa-envelope"></span> <a href="#">markdsouza1998@gmail.com</a></li>
						<li><span class="fa-map-marker"></span><a href="#"> Mudi, Behind BCCB, Sandor, Vasai (W),401202</a></li>
					</ul>
				</div>
		</footer>
	</body>
</html>