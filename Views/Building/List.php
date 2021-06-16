<table>
    <tr>
        <th>#</th>
        <th>Address</th>
        <th>City</th>
    </tr>
    <?php foreach($buildings as $building): ?>
        <tr>
            <?php $i = 1 ?>
            <td><?= $i ?></td>
            <td><?= $building->__get('street')?>, <?= $building->__get('number')?></td>
            <?php $city = $cityDao->getCityById($building->__get('city'))->__get('name'); ?>
            <?php $postcode = $cityDao->getCityById($building->__get('city'))->__get('postcode'); ?>
            <td><?=$city, ", ", $postcode; ?></td>
        </tr>
    <?php $i++; endforeach ?>    
</table>

        