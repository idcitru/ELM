<?php require(__DIR__ . "/header.php") ?>


</form><a name="table"></a>
<form action="index.php">

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
        <td>
            <div align="center">
                <input type="date" name="new_position" value=<?= "$arrival[1]" ;?> >
            </div>
        </td>
        <td> <div align="center">
                <select>
                    <?php foreach ($counts as $count) :?>
                        <option><?= $count[0];?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </td>
        <td>
            <div align="center">
                <input type="text" name="new_position" value=<?= "$arrival[3]" ;?> >
            </div>
        </td>
        <td>
            <div align="center">
                <input type="text" name="new_position" value=<?= "$arrival[4]" ;?> >
            </div>
        </td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>

    <div class="row">
        <input type="hidden" name="route" value="c_modify_arrival" />
        <button type="submit" class="btn btn-default">Изменить</button>
    </div>
    </tbody>
</form>

<?php require(__DIR__ . "/footer.php") ?>