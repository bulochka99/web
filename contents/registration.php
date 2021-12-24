<section>
    <h1>Регистрация</h1>
    <div class="error" id="error"><?=$info ?? ""?></div>
    <div class="error" id="error"></div>
<form method="post" id="form">
        <div class="reg-wrapper">
            <div class="string">
                <label for="">Фамилия:</label>
                <input data-desc="Фамилия" type="text" name="Фамилия" required>
        </div>
        <div class="string">
                <label for="">Имя:</label>
                <input data-desc="Имя" id="name" type="text" name="name" required>
        </div>
        <div class="string">
                <label for="">Отчество:</label>
                <input data-desc="Отчество" type="text" name="Отчество" required>
    </div>
    <div class="string">
                 <label for="">Дата рождения:</label>
                 <input data-desc="Дата рождения" type="date" name="Дата рождения" required>
    </div>
        <div class="string">
                    <label for="">Пол:</label>
            <div>
                    <input type="radio" id="genderChoice"
                    name="gender" value="Мужчина">
                    <label for="genderChoice">Мужчина</label>
                    <input type="radio" id="genderChoice"
                    name="gender" value="Женщина">
                    <label for="genderChoice">Женщина</label>
            </div>
    </div>
    <div class="string">
    <label for="">Вид деятельности:</label>
            <select Вид деятельности>
            <option Вид деятельности>Студент</option>
            <option Вид деятельности>Работающий</option>
            <option Вид деятельности>Не работающий</option>
            <option Вид деятельности>Пенсионер</option>
        </select>
    </div>
        <div class="string">
            <label for="">Логин:</label>
            <input data-desc="Login" type="text" name="login" required>
        </div>
            <div class="string">
                <label for="">Пароль:</label>
                <input data-desc="Password" id="pass" type="password" name="password" required>
            </div>
            <div class="string">
                    <label for="">Пароль еще раз:</label>
                    <input data-desc="Password" id="pass2" type="password" name="one_more_pass" required>
             </div>
         <div class="string">
             <label for="">Email:</label>
             <input data-desc="Login" type="text" name="email" required>
         </div>
        <div class="agreement">
            <label for="">Соглашение:</label>
            <input data-dess="Соглашение" id="agreement"
            type="checkbox" name="agreement">
        </div>
                <div class="string buttons">
                    <input type="reset" value= "Очистить">
                    <button id="send" name="send">Отправить</button>
                </div>
             </div>
        </form>
</section>