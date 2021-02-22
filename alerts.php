<?php

function alert($title, $text, $type, $footer, $location){
        require("header.php");
	echo '<script language="javascript">';
        echo 'swal.fire({ title: " ' .$title. '",
                text: "'.$text. '",
                type: "' .$type. '",
                footer: "'. $footer. '",
                timer: 4000
                }).then(okay => {
                  if (okay) {
                   window.location.href = "'. $location. '";
                 }
               });';
        echo '</script>';
	exit;
    }

?>