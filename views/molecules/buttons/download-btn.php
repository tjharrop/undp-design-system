<?php
use helpers\Svg;
$tagName = $tagName ?? 'a'
?>


<<?= $tagName ?>
    <?= $attributes ?? '' ?>
    href="<?= $link ?? '' ?>"
    target="<?= $target ?? '_self' ?>"
    class="text-link arrow-3 download-btn <?= $classes ?? '' ?> <?= ($btnText ?? false) ? '' : 'icon-only' ?>">

    <?= $btnText ?? '' ?>

    <span class="icon-wrapper">
       <span class="icon">
            <?php Svg::render($btnIcon ?? 'icon-download') ?>
        </span>
    </span>
</<?= $tagName ?>>
