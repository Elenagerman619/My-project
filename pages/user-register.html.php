<form onsubmit="sendForm(this); return false;" autocomplete="off">
	<div class="container">
		<h1 class="my-5 text-center">Регистрация на сайте</h1>
		<div class="col-md-5 mx-auto">
			<div class="input-group my-2">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="fas fa-user-ninja fa-lg"></i></div>
				</div>
				<input type="text" class="form-control" placeholder="Имя" required name="name" />
			</div>
			<div class="input-group my-2">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="fas fa-user-ninja fa-lg"></i></div>
				</div>
				<input
					type="text"
					class="form-control"
					placeholder="Фамилия"
					required
					name="lastname"
				/>
			</div>
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
			<div class="form-check mb-2">
				<input class="form-check-input" type="checkbox" id="autoSizingCheck" required />
				<label class="form-check-label" for="autoSizingCheck">
					Даю свое согласие на обработку персональных данных
				</label>
			</div>

			<input type="submit" class="form-control btn btn-danger" value="Зарегистрироваться" />
		</div>
	</div>
</form>
<script>
async function sendForm(form) 
{
	let response = await fetch("/user.php?register", 
	{
		method: "POST",
		body: new FormData(form),
	});
	let result = await response.text();
	if (result == "ok") 
	{
		alert("Успешно зарегистрирован!");
	} 
	else 
	{
		alert(result);
		info.innerText = "Такой пользователь уже существует!";
	}
}
</script>
