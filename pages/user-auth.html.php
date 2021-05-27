<form onsubmit="sendFormUser(this); return false;" autocomplete="off">
	<div class="container">
		<h1 class="my-5 text-center">Авторизация</h1>
		<div class="col-md-5 mx-auto">
			<div class="input-group my-2">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="fas fa-envelope fa-lg"></i></div>
				</div>
				<input
					type="email"
					class="form-control"
					placeholder="E-mail"
					required
					name="email"
					autocomplete="off"
				/>
			</div>
			<p id="info"></p>
			<div class="input-group my-2">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="fas fa-lock fa-lg"></i></div>
				</div>
				<input
					type="password"
					class="form-control"
					placeholder="Пароль"
					required
					id="formPass"
					name="pass"
					autocomplete="new-password"
				/>
				<span
					onmousedown="formPass.type = 'text'; this.nextElementSibling.hidden = false; this.hidden = true; "
					>&nbsp;<i class="fas fa-eye fa-lg"></i
				></span>
				<span
					hidden
					onmouseup="formPass.type = 'password'; this.previousElementSibling.hidden = false; this.hidden = true; "
					>&nbsp;<i class="far fa-eye-slash"></i
				></span>
			</div>
			<p>
			<input type="submit" class="form-control btn btn-danger" value="Авторизоваться" />
			</p>
			<p>
			<input type="button" class="form-control btn btn-danger" value="Зарегистрироваться" onclick="location.href='/user.php?signup'" />
			</p>
		</div>
	</div>
</form>
<script>
async function sendFormUser(form) 
{
    let formData = new FormData();
	let response = await fetch("/user.php?auth", 
	{
		method: "POST",
		body: new FormData(form),
	});
	let result = await response.text();
	if (result == "ok") 
	{
		location.href = "/user.php";
	} 
	else 
	{
		alert("Такого пользователя нет!");
	}
}
</script>

