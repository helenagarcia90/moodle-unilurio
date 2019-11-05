<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * The maintenance layout.
 *
 * @package   theme_eguru
 * @copyright 2015 Nephzat Dev Team,nephzat.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$surl = new moodle_url('/course/search.php');
$guesttxt = (isguestuser()) ? ' ('.get_string('guest').') ' : '';
?>
<!--[if gte IE 9]>
  <style type="text/css">
    * {
       filter: none;
    }
  </style>
<![endif]-->
<header id="header">

	<div class="header-main">
    	<div class="container-fluid">
	    	<div class="header-logo">
              <a href="<?php echo $CFG->wwwroot;?>">
              <img src="<?php echo theme_eguru_get_logo_url(); ?>" width="183" height="67" alt="Eguru">
              </a>
            </div>
<?php 
if (isloggedin() and !isguestuser()) {
    if ($CFG->branch > "27") {
        echo $OUTPUT->user_menu();
    }
}
?>
            
<?php
if (!isloggedin() || isguestuser()) {
?>
    	    <div class="custom-menu hidden-desktop">
            	<ul>
                	<li><a href="<?php echo new moodle_url('/course/index.php'); ?>">
					<?php echo get_string('courses'); ?></a></li>
                  <li><a href="<?php echo new moodle_url('/login/index.php'); ?>">
					<?php echo get_string("login").$guesttxt; ?></a></li>
                </ul>
            </div>
<?php 
}
?>
    	    <div class="custom-menu visible-desktop">
            	<ul>
                	<li><a href="<?php echo $CFG->wwwroot;?>"><?php echo get_string('home'); ?></a></li>
<?php
if (isloggedin()) {
?>
                	<li><a href="<?php echo new moodle_url('/course/index.php'); ?>"><?php echo get_string('courses'); ?></a></li>
<?php
}
if (isloggedin() && is_siteadmin()) {
?>
                  <li><a href="<?php echo new moodle_url('/local/template_course/index.php'); ?>">
                    <?php echo get_string('subjects');/*'Matières';*/ ?>
                  </a></li>
<?php
}
?>

<?php
if (!isloggedin() || isguestuser()) {
?>
                	<li class="no-divider"><a href="<?php echo new moodle_url('/login/index.php'); ?>">
                    <?php echo get_string("login").$guesttxt; ?></a></li>
<?php
} else {
    echo $OUTPUT->earlier_user_menu();
}
?>
                </ul>
            </div>
	        <div class="clearfix"></div>
        </div>
    </div>
    
    <div class="header-menubar">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container-fluid">
              <a data-target="#Mainmenu" data-toggle="collapse" class="btn btn-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
              <a href="#" class="brand" style="display: none;">Eguru</a>
              <div id="Mainmenu" class="nav-collapse collapse navbar-responsive-collapse">
                <?php echo $OUTPUT->custom_menu(); ?>
                <div class="custom-nav-search">
					<form action="<?php echo new moodle_url('/course/search.php'); ?>" method="get">
                		<div class="fields-wrap">
                        	<input type="text" placeholder="<?php echo get_string('searchcourses'); ?>" name="search">
                            <div class="btn-search fa fa-search"><input type="submit" value="Search"></div>
                        </div>
                    </form> 
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    
</header>
<!--E.O.Header-->
