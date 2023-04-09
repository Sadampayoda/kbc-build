<h1>Partner Detail Page</h1>

<h4>Partner Name: <?= $data['name'] ?></h4>
<h4>Partner Logo:</h4>
<img src="<?= base_url() . $data['path'] . $data['picture'] ?>" alt="<?= $data['picture'] ?>" width="350">