<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Avaliação dos Bombeiros</title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url();?>assets/materialize/css/materialize.min.css" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="<?=base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="<?=base_url();?>assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="<?=base_url();?>assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="<?=base_url();?>assets/js/Lightweight-Chart/cssCharts.css"> 

    <link rel="stylesheet" href="http://code.jquery.com/qunit/qunit-1.11.0.css" type="text/css" media="all">
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
         <?php
        include 'menu.php';
       ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
          <div class="header"> 
                        <h1 class="page-header">
                             Cadastro
                        </h1>
                        <ol class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Cadastro</a></li>
                      <li class="active">Inserir</li>
                    </ol> 
                                    
        </div>
        
            <div id="page-inner"> 
             <div class="row">
             <div class="col-lg-12">
             <div class="card">
                        
                        <div class="card-content">

                            <?php 
              if(isset($id)){
               echo '<form class="col s12" method="post" name="formulario" action="'.BASE_URL()."consulta/atualizar".'">';
               echo '<input type="hidden" id="id" name="id" value="'.$id.'">';
              }else{
               
                echo '<form class="col s12" method="post" name="formulario" action="'.BASE_URL()."consulta/salvar".'">';
              }
              ?>
      <div class="row">
        <div class="input-field col s6">
          <input name="nome" type="text" 
          <?php 
               if (isset($nome)){
                echo 'value="'.rtrim($nome).'" ';
               } 
          ?> class="validate">
          <?php 
            if (isset($nome)){
                echo '<label for="first_name" class="active">Nome</label>';
            }else{
                echo '<label for="first_name" class="inative">Nome</label>';
          }
          ?>
        </div>
        <div class="input-field col s6">
          <input name="nascimento" type="text" 
          <?php 
               if (isset($nasc)){
                //var_dump($nasc);
                $dataSeparada = explode("-", $nasc);
                $nasc = $dataSeparada[2]."/".$dataSeparada[1]."/".$dataSeparada[0];
                echo 'value="'.$nasc.'" ';
               } 
          ?> class="dataBR">
          <?php 
            if (isset($nasc)){
                echo '<label for="first_name" class="active">Nascimento</label>';
            }else{
                echo '<label for="first_name" class="inative">Nascimento</label>';
          }
          ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
         <input name="cpf" id="cpf" type="text"
         <?php 
               if (isset($cpf)){
                echo 'value="'.$cpf.'" ';
               } 
          ?> class="cpfOuCnpj">
          <?php 
            if (isset($cpf)){
                echo '<label for="first_name" class="active">CPF</label>';
            }else{
                echo '<label for="first_name" class="inative">CPF</label>';
          }
          ?>
        </div>
        <div class="input-field col s6">
          <label class="input-field inline" for="sexo" style="top:-30">Sexo</label>
               <p>
                <?php 
                $cmasc = 'checked';
                $cfem = '';
                //var_dump($sexo);
                if (isset($sexo)){
                    if ($sexo == 't'){
                        $cmasc = "checked";
                        $cfem = "";
                    }
                    if ($sexo == 'f'){
                        $cmasc = "";
                        $cfem = "checked";   
                    }

                }
                ?>
                  <input name="sexo" type="radio" <?=$cmasc?> value="0" id="test1">
                  <label for="test1">Masculino</label>
                </p>
                <p>
                  <input name="sexo" type="radio" <?=$cfem?> value="1" id="test2">
                  <label for="test2">Feminino</label>
                </p>
         </div>
      </div>
      
      <div class="row">
        <div class="input-field col s12">
       <label class="input-field inline" for="escolaridade" style="top:-30">Escolaridade</label>
         <?php
         if (isset($id)){
            if ($fundamental == 't'){
                $cFundamental = 'checked="checked"';
            }else{
                $cFundamental = '';
            }

             if ($medio == 't'){
                $cMedio = 'checked="checked"';
            }else{
                $cMedio = '';
            }

             if ($superior == 't'){
                $cSuperior = 'checked="checked"';
            }else{
                $cSuperior = '';
            }
        }else{
             $cSuperior = '';
             $cMedio = '';
             $cFundamental = '';
        }

         ?>
            <input name="fundamental" type="checkbox" <?=$cFundamental?> value="1" id="fundamental" />
          <label for="fundamental">Fundamental</label>
            &nbsp;&nbsp;&nbsp;
             <input name="medio" type="checkbox" <?=$cMedio?> id="medio" value="1" />
          <label for="medio">Medio</label>
            &nbsp;&nbsp;&nbsp;
           <input name="superior" type="checkbox" <?=$cSuperior?> value="1" id="superior" />
          <label for="superior">Graduação</label>

      </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <?php 
              if(isset($id)){
                echo '<input type="submit" value="Atualizar">';
              }else{
               
                echo '<input type="submit" value="Adicionar">';
              }
              ?>
           
        </div>
    </div>    
    </form>
    <div class="clearBoth"></div>
  </div>
    </div>
 </div> 
     </div>     
             
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
                <!-- /.col-lg-12 --> 
            <!-- /. ROW  -->
            
         
              
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="<?=base_url();?>assets/js/jquery-1.10.2.js"></script>
    
    <!-- Bootstrap Js -->
    <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
    
    <script src="<?=base_url();?>assets/materialize/js/materialize.min.js"></script>
    
    <!-- Metis Menu Js -->
    <script src="<?=base_url();?>assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="<?=base_url();?>assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?=base_url();?>assets/js/morris/morris.js"></script>
    
    
    <script src="<?=base_url();?>assets/js/easypiechart.js"></script>
    <script src="<?=base_url();?>assets/js/easypiechart-data.js"></script>
    
     <script src="<?=base_url();?>assets/js/Lightweight-Chart/jquery.chart.js"></script>
    
    <!-- Custom Js -->
    <script src="<?=base_url();?>assets/js/custom-scripts.js"></script> 
    <script src="<?=base_url();?>assets/js/jquery.mask.min.js"></script> 
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
 
            var options = {
                onKeyPress: function (cpf, ev, el, op) {
                    var masks = ['000.000.000-000', '00.000.000/0000-00'];
                    $('.cpfOuCnpj').mask((cpf.length > 14) ? masks[1] : masks[0], op);
                }
            }

            $('.cpfOuCnpj').length > 11 ? $('.cpfOuCnpj').mask('00.000.000/0000-00', options) : $('.cpfOuCnpj').mask('000.000.000-00#', options);

            });
        $('.dataBR').mask('00/00/0000');
      </script>
</body>

</html>
