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
 * Upgrade scripts for AIMtopicb course format.
 *
 * @package    format_aimtopicb
 * @copyright  2020 James Calder and Otago Polytechnic
 * @copyright  based on work by 2017 Marina Glancy
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Upgrade script for AIMtopicb course format.
 *
 * @param int|float $oldversion the version we are upgrading from
 * @return bool result
 */
function xmldb_format_aimtopicb_upgrade($oldversion) {
    global $DB;

    if ($oldversion < 2020090400) {

        // Change periodduration "0 days" to "0 day".
        $DB->execute(
            "UPDATE {course_format_options} SET value = '0 day'
             WHERE format = ? AND name = 'periodduration' AND value = '0 days'",
            ['aimtopicb']
        );

        upgrade_plugin_savepoint(true, 2020090400, 'format', 'aimtopicb');
    }

    if ($oldversion < 2022012100) {

        // Add collapsible.
        $DB->execute(
            "INSERT INTO {course_format_options} (courseid, format, sectionid, name, value)
             SELECT courseid AS courseid, format AS format, sectionid AS sectionid, 'collapsible' AS name, '0' AS value
             FROM {course_format_options} cfo_pd
             WHERE format = ? AND name = 'periodduration' AND value LIKE '0 %' AND NOT EXISTS (
                SELECT id
                FROM {course_format_options} cfo_c
                WHERE courseid = cfo_pd.courseid AND format = cfo_pd.format AND sectionid = cfo_pd.sectionid AND name='collapsible'
             )",
            ['aimtopicb']
        );

        upgrade_plugin_savepoint(true, 2022012100, 'format', 'aimtopicb');
    }

    return true;
}
