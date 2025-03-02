<?php

use helpers\Svg;
use helpers\View;

?>

<section id="modal-search-offices-filters" class="hide-for-large modal-search-offices-filters hide">
    <div class="grid-container modal-content height-full">
        <div class="grid-x custom-grid">
            <div class="cell custom-cell">
                <div class="header-modal">
                    <a class="hide-for-large btn-back" href="#" data-action-back data-btn-close>
                        <div class="arrow-back">
                            <?php Svg::render('arrow-back-bigger', true, 'back', 'assets/images/arrows/')?>
                        </div>
                        Back
                    </a>
                    <div class="flex-container align-middle align-justify titles">
                        <h2 class="heading h5 title">Filters</h2>
                        <a class="btn-clear" href="#" data-filter-clear>Clear all</a>
                    </div>
                </div>
                <form action="">
                    <?php View::render('layout/navigation/modals/locations/mobile/filter-options') ?>
                    <div class="btn-filters">
                        <button type="button" class="btn full" data-btn-filters-show-matches data-action-back>Show&nbsp;<span class="counter"></span>&nbsp;results</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
