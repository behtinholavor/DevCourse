<h4>Listagem</h4>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Código</th>
      <th scope="col">Descrição</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Categoria</th>
      <th scope="col">Fabricante</th>      
    </tr>
  </thead>
  <tbody>
    
    <!-- <?php 
      require "actions/product_query.php";
      $products = all('stock');
      foreach($products as $product):   
    ?>

    <tr>
      <td><?=$product->id?></td>
      <td><?=$product->description?></td>
      <td><?=$product->quantity?></td>
      <td><?=$product->category?></td>
      <td><?=$product->manufacturer?></td>
      
      <td><a class="btn btn-success" href="?page=product_edit&id=<?=$product->id;?>">Editar</a></td>
      <td><a class="btn btn-danger" href="?page=product_del&id=<?=$product->id;?>">Deletar</a></td>
    </tr>

    <?php endforeach; ?>  -->




  </tbody>
</table>