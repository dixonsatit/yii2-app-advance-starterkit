<?php
# ----------------------------------------------------------------
# PHP dotenv
# Loads environment variables from .env to getenv()
# accessible with the getenv menthod  eg. getenv('MYSQL_USER');
# ----------------------------------------------------------------
require_once(__DIR__ . '/helpers.php');
/**
 * Load application environment from .env file
 */
(new \Dotenv\Dotenv(__DIR__ . '/../../'))->load();
