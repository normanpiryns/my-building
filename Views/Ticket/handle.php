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
            <th scope="col">State</th>
            <th scope="col">Delete </th>
          

        </tr>
        </thead>
        <tbody>
        <?php foreach ($ticket as $tick): ?>
            <tr>
                <td><?= $tick->__get('title'); ?></td>
                <td><?= $tick->__get('description'); ?></td>
                <td><?= $userDao->getUserById($tick->__get('user'))->__get('username'); ?></td>
                <td><?= $tick->__get('appartment'); ?></td>
                
                <td>
                    <?php switch($tick->__get("status")){ case NULL: echo 'Non traité'; break; case 0: echo 'En attente'; break; case 1: echo 'Traité'; break;} ?> 
                    <a href="/ticket/edit/<?= $tick ->__get('id')?>">
                        <i class="fa fa-refresh" aria-hidden="true"></i>
                    </a>
                </td>
                <td class="cell100 column2">
                    <a href="/ticket/delete/<?= $tick -> __get('id')?>">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </td>
               
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
    <?php endif; ?>
    

