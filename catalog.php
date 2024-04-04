<?php
include_once './connection.php';
?>
<div class="container">
    <?php
      $query_products = "SELECT product_id, product_name, product_price, product_category, product_image FROM products ORDER BY product_id DESC";
      $result_products = $conn->prepare($query_products);
      $result_products->execute();
?>
    <div class="products">
  <?php
      while($row_product = $result_products->fetch(PDO::FETCH_ASSOC)){
        extract($row_product);
      
      ?>
      <div class="cardcontainer">
                        <div class="card">
                            <img src='<?php echo "./assets/img/produtos/$product_id/$product_image"; ?>' class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product_name; ?></h5>
                                <p class="card-value"><?php echo $product_price; ?></p>
                                <a href="view-products.php?id=<?php echo $product_id; ?>" class="item-button">Detalhes</a>
                            </div>
                        </div>
                    </div>
      <?php
      } 
      ?>
    </div>