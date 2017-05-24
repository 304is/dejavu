<?php
$sql = "
	SELECT goods.name AS good_name, goods.description, goods.price, goods.id_category, goods.active, category.name AS category_name
	FROM goods
	LEFT JOIN category
	ON goods.id_category = category.id
	WHERE goods.id = '$id'
";
$product_row = fetchOne($sql);
$review_query = "
	SELECT review.id, review.comments, review.date, CONCAT (user.name,' ', user.surname) AS username
	FROM review
	LEFT JOIN user
	ON review.id_user = user.id
	WHERE review.id_goods = '$id'
";
$review_row = fetchAll($review_query);
$valuation_query = "
	SELECT id
	FROM valuation
	WHERE id_goods = {$_GET['id']} AND id_user = {$_SESSION['user']}
";
$valuation_row = fetchOne($valuation_query);