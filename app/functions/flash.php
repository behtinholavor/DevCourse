<?php

function flash($key, $message, $type = 'danger') {
    if(!isset($_SESSION['flash'][$key])) {
        // $_SESSION['flash'][$key] = '
        // <span class="alert alert-'.$type.' ">'.$message.'            
        // </span>';
        $_SESSION['flash'][$key] = '
        <div style="margin: .1rem;" class="alert alert-'.$type.' alert-dismissible fade show" role="alert">
            <strong style="margin: 20px;">SyStock</strong>'.$message.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }

}


function get($key) {
    if(isset($_SESSION['flash'][$key])) {
        $message = $_SESSION['flash'][$key];
        unset($_SESSION['flash'][$key]);
        return $message ?? '';
    }
}