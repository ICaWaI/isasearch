<!doctype html>
<html lang="de-DE">

<head>
    
	<title>Isabellenhütte ISASEARCH</title>
	
	<!-- BENÖTIGTE META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<!-- BOOTSTRAP 5.2.3 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

	<!-- KOPFZEILE MIT FIRMENLOGO -->
	<header>
		<div class="top-bar" style="background-color:#001E3B; text-align:center; padding:20px;">
			<img src="isabellenhuette.png" alt="Firmenlogo"/>
		</div>
	</header>
	
	<!-- VERSCHIEDENE BOXEN ZUR OPTISCHEN GESTALTUNG DURCH BOOTSTRAP -->
	<div class="container" style="background-color:#005697">
        
		<div class="row">
            
			<div class="col-md-12">
                
				<div class="card mt-4">
                    
					<div class="card-header" style="background-color:#001E3B;">
                        <h4 style="color:#ffffff;">ISASEARCH Bauelement-Suche </h4>
                    </div>
                    
					<div class="card-body">
                        
						<div class="row">
                            
							<div class="col-md-7">

                                <form action="" method="GET">
								
								<!-- SUCHFELD MIT PHP CODE ZUM VERARBEITEN DER EINGABE -->                                
									<div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Bezeichnung oder Artikelnummer" >
                                        <button type="submit" class="btn btn-primary">Suchen...</button>
                                    </div>
                                
								</form>
							</div>
                        </div>
                    </div>
                </div>
            </div>
			
			<!-- VERSCHIEDENE BOXEN ZUR OPTISCHEN GESTALTUNG DURCH BOOTSTRAP -->
            <div class="col-md-12">
                
				<div class="card mt-4">
                    
					<div class="card-body">
                        
						<table class="table table-bordered">
                            
							<!-- TABELLEN KOPFZEILE -->
							<thead style="text-align:center">
                                <tr>
                                    <th>ID</th>
                                    <th>Typ</th>
                                    <th>Bezeichnung</th>
                                    <th>Artikelnummer</th>
									<th>Zusatz</th>
									<th>Zeichnung</th>
                                </tr>
                            </thead>
                            
							<tbody>
                                
								<!-- PHP DATENBANK VERBINDUNG + SQL QUERY -->
								<?php
									
									/* DATENBANK ZUGANGSDATEN */
									$db_host="localhost";
									$db_user="root";
									$db_pass="";
									$db_name="isasearch";
									$db_port="";
									
									/* VERBINDUNG ZUR DATENBANK HERSTELLEN */
                                    $con = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
			
									/* VERBINDUNG ÜBERPRÜFEN */
									if(!$con)
									{
										die("Verbindungsfehler " . mysqli_connect_error());
									}
									/*if(mysqli_connect_error())
										echo "Verbindungsfehler";
									else
										echo "Verbindung erfolgreich";
                                    */
									
									/* DIE DATENBANK ABFRAGE */
									if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        
										/* SQL QUERY VON PHP ÜBERMITTELT */
										$query = "SELECT * FROM bauelemente WHERE CONCAT(typ,artikelnr) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

										/* ERGEBNISSE ALS $items SORTIEREN */
                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
												<!-- $items IN JEWEILS ZUGEHÖRIGE SPALTE AUSGEBEN -->
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['typ']; ?></td>
                                                    <td><?= $items['bezeichnung']; ?></td>
                                                    <td><?= $items['artikelnr']; ?></td>
													<td><?= $items['zusatz']; ?></td>
													<td><?= $items['zeichnung']; ?></td>
                                                </tr>
                                                
												<?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
											
                                                <tr>
                                                    <td colspan="6">Nichts gefunden</td>
                                                </tr>
                                            
											<?php
												mysqli_close($con);
                                        }
                                    }
                                ?>
								
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<!-- SCRIPTE FÜR BOOTSTRAP UND JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
