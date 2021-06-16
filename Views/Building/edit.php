
<div class="formulaire" style="margin-left:600px;margin-right:600px">
    <h2 style="text-align:center"> Modify a building's information</h1> <hr>
    <form action="/building/update" method="post" class="form-style-9">
        <ul style="list-style: none;">

            <input name="id" type="hidden" value="<?= $building->__get('id')?>">

            <li>
                <label for="name" class="form-label">Name : </label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $building->__get('name');?>" >
            </li>

            <li>
                <label for="street" class="form-label"> Street : </label><br>
                <input type="text" class="form-control" id="street" name="street" value="<?= $building->__get('street');?>">
            </li>
            <li>
                <label for="number" class="form-label"> Number :  </label><br>
                <input type="number" class="form-control" id="number" name="number" value="<?= $building->__get('number');?>">
            </li>
            <li>
                <label for="city" class="form-label"> City :  </label><br>
                <select name="city" id="city">
                    <?php foreach ($cities as $city): ?>
                        <option value="<?= $city->__get('id'); ?>" <?php if($city->__get('name') == $cityDao->getCityById($building->__get('city'))->__get('name')): echo 'selected="selected"'; endif; ?>><?= $city->__get('name');?></option>
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