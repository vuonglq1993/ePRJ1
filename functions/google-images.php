<?php 
    function convertGgdriveimg ($google_drive_link) {
        if (preg_match('/\/file\/d\/(.*)\/view\?usp=sharing/', $google_drive_link, $matches)) {
            $file_id = $matches[1];
            return "https://drive.google.com/uc?export=view&id=$file_id";
        }
        return $google_drive_link;
    }