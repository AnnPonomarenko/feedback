<?
	// *** Настройка обязательности полей, в случае если они присутствуют в вашей форме

	// Имя
	const NAMEISREQUIRED = true;
	const MSGSNAMEERROR = "⚠ Поле обязательно для заполнения";

	// Телефон
	const TELISREQUIRED = false;
	const MSGSTELERROR = "⚠ Поле обязательно для заполнения";

	// Email
	const EMAILISREQUIRED = true;
	const MSGSEMAILERROR = "⚠ Поле обязательно для заполнения";
	const MSGSEMAILINCORRECT = "⚠ Некорректный почтовый адрес";

	// Текстовое поле
	const TEXTISREQUIRED = false;
	const MSGSTEXTERROR = "⚠ Поле обязательно для заполнения";

	// Файл
	const FILEISREQUIRED = false;
	const MSGSFILEERROR = "⚠ Забыли добавить файл";

	// Соглашение
	const AGGREMENTISREQUIRED = true;
	const MSGSAGGREMENTERROR = "⚠ Примите пользовательское соглашение"; 

	// Сообщение об успешной отправке
	const MSGSSUCCESS = "Сообщение успешно отправлено";

	// *** SMTP *** //

		require_once($_SERVER['DOCUMENT_ROOT'] . '../phpmailer/smtp.php');
		const HOST = 'ssl://smtp.gmail.com';
		const LOGIN = 'order@gmail.com';
		const PASS = '12345678thisisOrder';
		const PORT = '465';

	// *** /SMTP *** //

  // Почта с которой будет приходить письмо
	const SENDER = 'order@gmail.com';
	
	// Почта на которую будет приходить письмо
	const CATCHER = 'kitcher.studio@gmail.com';
	
	// Тема письма
	const SUBJECT = 'Заказ просчета с сайта';
	
	// Кодировка
  const CHARSET = 'UTF-8';
