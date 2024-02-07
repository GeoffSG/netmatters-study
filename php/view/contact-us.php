<div class="breadcrumb">
    <ul>
        <li><a href="/"><strong>Home</strong></a></li>
        <li>Our Offices</li>
    </ul>
</div>
<div class="container">
    <div class="section">
        <h1>Our Offices</h1>
    </div>
    <div class="offices grid-2">
        <?php foreach ($offices as $office) { ?>
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
        <?php } ?>
    </div>
    <div class="section bottom contact-us">
        <div class="contact-info">
            <p><strong>Email us on:</strong></p>
            <a class="email text-web-design-lg">sales@netmatters.com</a>
            <p><strong>Business Hours:</strong></p>
            <p><strong>Monday - Friday 07:00 - 18:00</strong></p>
            <div class="drop-down">
                <a href="" class="drop-down-button">Out of Hours IT Support <em class="glyphicon-chevron-down"></em> </a>
                <div class="drop-down-content">
                    <p>
                        Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.
                    </p>
                    <p><strong>
                        Monday - Friday 18:00 - 22:00 Saturday 08:00 - 16:00<br>
                        Sunday 10:00 - 18:00
                    </strong></p>
                    <p>
                        To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call.
                    </p>
                </div>
            </div>
        </div>
        <div class="contact-form">
            <?php include 'components/contactUsForm.php'; ?>
        </div>
    </div>
</div>