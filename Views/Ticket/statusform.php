
<div class="formulaire" style="margin-left:600px;margin-right:600px">
    <h2 style="text-align:center"> Ticket registration</h1> <hr>
    <form action="/ticket/update" method="post" class="form-style-9">
        <ul style="list-style: none;">

        <input type="hidden" name='id' value=<?= $ticket->__get('id')?>>
            
            <li>
                <label for="building" class="form-label"> Status :  </label><br>
                <select name="status" id="status">
                        <option value="NULL" <?php if ($ticket->__get('status') === null){ echo "selected"; }?>>Non traitée</option>
                        <option value="0" <?php if ($ticket->__get('status') === '0'){ echo "selected"; }?>>En attente</option>
                        <option value="1" <?php if ($ticket->__get('status') === '1'){ echo "selected"; } ?>>Traité</option>
                </select>
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