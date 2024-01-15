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
 * Version details.
 *
 * @package   format_aimtopicb
 * @copyright 2024 Scentia Group, Jamie Burgess & Matt Gleeson (forked from moodle-format_multitopic by James Calder, Otago Polytechnic)
 * @copyright 2019 onwards James Calder and Otago Polytechnic
 * @copyright based on work by 1999 onwards Martin Dougiamas (http://dougiamas.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version =  2024011601;          // The current plugin version (Date: YYYYMMDDXX). (NOTE: This instance of AIMTopicB is forked from MultiTopic Course Format, version 2023051701, release v4.2.1)
$plugin->requires = 2022041900;         // Requires this Moodle version.
$plugin->component = 'format_aimtopicb';    // Full name of the plugin (used for diagnostics). // CHANGED: format name.
$plugin->maturity = MATURITY_STABLE;
$plugin->release = 'v4.2.2';
