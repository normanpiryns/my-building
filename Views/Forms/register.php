
<div class="formulaire" style="margin-left:600px;margin-right:600px">
    <h1 style="text-align:center;"> User registration</h1> <hr>
    <form action="/user/register" method="post" class="form-style-9" id="register-form">
    <p class="e"></p>
        <ul>
            <li>
                <label for="username" class="form-label">Username : </label>
                <input type="text" class="form-control" id="username" name="username" >
            </li>

            <li>
                <label for="email" class="form-label"> E-mail : </label><br>
                <input type="text" class="form-control" id="email" name="email">
            </li>
            <li>
                <label for="password" class="form-label"> Password :  </label><br>
                <input type="text" class="form-control" id="password" name="password">
            </li>
            <hr>
            <li>
                <div class="butt">
                    <button type="submit" name="submit" id="register-submit"> Register   </button>
                </div>
            </li>
        </ul>
    </form>
</div>