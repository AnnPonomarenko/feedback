<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title> Форма обратной связи </title>
    <meta name="description" content="Создание формы обратной связи" />
    <link rel="stylesheet" type="text/css" href="css/feedback.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,600,700&display=swap" rel="stylesheet">    
</head>
<body>
<div class="form-wrapper">
<div class="container-form">
    <div class="box_form">
    <form class="contact-form" id="contact-form_1" method="POST" enctype="multipart/form-data"> 
            <div class="contact-form__input-wrapper">
                <input name="name" type="text" class="contact-form__input contact-form__input_name"
                    placeholder="Ваше имя*" required="required">
                <div class="contact-form__error contact-form__error_name"></div>
            </div>
            <div class="contact-form__input-wrapper">
                <input name="tel" type="tel" class="contact-form__input contact-form__input_tel"
                       placeholder="Ваш телефон">
                <div class="contact-form__error contact-form__error_tel"></div>
            </div>
            <div class="contact-form__input-wrapper"> 
                <input name="email" type="email" class="contact-form__input contact-form__input_email"
                    placeholder="E-mail*" required="required">
                <div class="contact-form__error contact-form__error_email"></div>
            </div>
            <div class="contact-form__input-wrapper">
                <textarea name="text" class="contact-form__input contact-form__text" placeholder="Ваш комментарий"></textarea>
                <div class="contact-form__error contact-form__error_text"></div>
            </div>
            <div class="contact-form__input-wrapper">
                <input class="contact-form__input contact-form__file" type="file" name="files[]">
                <div class="contact-form__error contact-form__error_file"></div>
            </div>
            <div class="text__order">
               <h1>* Для просчета стоимости кухонной мебели укажите, пожалуйста, максимум информации, которая у Вас есть (размеры, материалы, фурнитура). Можно предоставить эскиз или макет с такой информацией, а также Ваши пожелания.</h1>
            </div>
            <div class="contact-form__input-wrapper">
                <input type="checkbox" name="agreement" class="contact-form__input contact-form__checkbox" id="agreement" required="required">
                <label for="agreement" class="contact-form__checkbox-label">Я принимаю условия  <a href="../Personal-data.pdf" target="_blank">пользовательского соглашения</a> и даю своё согласие на обработку моих персональных данных.</label>
                <div class="contact-form__error contact-form__error_agreement"></div>    
            </div> 

            <button class="contact-form__button" type="submit" > Сделать просчет </button>
        </form>
   </div>     
        <div class="photo__order">
            <img src="orderphoto.jpg" alt="Photo">
            <h1>* Для просчета стоимости кухонной мебели укажите, пожалуйста, максимум информации, которая у Вас есть (размеры, материалы, фурнитура). Можно предоставить эскиз или макет с такой информацией, а также Ваши пожелания.</h1>
        </div>  
</div>   
</div>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- jQuery Mask Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    
    <script src="/mail/js/mail.js"></script>

    <script>
        $(function() {
            $('.contact-form__input_tel').mask('+38(000) 000-00-00');
        });
    </script>
</body>

</html>