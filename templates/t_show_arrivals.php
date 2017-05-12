<?php require(__DIR__ . "/header.php") ?>


    <table class="table table-hover">
        <thead>
        <tr>
            <th><div align="center">Дата</div></th>
            <th><div align="center">Счет</div></th>
            <th><div align="center">Сумма</div></th>
            <th><div align="center">Описание</div></th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($arrivals as $arrival): ?>
            <tr>
                <td> <div align="center"> <?= $arrival[0];?> </div> </td>
                <td> <div align="center"> <?= $arrival[1];?> </div> </td>
                <td> <div align="center"> <?= $arrival[2];?> </div> </td>
                <td> <div align="center"> <?= $arrival[3];?> </div> </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>




<?php require(__DIR__ . "/footer.php") ?>