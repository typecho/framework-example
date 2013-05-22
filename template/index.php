<h1><?php echo $word; ?></h1>

<h2>The master is <?php $master->name(); ?></h2>

<table>
    <?php foreach ($peoples as $p): ?>
    <tr>
        <td><?php $p->name(); ?></td>
        <td><?php $p->description(); ?></td>
        <td><?php $p->createdDate(); ?></td>
    </tr>
    <?php endforeach; ?>
</table>
