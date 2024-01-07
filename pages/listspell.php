<?php 
    require_once("database/spell.php"); 
    $database = new Spells();
    $spells = $database->getAll();

?>
<h1 class="text-black-65 display-1">Spells</h1>
<table class="table table-dark table-striped">
    <tr>
        <th>#</th>
        <th>ICON</th>
        <th>SPELL</th>
        <th>TYPE</th>
        <th>DESC</th>
        <th>LEVEL</th>
    </tr>
    <?php foreach ($spells as $spell): ?>
        <tr>
            <td><?php echo $spell['id'] ?></td>
            <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($spell['icon']).'"/>';?></td>
            <td><?php echo $spell['spell'] ?></td>
            <td><?php echo $spell['type'] ?></td>
            <td><?php echo $spell['description'] ?></td>
            <td><?php echo $spell['level'] ?></td>
        </tr>
    <?php endforeach; ?>

</table>