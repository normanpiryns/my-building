<div class="formulaire" style="margin-left:600px;margin-right:600px">
    <h2 style="text-align:center"> Modify an owner's information</h1> <hr>
        <form action="/user/update" method="post" class="form-style-9">
            <ul style="list-style: none;">

                <input name="id" type="hidden" value="<?= $User->__get('id')?>">

                <li>
                    <label for="username" class="form-label">Name : </label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= $User->__get('username');?>" >
                </li>

                <li>
                    <label for="email" class="form-label"> Email : </label><br>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $User->__get('email');?>">
                </li>

                <hr>
                <li>
                    <div class="butt">
                        <button type="submit" name="submit" > Update   </button>
                    </div>
                </li>
            </ul>
        </form>
</div>
