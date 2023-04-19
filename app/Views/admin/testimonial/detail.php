<?php
switch (esc($data['rate'])) {
    case '1':
        $rate = '*';
        break;
    case '2':
        $rate = '**';
        break;
    case '3':
        $rate = '***';
        break;
    case '4':
        $rate = '****';
        break;
    case '5';
        $rate = '*****';
        break;
    default:
        $rate = '';
        break;
}
?>

<h1>Detail Page Testimonial (admin)</h1>

<h4><?= esc($data['name']) ?></h4>
<h5><?= esc($data['comment']) ?></h5>
<h5>Rating: <?= esc($rate) ?></h5>