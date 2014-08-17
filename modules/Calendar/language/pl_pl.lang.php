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

	'LBL_MODULE_NAME' => 'Kalendarz',
	'LBL_MODULE_TITLE' => 'Kalendarz',
	'LNK_NEW_CALL' => 'Zaplanuj telefon',
	'LNK_NEW_MEETING' => 'Zaplanuj spotkanie',
	'LNK_NEW_APPOINTMENT' => 'Zaplanuj wizytę',
	'LNK_NEW_TASK' => 'Utwórz zadanie',
	'LNK_CALL_LIST' => 'Telefony',
	'LNK_MEETING_LIST' => 'Spotkania',
	'LNK_TASK_LIST' => 'Zadania',
	'LNK_VIEW_CALENDAR' => 'Dziś',
	'LNK_IMPORT_CALLS' => 'Importuj telefony',
	'LNK_IMPORT_MEETINGS' => 'Importuj spotkania',
	'LNK_IMPORT_TASKS' => 'Importuj zadania',
	'LBL_MONTH' => 'Miesiąc',
	'LBL_DAY' => 'Dzień',
	'LBL_YEAR' => 'Rok',
	'LBL_WEEK' => 'Tydzień',
	'LBL_PREVIOUS_MONTH' => 'Poprzedni miesiąc',
	'LBL_PREVIOUS_DAY' => 'Poprzedni dzień',
	'LBL_PREVIOUS_YEAR' => 'Poprzedni rok',
	'LBL_PREVIOUS_WEEK' => 'Poprzedni tydzień',
	'LBL_NEXT_MONTH' => 'Następny miesiąc',
	'LBL_NEXT_DAY' => 'Następny dzień',
	'LBL_NEXT_YEAR' => 'Następny rok',
	'LBL_NEXT_WEEK' => 'Następny tydzień',
	'LBL_AM' => 'AM',
	'LBL_PM' => 'PM',
	'LBL_SCHEDULED' => 'Zaplanowane',
	'LBL_BUSY' => 'Zajęty',
	'LBL_CONFLICT' => 'Konflikt',
	'LBL_USER_CALENDARS' => 'Kalendarze użytkownika',
	'LBL_SHARED' => 'Udostępniony',
	'LBL_PREVIOUS_SHARED' => 'Poprzedni',
	'LBL_NEXT_SHARED' => 'Następny',
	'LBL_SHARED_CAL_TITLE' => 'Współdzielony kalendarz',
	'LBL_USERS' => 'Użytkownicy',
	'LBL_REFRESH' => 'Odśwież',
	'LBL_EDIT_USERLIST' => 'Lista użytkowników',
	'LBL_SELECT_USERS' => 'Select users for calendar display',
	'LBL_FILTER_BY_TEAM' => 'Filter user list by team:',
	'LBL_ASSIGNED_TO_NAME' => 'Przypisane do',
	'LBL_DATE' => 'Data i czas rozpoczęcia',  
	'LBL_CREATE_MEETING' => 'Zaplanuj spotkanie',
	'LBL_CREATE_CALL' => 'Odnotuj telefon',
	'LBL_HOURS_ABBREV' => 'g',
	'LBL_MINS_ABBREV' => 'm',


	'LBL_YES' => 'Tak',
	'LBL_NO' => 'Nie',
	'LBL_SETTINGS' => 'Ustawienia',
	'LBL_CREATE_NEW_RECORD' => 'Utwórz działanie',
	'LBL_LOADING' => 'Wczytywanie ......',
	'LBL_SAVING' => 'Zapisywanie ......',
	'LBL_SENDING_INVITES' => 'Zapisywanie i wysyłanie zaproszeń .....',
	'LBL_CONFIRM_REMOVE' => 'Czy na pewno chcesz usunąć ten rekord?',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Are you sure you want to remove all recurring records?',
	'LBL_EDIT_RECORD' => 'Edytuj działanie',
	'LBL_ERROR_SAVING' => 'Błąd w trakcie zapisywania',
	'LBL_ERROR_LOADING' => 'Błąd w trakcie wczytywania',
	'LBL_GOTO_DATE' => 'Przejdź do daty',
	'NOTICE_DURATION_TIME' => 'Czas trwania musi być większy niż 0',
	'LBL_STYLE_BASIC' => 'Podstawowe',
	'LBL_STYLE_ADVANCED' => 'Zaawansowane',

	'LBL_INFO_TITLE' => 'Dodatkowe informacje',
	'LBL_INFO_DESC' => 'Opis',
	'LBL_INFO_START_DT' => 'Data rozpoczęcia',
	'LBL_INFO_DUE_DT' => 'Data zakończenia',
	'LBL_INFO_DURATION' => 'Czas trwania',
	'LBL_INFO_NAME' => 'Temat',
	'LBL_INFO_RELATED_TO' => 'Powiązane z',

	'LBL_NO_USER' => 'No match for field: Assigned to',
	'LBL_SUBJECT' => 'Temat',
	'LBL_DURATION' => 'Czas trwania',
	'LBL_STATUS' => 'Stan',
	'LBL_DATE_TIME' => 'Data i czas',


	'LBL_SETTINGS_TITLE' => 'Ustawienia',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Display time slots in Day and Week views:',
	'LBL_SETTINGS_TIME_STARTS'=>'Data rozpoczęcia:', 
	'LBL_SETTINGS_TIME_ENDS'=>'Data zakończenia:', 
	'LBL_SETTINGS_CALLS_SHOW' => 'Pokaż telefony:',
	'LBL_SETTINGS_TASKS_SHOW' => 'Pokaż zadania:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Pokaż zakończone spotkania, telefony i zadania:',

	'LBL_SAVE_BUTTON' => 'Zapisz',
	'LBL_DELETE_BUTTON' => 'Usuń',
	'LBL_APPLY_BUTTON' => 'Zastosuj',
	'LBL_SEND_INVITES' => 'Zapisz i wyślij zaproszenia',
	'LBL_CANCEL_BUTTON' => 'Anuluj',
	'LBL_CLOSE_BUTTON' => 'Zamknij',

	'LBL_GENERAL_TAB' => 'Szczegóły',
	'LBL_PARTICIPANTS_TAB' => 'Zaproszeni',
	'LBL_REPEAT_TAB' => 'Recurrence',	
	
	'LBL_REPEAT_TYPE' => 'Powtarzaj',
	'LBL_REPEAT_INTERVAL' => 'Every',
	'LBL_REPEAT_END' => 'End',	
	'LBL_REPEAT_END_AFTER' => 'After',
	'LBL_REPEAT_OCCURRENCES' => 'recurrences',
	'LBL_REPEAT_END_BY' => 'By',	
	'LBL_REPEAT_DOW' => 'On',	
	'LBL_REPEAT_UNTIL' => 'Repeat Until',
	'LBL_REPEAT_COUNT' => 'Number of recurrences',
	'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings.',
	
	'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
	'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',

	'LBL_DATE_END_ERROR' => 'Data zakończenia ustawiona przed datą rozpoczęcia',
	'ERR_YEAR_BETWEEN' => 'Sorry, calendar cannot handle the year you requested<br>Year must be between 1970 and 2037',
	'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: not defined for this view',

);

$mod_list_strings = array(
	'dom_cal_weekdays'=>
		array(
			"Nie",
			"Pon",
			"Wto",
			"Śro",
			"Czw",
			"Pią",
			"Sob",
		),
	'dom_cal_weekdays_long'=>
		array(
			"Niedziela",
			"Poniedziałek",
			"Wtorek",
			"Środa",
			"Czwartek",
			"Piątek",
			"Sobota",
		),
	'dom_cal_month'=>
		array(
			"",
			"Sty",
			"Lut",
			"Mar",
			"Kwi",
			"Maj",
			"Cze",
			"Lip",
			"Sie",
			"Wrz",
			"Paź",
			"Lis",
			"Gru",
		),
	'dom_cal_month_long'=>
		array(
			"",
			"Styczeń",
			"Luty",
			"Marzec",
			"Kwiecień",
			"Maj",
			"Czerwiec",
			"Lipiec",
			"Sierpień",
			"Wrzesień",
			"Październik",
			"Listopad",
			"Grudzień",
		),
);
?>
