<div class="office">
    <div class="panel">
        <div class="panel-body">
            <a class="office-cover" href="">
                <img src="<?php echo $office->getCoverImage(); ?>" alt="<?php echo $office->getAddressPart('town'); ?> cover">
            </a>
            <div class="content">
                <h2 class="location"><?php echo $office->getAddressPart('town'); ?> Office</h2>
                <p class="address">
                    <?php echo $office->getFormattedAddress(); ?>
                </p>
                <div class="tel"> <a class="text-web-design-lg" href="tel:<?php echo $office->getTelephone(true); ?>">
                    <?php echo $office->getTelephone(false); ?></a>
                </div>
                <div class="view-more">
                    <a href="" class="btn btn-web-design">View More</a>
                </div>
            </div>
        </div>
            <div class="map">
                <img src="<?php echo $office->getMap(); ?>" alt="<?php echo $office->getAddressPart('town'); ?> map">
            </div>
    </div>
</div>