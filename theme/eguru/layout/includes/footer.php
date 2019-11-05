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

$footnote = theme_eguru_get_setting('footnote', 'format_text');
$footnote = theme_eguru_lang($footnote);
$footerbtitle2 = theme_eguru_get_setting('footerbtitle2', 'format_text');
$footerbtitle2 = theme_eguru_lang($footerbtitle2);
$footerbtitle3 = theme_eguru_get_setting('footerbtitle3', 'format_text');
$footerbtitle3 = theme_eguru_lang($footerbtitle3);
$footerbtitle4 = theme_eguru_get_setting('footerbtitle4', 'format_text');
$footerbtitle4 = theme_eguru_lang($footerbtitle4);

$fburl    = theme_eguru_get_setting('fburl');
$fburl    = trim($fburl);
$pinurl   = theme_eguru_get_setting('pinurl');
$pinurl   = trim($pinurl);
$twurl    = theme_eguru_get_setting('twurl');
$twurl    = trim($twurl);
$gpurl    = theme_eguru_get_setting('gpurl');
$gpurl    = trim($gpurl);

$address  = theme_eguru_get_setting('address');
$emailid  = theme_eguru_get_setting('emailid');
$phoneno  = theme_eguru_get_setting('phoneno');

?>

<footer id="footer">

	<div class="footer-main">
    	<div class="container-fluid">
	    	<div class="row-fluid">
            	<div class="span3">
                	<div class="footer-desc">
                    	<div class="logo-footer">
                        	<a href="https://www.sjdhospitalbarcelona.org/es" target="_blank">
                                <img src="<?php print $CFG->wwwroot; ?>/theme/eguru/pix/home/logo3.png" style="width:200px; margin-bottom: 50px;" />
                            </a>
                            <a href="https://foot.upc.edu/es" target="_blank">
                                <img src="<?php print $CFG->wwwroot; ?>/theme/eguru/pix/home/logo5.jpg" style="width:200px;" />
                            </a>
                        </div>
                        <?php echo '<p>'.$footnote.'</p>'; ?>
                    </div>
                </div>
                <div class="span3">
                    <div class="footer-desc">
                        <div class="logo-footer">
                            <a href="https://www.vilanova.cat" target="_blank">
                                <img src="<?php print $CFG->wwwroot; ?>/theme/eguru/pix/home/logo4.jpg" style="width:150px; margin-bottom: 50px;" />
                            </a>
                            <!--a href="http://www.fundacioferreruela.com/" target="_blank">
                                <img src="<?php print $CFG->wwwroot; ?>/theme/eguru/pix/home/logo6.png" style="width:150px;" />
                            </a-->
                        </div>
                        <?php echo '<p>'.$footnote.'</p>'; ?>
                    </div>
                </div>
                <div class="span3">
                    <div class="footer-nav">
                        <div class="logo-footer">
                            <a href="http://www.ocularis.ong" target="_blank">
                                <img src="<?php print $CFG->wwwroot; ?>/theme/eguru/pix/home/logo2.png" style="height:190px;" />
                            </a>
                        </div>
                        <?php echo '<p>'.$footnote.'</p>'; ?>
                    </div>
                </div>
            	<div class="span3">
                    <div class="footer-contact">
                        <h4><?php echo $footerbtitle4; ?></h4>
                        <p><?php echo $address; ?></p>
                        <?php if(!empty($phoneno)): ?>
                            <p><i class="fa fa-phone-square"></i>Phone: <?php echo $phoneno; ?></p>
                        <?php endif; ?>
                        <?php if(!empty($emailid)): ?>
                            <p><i class="fa fa-envelope"></i>
                                E-mail: <a class="mail-link" href="mailto:<?php echo $emailid; ?>"><?php echo $emailid; ?></a>
                            </p>
                        <?php endif;?>
                    </div>
                	<div class="social-media" style="margin: 10px 0px 40px 0px;">
                    	<h4><?php echo $footerbtitle3; ?></h4>
                    	<ul>
                           	<li class="smedia-01" style="margin-top: -20px;">
                                <?php if(!empty($fburl)): ?>
                            	<a href="<?php echo $fburl; ?>" target="_blank">
                                	<span class="media-icon">
                                    <i class="fa <?php echo get_string('mediaicon1', 'theme_eguru'); ?>"></i>
                                    </span>
                                    <!--span class="media-name"><?php echo get_string('medianame1', 'theme_eguru'); ?></span-->
                                </a>
                                <?php endif; ?>
                                <?php if(!empty($twurl)): ?>
                                <a href="<?php echo $twurl; ?>" target="_blank">
                                    <span class="media-icon">
                                    <i class="fa <?php echo get_string('mediaicon2', 'theme_eguru'); ?>"></i>
                                    </span>
                                    <!--span class="media-name"><?php echo get_string('medianame2', 'theme_eguru'); ?></span-->
                                </a>
                                <?php endif; ?>
                                <?php if(!empty($gpurl)): ?>
                                <a href="<?php echo $gpurl; ?>" target="_blank">
                                    <span class="media-icon">
                                    <i class="fa <?php echo get_string('mediaicon3', 'theme_eguru'); ?>"></i>
                                    </span>
                                    <!--span class="media-name"><?php echo get_string('medianame3', 'theme_eguru'); ?></span-->
                                </a>
                                <?php endif; ?>
                                <?php if(!empty($pinurl)): ?>
                                <a href="<?php echo $pinurl; ?>" target="_blank">
                                    <span class="media-icon">
                                    <i class="fa <?php echo get_string('mediaicon4', 'theme_eguru'); ?>"></i>
                                    </span>
                                    <!--span class="media-name"><?php echo get_string('medianame4', 'theme_eguru'); ?></span-->
                                </a>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<div class="footer-foot">
    	<div class="container-fluid">
        	<p class="text-center"><b>©<?php echo date("Y"); ?> Unilurio e-Learning</b></p>
            <p class="text-center">Based on <a href="https://moodle.org" target="_blank">Moodle</a></p>
            <p class="text-center">GNU <a href="http://www.gnu.org/licenses/" target="_blank">Licence</a></p>
        </div>
    </div>

</footer>
<!--E.O.Footer-->
<?php
echo $OUTPUT->standard_end_of_body_html();
