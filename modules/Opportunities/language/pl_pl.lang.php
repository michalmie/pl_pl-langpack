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
  'LBL_MODULE_NAME' => 'Szanse sprzedaży',
  'LBL_MODULE_TITLE' => 'Szanse sprzedaży: Strona główna',
  'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie szans sprzedaży',
  'LBL_VIEW_FORM_TITLE' => 'Wyświetl szanse sprzedaży',
  'LBL_LIST_FORM_TITLE' => 'Lista szans sprzedaży',
  'LBL_OPPORTUNITY_NAME' => 'Nazwa szansy sprzedaży:',
  'LBL_OPPORTUNITY' => 'Szansa sprzedaży:',
  'LBL_NAME' => 'Nazwa szansy sprzedaży',
  'LBL_INVITEE' => 'Kontakty',
  'LBL_CURRENCIES' => 'Waluty',
  'LBL_LIST_OPPORTUNITY_NAME' => 'Nazwa',
  'LBL_LIST_ACCOUNT_NAME' => 'Nazwa konta',
  'LBL_LIST_AMOUNT' => 'Wartość szansy sprzedaży',
  'LBL_LIST_AMOUNT_USDOLLAR' => 'Wartość',
  'LBL_LIST_DATE_CLOSED' => 'Zamknij',
  'LBL_LIST_SALES_STAGE' => 'Etap sprzedaży',
  'LBL_ACCOUNT_ID'=>'ID konta',
  'LBL_CURRENCY_ID'=>'ID waluty',
  'LBL_CURRENCY_NAME'=>'Nazwa waluty',
  'LBL_CURRENCY_SYMBOL'=>'Symbol waluty',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Opportunity - Currency Update',
  'UPDATE_DOLLARAMOUNTS' => 'Update U.S. Dollar Amounts',
  'UPDATE_VERIFY' => 'Verify Amounts',
  'UPDATE_VERIFY_TXT' => 'Verifies that the amount values in opportunities are valid decimal numbers with only numeric characters(0-9) and decimals(.)',
  'UPDATE_FIX' => 'Fix Amounts',
  'UPDATE_FIX_TXT' => 'Attempts to fix any invalid amounts by creating a valid decimal from the current amount. Any modified amount is backed up in the amount_backup database field. If you run this and notice bugs, do not rerun it without restoring from the backup as it may overwrite the backup with new invalid data.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Update the U.S. Dollar amounts for opportunities based on the current set currency rates. This value is used to calculate Graphs and List View Currency Amounts.',
  'UPDATE_CREATE_CURRENCY' => 'Creating New Currency:',
  'UPDATE_VERIFY_FAIL' => 'Record Failed Verification:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Aktualna wartość:',
  'UPDATE_VERIFY_FIX' => 'Running Fix would give',
  'UPDATE_INCLUDE_CLOSE' => 'Include Closed Records',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Nowa wartość:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Nowa waluta:',
  'UPDATE_DONE' => 'Gotowe',
  'UPDATE_BUG_COUNT' => 'Bugs Found and Attempted to Resolve:',
  'UPDATE_BUGFOUND_COUNT' => 'Bugs Found:',
  'UPDATE_COUNT' => 'Records Updated:',
  'UPDATE_RESTORE_COUNT' => 'Record Amounts Restored:',
  'UPDATE_RESTORE' => 'Restore Amounts',
  'UPDATE_RESTORE_TXT' => 'Restores amount values from the backups created during fix.',
  'UPDATE_FAIL' => 'Could not update - ',
  'UPDATE_NULL_VALUE' => 'Amount is NULL setting it to 0 -',
  'UPDATE_MERGE' => 'Merge Currencies',
  'UPDATE_MERGE_TXT' => 'Merge multiple currencies into a single currency. If there are multiple currency records for the same currency, you merge them together. This will also merge the currencies for all other modules.',
  'LBL_ACCOUNT_NAME' => 'Nazwa konta:',
  'LBL_AMOUNT' => 'Wartość szansy sprzedaży:',
  'LBL_AMOUNT_USDOLLAR' => 'Wartość:',
  'LBL_CURRENCY' => 'Waluta:',
  'LBL_DATE_CLOSED' => 'Przewidywana data zamknięcia:',
  'LBL_TYPE' => 'Rodzaj:',
  'LBL_CAMPAIGN' => 'Kampania:',
  'LBL_NEXT_STEP' => 'Następny krok:',
  'LBL_LEAD_SOURCE' => 'Źródło potencjalnego klienta:',
  'LBL_SALES_STAGE' => 'Etap sprzedaży:',
  'LBL_PROBABILITY' => 'Prawdopodobieństwo (%):',
  'LBL_DESCRIPTION' => 'Opis:',
  'LBL_DUPLICATE' => 'Possible Duplicate Opportunity',
  'MSG_DUPLICATE' => 'The opportunity record you are about to create might be a duplicate of a opportunity record that already exists. Opportunity records containing similar names are listed below.<br>Click Save to continue creating this new opportunity, or click Cancel to return to the module without creating the opportunity.',
  'LBL_NEW_FORM_TITLE' => 'Utwórz szansę sprzedaży',
  'LNK_NEW_OPPORTUNITY' => 'Utwórz szansę sprzedaży',
  'LNK_OPPORTUNITY_LIST' => 'Wyświetl szanse sprzedaży',
  'ERR_DELETE_RECORD' => 'A record number must be specified to delete the opportunity.',
  'LBL_TOP_OPPORTUNITIES' => 'Moje otwarte szanse sprzedaży',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten kontakt z szansy sprzedaży?',
	'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Czy na pewno chcesz usunąć szansę sprzedaży z projektu?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Szanse sprzedaży',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Działania',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Historia',
    'LBL_RAW_AMOUNT'=>'Raw Amount',
	
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potencjalni klienci',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenty',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',
	'LBL_ASSIGNED_TO_NAME' => 'Przypisane do:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Przypisany użytkownik',
  'LBL_LIST_SALES_STAGE' => 'Etap sprzedaży',
  'LBL_MY_CLOSED_OPPORTUNITIES' => 'Moje zamknięte szanse sprzedaży',
  'LBL_TOTAL_OPPORTUNITIES' => 'Razem szans sprzedaży',
  'LBL_CLOSED_WON_OPPORTUNITIES' => 'Closed Won Opportunities',
  'LBL_ASSIGNED_TO_ID' =>'Przypisany użytkownik:',
  'LBL_CREATED_ID'=>'Created by ID',
  'LBL_MODIFIED_ID'=>'Modified by ID',
  'LBL_MODIFIED_NAME'=>'Modified by User Name',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
  'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampanie',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
  'LABEL_PANEL_ASSIGNMENT' => 'Assignment',
  'LNK_IMPORT_OPPORTUNITIES' => 'Importuj szanse sprzedaży',
  'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
  //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'ID kampanii',
    'LBL_OPPORTUNITY_TYPE' => 'Rodzaj szansy sprzedaży',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Assigned User Name',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Assigned User ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modified By ID',
    'LBL_EXPORT_CREATED_BY' => 'Created By ID',
    'LBL_EXPORT_NAME'=>'Nazwa',

  // SNIP
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Related Contacts\' Emails',
);

?>
