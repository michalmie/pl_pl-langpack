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

/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Waluty',
  'LBL_LIST_FORM_TITLE' => 'Waluty',
  'LBL_CURRENCY' => 'Waluta',
  'LBL_ADD' => 'Dodaj',
  'LBL_MERGE' => 'Merge',
  'LBL_MERGE_TXT' => 'Please select the currencies you would like to map to the selected currency. This will delete all the currencies with a checkmark and reassign any value associated with them to the selected currency.',
  'LBL_US_DOLLAR' => 'U.S. Dollar',
  'LBL_DELETE' => 'Usuń',
  'LBL_LIST_SYMBOL' => 'Symbol waluty',
  'LBL_LIST_NAME' => 'Nazwa waluty',
  'LBL_LIST_ISO4217' => 'Kod ISO 4217',
  'LBL_LIST_ISO4217_HELP' => 'Enter a three-letter ISO 4217 code that defines the currency name and currency symbol.',
  'LBL_UPDATE' => 'Aktualizuj',
  'LBL_LIST_RATE' => 'Kurs wymiany',
  'LBL_LIST_RATE_HELP' => 'A Conversion Rate of 0.5 for Euro means that 10 USD = 5 Euro.',
  'LBL_LIST_STATUS' => 'Stan',
  'LNK_NEW_CONTACT' => 'Nowy kontakt',
  'LNK_NEW_ACCOUNT' => 'Nowe konto',
  'LNK_NEW_OPPORTUNITY' => 'Nowa szansa sprzedaży',
  'LNK_NEW_CASE' => 'Nowe zgłoszenie serwisowe',
  'LNK_NEW_NOTE' => 'Utwórz notatkę lub załącznik',
  'LNK_NEW_CALL' => 'Nowy telefon',
  'LNK_NEW_EMAIL' => 'Nowa wiadomość email',
  'LNK_NEW_MEETING' => 'Nowe spotkanie',
  'LNK_NEW_TASK' => 'Utwórz zadanie',
  'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record? Any record using this currency will be converted to the system default currency when they are accessed. It may be better to set the status to inactive.',
  'LBL_BELOW_MIN' => 'Conversion rate has to be above 0',
  'currency_status_dom' => 
  array (
    'Active' => 'Aktywne',
    'Inactive' => 'Nieaktywne',
  ),
  'LBL_CREATED_BY' => 'Utworzone przez',
	'LBL_EDIT_LAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
);


?>