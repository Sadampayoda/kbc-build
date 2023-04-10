<h1>Manage Articles Page (admin)</h1>
<hr>
Data Length = <?= count($data) ?>
<br>
Data:
<?php if (!count($data)) { ?>
    <p>No Record</p>
    <br>
<?php } else { ?>
    <table border="1">
        <thead>
            <td>title</td>
            <td>detail</td>
            <td>action</td>
        </thead>
        <tbody>
            <?php foreach ($data as $item) { ?>
                <tr>
                    <td><?= esc($item['title']) ?></td>
                    <td><a href="<?= base_url() ?>admin/articles/<?= $item['id'] ?>">view</a></td>
                    <td><a href="<?= base_url() ?>admin/articles/<?= $item['id'] ?>/edit">edit</a> - <a href="<?= base_url() ?>admin/articles/<?= $item['id'] ?>/delete">delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <hr>
<?php } ?>
<a href="/admin/articles/create">+ create article</a>