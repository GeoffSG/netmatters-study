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
        <?php
        OfficeData::init();
        $offices = OfficeData::$offices;
        
        foreach ($offices as $office) {
            include 'components/office.php';    
        } 
        ?>
    </div>
    <div class="section bottom contact-us">
        <div class="contact-info">
            <p><strong>Email us on:</strong></p>
            <a class="email text-web-design-lg">sales@netmatters.com</a>
            <p><strong>Business Hours:</strong></p>
            <p><strong>Monday - Friday 07:00 - 18:00</strong></p>
            <div class="drop-down">
                <a class="drop-down-button">Out of Hours IT Support <em class="glyphicon-chevron-down"></em> </a>
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
            <?php include 'components/contact-us-form.php'; ?>
        </div>
    </div>
</div>