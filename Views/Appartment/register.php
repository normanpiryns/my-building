
<div class="formulaire" style="margin-left:600px;margin-right:600px">
    <h1 style="text-align:center;"> Appartment registration</h1> <hr>
    <form action="/appartment/register" method="post" class="form-style-9">
        <ul>
            <li>
                <label for="number" class="form-label">number : </label>
                <input type="text" class="form-control" id="number" name="number" >
            </li>
<?php if(!empty($building)): ?>
            <li>
                <label for="building" class="form-label"> building : </label><br>
                <select name="building" id="building" >
                    <?php foreach ($building as $built ){ ?>
                        <option value="<?php echo $built['id']; ?>"><?php echo $built['name']; ?></option>
                    <?php }?>
                </select>
            </li>
<?php endif;?>
            <li>
                <label for="password" class="form-label"> Password :  </label><br>
                <input type="text" class="form-control" id="password" name="password">
            </li>
            <hr>
            <li>
                <div class="butt">
                    <button type="submit" name="submit" > Register   </button>
                </div>
            </li>
        </ul>
    </form>
</div>