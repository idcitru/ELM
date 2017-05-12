<?php require(__DIR__ . "/header.php") ?>

    <div class="row">
        <div class="col-md-8">
                <h1>Счета</h1>
        </div>

        <div class="col-md-4">  <h3>Итого приход: <?  ?></h3></div>
    </div>


    <table class="table table-hover">
        <thead>
        <tr>
            <th><div align="center">Название счета</div></th>
            <th><div align="center">Сумма</div></th>

        </tr>
        </thead>
        <tbody>

        <?php foreach ($counts as $count): ?>
            <tr>
                <td> <div align="center"> <?= $count[0];?> </div> </td>
                <td> <div align="center"> <?= $count[1];?> </div> </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div class="page-header">
        <h1>Фонды</h1>
    </div>

    <h2>
        <span class="label label-default">На будующее</span>
        <span class="label label-primary">На квартиру</span>
        <span class="label label-success">Обязательства</span>
        <span class="label label-info">Потребления</span>
        <span class="label label-warning">Благотворительность</span>
    </h2>

    <div class="page-header">
        <h1>Цели</h1>
    </div>

<?php require(__DIR__ . "/footer.php") ?>