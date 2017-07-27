<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';

$page = $_SERVER['PHP_SELF'];
$sec = "3";


?>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <!-- Dropdown Structure -->



<nav>
  <div class="nav-wrapper light-blue">
    <a href="home.php" class="brand-logo">Drax Technology</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="">Home</a></li>

  </div>
</nav>
<h1>Fire Event Safety Status </h1>
<table class="striped">
        <thead>
          <tr>
              <th>ID</th>
              <th>Event</th>
              <th>User Status</th>
							<th>User Status Marking Time</th>
<th>Notes</th>
          </tr>
        </thead>
				<?php
			//	$sql_query="SELECT * FROM CheckIn";
			 	$sql_query="SELECT * FROM SafeStatus";
			 	$result_set=mysql_query($sql_query);
			 	if(mysql_num_rows($result_set) > 0)
			 	{
			         while($row=mysql_fetch_row($result_set))
			 		{
			 		?>
        <tbody>
          <tr>
								<td><?php echo $row[0]; ?></td>
								<td><?php echo $row[1]; ?> </td>
								<td><?php echo $row[2]; ?></td>
								<td><?php echo $row[4]; ?></td>
                                                                <td><?php echo $row[3]; ?></td>
          </tr>
					<?php
					}
			    	}
					?>
        </tbody>
      </table>



  <footer class="page-footer light-blue">
          <div class="container light-blue">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Drax Technology</h5>
                <p class="grey-text text-lighten-4">Drax Technology Web Front End for Tracking User Status.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container light-blue">
            � 2017 Drax Technology
            <a class="grey-text text-lighten-4 right" href="#!">Drax Technology-- 2017 </a>
            </div>
          </div>
        </footer>
  </html>
	<style>

	</style>

  <?php ob_end_flush(); ?>