
<div class="formulaire" style="margin-left:600px;margin-right:600px">
    <h2 style="text-align:center"> Modify an owner's information</h1> <hr>
    <form action="/owner/update" method="post" class="form-style-9">
        <ul style="list-style: none;">

            <input name="id" type="hidden" value="<?= $owner->__get('id')?>">

            <li>
                <label for="firstname" class="form-label">Name : </label>
                <input type="text" class="form-control" id="firstname" name="firstname" value="<?= $owner->__get('firstName');?>" >
            </li>

            <li>
                <label for="lastname" class="form-label"> Street : </label><br>
                <input type="text" class="form-control" id="lastname" name="lastname" value="<?= $owner->__get('lastName');?>">
            </li>
            <li>
                <label for="telephone" class="form-label"> Telephone :  </label><br>
                <input type="text" class="form-control" id="telephone" name="telephone" value="<?= $owner->__get('telephone');?>">
            </li>
            <li>
                <label for="email" class="form-label"> Telephone :  </label><br>
                <input type="text" class="form-control" id="email" name="email" value="<?= $owner->__get('email');?>">
            </li>
            <li>
                <label for="birthdate" class="form-label"> Birth date :  </label><br>
                <input type="date" class="form-control" id="birthdate" name="birthdate" value="<?= $owner->__get('birthDate');?>">
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