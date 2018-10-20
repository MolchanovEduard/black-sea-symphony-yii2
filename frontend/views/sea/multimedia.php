<div class="content">
    <h2> Мультимедиа </h2>
    <hr>
    <h3 class="multimedia_h3">Каталог видео</h3>
    <div class="multimedia_div">
        <?php

        foreach ($video as $j) {
            ?>
            <p>
                <a href="/sea/video?id=<?= $j->id; ?>">
                    <span class="multimedia_span1"><?= date('d.m.Y', strtotime($j->a4)); ?></span>
                    <span class="multimedia_span2"> <?= $j->a1; ?> </span>

                </a>
            </p>
        <?php } ?>
    </div>
    <h3 class="multimedia_h3">Наши фотоальбомы</h3>
    <div class="multimedia_div">
        <?php

        foreach ($foto as $j) {
            ?>
            <p>
                <a href="/sea/foto?id=<?= $j->id; ?>">
                    <span class="multimedia_span1"><?= date('d.m.Y', strtotime($j->a4)); ?></span>
                    <span class="multimedia_span2"> <?= $j->a1; ?> </span>
                </a>
            </p>
        <?php } ?>
    </div>
</div>