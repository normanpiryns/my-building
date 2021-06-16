<?php if (!empty($user)): ?>


<div style="margin-left:300px;margin-right:300px">
    <h1 style="text-align:center;"> Members  list  </h1>
    <table class="table  table-striped table-hover table-bordered" id="data"  >
        <thead class="thead-dark">
        <tr>

            <th scope="col">Username </th>
            <th scope="col">Email</th>
            <th scope="col">Cancel </th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($user as $per): ?>
            <tr>
                <td><?= $per->__get('username'); ?></td>
                <td><?= $per->__get('email'); ?></td>
                <td class="cell100 column2">
                    <a href="ticket/delete?id=<?= $per -> __get('id')?>">
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

