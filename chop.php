<?php
function chopExtension($pagename) {
    return substr($pagename, 0, strrpos($pagename, '.'));
}
?>