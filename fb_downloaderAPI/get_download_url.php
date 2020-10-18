<?php
    //include the functions file
    require_once(__DIR__ . "/grabber_op.php");

    if (!empty($_POST['url'])) {
        //get data for URL
        $data = url_get_contents($_POST['url']);

        //get the video links and title
        $hdlink = hdLink($data);
        $sdlink = sdLink($data);
        $title = getTitle($data);

        if ($sdlink != "" && $hdlink != "") {
            //Get both the SD and HD video quality
            $results = array('title'=>$title, 'sd_url'=>$sdlink, 'hd_url'=>$hdlink);
            echo json_encode(array("RESULT"=>array($results)));
        } elseif ($sdlink != "") {
            //Get the SD video alone
            //Get both the SD and HD video quality
            $results = array('title'=>$title, 'sd_url'=>$sdlink);
            echo json_encode(array("RESULT"=>array($results)));
        } elseif ($hdlink != "") {
            //Get the HD video alone
            //Get both the SD and HD video quality
            $results = array('title'=>$title, 'hd_url'=>$hdlink);
            echo json_encode(array("RESULT"=>array($results)));
        } else {
            //Return error if there is no video
            $errors = array('err_title'=>'Invalid video','err_msg'=>'Could not find any video, or the video is not accessible since it is private.');
            echo json_encode(array("ERROR"=>array($errors)));
        }
    } else {
        $errors = array('err_title'=>'Invalid parameters','err_msg'=>'Parameter (url) not found. Provide the required parameters using POST method');
        echo json_encode(array("ERROR"=>array($errors)));
    }
?>
