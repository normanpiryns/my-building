<?php if (!empty($owner)): ?>


<div style="margin-left:300px;margin-right:300px">
    <h1 style="text-align:center;"> Owners List  </h1>
    <table class="table  table-striped table-hover table-bordered" id="data"  >
        <thead class="thead-dark">
        <tr>

            <th scope="col">Firstname </th>
            <th scope="col">Lastname</th>
            <th scope="col">Telephone</th>
            <th scope="col">Email</th>
            <th scope="col">Birthdate </th>
            <th scope="col">Edit </th>
            <th scope="col">Delete </th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($owner as $ow): ?>
            <tr>
                <td><?= $ow->__get('firstName'); ?></td>
                <td><?= $ow->__get('lastName'); ?></td>
                <td><?= $ow->__get('telephone'); ?></td>
                <td><?= $ow->__get('email'); ?></td>
                <td><?= $ow->__get('birthDate'); ?></td>

                <td class="cell100 column2">
                    <a href="/owner/edit/<?= $ow ->__get('id')?>">
                        <i class="fa fa-refresh" aria-hidden="true"></i>
                    </a>
                </td>

                <td class="cell100 column2">
                    <a href="/owner/delete/<?=$ow ->__get('id')?>">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </td>

            </tr>
        <?php endforeach; ?>


        </tbody>
    </table>
    <?php endif; ?>
    <div class="butt">
        <button onclick="location.href='/owner/create'"  > Add an owner  </button>
    </div>
