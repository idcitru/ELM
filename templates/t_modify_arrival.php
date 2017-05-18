</form><a name="table"></a>
<form action="/index.php">

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

        <?php foreach ($employees as $employee): ?>
            <tr>
                <td> <div align="center">
                        <input type="text" name="new_position" value=<?= "$employee[1]";?> >
                    </div>
                </td>
                <td> <div align="center">
                        <input type="text" name="new_fio" value=<?= "$employee[2]";?> >
                    </div>
                </td>
                <td> <div align="center">
                        <input type="text" name="new_short_number" value=<?= $employee[3];?> >
                    </div>
                </td>
                <td> <div align="center">
                        <input type="text" name="new_long_number" value=<?= $employee[4];?> >
                    </div>
                </td>
                <td> <div align="center">
                        <input type="text" name="new_mobile" value=<?= $employee[5];?> >
                    </div>
                </td>
                <td> <div align="center">
                        <input type="text" name="email" value=<?= $employee[6];?> >
                        <input type="hidden" name="id_mod" value="<?= $employee[0] ?>" >
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <div class="row">
        <input type="hidden" name="route" value="c_modify_some_empoyee" />
        <button type="submit" class="btn btn-default">Изменить</button>
    </div>
    </tbody>
</form>