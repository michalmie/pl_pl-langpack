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
	'ERR_DELETE_RECORD' => 'You must specify a record number to delete the account.',
	'LBL_ACCOUNT_ID' => 'ID konta:',
	'LBL_CASE_ID' => 'Case ID:',
	'LBL_CLOSE' => 'Close:',
	'LBL_COLON' => ':',
	'LBL_CONTACT_ID' => 'ID kontaktu:',
	'LBL_CONTACT_NAME' => 'Kontakt:',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Notatki',
	'LBL_DESCRIPTION' => 'Notatka',
	'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_EMAIL_ATTACHMENT' => 'Email Attachment',
	'LBL_FILE_MIME_TYPE' => 'Mime Type',
	'LBL_FILE_URL' => 'File URL',
	'LBL_FILENAME' => 'Załącznik:',
	'LBL_LEAD_ID' => 'ID potencjalnego klienta:',
	'LBL_LIST_CONTACT_NAME' => 'Kontakt',
	'LBL_LIST_DATE_MODIFIED' => 'Ostatnia modyfikacja',
	'LBL_LIST_FILENAME' => 'Załącznik',
	'LBL_LIST_FORM_TITLE' => 'Note List',
	'LBL_LIST_RELATED_TO' => 'Powiązane z',
	'LBL_LIST_SUBJECT' => 'Temat',
	'LBL_LIST_STATUS' => 'Stan',
	'LBL_LIST_CONTACT' => 'Kontakt',
	'LBL_MODULE_NAME' => 'Notatki',
	'LBL_MODULE_TITLE' => 'Notatki: Strona główna',
	'LBL_NEW_FORM_TITLE' => 'Utwórz notatkę lub załącznik',
	'LBL_NOTE_STATUS' => 'Notatka',
	'LBL_NOTE_SUBJECT' => 'Temat:',
	'LBL_NOTES_SUBPANEL_TITLE' => 'Załączniki',
	'LBL_NOTE' => 'Notatka:',
	'LBL_OPPORTUNITY_ID' => 'ID szansy sprzedaży:',
	'LBL_PARENT_ID' => 'Parent ID:',
	'LBL_PARENT_TYPE' => 'Parent Type',
	'LBL_PHONE' => 'Telefon:',
	'LBL_PORTAL_FLAG' => 'Wyświetl w portalu?',
	'LBL_EMBED_FLAG' => 'Embed in email?',
	'LBL_PRODUCT_ID' => 'ID produktu:',
	'LBL_QUOTE_ID' => 'ID oferty:',
	'LBL_RELATED_TO' => 'Powiązane z:',
	'LBL_SEARCH_FORM_TITLE' => 'Note Search',
	'LBL_STATUS' => 'Stan',
	'LBL_SUBJECT' => 'Temat:',
	'LNK_IMPORT_NOTES' => 'Importuj notatki',
	'LNK_NEW_NOTE' => 'Utwórz notatkę lub załącznik',
	'LNK_NOTE_LIST' => 'Wyświetl notatki',
	'LNK_IMPORT_NOTES' => 'Importuj notatki',
	'LBL_MEMBER_OF' => 'Konto nadrzędne:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Przypisany użytkownik',
    'LBL_REMOVING_ATTACHMENT'=>'Usuwanie załącznika...',
    'ERR_REMOVING_ATTACHMENT'=>'Failed to remove attachment...',
    'LBL_CREATED_BY'=>'Utworzone przez',
    'LBL_MODIFIED_BY'=>'Zmodyfikowane przez',
    'LBL_SEND_ANYWAYS'=> 'This email has no subject.  Send/save anyway?',
	'LBL_LIST_EDIT_BUTTON' => 'Edytuj',
	'LBL_ACTIVITIES_REPORTS' => 'Raport działań',
	'LBL_PANEL_DETAILS' => 'Szczegóły',
	'LBL_NOTE_INFORMATION' => 'Przegląd',
	'LBL_MY_NOTES_DASHLETNAME' => 'Moje notatki',
	'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    //For export labels
	'LBL_FIRST_NAME' => 'Imię',
    'LBL_LAST_NAME' => 'Nazwisko',
    'LBL_EXPORT_PARENT_TYPE' => 'Related To Module',
    'LBL_EXPORT_PARENT_ID' => 'Powiązane z ID',
    'LBL_DATE_ENTERED' => 'Data utworzenia',
    'LBL_DATE_MODIFIED' => 'Data modyfikacji',
    'LBL_DELETED' => 'Deleted',
);

?>