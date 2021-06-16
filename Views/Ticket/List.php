<?php if (!empty($ticket)): ?>


<div style="margin-left:300px;margin-right:300px">
    <h1 style="text-align:center;"> Tickets  list  </h1>
    <table class="table  table-striped table-hover table-bordered" id="data"  >
        <thead class="thead-dark">
        <tr>

            <th scope="col">Title </th>
            <th scope="col">Description</th>
            <th scope="col">User</th>
            <th scope="col">Appartment </th>
            <th scope="col">Cancel </th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($ticket as $tick): ?>
            <tr>
                <td><?= $tick->__get('title'); ?></td>
                <td><?= $tick->__get('description'); ?></td>
                <td><?= $tick->__get('user'); ?></td>
                <td><?= $tick->__get('appartment'); ?></td>
                <td class="cell100 column2">
                    <a href="ticket/delete?id=<?= $tick -> __get('id')?>">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>

            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
    <?php endif; ?>
    <div class="butt">
        <button onclick="location.href='ticket/insert'"  > Add a resident  </button>
    </div>

