<?php
use helpers\View;
?>

<div class="publications">
    <div class="grid-container full overflow-hidden">
        <div class="publication-title-container scroll-track left-right delay-1">
            <div class="section-title">
                <h2 class="heading h2">
                    Publications
                </h2>
            </div>
        </div>
        <div class="publications-slider scroll-track left-right delay-1">
            <div class="bullets-container">
                <div class="glide__bullets" data-glide-el="controls[nav]">
                    <div class="control-slider"></div>
                    <button class="glide__bullet" data-glide-dir="=0" aria-label="Slide 1">
                        <span class="show-for-sr">Slide 1</span>
                    </button>
                    <button class="glide__bullet" data-glide-dir="=1" aria-label="Slide 2">
                        <span class="show-for-sr">Slide 2</span>
                    </button>
                    <button class="glide__bullet" data-glide-dir="=2" aria-label="Slide 3">
                        <span class="show-for-sr">Slide 3</span>
                    </button>
                </div>
            </div>
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide">
                        <?php
                        View::render('molecules/cards/publication',[
                            'image' => '/assets/images/placeholder/publication-1.png',
                            'tag' => 'Report',
                            'title' => 'Human mobility, shared opportunities',
                            'description' => 'This UNDP publication recommends actions for policymakers to enhance the benefits and reduce the costs of human mobility to help achieve the Sustainable Development Goals.',
                            'cta' => 'Read more'
                        ])
                        ?>
                    </li>
                    <li class="glide__slide">
                        <?php
                        View::render('molecules/cards/publication',[
                            'image' => '/assets/images/placeholder/publication-2.png',
                            'tag' => 'Report',
                            'title' => 'UNDP Annual Report 2019',
                            'description' => 'As one of the world’s largest multilateral development agencies, present in over 170 countries and territories, UNDP is on the frontlines of anticipating, understanding and acting on today’s opportunities and risks.',
                            'cta' => 'Read more'
                        ])
                        ?>
                    </li>
                    <li class="glide__slide">
                        <?php
                        View::render('molecules/cards/publication',[
                            'image' => '/assets/images/placeholder/publication-3.png',
                            'tag' => 'Report',
                            'title' => 'UNDP Issues Brief on Resilient Livelihoods Value Chains',
                            'description' => 'Through this thematic area, UNDP supports the advancement of climate resilient livelihoods for vulnerable communities, including resilient agricultural value chain development.',
                            'cta' => 'Read more'
                        ])
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
