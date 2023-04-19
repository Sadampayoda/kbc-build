<h1>Manage Testimonial Page (admin)</h1>
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
            <td>rating</td>
            <td>detail</td>
            <td>action</td>
        </thead>
        <tbody>
            <?php foreach ($data as $item) { ?>
                <tr>
                    <td><?= esc($item['name']) ?></td>
                    <td><?= esc($item['rate']) ?></td>
                    <td><a href="<?= base_url() ?>admin/testimonials/<?= $item['id'] ?>">view</a></td>
                    <td><a href="<?= base_url() ?>admin/testimonials/<?= $item['id'] ?>/edit">edit</a> - <a href="<?= base_url() ?>admin/testimonials/<?= $item['id'] ?>/delete">delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <hr>
<?php } ?>
<a href="/admin/testimonials/create">+ create article</a>