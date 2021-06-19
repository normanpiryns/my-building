<div class="formulaire" style="margin-left:600px;margin-right:600px">
    <h2 style="text-align:center"> city's update </h1> <hr>
        <form action="/city/update" method="post" class="form-style-9">
            <ul style="list-style: none;">

                <input name="id" type="hidden" value="<?= $city->__get('id')?>">

                <li>
                    <label for="name" class="form-label">Name : </label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $city->__get('name');?>" >
                </li>

                <li>
                    <label for="postcode" class="form-label"> Postcode : </label><br>
                    <input type="text" class="form-control" id="postcode" name="postcode" value="<?= $city->__get('postcode');?>">
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
