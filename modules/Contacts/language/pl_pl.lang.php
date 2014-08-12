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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_email2' => 'LBL_LIST_OTHER_EMAIL_ADDRESS',
    //END DON'T CONVERT
    'ERR_DELETE_RECORD' => 'Specify the record number to delete the contact.',
    'LBL_ACCOUNT_ID' => 'Account ID:',
    'LBL_ACCOUNT_NAME' => 'Nazwa konta:',
    'LBL_CAMPAIGN'     => 'Kampania:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Działania',
    'LBL_ADD_BUSINESSCARD' => 'Enter Business Card',
    'LBL_ADDMORE_BUSINESSCARD' => 'Add another business card',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ALT_ADDRESS_CITY' => 'Alternate Address City:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternate Address Country:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternate Address Postal Code:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternate Address State:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternate Address Street 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternate Address Street 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternate Address Street:',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ALT_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Przypisane do:',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User',
    'LBL_ASSISTANT_PHONE' => 'Assistant Phone:',
    'LBL_ASSISTANT' => 'Assistant:',
    'LBL_BIRTHDATE' => 'Birthdate:',
    'LBL_BUSINESSCARD' => 'Business Card',
    'LBL_CITY' => 'Miasto:',
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_CONTACT_INFORMATION' => 'Przegląd',
    'LBL_CONTACT_NAME' => 'Nazwa kontaktu:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Contact-Opportunity:',
    'LBL_CONTACT_ROLE' => 'Role:',
    'LBL_CONTACT' => 'Kontakt:',
    'LBL_COUNTRY' => 'Kraj:',
    'LBL_CREATED_ACCOUNT' => 'Utworzono nowe konto',
    'LBL_CREATED_CALL' => 'Utworzono nowy telefon',
    'LBL_CREATED_CONTACT' => 'Utworzono nowy kontakt',
    'LBL_CREATED_MEETING' => 'Utworzono nowe spotkanie',
    'LBL_CREATED_OPPORTUNITY' =>'Utworzono nową szansę sprzedaży',
    'LBL_DATE_MODIFIED' => 'Data modyfikacji:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_DEPARTMENT' => 'Dział:',
    'LBL_DESCRIPTION_INFORMATION' => 'Description Information',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE'=>'Direct Reports',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_DUPLICATE' => 'Possible Duplicate Contacts',
    'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'Used an existing account',
    'LBL_EXISTING_CONTACT' => 'Used an existing contact',
    'LBL_EXISTING_OPPORTUNITY'=> 'Used an existing opportunity',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Imię:',
    'LBL_FULL_NAME' => 'Nazwisko:',
    'LBL_HISTORY_SUBPANEL_TITLE'=>'Historia',
    'LBL_HOME_PHONE' => 'Home:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatically create a new contact by importing a vCard from your file system.',
    'LBL_INVALID_EMAIL'=>'Nieprawidłowy email:',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'Nazwisko:',
    'LBL_LEAD_SOURCE' => 'Źródło potencjalnego klienta:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Nazwa konta',
    'LBL_LIST_CONTACT_NAME' => 'Nazwa kontaktu',
    'LBL_LIST_CONTACT_ROLE' => 'Role',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Imię',
    'LBL_LIST_FORM_TITLE' => 'Contact List',
    'LBL_VIEW_FORM_TITLE' => 'Contact View',
    'LBL_LIST_LAST_NAME' => 'Nazwisko',
    'LBL_LIST_NAME' => 'Nazwa',
    'LBL_LIST_OTHER_EMAIL_ADDRESS' => 'Inny email',
    'LBL_LIST_PHONE' => 'Office Phone',
    'LBL_LIST_TITLE' => 'Title',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_MODIFIED' => 'Modified By:',
    'LBL_MODULE_NAME' => 'Kontakty',
    'LBL_MODULE_TITLE' => 'Kontakty: Strona główna',
    'LBL_NAME' => 'Nazwa:',
    'LBL_NEW_FORM_TITLE' => 'Nowy kontakt',
    'LBL_NEW_PORTAL_PASSWORD' => 'New Portal Password:',
    'LBL_NOTE_SUBJECT' =>'Note Subject',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_OPP_NAME' => 'Opportunity Name:',
    'LBL_OPPORTUNITY_ROLE_ID'=>'Opportunity Role ID:',
    'LBL_OPPORTUNITY_ROLE'=>'Opportunity Role',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_ACTIVE' => 'Portal Active:',
    'LBL_PORTAL_APP'=>'Portal Application:',
    'LBL_PORTAL_INFORMATION' => 'Portal Information',
    'LBL_PORTAL_NAME' => 'Portal Name:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'Portal Password is Set:',
    'LBL_STREET' => 'Street',
    'LBL_POSTAL_CODE' => 'Kod pocztowy:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primary Address City:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primary Address Country:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primary Address Postal Code:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primary Address State:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primary Address Street 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primary Address Street 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primary Address Street:',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_PRODUCTS_TITLE'=>'Products',
    'LBL_RELATED_CONTACTS_TITLE'=>'Related Contacts',
    'LBL_REPORTS_TO_ID'=>'Reports to ID:',
    'LBL_REPORTS_TO' => 'Reports To:',
    'LBL_RESOURCE_NAME' => 'Resource Name',
    'LBL_SALUTATION' => 'Salutation:',
    'LBL_SAVE_CONTACT' => 'Zapisz kontakt',
    'LBL_SEARCH_FORM_TITLE' => 'Contact Search',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Select Checked Contacts',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Contacts',
    'LBL_STATE' => 'State:',
    'LBL_SYNC_CONTACT' => 'Sync to Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_TITLE' => 'Title:',
    'LNK_CONTACT_LIST' => 'Wyświetl kontakty',
    'LNK_IMPORT_VCARD' => 'Create Contact From vCard',
    'LNK_NEW_ACCOUNT' => 'Create Account',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_CASE' => 'Utwórz zgłoszenie serwisowe',
    'LNK_NEW_CONTACT' => 'Utwórz kontakt',
    'LNK_NEW_EMAIL' => 'Archive Email',
    'LNK_NEW_MEETING' => 'Zaplanuj spotkanie',
    'LNK_NEW_NOTE' => 'Utwórz notatkę',
    'LNK_NEW_OPPORTUNITY' => 'Utwórz szansę sprzedaży',
    'LNK_NEW_TASK' => 'Utwórz zadanie',
    'LNK_SELECT_ACCOUNT' => "Wybierz konto",
	'MSG_DUPLICATE' => 'The contact record you are about to create might be a duplicate of a contact record that already exists. Contact records containing similar names are listed below.<br>Click Create Contact to continue creating this new contact, or select an existing contact listed below.',
	'MSG_SHOW_DUPLICATES' => 'The contact record you are about to create might be a duplicate of a contact record that already exists. Contact records containing similar names are listed below.<br>Click Save to continue creating this new contact, or click Cancel to return to the module without creating the contact.',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Copy alternate address to primary address',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Copy primary address to alternate address',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Creating an opportunity requires an account.\n Please either create a new account or select an existing one.',
    'NTC_REMOVE_CONFIRMATION' => 'Are you sure you want to remove this contact from the case?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Are you sure you want to remove this record as a direct report?',

	'LBL_USER_PASSWORD' => 'Hasło:',

	'LBL_LEADS_SUBPANEL_TITLE' => 'Potencjalni klienci',
	'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Szanse sprzedaży',
	'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenty',
	'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Kopiuj do adresu podstawowego',
	'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Kopiuj do innego adresu',

	'LBL_CASES_SUBPANEL_TITLE' => 'Zgłoszenia serwisowe',
	'LBL_BUGS_SUBPANEL_TITLE' => 'Błędy',
	'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',
    'LBL_PROJECTS_RESOURCES' => 'Projects Resources',
	'LBL_TARGET_OF_CAMPAIGNS' => 'Campaigns (Target of) :',
	'LBL_CAMPAIGNS'	=>	'Kampanie',
	'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE'=>'Kampanie',
	'LBL_LIST_CITY' => 'Miasto',
	'LBL_LIST_STATE' => 'State',
	'LBL_HOMEPAGE_TITLE' => 'Moje kontakty',
    'LBL_OPPORTUNITIES' => 'Szanse sprzedaży',

	'LBL_CHECKOUT_DATE'=>'Checkout Date',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Kampanie',
    'LNK_IMPORT_CONTACTS' => 'Importuj kontakty',

    //For export labels
    'LBL_PHONE_HOME' => 'Phone Home',
    'LBL_PHONE_MOBILE' => 'Phone Mobile',
    'LBL_PHONE_WORK' => 'Phone Work',
    'LBL_PHONE_OTHER' => 'Phone Other',
    'LBL_PHONE_FAX' => 'Phone Fax',
    'LBL_CAMPAIGN_ID' => 'Campaign ID',

    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Assigned User Name',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Assigned User ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modified By ID',
    'LBL_EXPORT_CREATED_BY' => 'Created By ID',
    'LBL_EXPORT_PHONE_HOME' => 'Home Phone',
    'LBL_EXPORT_PHONE_MOBILE' => 'Mobile Phone',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Related Contacts\' Emails',
    'LBL_USER_SYNC' => 'User Sync'
)
?>
