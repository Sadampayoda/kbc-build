<h1>Partners Page</h1>
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
            <td>name</td>
            <td>picture</td>
            <td>detail</td>
            <td>action</td>
        </thead>
        <tbody>
            <?php foreach ($data as $item) { ?>
                <tr>
                    <td><?= $item['name'] ?></td>
                    <td><img src="<?= base_url() ?>/uploads/assets/partner/<?= $item['picture'] ?>" alt="<?= $item['picture'] ?>" width="150"></td>
                    <td><a href="<?= base_url() ?>admin/partners/<?= $item['id'] ?>">view</a></td>
                    <td><a href="<?= base_url() ?>admin/partners/<?= $item['id'] ?>/edit">edit</a> - <a href="<?= base_url() ?>admin/partners/<?= $item['id'] ?>/delete">delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <hr>
<?php } ?>
<a href="/admin/partners/create">+ create partner</a>