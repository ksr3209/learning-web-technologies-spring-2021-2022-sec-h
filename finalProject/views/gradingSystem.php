<?php 
	require_once('../controller/headerCookie.php');
?>

<html>
<head>
	<title>Grading System|school</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!--Top Menu-->
	<?php echo file_get_contents("html/topMenu.html"); ?>

	<section id="body">
		<?php echo file_get_contents("html/sideMenuS.html"); ?>
		<!---------------------------------------------------------------------------------------------------------------------------------------Content----------------------------------------------------------------------------------------------------------------------------------------------->
	<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

tr:nth-child(even) {
  background-color: rgba(150, 212, 212, 1.4);
}

th:nth-child(even),td:nth-child(even) {
  background-color: rgba(150, 212, 212, 0.4);
}
</style>	
    <h1 class="header-title"> Grading System </h1>
    <!--Page Title-->
    
    <div class="row">
        <article class="col-md-14 text-justify  p-4 "><p class="text-justify">


In Bangladesh, SSC is a 10th Grade Education Course. GPA Stands for Grade Point Average. Secondary and Higher Secondary GPA results are calculated on GPA Scale 5.00. There are seven grades, and these grades are A+, A, A-, B, C, D, F, and every grade has a point.


<br>


		<table border="1" width="80%" height="300px">
	<thead>
		<tr>
			<th scope="col">  NUMBER </th>
			<th scope="col">  Letter Grade</th>
			<th scope="col">  Grade Point</th>
		</tr>
	</thead>
	<tbody>
		<tr align="center">
			    <td>80-100</td>
			    <td><strong>A+</strong></td>
			    <td>4.00</td>
		</tr>
		<tr align="center">
			     <td>75 - &lt; 79</td>
			     <td>A</td>
			     <td>3.75</td>
		</tr>
		<tr align="center">
			    <td>70 - &lt; 74</td>
			    <td>B+</td>
			    <td>3.50</td>
		</tr>
		<tr align="center">
			    <td>65 - &lt; 69</td>
			    <td>B</td>
			    <td>3.25</td>
		</tr>
		<tr align="center">
			     <td>60 - &lt; 64</td>
			     <td>C+</td>
			     <td>3.00</td>
		</tr>
		<tr align="center">
			     <td>55 - &lt; 59</td>
			     <td>C</td>
			     <td>2.75</td>
		</tr>
		<tr align="center">
			     <td><strong>50 - &lt; 54</strong></td>
			     <td><strong>D+</strong></td>
			     <td><strong>2.50</strong></td>
		</tr>
		<tr align="center">
			<td>45 - &lt; 49</td>
			    <td>D</td>
			    <td>2.25</td>
		</tr>
		<tr align="center">
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

	<!--Footer-->
	<?php echo file_get_contents("html/footer.html"); ?>
</body>
</html>
