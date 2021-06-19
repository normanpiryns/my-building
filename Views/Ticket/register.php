
<div class="formulaire" style="margin-left:600px;margin-right:600px">
    <h2 style="text-align:center"> Ticket registration</h1> <hr>
    <form action="/ticket/insert" method="post" class="form-style-9">
        <ul style="list-style: none;">
            <input type="hidden" name='user' value="<?= $_SESSION['userId']?>">
            <li>
                <label for="title" class="form-label">Title : </label>
                <input type="text" class="form-control" id="title" name="title" >
            </li>

            <li>
                <label for="description" class="form-label"> Description : </label><br>
                <input type="text" class="form-control" id="description" name="description">
            </li>
            <li>
                <label for="building" class="form-label"> Building :  </label><br>
                <select name="building" id="building">
                    <?php foreach ($buildings as $building): ?>
                        <option value="<?= $building->__get('id'); ?>"><?= $building->__get('name'); ?></option>
                    <?php endforeach; ?>
                </select>
            </li>
            <li>
                <label for="appartment" class="form-label"> Appartment : </label><br>
                <input type="number" class="form-control" id="appartment" name="appartment">
            </li>
           
            
            
            <hr>
            <li>
                <div class="butt">
                    <button type="submit" name="submit" > Send   </button>
                </div>
            </li>
        </ul>
    </form>
</div>