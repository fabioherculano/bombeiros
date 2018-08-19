<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Avaliação dos Bombeiros</title>
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url()?>assets/materialize/css/materialize.min.css" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="<?=base_url()?>assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="<?=base_url()?>assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="<?=base_url()?>assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="<?=base_url()?>assets/js/Lightweight-Chart/cssCharts.css"> 
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="index.html"><i class="large material-icons">track_changes</i> <strong>Aval. Bombeiros</strong></a>
				
		<div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right"> 
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown4"><i class="fa fa-envelope fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li>				
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown3"><i class="fa fa-tasks fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li>
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown2"><i class="fa fa-bell fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li>
				  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <b>John Doe</b> <i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </nav>
		<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<li><a href="#"><i class="fa fa-user fa-fw"></i> My Profile</a>
</li>
<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
</li> 
<li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>
</ul>
<ul id="dropdown2" class="dropdown-content w250">
  <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
</ul>
<ul id="dropdown3" class="dropdown-content dropdown-tasks w250">
<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 1</strong>
					<span class="pull-right text-muted">60% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
						<span class="sr-only">60% Complete (success)</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 2</strong>
					<span class="pull-right text-muted">28% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
						<span class="sr-only">28% Complete</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 3</strong>
					<span class="pull-right text-muted">60% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
						<span class="sr-only">60% Complete (warning)</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 4</strong>
					<span class="pull-right text-muted">85% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
						<span class="sr-only">85% Complete (danger)</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
</ul>   
<ul id="dropdown4" class="dropdown-content dropdown-tasks w250 taskList">
  <li>
                                <div>
                                    <strong>John Doe</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</p>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the...</p>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
</ul>   
	   <!--/. NAV TOP  -->
        <!--/. NAV TOP  -->
        <?php
        include 'menu.php';
       ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                            Consulta
                        </h1>

						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Consulta</a></li>
					  <li class="active">List</li>
					</ol> 
									
		</div>
		
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                       
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Idade</th>
                                            <th>CPF</th>
                                            <th>Sexo</th>
                                            <th>Escolaridade</th>
                                            <th>Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                        
                                            function calculdaIdade($d){
                                                 // Declara a data! :P
                                                $data = $d;
                                                list($ano, $mes, $dia) = explode('-', $data);
                                                $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                                                $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
                                                $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
                                                print $idade;
                                            }
                                            foreach($lista as $item){ 
                                             echo '   
                                            <tr class="odd gradeX">
                                                <td>'.$item['nome'].'</td>
                                                <td>';
                                                    
                                                    calculdaIdade($item['nasc']);
                                                    //echo $item['nasc'];
                                                    echo " Anos";
                                                echo '</td>
                                                <td>'.$item['cpf'].'</td>
                                                <td>';
                                                if ($item['sexo']=='t') {
                                                    echo "Masculino";
                                                }else{
                                                    echo "Feminimo";
                                                }
                                                echo '</td>
                                                <td>';
                                                if ($item['fundamental'] =='t')
                                                    echo "Fundamental";
                                                if ($item['medio']  =='t')
                                                    echo " Medio";
                                                if ($item['superior'] =='t')
                                                    echo " Graduação";
                                               echo ' </td>';
                                             echo '<td><a href='.base_url().'consulta/editar/'.$item['id'].'><i class="material-icons dp48">mode_edit</i></a><a href='.base_url().'cadastro/excluir/'.$item['id'].'><i class="material-icons dp48">delete</i></a></td>';
                                            echo '</tr>';
                                            }

                                        ?>
                                        <!--<tr class="odd gradeX">
                                            <td>Trident</td>
                                            <td>Internet Explorer 4.0</td>
                                            <td>Win 95+</td>
                                            <td class="center">4</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>Trident</td>
                                            <td>Internet Explorer 5.0</td>
                                            <td>Win 95+</td>
                                            <td class="center">5</td>
                                            <td class="center">C</td>
                                        </tr>
                                        
                                        <tr class="gradeU">
                                            <td>Other browsers</td>
                                            <td>All others</td>
                                            <td>-</td>
                                            <td class="center">-</td>
                                            <td class="center">U</td>
                                        </tr>-->
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            
         
               <footer><p>Desenvolvido por <i class="fa fa-love"></i><a href="#">Fabio Herculano</a>
</p></footer>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
 

    <!-- jQuery Js -->
    <script src="<?=base_url()?>assets/js/jquery-1.10.2.js"></script>
	
	<!-- Bootstrap Js -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
	
	<script src="<?=base_url()?>assets/materialize/js/materialize.min.js"></script>
	
    <!-- Metis Menu Js -->
    <script src="<?=base_url()?>assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="<?=base_url()?>assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?=base_url()?>assets/js/morris/morris.js"></script>
	
	
	<script src="<?=base_url()?>assets/js/easypiechart.js"></script>
	<script src="<?=base_url()?>assets/js/easypiechart-data.js"></script>
	
	 <script src="<?=base_url()?>assets/js/Lightweight-Chart/jquery.chart.js"></script>
	 <!-- DATA TABLE SCRIPTS -->
    <script src="<?=base_url()?>assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?=base_url()?>assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    <!-- Custom Js -->
    <script src="<?=base_url()?>assets/js/custom-scripts.js"></script> 
 

</body>

</html>
