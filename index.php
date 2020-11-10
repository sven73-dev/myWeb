<?php
$pageTitle = 'Главная страница';
include('./templates/_head.php');
require('./config.php');
?>

<!-- white-plate -->
<div class="white-plate">
	<div class="container-fluid">
		<!-- header -->
		<?php include('./templates/_header.php'); ?>
		<!-- // header -->
		<div class="line-between"></div>
		<!-- content block -->
		<div class="row">
			<!-- Left aside -->
			<?php include('./templates/_aside.php') ?>
			<!-- // Left aside -->
			<!-- Center Part -->
			<div class="col-md-9 col-lg-10">
				<div class="row">

					<!-- Товар 1 -->
					<?php
					//Описываем запрос к бд
					$sql = "SELECT * FROM products";

					//Выполняем запрос, результат сохраняем в переменную $result
					$result = $db->query($sql);

					//Преобразовываем результат в ассоциативный массив и записываем в $products
					$products = $result->fetchAll(PDO::FETCH_ASSOC);

					//Распечатываем массив $products
					// echo "<pre>";
					// print_r($products);
					// echo "</pre>";

					foreach ($products as $product) {
						include("./templates/_product_item.php");
					}

					?>
					<!-- // Товар 1 -->

				</div>
			</div>
			<!-- // Center Part -->
		</div>
		<!-- content block -->
	</div>
</div>
<!-- // white-plate -->

<?php include('./templates/_footer.php'); ?>