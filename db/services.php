<?php
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
 * local_wsfunc Plugin to add a web service function that shows courses visible to a user
 *
 *
 * @package    local_wsfunc
 * @copyright  2016 SaylorAcademy
 * @author     John Azinheira
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
// We define the web service functions to install.
$functions = array(
        'local_wsfunc_get_visible_courses' => array(
                'classname'   => 'local_wsfunc_external',
                'methodname'  => 'get_visible_courses',
                'classpath'   => 'local/wsfunc/externallib.php',
                'description' => 'Return courses visible to a user.',
                'type'        => 'read',
        ),
        'local_wsfunc_get_grades' => array(
                'classname'   => 'local_wsfunc_external',
                'methodname'  => 'get_grades',
                'classpath'   => 'local/wsfunc/externallib.php',
                'description' => 'Return student course total grade and grades for activities.',
                'type'        => 'read',
        )
);
// We define the services to install as pre-build services. A pre-build service is not editable by administrator.
//$services = array(
//        'My service' => array(
//                'functions' => array ('local_wstemplate_hello_world'),
//                'restrictedusers' => 0,
//                'enabled'=>1,
//        )
//);