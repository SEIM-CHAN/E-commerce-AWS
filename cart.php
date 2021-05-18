<?php
if (!empty($_SESSION['product'])) {
?>
	<table class="type06">
	 <thead class="thead-dark">
	   <tr>
		<th>番号</th>
        <th>商品名</th>
        <th>価格</th>
		<th>数量</th>
        <th>小計</th>
		<th>削除</th>
	   </tr>
	 </thead>
		<?php
		$total = 0;
		foreach ($_SESSION['product'] as $id => $product) {
		?>  
		   <tbody>
			<tr>
			 <th scope="row"><?= $id ?></th>
			 <td><a href="ProductDetails.php?id=<?= $id ?>"><?= $product['item_name'] ?></a></td>
			 <td><?= $product['item_price'] ?>円</td>
			 <td><?= $product['count'] ?></td>
			 <?php
			 $subtotal = $product['item_price'] * $product['count'];
			 $total += $subtotal;
			 ?>
			 <td><?= $subtotal ?>円</td>
			 <td><a href="cart_delete.php?id=<?= $id ?>">削除</a></td>
			</tr>
		<?php
		}
		?>
		    <tr>
		     <td>合計</td>
		     <td></td>
			 <td></td>
		     <td></td>
		     <td><?= $total ?>円</td>
		     <td></td>
		    </tr>
		</table>
		<button><a href="purchase_input.php">購入手続き</a></button>
<?php
} else {
?>
	カートに商品がありません。
<?php
}
?>