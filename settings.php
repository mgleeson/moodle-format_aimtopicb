<?php
// This file is part of Moodle - https://moodle.org/
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
 * Adds admin settings for the plugin.
 *
 * @package     format_aimtopicb
 * @category    admin
 * @copyright   2021 James Calder and Otago Polytechnic
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

    $settings->add(new admin_setting_configselect(
        'format_aimtopicb/startwday',
        new lang_string('configstartwday', 'admin'),
        new lang_string('helpstartofweek', 'admin'),
        1,
        [
            0 => new lang_string('sunday',  'calendar'),
            1 => new lang_string('monday',  'calendar'),
            5 => new lang_string('friday',  'calendar'),
            6 => new lang_string('saturday', 'calendar')
        ]
    ));

    $settings->add(new admin_setting_configselect(
        'format_aimtopicb/weeks_mindays',
        new lang_string('weeks_mindays',    'format_aimtopicb'),
        new lang_string('weeks_mindays_desc', 'format_aimtopicb'),
        4,
        [ 1 => 1, 4 => 4 ]
    ));

    $settings->add(new admin_setting_configcheckbox(
        'format_aimtopicb/weeks_partial',
        new lang_string('weeks_partial',    'format_aimtopicb'),
        new lang_string('weeks_partial_desc', 'format_aimtopicb'),
        0
    ));

    $settings->add(new admin_setting_configtext(
        'format_aimtopicb/link_href',
        new lang_string('link_href',    'format_aimtopicb'),
        new lang_string('link_href_desc', 'format_aimtopicb'),
        'https://my.aim.com.au/PortalLanding?brand=aim&tab=Learn'
    ));

    $settings->add(new admin_setting_configtext(
        'format_aimtopicb/link_text',
        get_string('link_text', 'format_aimtopicb'),
        get_string('link_text_desc', 'format_aimtopicb'),
        'Dashboard'
    ));

}
