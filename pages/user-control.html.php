<div class="container">
<p>
Имя:<span><?= $user['name'] ?></span>
<span class="edit-btn" >[Изменить]</span>
<span class="save-btn" data-item="name" hidden>[Сохранить]</span>
<span class="cancel-btn" hidden>[Отменить]</span>
</p>
<p>Фамилия:<span><?= $user['lastname'] ?></span>
<span class="edit-btn">[Изменить]</span>
<span class="save-btn" data-item="lastname" hidden>[Сохранить]</span>
<span class="cancel-btn" hidden>[Отменить]</span>
</p>
<span>E-mail:<?= $user['email'] ?></span><br>
<span>id:<?= $user['id'] ?></span>
</div>

<script>
let edit_buttons = document.querySelectorAll(".edit-btn");
let save_buttons = document.querySelectorAll(".save-btn");
let cancel_buttons = document.querySelectorAll(".cancel-btn");

for (let i = 0; i < edit_buttons.length; i++) 
{
    let inputValue = edit_buttons[i].previousElementSibling.innerText;
    edit_buttons[i].addEventListener("click", () => {
        edit_buttons[i].previousElementSibling.innerHTML = `<input type="text" value="${inputValue}">`;
        save_buttons[i].hidden = false;
        cancel_buttons[i].hidden = false;
        edit_buttons[i].hidden = true;
    });
    cancel_buttons[i].addEventListener("click", () => {
        edit_buttons[i].previousElementSibling.innerHTML = inputValue;
        save_buttons[i].hidden = true;
        cancel_buttons[i].hidden = true;
        edit_buttons[i].hidden = false;
    })

    save_buttons[i].addEventListener("click", async () => {
        let newInputValue = edit_buttons[i].previousElementSibling.innerText = edit_buttons[i].previousElementSibling.firstElementChild.value;
        inputValue = newInputValue;
        save_buttons[i].hidden = true;
        cancel_buttons[i].hidden = true;
        edit_buttons[i].hidden = false;

        let formData = new FormData();
        formData.append("value", newInputValue);
        formData.append("item", save_buttons[i].dataset.item);
        let response = await fetch('/user.php?update', {method: 'POST', body: formData});
    });

}
</script>


