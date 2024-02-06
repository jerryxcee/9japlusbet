<?php
include('header.php');
?>
<div style="">

    <!-- Load jQuery -->
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>

    <!-- Load Stats FC League Table SDK -->
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://statsfc-4f51.kxcdn.com/widget/table-2.0.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'statsfc-table-js'));
    </script>

    <!-- Your league table here -->
    <div class="statsfc-table"
        data-key="dC_ioFOVPTvB1X74I2Wm3GQ0SPFgg_f_6QmymfqD"
        data-competition="EPL"
        data-table-type="full"
        data-show-badges="true"
        data-use-default-css="true">
    </div>
<?php
include('footer.php');
?>