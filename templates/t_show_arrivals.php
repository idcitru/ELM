<?php require(__DIR__ . "/header.php") ?>

    <form action="index.php">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input type="hidden" name="route" value="c_add_arrival" />
                    <button type="submit" class="btn btn-primary">Добавить новое поступление</button>
                </div>
            </div>
        </div>
    </form><a name="table"></a>

    <table class="table table-hover">
        <thead>
        <tr>
            <th><div align="center">Дата</div></th>
            <th><div align="center">Счет</div></th>
            <th><div align="center">Сумма</div></th>
            <th><div align="center">Описание</div></th>
            <th><div align="center">Редактировать</div></th>
            <th><div align="center">Удалить</div></th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($arrivals as $arrival): ?>
            <tr>
                <td> <div align="center"> <?= $arrival[1];?> </div> </td>
                <td> <div align="center"> <?= $arrival[2];?> </div> </td>
                <td> <div align="center"> <?= $arrival[3];?> </div> </td>
                <td> <div align="center"> <?= $arrival[4];?> </div> </td>
                <td> <div align="center"> <a href="index.php?route=c_modify_arrival&id_mod=<?= $arrival[0]?>"> Изменить </a></div> </td>
                <td> <div align="center"> <a href="index.php?route=c_delete_some_arrival&id_del=<?= $arrival[0]?>"> Удалить </a></div></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>




<?php require(__DIR__ . "/footer.php") ?>