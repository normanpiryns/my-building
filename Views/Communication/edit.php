<div class="formulaire" style="margin-left:600px;margin-right:600px">
    <h2 style="text-align:center"> Owner's update </h1> <hr>
        <form action="/communication/update" method="post" class="form-style-9">
            <ul style="list-style: none;">

                <input name="id" type="hidden" value="<?= $communication->__get('id')?>">

                <li>
                    <label for="title" class="form-label"> Title : </label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= $communication->__get('title');?>" >
                </li>

                <li>
                    <label for="message" class="form-label"> Message : </label><br>
                    <input type="text" class="form-control" id="message" name="message" value="<?= $communication->__get('message');?>">
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
