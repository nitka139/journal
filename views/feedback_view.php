<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Главная</title>
		
	</head>
	<body>
		<h1 class="feedback">Оставьте обратную связь о нашем сайте!</h1>
		<form class="feedback_form" action="/journal/feedback/send" method="POST">
			<p>
				<input 
			class="feedback_formInput" 	placeholder="Введите ваше имя" name="user">
			</p>
			<p>
				<input class="feedback_formInput" placeholder="Введите вашу электронную почту"
				name="email">
			</p>
			<p>
				<textarea class="feedback_formInput" name="comment" placeholder="Введите ваш
	комментарий">
		
				</textarea>
			</p>
			<p>
				<input class="feedback_formButton" type="button" onclick="sendData()" value="Отправить"><input
	type="reset" value="Очистить">
			</p>
		</form>

		<script>
		{
			"use strict";
			function sendData() {
				let xhr = new XMLHttpRequest();
				feedbackForm = document.forms[0],
				formData = new FormData(feedbackForm)
				xhr.open("POST", '/journal/feedback/send')
				xhr.onloadend = function() {
				if (xhr.status == 200) {
					if (xhr.response == 1) {
						alert('Добавлено!');
					} else {
						alert(xhr.response);
					}
					} else {
						alert("Ошибка " + this.status);
					}
				};
				xhr.send(formData);
			}
		}
</script>


</body>
</html>

