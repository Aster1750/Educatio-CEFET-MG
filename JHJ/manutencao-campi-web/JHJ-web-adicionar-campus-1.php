<!DOCTYPE html>
<html>
    <head>
        <title>Adicionar Campus</title>
        <meta charset="utf-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/JHJ-web-estilos.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
    </head>
    <body>
        <!-- menu coordenador (codigo da gerencia)-->
        <nav role="navigation" class="navbar navbar-default">        
        <div class="navbar-header">
            <button type="button" data-target="#menu" data-toggle="collapse" class="navbar-toggle">                    
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                
            </button>                
                <a href="#" class="navbar-brand"><img src="slogan.png"></a>
        </div>
            
        <div id="menu" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-pushpin"></span> Campus</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Alterar Campus</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Adicionar Campus</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Remover Campus</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"></span>  Departamentos</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Adicionar departamentos</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Remover departamentos</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Acessar departamentos</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon  glyphicon-user"></span>  Professores</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Adicionar professores</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Remover professores</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Acessar professores</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt"></span>  Cursos</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Adicionar cursos</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Remover cursos</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Acessar cursos</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-book"></span>  Disciplinas</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Adicionar disciplinas</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Remover disciplinas</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Acessar disciplinas</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="   glyphicon glyphicon-pencil"></span>  Alunos</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Adicionar alunos</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Remover alunos</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Acessar alunos</a></li>
                    </ul>
                </li>

                <li><a href="#"><span class="glyphicon glyphicon-folder-open"></span> Registros</a>

                <li><a href="#"><span class="glyphicon glyphicon-transfer"></span> Transferências</a>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img class="profile" src="padrao.png">  Coordenador (a) <span class="caret"></span>&emsp;</a>

                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-user icon-size"></span> - Seu perfil </a></li>
                        <li class="divider"></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> - Sair</a></li>
                    </ul>
                </li>
                </ul>
        </div>
        </nav>        
        <!-- fim do menu coordenador (codigo da gerencia)-->

    	<h1>Inclusão de Campus</h1>
        <div class="alinhamento">
            <h4>Informações do campus</h4><br>
            <form action="JHJ-web-adicionar-campus-2-inclusao-efetuada.php" method="POST">
    		    <div class="form-group">
          			<label for="usr">INSERIR NOME</label>
          			<input type="text" class="input-xlarge" name="nomeCampus" required="required"/><span class="required"> *</span>
    		    </div>
    		    <div class="form-group">
          			<labelfor="pwd">INSERIR CIDADE</label>
          			<input type="text" class="input-xlarge" name="cidadeCampus" required="required"/><span class="required"> *</span>
    		    </div>
    		    <div class="form-group">
          			<labelfor="pwd">INSERIR UF</label>
          			<input type="text" class="input-xlarge" name="ufCampus" required="required"/><span class="required"> *</span>
    		    </div>
                <p style="font-size: 10px; color:#4F75FF;">* indica preenchimento obrigatório</p>
        		<input type="submit" class="btn btn-primary" value="Incluir Campus"/>
            </form>
        </div>

        <!-- rodape -->
        <div class="containeer">
            <div class="row">
                <p><center><p class="footertext"><strong><a class="a" href="Colaboradores/gerencia-web-colaboradores.html">Educatio CEFET-MG - Copyright 2017</a></strong></p></center></p>
            </div>
        </div>
    </body>
</html>