<!DOCTYPE html>
<?php
    
    include_once('app/gravar_verificacao.php');	
     include_once('app/listarPedidos.php');
     
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    
</head>
<title>Pedidos</title>




<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php">Página Inicial</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="cart.php">Carrinho <span class="sr-only">(current)</span></a>
      </li>
  
     
    </ul>
    
  </div>
</nav>

    <div style=" margin-top:50px; text-align:center">
    <span class="badge badge-dark"><h1 >Pedidos Feitos</h1></span>
    </div>
<div style="margin-top: 10px; margin-left: 200px; margin-right: 100px;">
  
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Pais</th>
      <th scope="col">EMPRESA</th>
      <th scope="col">ENDEREÇO</th>
      <th scope="col">PRODUTOS</th>
      <th scope="col">QTD</th>
      <th scope="col">PREÇO</th>
      <th scope="col">ESTADO</th>
     
    </tr>
  </thead>
  <tbody>
  <?php
             if(mysqli_num_rows($listarPedidos)>0){
               while($data=mysqli_fetch_array($listarPedidos,MYSQLI_ASSOC)){ 
                
                
      
              echo" 
               <tr>
                    <th scope='row'>".$data['pais']."</th>
                    <th scope='row'>".$data['Nempresa']."</th>
                    <th scope='row'>".$data['endereco']." / ".$data['cidade']."</th>
                    <th scope='row'>".$data['produtos']."</th>
                    <th scope='row'>".$data['qtd']."</th>
                    <th scope='row'>".$data['total']."</th>



                </tr>
  ";


                 

                    
                      }
}
  ?>
  
  </tbody>
</table>
</div>

</body>
</html>