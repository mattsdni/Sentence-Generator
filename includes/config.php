<?php

    /**
     * config.php
     *
     * Adapted from Harvard Computer Science 50
     * Configures pages; Starts sessions; Shows errors.
     */

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require("functions.php");
    require("constants.php");

    // enable sessions
    session_start();

?>
