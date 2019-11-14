<?php

// Loading classes

require_once('model/Manager.php');
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/loginSystemManager.php');

// Login Logout Register Section

// Check and register the submitted values

function test()
{
    require('view/frontend/test.php');
}

function sliderHeader()
{
    require('view/frontend/sliderHeader.php');
}

function meteoBanner()
{
    require('view/frontend/meteoBanner.php');
}

function mapSection()
{
    require('view/frontend/mapSection.php');
}
