
<div class="formulaire" style="margin-left:600px;margin-right:600px">
    <h2 style="text-align:center"> Building registration</h1> <hr>
    <form action="/building/insert" method="post" class="form-style-9">
        <ul style="list-style: none;">
            <li>
                <label for="name" class="form-label">Name : </label>
                <input type="text" class="form-control" id="name" name="name" >
            </li>

            <li>
                <label for="street" class="form-label"> Street : </label><br>
                <input type="text" class="form-control" id="street" name="street">
            </li>
            <li>
                <label for="number" class="form-label"> Number :  </label><br>
                <input type="number" class="form-control" id="number" name="number">
            </li>
            <li>
                <label for="city" class="form-label"> City :  </label><br>
                <select name="city" id="city">
                    <?php foreach ($cities as $city): ?>
                        <option value="<?= $city->__get('id'); ?>"><?= $city->__get('name'); ?></option>
                    <?php endforeach; ?>
                </select>
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