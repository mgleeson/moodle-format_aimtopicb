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
 * AIMtopicb course format. Display the course as pages of topics made of modules.
 *
 * @package   format_aimtopicb
 * @copyright 2019 onwards James Calder and Otago Polytechnic
 * @copyright based on work by 2006 The Open University
 * @author    based on work by N.D.Freear@open.ac.uk and others.
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . '/filelib.php');
require_once($CFG->libdir . '/completionlib.php');

// Horrible backwards compatible parameter aliasing.
// REMOVED.

// Retrieve course format option fields and add them to the $course object.
$format = course_get_format($course);
$course = $format->get_course();
$context = \context_course::instance($course->id);

// REMOVED set course marker.

// Make sure section 0 is created.
course_create_sections_if_missing($course, 0);

$renderer = $PAGE->get_renderer('format_aimtopicb');

// ADDED.
if ($sectionid) {
    $displaysection = $DB->get_record('course_sections',
                            array('id' => $sectionid, 'course' => $course->id), '*', MUST_EXIST);
}
// END ADDED.
if (isset($displaysection)) {
    $format->set_section_number($displaysection);
}
$outputclass = $format->get_output_classname('content');
$widget = new $outputclass($format);
echo $renderer->render($widget);

// Include course format js module.
$courseformat = course_get_format($course);
$maxsections = $courseformat->get_max_sections();
$maxsections = get_string('maxsectionslimit', 'core', $maxsections);

$PAGE->requires->js('/course/format/aimtopicb/format.js');
$PAGE->requires->js_init_call('M.course.format.addLink.init', ['link_href' => get_config('format_aimtopicb','link_href'), 'link_text' => get_config('format_aimtopicb','link_text')], true);
$PAGE->requires->js_init_call('M.course.format.fmtInit', ['max' => $maxsections], true);
