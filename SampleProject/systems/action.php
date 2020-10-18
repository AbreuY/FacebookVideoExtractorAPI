<?php
//include the functions file
require_once(__DIR__ . "/functions.php");

if (!empty($_POST['url'])) {

    //get data for URL
    $data = url_get_contents($_POST['url']);

    //get the video links and title
    $hdlink = hdLink($data);
    $sdlink = sdLink($data);
    $title = getTitle($data);

    if ($sdlink != "" && $hdlink != "") {
        //Get both the SD and HD video quality
        $download_button = '<a target="_blank" href="' . $sdlink . '" class="btn btn-lg btn-block btn-success"> (MP4) Download SD Video</a>';
        $download_button .= '<a target="_blank" href="' . $hdlink . '" class="btn btn-block btn-lg btn-success"> (MP4) Download HD Video</a>';
    } elseif ($sdlink != "") {
        //Get the SD video alone
        $download_button = '<a target="_blank" href="' . $sdlink . '" class="btn btn-lg btn-block btn-success"> (MP4) Download SD Video</a>';
    } elseif ($hdlink != "") {
        //Get the HD video alone
        $download_button = '<a target="_blank" href="' . $hdlink . '" class="btn btn-lg btn-block btn-success"> (MP4) Download HD Video</a>';
    } else {
        //Return blank if there is no video
        $download_button = '';
    }

?>

    <section class="text-center">
        <div id="down" class="container">
            <div class="row">
                <div class="col-12 col-md-12 mt-5 mb-5">
                    <h2 class="text-success">Great!! Download Your video Now</h2>
                </div>

                <div class="col-12 col-md-6">
                    <h3><?php echo $title; ?></h3>
                </div>

                <div class="col-12 col-md-6">
                    <?php echo $download_button; ?>

                    <a href="/" class="btn btn-block btn-lg btn-primary">Convert Again </a>
                </div>
            </div>
            <!--.row-->

        </div>
        <!--.container-->
    </section>

<?php } ?>