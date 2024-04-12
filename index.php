<?php
require('_config.php');

$urlfilters = (isset($_GET['filters'])) ? $_GET['filters'] : '';
$filters = explode(',', $urlfilters);

$sql_filters = '';
if ($filters[0] !== '') {
  foreach ($filters as $value) {
    $sql_filters .= " product_category = '{$value}' OR";
  }
}

$sql_filters = substr($sql_filters, 0, -2);
$sql = "SELECT * FROM products";
if ($sql_filters != '') $sql .= " WHERE {$sql_filters}";
$res = $conn->query($sql);

$order = isset($_GET['order']) ? $_GET['order'] : 'random';

$sql = "SELECT * FROM products";
if ($sql_filters != '') {
  $sql .= " WHERE {$sql_filters}";
}

if ($order == 'random') {
  $sql .= " ORDER BY RAND()";
} elseif ($order == 'asc') {
  $sql .= " ORDER BY product_price ASC";
} elseif ($order == 'desc') {
  $sql .= " ORDER BY product_price DESC";
}

$res = $conn->query($sql);

$htmlcards = '';
while ($row = $res->fetch_assoc()) :

  $row['product_price'] = str_replace('.', ',', $row['product_price']);

  $htmlcards .= <<<HTML

    <div class="cardcontainer">
      <div class="card">
        <img class="tamanho-img" src="./assets/img/{$row['product_category']}/{$row['product_image']}" alt="{$row['product_name']}" width="100">
        <div class="card-body">
        <h3 class="card-title">{$row['product_name']}</h3>
        <p class="card-value">R$ {$row['product_price']}</p>
        </div>
      </div>
    </div>

  HTML;


endwhile;

require('_header.php');
?>



<div class="product-container">
<?php echo $htmlcards ?>
</div>
<?php
require('_footer.php');
