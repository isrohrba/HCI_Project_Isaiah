
<tr>
<?php for ($l = 0; $l < count($family); $l++):
    ?>
    <td colspan="5">
        <?php
        $now = explode(",", $family[$l]);
        echo $now[1];
        ?>
    </td>
    </tr>

<?php endfor; ?>
<?php
$currentPerson;
?>
<tr id="current">
    <?php for ($j = 0; $j < 5; $j++): ?>
        <td>
            <?php
            $current = explode(",", $people[$i]);
            $person = new Person($current[0], $current[1], $current[2], $current[3], $current[4], $current[5]);
            $currentPerson = $person;
            echo $current[$j + 1];
            ?>
        </td>
    <?php endfor; ?>
    <td>
        <form method="post">
            <input type="checkbox" name="select" value="<?php echo $i ?>">
        </form>
    </td>
</tr>
<tr id="edit">
    <?php
    foreach ($person as $currentPerson) {
        $array = array(
            0 => $person->familyId,
            1 => $person->firstName,
            2 => $person->middleName,
            3 => $person->lastName,
            4 => $person->cellPhone,
            5 => $person->relationship
        );
    }
    ?>
    <?php for ($k = 0; $k < 5; $k++): ?>
        <td>
            <input type="text" value="<?php echo $array[$k + 1] ?>">

        </td>
    <?php endfor; ?>
    <td>

    </td>
</tr>
