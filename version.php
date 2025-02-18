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
 * @package   turnitintooltwo
 * @copyright 2012 iParadigms LLC
 */

defined('MOODLE_INTERNAL') || die();

if (empty($plugin)) {
    $plugin = new StdClass();
}

$plugin->version   = 2021060801;
$plugin->release   = "3.1+";
$plugin->requires  = 2016052300;
$plugin->component = 'mod_turnitintooltwo';
$plugin->maturity  = MATURITY_STABLE;

global $CFG;
$plugin->cron = 0;
if (!empty($CFG->version)) {
    $plugin->cron = ($CFG->version > 2014051200) ? 0 : 1800;
}
