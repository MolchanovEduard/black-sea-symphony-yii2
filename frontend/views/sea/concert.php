
<div class="content">
    <h2><?= $concert->a1; ?></h2>
    <hr>
    <span class="concert_span"><?= date('d.m.Y', strtotime($concert->a4)); ?></span>
    <img class="concert_img" src="/posters/<?= $concert->img1; ?>" width="500" />
    <p class="concert_p">
        <?= $concert->a3; ?>
    </p>
    <div class="concert_div">
        <a href="/sea/concerts" class="concert_a"> Каталог всех концертов ... </a>
    </div>
</div>