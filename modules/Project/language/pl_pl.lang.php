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
	'LBL_MODULE_NAME' => 'Projekt',
	'LBL_MODULE_TITLE' => 'Projekty: Strona główna',
	'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie projektów',
    'LBL_LIST_FORM_TITLE' => 'Lista projektów',
    'LBL_HISTORY_TITLE' => 'Historia',

	'LBL_ID' => 'Id:',
	'LBL_DATE_ENTERED' => 'Data utworzenia:',
	'LBL_DATE_MODIFIED' => 'Data modyfikacji:',
	'LBL_ASSIGNED_USER_ID' => 'Przypisane do:',
    'LBL_ASSIGNED_USER_NAME' => 'Przypisane do:',
	'LBL_MODIFIED_USER_ID' => 'Zmodyfikowane przez Id:',
	'LBL_CREATED_BY' => 'Utworzone przez:',
	'LBL_TEAM_ID' => 'Zespół:',
	'LBL_NAME' => 'Nazwa:',
    'LBL_PDF_PROJECT_NAME' => 'Nazwa projektu:',
	'LBL_DESCRIPTION' => 'Opis:',
	'LBL_DELETED' => 'Deleted:',
    'LBL_DATE' => 'Data:',
	'LBL_DATE_START' => 'Data rozpoczęcia:',
	'LBL_DATE_END' => 'Data zakończenia:',
	'LBL_PRIORITY' => 'Priorytet:',
    'LBL_STATUS' => 'Stan:',
    'LBL_MY_PROJECTS' => 'Moje projekty',
    'LBL_MY_PROJECT_TASKS' => 'Moje zadania projektowe',
    
	'LBL_TOTAL_ESTIMATED_EFFORT' => 'Total Estimated Effort (hrs):',
	'LBL_TOTAL_ACTUAL_EFFORT' => 'Total Actual Effort (hrs):',

	'LBL_LIST_NAME' => 'Nazwa',
    'LBL_LIST_DAYS' => 'dni',
	'LBL_LIST_ASSIGNED_USER_ID' => 'Przypisane do',
	'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Total Estimated Effort (hrs)',
	'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Total Actual Effort (hrs)',
    'LBL_LIST_UPCOMING_TASKS' => 'Nadchodzące zadania (1 tydzień)',
    'LBL_LIST_OVERDUE_TASKS' => 'Przeterminowane zadania',
    'LBL_LIST_OPEN_CASES' => 'Otwarte zgłoszenia serwisowe',
    'LBL_LIST_END_DATE' => 'Data zakończenia',
    'LBL_LIST_TEAM_ID' => 'Zespół',
    

	'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
	'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Zadania projektowe',
	'LBL_CONTACT_SUBPANEL_TITLE' => 'Kontakty',
	'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Konta',
	'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Szanse sprzedaży',
	'LBL_QUOTE_SUBPANEL_TITLE' => 'Oferty',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Nowy projekt',

	'CONTACT_REMOVE_PROJECT_CONFIRM' => 'Are you sure you want to remove this contact from this project?',

	'LNK_NEW_PROJECT'	=> 'Utwórz projekt',
	'LNK_PROJECT_LIST'	=> 'Wyświetl listę projektów',
	'LNK_NEW_PROJECT_TASK'	=> 'Utwórz zadanie projektowe',
	'LNK_PROJECT_TASK_LIST'	=> 'Wyświetl zadania projektowe',
	
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projekty',
	'LBL_ACTIVITIES_TITLE'=>'Działania',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Działania',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Historia',
	'LBL_QUICK_NEW_PROJECT'	=> 'Nowy projekt',
	
	'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Zadania projektowe',
	'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
	'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Konta',
	'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Szanse sprzedaży',
    'LBL_CASES_SUBPANEL_TITLE' => 'Zgłoszenia serwisowe',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Błędy',
    'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produkty',
    

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nazwa zadania',
    'LBL_DURATION' => 'Czas trwania',
    'LBL_ACTUAL_DURATION' => 'Actual Duration',
    'LBL_START' => 'Rozpoczęcie',
    'LBL_FINISH' => 'Zakończenie',
    'LBL_PREDECESSORS' => 'Poprzednicy',
    'LBL_PERCENT_COMPLETE' => '% ukończenia',
    'LBL_MORE'  => 'Więcej...',

    'LBL_PERCENT_BUSY' => '% zajętości',
    'LBL_TASK_ID_WIDGET' => 'id',
    'LBL_TASK_NAME_WIDGET' => 'opis',
    'LBL_DURATION_WIDGET' => 'duration',
    'LBL_START_WIDGET' => 'date_start',
    'LBL_FINISH_WIDGET' => 'date_finish',
    'LBL_PREDECESSORS_WIDGET' => 'predecessors_',
    'LBL_PERCENT_COMPLETE_WIDGET' => 'percent_complete',
    'LBL_EDIT_PROJECT_TASKS_TITLE'=> 'Edit Project Tasks',
    
    'LBL_OPPORTUNITIES' => 'Szanse sprzedaży',
	'LBL_LAST_WEEK' => 'Previous',
	'LBL_NEXT_WEEK' => 'Next',
	'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Project Resources',
	'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Project Task',
	'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'Holidays',
	'LBL_PROJECT_INFORMATION' => 'Project Overview',
	'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
	'LBL_INSERTROWS' => 'Wstaw wiersze' /*for 508 compliance fix*/,
	'LBL_PROJECT_INFORMATION' => 'Przegląd',

);
?>