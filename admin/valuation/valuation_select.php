<?php
$valuation_select_query = "
	SELECT valuation.id, valuation.id_goods, valuation.id_user, valuation.ball, valuation.date, goods.name AS goods_name, CONCAT(user.surname,' ', user.name,' ', user.patronymic) AS user_name
	FROM valuation
	LEFT JOIN goods
	ON goods.id = valuation.id_goods
	LEFT JOIN user
	ON user.id = valuation.id_user
";
$valuation_row = fetchAll($valuation_select_query);