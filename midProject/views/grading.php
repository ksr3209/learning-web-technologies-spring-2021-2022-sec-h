<?php 
	require_once('../controller/headerCookie.php');
	$uname =  $_SESSION['uname'];
?>

<html >

<head>

    <title>Grading System|school</title>
    
</head>

<body>
	<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

tr:nth-child(even) {
  background-color: rgba(150, 212, 212, 0.4);
}

th:nth-child(even),td:nth-child(even) {
  background-color: rgba(150, 212, 212, 0.4);
}
</style>
	<body bgcolor="c1ddd">
     <div align="center">


	<!-- Menu -->
	<table border="0" width="100%" height="100px">
		<tr>
			<td align="left">
				<img src="img/logo.png" width="100px" height="100px">
			</td>
			<td align="right">
				<h3>
					<a href="studentProfile.php">Profile</a> |
					<a href="../controller/logout.php"> Logout </a>
				</h3>
			</td>
		</tr>
	</table>
	<hr>

<!-- Content -->
	<table border="0" width="100%" height="500px">
		<tr valign="top">
			<td align="center" width="20%">
				<table border="1"  width="100%" >
					<tr>
						<td align="center" height="50px">
							<a href="studentHome.php">Home</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a href="Notices.php">Notices</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a href="Routine.php">Routine</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a href="Homework.php">HOMEWORK</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a href="Result.php">RESULT</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a href="teacherinfo.php">TEACHER'SINFO</a>
						</td>
					</tr>
				</table>
			</td>
			<td width="10%"></td>
			<td width="70%">
				<table border="0" width="80%">
					<tr>
						
					</tr>
     <h1 class="header-title"> Grading System </h1>
    <!--Page Title-->
    
    <div class="row">
        <article class="col-md-14 text-justify  p-4 "><p class="text-justify">
In Bangladesh, SSC is a 10th Grade Education Course. GPA Stands for Grade Point Average. Secondary and Higher Secondary GPA results are calculated on GPA Scale 5.00. There are seven grades, and these grades are A+, A, A-, B, C, D, F, and every grade has a point.<br>


		<table border="1" width="100%" height="100px">
	<thead>
		<tr>
			<th scope="col">  NUMBER </th>
			<th scope="col">  Letter Grade</th>
			<th scope="col">  Grade Point</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			    <td>80-100</td>
			    <td><strong>A+</strong></td>
			    <td>4.00</td>
		</tr>
		<tr>
			     <td>75 - &lt; 79</td>
			     <td>A</td>
			     <td>3.75</td>
		</tr>
		<tr>
			    <td>70 - &lt; 74</td>
			    <td>B+</td>
			    <td>3.50</td>
		</tr>
		<tr>
			    <td>65 - &lt; 69</td>
			    <td>B</td>
			    <td>3.25</td>
		</tr>
		<tr>
			     <td>60 - &lt; 64</td>
			     <td>C+</td>
			     <td>3.00</td>
		</tr>
		<tr>
			     <td>55 - &lt; 59</td>
			     <td>C</td>
			     <td>2.75</td>
		</tr>
		<tr>
			     <td><strong>50 - &lt; 54</strong></td>
			     <td><strong>D+</strong></td>
			     <td><strong>2.50</strong></td>
		</tr>
		<tr>
			<td>45 - &lt; 49</td>
			    <td>D</td>
			    <td>2.25</td>
		</tr>
		<tr>
			<td>&lt; 40</td>
			<td><strong>F</strong></td>
			<td>0.00</td>
		</tr>
	</tbody>
</table>
    <!-- Footer -->	
	<hr>
	<table border="0" width="100%" height="500px">
		<tr>
			<td colspan="2" align="center">
				Copyright ~ Web Technology, Section: H, Group: 3
			</td>
		</tr>
	</table>

</body>
</html>