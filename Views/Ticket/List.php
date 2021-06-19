<?php if (!empty($tickets)): ?>


<div style="margin-left:300px;margin-right:300px">
    <h1 style="text-align:center;"> Tickets  list  </h1>
    <table class="table  table-striped table-hover table-bordered" id="data"  >
        <thead class="thead-dark">
        <tr>

            <th scope="col">Title </th>
            <th scope="col">Description</th>
            <th scope="col">Appartment </th>
           

        </tr>
        </thead>
        <tbody>
        <?php foreach ($tickets as $ticket): ?>
            <tr>
                <td><?= $ticket->__get('title'); ?></td>
                <td><?= $ticket->__get('description'); ?></td>
                <td><?= $ticket->__get('appartment'); ?></td>
                

            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
    <?php endif; ?>
    <div class="butt">
        <button onclick="location.href='/ticket/create'"  > Add a ticket  </button>
    </div>

