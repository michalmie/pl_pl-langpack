<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/




$mod_strings = array (
	'LBL_MODULE_NAME' => 'Project Tasks',
	'LBL_MODULE_TITLE' => 'Project Task: Home',
	'LBL_SEARCH_FORM_TITLE' => 'Project Task Search',
	'LBL_LIST_FORM_TITLE'=> 'Project Task List',
    'LBL_EDIT_TASK_IN_GRID_TITLE'=> 'Edit Task In Grid',    
	
	'LBL_ID' => 'Id:',
    'LBL_PROJECT_TASK_ID' => 'Project Task Id:',
    'LBL_PROJECT_ID' => 'Project Id:',
	'LBL_DATE_ENTERED' => 'Data utworzenia:',
	'LBL_DATE_MODIFIED' => 'Data modyfikacji:',
	'LBL_ASSIGNED_USER_ID' => 'Przypisane do:',
	'LBL_MODIFIED_USER_ID' => 'Modified User Id:',
	'LBL_CREATED_BY' => 'Created By:',
	'LBL_TEAM_ID' => 'Team:',
	'LBL_NAME' => 'Nazwa:',
	'LBL_STATUS' => 'Stan:',
	'LBL_DATE_DUE' => 'Due Date:',
	'LBL_TIME_DUE' => 'Due Time:',
    'LBL_RESOURCE' => 'Resource:',
    'LBL_PREDECESSORS' => 'Predecessors:',
	'LBL_DATE_START' => 'Data rozpoczęcia:',
    'LBL_DATE_FINISH' => 'Data zakończenia:',    
	'LBL_TIME_START' => 'Czas rozpoczęcia:',
    'LBL_TIME_FINISH' => 'Czas zakończenia:',
    'LBL_DURATION' => 'Duration:',
    'LBL_DURATION_UNIT' => 'Duration Unit:',
    'LBL_ACTUAL_DURATION' => 'Actual Duration:',
	'LBL_PARENT_ID' => 'Project:',
    'LBL_PARENT_TASK_ID' => 'Parent Task Id:',    
    'LBL_PERCENT_COMPLETE' => '% Complete:',
	'LBL_PRIORITY' => 'Priorytet:',
	'LBL_DESCRIPTION' => 'Description:',
	'LBL_ORDER_NUMBER' => 'Order:',
	'LBL_TASK_NUMBER' => 'Task Number:',
    'LBL_TASK_ID' => 'Task ID:',
	'LBL_DEPENDS_ON_ID' => 'Depends On:',
	'LBL_MILESTONE_FLAG' => 'Milestone:',
	'LBL_ESTIMATED_EFFORT' => 'Estimated Effort (hrs):',
	'LBL_ACTUAL_EFFORT' => 'Actual Effort (hrs):',
	'LBL_UTILIZATION' => 'Utilization (%):',
	'LBL_DELETED' => 'Deleted:',

	'LBL_LIST_ORDER_NUMBER' => 'Order',
	'LBL_LIST_NAME' => 'Nazwa',
    'LBL_LIST_DAYS' => 'dni',
	'LBL_LIST_PARENT_NAME' => 'Projekt',
	'LBL_LIST_PERCENT_COMPLETE' => '% ukończenia',
	'LBL_LIST_STATUS' => 'Stan',
    'LBL_LIST_DURATION' => 'Czas trwania',
    'LBL_LIST_ACTUAL_DURATION' => 'Actual Duration',
	'LBL_LIST_ASSIGNED_USER_ID' => 'Przypisane do',
	'LBL_LIST_DATE_DUE' => 'Date Due',
	'LBL_LIST_DATE_START' => 'Data rozpoczęcia',
    'LBL_LIST_DATE_FINISH' => 'Finish Date',    
	'LBL_LIST_PRIORITY' => 'Priorytet',
	'LBL_LIST_CLOSE' => 'Zamknij',
	'LBL_PROJECT_NAME' => 'Nazwa projektu',

	'LNK_NEW_PROJECT'	=> 'Utwórz projekt',
	'LNK_PROJECT_LIST'	=> 'Lista projektów',
	'LNK_NEW_PROJECT_TASK'	=> 'Utwórz zadanie projektowe',
	'LNK_PROJECT_TASK_LIST'	=> 'Zadania projektowe',
	
	'LBL_LIST_MY_PROJECT_TASKS' => 'Moje zadania projektowe',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Zadania projektowe',
	'LBL_NEW_FORM_TITLE' => 'Nowe zadanie projektowe',

	'LBL_ACTIVITIES_TITLE'=>'Działania',
	'LBL_HISTORY_TITLE'=>'Historia',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Działania',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Historia', 
	'DATE_JS_ERROR' => 'Please enter a date corresponding to the time entered',

    'LBL_ASSIGNED_USER_NAME' => 'Przypisane do',
    'LBL_PARENT_NAME' => 'Nazwa projektu',
    'LBL_LIST_PROJECT_NAME' => 'Projekty',
	'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
);
?>