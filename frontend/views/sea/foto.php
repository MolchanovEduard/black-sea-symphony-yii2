<div  class="content">
    <h2> Наши фотоальбомы</h2>
    <hr>
    <div class="foto_div1">
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
    <hr class="foto_hr">

    <span class="foto_span1"><?= date('d.m.Y', strtotime($x->a4)); ?></span>
    <span class="foto_span2"><?= $x->a1; ?></span>
    <div class="foto_div2">
        <?= $x->a3; ?>
    </div>
    <?php
    $name=$x->a2;
    $dir="./foto/".$name;
    $scan = scandir($dir);

    for($i=0;$i<count($scan);$i++){

        if($scan[$i]!="." && $scan[$i]!=".." ){
            ?>
            <a class="fancybox" rel="group" href="/<?=$dir;?>_b/<?=$scan[$i];?>" title=''>
                <img class="posters_a_img" src="/<?=$dir;?>/<?=$scan[$i];?>" alt='' />
            </a>
            <?php
        }
    }
    ?>
</div>