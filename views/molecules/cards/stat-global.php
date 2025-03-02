<article class="stat-global">
    <div class="bg-image lazy" style="background-image: url(<?= $image ?>)"></div>
    <div class="card-content">
        <div class="numerals outline">
            <?= $number ?? '' ?>
        </div>
        <h3 class="heading h3">
            <?= $title ?? '' ?>
        </h3>
        <p class="heading h5">
            <?= $description ?? '' ?>
        </p>
    </div>
</article>
