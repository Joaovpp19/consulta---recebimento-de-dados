<?php
     require_once("pessoa.class.php");
        $pessoa = new Pessoa();
        $pessoa->setNome($_POST['Nome']);
        $pessoa->setTelefone($_POST['Telefone']); 
        $pessoa->setOrigem($_POST['origem']);
        $pessoa->setDatadocontato($_POST['datadocontato']);
        $pessoa->setObservacao($_POST['observacao']);
?>

<!DOCTYPE type>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
     integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
     integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
     <title>Formulario - dados cadastrados</title>
</head>
<body class="bg-body-secondary" style="background-color: rgb(195, 195, 195);">
    <div class="container text-center">
        <div class="row">
          <div class="col-1">
            &nbsp;
          </div>
          <div class="col">
            <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark" style="padding-left: 9px;">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">SISTEMA WEB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
             aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
           </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                      <a class="nav-link" href="#">Consultar</a>
               </div>
            </div>
         </div>
       </nav>
    </div>
        <div class="col-1">
            &nbsp;
          </div>
        </div>
    <div class="row">
      <div class="col-1">
        &nbsp;
      </div>
        <div class="col bg-white">
          &nbsp; 
        </div>
        <div class="col-1">
          &nbsp;
        </div>
    </div>
            <div class="row">
              <div class="col-1">
                &nbsp;
              </div>
              <div class="col bg-white">
              <div bs-primary>
                <div class="col bg-white d-flex justify-content-center"><div><br>
                <h3 class="text-start fs-3">Consultar - contatos agendados</h3>    
                <table widht="50%" border=0 cellpadding="10" cellpacing=0 align=center>
                 <tr align=center bgcolor=#007BFF>
                  <th widht=10%>Nome</th>
                  <th widht=8%>Telefone</th>
                  <th widht=8%>Origem</th>
                  <th widht=8%>Contato</th>
                  <th widht=8%>Observação</th>
                  <th widht=8%>Ação</th>
                 </tr>
                 
                <td widht=8%><?php echo $pessoa->getNome()?></td>
                <td widht=8%><?php echo $pessoa->getTelefone()?></td>
                <td widht=8%><?php echo $pessoa->getOrigem()?>  </td>
                <td widht=8%><?php echo $pessoa->getDatadocontato()?>  </td>
                <td widht=8%><?php echo $pessoa->getObservacao()?></td>
                <td widht=8%><?php echo $pessoa->getOrigem()?></td>
                </table>
       </div>
      </div>          
  </div>
</div>
<div class="col-1">
    &nbsp;
</div>
</div>
</div>    
</body>
</html> 