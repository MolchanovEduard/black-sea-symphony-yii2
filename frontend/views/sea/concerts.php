<div class="content">
    <h2> Каталог всех концертов </h2>
    <hr>
    <div class="concerts_div">
        <?php

        foreach ($concerts as $j) {
            ?>
            <p>
                <a href="/sea/concert?id=<?= $j->id; ?>">
                    <span class="multimedia_span1"><?= date('d.m.Y', strtotime($j->a4)); ?></span>
                    <span class="multimedia_span2"> <?= $j->a1; ?> </span>
                </a>
            </p>
        <?php } ?>
    </div>
</div>