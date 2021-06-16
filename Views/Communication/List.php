<?php if (!empty($communication)): ?>


<div style="margin-left:300px;margin-right:300px">
    <h1 style="text-align:center;">   Communication   </h1>
    <table class="table  table-striped table-hover table-bordered" id="data"  >
        <thead class="thead-dark">
        <tr>
            <th scope="col">title </th>
            <th scope="col">message</th>
            <th scope="col">Cancel </th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($communication as $com): ?>
            <tr>
                <td><?= $com->__get('title'); ?></td>
                <td><?= $com->__get('message'); ?></td>
                <td class="cell100 column2">
                    <a href="communication/delete?id=<?= $com -> __get('id')?>">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>

            </tr>
        <?php endforeach; ?>


        </tbody>
    </table>
    <?php endif; ?>
    <div class="butt">
        <button onclick="location.href='communication /insert'"  > Add a message  </button>
    </div>

