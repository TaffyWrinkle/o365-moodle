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
 * @package local_o365
 * @author James McQuillan <james.mcquillan@remote-learner.net>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @copyright (C) 2014 onwards Microsoft Open Technologies, Inc. (http://msopentech.com/)
 */

defined('MOODLE_INTERNAL') || die;

$PAGE->requires->jquery();

if ($hassiteconfig) {
    $settings = new \admin_settingpage('local_o365', get_string('pluginname', 'local_o365'));
    $ADMIN->add('localplugins', $settings);

    $label = get_string('settings_aadtenant', 'local_o365');
    $desc = get_string('settings_aadtenant_details', 'local_o365');
    $settings->add(new \admin_setting_configtext('local_o365/aadtenant', $label, $desc, '', PARAM_ALPHANUMEXT));

    $label = get_string('settings_odburl', 'local_o365');
    $desc = get_string('settings_odburl_details', 'local_o365');
    $settings->add(new \admin_setting_configtext('local_o365/odburl', $label, $desc, '', PARAM_ALPHANUMEXT));

    $label = get_string('settings_systemapiuser', 'local_o365');
    $desc = get_string('settings_systemapiuser_details', 'local_o365');
    $settings->add(new \local_o365\adminsetting\systemapiuser('local_o365/systemapiuser', $label, $desc, '', PARAM_RAW));

    $label = get_string('settings_sharepointlink', 'local_o365');
    $desc = get_string('settings_sharepointlink_details', 'local_o365');
    $settings->add(new \local_o365\adminsetting\sharepointlink('local_o365/sharepointlink', $label, $desc, '', PARAM_RAW));

    $label = get_string('settings_aadsync', 'local_o365');
    $desc = get_string('settings_aadsync_details', 'local_o365');
    $settings->add(new \admin_setting_configcheckbox('local_o365/aadsync', $label, $desc, '0'));

    $label = get_string('settings_healthcheck', 'local_o365');
    $desc = get_string('settings_healthcheck_details', 'local_o365');
    $settings->add(new \local_o365\adminsetting\healthcheck('local_o365/healthcheck', $label, $desc, '0'));
}
