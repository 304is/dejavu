<?php
$sql = "
	SELECT goods.name AS good_name, goods.description, goods.price, goods.id_category, goods.active, category.name AS category_name
	FROM goods
	LEFT JOIN category
	ON goods.id_category = category.id
	WHERE goods.id = '4'
";
$product_row = fetchOne($sql);
$review_query = "
	SELECT review.id, review.comments, review.date, CONCAT (user.name,' ', user.surname) AS username
	FROM review
	LEFT JOIN user
	ON review.id_user = user.id
	WHERE review.id_goods = '4'
";
$review_row = fetchAll($review_query);