<? if ($_GET['status'] == 'success') { ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Страница благодарности формы обратной связи</title>
	<link rel="stylesheet" href="../forma-v2/css/feedback.css">
	meta http-equiv="Refresh" content="4; URL=/"
</head>
<body>
	<div class="thank-you-page">
		<p class="thank-you-page__descriptor">Благодарю за оставленную заявку!</p>
		<a class="thank-you-page__button" href="/">На главную</a>
	</div>
</body>
</html>
<? } else {
    header ("Location: /"); // главная страница вашего лендинга
} ?>