<?php

declare(strict_types=1);

if (@constant('IPS_BASE') == null) //Nur wenn Konstanten noch nicht bekannt sind.
{
    // --- BASE MESSAGE
    define('IPS_BASE', 10000);                             //Base Message
    define('IPS_KERNELSHUTDOWN', IPS_BASE + 1);            //Pre Shutdown Message, Runlevel UNINIT Follows
    define('IPS_KERNELSTARTED', IPS_BASE + 2);             //Post Ready Message
    // --- KERNEL
    define('IPS_KERNELMESSAGE', IPS_BASE + 100);           //Kernel Message
    define('KR_CREATE', IPS_KERNELMESSAGE + 1);            //Kernel is beeing created
    define('KR_INIT', IPS_KERNELMESSAGE + 2);              //Kernel Components are beeing initialised, Modules loaded, Settings read
    define('KR_READY', IPS_KERNELMESSAGE + 3);             //Kernel is ready and running
    define('KR_UNINIT', IPS_KERNELMESSAGE + 4);            //Got Shutdown Message, unloading all stuff
    define('KR_SHUTDOWN', IPS_KERNELMESSAGE + 5);          //Uninit Complete, Destroying Kernel Inteface
    // --- KERNEL LOGMESSAGE
    define('IPS_LOGMESSAGE', IPS_BASE + 200);              //Logmessage Message
    define('KL_MESSAGE', IPS_LOGMESSAGE + 1);              //Normal Message                      | FG: Black | BG: White  | STLYE : NONE
    define('KL_SUCCESS', IPS_LOGMESSAGE + 2);              //Success Message                     | FG: Black | BG: Green  | STYLE : NONE
    define('KL_NOTIFY', IPS_LOGMESSAGE + 3);               //Notiy about Changes                 | FG: Black | BG: Blue   | STLYE : NONE
    define('KL_WARNING', IPS_LOGMESSAGE + 4);              //Warnings                            | FG: Black | BG: Yellow | STLYE : NONE
    define('KL_ERROR', IPS_LOGMESSAGE + 5);                //Error Message                       | FG: Black | BG: Red    | STLYE : BOLD
    define('KL_DEBUG', IPS_LOGMESSAGE + 6);                //Debug Informations + Script Results | FG: Grey  | BG: White  | STLYE : NONE
    define('KL_CUSTOM', IPS_LOGMESSAGE + 7);               //User Message                        | FG: Black | BG: White  | STLYE : NONE
    // --- MODULE LOADER
    define('IPS_MODULEMESSAGE', IPS_BASE + 300);           //ModuleLoader Message
    define('ML_LOAD', IPS_MODULEMESSAGE + 1);              //Module loaded
    define('ML_UNLOAD', IPS_MODULEMESSAGE + 2);            //Module unloaded
    // --- OBJECT MANAGER
    define('IPS_OBJECTMESSAGE', IPS_BASE + 400);
    define('OM_REGISTER', IPS_OBJECTMESSAGE + 1);          //Object was registered
    define('OM_UNREGISTER', IPS_OBJECTMESSAGE + 2);        //Object was unregistered
    define('OM_CHANGEPARENT', IPS_OBJECTMESSAGE + 3);      //Parent was Changed
    define('OM_CHANGENAME', IPS_OBJECTMESSAGE + 4);        //Name was Changed
    define('OM_CHANGEINFO', IPS_OBJECTMESSAGE + 5);        //Info was Changed
    define('OM_CHANGETYPE', IPS_OBJECTMESSAGE + 6);        //Type was Changed
    define('OM_CHANGESUMMARY', IPS_OBJECTMESSAGE + 7);     //Summary was Changed
    define('OM_CHANGEPOSITION', IPS_OBJECTMESSAGE + 8);    //Position was Changed
    define('OM_CHANGEREADONLY', IPS_OBJECTMESSAGE + 9);    //ReadOnly was Changed
    define('OM_CHANGEHIDDEN', IPS_OBJECTMESSAGE + 10);     //Hidden was Changed
    define('OM_CHANGEICON', IPS_OBJECTMESSAGE + 11);       //Icon was Changed
    define('OM_CHILDADDED', IPS_OBJECTMESSAGE + 12);       //Child for Object was added
    define('OM_CHILDREMOVED', IPS_OBJECTMESSAGE + 13);     //Child for Object was removed
    define('OM_CHANGEIDENT', IPS_OBJECTMESSAGE + 14);      //Ident was Changed
    define('OM_CHANGEDISABLED', IPS_OBJECTMESSAGE + 15);   //Operability has changed
    // --- INSTANCE MANAGER
    define('IPS_INSTANCEMESSAGE', IPS_BASE + 500);         //Instance Manager Message
    define('IM_CREATE', IPS_INSTANCEMESSAGE + 1);          //Instance created
    define('IM_DELETE', IPS_INSTANCEMESSAGE + 2);          //Instance deleted
    define('IM_CONNECT', IPS_INSTANCEMESSAGE + 3);         //Instance connectged
    define('IM_DISCONNECT', IPS_INSTANCEMESSAGE + 4);      //Instance disconncted
    define('IM_CHANGESTATUS', IPS_INSTANCEMESSAGE + 5);    //Status was Changed
    define('IM_CHANGESETTINGS', IPS_INSTANCEMESSAGE + 6);  //Settings were Changed
    define('IM_CHANGESEARCH', IPS_INSTANCEMESSAGE + 7);    //Searching was started/stopped
    define('IM_SEARCHUPDATE', IPS_INSTANCEMESSAGE + 8);    //Searching found new results
    define('IM_SEARCHPROGRESS', IPS_INSTANCEMESSAGE + 9);  //Searching progress in %
    define('IM_SEARCHCOMPLETE', IPS_INSTANCEMESSAGE + 10); //Searching is complete
    // --- VARIABLE MANAGER
    define('IPS_VARIABLEMESSAGE', IPS_BASE + 600);              //Variable Manager Message
    define('VM_CREATE', IPS_VARIABLEMESSAGE + 1);               //Variable Created
    define('VM_DELETE', IPS_VARIABLEMESSAGE + 2);               //Variable Deleted
    define('VM_UPDATE', IPS_VARIABLEMESSAGE + 3);               //On Variable Update
    define('VM_CHANGEPROFILENAME', IPS_VARIABLEMESSAGE + 4);    //On Profile Name Change
    define('VM_CHANGEPROFILEACTION', IPS_VARIABLEMESSAGE + 5);  //On Profile Action Change
    // --- SCRIPT MANAGER
    define('IPS_SCRIPTMESSAGE', IPS_BASE + 700);           //Script Manager Message
    define('SM_CREATE', IPS_SCRIPTMESSAGE + 1);            //On Script Create
    define('SM_DELETE', IPS_SCRIPTMESSAGE + 2);            //On Script Delete
    define('SM_CHANGEFILE', IPS_SCRIPTMESSAGE + 3);        //On Script File changed
    define('SM_BROKEN', IPS_SCRIPTMESSAGE + 4);            //Script Broken Status changed
    // --- EVENT MANAGER
    define('IPS_EVENTMESSAGE', IPS_BASE + 800);             //Event Scripter Message
    define('EM_CREATE', IPS_EVENTMESSAGE + 1);             //On Event Create
    define('EM_DELETE', IPS_EVENTMESSAGE + 2);             //On Event Delete
    define('EM_UPDATE', IPS_EVENTMESSAGE + 3);
    define('EM_CHANGEACTIVE', IPS_EVENTMESSAGE + 4);
    define('EM_CHANGELIMIT', IPS_EVENTMESSAGE + 5);
    define('EM_CHANGESCRIPT', IPS_EVENTMESSAGE + 6);
    define('EM_CHANGETRIGGER', IPS_EVENTMESSAGE + 7);
    define('EM_CHANGETRIGGERVALUE', IPS_EVENTMESSAGE + 8);
    define('EM_CHANGETRIGGEREXECUTION', IPS_EVENTMESSAGE + 9);
    define('EM_CHANGECYCLIC', IPS_EVENTMESSAGE + 10);
    define('EM_CHANGECYCLICDATEFROM', IPS_EVENTMESSAGE + 11);
    define('EM_CHANGECYCLICDATETO', IPS_EVENTMESSAGE + 12);
    define('EM_CHANGECYCLICTIMEFROM', IPS_EVENTMESSAGE + 13);
    define('EM_CHANGECYCLICTIMETO', IPS_EVENTMESSAGE + 14);
    // --- MEDIA MANAGER
    define('IPS_MEDIAMESSAGE', IPS_BASE + 900);           //Media Manager Message
    define('MM_CREATE', IPS_MEDIAMESSAGE + 1);             //On Media Create
    define('MM_DELETE', IPS_MEDIAMESSAGE + 2);             //On Media Delete
    define('MM_CHANGEFILE', IPS_MEDIAMESSAGE + 3);         //On Media File changed
    define('MM_AVAILABLE', IPS_MEDIAMESSAGE + 4);          //Media Available Status changed
    define('MM_UPDATE', IPS_MEDIAMESSAGE + 5);
    // --- LINK MANAGER
    define('IPS_LINKMESSAGE', IPS_BASE + 1000);           //Link Manager Message
    define('LM_CREATE', IPS_LINKMESSAGE + 1);             //On Link Create
    define('LM_DELETE', IPS_LINKMESSAGE + 2);             //On Link Delete
    define('LM_CHANGETARGET', IPS_LINKMESSAGE + 3);       //On Link TargetID change
    // --- DATA HANDLER
    define('IPS_DATAMESSAGE', IPS_BASE + 1100);             //Data Handler Message
    define('FM_CONNECT', IPS_DATAMESSAGE + 1);             //On Instance Connect
    define('FM_DISCONNECT', IPS_DATAMESSAGE + 2);          //On Instance Disconnect
    // --- SCRIPT ENGINE
    define('IPS_ENGINEMESSAGE', IPS_BASE + 1200);           //Script Engine Message
    define('SE_UPDATE', IPS_ENGINEMESSAGE + 1);             //On Library Refresh
    define('SE_EXECUTE', IPS_ENGINEMESSAGE + 2);            //On Script Finished execution
    define('SE_RUNNING', IPS_ENGINEMESSAGE + 3);            //On Script Started execution
    // --- PROFILE POOL
    define('IPS_PROFILEMESSAGE', IPS_BASE + 1300);
    define('PM_CREATE', IPS_PROFILEMESSAGE + 1);
    define('PM_DELETE', IPS_PROFILEMESSAGE + 2);
    define('PM_CHANGETEXT', IPS_PROFILEMESSAGE + 3);
    define('PM_CHANGEVALUES', IPS_PROFILEMESSAGE + 4);
    define('PM_CHANGEDIGITS', IPS_PROFILEMESSAGE + 5);
    define('PM_CHANGEICON', IPS_PROFILEMESSAGE + 6);
    define('PM_ASSOCIATIONADDED', IPS_PROFILEMESSAGE + 7);
    define('PM_ASSOCIATIONREMOVED', IPS_PROFILEMESSAGE + 8);
    define('PM_ASSOCIATIONCHANGED', IPS_PROFILEMESSAGE + 9);
    // --- TIMER POOL
    define('IPS_TIMERMESSAGE', IPS_BASE + 1400);            //Timer Pool Message
    define('TM_REGISTER', IPS_TIMERMESSAGE + 1);
    define('TM_UNREGISTER', IPS_TIMERMESSAGE + 2);
    define('TM_SETINTERVAL', IPS_TIMERMESSAGE + 3);
    define('TM_UPDATE', IPS_TIMERMESSAGE + 4);
    define('TM_RUNNING', IPS_TIMERMESSAGE + 5);
    // --- STATUS CODES
    define('IS_SBASE', 100);
    define('IS_CREATING', IS_SBASE + 1); //module is being created
    define('IS_ACTIVE', IS_SBASE + 2); //module created and running
    define('IS_DELETING', IS_SBASE + 3); //module us being deleted
    define('IS_INACTIVE', IS_SBASE + 4); //module is not beeing used
    // --- ERROR CODES
    define('IS_EBASE', 200);          //default errorcode
    define('IS_NOTCREATED', IS_EBASE + 1); //instance could not be created
    // --- Search Handling
    define('FOUND_UNKNOWN', 0);     //Undefined value
    define('FOUND_NEW', 1);         //Device is new and not configured yet
    define('FOUND_OLD', 2);         //Device is already configues (InstanceID should be set)
    define('FOUND_CURRENT', 3);     //Device is already configues (InstanceID is from the current/searching Instance)
    define('FOUND_UNSUPPORTED', 4); //Device is not supported by Module
    define('vtBoolean', 0);
    define('vtInteger', 1);
    define('vtFloat', 2);
    define('vtString', 3);
    define('vtArray', 8);
    define('vtObject', 9);
}

// Modul für INSTAR

class INSTAR extends IPSModule
{
    // helper properties
    private $position = 0;

    private const IN_5905_HD      = 1; // IN-5905 HD
    private const IN_5907_HD      = 2; // IN-5907 HD
    private const IN_7011_HD      = 3; // IN-7011 HD
    private const IN_9008_Full_HD = 4; // IN-9008 Full HD
    private const IN_9010_Full_HD = 5; // IN-9010 Full HD
    private const IN_9020_Full_HD = 6; // IN-9020 Full HD
    private const IN_3011         = 7; // IN-3011
    private const IN_6001_HD      = 8; // IN-6001 HD
    private const IN_6012_HD      = 9; // IN-6012 HD
    private const IN_6014_HD      = 10; // IN-6014 HD
    private const IN_8003_Full_HD = 11; // IN-8003 Full HD
    private const IN_8015_Full_HD = 12; // IN-8015 Full HD

    private const RESOLUTION_1080p = 11; // 1080p Full HD
    private const RESOLUTION_320p  = 12; // 320p VGA
    private const RESOLUTION_160p  = 13; // 160p QVGA

    private const Hardware_WDR_Modus = 1; //  Hardware Wide Dynamic Range
    private const Software_WDR_Modus = 0; //  Software Wide Dynamic Range

    private const GET_IMAGE_1080p          = '/tmpfs/snap.jpg'; // Get Image (1080p)
    private const GET_IMAGE_320p          = '/tmpfs/auto.jpg'; // Get Image (320p)
    private const GET_IMAGE_160p          = '/tmpfs/auto2.jpg'; // Get Image (160p)

    private const RESOLUTION_SNAPSHOT_1080p          = 0; // Get Image (1080p)
    private const RESOLUTION_SNAPSHOT_320p          = 1; // Get Image (320p)
    private const RESOLUTION_SNAPSHOT_160p          = 2; // Get Image (160p)


    private $BooleanAttributes = [
        'boolean_attribute',
        'volume',
        'volin_type',
        'aec',
        'denoise',
        'ov_enable',
        'ov_authflag',
        'd3th_enable',
        'our_enable',
        'wf_enable',
        'show_1',
        'show_2',
        'show_3',
        'show_4'];

    private $StringAttributes  = ['string_attribute', 'wf_key', 'aemodeex'];

    private $NoAttributes      = [
        'no_attribute',
        'LastMovement',
        'Control_Continuous',
        'Control_Step',
        'Control_Scan',
        'INSTARButtonSnapshot',
        'IR_LED',
        'SetPosition',
        'UnsetPosition',
        'GotoPosition',
        'notification_alarm'];

    public function Create()
    {
        //Never delete this line!
        parent::Create();

        //These lines are parsed on Symcon Startup or Instance creation
        //You cannot use variables here. Just static values.

        $this->RegisterPropertyString('webhook_username', 'instar');
        $this->RegisterPropertyString('webhook_password', 'symcon');
        $this->RegisterAttributeString('webhook_username', 'instar');
        $this->RegisterAttributeString('webhook_password', 'symcon');
        $this->RegisterPropertyString('Host', '');
        $this->RegisterPropertyInteger('Port', 80);
        $this->RegisterPropertyString('User', 'admin');
        $this->RegisterPropertyString('Password', 'instar');
        $this->RegisterPropertyInteger('snapshot_resolution', 0);
        $this->RegisterPropertyInteger('MJPEG_Stream', 11);
        $this->RegisterPropertyInteger('relaxationmotionsensor', 10);
        $this->RegisterPropertyBoolean('activeemail', false);
        $this->RegisterPropertyString('email', '');
        $this->RegisterPropertyInteger('smtpmodule', 0);
        $this->RegisterPropertyString('subject', $this->Translate('Camera Alarm!'));
        $this->RegisterPropertyString('emailtext', $this->Translate('Movement detected'));
        $this->RegisterPropertyBoolean('activeemail2', false);
        $this->RegisterPropertyString('email2', '');
        $this->RegisterPropertyInteger('smtpmodule2', 0);
        $this->RegisterPropertyString('subject2', $this->Translate('Camera Alarm!'));
        $this->RegisterPropertyString('emailtext2', $this->Translate('Movement detected'));
        $this->RegisterPropertyBoolean('activeemail3', false);
        $this->RegisterPropertyString('email3', '');
        $this->RegisterPropertyInteger('smtpmodule3', 0);
        $this->RegisterPropertyString('subject3', $this->Translate('Camera Alarm!'));
        $this->RegisterPropertyString('emailtext3', $this->Translate('Movement detected'));
        $this->RegisterPropertyBoolean('activeemail4', false);
        $this->RegisterPropertyString('email4', '');
        $this->RegisterPropertyInteger('smtpmodule4', 0);
        $this->RegisterPropertyString('subject4', $this->Translate('Camera Alarm!'));
        $this->RegisterPropertyString('emailtext4', $this->Translate('Movement detected'));
        $this->RegisterPropertyBoolean('activeemail5', false);
        $this->RegisterPropertyString('email5', '');
        $this->RegisterPropertyInteger('smtpmodule5', 0);
        $this->RegisterPropertyString('subject5', $this->Translate('Camera Alarm!'));
        $this->RegisterPropertyString('emailtext5', $this->Translate('Movement detected'));
        $this->RegisterPropertyBoolean('activeemail6', false);
        $this->RegisterPropertyString('email6', '');
        $this->RegisterPropertyInteger('smtpmodule6', 0);
        $this->RegisterPropertyString('subject6', $this->Translate('Camera Alarm!'));
        $this->RegisterPropertyString('emailtext6', $this->Translate('Movement detected'));
        $this->RegisterPropertyBoolean('activeemail7', false);
        $this->RegisterPropertyString('email7', '');
        $this->RegisterPropertyInteger('smtpmodule7', 0);
        $this->RegisterPropertyString('subject7', $this->Translate('Camera Alarm!'));
        $this->RegisterPropertyString('emailtext7', $this->Translate('Movement detected'));
        $this->RegisterPropertyBoolean('activeemail8', false);
        $this->RegisterPropertyString('email8', '');
        $this->RegisterPropertyInteger('smtpmodule8', 0);
        $this->RegisterPropertyString('subject8', $this->Translate('Camera Alarm!'));
        $this->RegisterPropertyString('emailtext8', $this->Translate('Movement detected'));
        $this->RegisterPropertyBoolean('activeemail9', false);
        $this->RegisterPropertyString('email9', '');
        $this->RegisterPropertyInteger('smtpmodule9', 0);
        $this->RegisterPropertyString('subject9', $this->Translate('Camera Alarm!'));
        $this->RegisterPropertyString('emailtext9', $this->Translate('Movement detected'));
        $this->RegisterPropertyBoolean('activeemail10', false);
        $this->RegisterPropertyString('email10', '');
        $this->RegisterPropertyInteger('smtpmodule10', 0);
        $this->RegisterPropertyString('subject10', $this->Translate('Camera Alarm!'));
        $this->RegisterPropertyString('emailtext10', $this->Translate('Movement detected'));
        $this->RegisterPropertyBoolean('activeemail11', false);
        $this->RegisterPropertyString('email11', '');
        $this->RegisterPropertyInteger('smtpmodule11', 0);
        $this->RegisterPropertyString('subject11', $this->Translate('Camera Alarm!'));
        $this->RegisterPropertyString('emailtext11', $this->Translate('Movement detected'));
        $this->RegisterPropertyBoolean('altview', false);
        $this->RegisterPropertyInteger('categorysnapshot', 0);
        $this->RegisterPropertyInteger('picturelimitsnapshot', 20);
        $this->RegisterPropertyInteger('model_type', 0);
        $this->RegisterAttributeBoolean('INSTARButtonSnapshot_enabled', true); // show Attribute in Webfront


        $this->RegisterAttributeString('model', ''); // Camera Model Identifier
        $this->RegisterAttributeBoolean('model_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('hardVersion', ''); // Hardware Version
        $this->RegisterAttributeBoolean('hardVersion_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('softVersion', ''); // Firmware Version
        $this->RegisterAttributeBoolean('softVersion_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('webVersion', ''); // WebUI Version
        $this->RegisterAttributeBoolean('webVersion_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('name', '');
        $this->RegisterAttributeBoolean('name_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('sdfreespace', 0); // SD free space，KB
        $this->RegisterAttributeBoolean('sdfreespace_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('sdtotalspace', 0); // SD total space，KB
        $this->RegisterAttributeBoolean('sdtotalspace_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('platformstatus', 0); // Platform Status 0, 1
        $this->RegisterAttributeBoolean('platformstatus_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeString('dhcpflag', 'off'); // on: (DHCP enabled), off: (DHCP disabled)
        $this->RegisterAttributeBoolean('dhcpflag_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ip', ''); // LAN IPv4 Address
        $this->RegisterAttributeBoolean('ip_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('netmask', ''); // LAN Subnet Mask
        $this->RegisterAttributeBoolean('netmask_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('gateway', ''); // LAN Gateway
        $this->RegisterAttributeBoolean('gateway_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('dnsstat', 0); // DNS Status: 0 (manually), 1 (from DHCP Server)
        $this->RegisterAttributeBoolean('dnsstat_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('fdnsip', ''); // Primary DNS
        $this->RegisterAttributeBoolean('fdnsip_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('sdnsip', ''); // Secondary DNS
        $this->RegisterAttributeBoolean('sdnsip_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('macaddress', ''); // LAN MAC Address
        $this->RegisterAttributeBoolean('macaddress_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('networktype', ''); // LAN or WLAN
        $this->RegisterAttributeBoolean('networktype_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('upnpstatus', 'ok'); // UPnP service ok, off, failed
        $this->RegisterAttributeBoolean('upnpstatus_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('th3ddnsstatus', 'ok'); // INSTAR 3rd Party DDNS Status ok, off, failed
        $this->RegisterAttributeBoolean('th3ddnsstatus_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('startdate', ''); // Camera Uptime
        $this->RegisterAttributeBoolean('startdate_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('facddnsstatus', 'ok'); // INSTAR DDNS Status ok, off, failed
        $this->RegisterAttributeBoolean('facddnsstatus_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('sdstatus', ''); // SD Card Status out, Ready, Read only
        $this->RegisterAttributeBoolean('sdstatus_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('httpport', 0);
        $this->RegisterAttributeBoolean('httpport_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('httpsport', 0);
        $this->RegisterAttributeBoolean('httpsport_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('rtspport', 0);
        $this->RegisterAttributeBoolean('rtspport_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('rtsp_aenable', 0); // 1: RTSP Stream needs Authentication, 0: Authentication deactivated
        $this->RegisterAttributeBoolean('rtsp_aenable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('rtmpport', 0);
        $this->RegisterAttributeBoolean('rtmpport_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('wf_enable', 0); // 1 (WiFi enabled), 0 (WiFi disabled)
        $this->RegisterAttributeBoolean('wf_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('wf_ssid', ''); // SSID (max. 32 Characters)
        $this->RegisterAttributeBoolean('wf_ssid_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('wf_auth', 0); // 0 (no encryption), 1 (WEP), 2 (WPA-PSK), 3 (WPA2-PSK)
        $this->RegisterAttributeBoolean('wf_auth_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('wf_key', ''); // Key max. 63 Characters (Allowed special characters: &='`)
        $this->RegisterAttributeBoolean('wf_key_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('wf_enc', 0); // Key type 0 (TKIP), 1 (AES)
        $this->RegisterAttributeBoolean('wf_enc_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('wf_mode', 0); // 0 (infra), 1 (ad-hoc)
        $this->RegisterAttributeBoolean('wf_mode_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('our_enable', 1); // 1: INSTAR DDNS enabled, 0: INSTAR DDNS disabled
        $this->RegisterAttributeBoolean('our_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('our_server', ''); // INSTAR DDNS Server Domain
        $this->RegisterAttributeBoolean('our_server_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('our_port', 0); // INSTAR DDNS Server Port
        $this->RegisterAttributeBoolean('our_port_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('our_uname', ''); // Your INSTAR DDNS ID
        $this->RegisterAttributeBoolean('our_uname_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('our_passwd', ''); // Your INSTAR DDNS Password
        $this->RegisterAttributeBoolean('our_passwd_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('our_domain', ''); // Your INSTAR DDNS Address
        $this->RegisterAttributeBoolean('our_domain_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('our_interval', 0); // Update Intervall
        $this->RegisterAttributeBoolean('our_interval_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger(
            'd3th_enable', 0
        ); // 1: 3rd Party DDNS activated / INSTAR DDNS disabled, 0: 3rd Party DDNS deactivated / INSTAR DDNS enabled
        $this->RegisterAttributeBoolean('d3th_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('d3th_service', 0); // 0: DynDNS, 1: NoIP
        $this->RegisterAttributeBoolean('d3th_service_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('d3th_uname', ''); // Your Username
        $this->RegisterAttributeBoolean('d3th_uname_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('d3th_passwd', ''); // Your Password
        $this->RegisterAttributeBoolean('d3th_passwd_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('d3th_domain', ''); // Your 3rd Party DDNS Address
        $this->RegisterAttributeBoolean('d3th_domain_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('upm_enable', 1); // 1: UPnP activated, 0: UPnP deactivated
        $this->RegisterAttributeBoolean('upm_enable_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('ov_enable', 1); // 1 ONVIF activated, 0 ONVIF deactivated
        $this->RegisterAttributeBoolean('ov_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ov_port', 0); // ONVIF Port
        $this->RegisterAttributeBoolean('ov_port_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ov_authflag', 0); // 1 ONVIF Login Required, 0: ONVIF Authentication deactivated
        $this->RegisterAttributeBoolean('ov_authflag_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'ov_forbitset', 0
        ); // 0: When the time zone setting allows image parameter settings allow, 1: When the time zone setting disabled, the image parameter settings allow, 2: When the time zone setting allows image parameter settings prohibit, 3: When the time zone setting is prohibited, prohibited image parameter settings
        $this->RegisterAttributeBoolean('ov_forbitset_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ov_subchn', 0); // Use video channel 11, 12 or 13
        $this->RegisterAttributeBoolean('ov_subchn_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ov_snapchn', 0); // Use video channel 11, 12 or 13 for snapshots
        $this->RegisterAttributeBoolean('ov_snapchn_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ov_nvctype', 0);
        $this->RegisterAttributeBoolean('ov_nvctype_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('volume', 0); // Audio input volume: 1 - 100
        $this->RegisterAttributeBoolean('volume_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('volin_type', 0); // 0: linear input, 1: microphone input
        $this->RegisterAttributeBoolean('volin_type_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aec', 0); // audio encoder: 0, 1
        $this->RegisterAttributeBoolean('aec_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('denoise', 0); // Noise surpression: 0, 1
        $this->RegisterAttributeBoolean('denoise_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ao_volume', 0); // Audio output volume: 1 - 100
        $this->RegisterAttributeBoolean('ao_volume_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('chn', 0); // 1st, 2nd or 3rd audio channel: 1, 2, 3
        $this->RegisterAttributeBoolean('chn_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aeswitch_1', 0); // Audio encode switch on, off: 1, 0
        $this->RegisterAttributeBoolean('aeswitch_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aeswitch_2', 0); // Audio encode switch on, off: 1, 0
        $this->RegisterAttributeBoolean('aeswitch_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aeswitch_3', 0); // Audio encode switch on, off: 1, 0
        $this->RegisterAttributeBoolean('aeswitch_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('aeformat_1', 'g711a'); //  Audio encode format g711a: G711A 64Kbps, g726: G726 16Kbps
        $this->RegisterAttributeBoolean('aeformat_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('aeformat_2', 'g711a'); //  Audio encode format g711a: G711A 64Kbps, g726: G726 16Kbps
        $this->RegisterAttributeBoolean('aeformat_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('aeformat_3', 'g711a'); //  Audio encode format g711a: G711A 64Kbps, g726: G726 16Kbps
        $this->RegisterAttributeBoolean('aeformat_3_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('videomode', 41); //  Resolution CH11=1080p, CH12=320p, CH13=160p
        $this->RegisterAttributeBoolean('videomode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('vinorm', 'P'); //  50Hz(PAL)
        $this->RegisterAttributeBoolean('vinorm_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('wdrmode', 0); //  Hardware Wide Dynamic Range: 0 (off), 1 (active)
        $this->RegisterAttributeBoolean('wdrmode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('profile', 0); //  h.264 encoder 0: baseline, 1: mainprofile
        $this->RegisterAttributeBoolean('profile_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('maxchn', 0); //  Maximum active video channels
        $this->RegisterAttributeBoolean('maxchn_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'bps_1', 2048
        ); //  Bitrate CH11 1080p = 512kbps - 4096kbps, Bitrate CH11 320p = 512kbps - 2048kbps, Bitrate CH11 160p = 90kbps - 512kbps
        $this->RegisterAttributeBoolean('bps_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'bps_2', 2048
        ); //  Bitrate CH11 1080p = 512kbps - 4096kbps, Bitrate CH11 320p = 512kbps - 2048kbps, Bitrate CH11 160p = 90kbps - 512kbps
        $this->RegisterAttributeBoolean('bps_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'bps_3', 2048
        ); //  Bitrate CH11 1080p = 512kbps - 4096kbps, Bitrate CH11 320p = 512kbps - 2048kbps, Bitrate CH11 160p = 90kbps - 512kbps
        $this->RegisterAttributeBoolean('bps_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('fps_1', 25); //  Framerate: PAL：Range [1 ~ 25], NTSC：Range [1 ~ 30]
        $this->RegisterAttributeBoolean('fps_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('fps_2', 25); //  Framerate: PAL：Range [1 ~ 25], NTSC：Range [1 ~ 30]
        $this->RegisterAttributeBoolean('fps_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('fps_3', 25); //  Framerate: PAL：Range [1 ~ 25], NTSC：Range [1 ~ 30]
        $this->RegisterAttributeBoolean('fps_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('gop_1', 40); //  Keyframe Interval: gop Range [10 ~ 150]
        $this->RegisterAttributeBoolean('gop_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('gop_2', 40); //  Keyframe Interval: gop Range [10 ~ 150]
        $this->RegisterAttributeBoolean('gop_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('gop_3', 40); //  Keyframe Interval: gop Range [10 ~ 150]
        $this->RegisterAttributeBoolean('gop_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('brmode_1', 1); //  Video encode control: 0: fixed bit rate, 1: changeable bit rate
        $this->RegisterAttributeBoolean('brmode_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('brmode_2', 1); //  Video encode control: 0: fixed bit rate, 1: changeable bit rate
        $this->RegisterAttributeBoolean('brmode_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('brmode_3', 1); //  Video encode control: 0: fixed bit rate, 1: changeable bit rate
        $this->RegisterAttributeBoolean('brmode_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('imagegrade_1', 1); //  1 (low compression) -6 (high compression)
        $this->RegisterAttributeBoolean('imagegrade_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('imagegrade_2', 1); //  1 (low compression) -6 (high compression)
        $this->RegisterAttributeBoolean('imagegrade_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('imagegrade_3', 1); //  1 (low compression) -6 (high compression)
        $this->RegisterAttributeBoolean('imagegrade_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('width_1', 1920); //  Video width
        $this->RegisterAttributeBoolean('width_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('width_2', 1920); //  Video width
        $this->RegisterAttributeBoolean('width_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('width_3', 1920); //  Video width
        $this->RegisterAttributeBoolean('width_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('height_1', 1080); //  Video height
        $this->RegisterAttributeBoolean('height_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('height_2', 1080); //  Video height
        $this->RegisterAttributeBoolean('height_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('height_3', 1080); //  Video height
        $this->RegisterAttributeBoolean('height_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('display_mode', 0); //  Current 0: black and white mode 1: color mode
        $this->RegisterAttributeBoolean('display_mode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('brightness', 70); //  brightness [0-100]
        $this->RegisterAttributeBoolean('brightness_enabled', true); // show Attribute in Webfront
        $this->RegisterAttributeInteger('saturation', 150); //  saturation [0-255]
        $this->RegisterAttributeBoolean('saturation_enabled', true); // show Attribute in Webfront
        $this->RegisterAttributeInteger('sharpness', 70); //  sharpness [0-100]
        $this->RegisterAttributeBoolean('sharpness_enabled', true); // show Attribute in Webfront
        $this->RegisterAttributeInteger('contrast', 70); //  contrast [0-100]
        $this->RegisterAttributeBoolean('contrast_enabled', true); // show Attribute in Webfront
        $this->RegisterAttributeInteger('hue', 100); //  [0-255]
        $this->RegisterAttributeBoolean('hue_enabled', true); // show Attribute in Webfront
        $this->RegisterAttributeString('wdr', 'on'); //  Software Wide Dynamic Range Mode: [on, off]
        $this->RegisterAttributeBoolean('wdr_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('night', 'off'); //  Night mode 0 (inactive) off, 1 (active) on
        $this->RegisterAttributeBoolean('night_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('shutter', 0); //  Shutter Speed [0 - 65535]
        $this->RegisterAttributeBoolean('shutter_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('flip', 'on'); //  Flip the Image [on, off]
        $this->RegisterAttributeBoolean('flip_enabled', true); // show Attribute in Webfront
        $this->RegisterAttributeString('mirror', 'on'); // Mirror the Image [on, off]
        $this->RegisterAttributeBoolean('mirror_enabled', true); // show Attribute in Webfront
        $this->RegisterAttributeString('scene', 'auto'); // scene (auto , indoor , outdoor) sets the white balance mode
        $this->RegisterAttributeBoolean('scene_enabled', true); // show Attribute in Webfront
        $this->RegisterAttributeInteger('gc', 0); //  Night illumination, value Range 0=auto, [1-255]=manual
        $this->RegisterAttributeBoolean('gc_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ae', 0); //  Minimum exposure, range 0-65535
        $this->RegisterAttributeBoolean('ae_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('targety', 0); //  Exposure [0-255]
        $this->RegisterAttributeBoolean('targety_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('noise', 0); //  Low light denoising intensity (0-100)
        $this->RegisterAttributeBoolean('noise_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('gamma', 0); //  Gamma 0-3
        $this->RegisterAttributeBoolean('gamma_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aemode', 0); //  Auto-Exposure mode, the range: 0 Automatic, 1 Indoor, 2 Outdoor
        $this->RegisterAttributeBoolean('aemode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('imgmode', 0); //  Image priority mode: 0: Frame rate priority, 1: Illumination priority
        $this->RegisterAttributeBoolean('imgmode_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('wdrauto', 0); //  Hardware Wide Dynamic Range 0 (Auto), 1 (Manual)
        $this->RegisterAttributeBoolean('wdrauto_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('wdrautval', 0); //  Auto WDR Strength [0-2]
        $this->RegisterAttributeBoolean('wdrautval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('wdrmanval', 0); //  Manual WDR Strength [0-255]
        $this->RegisterAttributeBoolean('wdrmanval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('d3noauto', 0); //  3D Noise Reduction Mode: 0 (auto), 1 (manual)
        $this->RegisterAttributeBoolean('d3noauto_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('d3noval', 0); //  3D Noise Reduction Strength: [0-255]
        $this->RegisterAttributeBoolean('d3noval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('gcauto', 0); //  Signal Gain: 0 (auto), 1 (manual)
        $this->RegisterAttributeBoolean('gcauto_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('gcval', 0); //  Gain Multiplier: [0-255]
        $this->RegisterAttributeBoolean('gcval_enabled', false); // show Attribute in Webfront
        // TODO aemodeex String or Integer?
        $this->RegisterAttributeString('aemodeex', 'Highlight'); // Exposure Mode: Highlight (Exposure) priority, Lowlight (Framerate) priority
        $this->RegisterAttributeBoolean('aemodeex_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aelowval', 0); //  Lowlight Intensity [0-255]
        $this->RegisterAttributeBoolean('aelowval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aehighval', 0); //  Highlight Intensity [0-255]
        $this->RegisterAttributeBoolean('aehighval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aeratio', 0); //  Length Exposure Ratio [0-100]
        $this->RegisterAttributeBoolean('aeratio_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ldc_enable', 0); //  Image Distortion Correction: 0 (disabled), 1 (enabled)
        $this->RegisterAttributeBoolean('ldc_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ldc_xoffset', 0); //  Horizontal Image Offset
        $this->RegisterAttributeBoolean('ldc_xoffset_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ldc_yoffset', 0); //  Vertical Image Offset
        $this->RegisterAttributeBoolean('ldc_yoffset_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ldc_ratio', 0); //  Distortion Correction [0-511]
        $this->RegisterAttributeBoolean('ldc_ratio_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('region', 1); //  OSD time zone, 1: OSD Name region
        $this->RegisterAttributeBoolean('region_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('show_0_osd', 0); //  0 (hidden), 1 (displayed)
        $this->RegisterAttributeBoolean('show_0_osd_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('place_0_osd', 0); //  0: top, 1: bottom
        $this->RegisterAttributeBoolean('place_0_osd_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('x_0_osd', 0); //  OSD region x coordinate
        $this->RegisterAttributeBoolean('x_0_osd_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('y_0_osd', 0); // OSD region y coordinate
        $this->RegisterAttributeBoolean('y_0_osd_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('name_0_osd', ''); //  Region 0="YYYY-MM-DD hh:mm:ss", region="Camera Name"
        $this->RegisterAttributeBoolean('name_0_osd_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('show_1_osd', 0); //  0 (hidden), 1 (displayed)
        $this->RegisterAttributeBoolean('show_1_osd_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('place_1_osd', 0); //  0: top, 1: bottom
        $this->RegisterAttributeBoolean('place_1_osd_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('x_1_osd', 0); //  OSD region x coordinate
        $this->RegisterAttributeBoolean('x_1_osd_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('y_1_osd', 0); // OSD region y coordinate
        $this->RegisterAttributeBoolean('y_1_osd_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('name_1_osd', ''); //  Region 0="YYYY-MM-DD hh:mm:ss", region="Camera Name"
        $this->RegisterAttributeBoolean('name_1_osd_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('show_2_osd', 0); //  0 (hidden), 1 (displayed)
        $this->RegisterAttributeBoolean('show_2_osd_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('place_2_osd', 0); //  0: top, 1: bottom
        $this->RegisterAttributeBoolean('place_2_osd_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('x_2_osd', 0); //  OSD region x coordinate
        $this->RegisterAttributeBoolean('x_2_osd_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('y_2_osd', 0); // OSD region y coordinate
        $this->RegisterAttributeBoolean('y_2_osd_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('name_2_osd', ''); //  Region 0="YYYY-MM-DD hh:mm:ss", region="Camera Name"
        $this->RegisterAttributeBoolean('name_2_osd_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('privacy_region', 1); // Privacy Mask [1-4]
        $this->RegisterAttributeBoolean('privacy_region_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('show_1', 0); // [0, 1] De/Activate Mask
        $this->RegisterAttributeBoolean('show_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('show_2', 0); // [0, 1] De/Activate Mask
        $this->RegisterAttributeBoolean('show_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('show_3', 0); // [0, 1] De/Activate Mask
        $this->RegisterAttributeBoolean('show_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('show_4', 0); // [0, 1] De/Activate Mask
        $this->RegisterAttributeBoolean('show_4_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('color_1', 0); // Brightness [0-100]
        $this->RegisterAttributeBoolean('color_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('color_2', 0); // Brightness [0-100]
        $this->RegisterAttributeBoolean('color_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('color_3', 0); // Brightness [0-100]
        $this->RegisterAttributeBoolean('color_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('color_4', 0); // Brightness [0-100]
        $this->RegisterAttributeBoolean('color_4_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('x_1', 0); // X-Coordinate Origin [0-(1920-w)]
        $this->RegisterAttributeBoolean('x_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('x_2', 0); // X-Coordinate Origin [0-(1920-w)]
        $this->RegisterAttributeBoolean('x_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('x_3', 0); // X-Coordinate Origin [0-(1920-w)]
        $this->RegisterAttributeBoolean('x_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('x_4', 0); // X-Coordinate Origin [0-(1920-w)]
        $this->RegisterAttributeBoolean('x_4_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('y_1', 0); // Y-Coordinate Origin [0-(1080-h)]
        $this->RegisterAttributeBoolean('y_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('y_2', 0); // Y-Coordinate Origin [0-(1080-h)]
        $this->RegisterAttributeBoolean('y_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('y_3', 0); // Y-Coordinate Origin [0-(1080-h)]
        $this->RegisterAttributeBoolean('y_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('y_4', 0); // Y-Coordinate Origin [0-(1080-h)]
        $this->RegisterAttributeBoolean('y_4_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('w_1', 1); // Mask Width [1-1920] Pixel
        $this->RegisterAttributeBoolean('w_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('w_2', 1); // Mask Width [1-1920] Pixel
        $this->RegisterAttributeBoolean('w_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('w_3', 1); // Mask Width [1-1920] Pixel
        $this->RegisterAttributeBoolean('w_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('w_4', 1); // Mask Width [1-1920] Pixel
        $this->RegisterAttributeBoolean('w_4_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('h_1', 1); // Mask Height [1-1080] Pixel
        $this->RegisterAttributeBoolean('h_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('h_2', 1); // Mask Height [1-1080] Pixel
        $this->RegisterAttributeBoolean('h_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('h_3', 1); // Mask Height [1-1080] Pixel
        $this->RegisterAttributeBoolean('h_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('h_4', 1); // Mask Height [1-1080] Pixel
        $this->RegisterAttributeBoolean('h_4_enabled', false); // show Attribute in Webfront
        // Features
        $this->RegisterAttributeString('ma_server', ''); // SMTP Server Address e.g. smtp.strato.de
        $this->RegisterAttributeBoolean('ma_server_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ma_port', 25); // SMTP Server Port e.g. 25, 587 (TLS) or 465 (SSL)
        $this->RegisterAttributeBoolean('ma_port_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ma_ssl', 25); // SSL Encryption 0 (Disabled), 1 (SSL), 2 (TLS) or 3 (STARTTLS)
        $this->RegisterAttributeBoolean('ma_ssl_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ma_logintype', 1); // Enable (1) or Disable (3) Authentication
        $this->RegisterAttributeBoolean('ma_logintype_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ma_username', ''); // SMTP Server Username
        $this->RegisterAttributeBoolean('ma_username_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ma_password', ''); // SMTP Server Password
        $this->RegisterAttributeBoolean('ma_password_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ma_from', ''); // Sender Email Address
        $this->RegisterAttributeBoolean('ma_from_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ma_to', ''); // Receiver Email Address
        $this->RegisterAttributeBoolean('ma_to_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ma_subject', ''); // Mail Subject Line
        $this->RegisterAttributeBoolean('ma_subject_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ma_text', ''); // Mail Content
        $this->RegisterAttributeBoolean('ma_text_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ft_server', ''); // FTP Server Address
        $this->RegisterAttributeBoolean('ft_server_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ft_port', 25); // FTP Server Port
        $this->RegisterAttributeBoolean('ft_port_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ft_username', ''); // FTP Username
        $this->RegisterAttributeBoolean('ft_username_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ft_password', ''); // FTP Password
        $this->RegisterAttributeBoolean('ft_password_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ft_mode', 0); // FTP Mode Port (0) or Passive (1)
        $this->RegisterAttributeBoolean('ft_mode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ft_dirname', ''); // FTP Directory
        $this->RegisterAttributeBoolean('ft_dirname_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ft_autocreatedir', 0); // Automatically create the directory 0 (no), 1 (yes)
        $this->RegisterAttributeBoolean('ft_autocreatedir_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ft_dirmode', 0); // 0 (Create a new Folder every Day), 1 (All Files in One Directory)
        $this->RegisterAttributeBoolean('ft_dirmode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ft_ssl', 0); // FTPS Encryption - 0：None, 1：SSL, 2: TLS
        $this->RegisterAttributeBoolean('ft_ssl_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('infraredstat', ''); // IR LED Status - auto, close (deactivated)
        $this->RegisterAttributeBoolean('infraredstat_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('plancgi_enable_0_ir', 0);
        $this->RegisterAttributeInteger('plancgi_time_0_ir', 0);
        $this->RegisterAttributeInteger('plancgi_enable_1_ir', 0);
        $this->RegisterAttributeInteger('plancgi_time_1_ir', 0);
        $this->RegisterAttributeInteger('plancgi_enable_2_ir', 0);
        $this->RegisterAttributeInteger('plancgi_time_2_ir', 0);
        $this->RegisterAttributeInteger('plancgi_enable_3_ir', 0);
        $this->RegisterAttributeInteger('plancgi_time_3_ir', 0);
        $this->RegisterAttributeInteger('plancgi_enable_4_ir', 0);
        $this->RegisterAttributeInteger('plancgi_time_4_ir', 0);
        $this->RegisterAttributeInteger('plancgi_enable_5_ir', 0);
        $this->RegisterAttributeInteger('plancgi_time_5_ir', 0);
        $this->RegisterAttributeInteger('plancgi_enable_6_ir', 0);
        $this->RegisterAttributeInteger('plancgi_time_6_ir', 0);
        $this->RegisterAttributeInteger('plancgi_enable_7_ir', 0);
        $this->RegisterAttributeInteger('plancgi_time_7_ir', 0);
        $this->RegisterAttributeInteger('plancgi_enable_8_ir', 0);
        $this->RegisterAttributeInteger('plancgi_time_8_ir', 0);
        $this->RegisterAttributeInteger('plancgi_enable_9_ir', 0);
        $this->RegisterAttributeInteger('plancgi_time_9_ir', 0);
        $this->RegisterAttributeInteger('plancgi_enable_10_ir', 0);
        $this->RegisterAttributeInteger('plancgi_time_10_ir', 0);
        $this->RegisterAttributeInteger('plancgi_enable_11_ir', 0);
        $this->RegisterAttributeInteger('plancgi_time_11_ir', 0);
        $this->RegisterAttributeInteger('plancgi_enable_12_ir', 0);
        $this->RegisterAttributeInteger('plancgi_time_12_ir', 0);
        $this->RegisterAttributeInteger('plancgi_enable_13_ir', 0);
        $this->RegisterAttributeInteger('plancgi_time_13_ir', 0);
        $this->RegisterAttributeInteger('plancgi_enable_14_ir', 0);
        $this->RegisterAttributeInteger('plancgi_time_14_ir', 0);
        $this->RegisterAttributeInteger('plancgi_enable_15_ir', 0);
        $this->RegisterAttributeInteger('plancgi_time_15_ir', 0);
        $this->RegisterAttributeInteger('plancgi_enable_16_ir', 0);
        $this->RegisterAttributeInteger('plancgi_time_16_ir', 0);
        $this->RegisterAttributeInteger('plancgi_enable_17_ir', 0);
        $this->RegisterAttributeInteger('plancgi_time_17_ir', 0);
        $this->RegisterAttributeInteger('plancgi_enable_18_ir', 0);
        $this->RegisterAttributeInteger('plancgi_time_18_ir', 0);
        $this->RegisterAttributeInteger('plancgi_enable_19_ir', 0);
        $this->RegisterAttributeInteger('plancgi_time_19_ir', 0);
        $this->RegisterAttributeString('ptzrfmask', "");
        $this->RegisterAttributeBoolean('ptzrfmask_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('panspeed', 0); // fast (0) - slow (2)
        $this->RegisterAttributeBoolean('panspeed_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('tiltspeed', 0); // fast (0) - slow (2)
        $this->RegisterAttributeBoolean('tiltspeed_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('panscan', 1); // [1-50] - Number of hscans
        $this->RegisterAttributeBoolean('panscan_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('tiltscan', 1); // [1-50] - Number of vscans
        $this->RegisterAttributeBoolean('tiltscan_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('movehome', 'on'); // [on, off] - Go to Center or Postion [initpresetindex] after Restart
        $this->RegisterAttributeBoolean('movehome_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ptzalarmmask', 'on'); // [on, off] - Deactivate Motion Detection during Pan&Tilt
        $this->RegisterAttributeBoolean('ptzalarmmask_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('selfdet', ''); // De/Activate Calibration (Required for Preset Postions and PTZ Tour)
        $this->RegisterAttributeBoolean('selfdet_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('alarmpresetindex', 0); // [1-8]; - Alarmposition
        $this->RegisterAttributeBoolean('alarmpresetindex_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('initpresetindex', 0); // [1-8]; - Position Camera goes to after Restart
        $this->RegisterAttributeBoolean('initpresetindex_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('md_preset_switch', 'on'); // Go to [alarmpresetindex] (Alarm Position) at Alarm Event - [on, off]
        $this->RegisterAttributeBoolean('md_preset_switch_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('timerpreset_enable', 0); // De/Activate Park Position - [0, 1]
        $this->RegisterAttributeBoolean('timerpreset_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('timerpreset_index', 1); // Select Park Position - [1 - 8]
        $this->RegisterAttributeBoolean('timerpreset_index_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('timerpreset_interval', 30); // Time before going back to Park Position in seconds - [30 - 900]
        $this->RegisterAttributeBoolean('timerpreset_interval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('admin_value46', 46); // De/Activate One-Step Pan&Tilt Control - [0, 1]
        $this->RegisterAttributeBoolean('admin_value46_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('tour_enable', 0); // De/Activate PTZ Tour [0, 1]
        $this->RegisterAttributeBoolean('tour_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('tour_times', 1); // Number of Rounds [1 - 50]
        $this->RegisterAttributeBoolean('tour_times_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('tour_index', 1); // Set Tour Positions to Preset Position [1-8] / [-1] to deactivate Tour Position
        $this->RegisterAttributeBoolean('tour_index_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('tour_interval', 60); // Set Pause when Tour Position is reached in seconds [60-43200]
        $this->RegisterAttributeBoolean('tour_interval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('light1_enable', 'on'); // WiFi Status LED - [on, off]
        $this->RegisterAttributeBoolean('light1_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('light2_enable', 'on'); // Power LED - [on, off]
        $this->RegisterAttributeBoolean('light2_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('admin_value44', 44); // Recording Length in Seconds [60 - 3600] / Set [0] to Deactivate File Splitting
        $this->RegisterAttributeBoolean('admin_value44_enabled', false); // show Attribute in Webfront
        // Alarm Menu
        $this->RegisterAttributeString('md_emailsnap_switch', 'on'); // E-mail Alarm / Send Snapshot
        $this->RegisterAttributeBoolean('md_emailsnap_switch_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('md_snap_switch', 'on'); // Save Snapshot to SD
        $this->RegisterAttributeBoolean('md_snap_switch_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('md_record_switch', 'on'); //
        $this->RegisterAttributeBoolean('md_record_switch_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('md_ftprec_switch', 'on'); //
        $this->RegisterAttributeBoolean('md_ftprec_switch_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('md_relay_switch', 'on'); //
        $this->RegisterAttributeBoolean('md_relay_switch_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('md_ftpsnap_switch', 'on'); //
        $this->RegisterAttributeBoolean('md_ftpsnap_switch_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('md_sound_switch', 'on'); //
        $this->RegisterAttributeBoolean('md_sound_switch_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('md_alarm_type', 'on'); //
        $this->RegisterAttributeBoolean('md_alarm_type_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'admin_value31', ''
        ); // [FTP Server];[FTP User Name];[FTP User Password];[FTP Mode];[FTP Directory];[Auto Create Directory];[FTP Directory Mode];[FTP SSL]", e.g "192.168.178.1;21;ftpuser;1234;1;./Kamera;1;0;0
        $this->RegisterAttributeString('FTP_Server', '');
        $this->RegisterAttributeBoolean('FTP_Server_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('FTP_User_Name', '');
        $this->RegisterAttributeBoolean('FTP_User_Name_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('FTP_User_Password', '');
        $this->RegisterAttributeBoolean('FTP_User_Password_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('FTP_Mode', 0);
        $this->RegisterAttributeBoolean('FTP_Mode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('FTP_Directory', '');
        $this->RegisterAttributeBoolean('FTP_Directory_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('Auto_Create_Directory', 0);
        $this->RegisterAttributeBoolean('Auto_Create_Directory_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('FTP_Directory_Mode', 0);
        $this->RegisterAttributeBoolean('FTP_Directory_Mode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('FTP_SSL', 0);
        $this->RegisterAttributeBoolean('FTP_SSL_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ftprec', 'on'); // Send Video to FTP Server
        $this->RegisterAttributeBoolean('ftprec_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('relay', 'on'); // Alarm Out Relay
        $this->RegisterAttributeBoolean('relay_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ftpsnap', 'on'); // Send Snapshot to FTP Server
        $this->RegisterAttributeBoolean('ftpsnap_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('sound', 'on'); // Audio Alarm Signal
        $this->RegisterAttributeBoolean('sound_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('type', 'on'); // Link Alarm Areas and Alarm-Input
        $this->RegisterAttributeBoolean('type_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aa_enable', 0); // De/Activate Audio Detection [0, 1]
        $this->RegisterAttributeBoolean('aa_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aa_value', 10); // Sensitivity [10 - 100]
        $this->RegisterAttributeBoolean('aa_value_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aa_time', 0); // Minimum Audio Signal Length Threshold [0 - 10]
        $this->RegisterAttributeBoolean('aa_time_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('io_enable', 0); // De/Activate Alarm Input [0, 1]
        $this->RegisterAttributeBoolean('io_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('io_flag', 0); // Circuit Nomally Closed N.C. [0] or Normally Open N.O. [1]
        $this->RegisterAttributeBoolean('io_flag_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('pir_enable', 0); // De/Activate PIR Sensor [0, 1]
        $this->RegisterAttributeBoolean('pir_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('pir_flag', 0); // Circuit Nomally Closed N.C. [0] or Normally Open N.O. [1]
        $this->RegisterAttributeBoolean('pir_flag_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('snap_chn', 11); // Set Snapshot Resolution to Video Channel [11, 12, 13]
        $this->RegisterAttributeBoolean('snap_chn_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('snap_name', ''); // Fixed File Name for All Alarm Snapshots (leave empty for auto-name by time stamp)
        $this->RegisterAttributeBoolean('snap_name_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'snap_timer_name', ''
        ); // Fixed File Name for All Photoseries Snapshots (leave empty for auto-name by time stamp)
        $this->RegisterAttributeBoolean('snap_timer_name_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'snap_name_mode', 0
        ); // Set Filename to [0] time stamp, or [1] fixed file name set snapname and snaptimer_name
        $this->RegisterAttributeBoolean('snap_name_mode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('snap_count', 1); // Number of Snapshot saved to SD Card per Alarm Event [1-15]
        $this->RegisterAttributeBoolean('snap_count_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ftp_snap_count', 1); // Number of Snapshot send to FTP Server per Alarm Event [1-15]
        $this->RegisterAttributeBoolean('ftp_snap_count_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('email_snap_count', 1); // Number of Snapshot send by Email per Alarm Event [1-15]
        $this->RegisterAttributeBoolean('email_snap_count_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('admin17', 17); // admin17
        $this->RegisterAttributeBoolean('admin17_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m1_enable', 0); // Dis/Enable Alarm Detection Area 1 - 4: [0, 1]
        $this->RegisterAttributeBoolean('m1_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m2_enable', 0); // Dis/Enable Alarm Detection Area 1 - 4: [0, 1]
        $this->RegisterAttributeBoolean('m2_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m3_enable', 0); // Dis/Enable Alarm Detection Area 1 - 4: [0, 1]
        $this->RegisterAttributeBoolean('m3_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m4_enable', 0); // Dis/Enable Alarm Detection Area 1 - 4: [0, 1]
        $this->RegisterAttributeBoolean('m4_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m1_x', 0); // X-Axis Offset of Alarm Area Origin [0-(1920-w)]
        $this->RegisterAttributeBoolean('m1_x_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m2_x', 0); // X-Axis Offset of Alarm Area Origin [0-(1920-w)]
        $this->RegisterAttributeBoolean('m2_x_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m3_x', 0); // X-Axis Offset of Alarm Area Origin [0-(1920-w)]
        $this->RegisterAttributeBoolean('m3_x_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m4_x', 0); // X-Axis Offset of Alarm Area Origin [0-(1920-w)]
        $this->RegisterAttributeBoolean('m4_x_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m1_y', 0); // Y-Axis Offset of Alarm Area Origin [0-(1080-h)]
        $this->RegisterAttributeBoolean('m1_y_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m2_y', 0); // Y-Axis Offset of Alarm Area Origin [0-(1080-h)]
        $this->RegisterAttributeBoolean('m2_y_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m3_y', 0); // Y-Axis Offset of Alarm Area Origin [0-(1080-h)]
        $this->RegisterAttributeBoolean('m3_y_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m4_y', 0); // Y-Axis Offset of Alarm Area Origin [0-(1080-h)]
        $this->RegisterAttributeBoolean('m4_y_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m1_w', 0); // Alarm Area Width [1-1920] Pixel
        $this->RegisterAttributeBoolean('m1_w_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m2_w', 0); // Alarm Area Width [1-1920] Pixel
        $this->RegisterAttributeBoolean('m2_w_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m3_w', 0); // Alarm Area Width [1-1920] Pixel
        $this->RegisterAttributeBoolean('m3_w_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m4_w', 0); // Alarm Area Width [1-1920] Pixel
        $this->RegisterAttributeBoolean('m4_w_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m1_h', 0); // Alarm Area Height [1-1080] Pixel
        $this->RegisterAttributeBoolean('m1_h_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m2_h', 0); // Alarm Area Height [1-1080] Pixel
        $this->RegisterAttributeBoolean('m2_h_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m3_h', 0); // Alarm Area Height [1-1080] Pixel
        $this->RegisterAttributeBoolean('m3_h_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m4_h', 0); // Alarm Area Height [1-1080] Pixel
        $this->RegisterAttributeBoolean('m4_h_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m1_sensitivity', 0); // Detection Sensitivity [1 - 100]
        $this->RegisterAttributeBoolean('m1_sensitivity_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m2_sensitivity', 0); // Detection Sensitivity [1 - 100]
        $this->RegisterAttributeBoolean('m2_sensitivity_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m3_sensitivity', 0); // Detection Sensitivity [1 - 100]
        $this->RegisterAttributeBoolean('m3_sensitivity_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m4_sensitivity', 0); // Detection Sensitivity [1 - 100]
        $this->RegisterAttributeBoolean('m4_sensitivity_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m1_threshold', 0); // Detection Threshold (not active)
        $this->RegisterAttributeBoolean('m1_threshold_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m2_threshold', 0); // Detection Threshold (not active)
        $this->RegisterAttributeBoolean('m2_threshold_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m3_threshold', 0); // Detection Threshold (not active)
        $this->RegisterAttributeBoolean('m3_threshold_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m4_threshold', 0); // Detection Threshold (not active)
        $this->RegisterAttributeBoolean('m4_threshold_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('etm_as', 0); // Detection Threshold (not active)
        $this->RegisterAttributeBoolean('etm_as_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'week0_as', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('as_week0_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'week1_as', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('as_week1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'week2_as', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('as_week2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'week3_as', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('as_week3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'week4_as', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('as_week4_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'week5_as', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('as_week5_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'week6_as', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('as_week6_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_0', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_0_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_1', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_2', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_3', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_4', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_4_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_5', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_5_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_6', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_6_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_7', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_7_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_8', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_8_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_9', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_9_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_10', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_10_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_11', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_11_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_12', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_12_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_13', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_13_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_14', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_14_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_15', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_15_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_16', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_16_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_17', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_17_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_18', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_18_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_19', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_19_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('plancgi_time_0', '');
        $this->RegisterAttributeString('plancgi_time_1', '');
        $this->RegisterAttributeString('plancgi_time_2', '');
        $this->RegisterAttributeString('plancgi_time_3', '');
        $this->RegisterAttributeString('plancgi_time_4', '');
        $this->RegisterAttributeString('plancgi_time_5', '');
        $this->RegisterAttributeString('plancgi_time_6', '');
        $this->RegisterAttributeString('plancgi_time_7', '');
        $this->RegisterAttributeString('plancgi_time_8', '');
        $this->RegisterAttributeString('plancgi_time_9', '');
        $this->RegisterAttributeString('as_server', ''); // Address of the receiving Server (e.g. Home Automation Server) [IPv4 Address]
        $this->RegisterAttributeBoolean('as_server_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_port', 0); // Port of the receiving Server [1-65536]
        $this->RegisterAttributeBoolean('as_port_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_auth', 0); // Authentication required [0, 1]
        $this->RegisterAttributeBoolean('as_auth_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_username', ''); // Alarmserver Username
        $this->RegisterAttributeBoolean('as_username_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_password', ''); // Alarmserver Password
        $this->RegisterAttributeBoolean('as_password_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_path', ''); // URL Path
        $this->RegisterAttributeBoolean('as_path_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_area', 1); // Send Query when Motion is Detected
        $this->RegisterAttributeBoolean('as_area_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_io', 1); // Send Query when Alarm Input is Triggered
        $this->RegisterAttributeBoolean('as_io_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_audio', 1); // Send Query when Audio Alarm is Triggered
        $this->RegisterAttributeBoolean('as_audio_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_areaio', 1); // Send Query when Motion is Detected and Input is Triggered
        $this->RegisterAttributeBoolean('as_areaio_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_activequery', 1); // Append Alarm Trigger to Query
        $this->RegisterAttributeBoolean('as_activequery_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_query1', 0); // Activate Sending optional Parameter 1
        $this->RegisterAttributeBoolean('as_query1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryattr1', ''); // Command 1 Attribute
        $this->RegisterAttributeBoolean('as_queryattr1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryval1', ''); // Command 1 Value
        $this->RegisterAttributeBoolean('as_queryval1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_query2', ''); // Activate Sending optional Parameter 2
        $this->RegisterAttributeBoolean('as_query2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryattr2', ''); // Command 2 Attribute
        $this->RegisterAttributeBoolean('as_queryattr2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryval2', ''); // Command 2 Value
        $this->RegisterAttributeBoolean('as_queryval2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_query3', ''); // Activate Sending optional Parameter 3
        $this->RegisterAttributeBoolean('as_query3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryattr3', ''); // Command 3 Attribute
        $this->RegisterAttributeBoolean('as_queryattr3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryval3', ''); // Command 3 Value
        $this->RegisterAttributeBoolean('as_queryval3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('alarmserver', 1); // Alarmserver 0 IP-Symcon connect, 1 local network
        $this->RegisterAttributeBoolean('alarmserver_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeString('as_server_0_', ''); // Address of the receiving Server (e.g. Home Automation Server) [IPv4 Address]
        $this->RegisterAttributeBoolean('as_server_0__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_port_0_', 0); // Port of the receiving Server [1-65536]
        $this->RegisterAttributeBoolean('as_port_0__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_auth_0_', 0); // Authentication required [0, 1]
        $this->RegisterAttributeBoolean('as_auth_0__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_username_0_', ''); // Alarmserver Username
        $this->RegisterAttributeBoolean('as_username_0__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_password_0_', ''); // Alarmserver Password
        $this->RegisterAttributeBoolean('as_password_0__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_path_0_', ''); // URL Path
        $this->RegisterAttributeBoolean('as_path_0__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_area_0_', 1); // Send Query when Motion is Detected
        $this->RegisterAttributeBoolean('as_area_0__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_io_0_', 1); // Send Query when Alarm Input is Triggered
        $this->RegisterAttributeBoolean('as_io_0__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_audio_0_', 1); // Send Query when Audio Alarm is Triggered
        $this->RegisterAttributeBoolean('as_audio_0__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_areaio_0_', 1); // Send Query when Motion is Detected and Input is Triggered
        $this->RegisterAttributeBoolean('as_areaio_0__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_activequery_0_', 1); // Append Alarm Trigger to Query
        $this->RegisterAttributeBoolean('as_activequery_0__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_query1_0_', 0); // Activate Sending optional Parameter 1
        $this->RegisterAttributeBoolean('as_query1_0__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryattr1_0_', ''); // Command 1 Attribute
        $this->RegisterAttributeBoolean('as_queryattr1_0__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryval1_0_', ''); // Command 1 Value
        $this->RegisterAttributeBoolean('as_queryval1_0__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_query2_0_', ''); // Activate Sending optional Parameter 2
        $this->RegisterAttributeBoolean('as_query2_0__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryattr2_0_', ''); // Command 2 Attribute
        $this->RegisterAttributeBoolean('as_queryattr2_0__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryval2_0_', ''); // Command 2 Value
        $this->RegisterAttributeBoolean('as_queryval2_0__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_query3_0_', ''); // Activate Sending optional Parameter 3
        $this->RegisterAttributeBoolean('as_query3_enabled_0_', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryattr3_0_', ''); // Command 3 Attribute
        $this->RegisterAttributeBoolean('as_queryattr3_0__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryval3_0_', ''); // Command 3 Value
        $this->RegisterAttributeBoolean('as_queryval3_0__enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeString('as_server_1_', ''); // Address of the receiving Server (e.g. Home Automation Server) [IPv4 Address]
        $this->RegisterAttributeBoolean('as_server_1__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_port_1_', 0); // Port of the receiving Server [1-65536]
        $this->RegisterAttributeBoolean('as_port_1__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_auth_1_', 0); // Authentication required [0, 1]
        $this->RegisterAttributeBoolean('as_auth_1__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_username_1_', ''); // Alarmserver Username
        $this->RegisterAttributeBoolean('as_username_1__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_password_1_', ''); // Alarmserver Password
        $this->RegisterAttributeBoolean('as_password_1__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_path_1_', ''); // URL Path
        $this->RegisterAttributeBoolean('as_path_1__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_area_1_', 1); // Send Query when Motion is Detected
        $this->RegisterAttributeBoolean('as_area_1__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_io_1_', 1); // Send Query when Alarm Input is Triggered
        $this->RegisterAttributeBoolean('as_io_1__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_audio_1_', 1); // Send Query when Audio Alarm is Triggered
        $this->RegisterAttributeBoolean('as_audio_1__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_areaio_1_', 1); // Send Query when Motion is Detected and Input is Triggered
        $this->RegisterAttributeBoolean('as_areaio_1__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_activequery_1_', 1); // Append Alarm Trigger to Query
        $this->RegisterAttributeBoolean('as_activequery_1__enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_query1_1_', 0); // Activate Sending optional Parameter 1
        $this->RegisterAttributeBoolean('as_query1_1__enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeString('as_server_2', ''); // Address of the receiving Server (e.g. Home Automation Server) [IPv4 Address]
        $this->RegisterAttributeBoolean('as_server_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_port_2', 0); // Port of the receiving Server [1-65536]
        $this->RegisterAttributeBoolean('as_port_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_auth_2', 1); // Authentication required [0, 1]
        $this->RegisterAttributeBoolean('as_auth_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_username_2', 'instar'); // Alarmserver Username
        $this->RegisterAttributeBoolean('as_username_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_password_2', 'symcon'); // Alarmserver Password
        $this->RegisterAttributeBoolean('as_password_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_path_2', '/hook/INSTAR'); // URL Path
        $this->RegisterAttributeBoolean('as_path_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_area_2', 1); // Send Query when Motion is Detected
        $this->RegisterAttributeBoolean('as_area_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_io_2', 1); // Send Query when Alarm Input is Triggered
        $this->RegisterAttributeBoolean('as_io_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_audio_2', 1); // Send Query when Audio Alarm is Triggered
        $this->RegisterAttributeBoolean('as_audio_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_areaio_2', 1); // Send Query when Motion is Detected and Input is Triggered
        $this->RegisterAttributeBoolean('as_areaio_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_activequery_2', 1); // Append Alarm Trigger to Query
        $this->RegisterAttributeBoolean('as_activequery_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_query1_2', 0); // Activate Sending optional Parameter 1
        $this->RegisterAttributeBoolean('as_query1_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryattr1_2', ''); // Command 1 Attribute
        $this->RegisterAttributeBoolean('as_queryattr1_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryval1_2', ''); // Command 1 Value
        $this->RegisterAttributeBoolean('as_queryval1_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_query2_2', 1); // Activate Sending optional Parameter 2
        $this->RegisterAttributeBoolean('as_query2_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryattr2_2', ''); // Command 2 Attribute
        $this->RegisterAttributeBoolean('as_queryattr2_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryval2_2', ''); // Command 2 Value
        $this->RegisterAttributeBoolean('as_queryval2_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_query3_2', 1); // Activate Sending optional Parameter 3
        $this->RegisterAttributeBoolean('as_query3_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryattr3_2', ''); // Command 3 Attribute
        $this->RegisterAttributeBoolean('as_queryattr3_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryval3_2', ''); // Command 3 Value
        $this->RegisterAttributeBoolean('as_queryval3_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('md_server2_switch', 'on'); // De/Activate Alarm Server2 [off, on]
        $this->RegisterAttributeBoolean('md_server2_switch_enabled', false); // show Attribute in Webfront

        // Recording Menu
        $this->RegisterAttributeInteger('as_snap_enable', 0); // Dis/Enable snapshot to SD card： [0, 1]
        $this->RegisterAttributeBoolean('as_snap_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_snap_interval', 1); // Time interval between shots in seconds [1-86400]
        $this->RegisterAttributeBoolean('as_snap_interval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_email_enable', 0); // DDis/Enable snapshot to Email： [0, 1]
        $this->RegisterAttributeBoolean('as_email_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_email_interval', 1); // Time interval between shots in seconds [1-86400]
        $this->RegisterAttributeBoolean('as_email_interval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_ftp_enable', 0); // Dis/Enable snapshot to FTP Server： [0, 1]
        $this->RegisterAttributeBoolean('as_ftp_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_ftp_interval', 1); // Time interval between shots in seconds [1-86400]
        $this->RegisterAttributeBoolean('as_ftp_interval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_cloud_enable', 0); // Dis/Enable snapshot to INSTAR Cloud Server： [0, 1]
        $this->RegisterAttributeBoolean('as_cloud_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_cloud_interval', 1); // Time interval between shots in seconds [1-86400]
        $this->RegisterAttributeBoolean('as_cloud_interval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'rt_week0', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('rt_week0_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'rt_week1', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('rt_week1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'rt_week2', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('rt_week2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'rt_week3', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('rt_week3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'rt_week4', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('rt_week4_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'rt_week5', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('rt_week5_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'rt_week6', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('rt_week6_enabled', false); // show Attribute in Webfront
        //  Video Tasks
        $this->RegisterAttributeInteger('planrec_enable', 1); // Dis/Enable Recording to SD card： [0, 1]
        $this->RegisterAttributeBoolean('planrec_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('planrec_chn', 11); // Record Kamera Channel [11, 12, 13]
        $this->RegisterAttributeBoolean('planrec_chn_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('planrec_time', 1); // Recoding File Length (15-900seconds)
        $this->RegisterAttributeBoolean('planrec_time_enabled', false); // show Attribute in Webfront
        // System
        $this->RegisterAttributeString('lanmac', ''); // MAC Address of the LAN Interface
        $this->RegisterAttributeBoolean('lanmac_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('wifimac', ''); // MAC Address of the WLAN Interface
        $this->RegisterAttributeBoolean('wifimac_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('internetip', ''); // Get Wide Area Network Address
        $this->RegisterAttributeBoolean('internetip_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('at_username0', ''); // Username for User 1
        $this->RegisterAttributeBoolean('at_username0_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('at_password0', ''); // Password for User 1
        $this->RegisterAttributeBoolean('at_password0_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('at_authlevel0', 3); // User Authorisation: admin/user/guest [15, 3, 1]
        $this->RegisterAttributeBoolean('at_authlevel0_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('at_enable0', 1); // De/Activate [0, 1]
        $this->RegisterAttributeBoolean('at_enable0_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('at_username1', ''); // Username for User 2
        $this->RegisterAttributeBoolean('at_username1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('at_password1', ''); // Password for User 2
        $this->RegisterAttributeBoolean('at_password1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('at_authlevel1', 3); // User Authorisation: admin/user/guest [15, 3, 1]
        $this->RegisterAttributeBoolean('at_authlevel1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('at_enable1', 1); // De/Activate [0, 1]
        $this->RegisterAttributeBoolean('at_enable1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('at_username2', ''); // Username for User 3
        $this->RegisterAttributeBoolean('at_username2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('at_password2', ''); // Password for User 3
        $this->RegisterAttributeBoolean('at_password2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('at_authlevel2', 3); // User Authorisation: admin/user/guest [15, 3, 1]
        $this->RegisterAttributeBoolean('at_authlevel2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('at_enable2', 1); // De/Activate [0, 1]
        $this->RegisterAttributeBoolean('at_enable2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('time', ''); // Camera Time
        $this->RegisterAttributeBoolean('time_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('timeZone', ''); // Cameras Time Zone e.g.[Europe%2FAmsterdam]
        $this->RegisterAttributeBoolean('timeZone_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('dstmode', 'on'); // De/Activate Daylight Saving Time [off, on]
        $this->RegisterAttributeBoolean('dstmode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ntpenable', 1); // De/Activate NTP Time Adjustment [0, 1]
        $this->RegisterAttributeBoolean('ntpenable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ntpserver', ''); // NTP Server Address
        $this->RegisterAttributeBoolean('ntpserver_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ntpinterval', 1); // NTP Sync Interval in Hours [1 - 12]
        $this->RegisterAttributeBoolean('ntpinterval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('guest_value11', 'de'); // UI Language Selector [de, en, fr, cn]
        $this->RegisterAttributeBoolean('guest_value11_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeBoolean('1080p_API', false);
        $this->RegisterAttributeBoolean('720p_API', false);
        $this->RegisterAttributeBoolean('VGA_API', true);
        $this->RegisterAttributeBoolean('MQTT_Support', false);
        $this->RegisterAttributeBoolean('MQTT', false);

        //we will wait until the kernel is ready
        $this->RegisterMessage(0, IPS_KERNELMESSAGE);
    }

    public function ApplyChanges()
    {
        //Never delete this line!
        parent::ApplyChanges();

        if (IPS_GetKernelRunlevel() !== KR_READY) {
            return;
        }

        // register Webhook
        $this->RegisterWebhook('/hook/INSTAR' . $this->InstanceID);

        $this->ValidateConfiguration();

    }

    /**
     * Die folgenden Funktionen stehen automatisch zur Verfügung, wenn das Modul über die "Module Control" eingefügt wurden.
     * Die Funktionen werden, mit dem selbst eingerichteten Prefix, in PHP und JSON-RPC wiefolgt zur Verfügung gestellt:.
     */
    private function ValidateConfiguration()
    {
        $host             = $this->ReadPropertyString('Host');
        $port             = $this->ReadPropertyInteger('Port');
        $user             = $this->ReadPropertyString('User');
        $password         = $this->ReadPropertyString('Password');
        $model            = $this->ReadPropertyInteger('model_type');
        $webhook_username = $this->ReadAttributeString('as_username_2');
        $webhook_password = $this->ReadAttributeString('as_password_2');

        if ($webhook_username == '' || $webhook_password == '') {
            $this->SetStatus(210);
        }
        if ($model == 0) {
            $this->SetStatus(209); // Please select a camera model
        } else {
            $this->SetAPI($model);
        }

        //IP INSTAR prüfen
        if (!filter_var($host, FILTER_VALIDATE_IP) === false) {
            //IP ok
            $ipcheck = true;
        } else {
            $ipcheck = false;
        }

        //Domain INSTAR prüfen
        if (!$this->is_valid_localdomain($host) === false) {
            //Domain ok
            $domaincheck = true;
        } else {
            $domaincheck = false;
        }

        if ($domaincheck === true || $ipcheck === true) {
            $hostcheck = true;
        } else {
            $hostcheck = false;
            $this->SetStatus(203); //IP Adresse oder Host ist ungültig
        }

        //User und Passwort prüfen
        if ($user == '' || $password == '') {
            $this->SetStatus(205); //Felder dürfen nicht leer sein
        } elseif ($user !== '' && $password !== '' && $hostcheck === true) {
            $MediaID = @IPS_GetObjectIDByIdent('INSTARVideo', $this->InstanceID);
            if ($MediaID === false) {
                $MediaID = IPS_CreateMedia(3);                  // Stream im MedienPool anlegen
                IPS_SetParent($MediaID, $this->InstanceID); // Medienobjekt einsortieren unter der Instanz
                IPS_SetIdent($MediaID, 'INSTARVideo');
                IPS_SetPosition($MediaID, -1);
                IPS_SetName($MediaID, $this->Translate('INSTAR Live Picture')); // Medienobjekt benennen
            }
            $channel = $this->ReadPropertyInteger('MJPEG_Stream');
            $url = 'http://' . $host . ':' . $port . '/mjpegstream.cgi?-chn=' . $channel . '&usr=' . $user . '&pwd=' . $password;
            IPS_SetMediaFile($MediaID, $url, false);    // Image im MedienPool mit Image-Datei verbinden

            // Kategorie prüfen
            $category_snapshot = $this->ReadPropertyInteger('categorysnapshot');
            if ($category_snapshot > 0) {
                $this->SendDebug('INSTAR', 'Kategorie mit ObjektID ' . $category_snapshot . ' gefunden', 0);
            } else {
                $this->SetStatus(208); //category INSTAR snapshot not set
            }

            $ipsversion = $this->GetIPSVersion();

            $this->RegisterProfile('INSTAR.Movement', 'Motion', '', '', 0, 0, 0, 0, VARIABLETYPE_STRING);
            $this->SetupVariable(
                'LastMovement', $this->Translate('Time last movement'), 'INSTAR.Movement', $this->_getPosition(), VARIABLETYPE_STRING, false, true
            );

            if ($ipsversion == 0) {
                //Skript bei Bewegung
                $IDSnapshot = @($this->GetIDForIdent('GetINSTARSnapshot'));
                if ($IDSnapshot === false) {
                    $IDSnapshot =
                        $this->RegisterScript('GetINSTARSnapshot', 'Get INSTAR Snapshot', $this->CreateSnapshotScript(), $this->_getPosition());
                    IPS_SetHidden($IDSnapshot, true);
                    $this->SetSnapshotEvent($IDSnapshot);
                } else {
                    $this->SendDebug('INSTAR', 'INSTAR Snapshot Script mit ' . $IDSnapshot . ' gefunden', 0);
                }
            } else {
                if ($this->GetIDForIdent('LastMovement') > 0) {
                    $this->RegisterMessage($this->GetIDForIdent('LastMovement'), VM_UPDATE);
                    $this->SendDebug('INSTAR', 'Register Message LastMovement', 0);
                }
            }

            //Email
            $emailalert   = $this->ReadPropertyBoolean('activeemail');
            $emailalert2  = $this->ReadPropertyBoolean('activeemail2');
            $emailalert3  = $this->ReadPropertyBoolean('activeemail3');
            $emailalert4  = $this->ReadPropertyBoolean('activeemail4');
            $emailalert5  = $this->ReadPropertyBoolean('activeemail5');
            $emailalert6  = $this->ReadPropertyBoolean('activeemail6');
            $emailalert7  = $this->ReadPropertyBoolean('activeemail7');
            $emailalert8  = $this->ReadPropertyBoolean('activeemail8');
            $emailalert9  = $this->ReadPropertyBoolean('activeemail9');
            $emailalert10 = $this->ReadPropertyBoolean('activeemail10');
            $emailalert11 = $this->ReadPropertyBoolean('activeemail11');
            if ($emailalert) {
                $email = $this->ReadPropertyString('email');
                $this->CheckEmail($email);
            } elseif ($emailalert2) {
                $email = $this->ReadPropertyString('email2');
                $this->CheckEmail($email);
            } elseif ($emailalert3) {
                $email = $this->ReadPropertyString('email3');
                $this->CheckEmail($email);
            } elseif ($emailalert4) {
                $email = $this->ReadPropertyString('email4');
                $this->CheckEmail($email);
            } elseif ($emailalert5) {
                $email = $this->ReadPropertyString('email5');
                $this->CheckEmail($email);
            } elseif ($emailalert6) {
                $email = $this->ReadPropertyString('email6');
                $this->CheckEmail($email);
            } elseif ($emailalert7) {
                $email = $this->ReadPropertyString('email7');
                $this->CheckEmail($email);
            } elseif ($emailalert8) {
                $email = $this->ReadPropertyString('email8');
                $this->CheckEmail($email);
            } elseif ($emailalert9) {
                $email = $this->ReadPropertyString('email9');
                $this->CheckEmail($email);
            } elseif ($emailalert10) {
                $email = $this->ReadPropertyString('email10');
                $this->CheckEmail($email);
            } elseif ($emailalert11) {
                $email = $this->ReadPropertyString('email11');
                $this->CheckEmail($email);
            } else {
                $IDEmail = @($this->GetIDForIdent('SendEmailAlert'));
                if ($ipsversion == 0) {
                    if ($IDEmail > 0) {
                        $this->SetEmailEvent($IDEmail, false);
                    }
                }

            }
            $this->SetupVariables();
           // $this->UpdateSettings();
            // Status Aktiv
            $this->SetStatus(102);
        }
    }

    protected function SetupVariables()
    {
        $this->RegisterProfileAssociation(
            'INSTAR.Control.Continuous', 'Move', '', '', 0, 4, 0, 0, VARIABLETYPE_INTEGER, [
                                           [0, $this->Translate('Left'), '', -1],
                                           [1, $this->Translate('Up'), '', -1],
                                           [2, $this->Translate('Down'), '', -1],
                                           [3, $this->Translate('Right'), '', -1],
                                           [4, $this->Translate('Stop'), '', -1]]
        );
        $this->SetupVariable(
            'Control_Continuous', $this->Translate('Control Continuous'), 'INSTAR.Control.Continuous', $this->_getPosition(), VARIABLETYPE_INTEGER,
            true, true
        );
        $this->RegisterProfileAssociation(
            'INSTAR.Control.Step', 'Move', '', '', 0, 3, 0, 0, VARIABLETYPE_INTEGER, [
                                     [0, $this->Translate('Step Left'), '', -1],
                                     [1, $this->Translate('Step Up'), '', -1],
                                     [2, $this->Translate('Step Down'), '', -1],
                                     [3, $this->Translate('Step Right'), '', -1]]
        );
        $this->SetupVariable(
            'Control_Step', $this->Translate('Control Step'), 'INSTAR.Control.Step', $this->_getPosition(), VARIABLETYPE_INTEGER, true, true
        );
        $this->RegisterProfileAssociation(
            'INSTAR.Control.Scan', 'Move', '', '', 0, 2, 0, 0, VARIABLETYPE_INTEGER, [
                                     [0, $this->Translate('Center'), '', -1],
                                     [1, $this->Translate('Scan Horizontal'), '', -1],
                                     [2, $this->Translate('Scan Vertical'), '', -1]]
        );
        $this->SetupVariable(
            'Control_Scan', $this->Translate('Control Scan'), 'INSTAR.Control.Scan', $this->_getPosition(), VARIABLETYPE_INTEGER, true, true
        );
        $this->RegisterProfileAssociation(
            'INSTAR.Snapshot', 'Camera', '', '', 0, 0, 0, 0, VARIABLETYPE_INTEGER, [
                                 [0, $this->Translate('Save Picture'), '', -1]]
        );

        $this->RegisterProfile('INSTAR.Hue', 'Light', '', '', 0, 127, 1, 0, VARIABLETYPE_INTEGER);
        $this->SetupVariable('hue', $this->Translate('Hue'), 'INSTAR.Hue', $this->_getPosition(), VARIABLETYPE_INTEGER, true);
        $this->SetupVariable(
            'saturation', $this->Translate('Saturation'), '~Intensity.255', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // Saturation (0-255)
        $this->SetupVariable(
            'brightness', $this->Translate('Brightness'), '~Intensity.255', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // Brightness (0-255)
        $this->SetupVariable(
            'contrast', $this->Translate('Contrast'), '~Intensity.255', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // Contrast (0-255)
        $this->SetupVariable(
            'targety', $this->Translate('Exposure'), '~Intensity.255', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); //  Exposure [0-255]
        $this->SetupVariable(
            'noise', $this->Translate('Low light denoising intensity'), '~Intensity.100', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); //  Low light denoising intensity (0-100)
        $this->SetupVariable(
            'gamma', $this->Translate('Gamma'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); //  Gamma 0-3

        $this->SetupVariable(
            'INSTARButtonSnapshot', $this->Translate('Save INSTAR picture'), 'INSTAR.Snapshot', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        );

        $this->SetupVariable('flip', $this->Translate('Flip'), '~Switch', $this->_getPosition(), VARIABLETYPE_BOOLEAN, true);
        $this->SetupVariable('mirror', $this->Translate('Mirror'), '~Switch', $this->_getPosition(), VARIABLETYPE_BOOLEAN, true);

        $this->RegisterProfileAssociation(
            'INSTAR.Scene', 'Image', '', '', 0, 2, 0, 0, VARIABLETYPE_INTEGER, [
                              [0, $this->Translate('Auto'), '', -1],
                              [1, $this->Translate('Indoor'), '', -1],
                              [2, $this->Translate('Outdoor'), '', -1]]
        );
        $this->SetupVariable('scene', $this->Translate('Scene'), 'INSTAR.Scene', $this->_getPosition(), VARIABLETYPE_INTEGER, true);
        $this->RegisterProfileAssociation(
            'INSTAR.IRLED', 'Bulb', '', '', 0, 2, 0, 0, VARIABLETYPE_INTEGER, [
                              [0, $this->Translate('Auto'), '', -1],
                              [1, $this->Translate('On'), '', -1],
                              [2, $this->Translate('Off'), '', -1]]
        );
        $this->SetupVariable('IR_LED', $this->Translate('IR LED'), 'INSTAR.IRLED', $this->_getPosition(), VARIABLETYPE_INTEGER, true, true);

        $this->RegisterProfile('INSTAR.SetPosition', 'Image', '', '', 0, 7, 1, 0, VARIABLETYPE_INTEGER);
        $this->SetupVariable(
            'SetPosition', $this->Translate('Set Position'), 'INSTAR.SetPosition', $this->_getPosition(), VARIABLETYPE_INTEGER, true, true
        ); // (0-7), integer
        $this->RegisterProfile('INSTAR.UnsetPosition', 'Image', '', '', 0, 7, 1, 0, VARIABLETYPE_INTEGER);
        $this->SetupVariable(
            'UnsetPosition', $this->Translate('Unset Position'), 'INSTAR.UnsetPosition', $this->_getPosition(), VARIABLETYPE_INTEGER, true, true
        ); // (0-7), integer

        $this->RegisterProfile('INSTAR.GotoPosition', 'Image', '', '', 0, 7, 1, 0, VARIABLETYPE_INTEGER);
        $this->SetupVariable(
            'GotoPosition', $this->Translate('Go to Position'), 'INSTAR.GotoPosition', $this->_getPosition(), VARIABLETYPE_INTEGER, true, true
        ); // (0-7), integer

        $this->SetupVariable(
            'notification_alarm', $this->Translate('Alarm Notification'), '', $this->_getPosition(), VARIABLETYPE_STRING, false, true
        );

        // Selected Variables
        $this->SetupVariable('model', $this->Translate('Camera Model Identifier'), '', $this->_getPosition(), VARIABLETYPE_STRING, false);
        $this->SetupVariable('hardVersion', $this->Translate('Hardware Version'), '', $this->_getPosition(), VARIABLETYPE_STRING, false);
        $this->SetupVariable('softVersion', $this->Translate('Firmware Version'), '', $this->_getPosition(), VARIABLETYPE_STRING, false);
        $this->SetupVariable('webVersion', $this->Translate('WebUI Version'), '', $this->_getPosition(), VARIABLETYPE_STRING, false);
        $this->SetupVariable('name', $this->Translate('Name'), '', $this->_getPosition(), VARIABLETYPE_STRING, false);
        $this->RegisterProfile('INSTAR.SD_Space_KB', '', '', ' KB', 0, 0, 0, 0, VARIABLETYPE_STRING);
        $this->SetupVariable(
            'sdfreespace', $this->Translate('SD free space'), 'INSTAR.SD_Space_KB', $this->_getPosition(), VARIABLETYPE_STRING, false
        ); // SD free space，KB
        $this->SetupVariable(
            'sdtotalspace', $this->Translate('SD total space'), 'INSTAR.SD_Space_KB', $this->_getPosition(), VARIABLETYPE_STRING, false
        ); // SD total space，KB

        $this->SetupVariable('platformstatus', $this->Translate('Platform Status'), '~Switch', $this->_getPosition(), VARIABLETYPE_BOOLEAN, false);
        $this->SetupVariable(
            'dhcpflag', $this->Translate('DHCP'), '~Switch', $this->_getPosition(), VARIABLETYPE_BOOLEAN, true
        ); // on: (DHCP enabled), off: (DHCP disabled)
        $this->SetupVariable('ip', $this->Translate('LAN IPv4 Address'), '', $this->_getPosition(), VARIABLETYPE_STRING, false); // LAN IPv4 Address
        $this->SetupVariable(
            'netmask', $this->Translate('LAN Subnet Mask'), '', $this->_getPosition(), VARIABLETYPE_STRING, false
        ); // LAN Subnet Mask
        $this->SetupVariable('gateway', $this->Translate('LAN Gateway'), '', $this->_getPosition(), VARIABLETYPE_STRING, false); // LAN Gateway
        $this->RegisterProfileAssociation(
            'INSTAR.DNS_State', '', '', '', 0, 1, 0, 0, VARIABLETYPE_BOOLEAN, [
                                  [false, $this->Translate('manually'), '', -1],
                                  [true, $this->Translate('from DHCP Server'), '', -1]]
        );
        $this->SetupVariable(
            'dnsstat', $this->Translate('Platform Status'), 'INSTAR.DNS_State', $this->_getPosition(), VARIABLETYPE_BOOLEAN, true
        ); // DNS Status: 0 (manually), 1 (from DHCP Server)
        $this->SetupVariable('fdnsip', $this->Translate('Primary DNS'), '', $this->_getPosition(), VARIABLETYPE_STRING, false); // Primary DNS
        $this->SetupVariable('sdnsip', $this->Translate('Secondary DNS'), '', $this->_getPosition(), VARIABLETYPE_STRING, false); // Secondary DNS
        $this->SetupVariable(
            'macaddress', $this->Translate('LAN MAC Address'), '', $this->_getPosition(), VARIABLETYPE_STRING, false
        );  // LAN MAC Address
        // TODO Change var type for LAN
        $this->SetupVariable('networktype', $this->Translate('Network Type'), '', $this->_getPosition(), VARIABLETYPE_STRING, false); // LAN or WLAN
        $this->RegisterProfileAssociation(
            'INSTAR.UPnP', '', '', '', 0, 2, 0, 0, VARIABLETYPE_INTEGER, [
                             [0, $this->Translate('ok'), '', -1],
                             [1, $this->Translate('off'), '', -1],
                             [2, $this->Translate('failed'), '', -1]]
        );
        $this->SetupVariable(
            'upnpstatus', $this->Translate('UPnP service'), 'INSTAR.UPnP', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // UPnP service ok, off, failed
        $this->RegisterProfileAssociation(
            'INSTAR.DDNS_State', '', '', '', 0, 2, 0, 0, VARIABLETYPE_INTEGER, [
                                   [0, $this->Translate('ok'), '', -1],
                                   [1, $this->Translate('off'), '', -1],
                                   [2, $this->Translate('failed'), '', -1]]
        );
        $this->SetupVariable(
            'th3ddnsstatus', $this->Translate('INSTAR 3rd Party DDNS Status'), 'INSTAR.DDNS_State', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // INSTAR 3rd Party DDNS Status ok, off, failed
        $this->SetupVariable('startdate', $this->Translate('Camera Uptime'), '', $this->_getPosition(), VARIABLETYPE_STRING, false); // Camera Uptime
        $this->RegisterProfileAssociation(
            'INSTAR.INSTAR_DDNS_State', '', '', '', 0, 2, 0, 0, VARIABLETYPE_INTEGER, [
                                          [0, $this->Translate('ok'), '', -1],
                                          [1, $this->Translate('off'), '', -1],
                                          [2, $this->Translate('failed'), '', -1]]
        );
        $this->SetupVariable(
            'facddnsstatus', $this->Translate('INSTAR DDNS Status'), 'INSTAR.INSTAR_DDNS_State', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // INSTAR DDNS Status ok, off, failed
        $this->RegisterProfileAssociation(
            'INSTAR.SD_Card_State', '', '', '', 0, 2, 0, 0, VARIABLETYPE_INTEGER, [
                                      [0, $this->Translate('out'), '', -1],
                                      [1, $this->Translate('Ready'), '', -1],
                                      [2, $this->Translate('Read only'), '', -1]]
        );
        $this->SetupVariable(
            'sdstatus', $this->Translate('SD Card Status'), 'INSTAR.SD_Card_State', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        );  // SD Card Status out, Ready, Read only
        $this->SetupVariable('httpport', $this->Translate('HTTP Port'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true);
        $this->SetupVariable('httpsport', $this->Translate('HTTPS Port'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true);
        $this->SetupVariable('rtspport', $this->Translate('RTSP Port'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true);
        $this->SetupVariable('httpport', $this->Translate('HTTP Port'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true);
        $this->SetupVariable('rtsp_aenable', $this->Translate('RTSP Enabled'), '~Switch', $this->_getPosition(), VARIABLETYPE_BOOLEAN, true);
        $this->SetupVariable('rtmpport', $this->Translate('RTMP Port'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true);
        $this->SetupVariable('wf_enable', $this->Translate('WiFi enabled'), '~Switch', $this->_getPosition(), VARIABLETYPE_BOOLEAN, true);
        $this->SetupVariable('wf_ssid', $this->Translate('SSID'), '', $this->_getPosition(), VARIABLETYPE_STRING, false); // SSID (max. 32 Characters)
        $this->RegisterProfileAssociation(
            'INSTAR.WLAN_Auth', '', '', '', 0, 2, 0, 0, VARIABLETYPE_INTEGER, [
                                  [0, $this->Translate('no encryption'), '', -1],
                                  [1, $this->Translate('WEP'), '', -1],
                                  [2, $this->Translate('WPA-PSK'), '', -1],
                                  [3, $this->Translate('WPA2-PSK'), '', -1]]
        );
        $this->SetupVariable(
            'wf_auth', $this->Translate('WiFi Authentification'), 'WLAN_Auth', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // 0 (no encryption), 1 (WEP), 2 (WPA-PSK), 3 (WPA2-PSK)

        $this->SetupVariable(
            'm1_enable', $this->Translate('Zone 1'), '~Switch', $this->_getPosition(), VARIABLETYPE_BOOLEAN, true
        ); // Dis/Enable Alarm Detection Area 1 - 4: [0, 1]
        $this->SetupVariable(
            'm1_x', $this->Translate('X-Axis Offset'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // X-Axis Offset of Alarm Area Origin [0-(1920-w)]
        $this->SetupVariable(
            'm1_y', $this->Translate('Y-Axis Offset'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // Y-Axis Offset of Alarm Area Origin [0-(1080-h)]
        $this->SetupVariable(
            'm1_w', $this->Translate('Alarm Area Width'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // Alarm Area Width [1-1920] Pixel
        $this->SetupVariable(
            'm1_h', $this->Translate('Alarm Area Height'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // Alarm Area Height [1-1080] Pixel
        $this->SetupVariable(
            'm1_sensitivity', $this->Translate('Detection Sensitivity'), '~Intensity.100', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // Detection Sensitivity [1 - 100]
        $this->SetupVariable(
            'm2_enable', $this->Translate('Zone 2'), '~Switch', $this->_getPosition(), VARIABLETYPE_BOOLEAN, true
        ); // Dis/Enable Alarm Detection Area 1 - 4: [0, 1]
        $this->SetupVariable(
            'm2_x', $this->Translate('X-Axis Offset'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // X-Axis Offset of Alarm Area Origin [0-(1920-w)]
        $this->SetupVariable(
            'm2_y', $this->Translate('Y-Axis Offset'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // Y-Axis Offset of Alarm Area Origin [0-(1080-h)]
        $this->SetupVariable(
            'm2_w', $this->Translate('Alarm Area Width'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // Alarm Area Width [1-1920] Pixel
        $this->SetupVariable(
            'm2_h', $this->Translate('Alarm Area Height'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // Alarm Area Height [1-1080] Pixel
        $this->SetupVariable(
            'm2_sensitivity', $this->Translate('Detection Sensitivity'), '~Intensity.100', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // Detection Sensitivity [1 - 100]
        $this->SetupVariable(
            'm3_enable', $this->Translate('Zone 3'), '~Switch', $this->_getPosition(), VARIABLETYPE_BOOLEAN, true
        ); // Dis/Enable Alarm Detection Area 1 - 4: [0, 1]
        $this->SetupVariable(
            'm3_x', $this->Translate('X-Axis Offset'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // X-Axis Offset of Alarm Area Origin [0-(1920-w)]
        $this->SetupVariable(
            'm3_y', $this->Translate('Y-Axis Offset'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // Y-Axis Offset of Alarm Area Origin [0-(1080-h)]
        $this->SetupVariable(
            'm3_w', $this->Translate('Alarm Area Width'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // Alarm Area Width [1-1920] Pixel
        $this->SetupVariable(
            'm3_h', $this->Translate('Alarm Area Height'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // Alarm Area Height [1-1080] Pixel
        $this->SetupVariable(
            'm3_sensitivity', $this->Translate('Detection Sensitivity'), '~Intensity.100', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // Detection Sensitivity [1 - 100]
        $this->SetupVariable(
            'm4_enable', $this->Translate('Zone 4'), '~Switch', $this->_getPosition(), VARIABLETYPE_BOOLEAN, true
        ); // Dis/Enable Alarm Detection Area 1 - 4: [0, 1]
        $this->SetupVariable(
            'm4_x', $this->Translate('X-Axis Offset'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // X-Axis Offset of Alarm Area Origin [0-(1920-w)]
        $this->SetupVariable(
            'm4_y', $this->Translate('Y-Axis Offset'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // Y-Axis Offset of Alarm Area Origin [0-(1080-h)]
        $this->SetupVariable(
            'm4_w', $this->Translate('Alarm Area Width'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // Alarm Area Width [1-1920] Pixel
        $this->SetupVariable(
            'm4_h', $this->Translate('Alarm Area Height'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // Alarm Area Height [1-1080] Pixel
        $this->SetupVariable(
            'm4_sensitivity', $this->Translate('Detection Sensitivity'), '~Intensity.100', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // Detection Sensitivity [1 - 100]
        $this->SetupVariable(
            'wf_key', $this->Translate('WIFI Key'), '', $this->_getPosition(), VARIABLETYPE_STRING, true
        );  // Key max. 63 Characters (Allowed special characters: &='`)
        $this->RegisterProfileAssociation(
            'INSTAR.WLAN_Key_Type', '', '', '', 0, 1, 0, 0, VARIABLETYPE_INTEGER, [
                                      [0, $this->Translate('TKIP'), '', -1],
                                      [1, $this->Translate('AES'), '', -1]]
        );
        $this->SetupVariable(
            'wf_auth', $this->Translate('WiFi Key Type'), 'INSTAR.WLAN_Key_Type', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        ); // Key type 0 (TKIP), 1 (AES)

        $this->SetupVariable(
            'show_1', $this->Translate('Zone 1'), '~Switch', $this->_getPosition(), VARIABLETYPE_BOOLEAN, true
        ); // Dis/Enable Area 1 - 4: [0, 1]
        $this->SetupVariable(
            'show_2', $this->Translate('Zone 2'), '~Switch', $this->_getPosition(), VARIABLETYPE_BOOLEAN, true
        ); // Dis/Enable Area 1 - 4: [0, 1]
        $this->SetupVariable(
            'show_3', $this->Translate('Zone 3'), '~Switch', $this->_getPosition(), VARIABLETYPE_BOOLEAN, true
        ); // Dis/Enable Area 1 - 4: [0, 1]
        $this->SetupVariable(
            'show_4', $this->Translate('Zone 4'), '~Switch', $this->_getPosition(), VARIABLETYPE_BOOLEAN, true
        ); // Dis/Enable Area 1 - 4: [0, 1]
        $this->SetupVariable(
            'color_1', $this->Translate('Color 1'), '~HexColor', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        );
        $this->SetupVariable(
            'color_2', $this->Translate('Color 2'), '~HexColor', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        );
        $this->SetupVariable(
            'color_3', $this->Translate('Color 3'), '~HexColor', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        );
        $this->SetupVariable(
            'color_4', $this->Translate('Color 4'), '~HexColor', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        );
        $this->SetupVariable(
            'x_1', $this->Translate('X Zone 1'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        );
        $this->SetupVariable(
            'x_2', $this->Translate('X Zone 2'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        );
        $this->SetupVariable(
            'x_3', $this->Translate('X Zone 3'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        );
        $this->SetupVariable(
            'x_4', $this->Translate('X Zone 4'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        );
        $this->SetupVariable(
            'y_1', $this->Translate('y Zone 1'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        );
        $this->SetupVariable(
            'y_2', $this->Translate('y Zone 2'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        );
        $this->SetupVariable(
            'y_3', $this->Translate('y Zone 3'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        );
        $this->SetupVariable(
            'y_4', $this->Translate('y Zone 4'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        );
        $this->SetupVariable(
            'w_1', $this->Translate('w Zone 1'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        );
        $this->SetupVariable(
            'w_2', $this->Translate('w Zone 2'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        );
        $this->SetupVariable(
            'w_3', $this->Translate('w Zone 3'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        );
        $this->SetupVariable(
            'w_4', $this->Translate('w Zone 4'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        );
        $this->SetupVariable(
            'h_1', $this->Translate('h Zone 1'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        );
        $this->SetupVariable(
            'h_2', $this->Translate('h Zone 2'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        );
        $this->SetupVariable(
            'h_3', $this->Translate('h Zone 3'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        );
        $this->SetupVariable(
            'h_4', $this->Translate('h Zone 4'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true
        );


        /*
        $this->SetupVariable('httpport', $this->Translate('HTTP Port'), '', $this->_getPosition(), VARIABLETYPE_INTEGER, true);
        $this->SetupVariable('softVersion', $this->Translate('Firmware Version'), '', $this->_getPosition(), VARIABLETYPE_STRING, true);
        */
        /*


        $this->RegisterAttributeInteger('wf_enc', 0);
        $this->RegisterAttributeBoolean('wf_enc_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('wf_mode', 0); // 0 (infra), 1 (ad-hoc)
        $this->RegisterAttributeBoolean('wf_mode_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('our_enable', 0); // 1: INSTAR DDNS enabled, 0: INSTAR DDNS disabled
        $this->RegisterAttributeBoolean('our_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('our_server', ''); // INSTAR DDNS Server Domain
        $this->RegisterAttributeBoolean('our_server_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('our_port', 0); // INSTAR DDNS Server Port
        $this->RegisterAttributeBoolean('our_port_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('our_uname', ''); // Your INSTAR DDNS ID
        $this->RegisterAttributeBoolean('our_uname_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('our_passwd', ''); // Your INSTAR DDNS Password
        $this->RegisterAttributeBoolean('our_passwd_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('our_domain', ''); // Your INSTAR DDNS Address
        $this->RegisterAttributeBoolean('our_domain_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('our_interval', 0); // Update Intervall
        $this->RegisterAttributeBoolean('our_interval_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger(
            'd3th_enable', 0
        ); // 1: 3rd Party DDNS activated / INSTAR DDNS disabled, 0: 3rd Party DDNS deactivated / INSTAR DDNS enabled
        $this->RegisterAttributeBoolean('d3th_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('d3th_service', 0); // 0: DynDNS, 1: NoIP
        $this->RegisterAttributeBoolean('d3th_service_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('d3th_uname', ''); // Your Username
        $this->RegisterAttributeBoolean('d3th_uname_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('d3th_passwd', ''); // Your Password
        $this->RegisterAttributeBoolean('d3th_passwd_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('d3th_domain', ''); // Your 3rd Party DDNS Address
        $this->RegisterAttributeBoolean('d3th_domain_enabled', false); // show Attribute in Webfront

        $this->RegisterPropertyInteger('upm_enable', 1); // 1: UPnP activated, 0: UPnP deactivated
        $this->RegisterAttributeBoolean('volume_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('ov_enable', 1); // 1 ONVIF activated, 0 ONVIF deactivated
        $this->RegisterAttributeBoolean('ov_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ov_port', 0); // ONVIF Port
        $this->RegisterAttributeBoolean('ov_port_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ov_authflag', 0); // 1 ONVIF Login Required, 0: ONVIF Authentication deactivated
        $this->RegisterAttributeBoolean('ov_authflag_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'ov_forbitset', 0
        ); // 0: When the time zone setting allows image parameter settings allow, 1: When the time zone setting disabled, the image parameter settings allow, 2: When the time zone setting allows image parameter settings prohibit, 3: When the time zone setting is prohibited, prohibited image parameter settings
        $this->RegisterAttributeBoolean('ov_forbitset_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ov_subchn', 0); // Use video channel 11, 12 or 13
        $this->RegisterAttributeBoolean('ov_subchn_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ov_snapchn', 0); // Use video channel 11, 12 or 13 for snapshots
        $this->RegisterAttributeBoolean('ov_snapchn_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('volume', 0); // Audio input volume: 1 - 100
        $this->RegisterAttributeBoolean('volume_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('volin_type', 0); // 0: linear input, 1: microphone input
        $this->RegisterAttributeBoolean('volin_type_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aec', 0); // audio encoder: 0, 1
        $this->RegisterAttributeBoolean('aec_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('denoise', 0); // Noise surpression: 0, 1
        $this->RegisterAttributeBoolean('denoise_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ao_volume', 0); // Audio output volume: 1 - 100
        $this->RegisterAttributeBoolean('ao_volume_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('chn', 0); // 1st, 2nd or 3rd audio channel: 1, 2, 3
        $this->RegisterAttributeBoolean('chn_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aeswitch_1', 0); // Audio encode switch on, off: 1, 0
        $this->RegisterAttributeBoolean('aeswitch_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aeswitch_2', 0); // Audio encode switch on, off: 1, 0
        $this->RegisterAttributeBoolean('aeswitch_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aeswitch_3', 0); // Audio encode switch on, off: 1, 0
        $this->RegisterAttributeBoolean('aeswitch_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aeformat', 0); //  Audio encode format g711a: G711A 64Kbps, g726: G726 16Kbps
        $this->RegisterAttributeBoolean('aeformat_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('videomode', 41); //  Resolution CH11=1080p, CH12=320p, CH13=160p
        $this->RegisterAttributeBoolean('videomode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('vinorm', 'P'); //  50Hz(PAL)
        $this->RegisterAttributeBoolean('vinorm_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('wdrmode', 0); //  Hardware Wide Dynamic Range: 0 (off), 1 (active)
        $this->RegisterAttributeBoolean('wdrmode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('profile', 0); //  h.264 encoder 0: baseline, 1: mainprofile
        $this->RegisterAttributeBoolean('profile_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('maxchn', 0); //  Maximum active video channels
        $this->RegisterAttributeBoolean('maxchn_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'bps_1', 2048
        ); //  Bitrate CH11 1080p = 512kbps - 4096kbps, Bitrate CH11 320p = 512kbps - 2048kbps, Bitrate CH11 160p = 90kbps - 512kbps
        $this->RegisterAttributeBoolean('bps_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'bps_2', 2048
        ); //  Bitrate CH11 1080p = 512kbps - 4096kbps, Bitrate CH11 320p = 512kbps - 2048kbps, Bitrate CH11 160p = 90kbps - 512kbps
        $this->RegisterAttributeBoolean('bps_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'bps_3', 2048
        ); //  Bitrate CH11 1080p = 512kbps - 4096kbps, Bitrate CH11 320p = 512kbps - 2048kbps, Bitrate CH11 160p = 90kbps - 512kbps
        $this->RegisterAttributeBoolean('bps_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('fps_1', 25); //  Framerate: PAL：Range [1 ~ 25], NTSC：Range [1 ~ 30]
        $this->RegisterAttributeBoolean('fps_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('fps_2', 25); //  Framerate: PAL：Range [1 ~ 25], NTSC：Range [1 ~ 30]
        $this->RegisterAttributeBoolean('fps_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('fps_3', 25); //  Framerate: PAL：Range [1 ~ 25], NTSC：Range [1 ~ 30]
        $this->RegisterAttributeBoolean('fps_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('gop_1', 40); //  Keyframe Interval: gop Range [10 ~ 150]
        $this->RegisterAttributeBoolean('gop_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('gop_2', 40); //  Keyframe Interval: gop Range [10 ~ 150]
        $this->RegisterAttributeBoolean('gop_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('gop_3', 40); //  Keyframe Interval: gop Range [10 ~ 150]
        $this->RegisterAttributeBoolean('gop_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('brmode_1', 1); //  Video encode control: 0: fixed bit rate, 1: changeable bit rate
        $this->RegisterAttributeBoolean('brmode_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('brmode_2', 1); //  Video encode control: 0: fixed bit rate, 1: changeable bit rate
        $this->RegisterAttributeBoolean('brmode_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('brmode_3', 1); //  Video encode control: 0: fixed bit rate, 1: changeable bit rate
        $this->RegisterAttributeBoolean('brmode_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('imagegrade_1', 1); //  1 (low compression) -6 (high compression)
        $this->RegisterAttributeBoolean('imagegrade_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('imagegrade_2', 1); //  1 (low compression) -6 (high compression)
        $this->RegisterAttributeBoolean('imagegrade_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('imagegrade_3', 1); //  1 (low compression) -6 (high compression)
        $this->RegisterAttributeBoolean('imagegrade_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('width_1', 1920); //  Video width
        $this->RegisterAttributeBoolean('width_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('width_2', 1920); //  Video width
        $this->RegisterAttributeBoolean('width_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('width_3', 1920); //  Video width
        $this->RegisterAttributeBoolean('width_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('height_1', 1080); //  Video height
        $this->RegisterAttributeBoolean('height_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('height_2', 1080); //  Video height
        $this->RegisterAttributeBoolean('height_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('height_3', 1080); //  Video height
        $this->RegisterAttributeBoolean('height_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('display_mode', 0); //  Current 0: black and white mode 1: color mode
        $this->RegisterAttributeBoolean('display_mode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('wdr', 'on'); //  Software Wide Dynamic Range Mode: [on, off]
        $this->RegisterAttributeBoolean('wdr_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('night', 'off'); //  Night mode 0 (inactive) off, 1 (active) on
        $this->RegisterAttributeBoolean('night_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('shutter', 0); //  Shutter Speed [0 - 65535]
        $this->RegisterAttributeBoolean('shutter_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('gc', 0); //  Night illumination, value Range 0=auto, [1-255]=manual
        $this->RegisterAttributeBoolean('gc_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ae', 0); //  Minimum exposure, range 0-65535
        $this->RegisterAttributeBoolean('ae_enabled', false); // show Attribute in Webfront







        $this->RegisterAttributeInteger('aemode', 0); //  Auto-Exposure mode, the range: 0 Automatic, 1 Indoor, 2 Outdoor
        $this->RegisterAttributeBoolean('aemode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('imgmode', 0); //  Image priority mode: 0: Frame rate priority, 1: Illumination priority
        $this->RegisterAttributeBoolean('imgmode_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('wdrauto', 0); //  Hardware Wide Dynamic Range 0 (Auto), 1 (Manual)
        $this->RegisterAttributeBoolean('wdrauto_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('wdrautval', 0); //  Auto WDR Strength [0-2]
        $this->RegisterAttributeBoolean('wdrautval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('wdrmanval', 0); //  Manual WDR Strength [0-255]
        $this->RegisterAttributeBoolean('wdrmanval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('d3noauto', 0); //  3D Noise Reduction Mode: 0 (auto), 1 (manual)
        $this->RegisterAttributeBoolean('d3noauto_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('d3noval', 0); //  3D Noise Reduction Strength: [0-255]
        $this->RegisterAttributeBoolean('d3noval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('gcauto', 0); //  Signal Gain: 0 (auto), 1 (manual)
        $this->RegisterAttributeBoolean('gcauto_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('gcval', 0); //  Gain Multiplier: [0-255]
        $this->RegisterAttributeBoolean('gcval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('aemodeex', 'Highlight'); // Exposure Mode: Highlight (Exposure) priority, Lowlight (Framerate) priority
        $this->RegisterAttributeBoolean('aemodeex_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aelowval', 0); //  Lowlight Intensity [0-255]
        $this->RegisterAttributeBoolean('aelowval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aehighval', 0); //  Highlight Intensity [0-255]
        $this->RegisterAttributeBoolean('aehighval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aeratio', 0); //  Length Exposure Ratio [0-100]
        $this->RegisterAttributeBoolean('aeratio_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ldc_enable', 0); //  Image Distortion Correction: 0 (disabled), 1 (enabled)
        $this->RegisterAttributeBoolean('ldc_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ldc_xoffset', 0); //  Horizontal Image Offset
        $this->RegisterAttributeBoolean('ldc_xoffset_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ldc_yoffset', 0); //  Vertical Image Offset
        $this->RegisterAttributeBoolean('ldc_yoffset_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ldc_ratio', 0); //  Distortion Correction [0-511]
        $this->RegisterAttributeBoolean('ldc_ratio_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('region', 1); //  OSD time zone, 1: OSD Name region
        $this->RegisterAttributeBoolean('region_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('show', 0); //  0 (hidden), 1 (displayed)
        $this->RegisterAttributeBoolean('show_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('place', 0); //  0: top, 1: bottom
        $this->RegisterAttributeBoolean('place_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('x_region', 0); //  OSD region x coordinate
        $this->RegisterAttributeBoolean('x_region_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('y_region', 0); // OSD region y coordinate
        $this->RegisterAttributeBoolean('y_region_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('name_region', ''); //  Region 0="YYYY-MM-DD hh:mm:ss", region="Camera Name"
        $this->RegisterAttributeBoolean('name_region_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('privacy_region', 1); // Privacy Mask [1-4]
        $this->RegisterAttributeBoolean('privacy_region_enabled', false); // show Attribute in Webfront

        // Features
        $this->RegisterAttributeString('ma_server', ''); // SMTP Server Address e.g. smtp.strato.de
        $this->RegisterAttributeBoolean('ma_server_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ma_port', 25); // SMTP Server Port e.g. 25, 587 (TLS) or 465 (SSL)
        $this->RegisterAttributeBoolean('ma_port_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ma_ssl', 25); // SSL Encryption 0 (Disabled), 1 (SSL), 2 (TLS) or 3 (STARTTLS)
        $this->RegisterAttributeBoolean('ma_ssl_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ma_logintype', 1); // Enable (1) or Disable (3) Authentication
        $this->RegisterAttributeBoolean('ma_logintype_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ma_username', ''); // SMTP Server Username
        $this->RegisterAttributeBoolean('ma_username_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ma_password', ''); // SMTP Server Password
        $this->RegisterAttributeBoolean('ma_password_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ma_from', ''); // Sender Email Address
        $this->RegisterAttributeBoolean('ma_from_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ma_to', ''); // Receiver Email Address
        $this->RegisterAttributeBoolean('ma_to_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ma_subject', ''); // Mail Subject Line
        $this->RegisterAttributeBoolean('ma_subject_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ma_text', ''); // Mail Content
        $this->RegisterAttributeBoolean('ma_text_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ft_server', ''); // FTP Server Address
        $this->RegisterAttributeBoolean('ft_server_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ft_port', 25); // FTP Server Port
        $this->RegisterAttributeBoolean('ft_port_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ft_username', ''); // FTP Username
        $this->RegisterAttributeBoolean('ft_username_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ft_password', ''); // FTP Password
        $this->RegisterAttributeBoolean('ft_password_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ft_mode', 0); // FTP Mode Port (0) or Passive (1)
        $this->RegisterAttributeBoolean('ft_mode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ft_dirname', ''); // FTP Directory
        $this->RegisterAttributeBoolean('ft_dirname_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ft_autocreatedir', 0); // Automatically create the directory 0 (no), 1 (yes)
        $this->RegisterAttributeBoolean('ft_autocreatedir_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ft_dirmode', 0); // 0 (Create a new Folder every Day), 1 (All Files in One Directory)
        $this->RegisterAttributeBoolean('ft_dirmode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ft_ssl', 0); // FTPS Encryption - 0：None, 1：SSL, 2: TLS
        $this->RegisterAttributeBoolean('ft_ssl_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('infraredstat', ''); // IR LED Status - auto, close (deactivated)
        $this->RegisterAttributeBoolean('infraredstat_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('panspeed', 0); // fast (0) - slow (2)
        $this->RegisterAttributeBoolean('panspeed_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('tiltspeed', 0); // fast (0) - slow (2)
        $this->RegisterAttributeBoolean('tiltspeed_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('panscan', 1); // [1-50] - Number of hscans
        $this->RegisterAttributeBoolean('panscan_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('tiltscan', 1); // [1-50] - Number of vscans
        $this->RegisterAttributeBoolean('tiltscan_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('movehome', 'on'); // [on, off] - Go to Center or Postion [initpresetindex] after Restart
        $this->RegisterAttributeBoolean('movehome_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ptzalarmmask', 'on'); // [on, off] - Deactivate Motion Detection during Pan&Tilt
        $this->RegisterAttributeBoolean('ptzalarmmask_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('selfdet', ''); // De/Activate Calibration (Required for Preset Postions and PTZ Tour)
        $this->RegisterAttributeBoolean('selfdet_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('alarmpresetindex', 0); // [1-8]; - Alarmposition
        $this->RegisterAttributeBoolean('alarmpresetindex_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('initpresetindex', 0); // [1-8]; - Position Camera goes to after Restart
        $this->RegisterAttributeBoolean('initpresetindex_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('md_preset_switch', 'on'); // Go to [alarmpresetindex] (Alarm Position) at Alarm Event - [on, off]
        $this->RegisterAttributeBoolean('md_preset_switch_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('timerpreset_enable', 0); // De/Activate Park Position - [0, 1]
        $this->RegisterAttributeBoolean('timerpreset_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('timerpreset_index', 1); // Select Park Position - [1 - 8]
        $this->RegisterAttributeBoolean('timerpreset_index_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('timerpreset_interval', 30); // Time before going back to Park Position in seconds - [30 - 900]
        $this->RegisterAttributeBoolean('timerpreset_interval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('admin_value46', 46); // De/Activate One-Step Pan&Tilt Control - [0, 1]
        $this->RegisterAttributeBoolean('admin_value46_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('tour_enable', 0); // De/Activate PTZ Tour [0, 1]
        $this->RegisterAttributeBoolean('tour_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('tour_times', 1); // Number of Rounds [1 - 50]
        $this->RegisterAttributeBoolean('tour_times_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('tour_index', 1); // Set Tour Positions to Preset Position [1-8] / [-1] to deactivate Tour Position
        $this->RegisterAttributeBoolean('tour_index_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('tour_interval', 60); // Set Pause when Tour Position is reached in seconds [60-43200]
        $this->RegisterAttributeBoolean('tour_interval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('light1_enable', 'on'); // WiFi Status LED - [on, off]
        $this->RegisterAttributeBoolean('light1_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('light2_enable', 'on'); // Power LED - [on, off]
        $this->RegisterAttributeBoolean('light2_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('admin_value44', 44); // Recording Length in Seconds [60 - 3600] / Set [0] to Deactivate File Splitting
        $this->RegisterAttributeBoolean('admin_value44_enabled', false); // show Attribute in Webfront
        // Alarm Menu
        $this->RegisterAttributeString('emailsnap', 'on'); // E-mail Alarm / Send Snapshot
        $this->RegisterAttributeBoolean('emailsnap_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('snap', 'on'); // Save Snapshot to SD
        $this->RegisterAttributeBoolean('snap_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('record', 'on'); // Save Video to SD
        $this->RegisterAttributeBoolean('record_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ftprec', 'on'); // Send Video to FTP Server
        $this->RegisterAttributeBoolean('ftprec_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('relay', 'on'); // Alarm Out Relay
        $this->RegisterAttributeBoolean('relay_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ftpsnap', 'on'); // Send Snapshot to FTP Server
        $this->RegisterAttributeBoolean('ftpsnap_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('sound', 'on'); // Audio Alarm Signal
        $this->RegisterAttributeBoolean('sound_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('type', 'on'); // Link Alarm Areas and Alarm-Input
        $this->RegisterAttributeBoolean('type_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aa_enable', 0); // De/Activate Audio Detection [0, 1]
        $this->RegisterAttributeBoolean('aa_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aa_value', 10); // Sensitivity [10 - 100]
        $this->RegisterAttributeBoolean('aa_value_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aa_time', 0); // Minimum Audio Signal Length Threshold [0 - 10]
        $this->RegisterAttributeBoolean('aa_time_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('io_enable', 0); // De/Activate Alarm Input [0, 1]
        $this->RegisterAttributeBoolean('io_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('io_flag', 0); // Circuit Nomally Closed N.C. [0] or Normally Open N.O. [1]
        $this->RegisterAttributeBoolean('io_flag_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('pir_enable', 0); // De/Activate PIR Sensor [0, 1]
        $this->RegisterAttributeBoolean('pir_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('pir_flag', 0); // Circuit Nomally Closed N.C. [0] or Normally Open N.O. [1]
        $this->RegisterAttributeBoolean('pir_flag_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('snap_chn', 11); // Set Snapshot Resolution to Video Channel [11, 12, 13]
        $this->RegisterAttributeBoolean('snap_chn_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('snap_name', ''); // Fixed File Name for All Alarm Snapshots (leave empty for auto-name by time stamp)
        $this->RegisterAttributeBoolean('snap_name_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'snap_timer_name', ''
        ); // Fixed File Name for All Photoseries Snapshots (leave empty for auto-name by time stamp)
        $this->RegisterAttributeBoolean('snap_timer_name_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'snap_name_mode', 0
        ); // Set Filename to [0] time stamp, or [1] fixed file name set snapname and snaptimer_name
        $this->RegisterAttributeBoolean('snap_name_mode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('snap_count', 1); // Number of Snapshot saved to SD Card per Alarm Event [1-15]
        $this->RegisterAttributeBoolean('snap_count_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ftp_snap_count', 1); // Number of Snapshot send to FTP Server per Alarm Event [1-15]
        $this->RegisterAttributeBoolean('ftp_snap_count_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('email_snap_count', 1); // Number of Snapshot send by Email per Alarm Event [1-15]
        $this->RegisterAttributeBoolean('email_snap_count_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('admin17', 17); // admin17
        $this->RegisterAttributeBoolean('admin17_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m1_enable', 0); // Dis/Enable Alarm Detection Area 1 - 4: [0, 1]
        $this->RegisterAttributeBoolean('m1_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m2_enable', 0); // Dis/Enable Alarm Detection Area 1 - 4: [0, 1]
        $this->RegisterAttributeBoolean('m2_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m3_enable', 0); // Dis/Enable Alarm Detection Area 1 - 4: [0, 1]
        $this->RegisterAttributeBoolean('m3_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m4_enable', 0); // Dis/Enable Alarm Detection Area 1 - 4: [0, 1]
        $this->RegisterAttributeBoolean('m4_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m1_x', 0); // X-Axis Offset of Alarm Area Origin [0-(1920-w)]
        $this->RegisterAttributeBoolean('m1_x_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m2_x', 0); // X-Axis Offset of Alarm Area Origin [0-(1920-w)]
        $this->RegisterAttributeBoolean('m2_x_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m3_x', 0); // X-Axis Offset of Alarm Area Origin [0-(1920-w)]
        $this->RegisterAttributeBoolean('m3_x_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m4_x', 0); // X-Axis Offset of Alarm Area Origin [0-(1920-w)]
        $this->RegisterAttributeBoolean('m4_x_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m1_y', 0); // Y-Axis Offset of Alarm Area Origin [0-(1080-h)]
        $this->RegisterAttributeBoolean('m1_y_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m2_y', 0); // Y-Axis Offset of Alarm Area Origin [0-(1080-h)]
        $this->RegisterAttributeBoolean('m2_y_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m3_y', 0); // Y-Axis Offset of Alarm Area Origin [0-(1080-h)]
        $this->RegisterAttributeBoolean('m3_y_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m4_y', 0); // Y-Axis Offset of Alarm Area Origin [0-(1080-h)]
        $this->RegisterAttributeBoolean('m4_y_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m1_w', 0); // Alarm Area Width [1-1920] Pixel
        $this->RegisterAttributeBoolean('m1_w_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m2_w', 0); // Alarm Area Width [1-1920] Pixel
        $this->RegisterAttributeBoolean('m2_w_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m3_w', 0); // Alarm Area Width [1-1920] Pixel
        $this->RegisterAttributeBoolean('m3_w_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m4_w', 0); // Alarm Area Width [1-1920] Pixel
        $this->RegisterAttributeBoolean('m4_w_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m1_h', 0); // Alarm Area Height [1-1080] Pixel
        $this->RegisterAttributeBoolean('m1_h_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m2_h', 0); // Alarm Area Height [1-1080] Pixel
        $this->RegisterAttributeBoolean('m2_h_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m3_h', 0); // Alarm Area Height [1-1080] Pixel
        $this->RegisterAttributeBoolean('m3_h_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m4_h', 0); // Alarm Area Height [1-1080] Pixel
        $this->RegisterAttributeBoolean('m4_h_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m1_sensitivity', 0); // Detection Sensitivity [1 - 100]
        $this->RegisterAttributeBoolean('m1_sensitivity_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m2_sensitivity', 0); // Detection Sensitivity [1 - 100]
        $this->RegisterAttributeBoolean('m2_sensitivity_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m3_sensitivity', 0); // Detection Sensitivity [1 - 100]
        $this->RegisterAttributeBoolean('m3_sensitivity_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m4_sensitivity', 0); // Detection Sensitivity [1 - 100]
        $this->RegisterAttributeBoolean('m4_sensitivity_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m1_threshold', 0); // Detection Threshold (not active)
        $this->RegisterAttributeBoolean('m1_threshold_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m2_threshold', 0); // Detection Threshold (not active)
        $this->RegisterAttributeBoolean('m2_threshold_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m3_threshold', 0); // Detection Threshold (not active)
        $this->RegisterAttributeBoolean('m3_threshold_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m4_threshold', 0); // Detection Threshold (not active)
        $this->RegisterAttributeBoolean('m4_threshold_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'as_week0', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('as_week0_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'as_week1', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('as_week1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'as_week2', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('as_week2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'as_week3', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('as_week3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'as_week4', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('as_week4_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'as_week5', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('as_week5_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'as_week6', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('as_week6_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_0', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_0_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_1', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_2', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_3', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_4', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_4_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_5', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_5_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_6', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_6_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_7', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_7_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_8', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_8_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_9', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_9_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_10', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_10_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_11', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_11_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_12', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_12_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_13', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_13_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_14', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_14_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_15', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_15_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_16', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_16_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_17', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_17_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_18', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_18_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_19', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_19_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_server', ''); // Address of the receiving Server (e.g. Home Automation Server) [IPv4 Address]
        $this->RegisterAttributeBoolean('as_server_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_port', 0); // Port of the receiving Server [1-65536]
        $this->RegisterAttributeBoolean('as_port_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_auth', 0); // Authentication required [0, 1]
        $this->RegisterAttributeBoolean('as_auth_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_username', ''); // Alarmserver Username
        $this->RegisterAttributeBoolean('as_username_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_password', ''); // Alarmserver Password
        $this->RegisterAttributeBoolean('as_password_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_path', ''); // URL Path
        $this->RegisterAttributeBoolean('as_path_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_area', ''); // Send Query when Motion is Detected
        $this->RegisterAttributeBoolean('as_area_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_io', ''); // Send Query when Alarm Input is Triggered
        $this->RegisterAttributeBoolean('as_io_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_audio', ''); // Send Query when Audio Alarm is Triggered
        $this->RegisterAttributeBoolean('as_audio_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_areaio', ''); // Send Query when Motion is Detected and Input is Triggered
        $this->RegisterAttributeBoolean('as_areaio_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_activequery', ''); // Append Alarm Trigger to Query
        $this->RegisterAttributeBoolean('as_activequery_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_query1', ''); // Activate Sending optional Parameter 1
        $this->RegisterAttributeBoolean('as_query1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryattr1', ''); // Command 1 Attribute
        $this->RegisterAttributeBoolean('as_queryattr1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryval1', ''); // Command 1 Value
        $this->RegisterAttributeBoolean('as_queryval1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_query2', ''); // Activate Sending optional Parameter 2
        $this->RegisterAttributeBoolean('as_query2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryattr2', ''); // Command 2 Attribute
        $this->RegisterAttributeBoolean('as_queryattr2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryval2', ''); // Command 2 Value
        $this->RegisterAttributeBoolean('as_queryval2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_query3', ''); // Activate Sending optional Parameter 3
        $this->RegisterAttributeBoolean('as_query3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryattr3', ''); // Command 3 Attribute
        $this->RegisterAttributeBoolean('as_queryattr3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryval3', ''); // Command 3 Value
        $this->RegisterAttributeBoolean('as_queryval3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('md_server2_switch', 'on'); // De/Activate Alarm Server2 [off, on]
        $this->RegisterAttributeBoolean('md_server2_switch_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_server_2', ''); // Address of the receiving Server (e.g. Home Automation Server) [IPv4 Address]
        $this->RegisterAttributeBoolean('as_server_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_port_2', 0); // Port of the receiving Server [1-65536]
        $this->RegisterAttributeBoolean('as_port_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_auth_2', 0); // Authentication required [0, 1]
        $this->RegisterAttributeBoolean('as_auth_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_username_2', ''); // Alarmserver Username
        $this->RegisterAttributeBoolean('as_username_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_password_2', ''); // Alarmserver Password
        $this->RegisterAttributeBoolean('as_password_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_path_2', ''); // URL Path
        $this->RegisterAttributeBoolean('as_path_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_area_2', ''); // Send Query when Motion is Detected
        $this->RegisterAttributeBoolean('as_area_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_io_2', ''); // Send Query when Alarm Input is Triggered
        $this->RegisterAttributeBoolean('as_io_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_audio_2', ''); // Send Query when Audio Alarm is Triggered
        $this->RegisterAttributeBoolean('as_audio_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_areaio_2', ''); // Send Query when Motion is Detected and Input is Triggered
        $this->RegisterAttributeBoolean('as_areaio_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_activequery_2', ''); // Append Alarm Trigger to Query
        $this->RegisterAttributeBoolean('as_activequery_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_query1_2', ''); // Activate Sending optional Parameter 1
        $this->RegisterAttributeBoolean('as_query1_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryattr1_2', ''); // Command 1 Attribute
        $this->RegisterAttributeBoolean('as_queryattr1_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryval1_2', ''); // Command 1 Value
        $this->RegisterAttributeBoolean('as_queryval1_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_query2_2', ''); // Activate Sending optional Parameter 2
        $this->RegisterAttributeBoolean('as_query2_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryattr2_2', ''); // Command 2 Attribute
        $this->RegisterAttributeBoolean('as_queryattr2_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryval2_2', ''); // Command 2 Value
        $this->RegisterAttributeBoolean('as_queryval2_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_query3_2', ''); // Activate Sending optional Parameter 3
        $this->RegisterAttributeBoolean('as_query3_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryattr3_2', ''); // Command 3 Attribute
        $this->RegisterAttributeBoolean('as_queryattr3_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryval3_2', ''); // Command 3 Value
        $this->RegisterAttributeBoolean('as_queryval3_2_enabled', false); // show Attribute in Webfront
        // Recording Menu
        $this->RegisterAttributeInteger('as_snap_enable', 0); // Dis/Enable snapshot to SD card： [0, 1]
        $this->RegisterAttributeBoolean('as_snap_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_snap_interval', 1); // Time interval between shots in seconds [1-86400]
        $this->RegisterAttributeBoolean('as_snap_interval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_email_enable', 0); // DDis/Enable snapshot to Email： [0, 1]
        $this->RegisterAttributeBoolean('as_email_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_email_interval', 1); // Time interval between shots in seconds [1-86400]
        $this->RegisterAttributeBoolean('as_email_interval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_ftp_enable', 0); // Dis/Enable snapshot to FTP Server： [0, 1]
        $this->RegisterAttributeBoolean('as_ftp_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_ftp_interval', 1); // Time interval between shots in seconds [1-86400]
        $this->RegisterAttributeBoolean('as_ftp_interval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_cloud_enable', 0); // Dis/Enable snapshot to INSTAR Cloud Server： [0, 1]
        $this->RegisterAttributeBoolean('as_cloud_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_cloud_interval', 1); // Time interval between shots in seconds [1-86400]
        $this->RegisterAttributeBoolean('as_cloud_interval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'rt_week0', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('rt_week0_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'rt_week1', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('rt_week1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'rt_week2', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('rt_week2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'rt_week3', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('rt_week3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'rt_week4', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('rt_week4_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'rt_week5', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('rt_week5_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'rt_week6', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('rt_week6_enabled', false); // show Attribute in Webfront
        //  Video Tasks
        $this->RegisterAttributeInteger('planrec_enable', 1); // Dis/Enable Recording to SD card： [0, 1]
        $this->RegisterAttributeBoolean('planrec_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('planrec_chn', 11); // Record Kamera Channel [11, 12, 13]
        $this->RegisterAttributeBoolean('planrec_chn_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('planrec_time', 1); // Recoding File Length (15-900seconds)
        $this->RegisterAttributeBoolean('planrec_time_enabled', false); // show Attribute in Webfront
        // System
        $this->RegisterAttributeString('lanmac', ''); // MAC Address of the LAN Interface
        $this->RegisterAttributeBoolean('lanmac_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('wifimac', ''); // MAC Address of the WLAN Interface
        $this->RegisterAttributeBoolean('wifimac_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('internetip', ''); // Get Wide Area Network Address
        $this->RegisterAttributeBoolean('internetip_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('at_username0', ''); // Username for User 1
        $this->RegisterAttributeBoolean('at_username0_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('at_password0', ''); // Password for User 1
        $this->RegisterAttributeBoolean('at_password0_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('at_authlevel0', 3); // User Authorisation: admin/user/guest [15, 3, 1]
        $this->RegisterAttributeBoolean('at_authlevel0_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('at_enable0', 1); // De/Activate [0, 1]
        $this->RegisterAttributeBoolean('at_enable0_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('at_username1', ''); // Username for User 2
        $this->RegisterAttributeBoolean('at_username1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('at_password1', ''); // Password for User 2
        $this->RegisterAttributeBoolean('at_password1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('at_authlevel1', 3); // User Authorisation: admin/user/guest [15, 3, 1]
        $this->RegisterAttributeBoolean('at_authlevel1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('at_enable1', 1); // De/Activate [0, 1]
        $this->RegisterAttributeBoolean('at_enable1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('at_username2', ''); // Username for User 3
        $this->RegisterAttributeBoolean('at_username2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('at_password2', ''); // Password for User 3
        $this->RegisterAttributeBoolean('at_password2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('at_authlevel2', 3); // User Authorisation: admin/user/guest [15, 3, 1]
        $this->RegisterAttributeBoolean('at_authlevel2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('at_enable2', 1); // De/Activate [0, 1]
        $this->RegisterAttributeBoolean('at_enable2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('time', ''); // Camera Time
        $this->RegisterAttributeBoolean('time_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('timeZone', ''); // Cameras Time Zone e.g.[Europe%2FAmsterdam]
        $this->RegisterAttributeBoolean('timeZone_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('dstmode', 'on'); // De/Activate Daylight Saving Time [off, on]
        $this->RegisterAttributeBoolean('dstmode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ntpenable', 1); // De/Activate NTP Time Adjustment [0, 1]
        $this->RegisterAttributeBoolean('ntpenable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ntpserver', ''); // NTP Server Address
        $this->RegisterAttributeBoolean('ntpserver_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ntpinterval', 1); // NTP Sync Interval in Hours [1 - 12]
        $this->RegisterAttributeBoolean('ntpinterval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('guest_value11', 'de'); // UI Language Selector [de, en, fr, cn]
        $this->RegisterAttributeBoolean('guest_value11_enabled', false); // show Attribute in Webfront
         */
    }

    /** Variable anlegen / löschen
     *
     * @param $ident
     * @param $name
     * @param $profile
     * @param $position
     * @param $vartype
     * @param $visible
     *
     * @return bool|int
     */
    protected function SetupVariable($ident, $name, $profile, $position, $vartype, $enableaction, $visible = false)
    {
        $objid = false;
        if ($visible) {
            $this->SendDebug('INSTAR Varibale:', 'Variable with Ident ' . $ident . ' is visible', 0);
        } else {
            $visible = $this->ReadAttributeBoolean($ident . '_enabled');
            $this->SendDebug('INSTAR Varibale:', 'Variable with Ident ' . $ident . ' is shown' . print_r($visible, true), 0);
        }
        if ($visible == true) {
            switch ($vartype) {
                case VARIABLETYPE_BOOLEAN:
                    $objid = $this->RegisterVariableBoolean($ident, $name, $profile, $position);
                    $key   = array_search($ident, $this->NoAttributes);
                    if ($key > 0) {
                        // Fix Variable without Attribute
                    } else {
                        if ($ident == 'flip' || $ident == 'mirror') {
                            $value = $this->ReadAttributeString($ident);
                            if ($value == 'on') {
                                $value = true;
                            } else {
                                $value = false;
                            }
                        } else {
                            $key = array_search($ident, $this->BooleanAttributes);
                            if ($key > 0) {
                                $value = boolval($this->ReadAttributeInteger($ident));
                            } else {
                                $value = $this->ReadAttributeBoolean($ident);
                            }
                        }
                        $this->SetValue($ident, $value);
                    }
                    break;
                case VARIABLETYPE_INTEGER:
                    $objid = $this->RegisterVariableInteger($ident, $name, $profile, $position);
                    $key   = array_search($ident, $this->NoAttributes);
                    if ($key > 0) {
                        // Fix Variable without Attribute
                    } elseif ($ident == 'scene') {
                        $value = $this->ReadAttributeString($ident);
                        if ($value == 'Auto') {
                            $value = 0;
                        } elseif ($value == 'On') {
                            $value = 1;
                        } else {
                            $value = 2;
                        }
                        $this->SetValue($ident, $value);
                    } elseif ($ident == 'th3ddnsstatus') {
                        $value = $this->ReadAttributeString($ident);
                        if ($value == 'ok') {
                            $value = 0;
                        } elseif ($value == 'off') {
                            $value = 1;
                        } else {
                            $value = 2;
                        }
                        $this->SetValue($ident, $value);
                    } else {
                        $value = $this->ReadAttributeInteger($ident);
                        $this->SetValue($ident, $value);
                    }
                    break;
                case VARIABLETYPE_FLOAT:
                    $objid = $this->RegisterVariableFloat($ident, $name, $profile, $position);
                    break;
                case VARIABLETYPE_STRING:
                    $objid = $this->RegisterVariableString($ident, $name, $profile, $position);
                    $key   = array_search($ident, $this->NoAttributes);
                    if ($key > 0) {
                        // Fix Variable without Attribute
                    } else {
                        $value = $this->ReadAttributeString($ident);
                        $this->SetValue($ident, $value);
                    }
                    break;
            }
            if ($enableaction) {
                $this->EnableAction($ident);
            }
        } else {
            $objid = @$this->GetIDForIdent($ident);
            if ($objid > 0) {
                $this->UnregisterVariable($ident);
            }
        }
        return $objid;
    }

    public function SetWebFrontVariable($ident, $value)
    {
        $this->WriteAttributeBoolean($ident, $value);
        $this->SetupVariables();
    }

    protected function GetAPIParameters($cameratype)
    {
        $API_Cameras = [];

        $API_Cameras[self::IN_9020_Full_HD] = [
            'model'          => true,
            'hardVersion'    => true,
            'softVersion'    => true,
            'webVersion'     => true,
            'name'           => true,
            'sdfreespace'    => true,
            'sdtotalspace'   => true,
            'platformstatus' => true,

            'dhcpflag'      => true,
            'ip'            => true,
            'netmask'       => true,
            'gateway'       => true,
            'dnsstat'       => true,
            'fdnsip'        => true,
            'sdnsip'        => true,
            'macaddress'    => true,
            'networktype'   => true,
            'upnpstatus'    => true,
            'th3ddnsstatus' => true,];

        /*


        $this->RegisterAttributeString('startdate', ''); // Camera Uptime

        $this->RegisterAttributeString('facddnsstatus', 'ok'); // INSTAR DDNS Status ok, off, failed

        $this->RegisterAttributeString('sdstatus', ''); // SD Card Status out, Ready, Read only


        $this->RegisterAttributeInteger('httpport', 0);
        $this->RegisterAttributeBoolean('httpport_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('httpsport', 0);
        $this->RegisterAttributeBoolean('httpsport_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('rtspport', 0);
        $this->RegisterAttributeBoolean('rtspport_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('rtsp_aenable', 0); // 1: RTSP Stream needs Authentication, 0: Authentication deactivated
        $this->RegisterAttributeBoolean('rtsp_aenable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('rtmpport', 0);
        $this->RegisterAttributeBoolean('rtmpport_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('wf_enable', 0); // 1 (WiFi enabled), 0 (WiFi disabled)
        $this->RegisterAttributeBoolean('wf_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('wf_ssid', ''); // SSID (max. 32 Characters)
        $this->RegisterAttributeBoolean('wf_ssid_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('wf_auth', 0); // 0 (no encryption), 1 (WEP), 2 (WPA-PSK), 3 (WPA2-PSK)
        $this->RegisterAttributeBoolean('wf_auth_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('wf_key', ''); // Key max. 63 Characters (Allowed special characters: &='`)
        $this->RegisterAttributeBoolean('wf_key_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('wf_enc', 0); // Key type 0 (TKIP), 1 (AES)
        $this->RegisterAttributeBoolean('wf_enc_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('wf_mode', 0); // 0 (infra), 1 (ad-hoc)
        $this->RegisterAttributeBoolean('wf_mode_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('our_enable', 0); // 1: INSTAR DDNS enabled, 0: INSTAR DDNS disabled
        $this->RegisterAttributeBoolean('our_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('our_server', ''); // INSTAR DDNS Server Domain
        $this->RegisterAttributeBoolean('our_server_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('our_port', 0); // INSTAR DDNS Server Port
        $this->RegisterAttributeBoolean('our_port_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('our_uname', ''); // Your INSTAR DDNS ID
        $this->RegisterAttributeBoolean('our_uname_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('our_passwd', ''); // Your INSTAR DDNS Password
        $this->RegisterAttributeBoolean('our_passwd_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('our_domain', ''); // Your INSTAR DDNS Address
        $this->RegisterAttributeBoolean('our_domain_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('our_interval', 0); // Update Intervall
        $this->RegisterAttributeBoolean('our_interval_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger(
            'd3th_enable', 0
        ); // 1: 3rd Party DDNS activated / INSTAR DDNS disabled, 0: 3rd Party DDNS deactivated / INSTAR DDNS enabled
        $this->RegisterAttributeBoolean('d3th_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('d3th_service', 0); // 0: DynDNS, 1: NoIP
        $this->RegisterAttributeBoolean('d3th_service_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('d3th_uname', ''); // Your Username
        $this->RegisterAttributeBoolean('d3th_uname_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('d3th_passwd', ''); // Your Password
        $this->RegisterAttributeBoolean('d3th_passwd_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('d3th_domain', ''); // Your 3rd Party DDNS Address
        $this->RegisterAttributeBoolean('d3th_domain_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('upm_enable', 1); // 1: UPnP activated, 0: UPnP deactivated
        $this->RegisterAttributeBoolean('upm_enable_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('ov_enable', 1); // 1 ONVIF activated, 0 ONVIF deactivated
        $this->RegisterAttributeBoolean('ov_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ov_port', 0); // ONVIF Port
        $this->RegisterAttributeBoolean('ov_port_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ov_authflag', 0); // 1 ONVIF Login Required, 0: ONVIF Authentication deactivated
        $this->RegisterAttributeBoolean('ov_authflag_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'ov_forbitset', 0
        ); // 0: When the time zone setting allows image parameter settings allow, 1: When the time zone setting disabled, the image parameter settings allow, 2: When the time zone setting allows image parameter settings prohibit, 3: When the time zone setting is prohibited, prohibited image parameter settings
        $this->RegisterAttributeBoolean('ov_forbitset_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ov_subchn', 0); // Use video channel 11, 12 or 13
        $this->RegisterAttributeBoolean('ov_subchn_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ov_snapchn', 0); // Use video channel 11, 12 or 13 for snapshots
        $this->RegisterAttributeBoolean('ov_snapchn_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('volume', 0); // Audio input volume: 1 - 100
        $this->RegisterAttributeBoolean('volume_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('volin_type', 0); // 0: linear input, 1: microphone input
        $this->RegisterAttributeBoolean('volin_type_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aec', 0); // audio encoder: 0, 1
        $this->RegisterAttributeBoolean('aec_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('denoise', 0); // Noise surpression: 0, 1
        $this->RegisterAttributeBoolean('denoise_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ao_volume', 0); // Audio output volume: 1 - 100
        $this->RegisterAttributeBoolean('ao_volume_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('chn', 0); // 1st, 2nd or 3rd audio channel: 1, 2, 3
        $this->RegisterAttributeBoolean('chn_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aeswitch_1', 0); // Audio encode switch on, off: 1, 0
        $this->RegisterAttributeBoolean('aeswitch_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aeswitch_2', 0); // Audio encode switch on, off: 1, 0
        $this->RegisterAttributeBoolean('aeswitch_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aeswitch_3', 0); // Audio encode switch on, off: 1, 0
        $this->RegisterAttributeBoolean('aeswitch_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aeformat', 0); //  Audio encode format g711a: G711A 64Kbps, g726: G726 16Kbps
        $this->RegisterAttributeBoolean('aeformat_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('videomode', 41); //  Resolution CH11=1080p, CH12=320p, CH13=160p
        $this->RegisterAttributeBoolean('videomode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('vinorm', 'P'); //  50Hz(PAL)
        $this->RegisterAttributeBoolean('vinorm_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('wdrmode', 0); //  Hardware Wide Dynamic Range: 0 (off), 1 (active)
        $this->RegisterAttributeBoolean('wdrmode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('profile', 0); //  h.264 encoder 0: baseline, 1: mainprofile
        $this->RegisterAttributeBoolean('profile_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('maxchn', 0); //  Maximum active video channels
        $this->RegisterAttributeBoolean('maxchn_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'bps_1', 2048
        ); //  Bitrate CH11 1080p = 512kbps - 4096kbps, Bitrate CH11 320p = 512kbps - 2048kbps, Bitrate CH11 160p = 90kbps - 512kbps
        $this->RegisterAttributeBoolean('bps_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'bps_2', 2048
        ); //  Bitrate CH11 1080p = 512kbps - 4096kbps, Bitrate CH11 320p = 512kbps - 2048kbps, Bitrate CH11 160p = 90kbps - 512kbps
        $this->RegisterAttributeBoolean('bps_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'bps_3', 2048
        ); //  Bitrate CH11 1080p = 512kbps - 4096kbps, Bitrate CH11 320p = 512kbps - 2048kbps, Bitrate CH11 160p = 90kbps - 512kbps
        $this->RegisterAttributeBoolean('bps_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('fps_1', 25); //  Framerate: PAL：Range [1 ~ 25], NTSC：Range [1 ~ 30]
        $this->RegisterAttributeBoolean('fps_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('fps_2', 25); //  Framerate: PAL：Range [1 ~ 25], NTSC：Range [1 ~ 30]
        $this->RegisterAttributeBoolean('fps_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('fps_3', 25); //  Framerate: PAL：Range [1 ~ 25], NTSC：Range [1 ~ 30]
        $this->RegisterAttributeBoolean('fps_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('gop_1', 40); //  Keyframe Interval: gop Range [10 ~ 150]
        $this->RegisterAttributeBoolean('gop_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('gop_2', 40); //  Keyframe Interval: gop Range [10 ~ 150]
        $this->RegisterAttributeBoolean('gop_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('gop_3', 40); //  Keyframe Interval: gop Range [10 ~ 150]
        $this->RegisterAttributeBoolean('gop_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('brmode_1', 1); //  Video encode control: 0: fixed bit rate, 1: changeable bit rate
        $this->RegisterAttributeBoolean('brmode_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('brmode_2', 1); //  Video encode control: 0: fixed bit rate, 1: changeable bit rate
        $this->RegisterAttributeBoolean('brmode_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('brmode_3', 1); //  Video encode control: 0: fixed bit rate, 1: changeable bit rate
        $this->RegisterAttributeBoolean('brmode_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('imagegrade_1', 1); //  1 (low compression) -6 (high compression)
        $this->RegisterAttributeBoolean('imagegrade_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('imagegrade_2', 1); //  1 (low compression) -6 (high compression)
        $this->RegisterAttributeBoolean('imagegrade_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('imagegrade_3', 1); //  1 (low compression) -6 (high compression)
        $this->RegisterAttributeBoolean('imagegrade_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('width_1', 1920); //  Video width
        $this->RegisterAttributeBoolean('width_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('width_2', 1920); //  Video width
        $this->RegisterAttributeBoolean('width_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('width_3', 1920); //  Video width
        $this->RegisterAttributeBoolean('width_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('height_1', 1080); //  Video height
        $this->RegisterAttributeBoolean('height_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('height_2', 1080); //  Video height
        $this->RegisterAttributeBoolean('height_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('height_3', 1080); //  Video height
        $this->RegisterAttributeBoolean('height_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('display_mode', 0); //  Current 0: black and white mode 1: color mode
        $this->RegisterAttributeBoolean('display_mode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('brightness', 70); //  brightness [0-100]
        $this->RegisterAttributeBoolean('brightness_enabled', true); // show Attribute in Webfront
        $this->RegisterAttributeInteger('saturation', 150); //  saturation [0-255]
        $this->RegisterAttributeBoolean('saturation_enabled', true); // show Attribute in Webfront
        $this->RegisterAttributeInteger('sharpness', 70); //  sharpness [0-100]
        $this->RegisterAttributeBoolean('sharpness_enabled', true); // show Attribute in Webfront
        $this->RegisterAttributeInteger('contrast', 70); //  contrast [0-100]
        $this->RegisterAttributeBoolean('contrast_enabled', true); // show Attribute in Webfront
        $this->RegisterAttributeInteger('hue', 100); //  [0-255]
        $this->RegisterAttributeBoolean('hue_enabled', true); // show Attribute in Webfront
        $this->RegisterAttributeString('wdr', 'on'); //  Software Wide Dynamic Range Mode: [on, off]
        $this->RegisterAttributeBoolean('wdr_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('night', 'off'); //  Night mode 0 (inactive) off, 1 (active) on
        $this->RegisterAttributeBoolean('night_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('shutter', 0); //  Shutter Speed [0 - 65535]
        $this->RegisterAttributeBoolean('shutter_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('flip', 'on'); //  Flip the Image [on, off]
        $this->RegisterAttributeBoolean('flip_enabled', true); // show Attribute in Webfront
        $this->RegisterAttributeString('mirror', 'on'); // Mirror the Image [on, off]
        $this->RegisterAttributeBoolean('mirror_enabled', true); // show Attribute in Webfront
        $this->RegisterAttributeString('scene', 'auto'); // scene (auto , indoor , outdoor) sets the white balance mode
        $this->RegisterAttributeBoolean('scene_enabled', true); // show Attribute in Webfront
        $this->RegisterAttributeInteger('gc', 0); //  Night illumination, value Range 0=auto, [1-255]=manual
        $this->RegisterAttributeBoolean('gc_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ae', 0); //  Minimum exposure, range 0-65535
        $this->RegisterAttributeBoolean('ae_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('targety', 0); //  Exposure [0-255]
        $this->RegisterAttributeBoolean('targety_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('noise', 0); //  Low light denoising intensity (0-100)
        $this->RegisterAttributeBoolean('noise_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('gamma', 0); //  Gamma 0-3
        $this->RegisterAttributeBoolean('gamma_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aemode', 0); //  Auto-Exposure mode, the range: 0 Automatic, 1 Indoor, 2 Outdoor
        $this->RegisterAttributeBoolean('aemode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('imgmode', 0); //  Image priority mode: 0: Frame rate priority, 1: Illumination priority
        $this->RegisterAttributeBoolean('imgmode_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('wdrauto', 0); //  Hardware Wide Dynamic Range 0 (Auto), 1 (Manual)
        $this->RegisterAttributeBoolean('wdrauto_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('wdrautval', 0); //  Auto WDR Strength [0-2]
        $this->RegisterAttributeBoolean('wdrautval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('wdrmanval', 0); //  Manual WDR Strength [0-255]
        $this->RegisterAttributeBoolean('wdrmanval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('d3noauto', 0); //  3D Noise Reduction Mode: 0 (auto), 1 (manual)
        $this->RegisterAttributeBoolean('d3noauto_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('d3noval', 0); //  3D Noise Reduction Strength: [0-255]
        $this->RegisterAttributeBoolean('d3noval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('gcauto', 0); //  Signal Gain: 0 (auto), 1 (manual)
        $this->RegisterAttributeBoolean('gcauto_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('gcval', 0); //  Gain Multiplier: [0-255]
        $this->RegisterAttributeBoolean('gcval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('aemodeex', 'Highlight'); // Exposure Mode: Highlight (Exposure) priority, Lowlight (Framerate) priority
        $this->RegisterAttributeBoolean('aemodeex_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aelowval', 0); //  Lowlight Intensity [0-255]
        $this->RegisterAttributeBoolean('aelowval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aehighval', 0); //  Highlight Intensity [0-255]
        $this->RegisterAttributeBoolean('aehighval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aeratio', 0); //  Length Exposure Ratio [0-100]
        $this->RegisterAttributeBoolean('aeratio_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ldc_enable', 0); //  Image Distortion Correction: 0 (disabled), 1 (enabled)
        $this->RegisterAttributeBoolean('ldc_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ldc_xoffset', 0); //  Horizontal Image Offset
        $this->RegisterAttributeBoolean('ldc_xoffset_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ldc_yoffset', 0); //  Vertical Image Offset
        $this->RegisterAttributeBoolean('ldc_yoffset_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ldc_ratio', 0); //  Distortion Correction [0-511]
        $this->RegisterAttributeBoolean('ldc_ratio_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('region', 1); //  OSD time zone, 1: OSD Name region
        $this->RegisterAttributeBoolean('region_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('show', 0); //  0 (hidden), 1 (displayed)
        $this->RegisterAttributeBoolean('show_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('place', 0); //  0: top, 1: bottom
        $this->RegisterAttributeBoolean('place_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('x_region', 0); //  OSD region x coordinate
        $this->RegisterAttributeBoolean('x_region_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('y_region', 0); // OSD region y coordinate
        $this->RegisterAttributeBoolean('y_region_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('name_region', ''); //  Region 0="YYYY-MM-DD hh:mm:ss", region="Camera Name"
        $this->RegisterAttributeBoolean('name_region_enabled', false); // show Attribute in Webfront

        $this->RegisterAttributeInteger('privacy_region', 1); // Privacy Mask [1-4]
        $this->RegisterAttributeBoolean('privacy_region_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('show_1', 0); // [0, 1] De/Activate Mask
        $this->RegisterAttributeBoolean('show_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('show_2', 0); // [0, 1] De/Activate Mask
        $this->RegisterAttributeBoolean('show_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('show_3', 0); // [0, 1] De/Activate Mask
        $this->RegisterAttributeBoolean('show_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('show_4', 0); // [0, 1] De/Activate Mask
        $this->RegisterAttributeBoolean('show_4_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('color_1', 0); // Brightness [0-100]
        $this->RegisterAttributeBoolean('color_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('color_2', 0); // Brightness [0-100]
        $this->RegisterAttributeBoolean('color_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('color_3', 0); // Brightness [0-100]
        $this->RegisterAttributeBoolean('color_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('color_4', 0); // Brightness [0-100]
        $this->RegisterAttributeBoolean('color_4_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('x_1', 0); // X-Coordinate Origin [0-(1920-w)]
        $this->RegisterAttributeBoolean('x_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('x_2', 0); // X-Coordinate Origin [0-(1920-w)]
        $this->RegisterAttributeBoolean('x_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('x_3', 0); // X-Coordinate Origin [0-(1920-w)]
        $this->RegisterAttributeBoolean('x_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('x_4', 0); // X-Coordinate Origin [0-(1920-w)]
        $this->RegisterAttributeBoolean('x_4_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('y_1', 0); // Y-Coordinate Origin [0-(1080-h)]
        $this->RegisterAttributeBoolean('y_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('y_2', 0); // Y-Coordinate Origin [0-(1080-h)]
        $this->RegisterAttributeBoolean('y_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('y_3', 0); // Y-Coordinate Origin [0-(1080-h)]
        $this->RegisterAttributeBoolean('y_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('y_4', 0); // Y-Coordinate Origin [0-(1080-h)]
        $this->RegisterAttributeBoolean('y_4_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('w_1', 1); // Mask Width [1-1920] Pixel
        $this->RegisterAttributeBoolean('w_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('w_2', 1); // Mask Width [1-1920] Pixel
        $this->RegisterAttributeBoolean('w_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('w_3', 1); // Mask Width [1-1920] Pixel
        $this->RegisterAttributeBoolean('w_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('w_4', 1); // Mask Width [1-1920] Pixel
        $this->RegisterAttributeBoolean('w_4_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('h_1', 1); // Mask Height [1-1080] Pixel
        $this->RegisterAttributeBoolean('h_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('h_2', 1); // Mask Height [1-1080] Pixel
        $this->RegisterAttributeBoolean('h_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('h_3', 1); // Mask Height [1-1080] Pixel
        $this->RegisterAttributeBoolean('h_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('h_4', 1); // Mask Height [1-1080] Pixel
        $this->RegisterAttributeBoolean('h_4_enabled', false); // show Attribute in Webfront
        // Features
        $this->RegisterAttributeString('ma_server', ''); // SMTP Server Address e.g. smtp.strato.de
        $this->RegisterAttributeBoolean('ma_server_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ma_port', 25); // SMTP Server Port e.g. 25, 587 (TLS) or 465 (SSL)
        $this->RegisterAttributeBoolean('ma_port_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ma_ssl', 25); // SSL Encryption 0 (Disabled), 1 (SSL), 2 (TLS) or 3 (STARTTLS)
        $this->RegisterAttributeBoolean('ma_ssl_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ma_logintype', 1); // Enable (1) or Disable (3) Authentication
        $this->RegisterAttributeBoolean('ma_logintype_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ma_username', ''); // SMTP Server Username
        $this->RegisterAttributeBoolean('ma_username_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ma_password', ''); // SMTP Server Password
        $this->RegisterAttributeBoolean('ma_password_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ma_from', ''); // Sender Email Address
        $this->RegisterAttributeBoolean('ma_from_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ma_to', ''); // Receiver Email Address
        $this->RegisterAttributeBoolean('ma_to_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ma_subject', ''); // Mail Subject Line
        $this->RegisterAttributeBoolean('ma_subject_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ma_text', ''); // Mail Content
        $this->RegisterAttributeBoolean('ma_text_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ft_server', ''); // FTP Server Address
        $this->RegisterAttributeBoolean('ft_server_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ft_port', 25); // FTP Server Port
        $this->RegisterAttributeBoolean('ft_port_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ft_username', ''); // FTP Username
        $this->RegisterAttributeBoolean('ft_username_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ft_password', ''); // FTP Password
        $this->RegisterAttributeBoolean('ft_password_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ft_mode', 0); // FTP Mode Port (0) or Passive (1)
        $this->RegisterAttributeBoolean('ft_mode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ft_dirname', ''); // FTP Directory
        $this->RegisterAttributeBoolean('ft_dirname_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ft_autocreatedir', 0); // Automatically create the directory 0 (no), 1 (yes)
        $this->RegisterAttributeBoolean('ft_autocreatedir_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ft_dirmode', 0); // 0 (Create a new Folder every Day), 1 (All Files in One Directory)
        $this->RegisterAttributeBoolean('ft_dirmode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ft_ssl', 0); // FTPS Encryption - 0：None, 1：SSL, 2: TLS
        $this->RegisterAttributeBoolean('ft_ssl_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('infraredstat', ''); // IR LED Status - auto, close (deactivated)
        $this->RegisterAttributeBoolean('infraredstat_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('panspeed', 0); // fast (0) - slow (2)
        $this->RegisterAttributeBoolean('panspeed_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('tiltspeed', 0); // fast (0) - slow (2)
        $this->RegisterAttributeBoolean('tiltspeed_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('panscan', 1); // [1-50] - Number of hscans
        $this->RegisterAttributeBoolean('panscan_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('tiltscan', 1); // [1-50] - Number of vscans
        $this->RegisterAttributeBoolean('tiltscan_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('movehome', 'on'); // [on, off] - Go to Center or Postion [initpresetindex] after Restart
        $this->RegisterAttributeBoolean('movehome_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ptzalarmmask', 'on'); // [on, off] - Deactivate Motion Detection during Pan&Tilt
        $this->RegisterAttributeBoolean('ptzalarmmask_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('selfdet', ''); // De/Activate Calibration (Required for Preset Postions and PTZ Tour)
        $this->RegisterAttributeBoolean('selfdet_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('alarmpresetindex', 0); // [1-8]; - Alarmposition
        $this->RegisterAttributeBoolean('alarmpresetindex_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('initpresetindex', 0); // [1-8]; - Position Camera goes to after Restart
        $this->RegisterAttributeBoolean('initpresetindex_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('md_preset_switch', 'on'); // Go to [alarmpresetindex] (Alarm Position) at Alarm Event - [on, off]
        $this->RegisterAttributeBoolean('md_preset_switch_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('timerpreset_enable', 0); // De/Activate Park Position - [0, 1]
        $this->RegisterAttributeBoolean('timerpreset_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('timerpreset_index', 1); // Select Park Position - [1 - 8]
        $this->RegisterAttributeBoolean('timerpreset_index_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('timerpreset_interval', 30); // Time before going back to Park Position in seconds - [30 - 900]
        $this->RegisterAttributeBoolean('timerpreset_interval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('admin_value46', 46); // De/Activate One-Step Pan&Tilt Control - [0, 1]
        $this->RegisterAttributeBoolean('admin_value46_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('tour_enable', 0); // De/Activate PTZ Tour [0, 1]
        $this->RegisterAttributeBoolean('tour_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('tour_times', 1); // Number of Rounds [1 - 50]
        $this->RegisterAttributeBoolean('tour_times_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('tour_index', 1); // Set Tour Positions to Preset Position [1-8] / [-1] to deactivate Tour Position
        $this->RegisterAttributeBoolean('tour_index_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('tour_interval', 60); // Set Pause when Tour Position is reached in seconds [60-43200]
        $this->RegisterAttributeBoolean('tour_interval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('light1_enable', 'on'); // WiFi Status LED - [on, off]
        $this->RegisterAttributeBoolean('light1_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('light2_enable', 'on'); // Power LED - [on, off]
        $this->RegisterAttributeBoolean('light2_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('admin_value44', 44); // Recording Length in Seconds [60 - 3600] / Set [0] to Deactivate File Splitting
        $this->RegisterAttributeBoolean('admin_value44_enabled', false); // show Attribute in Webfront
        // Alarm Menu
        $this->RegisterAttributeString('emailsnap', 'on'); // E-mail Alarm / Send Snapshot
        $this->RegisterAttributeBoolean('emailsnap_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('snap', 'on'); // Save Snapshot to SD
        $this->RegisterAttributeBoolean('snap_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('record', 'on'); // Save Video to SD
        $this->RegisterAttributeBoolean('record_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ftprec', 'on'); // Send Video to FTP Server
        $this->RegisterAttributeBoolean('ftprec_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('relay', 'on'); // Alarm Out Relay
        $this->RegisterAttributeBoolean('relay_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ftpsnap', 'on'); // Send Snapshot to FTP Server
        $this->RegisterAttributeBoolean('ftpsnap_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('sound', 'on'); // Audio Alarm Signal
        $this->RegisterAttributeBoolean('sound_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('type', 'on'); // Link Alarm Areas and Alarm-Input
        $this->RegisterAttributeBoolean('type_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aa_enable', 0); // De/Activate Audio Detection [0, 1]
        $this->RegisterAttributeBoolean('aa_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aa_value', 10); // Sensitivity [10 - 100]
        $this->RegisterAttributeBoolean('aa_value_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('aa_time', 0); // Minimum Audio Signal Length Threshold [0 - 10]
        $this->RegisterAttributeBoolean('aa_time_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('io_enable', 0); // De/Activate Alarm Input [0, 1]
        $this->RegisterAttributeBoolean('io_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('io_flag', 0); // Circuit Nomally Closed N.C. [0] or Normally Open N.O. [1]
        $this->RegisterAttributeBoolean('io_flag_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('pir_enable', 0); // De/Activate PIR Sensor [0, 1]
        $this->RegisterAttributeBoolean('pir_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('pir_flag', 0); // Circuit Nomally Closed N.C. [0] or Normally Open N.O. [1]
        $this->RegisterAttributeBoolean('pir_flag_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('snap_chn', 11); // Set Snapshot Resolution to Video Channel [11, 12, 13]
        $this->RegisterAttributeBoolean('snap_chn_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('snap_name', ''); // Fixed File Name for All Alarm Snapshots (leave empty for auto-name by time stamp)
        $this->RegisterAttributeBoolean('snap_name_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'snap_timer_name', ''
        ); // Fixed File Name for All Photoseries Snapshots (leave empty for auto-name by time stamp)
        $this->RegisterAttributeBoolean('snap_timer_name_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'snap_name_mode', 0
        ); // Set Filename to [0] time stamp, or [1] fixed file name set snapname and snaptimer_name
        $this->RegisterAttributeBoolean('snap_name_mode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('snap_count', 1); // Number of Snapshot saved to SD Card per Alarm Event [1-15]
        $this->RegisterAttributeBoolean('snap_count_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ftp_snap_count', 1); // Number of Snapshot send to FTP Server per Alarm Event [1-15]
        $this->RegisterAttributeBoolean('ftp_snap_count_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('email_snap_count', 1); // Number of Snapshot send by Email per Alarm Event [1-15]
        $this->RegisterAttributeBoolean('email_snap_count_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('admin17', 17); // admin17
        $this->RegisterAttributeBoolean('admin17_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m1_enable', 0); // Dis/Enable Alarm Detection Area 1 - 4: [0, 1]
        $this->RegisterAttributeBoolean('m1_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m2_enable', 0); // Dis/Enable Alarm Detection Area 1 - 4: [0, 1]
        $this->RegisterAttributeBoolean('m2_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m3_enable', 0); // Dis/Enable Alarm Detection Area 1 - 4: [0, 1]
        $this->RegisterAttributeBoolean('m3_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m4_enable', 0); // Dis/Enable Alarm Detection Area 1 - 4: [0, 1]
        $this->RegisterAttributeBoolean('m4_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m1_x', 0); // X-Axis Offset of Alarm Area Origin [0-(1920-w)]
        $this->RegisterAttributeBoolean('m1_x_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m2_x', 0); // X-Axis Offset of Alarm Area Origin [0-(1920-w)]
        $this->RegisterAttributeBoolean('m2_x_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m3_x', 0); // X-Axis Offset of Alarm Area Origin [0-(1920-w)]
        $this->RegisterAttributeBoolean('m3_x_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m4_x', 0); // X-Axis Offset of Alarm Area Origin [0-(1920-w)]
        $this->RegisterAttributeBoolean('m4_x_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m1_y', 0); // Y-Axis Offset of Alarm Area Origin [0-(1080-h)]
        $this->RegisterAttributeBoolean('m1_y_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m2_y', 0); // Y-Axis Offset of Alarm Area Origin [0-(1080-h)]
        $this->RegisterAttributeBoolean('m2_y_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m3_y', 0); // Y-Axis Offset of Alarm Area Origin [0-(1080-h)]
        $this->RegisterAttributeBoolean('m3_y_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m4_y', 0); // Y-Axis Offset of Alarm Area Origin [0-(1080-h)]
        $this->RegisterAttributeBoolean('m4_y_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m1_w', 0); // Alarm Area Width [1-1920] Pixel
        $this->RegisterAttributeBoolean('m1_w_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m2_w', 0); // Alarm Area Width [1-1920] Pixel
        $this->RegisterAttributeBoolean('m2_w_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m3_w', 0); // Alarm Area Width [1-1920] Pixel
        $this->RegisterAttributeBoolean('m3_w_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m4_w', 0); // Alarm Area Width [1-1920] Pixel
        $this->RegisterAttributeBoolean('m4_w_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m1_h', 0); // Alarm Area Height [1-1080] Pixel
        $this->RegisterAttributeBoolean('m1_h_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m2_h', 0); // Alarm Area Height [1-1080] Pixel
        $this->RegisterAttributeBoolean('m2_h_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m3_h', 0); // Alarm Area Height [1-1080] Pixel
        $this->RegisterAttributeBoolean('m3_h_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m4_h', 0); // Alarm Area Height [1-1080] Pixel
        $this->RegisterAttributeBoolean('m4_h_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m1_sensitivity', 0); // Detection Sensitivity [1 - 100]
        $this->RegisterAttributeBoolean('m1_sensitivity_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m2_sensitivity', 0); // Detection Sensitivity [1 - 100]
        $this->RegisterAttributeBoolean('m2_sensitivity_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m3_sensitivity', 0); // Detection Sensitivity [1 - 100]
        $this->RegisterAttributeBoolean('m3_sensitivity_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m4_sensitivity', 0); // Detection Sensitivity [1 - 100]
        $this->RegisterAttributeBoolean('m4_sensitivity_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m1_threshold', 0); // Detection Threshold (not active)
        $this->RegisterAttributeBoolean('m1_threshold_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m2_threshold', 0); // Detection Threshold (not active)
        $this->RegisterAttributeBoolean('m2_threshold_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m3_threshold', 0); // Detection Threshold (not active)
        $this->RegisterAttributeBoolean('m3_threshold_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('m4_threshold', 0); // Detection Threshold (not active)
        $this->RegisterAttributeBoolean('m4_threshold_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'as_week0', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('as_week0_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'as_week1', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('as_week1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'as_week2', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('as_week2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'as_week3', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('as_week3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'as_week4', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('as_week4_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'as_week5', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('as_week5_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'as_week6', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('as_week6_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_0', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_0_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_1', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_2', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_3', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_4', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_4_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_5', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_5_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_6', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_6_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_7', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_7_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_8', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_8_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_9', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_9_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_10', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_10_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_11', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_11_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_12', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_12_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_13', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_13_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_14', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_14_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_15', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_15_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_16', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_16_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_17', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_17_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_18', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_18_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger(
            'plancgi_enable_19', 0
        ); // De/Activate Switch Event at Time - [0 - 86399] in seconds = 0:00:00 - 23:59:59 o´clock
        $this->RegisterAttributeBoolean('plancgi_enable_19_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_server', ''); // Address of the receiving Server (e.g. Home Automation Server) [IPv4 Address]
        $this->RegisterAttributeBoolean('as_server_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_port', 0); // Port of the receiving Server [1-65536]
        $this->RegisterAttributeBoolean('as_port_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_auth', 0); // Authentication required [0, 1]
        $this->RegisterAttributeBoolean('as_auth_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_username', ''); // Alarmserver Username
        $this->RegisterAttributeBoolean('as_username_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_password', ''); // Alarmserver Password
        $this->RegisterAttributeBoolean('as_password_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_path', ''); // URL Path
        $this->RegisterAttributeBoolean('as_path_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_area', ''); // Send Query when Motion is Detected
        $this->RegisterAttributeBoolean('as_area_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_io', ''); // Send Query when Alarm Input is Triggered
        $this->RegisterAttributeBoolean('as_io_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_audio', ''); // Send Query when Audio Alarm is Triggered
        $this->RegisterAttributeBoolean('as_audio_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_areaio', ''); // Send Query when Motion is Detected and Input is Triggered
        $this->RegisterAttributeBoolean('as_areaio_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_activequery', ''); // Append Alarm Trigger to Query
        $this->RegisterAttributeBoolean('as_activequery_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_query1', ''); // Activate Sending optional Parameter 1
        $this->RegisterAttributeBoolean('as_query1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryattr1', ''); // Command 1 Attribute
        $this->RegisterAttributeBoolean('as_queryattr1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryval1', ''); // Command 1 Value
        $this->RegisterAttributeBoolean('as_queryval1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_query2', ''); // Activate Sending optional Parameter 2
        $this->RegisterAttributeBoolean('as_query2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryattr2', ''); // Command 2 Attribute
        $this->RegisterAttributeBoolean('as_queryattr2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryval2', ''); // Command 2 Value
        $this->RegisterAttributeBoolean('as_queryval2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_query3', ''); // Activate Sending optional Parameter 3
        $this->RegisterAttributeBoolean('as_query3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryattr3', ''); // Command 3 Attribute
        $this->RegisterAttributeBoolean('as_queryattr3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryval3', ''); // Command 3 Value
        $this->RegisterAttributeBoolean('as_queryval3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('md_server2_switch', 'on'); // De/Activate Alarm Server2 [off, on]
        $this->RegisterAttributeBoolean('md_server2_switch_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_server_2', ''); // Address of the receiving Server (e.g. Home Automation Server) [IPv4 Address]
        $this->RegisterAttributeBoolean('as_server_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_port_2', 0); // Port of the receiving Server [1-65536]
        $this->RegisterAttributeBoolean('as_port_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_auth_2', 0); // Authentication required [0, 1]
        $this->RegisterAttributeBoolean('as_auth_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_username_2', ''); // Alarmserver Username
        $this->RegisterAttributeBoolean('as_username_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_password_2', ''); // Alarmserver Password
        $this->RegisterAttributeBoolean('as_password_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_path_2', ''); // URL Path
        $this->RegisterAttributeBoolean('as_path_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_area_2', ''); // Send Query when Motion is Detected
        $this->RegisterAttributeBoolean('as_area_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_io_2', ''); // Send Query when Alarm Input is Triggered
        $this->RegisterAttributeBoolean('as_io_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_audio_2', ''); // Send Query when Audio Alarm is Triggered
        $this->RegisterAttributeBoolean('as_audio_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_areaio_2', ''); // Send Query when Motion is Detected and Input is Triggered
        $this->RegisterAttributeBoolean('as_areaio_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_activequery_2', ''); // Append Alarm Trigger to Query
        $this->RegisterAttributeBoolean('as_activequery_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_query1_2', ''); // Activate Sending optional Parameter 1
        $this->RegisterAttributeBoolean('as_query1_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryattr1_2', ''); // Command 1 Attribute
        $this->RegisterAttributeBoolean('as_queryattr1_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryval1_2', ''); // Command 1 Value
        $this->RegisterAttributeBoolean('as_queryval1_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_query2_2', ''); // Activate Sending optional Parameter 2
        $this->RegisterAttributeBoolean('as_query2_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryattr2_2', ''); // Command 2 Attribute
        $this->RegisterAttributeBoolean('as_queryattr2_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryval2_2', ''); // Command 2 Value
        $this->RegisterAttributeBoolean('as_queryval2_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_query3_2', ''); // Activate Sending optional Parameter 3
        $this->RegisterAttributeBoolean('as_query3_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryattr3_2', ''); // Command 3 Attribute
        $this->RegisterAttributeBoolean('as_queryattr3_2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('as_queryval3_2', ''); // Command 3 Value
        $this->RegisterAttributeBoolean('as_queryval3_2_enabled', false); // show Attribute in Webfront
        // Recording Menu
        $this->RegisterAttributeInteger('as_snap_enable', 0); // Dis/Enable snapshot to SD card： [0, 1]
        $this->RegisterAttributeBoolean('as_snap_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_snap_interval', 1); // Time interval between shots in seconds [1-86400]
        $this->RegisterAttributeBoolean('as_snap_interval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_email_enable', 0); // DDis/Enable snapshot to Email： [0, 1]
        $this->RegisterAttributeBoolean('as_email_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_email_interval', 1); // Time interval between shots in seconds [1-86400]
        $this->RegisterAttributeBoolean('as_email_interval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_ftp_enable', 0); // Dis/Enable snapshot to FTP Server： [0, 1]
        $this->RegisterAttributeBoolean('as_ftp_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_ftp_interval', 1); // Time interval between shots in seconds [1-86400]
        $this->RegisterAttributeBoolean('as_ftp_interval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_cloud_enable', 0); // Dis/Enable snapshot to INSTAR Cloud Server： [0, 1]
        $this->RegisterAttributeBoolean('as_cloud_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('as_cloud_interval', 1); // Time interval between shots in seconds [1-86400]
        $this->RegisterAttributeBoolean('as_cloud_interval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'rt_week0', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('rt_week0_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'rt_week1', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('rt_week1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'rt_week2', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('rt_week2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'rt_week3', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('rt_week3_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'rt_week4', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('rt_week4_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'rt_week5', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('rt_week5_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString(
            'rt_week6', 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
        ); // Sunday：every 24 hrs divide to half hr is a segment , use P or N to indicate if the alarm is active - [P] means active , [N] means inactive
        $this->RegisterAttributeBoolean('rt_week6_enabled', false); // show Attribute in Webfront
        //  Video Tasks
        $this->RegisterAttributeInteger('planrec_enable', 1); // Dis/Enable Recording to SD card： [0, 1]
        $this->RegisterAttributeBoolean('planrec_enable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('planrec_chn', 11); // Record Kamera Channel [11, 12, 13]
        $this->RegisterAttributeBoolean('planrec_chn_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('planrec_time', 1); // Recoding File Length (15-900seconds)
        $this->RegisterAttributeBoolean('planrec_time_enabled', false); // show Attribute in Webfront
        // System
        $this->RegisterAttributeString('lanmac', ''); // MAC Address of the LAN Interface
        $this->RegisterAttributeBoolean('lanmac_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('wifimac', ''); // MAC Address of the WLAN Interface
        $this->RegisterAttributeBoolean('wifimac_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('internetip', ''); // Get Wide Area Network Address
        $this->RegisterAttributeBoolean('internetip_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('at_username0', ''); // Username for User 1
        $this->RegisterAttributeBoolean('at_username0_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('at_password0', ''); // Password for User 1
        $this->RegisterAttributeBoolean('at_password0_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('at_authlevel0', 3); // User Authorisation: admin/user/guest [15, 3, 1]
        $this->RegisterAttributeBoolean('at_authlevel0_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('at_enable0', 1); // De/Activate [0, 1]
        $this->RegisterAttributeBoolean('at_enable0_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('at_username1', ''); // Username for User 2
        $this->RegisterAttributeBoolean('at_username1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('at_password1', ''); // Password for User 2
        $this->RegisterAttributeBoolean('at_password1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('at_authlevel1', 3); // User Authorisation: admin/user/guest [15, 3, 1]
        $this->RegisterAttributeBoolean('at_authlevel1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('at_enable1', 1); // De/Activate [0, 1]
        $this->RegisterAttributeBoolean('at_enable1_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('at_username2', ''); // Username for User 3
        $this->RegisterAttributeBoolean('at_username2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('at_password2', ''); // Password for User 3
        $this->RegisterAttributeBoolean('at_password2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('at_authlevel2', 3); // User Authorisation: admin/user/guest [15, 3, 1]
        $this->RegisterAttributeBoolean('at_authlevel2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('at_enable2', 1); // De/Activate [0, 1]
        $this->RegisterAttributeBoolean('at_enable2_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('time', ''); // Camera Time
        $this->RegisterAttributeBoolean('time_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('timeZone', ''); // Cameras Time Zone e.g.[Europe%2FAmsterdam]
        $this->RegisterAttributeBoolean('timeZone_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('dstmode', 'on'); // De/Activate Daylight Saving Time [off, on]
        $this->RegisterAttributeBoolean('dstmode_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ntpenable', 1); // De/Activate NTP Time Adjustment [0, 1]
        $this->RegisterAttributeBoolean('ntpenable_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('ntpserver', ''); // NTP Server Address
        $this->RegisterAttributeBoolean('ntpserver_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeInteger('ntpinterval', 1); // NTP Sync Interval in Hours [1 - 12]
        $this->RegisterAttributeBoolean('ntpinterval_enabled', false); // show Attribute in Webfront
        $this->RegisterAttributeString('guest_value11', 'de'); // UI Language Selector [de, en, fr, cn]
        $this->RegisterAttributeBoolean('guest_value11_enabled', false); // show Attribute in Webfront
        */

        $API_Cameras[self::IN_9010_Full_HD] = [];
        $API_Cameras[self::IN_9008_Full_HD] = [];
        $API_Cameras[self::IN_7011_HD]      = [];
        $API_Cameras[self::IN_5907_HD]      = [];
        $API_Cameras[self::IN_5905_HD]      = [];
        $API_Cameras[self::IN_3011]         = [];
        $API_Cameras[self::IN_6001_HD]      = [];
        $API_Cameras[self::IN_6012_HD]      = [];
        $API_Cameras[self::IN_6014_HD]      = [];
        $API_Cameras[self::IN_8003_Full_HD] = [];
        $API_Cameras[self::IN_8015_Full_HD] = [];

        $API_Parameters = [];
        foreach ($API_Cameras as $key => $API_Camera) {
            if ($key == $cameratype) {
                $API_Parameters = $API_Camera;
            }
        }

        return $API_Parameters;
    }

    public function UpdateSettings()
    {
        $this->GetCameraModel();
        $this->GetServerInfo();
        $this->GetNetInfo();
        $this->GetCameraNetworkConfiguration();
        $this->GetCameraPorts();
        $this->GetRTSPAuthenticationState();
        $this->GetCameraWIFIConfiguration();
        $this->GetCameraWiFiAccessPoint();
        $this->GetDDNSConfiguration();
        $this->Get3rdPartyDDNSConfiguration();
        $this->GetUPNPConfiguration();
        $this->GetONVIFConfiguration();
        $this->GetVolumeAudioInput();
        $this->GetVolumeAudioOutput();
        $this->GetAudioEncoderParameterChannel1();
        $this->GetAudioEncoderParameterChannel2();
        $this->GetAudioEncoderParameterChannel3();
        $this->GetVideoAttributes();
        $this->GetVideoEncoderAttributes();
        $this->GetImageParameter();
        $this->GetExtendedImageAttributes();
        $this->GetLensDistortionCorrection();
        $this->GetOSDParameter();
        $this->GetPrivacyMaskAttributes();
        $this->GetEmailNotificationParameter();
        $this->GetINSTARCloudServerParameter();
        $this->GetFTPServerParameter();
        $this->GetTimeWindowSwitchIR();
        $this->GetPan_TiltSettings();
        $this->GetStateAlarmPosition();
        $this->GetParkPositionParameter();
        // $this->GetOneStepPanTiltControl();
        // $this->GetPanTiltTourSettings();

        $this->GetStatusLED();
        $this->GetFileLengthManualRecordings();
        $this->GetAlarmActionParameterEmailsnap();
        $this->GetAlarmActionParameterSnap();
        $this->GetAlarmActionParameterRecord();
        $this->GetAlarmActionParameterFTPRecord();
        $this->GetAlarmActionParameterRelay();
        $this->GetAlarmActionParameterFTPSnap();
        $this->GetAlarmActionParameterSound();
        $this->GetAlarmActionParameterType();
        $this->GetAudioDetectionParameter();
        $this->GetAlarmInputParameter();
        $this->GetPassiveInfraredMotionDetectionSensorParameter();
        $this->GetNumberAlarmSnapshots();
        $this->GetAlarmAreasParameter();
        $this->GetMotionDetectionTimeScheduleParameter();
        // $this->GetTimerParameter();
        // $this->GetConfigurationPushService();
        $this->GetAlarmServer1Parameter();
        // $this->GetAlarmserver2Configuration();
        $this->GetIntervalSnapshotSeriesTask();
        $this->GetScheduleIntervalSnapshotSeries();
        $this->GetPlannedVideoRecordingAttribute();
        $this->GetScheduleManualRecordingTask();
        $this->GetLAN_MACAddress();
        // $this->GetWIFI_MACAddress();
        $this->GetWAN_IPAddress();
        $this->GetNetworkConfiguration();
        // $this->GetCameraTimeConfiguration();
        $this->GetCamerasNetworkConfiguration();
        $this->GetCameraUI_LanguageConfiguration();
        $this->GetCameraSystemLog();
        // $this->GetCameraRebootAutomatically();
    }

    protected function GetHostIP()
    {
        $ip_hosts = [];
        if (IPS_GetKernelVersion() >= 5.2) {
            $network = Sys_GetNetworkInfo();
            foreach ($network as $key => $device) {
                $ip_hosts[] = $device['IP'];
            }
        } else {
            $ip = exec("sudo ifconfig eth0 | grep 'inet Adresse:' | cut -d: -f2 | awk '{ print $1}'");
            if ($ip == '') {
                $network = Sys_GetNetworkInfo();
                foreach ($network as $key => $device) {
                    $ip_hosts[] = $device['IP'];
                }
            }
        }
        $this->SendDebug('IP Symcon', json_encode($ip_hosts), 0);
        return $ip_hosts;
    }

    protected function CheckEmail($email)
    {
        $ipsversion = $this->GetIPSVersion();
        if ($email == '') {
            $this->SetStatus(205); //Felder dürfen nicht leer sein
        }
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            //email valid
            if ($ipsversion == 0) {
                //Skript beim EmailAlert
                $IDEmail = @($this->GetIDForIdent('SendEmailAlert'));
                if ($IDEmail === false) {
                    $IDEmail = $this->RegisterScript('SendEmailAlert', 'Email Alert', $this->CreateEmailAlertScript($email), 19);
                    IPS_SetHidden($IDEmail, true);
                }
                $this->SetEmailEvent($IDEmail, true);
            }
        } else {
            $this->SetStatus(207); //email not valid
        }
    }

    protected function is_valid_domain($url)
    {

        $validation = false;
        /*Parse URL*/
        $urlparts = parse_url(filter_var($url, FILTER_SANITIZE_URL));
        /*Check host exist else path assign to host*/
        if (!isset($urlparts['host'])) {
            $urlparts['host'] = $urlparts['path'];
        }

        if ($urlparts['host'] != '') {
            /*Add scheme if not found*/
            if (!isset($urlparts['scheme'])) {
                $urlparts['scheme'] = 'http';
            }
            /*Validation*/
            if (checkdnsrr($urlparts['host'], 'A') && in_array($urlparts['scheme'], ['http', 'https']) && ip2long($urlparts['host']) === false) {
                $urlparts['host'] = preg_replace('/^www\./', '', $urlparts['host']);
                $url              = $urlparts['scheme'] . '://' . $urlparts['host'] . '/';

                if (filter_var($url, FILTER_VALIDATE_URL) !== false && @get_headers($url)) {
                    $validation = true;
                }
            }
        }

        if (!$validation) {
            //echo $url.' Its Invalid Domain Name.';
            $domaincheck = false;
            return $domaincheck;
        } else {
            //echo $url.' is a Valid Domain Name.';
            $domaincheck = true;
            return $domaincheck;
        }

    }

    protected function is_valid_localdomain($url)
    {

        $validation = false;
        /*Parse URL*/
        $urlparts = parse_url(filter_var($url, FILTER_SANITIZE_URL));
        /*Check host exist else path assign to host*/
        if (!isset($urlparts['host'])) {
            $urlparts['host'] = $urlparts['path'];
        }

        if ($urlparts['host'] != '') {
            /*Add scheme if not found*/
            if (!isset($urlparts['scheme'])) {
                $urlparts['scheme'] = 'http';
            }
            /*Validation*/
            if (checkdnsrr($urlparts['host'], 'A') && in_array($urlparts['scheme'], ['http', 'https']) && ip2long($urlparts['host']) === false) {
                $urlparts['host'] = preg_replace('/^www\./', '', $urlparts['host']);
                $url              = $urlparts['scheme'] . '://' . $urlparts['host'] . '/';

                if (filter_var($url, FILTER_VALIDATE_URL) !== false && @get_headers($url)) {
                    $validation = true;
                }
            }
        }

        if (!$validation) {
            //echo $url.' Its Invalid Domain Name.';
            $domaincheck = false;
            return $domaincheck;
        } else {
            //echo $url.' is a Valid Domain Name.';
            $domaincheck = true;
            return $domaincheck;
        }

    }

    protected function GetURLPrefix($url)
    {
        $prehttp  = strpos($url, 'http://');
        $prehttps = strpos($url, 'https://');
        if ($prehttp === 0) {
            $prefix = ''; //Prefix ist http
        } elseif ($prehttps === 0) {
            $prefix = ''; //Prefix ist https
        } else {
            $prefix = 'http://'; //Prefix ergänzen
        }
        return $prefix;
    }

    protected function GetConnectURL()
    {
        $instID = IPS_GetInstanceListByModuleID('{9486D575-BE8C-4ED8-B5B5-20930E26DE6F}')[0];
        if (IPS_GetKernelVersion() >= 5.2) {
            $url = CC_GetConnectURL($instID);
        } else {
            $url = CC_GetUrl($instID);
        }
        return $url;
    }

    public function MessageSink($TimeStamp, $SenderID, $Message, $Data)
    {
        $this->LogMessage('SenderID: ' . $SenderID . ', Message: ' . $Message . ', Data:' . json_encode($Data), KL_DEBUG);
        switch ($Message) {
            case IM_CHANGESTATUS:
                if ($Data[0] === IS_ACTIVE) {
                    $this->ApplyChanges();
                }
                break;

            case IPS_KERNELMESSAGE:
                if ($Data[0] === KR_READY) {
                    $this->ApplyChanges();
                }
                break;
        }

        if ($SenderID == $this->GetIDForIdent('LastMovement')) {
            $this->GetSnapshot();
            $this->SendDebug('INSTAR recieved LastMovement at', date('H:i', time()), 0);
            $this->SendDebug('INSTAR', 'Message from SenderID ' . $SenderID . ' with Message ' . $Message . '\r\n Data: ' . print_r($Data, true), 0);
        }

    }

    private function GetHostURL()
    {
        $host     = $this->ReadPropertyString('Host');
        $port     = $this->ReadPropertyInteger('Port');
        $user     = $this->ReadPropertyString('User');
        $password = $this->ReadPropertyString('Password');
        $root     = $user . ':' . $password . '@' . $host . ':' . $port;
        return $root;
    }

    private function GetINSTARURL()
    {
        $host     = $this->ReadPropertyString('Host');
        $port     = $this->ReadPropertyInteger('Port');
        $root     = $host . ':' . $port;
        return $root;
    }

    /** Set Language
     * 1 = german, 2 = english, 3 = french, 4 = chinese.
     *
     * @param string $language
     *
     * @return bool|string
     */
    public function SetLanguage(string $language)
    {

        if ($language == 'german') {
            $response = file_get_contents('http://' . $this->GetHostURL() . '/cgi-bin/hi3510/param.cgi?cmd=set_instar_admin&-index=11&-value=1');
        } elseif ($language == 'english') {
            $response = file_get_contents('http://' . $this->GetHostURL() . '/cgi-bin/hi3510/param.cgi?cmd=set_instar_admin&-index=11&-value=2');
        } elseif ($language == 'french') {
            $response = file_get_contents('http://' . $this->GetHostURL() . '/cgi-bin/hi3510/param.cgi?cmd=set_instar_admin&-index=11&-value=3');
        } elseif ($language == 'chinese') {
            $response = file_get_contents('http://' . $this->GetHostURL() . '/cgi-bin/hi3510/param.cgi?cmd=set_instar_admin&-index=11&-value=4');
        }
        return $response;
    }

    private function SetAPI($model)
    {
        //
        if ($model == self::IN_9008_Full_HD || $model == self::IN_9010_Full_HD || $model == self::IN_9020_Full_HD || $model == self::IN_8003_Full_HD
            || $model == self::IN_8015_Full_HD) {
            $this->WriteAttributeBoolean('1080p_API', true);
            $this->WriteAttributeBoolean('720p_API', false);
            $this->WriteAttributeBoolean('VGA_API', false);
        }
        // IN-5905 HD
        if ($model == self::IN_5905_HD || $model == self::IN_5907_HD || $model == self::IN_7011_HD || $model == self::IN_6001_HD
            || $model == self::IN_6012_HD
            || $model == self::IN_6014_HD) {
            $this->WriteAttributeBoolean('1080p_API', false);
            $this->WriteAttributeBoolean('720p_API', true);
            $this->WriteAttributeBoolean('VGA_API', false);
        }
        //
        if ($model == 0 || $model == self::IN_3011) {
            $this->WriteAttributeBoolean('1080p_API', false);
            $this->WriteAttributeBoolean('720p_API', false);
            $this->WriteAttributeBoolean('VGA_API', true);
        }
    }

    /**
     * Process Webhook Data.
     */
    protected function ProcessHookData()
    {
        $username = $this->ReadPropertyString('webhook_username');
        $password = $this->ReadPropertyString('webhook_password');
        if (!isset($_SERVER['PHP_AUTH_USER'])) {
            $_SERVER['PHP_AUTH_USER'] = '';
        }
        if (!isset($_SERVER['PHP_AUTH_PW'])) {
            $_SERVER['PHP_AUTH_PW'] = '';
        }

        if (($_SERVER['PHP_AUTH_USER'] != $username) || ($_SERVER['PHP_AUTH_PW'] != $password)) {
            header('WWW-Authenticate: Basic Realm="Plex WebHook"');
            header('HTTP/1.0 401 Unauthorized');
            echo 'Authorization required';
            return;
        }
        echo 'Webhook INSTAR IP-Symcon';

        //workaround for bug
        if (!isset($_IPS)) {
            global $_IPS;
        }
        if ($_IPS['SENDER'] == 'Execute') {
            echo 'This script cannot be used this way.';
            return;
        }
        $this->SendDebug('Instar I/O', 'GET: ' . json_encode($_GET), 0);
        if (isset($_GET['active'])) {
            $this->SetValue('notification_alarm', $_GET['active']);
            $this->SetLastMovement();
        } else {
            $this->SetValue('notification_alarm', "Event");
            $this->SetLastMovement();
        }
    }

    /**
     * Register Webhook.
     *
     * @param string $webhook
     * @param bool   $delete
     */
    protected function RegisterWebhook($webhook, $delete = false)
    {
        $ids = IPS_GetInstanceListByModuleID('{015A6EB8-D6E5-4B93-B496-0D3F77AE9FE1}');

        if (count($ids) > 0) {
            $hooks = json_decode(IPS_GetProperty($ids[0], 'Hooks'), true);
            $found = false;
            foreach ($hooks as $index => $hook) {
                if ($hook['Hook'] == $webhook) {
                    if ($hook['TargetID'] == $this->InstanceID && !$delete) {
                        return;
                    } elseif ($delete && $hook['TargetID'] == $this->InstanceID) {
                        continue;
                    }

                    $hooks[$index]['TargetID'] = $this->InstanceID;
                    $found                     = true;
                }
            }
            if (!$found) {
                $hooks[] = ['Hook' => $webhook, 'TargetID' => $this->InstanceID];
            }

            IPS_SetProperty($ids[0], 'Hooks', json_encode($hooks));
            IPS_ApplyChanges($ids[0]);
        }
    }

    public function GetInfo()
    {
        $this->GetCameraModel();
        $this->GetServerInfo();
        $this->GetNetInfo();
    }

    protected function CheckAttributeType($var_name, $var_content, $suffix)
    {
        if (is_numeric($var_content)) {
            $key = array_search($var_name, $this->StringAttributes);
            if ($key > 0) {
                $string_var_content = strval($var_content);
                $this->WriteAttributeString($this->ConvertNameToAtrribute($var_name) . $suffix, $string_var_content);
                $this->UpdateParameter($this->ConvertNameToAtrribute($var_name), 'value', $string_var_content);
                $this->SendDebug('INSTAR Write Value', 'String ' . $this->ConvertNameToAtrribute($var_name) . ' = ' . print_r($string_var_content, true), 0);
                $this->WriteValue($this->ConvertNameToAtrribute($var_name) . $suffix, $string_var_content);
            } else {
                $int_var_content = intval($var_content);
                $this->SendDebug(
                    'INSTAR Write Attribute', 'Integer ' . $this->ConvertNameToAtrribute($var_name) . $suffix . ' = ' . print_r($int_var_content, true), 0
                );
                $this->WriteAttributeInteger($this->ConvertNameToAtrribute($var_name) . $suffix, $int_var_content);
                $this->UpdateParameter($this->ConvertNameToAtrribute($var_name), 'value', $int_var_content);
                $key         = array_search($var_name, $this->BooleanAttributes);
                if ($key > 0) {
                    $bool_var_content = boolval($int_var_content);
                    if ($bool_var_content) {
                        $this->SendDebug('INSTAR Write Value', 'Boolean ' . $this->ConvertNameToAtrribute($var_name) . ' = true', 0);
                        $this->WriteValue($this->ConvertNameToAtrribute($var_name) . $suffix, true);
                    } else {
                        $this->SendDebug('INSTAR Write Value', 'Boolean ' . $this->ConvertNameToAtrribute($var_name) . ' = false', 0);
                        $this->WriteValue($this->ConvertNameToAtrribute($var_name) . $suffix, false);
                    }
                } else {
                    $this->SendDebug('INSTAR Write Value', 'Integer ' . $this->ConvertNameToAtrribute($var_name) . ' = ' . $var_content, 0);
                    $this->WriteValue($this->ConvertNameToAtrribute($var_name) . $suffix, $int_var_content);
                }
            }
        } else {
            if ($var_name == 'admin_value46') {
                if ($var_content == '""') {
                    $this->SendDebug('INSTAR Write Attribute', 'Integer ' . $this->ConvertNameToAtrribute($var_name) . $suffix . ' = 0', 0);
                    $this->WriteAttributeInteger($this->ConvertNameToAtrribute($var_name) . $suffix, 0);
                    $this->UpdateParameter($this->ConvertNameToAtrribute($var_name), 'value', 0);
                } else {
                    $this->SendDebug('INSTAR Write Attribute', 'Integer ' . $this->ConvertNameToAtrribute($var_name) . $suffix . ' = ' . $var_content, 0);
                    $this->WriteAttributeInteger($this->ConvertNameToAtrribute($var_name) . $suffix, $var_content);
                    $this->UpdateParameter($this->ConvertNameToAtrribute($var_name), 'value', $var_content);
                }

            } else {
                if ($var_name == 'dhcpflag') {
                    if ($var_content == 'off') {
                        $bool_var_content = false;
                    } elseif ($var_content == 'on') {
                        $bool_var_content = true;
                    }
                    $this->WriteAttributeBoolean($this->ConvertNameToAtrribute($var_name) . $suffix, $bool_var_content);
                    $this->UpdateParameter($this->ConvertNameToAtrribute($var_name), 'value', $bool_var_content);
                }
                $this->SendDebug('INSTAR Write Attribute', 'String ' . $this->ConvertNameToAtrribute($var_name) . $suffix . ' = ' . $var_content, 0);
                $this->WriteAttributeString($this->ConvertNameToAtrribute($var_name) . $suffix, $var_content);
                $this->WriteValue($this->ConvertNameToAtrribute($var_name) . $suffix, $var_content);
            }
        }


    }

    protected function WriteValue($var_name, $var_content)
    {
        if (@$this->GetIDForIdent($var_name) > 0) {
            $this->SetValue($var_name, $var_content);
        }
    }

    protected function SplitPayload(string $payload, $suffix = "")
    {
        $data = explode(';', $payload);
        array_pop($data);
        $data = $this->SaveData($data, $suffix, $payload);
        return $data;
    }

    protected function ConvertNameToAtrribute($var_name)
    {
        $attribute_name = str_replace('[', '_', $var_name);
        $attribute_name = str_replace(']', '_', $attribute_name);
        return $attribute_name;
    }

    protected function SaveData($data, $suffix, $payload)
    {
        $result = [];
        foreach ($data as $info_device) {
            $info   = explode('=', $info_device);
            $prefix = substr(trim($info[0]), 0, 3);
            if ($prefix == 'var') {
                $var_name    = substr(trim($info[0]), 4);
                $var_content = trim($info[1], '"');
            } else {
                $var_name = $info[0];
                if ($var_name == 'admin_value31' || $var_name == 'admin_value46') {
                    $var_content = explode('=', $payload)[1];
                    $this->CheckAttributeType($var_name, $var_content, $suffix);
                    break;

                } else {
                    if (isset($info[1])) {
                        $var_content = trim($info[1], '"');
                    }
                }
            }
            $this->CheckAttributeType($var_name, $var_content, $suffix);
            $result[] = ['name' => $var_name, 'value' => $var_content];
        }
        return $result;
    }

    // Network Menu

    // IP Configuration

    /** Camera´s Network Configuration
     *
     * @return array
     */
    public function GetCameraNetworkConfiguration()
    {
        $payload = $this->SendParameter('getnetattr');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    public function SetNetworkParameters($ip, $netmask, $gateway, $fdnsip, $httpport, $httpsport, $rtmpport, $rtsp_aenable, $rtspport)
    {
        $this->WriteAttributeString('ip', $ip);
        $this->WriteAttributeString('netmask', $netmask);
        $this->WriteAttributeString('gateway', $gateway);
        $this->SetCameraNetworkConfiguration();
        $this->WriteAttributeString('fdnsip', $fdnsip);
        $this->SetCameraNetworkConfiguration();
        $this->SetCameraHTTP_Port($httpport);
        $this->SetCameraHTTPS_Port($httpsport);
        $this->SetCameraRTMP_Port($rtmpport);
        $this->SetCameraRTSP_Port($rtspport);
        $this->SetRTSPAuthenticationState($rtsp_aenable);
    }


    /** Set Camera´s Network Configuration
     *
     * @return array
     */
    public function SetCameraNetworkConfiguration()
    {
        $ip        = $this->ReadAttributeString('ip');
        $dhcpflag  = $this->ReadAttributeString('dhcpflag');
        $netmask   = $this->ReadAttributeString('netmask');
        $gateway   = $this->ReadAttributeString('gateway');
        $fdnsip   = $this->ReadAttributeString('fdnsip');
        $sdnsip   = $this->ReadAttributeString('sdnsip');
        $parameter = '&-dhcpflag=' . $dhcpflag . '&-ip=' . $ip . '&-netmask=' . $netmask . '&-gateway=' . $gateway . '&-fdnsip=' . $fdnsip . '&-sdnsip=' . $sdnsip;
        $data      = $this->SendParameter('setnetattr' . $parameter);
        return $data;
    }

    public function GetCameraPorts()
    {
        $this->GetCameraHTTP_Port();
        $this->GetCameraHTTPS_Port();
        $this->GetCameraRTSP_Port();
        $this->GetRTSPAuthenticationState();
        $this->GetCameraRTMP_Port();
    }

    private function ExplodePort($string_port)
    {
        $data = explode('=', $string_port);
        $port = intval(trim($data[1], '"'));
        return $port;
    }

    /** Get your Camera´s HTTP Port
     *
     * @return false|string
     */
    public function GetCameraHTTP_Port()
    {
        $port = $this->SendParameter('gethttpport');
        $port = $this->ExplodePort($port);
        $this->WriteAttributeInteger('httpport', $port);
        return $port;
    }

    /** Set your Camera´s HTTP Port
     *
     * @param int $http_port
     *
     * @return false|string
     */
    public function SetCameraHTTP_Port(int $http_port)
    {
        $port = 'could not set port';
        if ($http_port != 0) {
            $parameter = '&-httpport=' . $http_port;
            $port      = $this->SendParameter('sethttpport' . $parameter);
        }
        return $port;
    }

    /** Get your Camera´s HTTPS Port
     *
     * @return false|string
     */
    public function GetCameraHTTPS_Port()
    {
        $port = $this->SendParameter('gethttpsport');
        $port = $this->ExplodePort($port);
        $this->WriteAttributeInteger('httpsport', $port);
        return $port;
    }

    /** Set your Camera´s HTTPS Port
     *
     * @param int $https_port
     *
     * @return false|string
     */
    public function SetCameraHTTPS_Port(int $https_port)
    {
        $port = 'could not set port';
        if ($https_port != 0) {
            $parameter = '&-httpsport=' . $https_port;
            $port      = $this->SendParameter('sethttpsport' . $parameter);
        }
        return $port;
    }

    /** Get your Camera´s RTSP Port
     *
     * @return false|string
     */
    public function GetCameraRTSP_Port()
    {
        $port = $this->SendParameter('getrtspport');
        $port = $this->ExplodePort($port);
        $this->WriteAttributeInteger('rtspport', $port);
        return $port;
    }

    /** Set your Camera´s RTSP Port
     *
     * @param int $rtsp_port
     *
     * @return false|string
     */
    public function SetCameraRTSP_Port(int $rtsp_port)
    {
        $parameter = '&rtspport=' . $rtsp_port;
        $port      = $this->SendParameter('setrtspport' . $parameter);
        return $port;
    }

    /** Get RTSP Authentication State
     *
     * @return false|string
     */
    public function GetRTSPAuthenticationState()
    {
        $auth = $this->SendParameter('getrtspauth');
        $auth = $this->ExplodePort($auth);
        $this->WriteAttributeInteger('rtsp_aenable', $auth);
        return $auth;
    }

    /** Set RTSP Authentication State
     *
     * @return false|string
     */
    public function SetRTSPAuthenticationState(bool $state)
    {
        if ($state) {
            $enable = 1;
        } else {
            $enable = 0;
        }
        $parameter = '&-rtsp_aenable=' . $enable;
        $state     = $this->SendParameter('setrtspauth' . $parameter);
        return $state;
    }

    /** Get your Camera's RTMP Port
     *
     * @return false|string
     */
    public function GetCameraRTMP_Port()
    {
        $port = $this->SendParameter('getrtmpattr');
        $port = $this->ExplodePort($port);
        $this->WriteAttributeInteger('rtmpport', $port);
        return $port;
    }

    /** Set your Camera's RTMP Port
     *
     * @param int $rtmp_port
     *
     * @return false|string
     */
    public function SetCameraRTMP_Port(int $rtmp_port)
    {
        $parameter = '&-rtmpport=' . $rtmp_port;
        $port      = $this->SendParameter('setrtmpattr' . $parameter);
        return $port;
    }

    /** Get Network Configuration
     *
     * @return array
     */
    public function GetNetInfo()
    {
        $payload = $this->SendParameter('getnetinfo');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Get INSTAR Camera Model
     *
     * @return bool|string
     */
    public function GetCameraModel()
    {
        $payload = $this->SendParameter('getsysinfo');
        $data    = explode('"', $payload);
        $model   = $data[1];
        $this->SendDebug('INSTAR', 'Model: ' . $model, 0);
        $this->WriteAttributeString('model', $model);
        return $model;
    }



    // Wifi Settings

    /** Get your Camera´s WLAN Configuration
     *
     * @return array
     */
    public function GetCameraWIFIConfiguration()
    {
        $payload = $this->SendParameter('getwirelessattr');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    public function EnableWIFI(bool $wf_enable)
    {
        $this->WriteAttributeInteger('wf_enable', intval($wf_enable));
        $data = $this->SetCameraWIFIConfiguration();
        return $data;
    }

    public function SetWifiParameters(bool $wf_enable, string $wf_ssid, int $wf_auth, string $wf_key, int $wf_enc, int $wf_mode)
    {
        $this->WriteAttributeInteger('wf_enable', intval($wf_enable));
        $this->WriteAttributeString('wf_ssid', $wf_ssid);
        $this->WriteAttributeInteger('wf_auth', $wf_auth);
        $this->WriteAttributeString('wf_key', $wf_key);
        $this->WriteAttributeInteger('wf_enc', $wf_enc);
        $this->WriteAttributeInteger('wf_mode', $wf_mode);
        $data = $this->SetCameraWIFIConfiguration();
        return $data;
    }

    /** Set Camera´s WIFI Configuration
     *
     * @return array
     */
    public function SetCameraWIFIConfiguration()
    {
        $wf_enable = $this->ReadAttributeInteger('wf_enable'); // 1 (WiFi enabled), 0 (WiFi disabled)
        $wf_ssid   = $this->ReadAttributeString('wf_ssid'); // SSID (max. 32 Characters)
        $wf_auth   = $this->ReadAttributeInteger('wf_auth'); // 0 (no encryption), 1 (WEP), 2 (WPA-PSK), 3 (WPA2-PSK)
        $wf_key    = $this->ReadAttributeString('wf_key'); // Key max. 63 Characters (Allowed special characters: &='`)
        $wf_enc    = $this->RegisterAttributeInteger('wf_enc', 0); // Key type 0 (TKIP), 1 (AES)
        $wf_mode   = $this->RegisterAttributeInteger('wf_mode', 0); // 0 (infra), 1 (ad-hoc)
        $parameter = '&-wf_ssid=' . $wf_ssid . '&-wf_enable=' . $wf_enable . '&-wf_auth=' . $wf_auth . '&-wf_key=' . $wf_key . '&-wf_enc=' . $wf_enc
                     . '&-wf_mode=' . $wf_mode;
        $data      = $this->SendParameter('setwirelessattr' . $parameter);
        return $data;
    }

    /** Get your Camera´s Search for WiFi Access Points
     *
     * @return array
     */
    public function SearchWiFiAccessPoints()
    {
        $payload = $this->SendParameter('searchwireless');
        $data    = explode(';', $payload);
        array_pop($data);
        $search = [];
        foreach ($data as $info_device) {
            $info        = explode('=', $info_device);
            $var_name    = substr(trim($info[0]), 4);
            $var_content = trim($info[1], '"');
            $this->SendDebug('INSTAR Receive Variable', $var_name . ' = ' . $var_content, 0);
            $search[$var_name] = $var_content;
        }
        return $search;
    }

    /** Get your Camera´s Search for WiFi Access Points
     *
     * @return array
     */
    public function GetCameraWiFiAccessPoint()
    {
        $payload = $this->SendParameter('getchkwireless');
        $data    = explode(';', $payload);
        array_pop($data);
        $search = [];
        foreach ($data as $info_device) {
            $info        = explode('=', $info_device);
            $var_name    = substr(trim($info[0]), 4);
            $var_content = trim($info[1], '"');
            $this->SendDebug('INSTAR Receive Variable', $var_name . ' = ' . $var_content, 0);
            $search[$var_name] = $var_content;
        }
        return $search;
    }

    /** Set your Camera´s WiFi Access Points
     *
     * @param string $wf_ssid SSID (max. 32 Characters)
     * @param int    $wauth   Encryption mode - 0: (no encryption), 1 (WEP), 2 (WPA-PSK), 3 (WPA2-PSK)
     * @param string $wf_key  WiFi Key
     * @param int    $wf_enc  Encryption 0 (TKIP), 1 (AES)
     * @param int    $wf_mode Connection Mode 0 (Infra), 1 (Ad-hoc)
     *
     * @return false|string
     */
    public function SetCameraWiFiAccessPoint(string $wf_ssid, int $wauth, string $wf_key, int $wf_enc, int $wf_mode)
    {
        $parameter = '&-wf_ssid=' . $wf_ssid . '&-wf_auth=' . $wauth . '&-wf_key=' . $wf_key . '&-wf_enc=' . $wf_enc . '&-wf_mode=' . $wf_mode;
        $data      = $this->SendParameter('setwirelessattr' . $parameter);
        return $data;
    }

    // Remote Access

    /** Get your Camera´s INSTAR DDNS Configuration
     *
     * @return array
     */
    public function GetDDNSConfiguration()
    {
        $payload = $this->SendParameter('getourddnsattr');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Get your Camera´s 3rd Party DDNS Configuration
     *
     * @return array
     */
    public function Get3rdPartyDDNSConfiguration()
    {
        $payload = $this->SendParameter('get3thddnsattr');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    public function EnabeINSTAR_DNS(bool $our_enable)
    {
        $this->WriteAttributeInteger('our_enable', intval($our_enable));
        if($our_enable)
        {
            $this->WriteAttributeInteger('d3th_enable', 0);
            $this->UpdateParameter('d3th_enable', 'value', false);
            $parameter    = '&-d3th_enable=0';
        }
        else{
            $this->WriteAttributeInteger('d3th_enable', 1);
            $this->UpdateParameter('d3th_enable', 'value', true);
            $parameter    = '&-d3th_enable=1';
        }


        $data         = $this->SendParameter('set3thddnsattr' . $parameter);
        return $data;
    }

    public function Enabel3thDNS(bool $d3th_enable)
    {
        $this->WriteAttributeInteger('d3th_enable', intval($d3th_enable));
        if($d3th_enable)
        {
            $this->WriteAttributeInteger('our_enable', 0);
            $this->UpdateParameter('our_enable', 'value', false);
        }
        else{
            $this->WriteAttributeInteger('our_enable', 1);
            $this->UpdateParameter('our_enable', 'value', true);
        }

        $parameter    = '&-d3th_enable=' . $d3th_enable;
        $data         = $this->SendParameter('set3thddnsattr' . $parameter);
        return $data;
    }

    public function Set3rdPartyDDNSParameters(string $d3th_domain, string $d3th_service, string $d3th_uname, string $d3th_passwd)
    {
        $this->WriteAttributeString('d3th_domain', $d3th_domain);
        $this->WriteAttributeString('d3th_service', $d3th_service);
        $this->WriteAttributeString('d3th_uname', $d3th_uname);
        $this->WriteAttributeString('d3th_passwd', $d3th_passwd);
        $this->Set3rdPartyDDNSConfiguration();
    }

    public function Set3rdPartyDDNSConfiguration()
    {
        $d3th_enable  = $this->ReadAttributeInteger(
            'd3th_enable'
        ); // 1: 3rd Party DDNS activated / INSTAR DDNS disabled, 0: 3rd Party DDNS deactivated / INSTAR DDNS enabled
        $d3th_service = $this->ReadAttributeInteger('d3th_service'); // 0: DynDNS, 1: NoIP
        $d3th_uname   = $this->ReadAttributeString('d3th_uname'); // Your Username
        $d3th_passwd  = $this->ReadAttributeString('d3th_passwd'); // Your Password
        $d3th_domain  = $this->ReadAttributeString('d3th_domain'); // Your 3rd Party DDNS Address
        $parameter    =
            '&-d3th_enable=' . $d3th_enable . '&-d3th_service=' . $d3th_service . '&-d3th_uname=' . $d3th_uname . '&-d3th_passwd=' . $d3th_passwd
            . '&-d3th_domain=' . $d3th_domain;
        $data         = $this->SendParameter('set3thddnsattr' . $parameter);
        return $data;
    }

    /** Get Server Info
     *
     * @return array
     */
    public function GetServerInfo()
    {
        $payload = $this->SendParameter('getserverinfo');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    // UPnP Settings

    public function GetUPNPConfiguration()
    {
        $payload = $this->SendParameter('getupnpattr');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    public function SetUPNPConfiguration(bool $upnp)
    {
        if ($upnp) {
            $this->WriteAttributeInteger('upm_enable', 1);
            $upnp = 1;
        } else {
            $this->WriteAttributeInteger('upm_enable', 0);
            $upnp = 0;
        }
        $parameter = '&-upm_enable=' . $upnp;
        $data      = $this->SendParameter('setupnpattr' . $parameter);
        return $data;
    }

    // ONVIF Settings

    /**
     * @return array
     */
    public function GetONVIFConfiguration()
    {
        $payload = $this->SendParameter('getonvifattr');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /**
     * @return false|string
     */
    public function SetONVIFConfiguration()
    {
        $ov_enable    = $this->ReadAttributeInteger('ov_enable'); // 1 ONVIF activated, 0 ONVIF deactivated
        $ov_port      = $this->ReadAttributeInteger('ov_port'); // ONVIF Port
        $ov_authflag  = $this->ReadAttributeInteger('ov_authflag'); // 1 ONVIF Login Required, 0: ONVIF Authentication deactivated
        $ov_forbitset = $this->ReadAttributeInteger(
            'ov_forbitset'
        ); // 0: When the time zone setting allows image parameter settings allow, 1: When the time zone setting disabled, the image parameter settings allow, 2: When the time zone setting allows image parameter settings prohibit, 3: When the time zone setting is prohibited, prohibited image parameter settings
        $ov_subchn    = $this->ReadAttributeInteger('ov_subchn'); // Use video channel 11, 12 or 13
        $ov_snapchn   = $this->RegisterAttributeInteger('ov_snapchn', 0); // Use video channel 11, 12 or 13 for snapshots
        $ov_nvctype   = $this->ReadAttributeInteger('ov_nvctype');

        $parameter = '&-ov_enable=' . $ov_enable . '&-ov_port=' . $ov_port . '&-ov_authflag=' . $ov_authflag . '&-ov_forbitset=' . $ov_forbitset
                     . '&-ov_subchn=' . $ov_subchn . '&-ov_snapchn=' . $ov_snapchn . '&-ov_nvctype=' . $ov_nvctype;
        $data      = $this->SendParameter('setonvifattr' . $parameter);
        return $data;
    }

    // Multimedia Menu

    // Audio Settings

    /** Get the Volume the Audio Input
     *
     * @return array
     */
    public function GetVolumeAudioInput()
    {
        $payload = $this->SendParameter('getaudioinvolume');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    public function SetVolume(int $volume)
    {
        $this->WriteAttributeInteger('volume', $volume);
        $this->SetVolumeAudioInput();
    }

    public function SetVolumeInputType(bool $volin_type)
    {
        $volin_type = intval($volin_type);
        $this->WriteAttributeInteger('volin_type', $volin_type);
        $this->SetVolumeAudioInput();
    }

    public function SetAudioEncoder(int $aec)
    {
        $aec = intval($aec);
        $this->WriteAttributeInteger('aec', $aec);
        $this->SetVolumeAudioInput();
    }

    public function SetNoiseSurpression(int $denoise)
    {
        $denoise = intval($denoise);
        $this->WriteAttributeInteger('denoise', $denoise);
        $this->SetVolumeAudioInput();
    }

    /** Set the Volume the Audio Input
     *
     * @return false|string
     */
    public function SetVolumeAudioInput()
    {
        $volume = $this->ReadAttributeInteger('volume');
        if ($volume < 1) {
            $volume = 1;
        }
        if ($volume > 100) {
            $volume = 100;
        }
        $volin_type = $this->ReadAttributeInteger('volin_type');
        $aec        = $this->ReadAttributeInteger('aec');
        $denoise    = $this->ReadAttributeInteger('denoise');
        $parameter  = '&-volume=' . $volume . '&-volin_type=' . $volin_type . '&-aec=' . $aec . '&-denoise=' . $denoise;
        $data       = $this->SendParameter('setaudioinvolume' . $parameter);
        return $data;
    }

    /** Get the Volume the Audio Output
     *
     * @return array
     */
    public function GetVolumeAudioOutput()
    {
        $payload = $this->SendParameter('getaudiooutvolume');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    public function SetOutputVolume(int $volume)
    {
        $this->WriteAttributeInteger('ao_volume', $volume);
        $this->SetVolumeAudioOutput();
    }

    /** Set the Volume the Audio Output
     *
     * @return false|string
     */
    public function SetVolumeAudioOutput()
    {
        $ao_volume = $this->ReadAttributeInteger('ao_volume');
        if ($ao_volume < 1) {
            $ao_volume = 1;
        }
        if ($ao_volume > 100) {
            $ao_volume = 100;
        }
        $parameter = '&-ao_volume=' . $ao_volume;
        $data      = $this->SendParameter('setaudioinvolume' . $parameter);
        return $data;
    }

    /** Get Audio Encoder Parameter Channel 1
     *
     * @return array
     */
    public function GetAudioEncoderParameterChannel1()
    {
        $data = $this->GetAudioEncoderParameter(1);
        return $data;
    }

    /** Get Audio Encoder Parameter Channel 2
     *
     * @return array
     */
    public function GetAudioEncoderParameterChannel2()
    {
        $data = $this->GetAudioEncoderParameter(2);
        return $data;
    }

    /** Get Audio Encoder Parameter Channel 3
     *
     * @return array
     */
    public function GetAudioEncoderParameterChannel3()
    {
        $data = $this->GetAudioEncoderParameter(3);
        return $data;
    }

    /** Get Audio Encoder Parameter
     *
     * @return array
     */
    private function GetAudioEncoderParameter($channel)
    {
        $payload = $this->SendParameter('getaencattr&-chn=' . $channel);
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set Audio Encoder Parameter Channel 1
     *
     * @return false|string
     */
    public function SetAudioEncoderParameterChannel1()
    {
        $data = $this->SetAudioEncoderParameter(1);
        return $data;
    }

    /** Set Audio Encoder Parameter Channel 2
     *
     * @return false|string
     */
    public function SetAudioEncoderParameterChannel2()
    {
        $data = $this->SetAudioEncoderParameter(2);
        return $data;
    }

    /** Set Audio Encoder Paramete7r Channel 3
     *
     * @return false|string
     */
    public function SetAudioEncoderParameterChannel3()
    {
        $data = $this->SetAudioEncoderParameter(3);
        return $data;
    }

    /** Set Audio Encoder Parameter
     *
     * @return false|string
     */
    private function SetAudioEncoderParameter($channel)
    {
        $aeswitch = $this->ReadAttributeInteger('aeswitch_' . $channel);
        $aeformat = $this->ReadAttributeString('aeformat_' . $channel);

        $parameter = '&-chn=' . $channel . '&-aeswitch_' . $channel . '=' . $aeswitch . '&-aeformat_' . $channel . '=' . $aeformat;
        $data      = $this->SendParameter('setaudioinvolume' . $parameter);
        return $data;
    }


    // Video Settings

    /** Get the Video Attributes
     *
     * @return array
     */
    public function GetVideoAttributes()
    {
        $payload = $this->SendParameter('getvideoattr');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    public function SetVideoMode(int $videomode)
    {
        $this->WriteAttributeInteger('videomode', $videomode);
        $data = $this->SetVideoAttributes();
        return $data;
    }

    public function SetWDRMode(int $wdrmode)
    {
        $this->WriteAttributeInteger('wdrmode', $wdrmode);
        $data = $this->SetVideoAttributes();
        return $data;
    }

    public function SetVideoProfile(int $profile)
    {
        $this->WriteAttributeInteger('profile', $profile);
        $data = $this->SetVideoAttributes();
        return $data;
    }

    public function SetMaxChn(int $maxchn)
    {
        $this->WriteAttributeInteger('maxchn', $maxchn);
        $data = $this->SetVideoAttributes();
        return $data;
    }

    public function SetVideonorm(int $vinorm)
    {
        if ($vinorm == 0) {
            $this->WriteAttributeString('vinorm', 'P');
        }
        $data = $this->SetVideoAttributes();
        return $data;
    }

    /** Set the Video Attributes
     *
     * @return false|string
     */
    public function SetVideoAttributes()
    {
        $videomode = $this->ReadAttributeInteger('videomode');
        $maxchn    = $this->ReadAttributeInteger('maxchn');
        $wdrmode   = $this->ReadAttributeInteger('wdrmode');
        $profile   = $this->ReadAttributeInteger('profile');
        $vinorm    = $this->ReadAttributeString('vinorm');
        $parameter = '&-videomode=' . $videomode . '&-vinorm=' . $vinorm . '&-wdrmode=' . $wdrmode . '&-profile=' . $profile . '&-maxchn=' . $maxchn;
        $data      = $this->SendParameter('setvideoattr' . $parameter);
        return $data;
    }

    /** Get the Video Encoder Attributes for Video Streams 11, 12, 13
     *
     * @return array
     */
    public function GetVideoEncoderAttributes()
    {

        // TODO Error Parameter

        $payload = $this->SendParameter('getvencattr');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set the Video Encoder Attributes for Video Streams 11, 12, 13
     *
     * @return false|string
     */
    public function SetVideoEncoderAttributes()
    {
        $chn          = $this->ReadAttributeInteger('chn');
        $bps_1        = $this->ReadAttributeInteger('bps_1');
        $imagegrade_1 = $this->ReadAttributeInteger('imagegrade_1');
        $brmode_1     = $this->ReadAttributeInteger('brmode_1');
        $fps_1        = $this->ReadAttributeInteger('fps_1');
        $gop_1        = $this->ReadAttributeInteger('gop_1');
        $parameter    =
            '&-chn=' . $chn . '&-bps_1=' . $bps_1 . '&-imagegrade_1=' . $imagegrade_1 . '&-brmode_1=' . $brmode_1 . '&-fps_1=' . $fps_1 . '&-gop_1='
            . $gop_1;
        $data         = $this->SendParameter('setvencattr' . $parameter);
        return $data;
    }

    // Image Settings

    /** Get Image Parameter
     *
     * @return array
     */
    public function GetImageParameter()
    {
        $payload = $this->SendParameter('getimageattr');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set Image Parameter
     *
     * @return false|string
     */
    public function SetImageParameter()
    {
        $brightness = $this->ReadAttributeInteger('brightness'); // brightness [0-100]
        $saturation = $this->ReadAttributeInteger('saturation'); // saturation [0-255]
        $sharpness  = $this->ReadAttributeInteger('sharpness'); // sharpness [0-100]
        $contrast   = $this->ReadAttributeInteger('contrast'); // contrast [0-100]
        $hue        = $this->ReadAttributeInteger('hue'); // hue [0-255]
        $wdr        = $this->ReadAttributeString('wdr'); // Software Wide Dynamic Range Mode: [on, off]
        $night      = $this->ReadAttributeString('night'); // Night mode 0 (inactive) off, 1 (active) on
        $shutter    = $this->ReadAttributeInteger('shutter'); // Shutter Speed [0 - 65535]
        $flip       = $this->ReadAttributeString('flip'); //  Flip the Image [on, off]
        $mirror     = $this->ReadAttributeString('mirror'); //   Mirror the Image [on, off]
        $scene      = $this->ReadAttributeString('scene'); //  scene
        $parameter  =
            '&-brightness=' . $brightness . '&-saturation=' . $saturation . '-sharpness=' . $sharpness . '&-contrast=' . $contrast . '&-hue=' . $hue
            . '&-wdr=' . $wdr . '&-night=' . $night . '&-shutter=' . $shutter . '&-flip=' . $flip . '&-mirror=' . $mirror . '&-scene=' . $scene;
        $data       = $this->SendParameter('setimageattr' . $parameter);
        return $data;
    }

    /**
     * @param int $brightness [0 - 100] the bigger the value the brighter the image
     *
     * @return false|string
     */
    public function Brightness(int $brightness)
    {
        if ($brightness < 0) {
            $brightness = 0;
        }
        if ($brightness > 100) {
            $brightness = 100;
        }
        $this->SetValue('brightness', $brightness);
        $this->WriteAttributeInteger('brightness', $brightness);
        $response = $this->SetImageParameter();
        return $response;
    }

    /**
     * @param int $saturation [0 - 255] the bigger the value the more saturation the image has
     *
     * @return false|string
     */
    public function Saturation(int $saturation)
    {
        if ($saturation < 0) {
            $saturation = 0;
        }
        if ($saturation > 255) {
            $saturation = 255;
        }
        $this->SetValue('saturation', $saturation);
        $this->WriteAttributeInteger('saturation', $saturation);
        $response = $this->SetImageParameter();
        return $response;
    }

    public function Sharpness(int $sharpness)
    {
        if ($sharpness < 0) {
            $sharpness = 0;
        }
        if ($sharpness > 100) {
            $sharpness = 100;
        }
        $this->SetValue('sharpness', $sharpness);
        $this->WriteAttributeInteger('sharpness', $sharpness);
        $response = $this->SetImageParameter();
        return $response;
    }

    /**
     * @param int $contrast [0 - 100] the bigger the value the more contrast the image has
     *
     * @return false|string
     */
    public function Contrast(int $contrast)
    {
        if ($contrast < 0) {
            $contrast = 0;
        }
        if ($contrast > 100) {
            $contrast = 100;
        }
        $this->SetValue('contrast', $contrast);
        $this->WriteAttributeInteger('contrast', $contrast);
        $response = $this->SetImageParameter();
        return $response;
    }

    // todo Check hue values

    /**
     * @param int $hue [0 - 255] the bigger the value the more hue the image has
     *
     * @return false|string
     */
    public function Hue(int $hue)
    {
        if ($hue < 0) {
            $hue = 0;
        }
        if ($hue > 255) {
            $hue = 255;
        }
        $this->SetValue('hue', $hue);
        $this->WriteAttributeInteger('hue', $hue);
        $response = $this->SetImageParameter();
        return $response;
    }

    /** Flip Picture
     *
     * @param bool $flip true / false (on , off) flips the image
     *
     * @return false|string
     */
    public function FlipPicture(bool $flip)
    {
        if ($flip) {
            $flip_value = 'on';
        } else {
            $flip_value = 'off';
        }
        $this->SetValue('flip', $flip);
        $this->WriteAttributeString('flip', $flip_value);
        $parameter = '&-flip=' . $flip_value;
        $data      = $this->SendParameter('setimageattr' . $parameter);
        return $data;
    }

    /** Mirror Image
     *
     * @param bool $mirror true / false (on , off) mirror the image
     *
     * @return false|string
     */
    public function MirrorPicture(bool $mirror)
    {
        if ($mirror) {
            $mirror_value = 'on';
        } else {
            $mirror_value = 'off';
        }
        $this->SetValue('mirror', $mirror);
        $this->WriteAttributeString('mirror', $mirror_value);
        $parameter = '&-mirror=' . $mirror_value;
        $data      = $this->SendParameter('setimageattr' . $parameter);
        return $data;
    }

    /** Equalize Image
     *
     * @param int $targety 0 -255
     *
     * @return false|string
     */
    public function EqualizeImage(int $targety)
    {
        if ($targety < 0) {
            $targety = 0;
        }
        if ($targety > 255) {
            $targety = 255;
        }
        $this->SetValue('targety', $targety);
        $this->WriteAttributeInteger('targety', $targety);
        $response = $this->SetImageParameter();
        return $response;
    }

    /**
     * @param string $scene (auto , indoor , outdoor) sets the white balance mode
     *
     * @return false|string
     */
    public function Scene(string $scene)
    {
        $this->SetValue('scene', $scene);
        $this->WriteAttributeString('scene', $scene);
        $response = $this->SetImageParameter();
        return $response;
    }

    /** Get Extended Image Attributes
     *
     * @return array
     */
    public function GetExtendedImageAttributes()
    {
        $payload = $this->SendParameter('getimageattrex');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    public function SetWDRAuto(int $wdrauto)
    {
        $this->WriteAttributeInteger('wdrauto', $wdrauto);
        $data = $this->SetVideoAttributes();
        return $data;
    }

    public function SetWDRAutval(int $wdrautval)
    {
        $this->WriteAttributeInteger('wdrautval', $wdrautval);
        $data = $this->SetVideoAttributes();
        return $data;
    }

    public function SetD3noauto(int $d3noauto)
    {
        $this->WriteAttributeInteger('d3noauto', $d3noauto);
        $data = $this->SetVideoAttributes();
        return $data;
    }

    public function SetD3noval(int $d3noval)
    {
        $this->WriteAttributeInteger('d3noval', $d3noval);
        $data = $this->SetVideoAttributes();
        return $data;
    }

    public function SetWDRmanval(int $wdrmanval)
    {
        $this->WriteAttributeInteger('wdrmanval', $wdrmanval);
        $data = $this->SetVideoAttributes();
        return $data;
    }

    /** Set Extended Image Attributes
     *
     * @return false|string
     */
    public function SetExtendedImageAttributes()
    {
        $wdrauto   = $this->ReadAttributeInteger('wdrauto');
        $wdrautval = $this->ReadAttributeInteger('wdrautval');
        $d3noauto  = $this->ReadAttributeInteger('d3noauto');
        $d3noval   = $this->ReadAttributeInteger('d3noval');
        $parameter = '&-wdrauto=' . $wdrauto . '&-wdrautval=' . $wdrautval . '&-d3noauto=' . $d3noauto . '&-d3noval=' . $d3noval;
        $data      = $this->SendParameter('setimageattrex' . $parameter);
        return $data;
    }

    /** Get Lens Distortion Correction
     *
     * @return array
     */
    public function GetLensDistortionCorrection()
    {
        $payload = $this->SendParameter('getldcattr');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set Lens Distortion Correction
     *
     * @return false|string
     */
    public function SetLensDistortionCorrection()
    {
        $ldc_enable  = $this->ReadAttributeInteger('ldc_enable');
        $ldc_xoffset = $this->ReadAttributeInteger('ldc_xoffset');
        $ldc_yoffset = $this->ReadAttributeInteger('ldc_yoffset');
        $ldc_ratio   = $this->ReadAttributeInteger('ldc_ratio');
        $parameter   =
            '&-ldc_enable=' . $ldc_enable . '&-ldc_xoffset=' . $ldc_xoffset . '&-ldc_yoffset=' . $ldc_yoffset . '&-ldc_ratio=' . $ldc_ratio;
        $data        = $this->SendParameter('setldcattr' . $parameter);
        return $data;
    }

    // Image Oberlays

    /** Get OSD Parameter
     *
     * @return array
     */
    public function GetOSDParameter()
    {
        $payload = $this->SendParameter('getoverlayattr&-region=0&cmd=getoverlayattr&-region=1');
        $data    = $this->SplitPayload($payload, '_osd');
        return $data;
    }

    public function EnableOSD_Name(bool $show_1)
    {
        $this->WriteAttributeInteger('show_1_osd', intval($show_1));
        $this->SetOSDParameter();
    }

    public function EnableOSD_Time(bool $show_2)
    {
        $this->WriteAttributeInteger('show_1_osd', intval($show_2));
        $this->SetOSDParameter();
    }

    public function SetOSDParameters(string $name_0, string $name_1)
    {
        $this->WriteAttributeString('name_0_osd', $name_0);
        $this->WriteAttributeString('name_1_osd', $name_1);
        $this->SetOSDParameter();
    }

    /** Set OSD Parameter
     *
     * @return false|string
     */
    public function SetOSDParameter()
    {
        $show_0 = $this->ReadAttributeInteger('show_0_osd');
        $show_1 = $this->ReadAttributeInteger('show_1_osd');
        $name_0 = $this->ReadAttributeString('name_0_osd');
        $name_1 = $this->ReadAttributeString('name_1_osd');
        $parameter_2 = '&cmd=setoverlayattr&-region=1&-show=' . $show_1 .'&-name=' . $name_1;
        $parameter = '&-show=' . $show_0 . '&-name=' . $name_0;
        $data      = $this->SendParameter('setoverlayattr&-region=0' . $parameter . $parameter_2);
        return $data;
    }

    // Privacy Mask

    /** Get Privacy Mask Attributes
     *
     * @return array
     */
    public function GetPrivacyMaskAttributes()
    {
        // TODO region
        // http://admin:instar@192.168.178.88/param.cgi?cmd=getoverlayattr&-region=0
        $payload = $this->SendParameter('getcover');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    public function SetPrivacyZone1($show_1)
    {
        $this->WriteAttributeInteger('show_1', intval($show_1));
        $data = $this->SetPrivacyMaskAttributes();
        return $data;
    }

    public function SetPrivacyZone2($show_2)
    {
        $this->WriteAttributeInteger('show_2', intval($show_2));
        $data = $this->SetPrivacyMaskAttributes();
        return $data;
    }

    public function SetPrivacyZone3($show_3)
    {
        $this->WriteAttributeInteger('show_3', intval($show_3));
        $data = $this->SetPrivacyMaskAttributes();
        return $data;
    }

    public function SetPrivacyZone4($show_4)
    {
        $this->WriteAttributeInteger('show_4', intval($show_4));
        $data = $this->SetPrivacyMaskAttributes();
        return $data;
    }

    public function SetSettingsPrivacyZone1($color_1, $x_1, $y_1, $w_1, $h_1)
    {
        $this->WriteAttributeString('color_1', $color_1);
        $this->WriteAttributeInteger('x_1', $x_1);
        $this->WriteAttributeInteger('y_1', $y_1);
        $this->WriteAttributeInteger('w_1', $w_1);
        $this->WriteAttributeInteger('h_1', $h_1);
        $data = $this->SetPrivacyMaskAttributes();
        return $data;
    }

    public function SetSettingsPrivacyZone2($color_2, $x_2, $y_2, $w_2, $h_2)
    {
        $this->WriteAttributeString('color_2', $color_2);
        $this->WriteAttributeInteger('x_2', $x_2);
        $this->WriteAttributeInteger('y_2', $y_2);
        $this->WriteAttributeInteger('w_2', $w_2);
        $this->WriteAttributeInteger('h_2', $h_2);
        $data = $this->SetPrivacyMaskAttributes();
        return $data;
    }

    public function SetSettingsPrivacyZone3($color_3, $x_3, $y_3, $w_3, $h_3)
    {
        $this->WriteAttributeString('color_1', $color_3);
        $this->WriteAttributeInteger('x_3', $x_3);
        $this->WriteAttributeInteger('y_3', $y_3);
        $this->WriteAttributeInteger('w_3', $w_3);
        $this->WriteAttributeInteger('h_3', $h_3);
        $data = $this->SetPrivacyMaskAttributes();
        return $data;
    }

    public function SetSettingsPrivacyZone4($color_4, $x_4, $y_4, $w_4, $h_4)
    {
        $this->WriteAttributeString('color_1', $color_4);
        $this->WriteAttributeInteger('x_4', $x_4);
        $this->WriteAttributeInteger('y_4', $y_4);
        $this->WriteAttributeInteger('w_4', $w_4);
        $this->WriteAttributeInteger('h_4', $h_4);
        $data = $this->SetPrivacyMaskAttributes();
        return $data;
    }

    /** Set Privacy Mask Attributes
     *
     * @return false|string
     */
    public function SetPrivacyMaskAttributes()
    {
        $show_1  = $this->ReadAttributeInteger('show_1');
        $color_1 = $this->ReadAttributeString('color_1');
        $x_1     = $this->ReadAttributeInteger('x_1');
        $y_1     = $this->ReadAttributeInteger('y_1');
        $w_1     = $this->ReadAttributeInteger('w_1');
        $h_1     = $this->ReadAttributeInteger('h_1');
        $show_2  = $this->ReadAttributeInteger('show_2');
        $color_2 = $this->ReadAttributeString('color_2');
        $x_2     = $this->ReadAttributeInteger('x_2');
        $y_2     = $this->ReadAttributeInteger('y_2');
        $w_2     = $this->ReadAttributeInteger('w_2');
        $h_2     = $this->ReadAttributeInteger('h_2');
        $show_3  = $this->ReadAttributeInteger('show_3');
        $color_3 = $this->ReadAttributeString('color_3');
        $x_3     = $this->ReadAttributeInteger('x_3');
        $y_3     = $this->ReadAttributeInteger('y_3');
        $w_3     = $this->ReadAttributeInteger('w_3');
        $h_3     = $this->ReadAttributeInteger('h_3');
        $show_4  = $this->ReadAttributeInteger('show_4');
        $color_4 = $this->ReadAttributeString('color_4');
        $x_4     = $this->ReadAttributeInteger('x_4');
        $y_4     = $this->ReadAttributeInteger('y_4');
        $w_4     = $this->ReadAttributeInteger('w_4');
        $h_4     = $this->ReadAttributeInteger('h_4');

        $parameter_2 =
            '&cmd=setcover&-region=2&-show=' . $show_2 . '&-color=' . $color_2 . '&-x=' . $x_2 . '&-y=' . $y_2 . '&-w=' . $w_2 . '&-h=' . $h_2;
        $parameter_3 =
            '&cmd=setcover&-region=3&-show=' . $show_3 . '&-color=' . $color_3 . '&-x=' . $x_3 . '&-y=' . $y_3 . '&-w=' . $w_3 . '&-h=' . $h_3;
        $parameter_4 =
            '&cmd=setcover&-region=4&-show=' . $show_4 . '&-color=' . $color_4 . '&-x=' . $x_4 . '&-y=' . $y_4 . '&-w=' . $w_4 . '&-h=' . $h_4;

        $parameter =
            '&-show=' . $show_1 . '&-color=' . $color_1 . '&-x=' . $x_1 . '&-y=' . $y_1 . '&-w=' . $w_1 . '&-h=' . $h_1 . $parameter_2 . $parameter_3
            . $parameter_4;
        $data      = $this->SendParameter('setcover&-region=1' . $parameter);
        return $data;
    }

    // Features Menu

    // Email Settings

    /** Get Email Notification Parameter
     *
     * @return array
     */
    public function GetEmailNotificationParameter()
    {
        $payload = $this->SendParameter('getsmtpattr');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set Email Notification Parameter
     *
     * @return false|string
     */
    public function SetEmailNotificationParameter()
    {
        $ma_ssl       = $this->ReadPropertyInteger('ma_ssl');
        $ma_from      = $this->ReadPropertyString('ma_from');
        $ma_to        = $this->ReadPropertyString('ma_to');
        $ma_subject   = $this->ReadPropertyString('ma_subject');
        $ma_text      = $this->ReadPropertyString('ma_text');
        $ma_server    = $this->ReadPropertyString('ma_text');
        $ma_port      = $this->ReadPropertyInteger('ma_port');
        $ma_logintype = $this->ReadPropertyInteger('ma_logintype');
        $ma_username  = $this->ReadPropertyString('ma_username');
        $ma_password  = $this->ReadPropertyString('ma_password');
        $parameter    =
            '&-ma_ssl=' . $ma_ssl . '&-ma_from=' . $ma_from . '&-ma_to=' . $ma_to . '&-ma_subject=' . $ma_subject . '&-ma_text=' . $ma_text
            . '&-ma_server=' . $ma_server . '&-ma_port=' . $ma_port . '&-ma_logintype=' . $ma_logintype . '&-ma_username=' . $ma_username
            . '&-ma_password=' . $ma_password;
        $data         = $this->SendParameter('setsmtpattr' . $parameter);
        return $data;
    }

    // FTP Settings

    /** Get INSTAR Cloud Server Parameter
     *
     * @return array
     */
    public function GetINSTARCloudServerParameter()
    {
        $payload = $this->SendParameter('getftpattr');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    public function SetFTPParameter($ft_server, $ft_port, $ft_username, $ft_password, $ft_mode, $ft_dirname, $ft_dirmode)
    {
        $this->WriteAttributeString('ft_server', $ft_server);
        $this->WriteAttributeInteger('ft_port', $ft_port);
        $this->WriteAttributeString('ft_username', $ft_username);
        $this->WriteAttributeString('ft_password', $ft_password);
        $this->WriteAttributeInteger('ft_mode', $ft_mode);
        $this->WriteAttributeString('ft_dirname', $ft_dirname);
        $this->WriteAttributeInteger('ft_dirmode', $ft_dirmode);
        $this->SetINSTARCloudServerParameter();
    }

    /** Set INSTAR Cloud Server Parameter
     *
     * @return false|string
     */
    public function SetINSTARCloudServerParameter()
    {
        $ft_server        = $this->ReadPropertyString('ft_server');
        $ft_port          = $this->ReadPropertyInteger('ft_port');
        $ft_username      = $this->ReadPropertyString('ft_username');
        $ft_password      = $this->ReadPropertyString('ft_password');
        $ft_mode          = $this->ReadPropertyInteger('ft_mode');
        $ft_dirname       = $this->ReadPropertyString('ft_dirname');
        $ft_autocreatedir = $this->ReadPropertyInteger('ft_autocreatedir');
        $ft_dirmode       = $this->ReadPropertyInteger('ft_dirmode');
        $ft_ssl           = $this->ReadPropertyInteger('ft_ssl');
        $parameter        =
            '&-ft_server=' . $ft_server . '&-ft_port=' . $ft_port . '&-ft_username=' . $ft_username . '&-ft_password=' . $ft_password . '&-ft_mode='
            . $ft_mode . '&-ft_dirname=' . $ft_dirname . '&-ft_autocreatedir=' . $ft_autocreatedir . '&-ft_dirmode=' . $ft_dirmode . '&-ft_ssl='
            . $ft_ssl;
        $data             = $this->SendParameter('setftpattr' . $parameter);
        return $data;
    }

    /** Get FTP Server Parameter
     *
     * @return array
     */
    public function GetFTPServerParameter()
    {
        $payload = $this->SendParameter('get_instar_admin&-index=31');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set FTP Server Parameter
     *
     * @return false|string
     */
    public function SetFTPServerParameter()
    {
        $admin_value31 = $this->ReadPropertyString('admin_value31');
        $url_code      = urlencode($admin_value31);
        $parameter     = '&-value=' . $url_code;
        $data          = $this->SendParameter('set_instar_admin&-index=31' . $parameter);
        return $data;
    }

    /** Test FTP Server Parameter
     *
     * @return array
     */
    public function TestFTPServerParameter()
    {
        $payload = $this->SendParameter('testftp');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    // Nightvision Settings


    /** Get IR Light Parameter
     *
     * @return bool|string
     */
    public function GetIRMode()
    {
        $payload = $this->SendParameter('getinfrared');
        $data    = explode('"', $payload);
        $mode    = $data[1];
        $this->SendDebug('INSTAR', 'IR mode: ' . $mode, 0);
        return $mode;
    }

    /** IR LED Auto
     *
     * @return false|string
     */
    public function LED_Auto()
    {
        $this->SetValue('IR_LED', 0);
        $parameter = '&-infraredstat=auto';
        $state     = $this->SendParameter('setinfrared' . $parameter);
        return $state;
    }

    /** IR LED Off
     *
     * @return false|string
     */
    public function LED_Inactive()
    {
        $this->SetValue('IR_LED', 2);
        $parameter = '&-infraredstat=close';
        $state     = $this->SendParameter('setinfrared' . $parameter);
        return $state;
    }

    /** IR LED ON
     *
     * @return false|string
     */
    public function LED_On()
    {
        $this->SetValue('IR_LED', 1);
        $parameter = '&-infraredstat=open';
        $state     = $this->SendParameter('setinfrared' . $parameter);
        return $state;
    }

    /** Set IR LED Parameter
     *
     * @return false|string
     */
    public function SetIR_LEDParameter()
    {
        $infraredstat = $this->ReadAttributeString('infraredstat');
        $parameter    = '&-infraredstat=' . $infraredstat;
        $data         = $this->SendParameter('setinfrared' . $parameter);
        return $data;
    }

    /** Get Time Window to Switch IR LEDs from off to auto
     *
     * @return array
     */
    public function GetTimeWindowSwitchIR()
    {
        $payload = $this->SendParameter('getplancgi');
        $data    = $this->SplitPayload($payload, '_ir');
        return $data;
    }

    /** Define a Time Window to Switch IR LEDs from off to auto
     *
     * @return false|string
     */
    public function SetTimeWindowSwitchIR()
    {
        $plancgi_enable_0 = $this->ReadAttributeInteger('plancgi_enable_0');
        $plancgi_enable_1 = $this->ReadAttributeInteger('plancgi_enable_1');
        $plancgi_time_0   = $this->ReadAttributeInteger('plancgi_time_0');
        $plancgi_time_1   = $this->ReadAttributeInteger('plancgi_time_1');
        // http://admin:instar@192.168.178.88/param.cgi?cmd=setplancgi&-plancgi_enable_0=1&-plancgi_enable_1=1&-plancgi_time_0=21600&-plancgi_time_1=64800
        $parameter = '&-plancgi_enable_0=' . $plancgi_enable_0 . '&-plancgi_enable_1=' . $plancgi_enable_1 . '&-plancgi_time_0=' . $plancgi_time_0
                     . '&-plancgi_time_1=' . $plancgi_time_1;
        $data      = $this->SendParameter('setplancgi' . $parameter);
        return $data;
    }

    // PTZ Settings

    /** Get Pan&Tilt Settings
     *
     * @return array
     */
    public function GetPan_TiltSettings()
    {
        $payload = $this->SendParameter('getmotorattr');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set Pan&Tilt Settings
     *
     * @return false|string
     */
    public function SetPan_TiltSettings()
    {
        $selfdet      = $this->ReadAttributeString('selfdet');
        $movehome     = $this->ReadAttributeString('movehome');
        $ptzalarmmask = $this->ReadAttributeString('ptzalarmmask');
        $tiltspeed    = $this->ReadAttributeInteger('tiltspeed');
        $panspeed     = $this->ReadAttributeInteger('panspeed');
        $tiltscan     = $this->ReadAttributeInteger('tiltscan');
        $panscan      = $this->ReadAttributeInteger('panscan');
        // $value = $this->ReadAttributeInteger('value');
        $value            = 0;
        $alarmpresetindex = $this->ReadAttributeInteger('alarmpresetindex');
        // http://admin:instar@192.168.178.88/param.cgi?cmd=setmotorattr&-selfdet=on&-movehome=off&-ptzalarmmask=on&-tiltspeed=0&-panspeed=0&-tiltscan=50&-panscan=50&-value=0&-alarmpresetindex=3
        $parameter =
            '&-selfdet=' . $selfdet . '&-movehome=' . $movehome . '&-ptzalarmmask=' . $ptzalarmmask . '&-tiltspeed=' . $tiltspeed . '&-panspeed='
            . $panspeed . '&-tiltscan=' . $tiltscan . '&-panscan=' . $panscan . '&-value=' . $value . '&-alarmpresetindex=' . $alarmpresetindex;
        $data      = $this->SendParameter('setmotorattr' . $parameter);
        return $data;
    }

    /** Get State of Alarm Position
     *
     * @return array
     */
    public function GetStateAlarmPosition()
    {
        $payload = $this->SendParameter('getmdalarm&-aname=preset');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set State of Alarm Position
     *
     * @return false|string
     */
    public function SetStateAlarmPosition()
    {
        $switch = $this->ReadAttributeString('switch');
        // http://admin:instar@192.168.178.88/param.cgi?cmd=setmdalarm&-aname=preset&-switch=on
        $parameter = '&-switch=' . $switch;
        $data      = $this->SendParameter('setmdalarm&-aname=preset' . $parameter);
        return $data;
    }

    /** Get Park Position Parameter
     *
     * @return array
     */
    public function GetParkPositionParameter()
    {
        $payload = $this->SendParameter('gettimerpreset');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set Park Position Parameter
     *
     * @return false|string
     */
    public function SetParkPositionParameter()
    {
        $timerpreset_enable   = $this->ReadAttributeInteger('timerpreset_enable');
        $timerpreset_index    = $this->ReadAttributeInteger('timerpreset_index');
        $timerpreset_interval = $this->ReadAttributeInteger('timerpreset_interval');
        // http://admin:instar@192.168.178.88/param.cgi?cmd=settimerpreset&-timerpreset_enable=1&-timerpreset_index=1&-timerpreset_interval=600
        $parameter = '&-timerpreset_enable=' . $timerpreset_enable . '&-timerpreset_index=' . $timerpreset_index . '&-timerpreset_interval='
                     . $timerpreset_interval;
        $data      = $this->SendParameter('settimerpreset' . $parameter);
        return $data;
    }

    /** Get One-Step Pan&Tilt Control
     *
     * @return array
     */
    public function GetOneStepPanTiltControl()
    {
        $payload = $this->SendParameter('get_instar_admin&-index=46');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set One-Step Pan&Tilt Control
     *
     * @return false|string
     */
    public function SetOneStepPanTiltControl()
    {
        $admin_value46 = $this->ReadAttributeInteger('admin_value46');
        // http://admin:instar@192.168.178.88/param.cgi?cmd=set_instar_admin&-index=46&-value=0
        $parameter = '&-value=' . $admin_value46;
        $data      = $this->SendParameter('set_instar_admin&-index=46' . $parameter);
        return $data;
    }

    // PTZ Tour Settings

    /** Get Pan&Tilt Tour Settings
     *
     * @return array
     */
    public function GetPanTiltTourSettings()
    {
        $payload = $this->SendParameter('getptztour');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set Pan&Tilt Tour Settings
     *
     * @return false|string
     */
    public function SetPanTiltTourSettings()
    {
        $tour_index    = $this->ReadAttributeString('tour_index');
        $tour_interval = $this->ReadAttributeString('tour_interval');
        $tour_times    = $this->ReadAttributeInteger('tour_times');
        // http://admin:instar@192.168.178.88/param.cgi?cmd=setptztour&-tour_index=0;1;2;-1;-1;-1;-1;-1&-tour_interval=300;300;300;300;300;300;300;300&-tour_times=1
        $parameter = '&-tour_index=' . $tour_index . '&-tour_interval=' . $tour_interval . '&-tour_times=' . $tour_times;
        $data      = $this->SendParameter('setptztour' . $parameter);
        return $data;
    }

    // Status LEDs

    /** Get Status from Status LEDs
     *
     * @return array
     */
    public function GetStatusLED()
    {
        $payload = $this->SendParameter('getlightattr');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Activate / Deactivate Status LEDs
     *
     * @return false|string
     */
    public function SetStatusLED()
    {
        $light_index  = $this->ReadAttributeInteger('light_index');
        $light_enable = $this->ReadAttributeString('light2_enable');
        // http://admin:instar@192.168.178.88/param.cgi?cmd=setlightattr&-light_index=1&-light_enable=on&cmd=setlightattr&-light_index=2&-light_enable=on
        $parameter = '&-light_index=' . $light_index . '&-light_enable=' . $light_enable;
        $data      = $this->SendParameter('setlightattr' . $parameter);
        return $data;
    }

    // Recording Settings

    /** Get File Length of Manual Recordings
     *
     * @return array
     */
    public function GetFileLengthManualRecordings()
    {
        $payload = $this->SendParameter('get_instar_admin&-index=44');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set File Length of Manual Recordings
     *
     * @return false|string
     */
    public function SetFileLengthManualRecordings(int $value)
    {
        // http://admin:instar@192.168.178.88/param.cgi?cmd=set_instar_admin&-index=44&-value=600
        $parameter = '&-value=' . $value;
        $data      = $this->SendParameter('set_instar_admin&-index=44' . $parameter);
        return $data;
    }

    // SD Card

    /** Format SD Card
     *
     * @return array
     */
    public function FormatSD_Card()
    {
        $data = $this->SendParameter('sdfrmt');
        return $data;
    }

    /** Unmount SD Card
     *
     * @return false|string
     */
    public function UnmountSD_Card()
    {
        $data = $this->SendParameter('sdstop');
        return $data;
    }

    // Alarm Menu

    // Alarm Actions

    public function GetAlarmActionParameterEmailsnap()
    {
        $parameter = '&-aname=emailsnap';
        $payload   = $this->SendParameter('getmdalarm' . $parameter);
        $data      = $this->SplitPayload($payload);
        return $data;
    }

    public function GetAlarmActionParameterSnap()
    {
        $parameter = '&-aname=snap';
        $payload   = $this->SendParameter('getmdalarm' . $parameter);
        $data      = $this->SplitPayload($payload);
        return $data;
    }

    public function GetAlarmActionParameterRecord()
    {
        $parameter = '&-aname=record';
        $payload   = $this->SendParameter('getmdalarm' . $parameter);
        $data      = $this->SplitPayload($payload);
        return $data;
    }

    public function GetAlarmActionParameterFTPRecord()
    {
        $parameter = '&-aname=ftprec';
        $payload   = $this->SendParameter('getmdalarm' . $parameter);
        $data      = $this->SplitPayload($payload);
        return $data;
    }

    public function GetAlarmActionParameterRelay()
    {
        $parameter = '&-aname=relay';
        $payload   = $this->SendParameter('getmdalarm' . $parameter);
        $data      = $this->SplitPayload($payload);
        return $data;
    }

    public function GetAlarmActionParameterFTPSnap()
    {
        $parameter = '&-aname=ftpsnap';
        $payload   = $this->SendParameter('getmdalarm' . $parameter);
        $data      = $this->SplitPayload($payload);
        return $data;
    }

    public function GetAlarmActionParameterSound()
    {
        $parameter = '&-aname=sound';
        $payload   = $this->SendParameter('getmdalarm' . $parameter);
        $data      = $this->SplitPayload($payload);
        return $data;
    }

    public function GetAlarmActionParameterType()
    {
        $parameter = '&-aname=type';
        $payload   = $this->SendParameter('getmdalarm' . $parameter);
        $data      = $this->SplitPayload($payload);
        return $data;
    }

    /** Get Alarm Action Parameter
     *
     * @return array
     */
    public function GetAlarmActionParameter()
    {
        $payload = $this->SendParameter('getmdalarm');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set Alarm Action Parameter
     *
     * @return false|string
     */
    public function SetAlarmActionParameter()
    {
        $emailsnap  = $this->ReadAttributeString('md_emailsnap_switch');
        $setmdalarm = $this->ReadAttributeString('md_snap_switch');
        $ftpsnap    = $this->ReadAttributeString('md_ftpsnap_switch');
        $sound      = $this->ReadAttributeString('md_sound_switch');
        $alarm      = $this->ReadAttributeString('md_alarm_type');
        $relay      = $this->ReadAttributeString('md_relay_switch');
        $record     = $this->ReadAttributeString('md_record_switch');
        $ftprec     = $this->ReadAttributeString('md_ftprec_switch');
        $parameter  = '&-aname=emailsnap&-switch=' . $emailsnap . '&cmd=setmdalarm&-aname=snap&-switch=' . $setmdalarm
                      . '&cmd=setmdalarm&-aname=ftpsnap&-switch=' . $ftpsnap . '&cmd=setmdalarm&-aname=record&-switch=' . $record
                      . '&cmd=setmdalarm&-aname=ftprec&-switch=' . $ftprec . '&cmd=setmdalarm&-aname=type&-switch=' . $alarm
                      . '&cmd=setmdalarm&-aname=relay&-switch=' . $relay . '&cmd=setmdalarm&-aname=sound&-switch=' . $sound;
        $data       = $this->SendParameter('setmdalarm' . $parameter);
        return $data;
    }

    /** Get Audio Detection Parameter
     *
     * @return array
     */
    public function GetAudioDetectionParameter()
    {
        $payload = $this->SendParameter('getaudioalarmattr');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set Audio Detection Parameter
     *
     * @return false|string
     */
    public function SetAudioDetectionParameter()
    {
        $aa_enable = $this->ReadAttributeInteger('aa_enable');
        $parameter = '&-aa_enable=' . $aa_enable;
        $data      = $this->SendParameter('setaudioalarmattr' . $parameter);
        return $data;
    }

    /** Get Alarm Input Parameter
     *
     * @return array
     */
    public function GetAlarmInputParameter()
    {
        $payload = $this->SendParameter('getioattr');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set Alarm Input Parameter
     *
     * @return false|string
     */
    public function SetAlarmInputParameter()
    {
        $io_enable = $this->ReadAttributeInteger('io_enable');
        $parameter = '&-io_enable=' . $io_enable;
        $data      = $this->SendParameter('setioattr' . $parameter);
        return $data;
    }

    /** Get Passive Infrared Motion Detection Sensor Parameter
     *
     * @return array
     */
    public function GetPassiveInfraredMotionDetectionSensorParameter()
    {
        $payload = $this->SendParameter('getpirattr');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    public function EnablePIR(bool $state)
    {

        $this->SetPassiveInfraredMotionDetectionSensorParameter();
    }

    /** Set Passive Infrared Motion Detection Sensor Parameter
     *
     * @return false|string
     */
    public function SetPassiveInfraredMotionDetectionSensorParameter()
    {
        $pir_enable = $this->ReadAttributeInteger('pir_enable');
        $parameter  = '&-pir_enable=' . $pir_enable;
        $data       = $this->SendParameter('setpirattr' . $parameter);
        return $data;
    }

    /** Get Number of Alarm Snapshots
     *
     * @return array
     */
    public function GetNumberAlarmSnapshots()
    {
        $payload = $this->SendParameter('getalarmsnapattr');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set Number of Alarm Snapshots
     *
     * @return false|string
     */
    public function SetNumberAlarmSnapshots()
    {
        $snap_chn         = $this->ReadAttributeInteger('snap_chn');
        $snap_count       = $this->ReadAttributeInteger('snap_count');
        $email_snap_count = $this->ReadAttributeInteger('email_snap_count');
        $ftp_snap_count   = $this->ReadAttributeInteger('ftp_snap_count');
        $parameter        =
            '&-snap_chn=' . $snap_chn . '&-snap_count=' . $snap_count . '&-email_snap_count=' . $email_snap_count . '&-ftp_snap_count='
            . $ftp_snap_count;
        $data             = $this->SendParameter('setalarmsnapattr' . $parameter);
        return $data;
    }

    // Alarm Areas

    /** Get Alarm Areas Parameter
     *
     * @return array
     */
    public function GetAlarmAreasParameter()
    {
        $payload = $this->SendParameter('getmdattr');
        $data    = $this->SplitPayload($payload);
        return $data;
    }


    public function SetAlarmZone1(bool $m1_enable)
    {
        if ($m1_enable) {
            $this->WriteAttributeInteger('m1_enable', 1);
        } else {
            $this->WriteAttributeInteger('m1_enable', 0);
        }
        $data = $this->SetAlarmAreasParameter();
        return $data;
    }

    public function SetAlarmZone2(bool $m2_enable)
    {
        if ($m2_enable) {
            $this->WriteAttributeInteger('m2_enable', 1);
        } else {
            $this->WriteAttributeInteger('m2_enable', 0);
        }
        $data = $this->SetAlarmAreasParameter();
        return $data;
    }

    public function SetAlarmZone3(bool $m3_enable)
    {
        if ($m3_enable) {
            $this->WriteAttributeInteger('m3_enable', 1);
        } else {
            $this->WriteAttributeInteger('m3_enable', 0);
        }
        $data = $this->SetAlarmAreasParameter();
        return $data;
    }

    public function SetAlarmZone4(bool $m4_enable)
    {
        if ($m4_enable) {
            $this->WriteAttributeInteger('m4_enable', 1);
        } else {
            $this->WriteAttributeInteger('m4_enable', 0);
        }
        $data = $this->SetAlarmAreasParameter();
        return $data;
    }

    public function SetAlarmZone1Parameters(int $m1_x, int $m1_y, int $m1_w, int $m1_h)
    {
        $this->WriteAttributeInteger('m1_x', $m1_x);
        $this->WriteAttributeInteger('m1_y', $m1_y);
        $this->WriteAttributeInteger('m1_w', $m1_w);
        $this->WriteAttributeInteger('m1_h', $m1_h);
        $data = $this->SetAlarmAreasParameter();
        return $data;
    }

    public function SetAlarmZone2Parameters(int $m2_x, int $m2_y, int $m2_w, int $m2_h)
    {
        $this->WriteAttributeInteger('m2_x', $m2_x);
        $this->WriteAttributeInteger('m2_y', $m2_y);
        $this->WriteAttributeInteger('m2_w', $m2_w);
        $this->WriteAttributeInteger('m2_h', $m2_h);
        $data = $this->SetAlarmAreasParameter();
        return $data;
    }

    public function SetAlarmZone3Parameters(int $m3_x, int $m3_y, int $m3_w, int $m3_h)
    {
        $this->WriteAttributeInteger('m3_x', $m3_x);
        $this->WriteAttributeInteger('m3_y', $m3_y);
        $this->WriteAttributeInteger('m3_w', $m3_w);
        $this->WriteAttributeInteger('m3_h', $m3_h);
        $data = $this->SetAlarmAreasParameter();
        return $data;
    }

    public function SetAlarmZone4Parameters(int $m4_x, int $m4_y, int $m4_w, int $m4_h)
    {
        $this->WriteAttributeInteger('m4_x', $m4_x);
        $this->WriteAttributeInteger('m4_y', $m4_y);
        $this->WriteAttributeInteger('m4_w', $m4_w);
        $this->WriteAttributeInteger('m4_h', $m4_h);
        $data = $this->SetAlarmAreasParameter();
        return $data;
    }

    public function SetAlarmZone1Senitivity(int $m1_sensitivity)
    {
        $this->WriteAttributeInteger('m1_sensitivity', $m1_sensitivity);
        $data = $this->SetAlarmAreasParameter();
        return $data;
    }

    public function SetAlarmZone2Senitivity(int $m2_sensitivity)
    {
        $this->WriteAttributeInteger('m2_sensitivity', $m2_sensitivity);
        $data = $this->SetAlarmAreasParameter();
        return $data;
    }

    public function SetAlarmZone3Senitivity(int $m3_sensitivity)
    {
        $this->WriteAttributeInteger('m3_sensitivity', $m3_sensitivity);
        $data = $this->SetAlarmAreasParameter();
        return $data;
    }

    public function SetAlarmZone4Senitivity(int $m4_sensitivity)
    {
        $this->WriteAttributeInteger('m4_sensitivity', $m4_sensitivity);
        $data = $this->SetAlarmAreasParameter();
        return $data;
    }

    /** Set Alarm Areas Parameter
     *
     * @return false|string
     */
    public function SetAlarmAreasParameter()
    {
        $m1_enable      = $this->ReadAttributeInteger('m1_enable'); //  Dis/Enable Alarm Detection Area 1 - 4: [0, 1]
        $m1_x           = $this->ReadAttributeInteger('m1_x'); // X-Axis Offset of Alarm Area Origin [0-(1920-w)]
        $m1_y           = $this->ReadAttributeInteger('m1_y'); // Y-Axis Offset of Alarm Area Origin [0-(1080-h)]
        $m1_w           = $this->ReadAttributeInteger('m1_w'); // Alarm Area Width [1-1920] Pixel
        $m1_h           = $this->ReadAttributeInteger('m1_h'); // Alarm Area Height [1-1080] Pixel
        $m1_sensitivity = $this->ReadAttributeInteger('m1_sensitivity'); // Detection Sensitivity [1 - 100]
        // $m1_threshold = $this->ReadAttributeInteger('m1_threshold'); // Detection Threshold (not active)
        $m2_enable      = $this->ReadAttributeInteger('m2_enable'); //  Dis/Enable Alarm Detection Area 1 - 4: [0, 1]
        $m2_x           = $this->ReadAttributeInteger('m2_x'); // X-Axis Offset of Alarm Area Origin [0-(1920-w)]
        $m2_y           = $this->ReadAttributeInteger('m2_y'); // Y-Axis Offset of Alarm Area Origin [0-(1080-h)]
        $m2_w           = $this->ReadAttributeInteger('m2_w'); // Alarm Area Width [1-1920] Pixel
        $m2_h           = $this->ReadAttributeInteger('m2_h'); // Alarm Area Height [1-1080] Pixel
        $m2_sensitivity = $this->ReadAttributeInteger('m2_sensitivity'); // Detection Sensitivity [1 - 100]
        // $m2_threshold = $this->ReadAttributeInteger('m2_threshold'); // Detection Threshold (not active)
        $m3_enable      = $this->ReadAttributeInteger('m3_enable'); //  Dis/Enable Alarm Detection Area 1 - 4: [0, 1]
        $m3_x           = $this->ReadAttributeInteger('m3_x'); // X-Axis Offset of Alarm Area Origin [0-(1920-w)]
        $m3_y           = $this->ReadAttributeInteger('m3_y'); // Y-Axis Offset of Alarm Area Origin [0-(1080-h)]
        $m3_w           = $this->ReadAttributeInteger('m3_w'); // Alarm Area Width [1-1920] Pixel
        $m3_h           = $this->ReadAttributeInteger('m3_h'); // Alarm Area Height [1-1080] Pixel
        $m3_sensitivity = $this->ReadAttributeInteger('m3_sensitivity'); // Detection Sensitivity [1 - 100]
        // $m3_threshold = $this->ReadAttributeInteger('m3_threshold'); // Detection Threshold (not active)
        $m4_enable      = $this->ReadAttributeInteger('m4_enable'); //  Dis/Enable Alarm Detection Area 1 - 4: [0, 1]
        $m4_x           = $this->ReadAttributeInteger('m4_x'); // X-Axis Offset of Alarm Area Origin [0-(1920-w)]
        $m4_y           = $this->ReadAttributeInteger('m4_y'); // Y-Axis Offset of Alarm Area Origin [0-(1080-h)]
        $m4_w           = $this->ReadAttributeInteger('m4_w'); // Alarm Area Width [1-1920] Pixel
        $m4_h           = $this->ReadAttributeInteger('m4_h'); // Alarm Area Height [1-1080] Pixel
        $m4_sensitivity = $this->ReadAttributeInteger('m4_sensitivity'); // Detection Sensitivity [1 - 100]
        // $m4_threshold = $this->ReadAttributeInteger('m4_threshold'); // Detection Threshold (not active)

        $parameter_2 = '';
        $parameter_3 = '';
        $parameter_4 = '';
        if ($m2_enable == 1) {
            $parameter_2 =
                '&cmd=setmdattr&-name=2&-enable=' . $m2_enable . '&-s=' . $m2_sensitivity . '&-x=' . $m2_x . '&-y=' . $m2_y . '&-w=' . $m2_w . '&-h='
                . $m2_h;
        }
        if ($m3_enable == 1) {
            $parameter_3 =
                '&cmd=setmdattr&-name=3&-enable=' . $m3_enable . '&-s=' . $m3_sensitivity . '&-x=' . $m3_x . '&-y=' . $m3_y . '&-w=' . $m3_w . '&-h='
                . $m3_h;
        }
        if ($m4_enable == 1) {
            $parameter_4 =
                '&cmd=setmdattr&-name=4&-enable=' . $m4_enable . '&-s=' . $m4_sensitivity . '&-x=' . $m4_x . '&-y=' . $m4_y . '&-w=' . $m4_w . '&-h='
                . $m4_h;
        }
        // TODO threshold
        $parameter = '&-name=1&-enable=' . $m1_enable . '&-s=' . $m1_sensitivity . '&-x=' . $m1_x . '&-y=' . $m1_y . '&-w=' . $m1_w . '&-h=' . $m1_h
                     . $parameter_2 . $parameter_3 . $parameter_4;
        $data      = $this->SendParameter('setmdattr' . $parameter);
        return $data;
    }

    // Alarm Schedule

    /** Get Motion Detection Time Schedule Parameter
     *
     * @return array
     */
    public function GetMotionDetectionTimeScheduleParameter()
    {
        $payload = $this->SendParameter('getscheduleex&-ename=md');
        $data    = $this->SplitPayload($payload, '_as');
        return $data;
    }

    /** Set Motion Detection Time Schedule Parameter
     *
     * @return false|string
     */
    public function SetMotionDetectionTimeScheduleParameter()
    {
        // $etm = $this->ReadAttributeInteger('etm_as');
        $week0     = $this->ReadAttributeString('week0_as');
        $week1     = $this->ReadAttributeString('week1_as');
        $week2     = $this->ReadAttributeString('week2_as');
        $week3     = $this->ReadAttributeString('week3_as');
        $week4     = $this->ReadAttributeString('week4_as');
        $week5     = $this->ReadAttributeString('week5_as');
        $week6     = $this->ReadAttributeString('week6_as');
        $parameter = '&-week0=' . $week0 . '&-week1=' . $week1 . '&-week2=' . $week2 . '&-week3=' . $week3 . '&-week4=' . $week4 . '&-week5=' . $week5
                     . '&-week6=' . $week6;
        $data      = $this->SendParameter('setscheduleex&-ename=md' . $parameter);
        return $data;
    }

    /** Get Timer Parameter
     *
     * @return array
     */
    public function GetTimerParameter()
    {
        $payload = $this->SendParameter('getplancgi');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set Timer Parameter
     *
     * @return false|string
     */
    public function SetTimerParameter()
    {
        /*
        $plancgi_time_0   = $this->ReadAttributeString('plancgi_time_0');
        $plancgi_time_1   = $this->ReadAttributeString('plancgi_time_1');
        $plancgi_time_2   = $this->ReadAttributeString('plancgi_time_2');
        $plancgi_time_3   = $this->ReadAttributeString('plancgi_time_3');
        $plancgi_time_4   = $this->ReadAttributeString('plancgi_time_4');
        $plancgi_time_5   = $this->ReadAttributeString('plancgi_time_5');
        $plancgi_time_6   = $this->ReadAttributeString('plancgi_time_6');
        $plancgi_time_7   = $this->ReadAttributeString('plancgi_time_7');
        $plancgi_time_8   = $this->ReadAttributeString('plancgi_time_8');
        $plancgi_time_9   = $this->ReadAttributeString('plancgi_time_9');
        */
        $plancgi_enable_0 = $this->ReadAttributeInteger('plancgi_enable_0');
        $plancgi_enable_1 = $this->ReadAttributeInteger('plancgi_enable_1');
        $plancgi_enable_2 = $this->ReadAttributeInteger('plancgi_enable_2');
        $plancgi_enable_3 = $this->ReadAttributeInteger('plancgi_enable_3');
        /*
        $plancgi_enable_4 = $this->ReadAttributeInteger('plancgi_enable_4');
        $plancgi_enable_5 = $this->ReadAttributeInteger('plancgi_enable_5');
        $plancgi_enable_6 = $this->ReadAttributeInteger('plancgi_enable_6');
        $plancgi_enable_7 = $this->ReadAttributeInteger('plancgi_enable_7');
        $plancgi_enable_8 = $this->ReadAttributeInteger('plancgi_enable_8');
        $plancgi_enable_9 = $this->ReadAttributeInteger('plancgi_enable_9');
        */
        $parameter = '&-plancgi_enable_0=' . $plancgi_enable_0 . '&-plancgi_enable_1=' . $plancgi_enable_1 . '&-plancgi_enable_2=' . $plancgi_enable_2
                     . '&-plancgi_enable_3=' . $plancgi_enable_3;
        $data      = $this->SendParameter('setplancgi' . $parameter);
        return $data;
    }

    // Alarm Server

    /** Get Alarmserver [0] Configuration for the Push Service
     *
     * @return array
     */
    public function GetConfigurationPushService()
    {
        $payload = $this->SendParameter('getalarmserverattr&-as_index=1');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Get Alarm Server [1] Parameter
     *
     * @return array
     */
    public function GetAlarmServer1Parameter()
    {
        $payload = $this->SendParameter('getmdalarm&-aname=server2');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set Alarm Server [1] Parameter
     *
     * @return false|string
     */
    public function SetAlarmServer1Parameter()
    {
        $switch    = $this->ReadAttributeString('switch');
        $parameter = '&-switch=' . $switch;
        $data      = $this->SendParameter('setmdalarm&-aname=server2' . $parameter);
        return $data;
    }

    /** Get Alarmserver [2] Configuration
     *
     * @return array
     */
    public function GetAlarmserver2Configuration()
    {
        $payload = $this->SendParameter('getalarmserverattr&-as_index=3');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set Alarmserver [2] Configuration
     *
     * @return false|string
     */
    public function SetAlarmserver2Configuration()
    {
        $as_server      = $this->ReadAttributeString('as_server_2'); // Address of the receiving Server (e.g. Home Automation Server) [IPv4 Address]
        $as_port        = $this->ReadAttributeInteger('as_port_2'); // Port of the receiving Server [1-65536]
        $as_auth        = $this->ReadAttributeInteger('as_auth_2'); // Authentication required [0, 1]
        $as_username    = $this->ReadAttributeString('as_username_2'); // Alarmserver Username
        $as_password    = $this->ReadAttributeString('as_password_2'); // Alarmserver Password
        $as_path        = $this->ReadAttributeString('as_path_2'); // URL Path
        $as_area        = $this->ReadAttributeInteger('as_area_2'); // Send Query when Motion is Detected
        $as_io          = $this->ReadAttributeInteger('as_io_2');  // Send Query when Alarm Input is Triggered
        $as_audio       = $this->ReadAttributeInteger('as_audio_2'); // Send Query when Audio Alarm is Triggered
        $as_areaio      = $this->ReadAttributeInteger('as_areaio_2'); // Send Query when Motion is Detected and Input is Triggered
        $as_activequery = $this->ReadAttributeInteger('as_activequery_2'); // Append Alarm Trigger to Query
        $as_query1      = $this->ReadAttributeInteger('as_query1_2'); // Activate Sending optional Parameter 1
        $as_query2      = $this->ReadAttributeInteger('as_query2_2'); // Activate Sending optional Parameter 1
        $as_query3      = $this->ReadAttributeInteger('as_query3_2'); // Activate Sending optional Parameter 1
        $as_queryattr1  = $this->ReadAttributeString('as_queryattr1_2'); // Command 1 Attribute
        $as_queryval1   = $this->ReadAttributeString('as_queryval1_2'); // Command 1 Value
        $as_queryattr2  = $this->ReadAttributeString('as_queryattr2_2'); // Command 2 Attribute
        $as_queryval2   = $this->ReadAttributeString('as_queryval2_2'); // Command 2 Value
        $as_queryattr3  = $this->ReadAttributeString('as_queryattr3_2'); // Command 3 Attribute
        $as_queryval3   = $this->ReadAttributeString('as_queryval3_2'); // Command 3 Value

        $parameter_1 = '';
        $parameter_2 = '';
        $parameter_3 = '';
        if ($as_query1 == 1) {
            $parameter_1 = '&-as_queryattr1=' . $as_queryattr1 . '&-as_queryval1=' . $as_queryval1;
        }
        if ($as_query2 == 1) {
            $parameter_2 = '&-as_queryattr2=' . $as_queryattr2 . '&-as_queryval2=' . $as_queryval2;
        }
        if ($as_query3 == 1) {
            $parameter_3 = '&-as_queryattr3=' . $as_queryattr3 . '&-as_queryval3=' . $as_queryval3;
        }
        // &-as_server=&-as_port=0&-as_path=/hook/INSTAR48405&-as_auth=1&-as_username=symcon&-as_password=instar&-as_area=1&-as_io=1&-as_audio=1&-as_areaio=1&-as_activequery=1&-as_query1=0&-as_query2=1&-as_query3=1&-as_queryattr2=&-as_queryval2=&-as_queryattr3=&-as_queryval3=');


        // &-as_server=192.168.2.48&-as_port=30065&-as_path=/instar&-as_queryattr1=&-as_queryval1=&-as_queryattr2=&-as_queryval2=&-as_queryattr3=&-as_queryval3=&-as_activequery=1&-as_auth=0&-as_query1=0&-as_query2=0&-as_query3=0');

        $parameter = '&-as_server=' . $as_server . '&-as_port=' . $as_port . '&-as_path=' . $as_path . '&-as_auth=' . $as_auth . '&-as_username='
                     . $as_username . '&-as_password=' . $as_password . '&-as_area=' . $as_area . '&-as_io=' . $as_io . '&-as_audio=' . $as_audio
                     . '&-as_areaio=' . $as_areaio . '&-as_activequery=' . $as_activequery . '&-as_query1=' . $as_query1 . '&-as_query2=' . $as_query2
                     . '&-as_query3=' . $as_query3 . $parameter_1 . $parameter_2 . $parameter_3;
        $data      = $this->SendParameter('setmdalarm&-aname=server2&-switch=on&cmd=setalarmserverattr&-as_index=3' . $parameter);
        return $data;
    }

    // Task Menu

    // Photoseries Settings

    /** Get Interval Snapshot Series Task
     *
     * @return array
     */
    public function GetIntervalSnapshotSeriesTask()
    {
        $payload = $this->SendParameter('getsnaptimerattrex');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Setup a Interval Snapshot Series Task
     *
     * @return false|string
     */
    public function SetIntervalSnapshotSeriesTask()
    {
        $as_type     = $this->ReadAttributeString('as_type');
        $as_enable   = $this->ReadAttributeInteger('as_enable');
        $as_interval = $this->ReadAttributeInteger('as_interval');
        // &cmd=setsnaptimerattrex&-as_type=email&-as_enable=1&-as_interval=300&cmd=setsnaptimerattrex&-as_type=ftp&-as_enable=1&-as_interval=60
        $parameter = '&-as_type=' . $as_type . '&-as_enable=' . $as_enable . '&-as_interval=' . $as_interval;
        $data      = $this->SendParameter('setsnaptimerattrex' . $parameter);
        return $data;
    }

    /** Get Schedule for Interval Snapshot Series
     *
     * @return array
     */
    public function GetScheduleIntervalSnapshotSeries()
    {
        $payload = $this->SendParameter('getscheduleex&-ename=snap');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set Schedule for Interval Snapshot Series
     *
     * @return false|string
     */
    public function SetScheduleIntervalSnapshotSeries()
    {
        $as_enable = $this->ReadAttributeInteger('as_enable');
        // http://admin:instar@192.168.178.88/param.cgi?cmd=setsnaptimerattrex&-as_enable=1&-as_interval=60&-as_type=snap&cmd=setsnaptimerattrex&-as_enable=1&-as_interval=60&-as_type=email&cmd=setsnaptimerattrex&-as_enable=1&-as_interval=60&-as_type=ftp
        $parameter = '&-as_enable=' . $as_enable;
        $data      = $this->SendParameter('setscheduleex&-ename=snap' . $parameter);
        return $data;
    }

    // Video Recordings

    /** Get Planned Video Recording Attribute
     *
     * @return array
     */
    public function GetPlannedVideoRecordingAttribute()
    {
        $payload = $this->SendParameter('getplanrecattr');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set Planned Video Recording Attribute
     *
     * @return false|string
     */
    public function SetPlannedVideoRecordingAttribute()
    {
        $planrec_enable = $this->ReadAttributeInteger('planrec_enable');
        $planrec_chn    = $this->ReadAttributeInteger('planrec_chn');
        $planrec_time   = $this->ReadAttributeInteger('planrec_time');
        $parameter      = '&-planrec_enable=' . $planrec_enable . '&-planrec_chn=' . $planrec_chn . '&-planrec_time=' . $planrec_time;
        $data           = $this->SendParameter('setplanrecattr' . $parameter);
        return $data;
    }

    /** Get Schedule for Manual Recording Task
     *
     * @return array
     */
    public function GetScheduleManualRecordingTask()
    {
        $payload = $this->SendParameter('getscheduleex&-ename=plan');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set Schedule for Manual Recording Task
     *
     * @return false|string
     */
    public function SetScheduleManualRecordingTask()
    {
        // TODO
        // http://admin:instar@192.168.178.88/param.cgi?cmd=setscheduleex&-ename=plan&-week0=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP&-week1=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP&-week2=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP&-week3=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP&-week4=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP&-week5=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP&-week6=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP
        // $parameter = '&-volume=' . $volume . '&-volin_type=' . $volin_type . '&-aec=' . $aec . '&-denoise=' . $denoise;
        $parameter = '';
        $data      = $this->SendParameter('setscheduleex&-ename' . $parameter);
        return $data;
    }

    // System Menu

    // Overview Menu

    /** Get your Camera´s LAN MAC Address
     *
     * @return array
     */
    public function GetLAN_MACAddress()
    {
        $payload = $this->SendParameter('getlanmac');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Get your Camera´s WiFi MAC Address
     *
     * @return array
     */
    public function GetWIFI_MACAddress()
    {
        $payload = $this->SendParameter('getwifimac');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Get your Camera´s WAN IP Address
     *
     * @return array
     */
    public function GetWAN_IPAddress()
    {
        $payload = $this->SendParameter('getinternetip');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    // User Settings

    /** Get your Camera´s Network Configuration
     *
     * @return array
     */
    public function GetNetworkConfiguration()
    {
        $payload = $this->SendParameter('getuserattr');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set your Camera´s Network Configuration
     *
     * @return false|string
     */
    public function SetNetworkConfiguration()
    {
        // TODO
        // http://admin:instar@192.168.178.88/param.cgi?cmd=setscheduleex&-ename=plan&-week0=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP&-week1=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP&-week2=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP&-week3=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP&-week4=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP&-week5=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP&-week6=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP
        // $parameter = '&-volume=' . $volume . '&-volin_type=' . $volin_type . '&-aec=' . $aec . '&-denoise=' . $denoise;
        $parameter = '';
        $data      = $this->SendParameter('setuserattr' . $parameter);
        return $data;
    }

    // Date & Time Settings

    /** Get your Camera´s Time Configuration
     *
     * @return array
     */
    public function GetCameraTimeConfiguration()
    {
        $payload = $this->SendParameter('getservertime');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set your Camera´s Time Configuration
     *
     * @return false|string
     */
    public function SetCameraTimeConfiguration()
    {
        // TODO
        // http://admin:instar@192.168.178.88/param.cgi?cmd=setscheduleex&-ename=plan&-week0=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP&-week1=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP&-week2=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP&-week3=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP&-week4=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP&-week5=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP&-week6=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP
        // $parameter = '&-volume=' . $volume . '&-volin_type=' . $volin_type . '&-aec=' . $aec . '&-denoise=' . $denoise;
        $parameter = '';
        $data      = $this->SendParameter('setservertime' . $parameter);
        return $data;
    }

    /** Get your Camera´s Network Configuration
     *
     * @return array
     */
    public function GetCamerasNetworkConfiguration()
    {
        $payload = $this->SendParameter('getntpattr');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set your Camera´s Network Configuration
     *
     * @return false|string
     */
    public function SetCamerasNetworkConfiguration()
    {
        // TODO
        // http://admin:instar@192.168.178.88/param.cgi?cmd=setscheduleex&-ename=plan&-week0=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP&-week1=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP&-week2=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP&-week3=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP&-week4=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP&-week5=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP&-week6=PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP
        // $parameter = '&-volume=' . $volume . '&-volin_type=' . $volin_type . '&-aec=' . $aec . '&-denoise=' . $denoise;
        $parameter = '';
        $data      = $this->SendParameter('setntpattr' . $parameter);
        return $data;
    }

    // Language Settings

    /** Get your Camera´s UI Language Configuration
     *
     * @return array
     */
    public function GetCameraUI_LanguageConfiguration()
    {
        $payload = $this->SendParameter('get_instar_guest&-index=11');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set your Camera´s UI Language Configuration
     *
     * @return false|string
     */
    public function SetCameraUI_LanguageConfiguration()
    {
        // TODO
        $value = $this->ReadAttributeString('value');
        $data  = $this->SendParameter('et_instar_guest&-index=11&-value' . $value);
        return $data;
    }

    // System Log

    /** Get your Camera´s System Log
     *
     * @return false|string
     */
    public function GetCameraSystemLog()
    {
        $this->SendDebug('INSTAR Send:', 'http://' . $this->GetHostURL() . '/tmpfs/syslog.txt', 0);
        $log = file_get_contents('http://' . $this->GetHostURL() . '/tmpfs/syslog.txt');
        return $log;
    }

    // Reboot

    /** Reboot your Camera
     *
     * @return false|string
     */
    public function RebootCamera()
    {
        $data = $this->SendParameter('sysreboot');
        return $data;
    }

    /** Get Camera Reboot Automatically
     *
     * @return array
     */
    public function GetCameraRebootAutomatically()
    {
        $payload = $this->SendParameter('getplancgi');
        $data    = $this->SplitPayload($payload);
        return $data;
    }

    /** Set your Camera to Reboot Automatically
     *
     * @return false|string
     */
    public function SetCameraRebootAutomatically()
    {
        $plancgi_enable_2 = $this->ReadAttributeInteger('plancgi_enable_2');
        $plancgi_time_2   = $this->ReadAttributeInteger('plancgi_time_2');
        $parameter        = '&-plancgi_enable_2=' . $plancgi_enable_2 . '&-plancgi_time_2=' . $plancgi_time_2;
        $data             = $this->SendParameter('setplancgi' . $parameter);
        return $data;
    }

    // Reset

    /** Reset your Camera
     *
     * @return false|string
     */
    public function ResetCamera()
    {
        $this->SendDebug('INSTAR Send:', 'http://' . $this->GetHostURL() . '/sysreset.cgi', 0);
        $data = file_get_contents('http://' . $this->GetHostURL() . '/sysreset.cgi');
        return $data;
    }

    // Pan & Tilt

    /**
     * Moves continuously right.
     *
     * @return bool|string
     */
    public function Right()
    {
        $this->SetValue('Control_Continuous', 3);
        $command = '-step=0&-act=right';
        $this->SendDebug('INSTAR:', 'right', 0);
        $state = $this->SendINSTARControlCommand($command);
        return $state;
    }

    /**
     * Moves continuously left.
     *
     * @return bool|string
     */
    public function Left()
    {
        $this->SetValue('Control_Continuous', 0);
        $command = '-step=0&-act=left';
        $this->SendDebug('INSTAR:', 'left', 0);
        $state = $this->SendINSTARControlCommand($command);
        return $state;
    }

    /**
     * Moves continuously up.
     *
     * @return bool|string
     */
    public function Up()
    {
        $this->SetValue('Control_Continuous', 1);
        $command = '-step=0&-act=up';
        $this->SendDebug('INSTAR:', 'up', 0);
        $state = $this->SendINSTARControlCommand($command);
        return $state;
    }

    /**
     * Moves continuously down.
     *
     * @return bool|string
     */
    public function Down()
    {
        $this->SetValue('Control_Continuous', 2);
        $command = '-step=0&-act=down';
        $this->SendDebug('INSTAR:', 'down', 0);
        $state = $this->SendINSTARControlCommand($command);
        return $state;
    }

    /**
     * Stops moving camera-head.
     *
     * @return bool|string
     */
    public function Stop()
    {
        $this->SetValue('Control_Continuous', 4);
        $command = '-step=0&-act=stop';
        $this->SendDebug('INSTAR:', 'stop', 0);
        $state = $this->SendINSTARControlCommand($command);
        return $state;
    }

    /**
     * Moves one step right.
     *
     * @return bool|string
     */
    public function StepRight()
    {
        $this->SetValue('Control_Step', 3);
        $command = '-step=1&-act=right';
        $this->SendDebug('INSTAR:', 'step right', 0);
        $state = $this->SendINSTARControlCommand($command);
        return $state;
    }

    /**
     * Moves one step left.
     *
     * @return bool|string
     */
    public function StepLeft()
    {
        $this->SetValue('Control_Step', 0);
        $command = '-step=1&-act=left';
        $this->SendDebug('INSTAR:', 'step left', 0);
        $state = $this->SendINSTARControlCommand($command);
        return $state;
    }

    /**
     * Moves one step up.
     *
     * @return bool|string
     */
    public function StepUp()
    {
        $this->SetValue('Control_Step', 1);
        $command = '-step=1&-act=up';
        $this->SendDebug('INSTAR:', 'step up', 0);
        $state = $this->SendINSTARControlCommand($command);
        return $state;
    }

    /**
     * Moves one step down.
     *
     * @return bool|string
     */
    public function StepDown()
    {
        $this->SetValue('Control_Step', 2);
        $command = '-step=1&-act=down';
        $this->SendDebug('INSTAR:', 'step down', 0);
        $state = $this->SendINSTARControlCommand($command);
        return $state;
    }

    /**
     * Go to Center Position.
     *
     * @return bool|string
     */
    public function GotoCenterPosition()
    {
        $command = '-step=0&-act=home';
        $this->SendDebug('INSTAR:', 'goto center position', 0);
        $state = $this->SendINSTARControlCommand($command);
        return $state;
    }

    /**
     * Scan horizontal.
     *
     * @return bool|string
     */
    public function ScanHorizontal()
    {
        $command = '-step=0&-act=hscan';
        $this->SendDebug('INSTAR:', 'Scan horizontal', 0);
        // $command = '-step=0&-act=hscan&-speed=45';
        $state = $this->SendINSTARControlCommand($command);
        return $state;
    }

    /**
     * Scan vertical.
     *
     * @return bool|string
     */
    public function ScanVertical()
    {
        $command = '-step=0&-act=vscan';
        $this->SendDebug('INSTAR:', 'Scan vertical', 0);
        $state = $this->SendINSTARControlCommand($command);
        return $state;
    }

    /**
     * set a position.
     *
     * @return bool|string
     */
    public function SetPosition(int $position)
    {
        $this->SetValue('SetPosition', $position);
        $this->SendDebug('INSTAR:', 'Set position ' . $position, 0);
        $position  = $position + 1;
        $parameter = '&-act=set&-status=1&-number=' . $position;
        $state     = $this->SendParameter('preset' . $parameter);
        return $state;
    }

    /** unset a position
     *
     * @param int $position
     *
     * @return false|string
     */
    public function UnsetPosition(int $position)
    {
        $this->SetValue('UnsetPosition', $position);
        $this->SendDebug('INSTAR:', 'Unset position ' . $position, 0);
        $position  = $position + 1;
        $parameter = '&-act=set&-status=0&-number=' . $position;
        $state     = $this->SendParameter('preset' . $parameter);
        return $state;
    }

    /** goto to a set position
     *
     * @param int $position
     *
     * @return false|string
     */
    public function GotoPosition(int $position)
    {
        $this->SetValue('GotoPosition', $position);
        $this->SendDebug('INSTAR:', 'Goto position ' . $position, 0);
        $position  = $position + 1;
        $parameter = '&-act=goto&-status=1&-number=' . $position;
        $state     = $this->SendParameter('preset' . $parameter);
        return $state;
    }

    public function StartRecording(int $time)
    {
        $parameter = '&-act=on&-time=' . $time;
        $response  = $this->SendParameter('manualrec' . $parameter);
        $this->SendDebug('INSTAR:', 'Start Recording', 0);
        return $response;
    }

    protected function SendINSTARControlCommand($command)
    {
        $this->SendDebug('INSTAR Send:', 'http://' . $this->GetHostURL() . '/ptzctrl.cgi?' . $command, 0);
        $response = file_get_contents('http://' . $this->GetHostURL() . '/ptzctrl.cgi?' . $command);
        return $response;
    }

    protected function SendParameter($command)
    {
        $this->SendDebug('INSTAR Send:', 'http://' . $this->GetHostURL() . '/param.cgi?cmd=' . $command, 0);
        $response = file_get_contents('http://' . $this->GetHostURL() . '/param.cgi?cmd=' . $command);
        return $response;
    }

    /**
     * @return mixed|string
     */
    protected function GetINSTARType()
    {
        $INSTAR_type_nr = $this->ReadPropertyInteger('model');
        $type           = 'hi3510';
        $INSTAR_types   = [
            self::IN_5905_HD      => 'IN-5905 HD',
            self::IN_5907_HD      => 'IN-5907 HD',
            self::IN_7011_HD      => 'IN-7011 HD',
            self::IN_9008_Full_HD => 'IN-9008 Full HD',
            self::IN_9010_Full_HD => 'IN-9010 Full HD',
            self::IN_9020_Full_HD => 'IN-9020 Full HD',
            self::IN_3011         => 'IN-3011',
            self::IN_6001_HD      => 'IN-6001 HD',
            self::IN_6012_HD      => 'IN-6012 HD',
            self::IN_6014_HD      => 'IN-6014 HD',
            self::IN_8003_Full_HD => 'IN-8003 Full HD',
            self::IN_8015_Full_HD => 'IN-8015 Full HD',];
        foreach ($INSTAR_types as $key => $INSTAR_type) {
            if ($key == $INSTAR_type_nr) {
                $type = $INSTAR_type;
            }
        }
        return $type;
    }

    // WLAN

    /*
     * Reset the Parameter Values

http://192.168.xxx.xxx./cgi-bin/hi3510/param.cgi?cmd=setwirelessattr&-wf_ssid=SSID&-wf_enable=0&-wf_auth=2&-wf_key=1234&-wf_enc=1&-wf_mode=0
     */


    // ALARM

    /*
     *  http://admin:instar@192.168.xxx.xxx/cgi-bin/hi3510/param.cgi?cmd=setmdattr&-enable=1&-name=1 :: enables the md area 1

    http://admin:instar@192.168.xxx.xxx/cgi-bin/hi3510/param.cgi?cmd=setmdattr&-enable=0&-name=1 :: disables the md area 1

    http://192.168.x.x/cgi-bin/hi3510/param.cgi?cmd=setioattr&-io_enable=1&-io_flag=1 :: enable / disable external alarm in to trigger recording
Example:
http://admin:instar@192.168.xxx.xxx/cgi-bin/hi3510/param.cgi?cmd=setmdattr&-enable=0&-name=1&cmd=setmdattr&-enable=0&-name=2&cmd=setmdattr&-enable=0&-name=3&cmd=setmdattr&-enable=0&-name=4
     */

    protected function SetLastMovement()
    {
        $relaxationmotionsensor = $this->ReadPropertyInteger('relaxationmotionsensor');
        $last_write             = IPS_GetVariable($this->GetIDForIdent('LastMovement'))['VariableChanged'];
        $current_time           = time();
        if (($current_time - $last_write) > $relaxationmotionsensor) {
            $this->SendDebug('INSTAR:', 'motionsensor event', 0);
            $this->SetValue('LastMovement', date('d.m.y H:i:s'));
        }
    }

    private function CreateSnapshotScript()
    {
        $Script = '<?
//Do not delete or modify.
INSTAR_GetSnapshot(' . $this->InstanceID . ');		
?>';
        return $Script;
    }

    private function CreateEmailAlertScript($email)
    {
        $Script = '<?
//Do not delete or modify.
INSTAR_EmailAlert(' . $this->InstanceID . ', "' . $email . '");		
?>';
        return $Script;
    }

    private function SetSnapshotEvent(int $IDSnapshot)
    {
        //prüfen ob Event existent
        $ParentID = $IDSnapshot;

        $EreignisID = @($this->GetIDForIdent('EventGetINSTARSnapshot'));
        if ($EreignisID === false) {
            $EreignisID = IPS_CreateEvent(0);
            IPS_SetName($EreignisID, 'GetINSTARSnapshot');
            IPS_SetIdent($EreignisID, 'EventGetINSTARSnapshot');
            IPS_SetEventTrigger($EreignisID, 0, $this->GetIDForIdent('LastMovement'));   //bei Variablenaktualisierung
            IPS_SetParent($EreignisID, $ParentID);
            IPS_SetEventActive($EreignisID, true);             //Ereignis aktivieren
        } else {
            $this->SendDebug('INSTAR', 'Event für Snapshot mit ObjektID' . $EreignisID . ' gefunden', 0);
        }
    }

    private function SetEmailEvent(int $IDEmail, bool $state)
    {
        //prüfen ob Event existent
        $ParentID = $IDEmail;

        $EreignisID = @IPS_GetObjectIDByIdent('EventINSTAREmail', $ParentID);
        if ($EreignisID === false) {
            $EreignisID = IPS_CreateEvent(0);
            IPS_SetName($EreignisID, 'INSTAR Email Alert');
            IPS_SetIdent($EreignisID, 'EventINSTAREmail');
            IPS_SetEventTrigger($EreignisID, 0, $this->GetIDForIdent('LastRingtone'));   //bei Variablenaktualisierung
            IPS_SetParent($EreignisID, $ParentID);
            IPS_SetEventActive($EreignisID, $state);             //Ereignis aktivieren	/ deaktivieren
        } else {
            //echo 'Die Ereignis-ID lautet: '. $EreignisID;
            IPS_SetEventActive($EreignisID, $state);             //Ereignis aktivieren	/ deaktivieren
        }

    }

    public function EmailAlert()
    {
        $emailalert   = $this->ReadPropertyBoolean('activeemail');
        $emailalert2  = $this->ReadPropertyBoolean('activeemail2');
        $emailalert3  = $this->ReadPropertyBoolean('activeemail3');
        $emailalert4  = $this->ReadPropertyBoolean('activeemail4');
        $emailalert5  = $this->ReadPropertyBoolean('activeemail5');
        $emailalert6  = $this->ReadPropertyBoolean('activeemail6');
        $emailalert7  = $this->ReadPropertyBoolean('activeemail7');
        $emailalert8  = $this->ReadPropertyBoolean('activeemail8');
        $emailalert9  = $this->ReadPropertyBoolean('activeemail9');
        $emailalert10 = $this->ReadPropertyBoolean('activeemail10');
        $emailalert11 = $this->ReadPropertyBoolean('activeemail11');
        if ($emailalert) {
            $email     = $this->ReadPropertyString('email');
            $subject   = $this->ReadPropertyString('subject');
            $emailtext = $this->ReadPropertyString('emailtext');
            $this->SendSMTPEmail($email, $subject, $emailtext);
        } elseif ($emailalert2) {
            $email     = $this->ReadPropertyString('email2');
            $subject   = $this->ReadPropertyString('subject2');
            $emailtext = $this->ReadPropertyString('emailtext2');
            $this->SendSMTPEmail($email, $subject, $emailtext);
        } elseif ($emailalert3) {
            $email     = $this->ReadPropertyString('email3');
            $subject   = $this->ReadPropertyString('subject3');
            $emailtext = $this->ReadPropertyString('emailtext3');
            $this->SendSMTPEmail($email, $subject, $emailtext);
        } elseif ($emailalert4) {
            $email     = $this->ReadPropertyString('email4');
            $subject   = $this->ReadPropertyString('subject4');
            $emailtext = $this->ReadPropertyString('emailtext4');
            $this->SendSMTPEmail($email, $subject, $emailtext);
        } elseif ($emailalert5) {
            $email     = $this->ReadPropertyString('email5');
            $subject   = $this->ReadPropertyString('subject5');
            $emailtext = $this->ReadPropertyString('emailtext5');
            $this->SendSMTPEmail($email, $subject, $emailtext);
        } elseif ($emailalert6) {
            $email     = $this->ReadPropertyString('email6');
            $subject   = $this->ReadPropertyString('subject6');
            $emailtext = $this->ReadPropertyString('emailtext6');
            $this->SendSMTPEmail($email, $subject, $emailtext);
        } elseif ($emailalert7) {
            $email     = $this->ReadPropertyString('email7');
            $subject   = $this->ReadPropertyString('subject7');
            $emailtext = $this->ReadPropertyString('emailtext7');
            $this->SendSMTPEmail($email, $subject, $emailtext);
        } elseif ($emailalert8) {
            $email     = $this->ReadPropertyString('email8');
            $subject   = $this->ReadPropertyString('subject8');
            $emailtext = $this->ReadPropertyString('emailtext8');
            $this->SendSMTPEmail($email, $subject, $emailtext);
        } elseif ($emailalert9) {
            $email     = $this->ReadPropertyString('email9');
            $subject   = $this->ReadPropertyString('subject9');
            $emailtext = $this->ReadPropertyString('emailtext9');
            $this->SendSMTPEmail($email, $subject, $emailtext);
        } elseif ($emailalert10) {
            $email     = $this->ReadPropertyString('email10');
            $subject   = $this->ReadPropertyString('subject10');
            $emailtext = $this->ReadPropertyString('emailtext10');
            $this->SendSMTPEmail($email, $subject, $emailtext);
        } elseif ($emailalert11) {
            $email     = $this->ReadPropertyString('email11');
            $subject   = $this->ReadPropertyString('subject11');
            $emailtext = $this->ReadPropertyString('emailtext11');
            $this->SendSMTPEmail($email, $subject, $emailtext);
        }
    }

    protected function SendSMTPEmail($email, $subject, $emailtext)
    {
        $catid    = $this->ReadPropertyInteger('categoryhistory');
        $mediaids = IPS_GetChildrenIDs($catid);
        // $countmedia = count($mediaids);
        foreach ($mediaids as $key => $mediaid) {
            $mediainfo = IPS_GetMedia($mediaid);
            if ($mediainfo['MediaFile'] == 'media/instar_snapshot_1.jpg') {
                $mailer = $this->ReadPropertyInteger('smtpmodule');
                SMTP_SendMailMediaEx($mailer, $email, $subject, $emailtext, $mediaid);
            }
        }
    }

    public function GetHistory()
    {
        $name        = 'INSTAR Snapshot';
        $ident       = 'INSTARPic';
        $picturename = 'instar_snapshot_';
        for ($i = 1; $i <= 20; $i++) {

            $Content = '';

            //testen ob im Medienpool existent
            $catid = $this->ReadPropertyInteger('categorysnapshot');

            $MediaID = @IPS_GetObjectIDByIdent($ident . $i, $catid);
            if ($MediaID === false) {
                $MediaID = IPS_CreateMedia(1);                  // Image im MedienPool anlegen
                IPS_SetParent($MediaID, $catid); // Medienobjekt einsortieren unter der INSTAR Kategorie Historie
                IPS_SetIdent($MediaID, $ident . $i);
                IPS_SetPosition($MediaID, $i);
                IPS_SetMediaCached($MediaID, true);
                // Das Cachen für das Mediaobjekt wird aktiviert.
                // Beim ersten Zugriff wird dieses von der Festplatte ausgelesen
                // und zukünftig nur noch im Arbeitsspeicher verarbeitet.
                $ImageFile = IPS_GetKernelDir() . 'media' . DIRECTORY_SEPARATOR . $picturename . $i . '.jpg';  // Image-Datei
                IPS_SetMediaFile($MediaID, $ImageFile, false);    // Image im MedienPool mit Image-Datei verbinden
                IPS_SetName($MediaID, $name . ' ' . $i); // Medienobjekt benennen
                //IPS_SetInfo ($MediaID, $savetime);
                IPS_SetMediaContent($MediaID, base64_encode($Content));  //Bild Base64 codieren und ablegen
                IPS_SendMediaEvent($MediaID); //aktualisieren
            } else {
                IPS_SetMediaContent($MediaID, base64_encode($Content));  //Bild Base64 codieren und ablegen
                IPS_SendMediaEvent($MediaID); //aktualisieren
            }
            IPS_Sleep(200);
        }
    }

    public function SendINSTAR(string $URL)
    {
        $instaruser     = $this->ReadPropertyString('User');
        $instarpassword = $this->ReadPropertyString('Password');
        $INSTAR_URL     = $this->GetINSTARURL() . $URL;
        $this->SendDebug('INSTAR URL', $INSTAR_URL, 0);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $INSTAR_URL);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($ch, CURLOPT_USERPWD, "$instaruser:$instarpassword");
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);   //get status code
        $this->SendDebug('INSTAR', 'Status Code ' . $status_code, 0);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public function GetSnapshot()
    {
        $name         = 'INSTAR Snapshot';
        $ident        = 'INSTARPic';
        $picturename  = 'instar_snapshot_';
        $picturelimit = $this->ReadPropertyInteger('picturelimitsnapshot');
        $catid        = $this->ReadPropertyInteger('categorysnapshot');
        $picture = '';
        if ($catid > 0) {
            $picture = $this->GetImageCamera($name, $ident, $picturename, $picturelimit, $catid);
        } else {
            $this->SendDebug('INSTAR', 'No category is set, please set category.', 0);
            $this->LogMessage('Es wurde keine Kategorie gesetzt. Die Funktion wurde nicht ausgeführt.', KL_DEBUG);
        }
        return $picture;
    }

    private function GetImageCamera($name, $ident, $picturename, $picturelimit, $catid)
    {
        $snapshot_resolution = $this->ReadPropertyInteger('snapshot_resolution');
        if($snapshot_resolution == self::RESOLUTION_SNAPSHOT_1080p)
        {
            $URL     = self::GET_IMAGE_1080p;
        }
        elseif($snapshot_resolution == self::RESOLUTION_SNAPSHOT_320p)
        {
            $URL     = self::GET_IMAGE_320p;
        }
        elseif($snapshot_resolution == self::RESOLUTION_SNAPSHOT_160p)
        {
            $URL     = self::GET_IMAGE_160p;
        }
        else
        {
            $URL     = self::GET_IMAGE_1080p;
        }
        // $Content = $this->SendINSTAR($URL);
        $Content = file_get_contents('http://' . $this->GetHostURL() . $URL);
        //lastsnapshot bestimmen
        $mediaids     = IPS_GetChildrenIDs($catid);
        $countmedia   = count($mediaids);
        $lastsnapshot = $countmedia;
        if ($lastsnapshot == $picturelimit) {
            //neu beschreiben und Bilder um +1 neu zuordnen
            //Images base 64 codiert in allmedia einlesen

            $allmedia = $this->GetallImages($mediaids);
            if ($allmedia) {
                $lastmediaid = array_search($picturelimit, array_column($allmedia, 'picid'));
                unset($allmedia[$lastmediaid]);
                //Neues Bild zu allmedia hinzufügen
                $allmedia = $this->AddCurrentPic($allmedia, $mediaids, $Content);
                //allmedia schreiben
                $this->SaveImagestoPicSlot($allmedia, $ident, $name, $catid);
            } else {
                $this->SendDebug('INSTAR', 'No media image found', 0);
            }
        } else {
            // neues Mediaobjekt anlegen
            //testen ob im Medienpool existent
            $currentsnapshotid = $lastsnapshot + 1;
            $MediaID           = @IPS_GetObjectIDByIdent($ident . $currentsnapshotid, $catid);
            if ($MediaID === false) {
                $MediaID = IPS_CreateMedia(1);                  // Image im MedienPool anlegen
                IPS_SetParent($MediaID, $catid); // Medienobjekt einsortieren unter der INSTAR Kategorie
                IPS_SetIdent($MediaID, $ident . $currentsnapshotid);
                IPS_SetPosition($MediaID, $currentsnapshotid);
                IPS_SetMediaCached($MediaID, true);
                // Das Cachen für das Mediaobjekt wird aktiviert.
                // Beim ersten Zugriff wird dieses von der Festplatte ausgelesen
                // und zukünftig nur noch im Arbeitsspeicher verarbeitet.
                $ImageFile = IPS_GetKernelDir() . 'media' . DIRECTORY_SEPARATOR . $picturename . $currentsnapshotid . '.jpg';  // Image-Datei
                IPS_SetMediaFile($MediaID, $ImageFile, false);    // Image im MedienPool mit Image-Datei verbinden

                if ($currentsnapshotid == 1) {
                    //Auf Position 1 anlegen und beschreiben
                    $savetime = date('d.m.Y H:i:s');
                    IPS_SetName($MediaID, $name . ' ' . $currentsnapshotid . ' ' . $savetime); // Medienobjekt benennen
                    IPS_SetInfo($MediaID, $savetime);
                    IPS_SetMediaContent($MediaID, base64_encode($Content));  //Bild Base64 codieren und ablegen
                    IPS_SendMediaEvent($MediaID); //aktualisieren
                } else {
                    //Array auslesen und Bilder +1 neu zuordnen
                    //Images base 64 codiert in allmedia einlesen
                    $allmedia = $this->GetallImages($mediaids);
                    if ($allmedia) {
                        //Neues Bild zu allmedia hinzufügen
                        $allmedia = $this->AddCurrentPic($allmedia, $mediaids, $Content);
                        //allmedia schreiben
                        $this->SaveImagestoPicSlot($allmedia, $ident, $name, $catid);
                    } else {
                        $this->SendDebug('INSTAR', 'No media image found', 0);
                    }
                }

            }
        }
        return $Content;
    }

    private function GetallImages($mediaids)
    {
        $countmedia = count($mediaids);
        if ($countmedia > 0) {
            $allmedia = [];
            for ($i = 0; $i <= ($countmedia - 1); $i++) {
                $mediakey = IPS_GetObject($mediaids[$i])['ObjectIdent'];
                $mediakey = explode('Pic', $mediakey);
                $mediakey = intval($mediakey[1]);
                //$name = IPS_GetName($mediaids[$i]);
                //$name = explode(' ', $name);
                //$savedate = $name[3];
                //$savetime = $name[4];
                //$saveinfo =  $savedate.' '.$savetime;
                $saveinfo                    = IPS_GetObject($mediaids[$i])['ObjectInfo'];
                $allmedia[$i]['objid']       = $mediaids[$i];
                $allmedia[$i]['picid']       = $mediakey;
                $allmedia[$i]['saveinfo']    = $saveinfo;
                $allmedia[$i]['imagebase64'] = IPS_GetMediaContent($mediaids[$i]); //base64 codiert

            }
        } else {
            $allmedia = false;
        }

        return $allmedia;

    }

    private function SaveImagestoPicSlot($allmedia, $ident, $name, $catid)
    {

        foreach ($allmedia as $media) {
            $picid    = $media['picid'];
            $newpicid = $picid + 1;
            $mediaid  = @IPS_GetObjectIDByIdent($ident . $newpicid, $catid);
            if ($mediaid) {
                $saveinfo    = $media['saveinfo'];
                $imagebase64 = $media['imagebase64'];
                IPS_SetMediaContent($mediaid, $imagebase64);  //Bild Base64 codiert ablegen
                IPS_SetName($mediaid, $name . ' ' . $newpicid . ' ' . $saveinfo); // Medienobjekt benennen
                IPS_SetInfo($mediaid, $saveinfo);
                IPS_SendMediaEvent($mediaid); //aktualisieren
            } else {
                $this->SendDebug('INSTAR', 'No picture with ident ' . $ident . $newpicid . ' found', 0);
            }
        }
    }

    private function AddCurrentPic($allmedia, $mediaids, $Content)
    {
        $lastid = count($allmedia);

        // Neues Bild ergänzen
        $allmedia[$lastid]['objid']       = $mediaids[0];
        $allmedia[$lastid]['picid']       = 0;
        $saveinfo                         = date('d.m.Y H:i:s');
        $allmedia[$lastid]['saveinfo']    = $saveinfo;
        $allmedia[$lastid]['imagebase64'] = base64_encode($Content);  //Bild Base64 codieren und ablegen;
        return $allmedia;
    }

    public function ReceiveData($JSONString)
    {
        $payload = json_decode($JSONString);
        // $this->SendDebug('INSTAR IO Data', $JSONString, 0);
        $data        = $payload->Buffer;
        $INSTAR_json = json_encode($data);
        $this->SendDebug('INSTAR Webhook', $INSTAR_json, 0);
        if (isset($data->objectid) && isset($data->value)) {
            $objectid = $data->objectid;
            $value    = $data->value;
            if ($objectid == $this->InstanceID) {
                if ($value == 1 || $value == '1' || $value == 'true') {
                    $this->SetValue('notification_alarm', $this->GetTimeStamp());
                } else {
                    $this->SetValue('notification_alarm', $this->GetTimeStamp());
                }
            }
        }
    }

    private function GetTimeStamp()
    {
        $time        = time();
        $string_time = date('d.m.Y H:i:s', $time);
        return $string_time;
    }

    public function RequestAction($Ident, $Value)
    {
        $this->SendDebug('INSTAR Request Action', 'Ident ' . $Ident . ', Value ' .print_r($Value, true) , 0);
        switch ($Ident) {
            case 'Control_Continuous':
                if ($Value == 0) {
                    $this->Left();
                } elseif ($Value == 1) {
                    $this->Up();
                } elseif ($Value == 2) {
                    $this->Down();
                } elseif ($Value == 3) {
                    $this->Right();
                } elseif ($Value == 4) {
                    $this->Stop();
                }
                break;
            case 'Control_Step':
                if ($Value == 0) {
                    $this->StepLeft();
                } elseif ($Value == 1) {
                    $this->StepUp();
                } elseif ($Value == 2) {
                    $this->StepDown();
                } elseif ($Value == 3) {
                    $this->StepRight();
                }
                break;
            case 'Control_Scan':
                if ($Value == 0) {
                    $this->GotoCenterPosition();
                } elseif ($Value == 1) {
                    $this->ScanHorizontal();
                } elseif ($Value == 2) {
                    $this->ScanVertical();
                }
                break;
            case 'INSTARButtonSnapshot':
                $this->GetSnapshot();
                break;
            case 'SetPosition':
                $this->SetPosition($Value);
                break;
            case 'flip':
                if ($Value) {
                    $this->FlipPicture(true);
                } else {
                    $this->FlipPicture(false);
                }
                break;
            case 'mirror':
                if ($Value) {
                    $this->MirrorPicture(true);
                } else {
                    $this->MirrorPicture(false);
                }
                break;
            case 'hue':
                $this->Hue($Value);
                break;
            case 'saturation':
                $this->Saturation($Value);
                break;
            case 'brightness':
                $this->Brightness($Value);
                break;
            case 'contrast':
                $this->Contrast($Value);
                break;
            case 'sharpness':
                $this->Sharpness($Value);
                break;
            case 'targety':
                $this->EqualizeImage($Value);
                break;
            case 'scene':
                if ($Value == 0) {
                    $this->Scene('auto');
                } elseif ($Value == 1) {
                    $this->Scene('indoor');
                } elseif ($Value == 2) {
                    $this->Scene('outdoor');
                }
                break;
            case 'IR_LED':
                if ($Value == 0) {
                    $this->LED_Auto();
                } elseif ($Value == 1) {
                    $this->LED_On();
                } elseif ($Value == 2) {
                    $this->LED_Inactive();
                }
                break;
            case 'UnsetPosition':
                $this->UnsetPosition($Value);
                break;
            case 'GotoPosition':
                $this->GotoPosition($Value);
                break;
            case 'dhcpflag':
                $this->GotoPosition($Value);
                break;
            case 'dnsstat':
                $this->GotoPosition($Value);
                break;
            case 'fdnsip':
                $this->GotoPosition($Value);
                break;
            case 'sdnsip':
                $this->GotoPosition($Value);
                break;
            case 'wf_enable':
                $this->EnableWIFI($Value);
                break;
            default:
                $this->SendDebug('INSTAR', 'Invalid ident', 0);
        }
    }

    //Profile

    /**
     * register profiles.
     *
     * @param $Name
     * @param $Icon
     * @param $Prefix
     * @param $Suffix
     * @param $MinValue
     * @param $MaxValue
     * @param $StepSize
     * @param $Digits
     * @param $Vartype
     */
    protected function RegisterProfile($Name, $Icon, $Prefix, $Suffix, $MinValue, $MaxValue, $StepSize, $Digits, $Vartype)
    {

        if (!IPS_VariableProfileExists($Name)) {
            IPS_CreateVariableProfile($Name, $Vartype); // 0 boolean, 1 int, 2 float, 3 string,
        } else {
            $profile = IPS_GetVariableProfile($Name);
            if ($profile['ProfileType'] != $Vartype) {
                $this->_debug('profile', 'Variable profile type does not match for profile ' . $Name);
            }
        }

        IPS_SetVariableProfileIcon($Name, $Icon);
        IPS_SetVariableProfileText($Name, $Prefix, $Suffix);
        if ($Vartype != VARIABLETYPE_STRING) {
            IPS_SetVariableProfileDigits($Name, $Digits); //  Nachkommastellen
            IPS_SetVariableProfileValues(
                $Name, $MinValue, $MaxValue, $StepSize
            ); // string $ProfilName, float $Minimalwert, float $Maximalwert, float $Schrittweite
        }
    }

    /**
     * register profile association.
     *
     * @param $Name
     * @param $Icon
     * @param $Prefix
     * @param $Suffix
     * @param $MinValue
     * @param $MaxValue
     * @param $Stepsize
     * @param $Digits
     * @param $Vartype
     * @param $Associations
     */
    protected function RegisterProfileAssociation($Name, $Icon, $Prefix, $Suffix, $MinValue, $MaxValue, $Stepsize, $Digits, $Vartype, $Associations)
    {
        if (is_array($Associations) && count($Associations) === 0) {
            $MinValue = 0;
            $MaxValue = 0;
        }
        $this->RegisterProfile($Name, $Icon, $Prefix, $Suffix, $MinValue, $MaxValue, $Stepsize, $Digits, $Vartype);

        if (is_array($Associations)) {
            foreach ($Associations as $Association) {
                IPS_SetVariableProfileAssociation($Name, $Association[0], $Association[1], $Association[2], $Association[3]);
            }
        } else {
            $Associations = $this->$Associations;
            foreach ($Associations as $code => $association) {
                IPS_SetVariableProfileAssociation($Name, $code, $this->Translate($association), $Icon, -1);
            }
        }

    }

    protected function GetIPSVersion()
    {
        $ipsversion = floatval(IPS_GetKernelVersion());
        if ($ipsversion < 4.1) // 4.0
        {
            $ipsversion = 0;
        } elseif ($ipsversion >= 4.1 && $ipsversion < 4.2) // 4.1
        {
            $ipsversion = 1;
        } elseif ($ipsversion >= 4.2 && $ipsversion < 4.3) // 4.2
        {
            $ipsversion = 2;
        } elseif ($ipsversion >= 4.3 && $ipsversion < 4.4) // 4.3
        {
            $ipsversion = 3;
        } elseif ($ipsversion >= 4.4 && $ipsversion < 5) // 4.4
        {
            $ipsversion = 4;
        } else   // 5
        {
            $ipsversion = 5;
        }

        return $ipsversion;
    }

    /***********************************************************
     * Configuration Form
     ***********************************************************/

    /**
     * build configuration form.
     *
     * @return string
     */
    public function GetConfigurationForm()
    {
        // return current form
        return json_encode(
            [
                'elements' => $this->FormHead(),
                'actions'  => $this->FormActions(),
                'status'   => $this->FormStatus()]
        );
    }

    /**
     * return form configurations on configuration step.
     *
     * @return array
     */
    protected function FormHead()
    {
        $form = [
            [
                'type'  => 'Image',
                'image' => 'data:image/png;base64, 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'],
            [
                'type'  => 'RowLayout',
                'items' => $this->FormCameraSelection()]];
        $form = array_merge_recursive(
            $form, [
                     [
                         'type'    => 'ExpansionPanel',
                         'caption' => 'INSTAR Settings',
                         'items'   => [
                             [
                                 'type'    => 'Label',
                                 'caption' => 'IP Address or Hostname'],
                             [
                                 'name'    => 'Host',
                                 'type'    => 'ValidationTextBox',
                                 'caption' => 'Camera Address'],
                             [
                                 'type'    => 'Label',
                                 'caption' => 'Port INSTAR Camera'],
                             [
                                 'name'    => 'Port',
                                 'type'    => 'NumberSpinner',
                                 'caption' => 'Camera Port']]],
                     [
                         'type'    => 'ExpansionPanel',
                         'caption' => 'INSTAR login credentials',
                         'items'   => [
                             [
                                 'type'    => 'Label',
                                 'caption' => 'INSTAR user with authorization as admin'],
                             [
                                 'name'    => 'User',
                                 'type'    => 'ValidationTextBox',
                                 'caption' => 'User'],
                             [
                                 'name'    => 'Password',
                                 'type'    => 'PasswordTextBox',
                                 'caption' => 'Password']]],
                     [
                         'type'    => 'ExpansionPanel',
                         'caption' => 'email notification settings',
                         'items'   => $this->FormShowEmail()],
                     [
                         'type'    => 'ExpansionPanel',
                         'caption' => 'INSTAR Picture Settings',
                         'items'   => [
                             [
                                 'type'    => 'Label',
                                 'caption' => 'Please first choose a Snapshot Category in the IP-Symcon Object Tree and select it in the Field below'],
                             [
                                 'type'    => 'Label',
                                 'caption' => 'INSTAR snapshot pictures category'],
                             [
                                 'name'    => 'categorysnapshot',
                                 'type'    => 'SelectCategory',
                                 'caption' => 'Alarm Snapshots'],
                             [
                                 'type'    => 'Label',
                                 'caption' => 'picture limit for INSTAR snapshots pictures'],
                             [
                                 'name'    => 'picturelimitsnapshot',
                                 'type'    => 'NumberSpinner',
                                 'caption' => 'Number of Alarm Snapshots'],
                             [
                                 'type'  => 'Label',
                                 'label' => 'Relaxation time for motionsensor (seconds)'],
                             [
                                 'name'    => 'relaxationmotionsensor',
                                 'type'    => 'NumberSpinner',
                                 'caption' => 'relaxation (s)'],
                             [
                                 'type'    => 'Select',
                                 'name'    => 'snapshot_resolution',
                                 'caption' => 'Snapshot Resolution',
                                 'options' => [
                                     [
                                         'caption' => '1080 p',
                                         'value'   => self::RESOLUTION_SNAPSHOT_1080p],
                                     [
                                         'caption' => '320 p',
                                         'value'   => self::RESOLUTION_SNAPSHOT_320p],
                                     [
                                         'caption' => '160 p',
                                         'value'   => self::RESOLUTION_SNAPSHOT_160p]]

                             ],
                             [
                                 'type'  => 'Label',
                                 'label' => 'Select Channel for MJPEG Stream'],
                             [
                                 'type'    => 'Select',
                                 'name'    => 'MJPEG_Stream',
                                 'caption' => 'MJPEG Stream Channel',
                                 'options' => [
                                     [
                                         'caption' => '1080p (FullHD) Channel 11',
                                         'value'   => 11],
                                     [
                                         'caption' => '320p (VGA) Channel 12',
                                         'value'   => 12],
                                     [
                                         'caption' => '160p (QVGA) Channel 13',
                                         'value'   => 13]]

                             ],
                             ]]]
        );
        return $form;
    }



    private function FormNetworkInfo()
    {
        $dhcpflag = $this->ReadAttributeString('dhcpflag');
        if ($dhcpflag == 'on') {
            $dhcpflag = true;
        } elseif ($dhcpflag == 'off') {
            $dhcpflag = false;
        }
        $form = [];
        $ip   = $this->ReadAttributeString('ip');
        if ($ip != '') {
            $form = array_merge_recursive(
                $form, [
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'    => 'ValidationTextBox',
                                     'name'    => 'ip',
                                     'caption' => 'IP Adress',
                                     'visible' => true,
                                     'value'   => $this->ReadAttributeString('ip'),
                                     'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'ip_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'value'    => $this->ReadAttributeBoolean('ip_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "ip_enabled", $ip_enabled);'],]],
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'    => 'ValidationTextBox',
                                     'name'    => 'netmask',
                                     'caption' => 'Subnetmask',
                                     'visible' => true,
                                     'value'   => $this->ReadAttributeString('netmask'),
                                     'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'netmask_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'value'    => $this->ReadAttributeBoolean('netmask_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "netmask_enabled", $netmask_enabled);'],]],
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'    => 'ValidationTextBox',
                                     'name'    => 'gateway',
                                     'caption' => 'Gateway',
                                     'visible' => true,
                                     'value'   => $this->ReadAttributeString('gateway'),
                                     'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'gateway_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'value'    => $this->ReadAttributeBoolean('gateway_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "gateway_enabled", $gateway_enabled);'],]],
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'    => 'ValidationTextBox',
                                     'name'    => 'fdnsip',
                                     'caption' => 'DNS Server',
                                     'visible' => true,
                                     'value'   => $this->ReadAttributeString('fdnsip'),
                                     'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'fdnsip_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'value'    => $this->ReadAttributeBoolean('fdnsip_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "fdnsip_enabled", $fdnsip_enabled);'],]],
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'    => 'NumberSpinner',
                                     'name'    => 'httpport',
                                     'caption' => 'HTTP Port',
                                     'visible' => true,
                                     'value'   => $this->ReadAttributeInteger('httpport'),
                                     'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'httpport_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'value'    => $this->ReadAttributeBoolean('httpport_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "httpport_enabled", $httpport_enabled);'],]],
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'    => 'NumberSpinner',
                                     'name'    => 'httpsport',
                                     'caption' => 'HTTPS Port',
                                     'visible' => true,
                                     'value'   => $this->ReadAttributeInteger('httpsport'),
                                     'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'httpsport_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'value'    => $this->ReadAttributeBoolean('httpsport_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "httpsport_enabled", $httpsport_enabled);'],]],
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'    => 'NumberSpinner',
                                     'name'    => 'rtmpport',
                                     'caption' => 'RTMP Port for Flash Plugin',
                                     'visible' => true,
                                     'value'   => $this->ReadAttributeInteger('rtmpport'),
                                     'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'rtmpport_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'value'    => $this->ReadAttributeBoolean('rtmpport_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "rtmpport_enabled", $rtmpport_enabled);'],]],
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'    => 'CheckBox',
                                     'name'    => 'rtsp_aenable',
                                     'caption' => 'RTSP Authentication',
                                     'visible' => true,
                                     'value'   => boolval($this->ReadAttributeInteger('rtsp_aenable')),
                                     'onClick' => 'INSTAR_SetRTSPAuthenticationState($id, $value)'],
                                 [
                                     'name'     => 'rtsp_aenable_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'value'    => $this->ReadAttributeBoolean('rtsp_aenable_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "rtsp_aenable_enabled", $rtsp_aenable_enabled);'],]],
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'    => 'NumberSpinner',
                                     'name'    => 'rtspport',
                                     'caption' => 'RTSP',
                                     'visible' => true,
                                     'value'   => $this->ReadAttributeInteger('rtspport'),
                                     'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'rtspport_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'value'    => $this->ReadAttributeBoolean('rtspport_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "rtspport_enabled", $rtspport_enabled);'],]],
                         [
                             'type'    => 'Label',
                             'caption' => 'Set Network infos for the camera'],
                         [
                             'type'    => 'Button',
                             'caption' => 'Set network infos',
                             'onClick' => 'INSTAR_SetNetworkParameters($id, $ip, $netmask, $gateway, $fdnsip, $httpport, $httpsport, $rtmpport, $rtsp_aenable, $rtspport);']
                    ]
            /*
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'    => 'CheckBox',
                        'name'    => 'dhcpflag',
                        'caption' => 'DHCP',
                        'visible' => true,
                        'value'   => $dhcpflag,
                        'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                    [
                        'name'    => 'dhcpflag_enabled',
                        'type'    => 'CheckBox',
                        'caption' => 'Create Variable for Webfront',
                        'value'   => $this->ReadAttributeBoolean('dhcpflag_enabled'),
                        'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],]],

            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'    => 'ValidationTextBox',
                        'name'    => 'macaddress',
                        'caption' => 'MAC  Address',
                        'visible' => true,
                        'value'   => $this->ReadAttributeString('macaddress'),
                        'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                    [
                        'name'    => 'macaddress_enabled',
                        'type'    => 'CheckBox',
                        'caption' => 'Create Variable for Webfront',
                        'value'   => $this->ReadAttributeBoolean('macaddress_enabled'),
                        'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],]],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'    => 'ValidationTextBox',
                        'name'    => 'networktype',
                        'caption' => 'Network Type',
                        'visible' => true,
                        'value'   => $this->ReadAttributeString('networktype'),
                        'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                    [
                        'name'    => 'networktype_enabled',
                        'type'    => 'CheckBox',
                        'caption' => 'Create Variable for Webfront',
                        'value'   => $this->ReadAttributeBoolean('networktype_enabled'),
                        'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],]],]*/
            );
        }
        /*
        $form = array_merge_recursive(
            $form, [
                     [
                         'type'    => 'Label',
                         'caption' => 'Get network infos from the camera'],
                     [
                         'type'    => 'Button',
                         'caption' => 'Get network infos',
                         'onClick' => 'INSTAR_GetNetInfo($id);']]
        );
        */
        return $form;
    }

    private function FormSSLInfo()
    {
        $form       = [];
        $our_server = $this->ReadAttributeString('our_server');
        if ($our_server != '') {
            $form = array_merge_recursive(
                $form, [
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'    => 'ValidationTextBox',
                                     'name'    => 'our_server',
                                     'caption' => 'INSTAR DDNS Server Domain',
                                     'visible' => true,
                                     'value'   => $this->ReadAttributeString('our_server'),
                                     'enabled' => false,
                                     'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'our_server_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'value'    => $this->ReadAttributeBoolean('our_server_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "our_server_enabled", $our_server_enabled);'],]]]
            /*
             [
                 'type'  => 'RowLayout',
                 'items' => [
                     [
                         'type'    => 'ValidationTextBox',
                         'name'    => 'wf_key',
                         'caption' => 'issued by',
                         'visible' => true,
                         'value'   => $this->ReadAttributeString('wf_key'),
                         'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                     [
                         'name'    => 'wf_key_enabled',
                         'type'    => 'CheckBox',
                         'caption' => 'Create Variable for Webfront',
                         'value'   => $this->ReadAttributeBoolean('wf_key_enabled'),
                         'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],]]]
            */
            );
        }
        return $form;
    }


    private function FormWIFIInfo()
    {
        // TODO Add search WLAN
        $form    = [];
        $wf_ssid = $this->ReadAttributeString('wf_ssid');
        if ($wf_ssid != '') {
            $form = array_merge_recursive(
                $form, [
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'    => 'CheckBox',
                                     'name'    => 'wf_enable',
                                     'caption' => 'WLAN Enabled',
                                     'visible' => true,
                                     'value'   => boolval($this->ReadAttributeInteger('wf_enable')),
                                     'onClick' => 'INSTAR_EnableWIFI($id, $wf_enable);'],
                                 [
                                     'name'     => 'wf_enable_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'value'    => $this->ReadAttributeBoolean('wf_enable_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "wf_enable_enabled", $wf_enable_enabled);'],]],
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'    => 'ValidationTextBox',
                                     'name'    => 'wf_ssid',
                                     'caption' => 'SSID',
                                     'visible' => true,
                                     'value'   => $this->ReadAttributeString('wf_ssid'),
                                     'onChange' => 'INSTAR_SetWifiParameters($id, $wf_enable, $wf_ssid, $wf_auth, $wf_key, $wf_enc, $wf_mode);'],
                                 [
                                     'name'     => 'wf_ssid_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'value'    => $this->ReadAttributeBoolean('wf_ssid_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "wf_ssid_enabled", $wf_ssid_enabled);'],]],
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'     => 'Select',
                                     'name'     => 'wf_mode',
                                     'caption'  => 'Networktype',
                                     'options'  => [
                                         [
                                             'caption' => 'infrastructure',
                                             'value'   => 0],
                                         [
                                             'caption' => 'ad-hoc',
                                             'value'   => 1]],
                                     'visible'  => true,
                                     'value'    => $this->ReadAttributeInteger('wf_mode'),
                                     'onChange' => 'INSTAR_SetWifiParameters($id, $wf_enable, $wf_ssid, $wf_auth, $wf_key, $wf_enc, $wf_mode);'],
                                 [
                                     'name'     => 'wf_mode_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'value'    => $this->ReadAttributeBoolean('wf_mode_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "wf_mode_enabled", $wf_mode_enabled);'],]],
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'     => 'Select',
                                     'name'     => 'wf_auth',
                                     'caption'  => 'Authentifikation',
                                     'options'  => [
                                         [
                                             'caption' => 'no encryption',
                                             'value'   => 0],
                                         [
                                             'caption' => 'WEP',
                                             'value'   => 1],
                                         [
                                             'caption' => 'WPA-PSK',
                                             'value'   => 2],
                                         [
                                             'caption' => 'WPA2-PSK',
                                             'value'   => 3]],
                                     'visible'  => true,
                                     'value'    => $this->ReadAttributeInteger('wf_auth'),
                                     'onChange' => 'INSTAR_SetWifiParameters($id, $wf_enable, $wf_ssid, $wf_auth, $wf_key, $wf_enc, $wf_mode);'],
                                 [
                                     'name'     => 'wf_auth_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'value'    => $this->ReadAttributeBoolean('wf_auth_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "wf_auth_enabled", $wf_auth_enabled);'],]],
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'     => 'Select',
                                     'name'     => 'wf_enc',
                                     'caption'  => 'Type',
                                     'options'  => [
                                         [
                                             'caption' => 'TKIP',
                                             'value'   => 0],
                                         [
                                             'caption' => 'AES',
                                             'value'   => 1]],
                                     'visible'  => true,
                                     'value'    => $this->ReadAttributeInteger('wf_enc'),
                                     'onChange' => 'INSTAR_SetWifiParameters($id, $wf_enable, $wf_ssid, $wf_auth, $wf_key, $wf_enc, $wf_mode);'],
                                 [
                                     'name'     => 'wf_enc_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'value'    => $this->ReadAttributeBoolean('wf_enc_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "wf_enc_enabled", $wf_enc_enabled);'],]],
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'    => 'PasswordTextBox',
                                     'name'    => 'wf_key',
                                     'caption' => 'Key',
                                     'visible' => true,
                                     'value'   => $this->ReadAttributeString('wf_key'),
                                     'onChange' => 'INSTAR_SetWifiParameters($id, $wf_enable, $wf_ssid, $wf_auth, $wf_key, $wf_enc, $wf_mode);'],
                                 [
                                     'name'     => 'wf_key_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'value'    => $this->ReadAttributeBoolean('wf_key_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "wf_key_enabled", $wf_key_enabled);'],]],
                                     [
                                         'type'    => 'Label',
                                         'caption' => 'Set WIFI infos for the camera'],
                                     [
                                         'type'    => 'Button',
                                         'caption' => 'Set WIFI infos',
                                         'onClick' => 'INSTAR_SetWifiParameters($id, $wf_enable, $wf_ssid, $wf_auth, $wf_key, $wf_enc, $wf_mode);']]

            );
        }
        /*
        $form = array_merge_recursive(
            $form, [
                     [
                         'type'    => 'Label',
                         'caption' => 'Get WIFI infos from the camera'],
                     [
                         'type'    => 'Button',
                         'caption' => 'Get WIFI infos',
                         'onClick' => 'INSTAR_GetCameraWIFIConfiguration($id);']]
        );
        */
        return $form;
    }

    private function FormRemoteInfo()
    {
        // TODO P2P

        $form       = [];
        $our_server = $this->ReadAttributeString('our_server');
        if ($our_server != '') {
            $form = array_merge_recursive(
                $form, [
                         [
                             'type'    => 'RowLayout',
                             'visible' => true,
                             'items'   => [
                                 [
                                     'type'    => 'ValidationTextBox',
                                     'name'    => 'our_domain',
                                     'caption' => 'Your INSTAR DDNS Address',
                                     'visible' => true,
                                     'value'   => $this->ReadAttributeString('our_domain'),
                                     'enabled' => false,
                                     'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'our_domain_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'visible'  => true,
                                     'value'    => $this->ReadAttributeBoolean('our_domain_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "our_domain_enabled", $our_domain_enabled);'],]],

                         [
                             'type'    => 'RowLayout',
                             'visible' => false,
                             'items'   => [
                                 [
                                     'type'    => 'ValidationTextBox',
                                     'name'    => 'our_server',
                                     'caption' => 'INSTAR DDNS Server Domain',
                                     'visible' => false,
                                     'value'   => $this->ReadAttributeString('our_server'),
                                     'enabled' => false,
                                     'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'our_server_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'visible'  => false,
                                     'value'    => $this->ReadAttributeBoolean('our_server_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "our_server_enabled", $our_server_enabled);'],]],
                         [
                             'type'    => 'RowLayout',
                             'visible' => false,
                             'items'   => [
                                 [
                                     'type'    => 'NumberSpinner',
                                     'name'    => 'our_port',
                                     'caption' => 'INSTAR DDNS Server Port',
                                     'visible' => false,
                                     'value'   => $this->ReadAttributeInteger('our_port'),
                                     'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'our_port_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'visible'  => false,
                                     'value'    => $this->ReadAttributeBoolean('our_port_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "our_port_enabled", $our_port_enabled);'],]],
                         [
                             'type'    => 'RowLayout',
                             'visible' => false,
                             'items'   => [
                                 [
                                     'type'    => 'ValidationTextBox',
                                     'name'    => 'our_uname',
                                     'caption' => 'Your INSTAR DDNS ID',
                                     'visible' => false,
                                     'value'   => $this->ReadAttributeString('our_uname'),
                                     'enabled' => false,
                                     'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'our_uname_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'visible'  => false,
                                     'value'    => $this->ReadAttributeBoolean('our_uname_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "our_uname_enabled", $our_uname_enabled);'],]],
                         [
                             'type'    => 'RowLayout',
                             'visible' => false,
                             'items'   => [
                                 [
                                     'type'    => 'ValidationTextBox',
                                     'name'    => 'our_passwd',
                                     'caption' => 'Your INSTAR DDNS Password',
                                     'visible' => false,
                                     'value'   => $this->ReadAttributeString('our_passwd'),
                                     'enabled' => false,
                                     'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'our_passwd_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'visible'  => false,
                                     'value'    => $this->ReadAttributeBoolean('our_passwd_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "our_passwd_enabled", $our_passwd_enabled);'],]],

                         [
                             'type'    => 'RowLayout',
                             'visible' => false,
                             'items'   => [
                                 [
                                     'type'    => 'NumberSpinner',
                                     'name'    => 'our_interval',
                                     'caption' => 'Update Intervall',
                                     'visible' => false,
                                     'value'   => $this->ReadAttributeInteger('our_interval'),
                                     'enabled' => false,
                                     'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'our_interval_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'visible'  => false,
                                     'value'    => $this->ReadAttributeBoolean('our_interval_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "our_interval_enabled", $our_interval_enabled);'],]],
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'    => 'CheckBox',
                                     'name'    => 'our_enable',
                                     'caption' => 'INSTAR DDNS',
                                     'visible' => true,
                                     'value'   => boolval($this->ReadAttributeInteger('our_enable')),
                                     'enabled' => true,
                                     'onClick' => 'INSTAR_EnabeINSTAR_DNS($id, $our_enable);'],
                                 [
                                     'name'     => 'our_enable_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'visible'  => true,
                                     'value'    => $this->ReadAttributeBoolean('our_enable_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "our_enable_enabled", $our_enable_enabled);'],]]]
            );
        }
        $our_enable = $this->ReadAttributeInteger('our_enable');
        if ($our_enable == 0) {
            $form = array_merge_recursive(
                $form, [
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'    => 'ValidationTextBox',
                                     'name'    => 'd3th_domain',
                                     'caption' => 'Your 3rd Party DDNS Address',
                                     'visible' => true,
                                     'value'   => $this->ReadAttributeString('d3th_domain'),
                                     'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'd3th_domain_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'visible'  => true,
                                     'value'    => $this->ReadAttributeBoolean('d3th_domain_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "d3th_domain_enabled", $d3th_domain_enabled);'],]],
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'     => 'Select',
                                     'name'     => 'd3th_service',
                                     'caption'  => 'Service',
                                     'options'  => [
                                         [
                                             'caption' => 'DynDNS',
                                             'value'   => 0],
                                         [
                                             'caption' => 'NoIP',
                                             'value'   => 1]],
                                     'visible'  => true,
                                     'value'    => $this->ReadAttributeInteger('d3th_service'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'd3th_service_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'visible'  => true,
                                     'value'    => $this->ReadAttributeBoolean('d3th_service_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "d3th_service_enabled", $d3th_service_enabled);'],]],
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'    => 'ValidationTextBox',
                                     'name'    => 'd3th_uname',
                                     'caption' => 'Username',
                                     'visible' => true,
                                     'value'   => $this->ReadAttributeString('d3th_uname'),
                                     'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'd3th_uname_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'visible'  => true,
                                     'value'    => $this->ReadAttributeBoolean('d3th_uname_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "d3th_uname_enabled", $d3th_uname_enabled);'],]],
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'    => 'ValidationTextBox',
                                     'name'    => 'd3th_passwd',
                                     'caption' => 'Password',
                                     'visible' => true,
                                     'value'   => $this->ReadAttributeString('d3th_passwd'),
                                     'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'd3th_passwd_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'visible'  => true,
                                     'value'    => $this->ReadAttributeBoolean('d3th_passwd_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "d3th_passwd_enabled", $d3th_passwd_enabled);'],]],
                         [
                             'type'    => 'RowLayout',
                             'visible' => false,
                             'items'   => [
                                 [
                                     'type'    => 'CheckBox',
                                     'name'    => 'd3th_enable',
                                     'caption' => '3rd Party DDNS',
                                     'visible' => true,
                                     'value'   => boolval($this->ReadAttributeInteger('d3th_enable')),
                                     'onClick' => 'INSTAR_Enabel3thDNS($id, $d3th_enable);'],
                                 [
                                     'name'     => 'd3th_enable_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'visible'  => true,
                                     'value'    => $this->ReadAttributeBoolean('d3th_enable_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "d3th_enable_enabled", $d3th_enable_enabled);'],]],
                         [
                             'type'    => 'Label',
                             'visible' => true,
                             'caption' => 'Set 3rd Party DDNS Configuration'],
                         [
                             'type'    => 'Button',
                             'visible' => true,
                             'caption' => 'Set DDNS',
                             'onClick' => 'INSTAR_Set3rdPartyDDNSParameters($id, $d3th_domain, $d3th_service, $d3th_uname, $d3th_passwd);']]
            );
        }
        $form = array_merge_recursive(
            $form, [
                     [
                         'type'    => 'Label',
                         'visible' => true,
                         'caption' => 'Get INSTAR DDNS'],
                     [
                         'type'    => 'Button',
                         'visible' => true,
                         'caption' => 'Get DDNS Configuration',
                         'onClick' => 'INSTAR_GetDDNSConfiguration($id);'],
                     [
                         'type'    => 'Label',
                         'visible' => true,
                         'caption' => 'Get DDNS'],
                     [
                         'type'     => 'Button',
                         'visible'  => true,
                         'caption'  => 'Get DDNS Configuration',
                         'onChange' => 'INSTAR_Get3rdPartyDDNSConfiguration($id);']]
        );
        return $form;
    }

    private function FormUPNPInfo()
    {
        $form = [
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'name'    => 'upm_enable',
                        'type'    => 'CheckBox',
                        'caption' => 'UPNP',
                        'value'   => boolval($this->ReadAttributeInteger('upm_enable')),
                        'onClick' => 'INSTAR_SetUPNPConfiguration($id, $upm_enable);'],
                    [
                        'name'     => 'upm_enable_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'value'    => $this->ReadAttributeBoolean('upm_enable_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "upm_enable_enabled", $upm_enable_enabled);'],]],
            [
                'type'    => 'Label',
                'visible' => false,
                'caption' => 'Get INSTAR UPNP'],
            [
                'type'    => 'Button',
                'visible' => false,
                'caption' => 'Get UPNP Configuration',
                'onClick' => 'INSTAR_GetUPNPConfiguration($id);']];
        return $form;
    }

    private function FormONVIFInfo()
    {
        $form      = [];
        $ov_subchn = $this->ReadAttributeInteger('ov_subchn');
        if ($ov_subchn != 0) {
            $form = array_merge_recursive(
                $form, [
                         [
                             'type'    => 'Label',
                             'visible' => true,
                             'caption' => 'ONVIF is a multi-vendor interface standard for IP cameras and accessories to ensure maximum compatibility between them'],
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'     => 'CheckBox',
                                     'name'     => 'ov_enable',
                                     'caption'  => 'Enable ONVIF',
                                     'visible'  => true,
                                     'value'    => boolval($this->ReadAttributeInteger('ov_enable')),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'ov_enable_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'value'    => $this->ReadAttributeBoolean('ov_enable_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "ov_enable_enabled", $ov_enable_enabled);'],]],
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'     => 'CheckBox',
                                     'name'     => 'ov_authflag',
                                     'caption'  => 'Authentication',
                                     'visible'  => true,
                                     'value'    => boolval($this->ReadAttributeInteger('ov_authflag')),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'ov_authflag_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'value'    => $this->ReadAttributeBoolean('ov_authflag_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "ov_authflag_enabled", $ov_authflag_enabled);'],]],
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'    => 'NumberSpinner',
                                     'name'    => 'ov_port',
                                     'caption' => 'ONVIF Port',
                                     'visible' => true,
                                     'value'   => $this->ReadAttributeInteger('ov_port'),
                                     'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'ov_port_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'value'    => $this->ReadAttributeBoolean('ov_port_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "ov_port_enabled", $ov_port_enabled);'],]],

                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'     => 'Select',
                                     'name'     => 'ov_forbitset',
                                     'caption'  => 'forbiset',
                                     'options'  => [
                                         [
                                             'caption' => 'When the time zone setting allows image parameter settings allow',
                                             'value'   => 0],
                                         [
                                             'caption' => 'When the time zone setting disabled, the image parameter settings allow',
                                             'value'   => 1],
                                         [
                                             'caption' => 'When the time zone setting allows image parameter settings prohibit',
                                             'value'   => 2],
                                         [
                                             'caption' => 'When the time zone setting is prohibited, prohibited image parameter settings',
                                             'value'   => 3]],
                                     'visible'  => true,
                                     'value'    => $this->ReadAttributeInteger('ov_forbitset'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'ov_forbitset_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'value'    => $this->ReadAttributeBoolean('ov_forbitset_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "ov_forbitset_enabled", $ov_forbitset_enabled);'],]],
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'     => 'Select',
                                     'name'     => 'ov_subchn',
                                     'caption'  => 'Video Subchannel',
                                     'options'  => [
                                         [
                                             'caption' => 'Channel 11',
                                             'value'   => 11],
                                         [
                                             'caption' => 'Channel 12',
                                             'value'   => 12],
                                         [
                                             'caption' => 'Channel 13',
                                             'value'   => 13]],
                                     'visible'  => true,
                                     'value'    => $this->ReadAttributeInteger('ov_subchn'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'ov_subchn_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'value'    => $this->ReadAttributeBoolean('ov_subchn_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "ov_subchn_enabled", $ov_subchn_enabled);'],]],
                         [
                             'type'  => 'RowLayout',
                             'items' => [
                                 [
                                     'type'     => 'Select',
                                     'name'     => 'ov_snapchn',
                                     'caption'  => 'Video Subchannel Snapshot',
                                     'options'  => [
                                         [
                                             'caption' => 'Channel 11',
                                             'value'   => 11],
                                         [
                                             'caption' => 'Channel 12',
                                             'value'   => 12],
                                         [
                                             'caption' => 'Channel 13',
                                             'value'   => 13]],
                                     'visible'  => true,
                                     'value'    => $this->ReadAttributeInteger('ov_snapchn'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                                 [
                                     'name'     => 'ov_snapchn_enabled',
                                     'type'     => 'CheckBox',
                                     'caption'  => 'Create Variable for Webfront',
                                     'value'    => $this->ReadAttributeBoolean('ov_snapchn_enabled'),
                                     'onChange' => 'INSTAR_SetWebFrontVariable($id, "ov_snapchn_enabled", $ov_snapchn_enabled);'],]],
                         [
                             'type'    => 'Label',
                             'visible' => false,
                             'caption' => 'Set ONVIF infos for the camera'],
                         [
                             'type'    => 'Button',
                             'visible' => false,
                             'caption' => 'Set ONVIF infos',
                             'onClick' => 'INSTAR_SetONVIFConfiguration($id);'],

                     ]
            );
        }
        $form = array_merge_recursive(
            $form, [
                     [
                         'type'    => 'Label',
                         'visible' => false,
                         'caption' => 'Get INSTAR ONVIF'],
                     [
                         'type'    => 'Button',
                         'visible' => false,
                         'caption' => 'Get ONVIF Configuration',
                         'onClick' => 'INSTAR_GetONVIFConfiguration($id);']]
        );
        return $form;
    }

    private function FormAudioSettings()
    {
        $form = [
            // audio encoder: 0, 1
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'aec',
                        'caption'  => 'audio encoder',
                        'visible'  => true,
                        'value'    => boolval($this->ReadAttributeInteger('aec')),
                        'onChange' => 'INSTAR_SetAudioEncoder($id, $value);'],
                    [
                        'name'     => 'aec_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'value'    => $this->ReadAttributeBoolean('aec_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "aec_enabled", $aec_enabled);'],]],
            // Noise surpression: 0, 1
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'denoise',
                        'caption'  => 'noise surpression',
                        'visible'  => true,
                        'value'    => boolval($this->ReadAttributeInteger('aec')),
                        'onChange' => 'INSTAR_SetNoiseSurpression($id, $denoise);'],
                    [
                        'name'     => 'denoise_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'value'    => $this->ReadAttributeBoolean('denoise_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "denoise_enabled", $denoise_enabled);'],]],
            // 0: linear input, 1: microphone input
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'    => 'Select',
                        'name'    => 'volin_type',
                        'caption' => 'input type',
                        'options' => [
                            [
                                'caption' => 'linear input',
                                'value'   => 0],
                            [
                                'caption' => 'microphone input',
                                'value'   => 1]],
                        'visible' => true,
                        'value'   => $this->ReadAttributeInteger('volin_type'),
                        'onClick' => 'INSTAR_SetVolumeInputType($id, $value);'],
                    [
                        'name'     => 'volin_type_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'value'    => $this->ReadAttributeBoolean('volin_type_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "volin_type_enabled", $volin_type_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => false,
                'items'   => [
                    [
                        'type'    => 'Select',
                        'name'    => 'aeformat_1',
                        'caption' => 'input type',
                        'options' => [
                            [
                                'caption' => 'G726 16Kbps',
                                'value'   => 0],
                            [
                                'caption' => 'G711A 64Kbps',
                                'value'   => 1]],
                        'visible' => true,
                        'value'   => $this->ReadAttributeString('aeformat_1'),
                        'onClick' => 'INSTAR_SetVolumeInputType($id, $aeformat_1);'],
                    [
                        'name'     => 'aeformat_1_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'value'    => $this->ReadAttributeBoolean('aeformat_1_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "aeformat_1_enabled", $aeformat_1_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => false,
                'items'   => [
                    [
                        'type'    => 'Select',
                        'name'    => 'aeformat_2',
                        'caption' => 'input type',
                        'options' => [
                            [
                                'caption' => 'G726 16Kbps',
                                'value'   => 0],
                            [
                                'caption' => 'G711A 64Kbps',
                                'value'   => 1]],
                        'visible' => true,
                        'value'   => $this->ReadAttributeString('aeformat_2'),
                        'onClick' => 'INSTAR_SetVolumeInputType($id, $aeformat_2);'],
                    [
                        'name'     => 'aeformat_2_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'value'    => $this->ReadAttributeBoolean('aeformat_2_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "aeformat_2_enabled", $aeformat_2_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => false,
                'items'   => [
                    [
                        'type'    => 'Select',
                        'name'    => 'aeformat_3',
                        'caption' => 'input type',
                        'options' => [
                            [
                                'caption' => 'G726 16Kbps',
                                'value'   => 0],
                            [
                                'caption' => 'G711A 64Kbps',
                                'value'   => 1]],
                        'visible' => true,
                        'value'   => $this->ReadAttributeString('aeformat_3'),
                        'onClick' => 'INSTAR_SetVolumeInputType($id, $aeformat_3);'],
                    [
                        'name'     => 'aeformat_3_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'value'    => $this->ReadAttributeBoolean('aeformat_3_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "aeformat_3_enabled", $aeformat_3_enabled);'],]],

            // Audio input volume: 1 - 100
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'volume',
                        'visible'  => true,
                        'caption'  => 'Input Sensitivity',
                        'minimum'  => 0,
                        'maximum'  => 100,
                        'value'    => $this->ReadAttributeInteger('volume'),
                        'onChange' => 'INSTAR_SetVolume($id, $volume);'],
                    [
                        'name'     => 'volume_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'value'    => $this->ReadAttributeBoolean('volume_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "volume_enabled", $volume_enabled);'],]],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'ao_volume',
                        'caption'  => 'Speaker / Output Volume',
                        'visible'  => true,
                        'minimum'  => 0,
                        'maximum'  => 100,
                        'value'    => $this->ReadAttributeInteger('ao_volume'),
                        'onChange' => 'INSTAR_SetOutputVolume($id, $ao_volume);'],
                    [
                        'name'     => 'ao_volume_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'value'    => $this->ReadAttributeBoolean('ao_volume_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "ao_volume_enabled", $ao_volume_enabled);'],]]

        ];
        return $form;
    }

    /*
     *    if ($var_name == 'aeformat') {
                if ($var_content = 'g726') // Audio encode format g726: G726 16Kbps
                {
                    $var_content = 0;
                } else // Audio encode format g711a: G711A 64Kbps
                {
                    $var_content = 1;
                }
                $this->WriteAttributeInteger($var_name, $var_content);
            }
     */

    private function FormVideoSettings()
    {
        $vinorm       = $this->ReadAttributeString('vinorm');
        $vinorm_value = 0;
        if ($vinorm == 'P') {
            $vinorm_value = 0;
        }
        $form = [
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'Select',
                        'name'     => 'videomode',
                        'caption'  => 'Videomode',
                        'options'  => [
                            [
                                'caption' => 'Please select a videomode',
                                'value'   => 0],
                            [
                                'caption' => 'Videomode',
                                'value'   => 41],
                            [
                                'caption' => '1080p (Full HD)',
                                'value'   => self::RESOLUTION_1080p],
                            [
                                'caption' => '320p (VGA)',
                                'value'   => self::RESOLUTION_320p],
                            [
                                'caption' => '160p (QVGA)',
                                'value'   => self::RESOLUTION_160p],],
                        'visible'  => true,
                        'value'    => $this->ReadAttributeInteger('videomode'),
                        'onChange' => 'INSTAR_SetVideoMode($id, $videomode);'

                    ],
                    [
                        'name'     => 'videomode_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('videomode_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "videomode_enabled", $videomode_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'Select',
                        'name'     => 'vinorm',
                        'caption'  => 'vinorm',
                        'options'  => [
                            [
                                'caption' => 'Video Norm 50Hz (PAL)',
                                'value'   => 0],],
                        'visible'  => true,
                        'value'    => $vinorm_value,
                        'onChange' => 'INSTAR_SetVideonorm($id, $vinorm);'

                    ],
                    [
                        'name'     => 'vinorm_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('vinorm_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "vinorm_enabled", $vinorm_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'profile',
                        'caption'  => 'h.264 encoder',
                        'visible'  => true,
                        'value'    => boolval($this->ReadAttributeInteger('profile')),
                        'onChange' => 'INSTAR_SetVideoProfile($id, $profile);'],
                    [
                        'name'     => 'profile_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('profile_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "profile_enabled", $profile_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'    => 'NumberSpinner',
                        'name'    => 'maxchn',
                        'caption' => 'Maximum active video channels',
                        'visible' => true,
                        'value'   => $this->ReadAttributeInteger('maxchn'),
                        'onClick' => 'INSTAR_SetMaxChn($id, $maxchn);'],

                    [
                        'name'     => 'maxchn_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('maxchn_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "maxchn_enabled", $maxchn_enabled);'],]],


            // TODO check INSTAR_GetVideoEncoderAttributes($id);


        ];
        return $form;
    }

    private function FormImageSettings()
    {

        $form = [
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'hue',
                        'caption'  => 'Hue',
                        'minimum'  => 0,
                        'maximum'  => 100,
                        'value'    => $this->ReadAttributeInteger('hue'),
                        'onChange' => 'INSTAR_Hue($id, $hue);'],
                    [
                        'name'     => 'hue_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('hue_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "hue_enabled", $hue_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'brightness',
                        'caption'  => 'Brightness',
                        'minimum'  => 0,
                        'maximum'  => 100,
                        'value'    => $this->ReadAttributeInteger('brightness'),
                        'onChange' => 'INSTAR_Brightness($id, $brightness);'],
                    [
                        'name'     => 'brightness_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('brightness_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "brightness_enabled", $brightness_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'saturation',
                        'caption'  => 'Saturation',
                        'minimum'  => 0,
                        'maximum'  => 100,
                        'value'    => $this->ReadAttributeInteger('saturation'),
                        'onChange' => 'INSTAR_Saturation($id, $saturation);'],
                    [
                        'name'     => 'saturation_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('saturation_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "saturation_enabled", $saturation_enabled);'],]],

            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'contrast',
                        'caption'  => 'Contrast',
                        'minimum'  => 0,
                        'maximum'  => 100,
                        'value'    => $this->ReadAttributeInteger('contrast'),
                        'onChange' => 'INSTAR_Contrast($id, $contrast);'],
                    [
                        'name'     => 'contrast_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('contrast_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "contrast_enabled", $contrast_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'sharpness',
                        'caption'  => 'Sharpness',
                        'minimum'  => 0,
                        'maximum'  => 100,
                        'value'    => $this->ReadAttributeInteger('sharpness'),
                        'onChange' => 'INSTAR_Sharpness($id, $sharpness);'],
                    [
                        'name'     => 'sharpness_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('sharpness_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "sharpness_enabled", $sharpness_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'gamma',
                        'caption'  => 'Gamma',
                        'minimum'  => 0,
                        'maximum'  => 100,
                        'value'    => $this->ReadAttributeInteger('gamma'),
                        'onChange' => 'INSTAR_Gamma($id, $gamma);'],
                    [
                        'name'     => 'gamma_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('gamma_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "gamma_enabled", $gamma_enabled);'],]],
            [
                'type'    => 'Label',
                'visible' => true,
                'caption' => 'advanced settings'],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'mirror',
                        'caption'  => 'rotate picture by 180°',
                        'visible'  => true,
                        'value'    => boolval($this->ReadAttributeInteger('profile')),
                        'onChange' => 'INSTAR_MirrorPicture($id, $mirror);'],
                    [
                        'name'     => 'mirror_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('mirror_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "mirror_enabled", $mirror_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'targety',
                        'caption'  => 'Equalize image',
                        'minimum'  => 0,
                        'maximum'  => 255,
                        'value'    => $this->ReadAttributeInteger('targety'),
                        'onChange' => 'INSTAR_EqualizeImage($id, $targety);'],
                    [
                        'name'     => 'targety_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('targety_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "targety_enabled", $targety_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'    => 'Select',
                        'name'    => 'wdrmode',
                        'caption' => 'Wide Dynamic Range',
                        'options' => [
                            [
                                'caption' => 'Hardware WDR Mode',
                                'value'   => self::Hardware_WDR_Modus],
                            [
                                'caption' => 'Software WDR Mode',
                                'value'   => self::Software_WDR_Modus],],
                        'visible' => true,
                        'value'   => $this->ReadAttributeInteger('wdrmode'),
                        'onClick' => 'INSTAR_SetWDRMode($id, $wdrmode);'

                    ],
                    [
                        'name'     => 'wdrmode_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('wdrmode_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "wdrmode_enabled", $wdrmode_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'wdrauto',
                        'visible'  => true,
                        'caption'  => 'Auto WDR',
                        'value'    => boolval($this->ReadAttributeInteger('wdrauto')),
                        'onChange' => 'INSTAR_SetWDRAuto($id, $wdrauto);'],
                    [
                        'name'     => 'wdrauto_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('wdrmode_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "wdrauto_enabled", $wdrauto_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'wdrautval',
                        'caption'  => 'Dynamic WDR Level',
                        'minimum'  => 0,
                        'maximum'  => 2,
                        'value'    => $this->ReadAttributeInteger('wdrautval'),
                        'onChange' => 'INSTAR_SetWDRAutval($id, $wdrautval);'],
                    [
                        'name'     => 'wdrautval_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('wdrautval_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "wdrautval_enabled", $wdrautval_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'wdrmanval',
                        'caption'  => 'Fix WDR Level',
                        'minimum'  => 0,
                        'maximum'  => 255,
                        'value'    => $this->ReadAttributeInteger('wdrmanval'),
                        'onChange' => 'INSTAR_SetWDRmanval($id, $wdrmanval);'],
                    [
                        'name'     => 'wdrmanval_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('wdrmanval_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "wdrmanval_enabled", $wdrmanval_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'd3noauto',
                        'visible'  => true,
                        'caption'  => 'Noise Reduction Mode',
                        'value'    => boolval($this->ReadAttributeInteger('d3noauto')),
                        'onChange' => 'INSTAR_SetD3noauto($id, $d3noauto);'],
                    [
                        'name'     => 'd3noauto_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('d3noauto_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "d3noauto_enabled", $d3noauto_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'd3noval',
                        'caption'  => 'Noise Reduction Strength',
                        'minimum'  => 0,
                        'maximum'  => 255,
                        'value'    => $this->ReadAttributeInteger('d3noval'),
                        'onChange' => 'INSTAR_SetD3noval($id, $d3noval);'],
                    [
                        'name'     => 'd3noval_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('d3noval_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "d3noval_enabled", $d3noval_enabled);'],]],

        ];
        return $form;
    }

    private function FormImageOverlaySettings()
    {
        $form = [
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'    => 'ValidationTextBox',
                        'name'    => 'name_0_osd',
                        'visible' => true,
                        'caption' => 'OSD Time',
                        'value'   => $this->ReadAttributeString('name_0_osd'),
                        'onClick' => 'INSTAR_SetOSDParameters($id, $name_0_osd, $name_1_osd);'],
                    [
                        'name'     => 'name_0_osd_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('name_0_osd_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "name_0_osd_enabled", $name_0_osd_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'    => 'ValidationTextBox',
                        'name'    => 'name_1_osd',
                        'visible' => true,
                        'caption' => 'OSD Camera Name',
                        'value'   => $this->ReadAttributeString('name_1_osd'),
                        'onClick' => 'INSTAR_SetOSDParameters($id, $name_0_osd, $name_1_osd);'],
                    [
                        'name'     => 'name_0_osd_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('name_0_osd_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "name_0_osd_enabled", $name_0_osd_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'show_0_osd',
                        'visible'  => true,
                        'caption'  => 'Display Time Stamp',
                        'value'    => boolval($this->ReadAttributeInteger('show_0_osd')),
                        'onChange' => 'INSTAR_EnableOSD_Time($id, $show_0_osd);'],
                    [
                        'name'     => 'show_0_osd_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('show_0_osd_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "show_0_osd_enabled", $show_0_osd_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'show_1_osd',
                        'visible'  => true,
                        'caption'  => 'Display Camera Name',
                        'value'    => boolval($this->ReadAttributeInteger('show_1_osd')),
                        'onChange' => 'INSTAR_EnableOSD_Name($id, $show_1_osd);'],
                    [
                        'name'     => 'show_1_osd_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('show_1_osd_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "show_1_osd_enabled", $show_1_osd_enabled);'],]],
            [
                'type'    => 'Label',
                'visible' => true,
                'caption' => 'Set OSD infos for the camera'],
            [
                'type'    => 'Button',
                'visible' => true,
                'caption' => 'Set OSD infos',
                'onClick' => 'INSTAR_SetONVIFConfiguration($id);'],

        ];
        return $form;
    }

    private function FormPrivacySettings()
    {
        $form = [
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'show_1',
                        'caption'  => 'Zone 1',
                        'onChange' => 'INSTAR_SetPrivacyZone1($id, $show_1);'],
                    [
                        'name'     => 'show_1_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('show_1_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "show_1_enabled", $show_1_enabled);']]],
            [
                'type'     => 'SelectColor',
                'name'     => 'color_1',
                'caption'  => 'Color 1',
                'visible'  => true,
                'value'    => $this->ReadAttributeInteger('color_1'),
                'onChange' => 'INSTAR_SetSettingsPrivacyZone1($id, $color_1, $x_1, $y_1, $w_1, $h_1);'],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'x_1',
                        'caption'  => 'X-Coordinate Origin Zone 1 (0-1920) Pixel',
                        'minimum'  => 0,
                        'maximum'  => 1920,
                        'value'    => $this->ReadAttributeInteger('x_1'),
                        'onChange' => 'INSTAR_SetSettingsPrivacyZone1($id, $color_1, $x_1, $y_1, $w_1, $h_1);'],
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'y_1',
                        'caption'  => 'Y-Coordinate Origin Zone 1 (0-1080) Pixel',
                        'minimum'  => 0,
                        'maximum'  => 1080,
                        'value'    => $this->ReadAttributeInteger('y_1'),
                        'onChange' => 'INSTAR_SetSettingsPrivacyZone1($id, $color_1, $x_1, $y_1, $w_1, $h_1);'],]],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'w_1',
                        'caption'  => 'Mask Width Zone 1 (1-1920) Pixel',
                        'minimum'  => 0,
                        'maximum'  => 1920,
                        'value'    => $this->ReadAttributeInteger('w_1'),
                        'onChange' => 'INSTAR_SetSettingsPrivacyZone1($id, $color_1, $x_1, $y_1, $w_1, $h_1);'],
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'h_1',
                        'caption'  => 'Mask Height Zone 1 (1-1080) Pixel',
                        'minimum'  => 0,
                        'maximum'  => 1080,
                        'value'    => $this->ReadAttributeInteger('h_1'),
                        'onChange' => 'INSTAR_SetSettingsPrivacyZone1($id, $color_1, $x_1, $y_1, $w_1, $h_1);'],]],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'show_2',
                        'caption'  => 'Zone 2',
                        'onChange' => 'INSTAR_SetPrivacyZone2($id, $show_2);'],
                    [
                        'name'     => 'show_2_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('show_2_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "show_2_enabled", $show_2_enabled);']]],
            [
                'type'     => 'SelectColor',
                'name'     => 'color_2',
                'caption'  => 'Color 2',
                'visible'  => true,
                'value'    => $this->ReadAttributeInteger('color_2'),
                'onChange' => 'INSTAR_SetSettingsPrivacyZone2($id, $color_2, $x_2, $y_2, $w_2, $h_2);'],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'x_2',
                        'caption'  => 'X-Coordinate Origin Zone 2 (0-1920) Pixel',
                        'minimum'  => 0,
                        'maximum'  => 1920,
                        'value'    => $this->ReadAttributeInteger('x_2'),
                        'onChange' => 'INSTAR_SetSettingsPrivacyZone2($id, $color_2, $x_2, $y_2, $w_2, $h_2);'],
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'y_2',
                        'caption'  => 'Y-Coordinate Origin Zone 2 (0-1080) Pixel',
                        'minimum'  => 0,
                        'maximum'  => 1080,
                        'value'    => $this->ReadAttributeInteger('y_2'),
                        'onChange' => 'INSTAR_SetSettingsPrivacyZone2($id, $color_2, $x_2, $y_2, $w_2, $h_2);'],]],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'w_2',
                        'caption'  => 'Mask Width Zone 2 (1-1920) Pixel',
                        'minimum'  => 0,
                        'maximum'  => 1920,
                        'value'    => $this->ReadAttributeInteger('w_2'),
                        'onChange' => 'INSTAR_SetSettingsPrivacyZone2($id, $color_2, $x_2, $y_2, $w_2, $h_2);'],
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'h_2',
                        'caption'  => 'Mask Height Zone 2 (1-1080) Pixel',
                        'minimum'  => 0,
                        'maximum'  => 1080,
                        'value'    => $this->ReadAttributeInteger('h_2'),
                        'onChange' => 'INSTAR_SetSettingsPrivacyZone2($id, $color_2, $x_2, $y_2, $w_2, $h_2);'],]],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'show_3',
                        'caption'  => 'Zone 3',
                        'onChange' => 'INSTAR_SetPrivacyZone3($id, $show_3);'],
                    [
                        'name'     => 'show_3_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('show_3_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "show_3_enabled", $show_3_enabled);']]],
            [
                'type'     => 'SelectColor',
                'name'     => 'color_3',
                'caption'  => 'Color 3',
                'visible'  => true,
                'value'    => $this->ReadAttributeInteger('color_3'),
                'onChange' => 'INSTAR_SetSettingsPrivacyZone3($id, $color_3, $x_3, $y_3, $w_3, $h_3);'],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'x_3',
                        'caption'  => 'X-Coordinate Origin Zone 3 (0-1920) Pixel',
                        'minimum'  => 0,
                        'maximum'  => 1920,
                        'value'    => $this->ReadAttributeInteger('x_3'),
                        'onChange' => 'INSTAR_SetSettingsPrivacyZone3($id, $color_3, $x_3, $y_3, $w_3, $h_3);'],
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'y_3',
                        'caption'  => 'Y-Coordinate Origin Zone 3 (0-1080) Pixel',
                        'minimum'  => 0,
                        'maximum'  => 1080,
                        'value'    => $this->ReadAttributeInteger('y_3'),
                        'onChange' => 'INSTAR_SetSettingsPrivacyZone3($id, $color_3, $x_3, $y_3, $w_3, $h_3);'],]],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'w_3',
                        'caption'  => 'Mask Width Zone 3 (1-1920) Pixel',
                        'minimum'  => 0,
                        'maximum'  => 1920,
                        'value'    => $this->ReadAttributeInteger('w_3'),
                        'onChange' => 'INSTAR_SetSettingsPrivacyZone3($id, $color_3, $x_3, $y_3, $w_3, $h_3);'],
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'h_3',
                        'caption'  => 'Mask Height Zone 3 (1-1080) Pixel',
                        'minimum'  => 0,
                        'maximum'  => 1080,
                        'value'    => $this->ReadAttributeInteger('h_3'),
                        'onChange' => 'INSTAR_SetSettingsPrivacyZone3($id, $color_3, $x_3, $y_3, $w_3, $h_3);'],]],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'show_4',
                        'caption'  => 'Zone 4',
                        'onChange' => 'INSTAR_SetPrivacyZone4($id, $show_4);'],
                    [
                        'name'     => 'show_4_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('show_4_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "show_4_enabled", $show_4_enabled);']]],
            [
                'type'     => 'SelectColor',
                'name'     => 'color_4',
                'caption'  => 'Color 4',
                'visible'  => true,
                'value'    => $this->ReadAttributeInteger('color_4'),
                'onChange' => 'INSTAR_SetSettingsPrivacyZone3($id, $color_4, $x_4, $y_4, $w_4, $h_4);'],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'x_4',
                        'caption'  => 'X-Coordinate Origin Zone 4 (0-1920) Pixel',
                        'minimum'  => 0,
                        'maximum'  => 1920,
                        'value'    => $this->ReadAttributeInteger('x_4'),
                        'onChange' => 'INSTAR_SetSettingsPrivacyZone4($id, $color_4, $x_4, $y_4, $w_4, $h_4);'],
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'y_4',
                        'caption'  => 'Y-Coordinate Origin Zone 4 (0-1080) Pixel',
                        'minimum'  => 0,
                        'maximum'  => 1080,
                        'value'    => $this->ReadAttributeInteger('y_4'),
                        'onChange' => 'INSTAR_SetSettingsPrivacyZone4($id, $color_4, $x_4, $y_4, $w_4, $h_4);'],]],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'w_4',
                        'caption'  => 'Mask Width Zone 4 (1-1920) Pixel',
                        'minimum'  => 0,
                        'maximum'  => 1920,
                        'value'    => $this->ReadAttributeInteger('w_4'),
                        'onChange' => 'INSTAR_SetSettingsPrivacyZone4($id, $color_4, $x_4, $y_4, $w_4, $h_4);'],
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'h_4',
                        'caption'  => 'Mask Height Zone 4 (1-1080) Pixel',
                        'minimum'  => 0,
                        'maximum'  => 1080,
                        'value'    => $this->ReadAttributeInteger('h_4'),
                        'onChange' => 'INSTAR_SetSettingsPrivacyZone4($id, $color_4, $x_4, $y_4, $w_4, $h_4);'],]],];
        return $form;
    }

    public function UpdateParameter(string $Field, string $Parameter, $Value)
    {
        $this->UpdateFormField($Field, $Parameter, $Value);
        if($Parameter == 'value')
        {
            $this->SendDebug('INSTAR Update Parameter', $Field . ' = ' . $Value, 0);
        }
    }

    public function Reload()
    {
        $this->ReloadForm();
    }

    private function FormCameraSelection()
    {
        $model_type = $this->ReadPropertyInteger('model_type');
        $selection  = [
            [
                'type'    => 'Select',
                'name'    => 'model_type',
                'caption' => 'Model',
                'options' => [
                    [
                        'caption' => 'Please select a camera model',
                        'value'   => 0],
                    [
                        'caption' => 'IN-5905 HD',
                        'value'   => self::IN_5905_HD],
                    [
                        'caption' => 'IN-5907 HD',
                        'value'   => self::IN_5907_HD],
                    [
                        'caption' => 'IN-7011 HD',
                        'value'   => self::IN_7011_HD],
                    [
                        'caption' => 'IN-9008 Full HD',
                        'value'   => self::IN_9008_Full_HD],
                    [
                        'caption' => 'IN-9010 Full HD',
                        'value'   => self::IN_9010_Full_HD],
                    [
                        'caption' => 'IN-9020 Full HD',
                        'value'   => self::IN_9020_Full_HD],
                    [
                        'caption' => 'IN-3011',
                        'value'   => self::IN_3011],
                    [
                        'caption' => 'IN-6001 HD',
                        'value'   => self::IN_6001_HD],
                    [
                        'caption' => 'IN-6012 HD',
                        'value'   => self::IN_6012_HD],
                    [
                        'caption' => 'IN-6014 HD',
                        'value'   => self::IN_6014_HD],

                    [
                        'caption' => 'IN-8003 Full HD',
                        'value'   => self::IN_8003_Full_HD],
                    [
                        'caption' => 'IN-8015 Full HD',
                        'value'   => self::IN_8015_Full_HD]]

            ]];

        if ($model_type == 0) {
            $selection = array_merge_recursive(
                $selection, [
                              [
                                  'type'    => 'Label',
                                  'caption' => 'Please select a camera model']]
            );
        }
        // IN-5905 HD
        if ($model_type == self::IN_5905_HD) {
            $selection = array_merge_recursive(
                $selection, [
                              [
                                  'type'  => 'Image',
                                  'image' => 'data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAAHsAAAB7CAIAAADbpWgoAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo1NTFkMWQ0MC1iNjgzLTRiNDAtOWMzNC1mYjJjMjY3NGJhYWMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MkI0NTdDOTk4MTZBMTFFOUExM0NFNUE0RkQ1Q0ZBQjQiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MkI0NTdDOTg4MTZBMTFFOUExM0NFNUE0RkQ1Q0ZBQjQiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODhlNjJlYjYtMDg4NS05YjQxLWI5NjYtMTMwNTI5NDc3NmQ1IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjU1MWQxZDQwLWI2ODMtNGI0MC05YzM0LWZiMmMyNjc0YmFhYyIv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']]
            );
        }
        // IN-5907 HD
        if ($model_type == self::IN_5907_HD) {
            $selection = array_merge_recursive(
                $selection, [
                              [
                                  'type'  => 'Image',
                                  'image' => 'data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAAHsAAAB7CAIAAADbpWgoAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo1NTFkMWQ0MC1iNjgzLTRiNDAtOWMzNC1mYjJjMjY3NGJhYWMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MkQwNTA3REI4MTZBMTFFOTlBN0NGNjY1OTkwMjlDOTAiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MkQwNTA3REE4MTZBMTFFOTlBN0NGNjY1OTkwMjlDOTAiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODhlNjJlYjYtMDg4NS05YjQxLWI5NjYtMTMwNTI5NDc3NmQ1IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjU1MWQxZDQwLWI2ODMtNGI0MC05YzM0LWZiMmMyNjc0YmFhYyIv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']]
            );
        }
        // IN-7011 HD
        if ($model_type == self::IN_7011_HD) {
            $selection = array_merge_recursive(
                $selection, [
                              [
                                  'type'  => 'Image',
                                  'image' => 'data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAAHsAAAB7CAIAAADbpWgoAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo1NTFkMWQ0MC1iNjgzLTRiNDAtOWMzNC1mYjJjMjY3NGJhYWMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MkVEMkQ1REU4MTZBMTFFOTgyN0FFOEQ0RDBBREMyRkUiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MkVEMkQ1REQ4MTZBMTFFOTgyN0FFOEQ0RDBBREMyRkUiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODhlNjJlYjYtMDg4NS05YjQxLWI5NjYtMTMwNTI5NDc3NmQ1IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjU1MWQxZDQwLWI2ODMtNGI0MC05YzM0LWZiMmMyNjc0YmFhYyIv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']]
            );
        }
        // IN-9008 Full HD
        if ($model_type == self::IN_9008_Full_HD) {
            $selection = array_merge_recursive(
                $selection, [
                              [
                                  'type'  => 'Image',
                                  'image' => 'data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAAHsAAAB7CAIAAADbpWgoAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo1NTFkMWQ0MC1iNjgzLTRiNDAtOWMzNC1mYjJjMjY3NGJhYWMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MzA5MTI4Qzg4MTZBMTFFOUEwMUFERjY3M0Q1NkU5RUYiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MzA5MTI4Qzc4MTZBMTFFOUEwMUFERjY3M0Q1NkU5RUYiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODhlNjJlYjYtMDg4NS05YjQxLWI5NjYtMTMwNTI5NDc3NmQ1IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjU1MWQxZDQwLWI2ODMtNGI0MC05YzM0LWZiMmMyNjc0YmFhYyIv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']]
            );
        }
        // IN-9010 Full HD
        if ($model_type == self::IN_9010_Full_HD) {
            $selection = array_merge_recursive(
                $selection, [
                              [
                                  'type'  => 'Image',
                                  'image' => 'data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAAHsAAAB7CAIAAADbpWgoAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo1NTFkMWQ0MC1iNjgzLTRiNDAtOWMzNC1mYjJjMjY3NGJhYWMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MzI2N0RGNTk4MTZBMTFFOUJFQTZGOTFFQjIyMkE2Q0QiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MzI2N0RGNTg4MTZBMTFFOUJFQTZGOTFFQjIyMkE2Q0QiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODhlNjJlYjYtMDg4NS05YjQxLWI5NjYtMTMwNTI5NDc3NmQ1IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjU1MWQxZDQwLWI2ODMtNGI0MC05YzM0LWZiMmMyNjc0YmFhYyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgILkdkAAB3lSURBVHja7F0HeFzVmX39vXlTNaNeLFeMbWHTDMaYEGOwTeh4STYLCQk4yRfCl2wgLElgs5BsSNiUhWx2l1QCSTYUGxN6MRgbCMUNG7Atd9nqmpGmz+tvz31PGoRsjKw6UnQ/ezySpZk35/73/Ofc8j/atm1qoo1gYyYgmEB8AvGJNoH4BOITbQLxAm7cKL53f4QpTdMTiA8N1miWZblPjgq023rj3hv9sdsT3MhjDaBN09R1HY9HIp4HmmGY/HO6V3O/36cbxlAHcCMMN1DWVFVRVXwpy7JFszzLAi7dtFXDpmyKZSmBI6AapkVTNoP/MkjfAFN3TOR7wn2S/7J39xQy4vSIuXy8kWEYqqrmcjmO49tU8Y392Z0tyqaGbE6zVN22nCsBWhzLSDxtUdT5s/xhmS2SWfRBQGJOKJdKfKyHQ0dYmq7TBFwK3eDinu8AtN5j5e8XcUCjKEomk+El74v16i/WdXRlTFW3DIvqZpbeF0IT6BmCIB7JV3jCMs53aGputWfhNG+xj6uNCCeUSTJPWabhjgCXjo4M/wFfc58MP/iRNEKIuwGeTqd5QXh4a+7XG2KxjKEZ4PQPQ21/gHjPg/s5e3UETaDnGEBPkycs7RGYFaeGZldI6IlyP2uZupseBgk94MY1g9Bc3PNwsyzLcdyAO3LkeNyNwZTGPP1usitraLpt2h/d3TZ11J4AoeCvaVG68y33Iyey9K/WRwE9z9CyQH96ftHCab66SlFibdPAm1hMr9bPCM1zIEnviEuns/FLDMvQPaxV6DHuMnhUE1f+sfFQTNMR4EPxznQvFqIdVHiWFjjaKzDL6gKLpntPrvFEZMY0DFxFb64/dpC6HJjDH9q7dmda0dw4J9c8JSIsnRPEuxS6VgHoRG/YJELxOFQdbff849ITBoFp2apOZRTrL291rdoU51lqdpXnurMjp1R7imSKKFPTBOIs0Ui0m2aPjFlXViG+93Zq977Uoegkr+Ob0FRlXmrpnEAvzitUxEdGOdg96BPIbFszSOC/vT+z/VBOFumL5wU/VRc8qUqiKXCG0Vvj97nCvDuDZM2oloM4oQOkaF0cVLCMvOekqRERR3nowcFACxkwo9F/eqPz0Y3xgIf98ieKl8zyVQZYsA2Ivo+a7PYNmkZypvPrtjM0nVcd7PAc0Rh3PtLQ0PeAoLdVm9IMQG/96JnWe9YyM8vFm84vrauSPBylaaojnOy8McZvQJS46f2DbDdoNhxRxHHdJV6mLMA1xzVCg6MEPfo8Z9kgik0HzZUPHhI5piLE/eP8cFmAWC3W0UNZjVZ1pjzIp1WY36G80JF2+SJL+SUIhdF0fXaP9EQaTOZMpPN41vjh062s67Zoh/lIEqbqqj2fXxAxraGMDW7EsHYnsPBZJN5RZsccn/Ayd/9D1UNvd71Sn0rkzHjWHCboHaFtaybQN/ukdlwjcqbdw+NjD3FHGzCqzXlF2IhjRU3Ex916YblfYr9xfuk/nBbCoA7K3LbG7OpN8ea4frhLg1kdjpDvc00MbTuJkxpaxzKirCJ45F9uiJ05xfvCe8lj/BgA5RiqSGZlgblnbdcT7yTg6U+fLK84LTQpLIS97J529cG/dTbF9cahRv8oSn+MztZihHIc3oteOtt/MKof2z1kVPOfH2r89oXl9e3KsjmBtTuSzV3aS+9rG+oTAktzLOhVvnRecGqphBj89qrGfR1OHqbGxhT5yCEOjweFO6PIjqXJ5MQxpAqkQXvKuHV1I2SDzNEXn+T/4+ttWc3Q4CSd2Hs1mX1zdyfQXzIndMPi4u8/0ZRQbLJmO0K4jx0H5M7GcQDfnVD66CsHdxPHYdu/29D208/UXDB7Osi02M/7xO7li6xKJqkkgYWdeb8p+/S2eFvKoGzGnVsp5HgfdsRdr+xauFwuB9C9ondWuUhVSGdMkU+pkT+crKj9UQ00ApGgGjCKVjKrJbLGBXOKnYkq2pWVH85m9ncvrr5xScXGg+mfP9dyMKaRtaRu3AuRarjhDmo0racB+mBRZE6IueuKqs2Hs4c7tTufbDEsm+4Zq3gyr8azZFYA9q8mLDjz4FRliEd6lHiy9GPZ1BET3WSG1kNmCkOLpvv3R5XbVh3e16FmNBf3ggOdG9bQ1nVddRpBSAryDKtZNMIQCvfc6b60Zq2vT29pyBq9TF1DTHtme9KNd/cPQOc55uwZvs8tCE8rEf0i1R3vPZPdLqigdcHLzZO8D311BvryO6sP1bcAd4uimYLCnRsmuBHagDubzYK4Pb7gpkPqf7xw+MbFJYph37u2/dqFkdqwCDa/ZVnZ9X9ogMfpLQ21DxO8g6/19LbkyzvTHp7+7Jnhzy0oCsvdM/t9piQ5lg7JnE9i//xlB/dVh3a0KDk9TzD0OETchRsckslkDMNUucDND7XsalW8AjurQsJjXaUHWlszLGDhQRr9OMvvsrZigNmtOEX97ysdj27q+vlnqk+t8QgfcfnQ70EP662Q/vilaXvb1ZsfbmjoNDSD6l7MGdXGDFN0u3Cn6cA3H23ZeigXTRn4oLD3XVmzpogXOBoZEsT84JudKcXs3ysT1Wg5s9UwPiv/cPCBN2JZ7VhCDbgj3k+ukR+9YcbNy8oiXuYoznJMI57XJC7cWTZwy2MkuoGpbtjxrAH22NGae7k+9ZPn2hDmsYz5+p40pN7xvhG0I3ruZ8+3/PGNKJRJfnvX0XFn6RIff/2ikgdWTp1Swg9UUNvI25Rl4iNStlUQiLtwI0m63G2JwVsfa93dqiIkTZPMiXdmzC89eMgvsuUBfnaldPMjjXf8taWfAX4UR0VRCPDfvxZ9vzn3sZOp+GmImbpKadVXp3/urLCEXHx8oLtw66yteVlDYgvDAQFxV3GzotdgGI5lvndxOcKuoVPHB0Qktib1eNa875UOSSCjG48nQJX3iEJnUwqF4IGvUXV7bo2ntlhA90S8nMgR9kVGBRdVBQkjxTKEoySeAbnj5zGMwl62PCgcC3RwGgl29tbl5TVFArJ3RrP7/9lYyqoMMb+9fhYEK0sUFD3KiLtTg4qiYHQfiJn/9kRzr6VYKuBhgPj8KXKJn1teFwBSjKuU7aMkSSCY08m6oqLbr+9JIgEgPJFmcwQgGxSB3wURgUUc80kmYUAql84LfueiSmTLjxnRNBWUmGsWhCFmfvRMa0rpLz9IHP3jT0+ZXSkz3ZsvRjvGXXFCyEQI3PlwEwxITrPMHmp1Df3+DpVzBLQr0miiG+yeAKTdoZvfpuL0FnHzZP2F7lmq/8ghbz+5tXPJLP/5s0PHwKJHR9p+kV5xatAnsretaeof6LRh07vblU/MDJoWoUGWYQcMOjeEAe7xyE/syDTFdUSoafVdGjxSaA/RxBH56AnF/NlzTXXVcsWxuaUHJ5mnls/x0nTVbWuakUs+ZgacpmDc7l0bZVm+MsiDyi6eGyCGeLQQ7172Ns24xt3/t5ZUzjStkT0lSkM10rvbtNWbYl9dXH5sgZ8H3cMzS2d5KaqyH6CTRJJU7B8/08qxVIlsXzJ39qhplW6Joiiyz3/3Cx2tCUMzR/5QLkm9ikE9vqWzLan3Z+rYbXCwAP2HV1T6pY9lCbK3CQkmmdFyqjaa6tBlcMR0e4be1pjLasdQxsOMOU0jVazaGO3P0nt+Y1A36JdX+KWPFyDuPopBrsIxgwxwdzuk7PU+tyOdyDobK0fHynWH+ZPbuvoT5n1Bn+1GOvPBLO9As8qwIw5Dj6hO69zqLXGYndEJ8A/CnNnXrq7eFO3nNfSiF+aCE313XFLhE5l+iL9RinGXwYE4wuTthlxnehQDvFeY69TGA+murNFv8/oBpy+v89+8tMwrsINU3MOIuOE00Ru4b300rZqmPdqFLJww33wws7M50/8L6aEXGpIROv2ahWF4tPysZWEhjgDHP4fjRmfG1M1CqBtCaDipWGs2x2BTjzfMweI+3v7yovAJZaINp4M/9tCDzgySUpAzf/FyNJkzyWaaQqjUQtOmzby5L93Rv/zZJ4uyLBPy0Pf+Y3VdhVgb5kr9rN170XQoGjcYSgHoWZPb2aIoPSfVCqPRzXF91aaObyytpo8HdMo5tSUw1JRi7qGvzsiopsjRr+/PwVJZQ/fxBhXjuMrGuNE9hVIwcAM8yMT3m3KpnHGcw6M70nmWLvJyFQHWw5oyzxxhYulRQNxd6PF4PPetj6UUawhPmQwJsSB/bm1Ix9LG8f9qz6Z9dwsCWRN3N9wOGa0wAw5wNIoVd7erqm4XXrEtOpYxH98SHfBldW8GtsyhJfFBIY4LaU4Y5BBYweFNQFINal+b0n/FcnRPPwzr0ANHHJdyqFNXDLtQVMoRbmhHc7bz+IlluBszwOFmmpIkPbK5C2mzEKv3ORNb0bTRElfHPOL5GGcFcW+7ppl2QVZMJJAjpb+yKz7Iq7MLAXFC4hSV02zdsi2rUCtUEiq3D0YVwxos5HY3p/cIshHePeFuKIRaakkamm4VdEVQmunKGFltgGeIiAVlyE4JZ8KIbFYh+1UsnbIHdSiJGxil4Ek8a+rm4Cfoh5dY6lty8YwR9HDHP0LIoQ7BpiqDTJmfVVRDNyyasuBIL5wbHundE+SQoChC8JqFHOLOtn2kmdyAYtxFHGE+rYT508opacWIZ8lETdjLTYpILDOCiLtbwgVRakkkB7CBbYRRR0ikVXMA2zvzJSp4mp5Rxto9WzsGbz+5441uVx3iUp55L6EXqFDpleSd5eCBpl76QxMHQ2SGBqgOYeXIhkKLKuwgJ3KlNa4V1FUOUKuQXYaGXeBKBX9V3dp8IDnmHZBTp2cslF+laYxCRS8szzCQGB8uNzYMDRerFthYHCCPU2Om0QJLsww9thEfW80usOE43hGnSfLUTHvMI26PDRonDabBGOuI508MFzafu7N9VqHNbzIDgJtlWaewpl3A01jucUSTsg2GsphCKhl83PMqZKqB54F7WYBPZM2kYloF5jw5p5aqh6NFxj69NnLh3PyutsLILMcr9dwlN4R6W9J8v0VZX58BUTYl9D1timFShmWnFHP46vrkZzkkjvEIjHPyzDnzz9MzyqQimXXBnVfjqQxyYZmpDotBYF9ItRCOG/G8yyebDmm2NWVzHJ1VrbaUTlN0WjFf2Z1GphI4ciJN0cmLJ3LGvnaNIgXASNUUO18UomcLq213l1/rLmcNT8uRwh4YPdNKARnLsWRXlF9iOYbKahawlgVmWgk52R/xsYZFtpQ0dun45uRiAe/e2KVVBdlkVl8yJzzgArOFgrjbEOaKotg08/DWTFOXgYCqq5YRXvGcyTuOI+BhdrUoIscg3hM5szzIeUXy0TPOBi5gii5hSV1rgrnlTI3Bjmc1m2OpgEQgpsgZWashpka8HL5MKxYARU/geksD3L52FWZSN8h5w+oiHojjBZM5a18HWUpujqvrd0TPneG969PTBa6wFPDAT16RbVmGBkf38MZOgDWr3POlc4t//1rshsXF00ukl3el4jlj4TRvR8qYUiz4JLY1aXh4AjTI593GXE630UMMQ7szNEDcdG5sMLfGwzjlOUBQIkfXhkWQMnoRnYJH/NekImHLoWwsYxZ7uTNnyM+/l3ppZ/JgTDPJQVAbg4yobwujSbNsL8OMr4o2+DQ+kUSpZpDgRRgifmWB/d1r0XW7Ul6ROWOy92cvtGs6Oe1q2aRSOwiBrGPY1JxqiZQZY2gEqd1TpiniJbENjr77ubZE1rhuUXFrQl+7M5VRTWd6hCrxc9+/tOJ/1nU0dekVIf6nV1Whv5vi+lG5nhA9PY4Qd6qidte+dNEHz95xacUvX+4470T//Mky4q45rrcn9aOeUnWHf5/2wysqtx7KilO9hzs1YH3P2vZvLSv7wtmR370aPdylkvTA0oarSp13zOkfWQWXpQu0VtbgzgFRhD17qtaTCoUY+DddUPro5q67n22bVy2/dSCj6v3NExgTAQ+LTgIVgHt9EoOIXrWp672m3Hc+VV4bEagPV8giZyyds6NH9T4iT9dN8hcg4oOKcZBkeeAD7TU5Itz1bOvyOYHdrSo0Yk633jmc7f+cRpHMgaPqWxXgOLvSA4U3s0yC3vdLDHjjn84M3/tiO+XU5nMb79xB4qNeDUm7KiQWYJxzA4bbOWJPY1znP5TplKBPqd1bP9EZx2WNEONp1UoqFuTNebP8Oc26bU0TMuoZU+TrFxXj3c6a5q1vU/IbS7ljyj5SY4vpqWwxPljFZRMoNvcJ6FUzrM60URXieCdh9SFZfBPKOuzlQg75HPmCQHl3mwJpn1Gtk6vlN/dl2pJGLG2s3ZF6/J34oU7tilNDEI5mfmvUMeYYbNspM8GNH1bJF8BDYPJOklKIIKE7M8RwnnOCb+OBLCjCRRxPwBJQzYtP9ON/8fPg973t6s4WBWIu3yvlAf7NfWkITWh5hKf7yhg0+LNhd/qik4LQJ6fVynqPoUUiJdvwjg46ECdSnabHF49Dkpf5OYHtdjESzKdmfu+vLV85t9ipYcIAzrIAf8PikkvmBmFentgWB2rAaMFU77I5AaiRX22IQpa4swJBD+Pe8qAraz61PXHJvOC7TbkDUQ3Ilvo5BL5mWsilVq+JYvWoWsV2Z1dI0ZzxFuPOkRlCl4CclOCE5RBZMMNPnmubVSHdtLQMNPKDy8tA6OAEGMXL5oWcn7Sa4sYz2+NBmbt7RdV96zte35tRnHUDp2wNcUMgk+feS966vBx8gqBeVheA/jlziheeSDO6iXx6mcgwR628QiZpp5RIssCOO61CijzaslMTCAIDWASduaSTqjyIazjMOy+rBJT3vtzxxbMj7grv4U692MfVVUrTSkpbEvpT2xJf+UQJhshrezL5iiWdaR0d88y7SXjLL55dDM+5ZkscRDQ5IiIH9MhxkhiYj6gbj+9FvHzAU4g8PvBx524SswzjslOCIvHutmLYsPXQiDcuKfnNq1EM/5CHhSFauSiSc7YwgJGdSoc2rD/cJn7yukWR9pT+tcWlRV6WouHyiVdCyJ9eKwN/aPOfv9D2vcdbnEFA7jaDIZWPcbqXUjwyxmWR4Rh6XMW4C7qm6bPKJd7xQbta1RI/f9eVVbevaUrkLJDMNx8+fM3CyIY96Uvmhop9LPzkPWs7urIGfDywXjongKSKx40HMqJzlyp3IyOGBXJxiY+78rTQCWUSBsef3+yEtD8YVZE2ustsOYF8dEjJdAKpc8sU5CLuYFkFn70yxLvJ8/W96c/OL8KXWY3MkiOqAdaUiLBwqlfkmcYu/aZHmvIn/pBgtzXmbllWBtJ4/v2U0isH4gnY6WuLS944kHlkYxdyw9eXlEyqF7Yfzk4tEZE8XaCdaZwjD6IRw+nlmfNmRwrzbpGD0uMsywL0yiDn3IyDgl3EeF5XnzqxQiIqkCHrRO4tSSBjfvBUS+/6tAjkxzbH1+1KAbXrz4lAC6YUS+C6gxfxXlssrK9PQ6vA5d/5RMvyOf6KEO8Wg3cRPxhT8cp9p0+cu894eKomLI63eZX8fl+ONmeUiSAWZ78Zdf9rsasXhM+c6hWc5Rg4GgxwEDTkXZ81dZD7feuj8awJ8Te9VASxiM5cNn4sq1t4nt9qB0Lf2arMn+xFYmju0jACHB6nJf7IOCabf5FgAzJHjTPEqZ5t7Yauf/fCMr/EJnMWSyrTGv+6pvlKxx8SOyOxIBkMAueOmn1fAQoHgY8BcsGcQD7RufO6DTHtnBl+j9NtLLlvCcmZkDdwufBBjssnkyd9X5MIGXPeJF/Yy49PxF1iqS7iphYLgI8s07D0gah625rmQzGtM2OkVRNiHFn0y+cWyyJzJOlCnmQ1C5IRAStx3Us/8Pcv7Uotq/NfcnIQ3H1KrQzXijBHz2U0K+LjHHV0ZHlNZ9aQtSdFBJ5jxifihFU4jrKMu66shMKDW8FgBynPqhBh6yuLhP96ucOZcrFPnyxPLRb7bAGEViFW0+H6lNp9r1e3snAqZ97+WPNZ07zf/VT5jYtL7v9b7O39mXjOOBDTTp0kh70cXha8z7F9GMWAKFoxv7xgbyQxWLJzwxyP0yLMfddMAsqA4Ozp3s8vjNyztv3yk0N3P9sKdt/elDtrihcO819WNe2Pkoqf+BU40m8tI74UPdTgFN4nN7Fmacd8QoVQrUn9tseaAx7wkuXcDgxe1IQQBXGdWiu/uicdJaeq2KYuPS/DWdpcNCMU8fGFCvig9x32FIJBpNnzqgSfxIDQv3lB2e1rmrc35hBuAOuHT7XCl245lKsJ83+4rhZGdF6NfOokz68+P2nRdB9eAVT+4vvJJ95JLJrh8zrMg0ckSZjMW5aXQUEumOoFsiAQ0FNSMV/fk6mrktCR+9q1T870M901WC0EeJFkf/ascp+HG7eI955jwccWaOvG80rcerPuuj4I92BMQ6gi9h94sxP65KKTAvd/sfa319bWhgWEbWNce3J74r3mHHAPebpX8aEUoTf+7dKKHc3Kn9/qvHRe8PaLy8E/IrmNO/vijmRVSDh3pr8loYG+vALZaAG4Pax+1Rkls6t9hXwvpqFJL/lSU6ZpzK/1wKQEJA6yD2FZ5CXhtq9DveWRJkDcmjDW70nvaFHW7U51Zs3GLu3dxtw9L7bDzqQVsnzsdSb8oA4/PT/89PbEX9+Jb2nI3roa1sm8/BRyjzfDLff+Qttn5oc6kjpif1IRw1Gan9MvPbnoK+fV+CSugAGn2DvuuGOoQHdTl8hYismcMUXeeCA7s0KCboE6nFYiJhTz2feSG3anq0I8oA/L7O42FVy/alPcXXrO6fY5M3zxnLW/Q51bLSMZvLEvA/vjFmluTuhfODsCAQrFiT5I5AxYUHCOyFILp/kaOlK3Xzb56oWVxX6BLuy7jQ3lvcTdg4ekJjbF/mJdbPGJPso52gwZB5R1y0ao7mlVex+UB++X+nmQD9w/fvJr55XA7Dy+NT6lWLjz8kr0xK2rGrsyxKlWhvjbL65ARt16KPunN2POm+knFDO/vX7m5BIZILMsPSZu7DaUojVP6AxlXntW0X+9FL19TQtyIFTjwS7t5V2pn11VDcIBQU+OCHjiEZgvnl384xVV/35FxQPX1U4uFp7allg6O+AWbgfc0CcrTisqC/DQMLURAVoQPwOJ4qpAkdaXnxSqKJJ4cnu9sQE3NeR3p+ne60xR0Ay3XVR27e8PtiWMV/emrzkzPDkslAf5hdO9IAdkP4T65oYs0HxkY+fWwzng/tOrqm5d3QwfBHA7UkZOtX69Prri9NB/X12TVi1ZoPe2q2/tz7QnNcoyOUqfVS58flGlV2SpMdWGHnGSHAjo5tQI+/tra2//a8u3Lyz78bOt/3x+adbDfH1JKWgMhA6bA9aeFBZOLJfW1acg229aWoYohsGBUYJuKQtyIOufP9+G3It0irFy20Xl961rzyk6Q+mVfuqez51YFZaosdaGPq3nQQenzyzj/2NFpWmTyanr/tDw4PWTEdQrH2jY2Uzu7vibDVE4eChFiJBpJdIvXmrf3ao8+LfYHZdW7O1Q25Nk9ZMcOk6QZaNvLSv9v7diLV0KS2nlPurXK+fMKJepMdiGZfIhT+h4nFrMIw3+4PLKmWUiQnjb4dyhzu67lMD672pRHnwjhpy5enPXpoMZ1ZmrOtyl1VV7vBIjOOtqoPWvnBvZUJ98fnuMttSaIPWnG046qdrHjBnqHn7E+4DOM2Qb+JWnFUGW/ObVaEb90DbEp7clO5LG1WeGQe4UuQGt9cjG+CXzgu4+0FI/96MVFXtbs09uaedt9arTi1Z94+SZFYW4aXbUWKUPvbhNZO1rzgjlDLKjCDj2LhNCNvYbzt5wtnvyr74119ChnDXdt2CqB1rlL2+0vVbfWe6lfnr17DnVPnmspcoRivEjcbcsk2fsb55fGvZ+aMkXQMPckzU60+ApU2YtiTEffbsDTuGq00M/eXI/Sxn3rzzxqVtOnT8t6G77H9ONHpkj3+7pIdO0chb7+DuJ/3yhLZ4lTknkqGsWhGFQobjveOzg3FrfaZP9p9X64ll968HUOTNDFSExJHMsM9ZxHnHEXTuKhpDXLAY+/l/XHN7froDcLzu5KJrWJkXE8qAET+RWguIdEqfGY6NHrKxB/sgWQNctKpo29nfkXnm/85OzQnXVvpDM0+MT4dFDnMpXgnWgtWxyYp5lEM7M3wnWo4D4RKP+Hqp9TCA+gfhEm0B8AvGJNoH4BOITbQLxwm3/L8AAWGwxLJnP0HIAAAAASUVORK5CYII=']]
            );
        }
        // IN-9020 Full HD
        if ($model_type == self::IN_9020_Full_HD) {
            $selection = array_merge_recursive(
                $selection, [
                              [
                                  'type'  => 'Image',
                                  'image' => 'data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAAHsAAAB7CAIAAADbpWgoAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo1NTFkMWQ0MC1iNjgzLTRiNDAtOWMzNC1mYjJjMjY3NGJhYWMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MzQzMEE1MEQ4MTZBMTFFOUE5QUQ5QkVCQzBFQzJFNzIiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MzQzMEE1MEM4MTZBMTFFOUE5QUQ5QkVCQzBFQzJFNzIiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODhlNjJlYjYtMDg4NS05YjQxLWI5NjYtMTMwNTI5NDc3NmQ1IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjU1MWQxZDQwLWI2ODMtNGI0MC05YzM0LWZiMmMyNjc0YmFhYyIv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']]
            );
        }
        // IN-3011
        if ($model_type == self::IN_3011) {
            $selection = array_merge_recursive(
                $selection, [
                              [
                                  'type'  => 'Image',
                                  'image' => 'data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAAIIAAACCCAIAAAAFYYeqAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo1NTFkMWQ0MC1iNjgzLTRiNDAtOWMzNC1mYjJjMjY3NGJhYWMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MjEzM0ZBQzQ4MTZBMTFFOThGQkE5NTlGQzIwOTI1N0EiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MjEzM0ZBQzM4MTZBMTFFOThGQkE5NTlGQzIwOTI1N0EiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODhlNjJlYjYtMDg4NS05YjQxLWI5NjYtMTMwNTI5NDc3NmQ1IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjU1MWQxZDQwLWI2ODMtNGI0MC05YzM0LWZiMmMyNjc0YmFhYyIv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']]
            );
        }
        // IN-6001 HD
        if ($model_type == self::IN_6001_HD) {
            $selection = array_merge_recursive(
                $selection, [
                              [
                                  'type'  => 'Image',
                                  'image' => 'data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAAIIAAACCCAIAAAAFYYeqAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo1NTFkMWQ0MC1iNjgzLTRiNDAtOWMzNC1mYjJjMjY3NGJhYWMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MjJEMDJBNkE4MTZBMTFFOUFGOENBRTlFNEE1NEZDQkIiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MjJEMDJBNjk4MTZBMTFFOUFGOENBRTlFNEE1NEZDQkIiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODhlNjJlYjYtMDg4NS05YjQxLWI5NjYtMTMwNTI5NDc3NmQ1IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjU1MWQxZDQwLWI2ODMtNGI0MC05YzM0LWZiMmMyNjc0YmFhYyIv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']]
            );
        }
        // IN-6012 HD
        if ($model_type == self::IN_6012_HD) {
            $selection = array_merge_recursive(
                $selection, [
                              [
                                  'type'  => 'Image',
                                  'image' => 'data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAAIIAAACCCAIAAAAFYYeqAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo1NTFkMWQ0MC1iNjgzLTRiNDAtOWMzNC1mYjJjMjY3NGJhYWMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MjQ4MkMwQTI4MTZBMTFFOTkxMkVBQjcxRjUzQzNFQTkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MjQ4MkMwQTE4MTZBMTFFOTkxMkVBQjcxRjUzQzNFQTkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODhlNjJlYjYtMDg4NS05YjQxLWI5NjYtMTMwNTI5NDc3NmQ1IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjU1MWQxZDQwLWI2ODMtNGI0MC05YzM0LWZiMmMyNjc0YmFhYyIv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']]
            );
        }
        // IN-6014 HD
        if ($model_type == self::IN_6014_HD) {
            $selection = array_merge_recursive(
                $selection, [
                              [
                                  'type'  => 'Image',
                                  'image' => 'data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAAIIAAACCCAIAAAAFYYeqAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo1NTFkMWQ0MC1iNjgzLTRiNDAtOWMzNC1mYjJjMjY3NGJhYWMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MjYyREI3QTY4MTZBMTFFOTkwRjI4NDM1Q0JDMzkwRjMiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MjYyREI3QTU4MTZBMTFFOTkwRjI4NDM1Q0JDMzkwRjMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODhlNjJlYjYtMDg4NS05YjQxLWI5NjYtMTMwNTI5NDc3NmQ1IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjU1MWQxZDQwLWI2ODMtNGI0MC05YzM0LWZiMmMyNjc0YmFhYyIv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']]
            );
        }
        // IN-8003 Full HD
        if ($model_type == self::IN_8003_Full_HD) {
            $selection = array_merge_recursive(
                $selection, [
                              [
                                  'type'  => 'Image',
                                  'image' => 'data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAAIIAAACCCAIAAAAFYYeqAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo1NTFkMWQ0MC1iNjgzLTRiNDAtOWMzNC1mYjJjMjY3NGJhYWMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MjdDQUE4N0Q4MTZBMTFFOUFDNEZGQzBBNDhDNzA4NEYiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MjdDQUE4N0M4MTZBMTFFOUFDNEZGQzBBNDhDNzA4NEYiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODhlNjJlYjYtMDg4NS05YjQxLWI5NjYtMTMwNTI5NDc3NmQ1IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjU1MWQxZDQwLWI2ODMtNGI0MC05YzM0LWZiMmMyNjc0YmFhYyIv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']]
            );
        }
        // IN-8015 Full HD
        if ($model_type == self::IN_8015_Full_HD) {
            $selection = array_merge_recursive(
                $selection, [
                              [
                                  'type'  => 'Image',
                                  'image' => 'data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAAIIAAACCCAIAAAAFYYeqAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo1NTFkMWQ0MC1iNjgzLTRiNDAtOWMzNC1mYjJjMjY3NGJhYWMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Mjk4OEFFQkM4MTZBMTFFOTk0MkZBRDZERkYzODlFRUMiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Mjk4OEFFQkI4MTZBMTFFOTk0MkZBRDZERkYzODlFRUMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODhlNjJlYjYtMDg4NS05YjQxLWI5NjYtMTMwNTI5NDc3NmQ1IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjU1MWQxZDQwLWI2ODMtNGI0MC05YzM0LWZiMmMyNjc0YmFhYyIv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']]
            );
        }

        return $selection;
    }

    protected function FormShowEmail()
    {
        $activeemail2  = $this->ReadPropertyBoolean('activeemail2');
        $activeemail3  = $this->ReadPropertyBoolean('activeemail3');
        $activeemail4  = $this->ReadPropertyBoolean('activeemail4');
        $activeemail5  = $this->ReadPropertyBoolean('activeemail5');
        $activeemail6  = $this->ReadPropertyBoolean('activeemail6');
        $activeemail7  = $this->ReadPropertyBoolean('activeemail7');
        $activeemail8  = $this->ReadPropertyBoolean('activeemail8');
        $activeemail9  = $this->ReadPropertyBoolean('activeemail9');
        $activeemail10 = $this->ReadPropertyBoolean('activeemail10');
        $activeemail11 = $this->ReadPropertyBoolean('activeemail11');
        $form          = [
            [
                'type'    => 'Label',
                'caption' => 'Optional Email Notification (configurated SMTP module required)'],
            [
                'type'    => 'Label',
                'caption' => 'Email Notification active'],
            [
                'name'    => 'activeemail',
                'type'    => 'CheckBox',
                'caption' => 'active email'],
            [
                'name'    => 'smtpmodule',
                'type'    => 'SelectInstance',
                'caption' => 'SMTP module'],
            [
                'type'    => 'Label',
                'caption' => 'Email Recipient'],
            [
                'name'    => 'email',
                'type'    => 'ValidationTextBox',
                'caption' => 'email'],
            [
                'type'    => 'Label',
                'caption' => 'email subject'],
            [
                'name'    => 'subject',
                'type'    => 'ValidationTextBox',
                'caption' => 'subject'],
            [
                'type'    => 'Label',
                'caption' => 'email text'],
            [
                'name'    => 'emailtext',
                'type'    => 'ValidationTextBox',
                'caption' => 'email text'],
            [
                'name'    => 'activeemail2',
                'type'    => 'CheckBox',
                'caption' => 'active email 2']];
        if ($activeemail2) {
            $form = array_merge_recursive(
                $form, [
                         [
                             'name'    => 'smtpmodule2',
                             'type'    => 'SelectInstance',
                             'caption' => 'SMTP module'],
                         [
                             'type'    => 'Label',
                             'caption' => 'notification email adress'],
                         [
                             'name'    => 'email2',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'email'],
                         [
                             'type'    => 'Label',
                             'caption' => 'email subject'],
                         [
                             'name'    => 'subject2',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'subject'],
                         [
                             'type'    => 'Label',
                             'caption' => 'email text'],
                         [
                             'name'    => 'emailtext2',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'email text'],
                         [
                             'name'    => 'activeemail3',
                             'type'    => 'CheckBox',
                             'caption' => 'active email 3']]
            );
        }
        if ($activeemail3) {
            $form = array_merge_recursive(
                $form, [
                         [
                             'name'    => 'smtpmodule3',
                             'type'    => 'SelectInstance',
                             'caption' => 'SMTP module'],
                         [
                             'type'    => 'Label',
                             'caption' => 'notification email adress'],
                         [
                             'name'    => 'email3',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'email'],
                         [
                             'type'    => 'Label',
                             'caption' => 'email subject'],
                         [
                             'name'    => 'subject3',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'subject'],
                         [
                             'type'    => 'Label',
                             'caption' => 'email text'],
                         [
                             'name'    => 'emailtext3',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'email text'],
                         [
                             'name'    => 'activeemail4',
                             'type'    => 'CheckBox',
                             'caption' => 'active email 4']]
            );
        }
        if ($activeemail4) {
            $form = array_merge_recursive(
                $form, [
                         [
                             'name'    => 'smtpmodule4',
                             'type'    => 'SelectInstance',
                             'caption' => 'SMTP module'],
                         [
                             'type'    => 'Label',
                             'caption' => 'notification email adress'],
                         [
                             'name'    => 'email4',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'email'],
                         [
                             'type'    => 'Label',
                             'caption' => 'email subject'],
                         [
                             'name'    => 'subject4',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'subject'],
                         [
                             'type'    => 'Label',
                             'caption' => 'email text'],
                         [
                             'name'    => 'emailtext4',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'email text'],
                         [
                             'name'    => 'activeemail5',
                             'type'    => 'CheckBox',
                             'caption' => 'active email 5']]
            );
        }
        if ($activeemail5) {
            $form = array_merge_recursive(
                $form, [
                         [
                             'name'    => 'smtpmodule5',
                             'type'    => 'SelectInstance',
                             'caption' => 'SMTP module'],
                         [
                             'type'    => 'Label',
                             'caption' => 'notification email adress'],
                         [
                             'name'    => 'email5',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'email'],
                         [
                             'type'    => 'Label',
                             'caption' => 'email subject'],
                         [
                             'name'    => 'subject5',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'subject'],
                         [
                             'type'    => 'Label',
                             'caption' => 'email text'],
                         [
                             'name'    => 'emailtext5',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'email text'],
                         [
                             'name'    => 'activeemail6',
                             'type'    => 'CheckBox',
                             'caption' => 'active email 6']]
            );
        }
        if ($activeemail6) {
            $form = array_merge_recursive(
                $form, [
                         [
                             'name'    => 'smtpmodule6',
                             'type'    => 'SelectInstance',
                             'caption' => 'SMTP module'],
                         [
                             'type'    => 'Label',
                             'caption' => 'notification email adress'],
                         [
                             'name'    => 'email6',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'email'],
                         [
                             'type'    => 'Label',
                             'caption' => 'email subject'],
                         [
                             'name'    => 'subject6',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'subject'],
                         [
                             'type'    => 'Label',
                             'caption' => 'email text'],
                         [
                             'name'    => 'emailtext6',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'email text'],
                         [
                             'name'    => 'activeemail7',
                             'type'    => 'CheckBox',
                             'caption' => 'active email 7']]
            );
        }
        if ($activeemail7) {
            $form = array_merge_recursive(
                $form, [
                         [
                             'name'    => 'smtpmodule7',
                             'type'    => 'SelectInstance',
                             'caption' => 'SMTP module'],
                         [
                             'type'    => 'Label',
                             'caption' => 'notification email adress'],
                         [
                             'name'    => 'email7',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'email'],
                         [
                             'type'    => 'Label',
                             'caption' => 'email subject'],
                         [
                             'name'    => 'subject7',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'subject'],
                         [
                             'type'    => 'Label',
                             'caption' => 'email text'],
                         [
                             'name'    => 'emailtext7',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'email text'],
                         [
                             'name'    => 'activeemail8',
                             'type'    => 'CheckBox',
                             'caption' => 'active email 8']]
            );
        }
        if ($activeemail8) {
            $form = array_merge_recursive(
                $form, [
                         [
                             'name'    => 'smtpmodule8',
                             'type'    => 'SelectInstance',
                             'caption' => 'SMTP module'],
                         [
                             'type'    => 'Label',
                             'caption' => 'notification email adress'],
                         [
                             'name'    => 'email8',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'email'],
                         [
                             'type'    => 'Label',
                             'caption' => 'email subject'],
                         [
                             'name'    => 'subject8',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'subject'],
                         [
                             'type'    => 'Label',
                             'caption' => 'email text'],
                         [
                             'name'    => 'emailtext8',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'email text'],
                         [
                             'name'    => 'activeemail9',
                             'type'    => 'CheckBox',
                             'caption' => 'active email 9']]
            );
        }
        if ($activeemail9) {
            $form = array_merge_recursive(
                $form, [
                         [
                             'name'    => 'smtpmodule9',
                             'type'    => 'SelectInstance',
                             'caption' => 'SMTP module'],
                         [
                             'type'    => 'Label',
                             'caption' => 'notification email adress'],
                         [
                             'name'    => 'email9',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'email'],
                         [
                             'type'    => 'Label',
                             'caption' => 'email subject'],
                         [
                             'name'    => 'subject9',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'subject'],
                         [
                             'type'    => 'Label',
                             'caption' => 'email text'],
                         [
                             'name'    => 'emailtext9',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'email text'],
                         [
                             'name'    => 'activeemail10',
                             'type'    => 'CheckBox',
                             'caption' => 'active email 10']]
            );
        }
        if ($activeemail10) {
            $form = array_merge_recursive(
                $form, [
                         [
                             'name'    => 'smtpmodule10',
                             'type'    => 'SelectInstance',
                             'caption' => 'SMTP module'],
                         [
                             'type'    => 'Label',
                             'caption' => 'notification email adress'],
                         [
                             'name'    => 'email10',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'email'],
                         [
                             'type'    => 'Label',
                             'caption' => 'email subject'],
                         [
                             'name'    => 'subject10',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'subject'],
                         [
                             'type'    => 'Label',
                             'caption' => 'email text'],
                         [
                             'name'    => 'emailtext10',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'email text'],
                         [
                             'name'    => 'activeemail11',
                             'type'    => 'CheckBox',
                             'caption' => 'active email 11']]
            );
        }
        if ($activeemail11) {
            $form = array_merge_recursive(
                $form, [
                         [
                             'name'    => 'smtpmodule11',
                             'type'    => 'SelectInstance',
                             'caption' => 'SMTP module'],
                         [
                             'type'    => 'Label',
                             'caption' => 'notification email adress'],
                         [
                             'name'    => 'email11',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'email'],
                         [
                             'type'    => 'Label',
                             'caption' => 'email subject'],
                         [
                             'name'    => 'subject11',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'subject'],
                         [
                             'type'    => 'Label',
                             'caption' => 'email text'],
                         [
                             'name'    => 'emailtext11',
                             'type'    => 'ValidationTextBox',
                             'caption' => 'email text']]
            );
        }
        return $form;
    }

    protected function FormShowINSTAREmail()
    {
        $form = [
            [
                'type'    => 'Label',
                'caption' => 'settings'],
            // TODO Add Form Email Settings
            [
                'type'    => 'Label',
                'caption' => 'recipient'],// TODO Add Form Email recipient
        ];
        return $form;
    }

    protected function FormShowFTP()
    {
        $form = [
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'    => 'ValidationTextBox',
                        'name'    => 'ft_server',
                        'visible' => true,
                        'caption' => 'FTP Server',
                        'value'   => $this->ReadAttributeString('FTP_Server'),
                        'onChange' => 'INSTAR_SetFTPParameter($id, $ft_server, $ft_port, $ft_username, $ft_password, $ft_mode, $ft_dirname, $ft_dirmode);'],
                    [
                        'name'     => 'ft_server_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('ft_server_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "ft_server_enabled", $ft_server_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'    => 'NumberSpinner',
                        'name'    => 'ft_port',
                        'caption' => 'FTP Port',
                        'visible' => true,
                        'value'   => $this->ReadAttributeInteger('ft_port'),
                        'onClick' => 'INSTAR_SetFTPParameter($id, $ft_server, $ft_port, $ft_username, $ft_password, $ft_mode, $ft_dirname, $ft_dirmode);'],
                    [
                        'name'     => 'ft_port_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('ft_port_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "ft_port_enabled", $ft_port_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'    => 'ValidationTextBox',
                        'name'    => 'ft_username',
                        'visible' => true,
                        'caption' => 'FTP User Name',
                        'value'   => $this->ReadAttributeString('ft_username'),
                        'onChange' => 'INSTAR_SetFTPParameter($id, $ft_server, $ft_port, $ft_username, $ft_password, $ft_mode, $ft_dirname, $ft_dirmode);'],
                    [
                        'name'     => 'ft_username_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('ft_username_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "ft_username_enabled", $ft_username_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'    => 'ValidationTextBox',
                        'name'    => 'ft_password',
                        'visible' => true,
                        'caption' => 'FTP User Password',
                        'value'   => $this->ReadAttributeString('ft_password'),
                        'onChange' => 'INSTAR_SetFTPParameter($id, $ft_server, $ft_port, $ft_username, $ft_password, $ft_mode, $ft_dirname, $ft_dirmode);'],
                    [
                        'name'     => 'FTP_User_Password_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('ft_password_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "ft_password_enabled", $ft_password_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'Select',
                        'name'     => 'ft_mode',
                        'caption'  => 'FTP Mode',
                        'options'  => [
                            [
                                'caption' => 'PASV',
                                'value'   => 0],
                            [
                                'caption' => 'Port',
                                'value'   => 1],],
                        'visible'  => true,
                        'value'    => $this->ReadAttributeInteger('ft_mode'),
                        'onChange' => 'INSTAR_SetFTPParameter($id, $ft_server, $ft_port, $ft_username, $ft_password, $ft_mode, $ft_dirname, $ft_dirmode);'

                    ],
                    [
                        'name'     => 'ft_mode_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('ft_mode_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "ft_mode_enabled", $ft_mode_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'    => 'ValidationTextBox',
                        'name'    => 'ft_dirname',
                        'visible' => true,
                        'caption' => 'FTP Directory',
                        'value'   => $this->ReadAttributeString('ft_dirname'),
                        'onChange' => 'INSTAR_SetFTPParameter($id, $ft_server, $ft_port, $ft_username, $ft_password, $ft_mode, $ft_dirname, $ft_dirmode);'],
                    [
                        'name'     => 'FTP_User_Password_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('ft_dirname_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "ft_dirname_enabled", $ft_dirname_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'Select',
                        'name'     => 'ft_dirmode',
                        'caption'  => 'FTP Directory Mode',
                        'options'  => [
                            [
                                'caption' => 'sort by day',
                                'value'   => 0],
                            [
                                'caption' => 'one folder',
                                'value'   => 1],],
                        'visible'  => true,
                        'value'    => $this->ReadAttributeInteger('ft_dirmode'),
                        'onChange' => 'INSTAR_SetFTPParameter($id, $ft_server, $ft_port, $ft_username, $ft_password, $ft_mode, $ft_dirname, $ft_dirmode);'

                    ],
                    [
                        'name'     => 'ft_dirmode_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('ft_dirmode_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "ft_dirmode_enabled", $ft_dirmode_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'Select',
                        'name'     => 'ft_ssl',
                        'caption'  => 'FTP SSL',
                        'options'  => [
                            [
                                'caption' => 'no encrytion',
                                'value'   => 0],
                            [
                                'caption' => 'SSL',
                                'value'   => 1],
                            [
                                'caption' => 'TLS',
                                'value'   => 1],],
                        'visible'  => true,
                        'value'    => $this->ReadAttributeInteger('ft_ssl'),
                        'onChange' => 'INSTAR_SetFTPParameter($id, $ft_server, $ft_port, $ft_username, $ft_password, $ft_mode, $ft_dirname, $ft_dirmode);'

                    ],
                    [
                        'name'     => 'ft_ssl_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('ft_ssl_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "ft_ssl_enabled", $ft_ssl_enabled);'],]],
            [
                'type'    => 'Label',
                'visible' => true,
                'caption' => 'Set FTP infos for the camera'],
            [
                'type'    => 'Button',
                'visible' => true,
                'caption' => 'Set FTP infos',
                'onClick' => 'INSTAR_SetFTPParameter($id, $ft_server, $ft_port, $ft_username, $ft_password, $ft_mode, $ft_dirname, $ft_dirmode);'],
            /*
             * [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'    => 'Select',
                        'name'    => 'ft_autocreatedir',
                        'caption' => 'Auto_Create_Directory',
                        'options' => [
                            [
                                'caption' => 'PASV',
                                'value'   => 0],
                            [
                                'caption' => 'Port',
                                'value'   => 1],],
                        'visible' => true,
                        'value'   => $this->ReadAttributeInteger('ft_autocreatedir'),
                        'onChange' => 'INSTAR_SetOutputVolume($id, $ao_volume);'

                    ],
                    [
                        'name'     => 'ft_autocreatedir_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('ft_autocreatedir_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "ft_autocreatedir_enabled", $ft_autocreatedir_enabled);'],]],
             */];
        return $form;
    }

    protected function FormShowIR_night_vision()
    {
        $form = [
            [
                'type'    => 'Label',
                'caption' => 'select here the behavior of the ir-led'],// TODO Add Form Email Settings
        ];
        return $form;
    }

    protected function FormShowPan_Tilt()
    {
        $form = [
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'wdrauto',
                        'visible'  => true,
                        'caption'  => 'Auto WDR',
                        'value'    => boolval($this->ReadAttributeInteger('wdrauto')),
                        'onChange' => 'INSTAR_SetAudioEncoder($id, $aec);'],
                    [
                        'name'     => 'wdrauto_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('wdrmode_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "wdrauto_enabled", $wdrauto_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'Select',
                        'name'     => 'wdrmode',
                        'caption'  => 'Wide Dynamic Range',
                        'options'  => [
                            [
                                'caption' => 'Hardware WDR Mode',
                                'value'   => self::Hardware_WDR_Modus],
                            [
                                'caption' => 'Software WDR Mode',
                                'value'   => self::Software_WDR_Modus],],
                        'visible'  => true,
                        'value'    => $this->ReadAttributeInteger('wdrmode'),
                        'onChange' => 'INSTAR_SetOutputVolume($id, $ao_volume);'

                    ],
                    [
                        'name'     => 'wdrmode_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('wdrmode_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "wdrmode_enabled", $wdrmode_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'wdrauto',
                        'visible'  => true,
                        'caption'  => 'Auto WDR',
                        'value'    => boolval($this->ReadAttributeInteger('wdrauto')),
                        'onChange' => 'INSTAR_SetAudioEncoder($id, $aec);'],
                    [
                        'name'     => 'wdrauto_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('wdrmode_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "wdrauto_enabled", $wdrauto_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'Select',
                        'name'     => 'wdrmode',
                        'caption'  => 'Wide Dynamic Range',
                        'options'  => [
                            [
                                'caption' => 'Hardware WDR Mode',
                                'value'   => self::Hardware_WDR_Modus],
                            [
                                'caption' => 'Software WDR Mode',
                                'value'   => self::Software_WDR_Modus],],
                        'visible'  => true,
                        'value'    => $this->ReadAttributeInteger('wdrmode'),
                        'onChange' => 'INSTAR_SetOutputVolume($id, $ao_volume);'

                    ],
                    [
                        'name'     => 'wdrmode_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('wdrmode_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "wdrmode_enabled", $wdrmode_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'wdrauto',
                        'visible'  => true,
                        'caption'  => 'Auto WDR',
                        'value'    => boolval($this->ReadAttributeInteger('wdrauto')),
                        'onChange' => 'INSTAR_SetAudioEncoder($id, $aec);'],
                    [
                        'name'     => 'wdrauto_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('wdrmode_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "wdrauto_enabled", $wdrauto_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'Select',
                        'name'     => 'wdrmode',
                        'caption'  => 'Wide Dynamic Range',
                        'options'  => [
                            [
                                'caption' => 'Hardware WDR Mode',
                                'value'   => self::Hardware_WDR_Modus],
                            [
                                'caption' => 'Software WDR Mode',
                                'value'   => self::Software_WDR_Modus],],
                        'visible'  => true,
                        'value'    => $this->ReadAttributeInteger('wdrmode'),
                        'onChange' => 'INSTAR_SetOutputVolume($id, $ao_volume);'

                    ],
                    [
                        'name'     => 'wdrmode_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('wdrmode_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "wdrmode_enabled", $wdrmode_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'wdrauto',
                        'visible'  => true,
                        'caption'  => 'Auto WDR',
                        'value'    => boolval($this->ReadAttributeInteger('wdrauto')),
                        'onChange' => 'INSTAR_SetAudioEncoder($id, $aec);'],
                    [
                        'name'     => 'wdrauto_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('wdrmode_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "wdrauto_enabled", $wdrauto_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'wdrauto',
                        'visible'  => true,
                        'caption'  => 'Auto WDR',
                        'value'    => boolval($this->ReadAttributeInteger('wdrauto')),
                        'onChange' => 'INSTAR_SetAudioEncoder($id, $aec);'],
                    [
                        'name'     => 'wdrauto_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('wdrmode_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "wdrauto_enabled", $wdrauto_enabled);'],]],

        ];

        /*
         *

         *
         *
array(10) {
  [0]=>
  string(16) "var panspeed="1""
  [1]=>
  string(19) "
var tiltspeed="1""
  [2]=>
  string(17) "
var panscan="1""
  [3]=>
  string(18) "
var tiltscan="1""
  [4]=>
  string(20) "
var movehome="off""
  [5]=>
  string(23) "
var ptzalarmmask="on""
  [6]=>
  string(20) "
var ptzrfmask="on""
  [7]=>
  string(18) "
var selfdet="on""
  [8]=>
  string(26) "
var alarmpresetindex="1""
  [9]=>
  string(25) "
var initpresetindex="1""
}
         */

        return $form;
    }

    protected function FormShowPTZ_tour()
    {
        $form = [
            [
                'type'    => 'Label',
                'caption' => 'The camera can move to successive positions'],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'wdrmanval',
                        'caption'  => 'Fix WDR Level',
                        'minimum'  => 0,
                        'maximum'  => 255,
                        'value'    => $this->ReadAttributeInteger('wdrmanval'),
                        'onChange' => 'INSTAR_EnableAudio($id);'],
                    [
                        'name'     => 'wdrmanval_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('wdrmanval_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "wdrmanval_enabled", $wdrmanval_enabled);'],]],];
        return $form;
    }

    protected function FormShowManual_record()
    {
        $form = [
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'wdrmanval',
                        'caption'  => 'duration of manual recordings',
                        'minimum'  => 0,
                        'maximum'  => 600,
                        'value'    => $this->ReadAttributeInteger('wdrmanval'),
                        'onChange' => 'INSTAR_SetFileLengthManualRecordings($id, $wdrmanval);'],
                    [
                        'name'     => 'wdrmanval_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('wdrmanval_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "wdrmanval_enabled", $wdrmanval_enabled);'],]],];
        return $form;
    }

    protected function FormShowSD_card()
    {
        $form = [
            [
                'type'    => 'Button',
                'caption' => 'Format SD Card',
                'onClick' => 'INSTAR_FormatSD_Card($id);'],
            [
                'type'    => 'Button',
                'caption' => 'Unmount SD Card',
                'onClick' => 'INSTAR_UnmountSD_Card($id);'],];
        return $form;
    }

    protected function FormShowStatus_LED()
    {
        $form = [];
        return $form;
    }

    protected function FormShowWizard()
    {
        $form = [];
        return $form;
    }

    protected function FormShowActions()
    {
        $form = [
            [
                'name'    => 'pir_enable',
                'type'    => 'Button',
                'caption' => 'Enable PIR',
                'onClick' => 'INSTAR_EnablePIR($id, $pir_enable);'],];
        return $form;
    }

    protected function FormShowAreas()
    {
        $form = [
            [
                'type'    => 'Label',
                'caption' => 'Zone 1'],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'm1_enable',
                        'visible'  => true,
                        'caption'  => 'Zone 1',
                        'value'    => boolval($this->ReadAttributeInteger('m1_enable')),
                        'onChange' => 'INSTAR_SetAlarmZone1($id, $m1_enable);'],
                    [
                        'name'     => 'm1_enable_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('m1_enable_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "m1_enable_enabled", $m1_enable_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'm1_x',
                        'caption'  => 'X',
                        'minimum'  => 1,
                        'maximum'  => 1920,
                        'value'    => $this->ReadAttributeInteger('m1_x'),
                        'onChange' => 'INSTAR_SetAlarmZone1Parameters($id, $m1_x, $m1_y, $m1_w, $m1_h);'],
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'm1_y',
                        'caption'  => 'Y',
                        'minimum'  => 0,
                        'maximum'  => 1080,
                        'value'    => $this->ReadAttributeInteger('m1_y'),
                        'onChange' => 'INSTAR_SetAlarmZone1Parameters($id, $m1_x, $m1_y, $m1_w, $m1_h);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'm1_w',
                        'caption'  => 'W',
                        'minimum'  => 1,
                        'maximum'  => 1920,
                        'value'    => $this->ReadAttributeInteger('m1_w'),
                        'onChange' => 'INSTAR_SetAlarmZone1Parameters($id, $m1_x, $m1_y, $m1_w, $m1_h);'],
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'm1_h',
                        'caption'  => 'H',
                        'minimum'  => 1,
                        'maximum'  => 1080,
                        'value'    => $this->ReadAttributeInteger('m1_h'),
                        'onChange' => 'INSTAR_SetAlarmZone1Parameters($id, $m1_x, $m1_y, $m1_w, $m1_h);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'm1_sensitivity',
                        'caption'  => 'Sensitivity',
                        'minimum'  => 0,
                        'maximum'  => 100,
                        'value'    => $this->ReadAttributeInteger('m1_sensitivity'),
                        'onChange' => 'INSTAR_SetAlarmZone1Senitivity($id, $m1_sensitivity);'],
                    [
                        'name'     => 'm1_sensitivity_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('m1_sensitivity_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "m1_sensitivity_enabled", $m1_sensitivity_enabled);'],]],
            [
                'type'    => 'Label',
                'caption' => 'Zone 2'],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'm2_enable',
                        'visible'  => true,
                        'caption'  => 'Zone 2',
                        'value'    => boolval($this->ReadAttributeInteger('m2_enable')),
                        'onChange' => 'INSTAR_SetAlarmZone2($id, $m2_enable);'],
                    [
                        'name'     => 'm2_enable_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('m2_enable_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "m2_enable_enabled", $m2_enable_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'm2_x',
                        'caption'  => 'X',
                        'minimum'  => 1,
                        'maximum'  => 1920,
                        'value'    => $this->ReadAttributeInteger('m2_x'),
                        'onChange' => 'INSTAR_SetAlarmZone2Parameters($id, $m2_x, $m2_y, $m2_w, $m2_h);'],
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'm2_y',
                        'caption'  => 'Y',
                        'minimum'  => 0,
                        'maximum'  => 1080,
                        'value'    => $this->ReadAttributeInteger('m2_y'),
                        'onChange' => 'INSTAR_SetAlarmZone2Parameters($id, $m2_x, $m2_y, $m2_w, $m2_h);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'm2_w',
                        'caption'  => 'W',
                        'minimum'  => 1,
                        'maximum'  => 1920,
                        'value'    => $this->ReadAttributeInteger('m2_w'),
                        'onChange' => 'INSTAR_SetAlarmZone2Parameters($id, $m2_x, $m2_y, $m2_w, $m2_h);'],
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'm2_h',
                        'caption'  => 'H',
                        'minimum'  => 1,
                        'maximum'  => 1080,
                        'value'    => $this->ReadAttributeInteger('m2_h'),
                        'onChange' => 'INSTAR_SetAlarmZone2Parameters($id, $m2_x, $m2_y, $m2_w, $m2_h);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'm2_sensitivity',
                        'caption'  => 'Sensitivity',
                        'minimum'  => 0,
                        'maximum'  => 100,
                        'value'    => $this->ReadAttributeInteger('m2_sensitivity'),
                        'onChange' => 'INSTAR_SetAlarmZone2Senitivity($id, $m2_sensitivity);'],
                    [
                        'name'     => 'm2_sensitivity_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('m2_sensitivity_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "m2_sensitivity_enabled", $m2_sensitivity_enabled);'],]],
            [
                'type'    => 'Label',
                'caption' => 'Zone 3'],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'm3_enable',
                        'visible'  => true,
                        'caption'  => 'Zone 3',
                        'value'    => boolval($this->ReadAttributeInteger('m3_enable')),
                        'onChange' => 'INSTAR_SetAlarmZone3($id, $m3_enable);'],
                    [
                        'name'     => 'm3_enable_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('m3_enable_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "m3_enable_enabled", $m3_enable_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'm3_x',
                        'caption'  => 'X',
                        'minimum'  => 1,
                        'maximum'  => 1920,
                        'value'    => $this->ReadAttributeInteger('m3_x'),
                        'onChange' => 'INSTAR_SetAlarmZone3Parameters($id, $m3_x, $m3_y, $m3_w, $m3_h);'],
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'm3_y',
                        'caption'  => 'Y',
                        'minimum'  => 0,
                        'maximum'  => 1080,
                        'value'    => $this->ReadAttributeInteger('m3_y'),
                        'onChange' => 'INSTAR_SetAlarmZone3Parameters($id, $m3_x, $m3_y, $m3_w, $m3_h);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'm3_w',
                        'caption'  => 'W',
                        'minimum'  => 1,
                        'maximum'  => 1920,
                        'value'    => $this->ReadAttributeInteger('m3_w'),
                        'onChange' => 'INSTAR_SetAlarmZone3Parameters($id, $m3_x, $m3_y, $m3_w, $m3_h);'],
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'm3_h',
                        'caption'  => 'H',
                        'minimum'  => 1,
                        'maximum'  => 1080,
                        'value'    => $this->ReadAttributeInteger('m3_h'),
                        'onChange' => 'INSTAR_SetAlarmZone3Parameters($id, $m3_x, $m3_y, $m3_w, $m3_h);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'm3_sensitivity',
                        'caption'  => 'Sensitivity',
                        'minimum'  => 0,
                        'maximum'  => 100,
                        'value'    => $this->ReadAttributeInteger('m3_sensitivity'),
                        'onChange' => 'INSTAR_SetAlarmZone3Senitivity($id, $m3_sensitivity);'],
                    [
                        'name'     => 'm3_sensitivity_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('m3_sensitivity_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "m3_sensitivity_enabled", $m3_sensitivity_enabled);'],]],
            [
                'type'    => 'Label',
                'caption' => 'Zone 4'],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'm4_enable',
                        'visible'  => true,
                        'caption'  => 'Zone 4',
                        'value'    => boolval($this->ReadAttributeInteger('m4_enable')),
                        'onChange' => 'INSTAR_SetAlarmZone4($id, $m4_enable);'],
                    [
                        'name'     => 'm4_enable_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('m4_enable_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "m4_enable_enabled", $m4_enable_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'm4_x',
                        'caption'  => 'X',
                        'minimum'  => 1,
                        'maximum'  => 1920,
                        'value'    => $this->ReadAttributeInteger('m4_x'),
                        'onChange' => 'INSTAR_SetAlarmZone4Parameters($id, $m4_x, $m4_y, $m4_w, $m4_h);'],
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'm4_y',
                        'caption'  => 'Y',
                        'minimum'  => 0,
                        'maximum'  => 1080,
                        'value'    => $this->ReadAttributeInteger('m4_y'),
                        'onChange' => 'INSTAR_SetAlarmZone4Parameters($id, $m4_x, $m4_y, $m4_w, $m4_h);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'm4_w',
                        'caption'  => 'W',
                        'minimum'  => 1,
                        'maximum'  => 1920,
                        'value'    => $this->ReadAttributeInteger('m4_w'),
                        'onChange' => 'INSTAR_SetAlarmZone4Parameters($id, $m4_x, $m4_y, $m4_w, $m4_h);'],
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'm4_h',
                        'caption'  => 'H',
                        'minimum'  => 1,
                        'maximum'  => 1080,
                        'value'    => $this->ReadAttributeInteger('m4_h'),
                        'onChange' => 'INSTAR_SetAlarmZone4Parameters($id, $m4_x, $m4_y, $m4_w, $m4_h);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'HorizontalSlider',
                        'name'     => 'm4_sensitivity',
                        'caption'  => 'Sensitivity',
                        'minimum'  => 0,
                        'maximum'  => 100,
                        'value'    => $this->ReadAttributeInteger('m4_sensitivity'),
                        'onChange' => 'INSTAR_SetAlarmZone4Senitivity($id, $m4_sensitivity);'],
                    [
                        'name'     => 'm4_sensitivity_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => true,
                        'value'    => $this->ReadAttributeBoolean('m4_sensitivity_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "m4_sensitivity_enabled", $m4_sensitivity_enabled);'],]],];
        return $form;


        // X-Axis Offset of Alarm Area Origin [0-(1920-w)]
        // Y-Axis Offset of Alarm Area Origin [0-(1080-h)]


    }

    protected function FormShowSchedule()
    {
        $form = [
            [
                'type'    => 'Label',
                'caption' => 'Set Schedule in INSTAR Camera'],];
        return $form;
    }

    protected function FormShowPush()
    {
        $form = [
            [
                'type'    => 'Label',
                'caption' => 'Set Push in INSTAR Camera'],];
        return $form;
    }

    /** Set Alarm Server
     *
     * @param int $alarmserver 0 IP-Symcon Connect , 1 local network
     */
    public function SetAlarmServer(int $alarmserver)
    {
        $this->SendDebug('Set Alarmserver', 'Selection ' . $alarmserver, 0);
        $this->WriteAttributeInteger('alarmserver', $alarmserver);
        if ($alarmserver == 0) {
            $this->SendDebug('Set Alarmserver', 'Selection IP-Symcon Connect', 0);
            $connectinfo = $this->GetConnectURL();
            $pos         = strpos($connectinfo, 'https://');
            if ($pos === 0) {
                $ip = str_replace('https://', '', $connectinfo);
            }
            $this->SendDebug('Set Alarmserver', 'Selection IP ' . $ip, 0);
            $port = 80;
            $this->SendDebug('Set Alarmserver', 'Selection Port ' . $port, 0);
        } else {
            $this->SendDebug('Set Alarmserver', 'Selection IP-Symcon local network', 0);
            $ip = $this->GetHostIP()[0];
            $this->SendDebug('Set Alarmserver', 'Selection IP ' . $ip, 0);
            $port = 3777;
            $this->SendDebug('Set Alarmserver', 'Selection Port ' . $port, 0);
        }
        $this->WriteAttributeString('as_server_2', $ip);
        $this->UpdateParameter('as_server_2', 'value', $ip);
        $this->WriteAttributeInteger('as_port_2', $port);
        $this->UpdateParameter('as_port_2', 'value', $port);
    }

    /** Alarmserver Setup
     *
     * @param int $alarmserver 0 IP-Symcon Connect, 1 IP-Symcon lokal
     */
    public function SetupAlarmServer(string $user, string $password, string $parameter_1_key, string $parameter_1_value, string $parameter_2_key,
                                     string $parameter_2_value, string $parameter_3_key, string $parameter_3_value)
    {
        $this->WriteAttributeString('as_username_2', $user);
        $this->WriteAttributeString('as_password_2', $password);
        $this->WriteAttributeString('as_queryattr1_2', $parameter_1_key);
        $this->WriteAttributeString('as_queryval1_2', $parameter_1_value);
        $this->WriteAttributeString('as_queryattr2_2', $parameter_2_key);
        $this->WriteAttributeString('as_queryval2_2', $parameter_2_value);
        $this->WriteAttributeString('as_queryattr3_2', $parameter_3_key);
        $this->WriteAttributeString('as_queryval3_2', $parameter_3_value);
        $data = $this->SetAlarmserver2Configuration();
        if ($data === false) {
            $this->ShowPopup('Colud not connect to INSTAR camera');
        } else {
            $this->ShowPopup($data);
        }
        return $data;
    }

    public function ShowPopup(string $message)
    {
        $this->UpdateParameter('popup', 'visible', true);
        $this->UpdateParameter('popup_message', 'value', $message);
        $this->UpdateParameter('popup_message', 'visible', true);
        $this->UpdateParameter('popup_message', 'value', $message);
    }

    public function SendQueryMotionDetected(bool $as_area)
    {
        if ($as_area) {
            $this->WriteAttributeInteger('as_area', 1);
        } else {
            $this->WriteAttributeInteger('as_area', 0);
        }
        $this->SetAlarmserver2Configuration();
    }

    public function SendQueryAlarmInputTriggered(bool $as_io)
    {
        if ($as_io) {
            $this->WriteAttributeInteger('as_io', 1);
        } else {
            $this->WriteAttributeInteger('as_io', 0);
        }
        $this->SetAlarmserver2Configuration();
    }

    public function SendQueryAudioAlarmTriggered(bool $as_audio)
    {
        if ($as_audio) {
            $this->WriteAttributeInteger('as_audio', 1);
        } else {
            $this->WriteAttributeInteger('as_audio', 0);
        }
        $this->SetAlarmserver2Configuration();
    }

    public function SendQueryMotionDetectedInputTriggered(bool $as_areaio)
    {
        if ($as_areaio) {
            $this->WriteAttributeInteger('as_areaio', 1);
        } else {
            $this->WriteAttributeInteger('as_areaio', 0);
        }
        $this->SetAlarmserver2Configuration();
    }

    private function GetAlarmServerPort()
    {
        $port = $this->ReadAttributeInteger('as_port_2');
        return $port;
    }

    private function GetAlarmServerAdress()
    {
        $ip = $this->ReadAttributeString('as_server_2');
        return $ip;
    }

    private function GetWebhook()
    {
        $hook = '/hook/INSTAR' . $this->InstanceID;
        $this->WriteAttributeString('as_path_2', $hook);
        return $hook;
    }

    protected function FormShowAlarmserver()
    {
        $form = [
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'Select',
                        'name'     => 'alarmserver',
                        'caption'  => 'Alarm Server',
                        'options'  => [
                            [
                                'caption' => 'IP-Symcon Connect',
                                'value'   => 0],
                            [
                                'caption' => 'IP-Symcon in local network',
                                'value'   => 1],],
                        'visible'  => true,
                        'value'    => $this->ReadAttributeInteger('alarmserver'),
                        'onChange' => 'INSTAR_SetAlarmServer($id, $alarmserver);',],
                    [
                        'name'     => 'alarmserver_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => false,
                        'value'    => $this->ReadAttributeBoolean('alarmserver_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "alarmserver_enabled", $alarmserver_enabled);'],]],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'    => 'ValidationTextBox',
                        'name'    => 'as_server_2',
                        'caption' => 'Alarm Server Address',
                        'visible' => true,
                        'value'   => $this->GetAlarmServerAdress(),
                        'onClick' => 'INSTAR_SetWebFrontVariable($id, "as_server_2", $as_server_2);'],
                    [
                        'name'     => 'as_server_2_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => false,
                        'value'    => $this->ReadAttributeBoolean('as_server_2_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "as_server_2_enabled", $as_server_2_enabled);'],]],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'    => 'NumberSpinner',
                        'name'    => 'as_port_2',
                        'caption' => 'Alarm Server Port',
                        'visible' => true,
                        'enabled' => false,
                        'value'   => $this->GetAlarmServerPort(),
                        'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                    [
                        'name'     => 'as_port_2_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => false,
                        'value'    => $this->ReadAttributeBoolean('as_port_2_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "as_port_2_enabled", $as_port_2_enabled);'],]],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'    => 'ValidationTextBox',
                        'name'    => 'as_path_2',
                        'caption' => 'server path',
                        'visible' => true,
                        'enabled' => false,
                        'value'   => $this->GetWebhook(),
                        'onClick' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],
                    [
                        'name'     => 'as_path_2_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => false,
                        'value'    => $this->ReadAttributeBoolean('as_path_2_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "as_path_2_enabled", $as_path_2_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'as_area',
                        'visible'  => true,
                        'caption'  => 'Send Query when Motion is Detected',
                        'value'    => boolval($this->ReadAttributeInteger('as_area')),
                        'onChange' => 'INSTAR_SendQueryMotionDetected($id, $as_area);'],
                    [
                        'name'     => 'as_area_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => false,
                        'value'    => $this->ReadAttributeBoolean('as_area_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "as_area_enabled", $as_area_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'as_io',
                        'visible'  => true,
                        'caption'  => 'Send Query when Alarm Input is Triggered',
                        'value'    => boolval($this->ReadAttributeInteger('as_io')),
                        'onChange' => 'INSTAR_SendQueryAlarmInputTriggered($id, $aec);'],
                    [
                        'name'     => 'as_io_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => false,
                        'value'    => $this->ReadAttributeBoolean('as_io_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "as_io_enabled", $as_io_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'as_audio',
                        'visible'  => true,
                        'caption'  => 'Send Query when Audio Alarm is Triggered',
                        'value'    => boolval($this->ReadAttributeInteger('as_audio')),
                        'onChange' => 'INSTAR_SendQueryAudioAlarmTriggered($id, $as_audio);'],
                    [
                        'name'     => 'as_audio_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => false,
                        'value'    => $this->ReadAttributeBoolean('as_audio_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "as_audio_enabled", $as_audio_enabled);'],]],
            [
                'type'    => 'RowLayout',
                'visible' => true,
                'items'   => [
                    [
                        'type'     => 'CheckBox',
                        'name'     => 'as_areaio',
                        'visible'  => true,
                        'caption'  => 'Send Query when Motion is Detected and Input is Triggered',
                        'value'    => boolval($this->ReadAttributeInteger('as_areaio')),
                        'onChange' => 'INSTAR_SendQueryMotionDetectedInputTriggered($id, $as_areaio);'],
                    [
                        'name'     => 'as_areaio_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => false,
                        'value'    => $this->ReadAttributeBoolean('as_areaio_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "as_areaio_enabled", $as_areaio_enabled);'],]],
            [
                // as_query1_2
                'name'    => 'parameter_1_label',
                'type'    => 'Label',
                'visible' => false,
                'caption' => 'Parameter 1 ( optional)'],
            [
                'type'    => 'RowLayout',
                'visible' => false,
                'items'   => [
                    [
                        'type'    => 'ValidationTextBox',
                        'name'    => 'as_queryattr1_2',
                        'caption' => 'Parameter 1 Key',
                        'visible' => true,
                        'value'   => $this->ReadAttributeString('as_queryattr1_2'),
                        'onClick' => 'INSTAR_SetupAlarmServer($id, $as_username_2, $as_password_2, $as_queryattr1_2, $as_queryval1_2, $as_queryattr2_2, $as_queryval2_2, $as_queryattr3_2, $as_queryval3_2);'],
                    [
                        'type'    => 'ValidationTextBox',
                        'name'    => 'as_queryval1_2',
                        'caption' => 'Parameter 1 Value',
                        'visible' => true,
                        'value'   => $this->ReadAttributeString('ip'),
                        'onClick' => 'INSTAR_SetupAlarmServer($id, $as_username_2, $as_password_2, $as_queryattr1_2, $as_queryval1_2, $as_queryattr2_2, $as_queryval2_2, $as_queryattr3_2, $as_queryval3_2);'],
                    [
                        'name'     => 'as_queryattr1_2_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => false,
                        'value'    => $this->ReadAttributeBoolean('as_queryattr1_2_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "as_queryattr1_2_enabled", $as_queryattr1_2_enabled);'],]],
            [
                // as_query2_2
                'name'    => 'parameter_2_label',
                'type'    => 'Label',
                'visible' => false,
                'caption' => 'Parameter 2 ( optional)'],
            [
                'type'    => 'RowLayout',
                'visible' => false,
                'items'   => [
                    [
                        'type'    => 'ValidationTextBox',
                        'name'    => 'as_queryattr2_2',
                        'caption' => 'Parameter 2 Key',
                        'visible' => true,
                        'value'   => $this->ReadAttributeString('as_queryattr2_2'),
                        'onClick' => 'INSTAR_SetupAlarmServer($id, $as_username_2, $as_password_2, $as_queryattr1_2, $as_queryval1_2, $as_queryattr2_2, $as_queryval2_2, $as_queryattr3_2, $as_queryval3_2);'],
                    [
                        'type'    => 'ValidationTextBox',
                        'name'    => 'as_queryval2_2',
                        'caption' => 'Parameter 2 Value',
                        'visible' => true,
                        'value'   => $this->ReadAttributeString('as_queryval2_2'),
                        'onClick' => 'INSTAR_SetupAlarmServer($id, $as_username_2, $as_password_2, $as_queryattr1_2, $as_queryval1_2, $as_queryattr2_2, $as_queryval2_2, $as_queryattr3_2, $as_queryval3_2);'],
                    [
                        'name'     => 'as_queryattr2_2_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => false,
                        'value'    => $this->ReadAttributeBoolean('as_queryattr2_2_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "as_queryattr2_2_enabled", $as_queryattr2_2_enabled);'],]],
            [
                // as_query3_2
                'name'    => 'parameter_3_label',
                'type'    => 'Label',
                'visible' => false,
                'caption' => 'Parameter 3 ( optional)'],
            [
                'type'    => 'RowLayout',
                'visible' => false,
                'items'   => [
                    [
                        'type'    => 'ValidationTextBox',
                        'name'    => 'as_queryattr3_2',
                        'caption' => 'Parameter 3 Key',
                        'visible' => true,
                        'value'   => $this->ReadAttributeString('as_queryattr3_2'),
                        'onClick' => 'INSTAR_SetupAlarmServer($id, $as_username_2, $as_password_2, $as_queryattr1_2, $as_queryval1_2, $as_queryattr2_2, $as_queryval2_2, $as_queryattr3_2, $as_queryval3_2);'],
                    [
                        'type'    => 'ValidationTextBox',
                        'name'    => 'as_queryval3_2',
                        'caption' => 'Parameter 3 Value',
                        'visible' => true,
                        'value'   => $this->ReadAttributeString('as_queryval3_2'),
                        'onClick' => 'INSTAR_SetupAlarmServer($id, $as_username_2, $as_password_2, $as_queryattr1_2, $as_queryval1_2, $as_queryattr2_2, $as_queryval2_2, $as_queryattr3_2, $as_queryval3_2);'],
                    [
                        'name'     => 'as_queryattr3_2_enabled',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'visible'  => false,
                        'value'    => $this->ReadAttributeBoolean('as_queryattr3_2_enabled'),
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "as_queryattr3_2_enabled", $as_queryattr3_2_enabled);'],]],
            [
                'type'    => 'Label',
                'caption' => 'username and password for INSTAR webhook'],
            [
                'name'    => 'as_username_2',
                'type'    => 'ValidationTextBox',
                'caption' => 'Webhook Username',
                'value'   => $this->ReadAttributeString('as_username_2')],
            [
                'name'    => 'as_password_2',
                'type'    => 'PasswordTextBox',
                'caption' => 'Webhook Password',
                'value'   => $this->ReadAttributeString('as_password_2')],
            [
                'type'    => 'Button',
                'caption' => 'Setup Alarmserver Settings',
                'onClick' => 'INSTAR_SetupAlarmServer($id, $as_username_2, $as_password_2, $as_queryattr1_2, $as_queryval1_2, $as_queryattr2_2, $as_queryval2_2, $as_queryattr3_2, $as_queryval3_2);'],];
        /*
         * as_username[0]="";
as_password[0]="";
         */
        return $form;
    }

    protected function FormShowPhoto_series()
    {
        $form = [
            [
                'type'    => 'Label',
                'caption' => 'Please use INSTAR camera menu'],];
        return $form;
    }

    protected function FormShowRecordings()
    {
        $form = [
            [
                'type'    => 'Label',
                'caption' => 'Please use INSTAR camera menu'],];
        return $form;
    }

    protected function FormShowInformation()
    {
        $form = [
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'    => 'Label',
                        'name'    => 'label_name',
                        'caption' => 'Name'],
                    [
                        'type'    => 'Label',
                        'name'    => 'name',
                        'caption' => $this->ReadAttributeString('name')],
                    [
                        'name'     => 'name_enable',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "name_enable", $name_enable);'],]],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'    => 'Label',
                        'name'    => 'label_model',
                        'caption' => 'Camera Model Identifier'],
                    [
                        'type'    => 'Label',
                        'name'    => 'model',
                        'caption' => $this->ReadAttributeString('model')],
                    [
                        'name'     => 'model_enable',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, "model_enable", $model_enable);'],]],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'    => 'Label',
                        'name'    => 'label_hardVersion',
                        'caption' => 'Hardware Version'],
                    [
                        'type'    => 'Label',
                        'name'    => 'hardVersion',
                        'caption' => $this->ReadAttributeString('hardVersion')],
                    [
                        'name'     => 'hardVersion_enable',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],]],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'    => 'Label',
                        'name'    => 'label_softVersion',
                        'caption' => 'Firmware Version'],
                    [
                        'type'    => 'Label',
                        'name'    => 'softVersion',
                        'caption' => $this->ReadAttributeString('softVersion')],
                    [
                        'name'     => 'softVersion_enable',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],]],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'    => 'Label',
                        'name'    => 'label_webVersion',
                        'caption' => 'WebUI Version'],
                    [
                        'type'    => 'Label',
                        'name'    => 'webVersion',
                        'caption' => $this->ReadAttributeString('webVersion')],
                    [
                        'name'     => 'webVersion_enable',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],]],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'    => 'Label',
                        'name'    => 'label_webVersion',
                        'caption' => 'Nachtsicht'],
                    [
                        'type'    => 'Label',
                        'name'    => 'webVersion',
                        'caption' => $this->ReadAttributeString('webVersion')],
                    [
                        'name'     => 'webVersion_enable',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],]],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'    => 'Label',
                        'name'    => 'label_webVersion',
                        'caption' => 'SD-State'],
                    [
                        'type'    => 'Label',
                        'name'    => 'webVersion',
                        'caption' => $this->ReadAttributeString('webVersion')],
                    [
                        'name'     => 'webVersion_enable',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],]],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'    => 'Label',
                        'name'    => 'label_sdtotalspace',
                        'caption' => 'SD total space:'],
                    [
                        'type'    => 'Label',
                        'name'    => 'sdtotalspace',
                        'caption' => $this->ReadAttributeInteger('sdtotalspace') . ' KB'],
                    [
                        'name'     => 'sdtotalspace_enable',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],]],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'    => 'Label',
                        'name'    => 'label_sdfreespace',
                        'caption' => 'SD free space:'],
                    [
                        'type'    => 'Label',
                        'name'    => 'sdfreespace',
                        'caption' => $this->ReadAttributeInteger('sdfreespace') . ' KB'],
                    [
                        'name'     => 'sdfreespace_enable',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],]],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'    => 'Label',
                        'name'    => 'label_sdfreespace',
                        'caption' => 'LAN MAC:'],
                    [
                        'type'    => 'Label',
                        'name'    => 'sdfreespace',
                        'caption' => $this->ReadAttributeInteger('sdfreespace') . ' KB'],
                    [
                        'name'     => 'sdfreespace_enable',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],]],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'    => 'Label',
                        'name'    => 'label_sdfreespace',
                        'caption' => 'WLAN MAC:'],
                    [
                        'type'    => 'Label',
                        'name'    => 'sdfreespace',
                        'caption' => $this->ReadAttributeInteger('sdfreespace') . ' KB'],
                    [
                        'name'     => 'sdfreespace_enable',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],]],
            [
                'type'  => 'RowLayout',
                'items' => [
                    [
                        'type'    => 'Label',
                        'name'    => 'label_sdfreespace',
                        'caption' => 'In operation since:'],
                    [
                        'type'    => 'Label',
                        'name'    => 'sdfreespace',
                        'caption' => $this->ReadAttributeInteger('sdfreespace') . ' KB'],
                    [
                        'name'     => 'sdfreespace_enable',
                        'type'     => 'CheckBox',
                        'caption'  => 'Create Variable for Webfront',
                        'onChange' => 'INSTAR_SetWebFrontVariable($id, $name, $value);'],]],


        ];
        /*
         * Modell
         * Firmware-Version:
         * WebUI-Version:
         * Nachtsicht:
         * SD-Status:
         * SD-Kapazität:
         * Freier SD-Speicher:
         * LAN MAC:
         * WLAN MAC:
         * In Betrieb seit:
         */
        return $form;
    }

    protected function FormShowNetwork()
    {
        $form = [];
        /* Modell:
        Verbindungsart:
        WAN IP:
        Internet: Verbindung erfolgreich!
        INSTAR-DDNS:
        DDNS-Status: Verbindung erfolgreich!
        P2P-UID:
        P2P Status: P2P akiviert
        uPNP Status: uPNP deaktiviert
         *
         */
        return $form;
    }

    protected function FormShowUsers()
    {
        $form = [];
        return $form;
    }

    protected function FormShowDate_Time()
    {
        $form = [];
        return $form;
    }

    protected function FormShowLanguage_Selection()
    {
        $form = [];
        return $form;
    }

    protected function FormShowSystem_Logbook()
    {
        $form = [];
        return $form;
    }

    protected function FormShowFirmware_Update()
    {
        $form = [];
        return $form;
    }

    protected function FormShowReboot()
    {
        $form = [];
        return $form;
    }

    protected function FormShowReset()
    {
        $form = [];
        return $form;
    }

    /**
     * return form actions by token.
     *
     * @return array
     */
    protected function FormActions()
    {
        $form = [
            [
                'type'    => 'Label',
                'caption' => 'INSTAR Camera Menu'],
            [
                'type'    => 'ExpansionPanel',
                'caption' => 'Network Menu',
                'items'   => [
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'IP configuration',
                        'items'   => $this->FormNetworkInfo()],
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'SSL-Certificate',
                        'items'   => $this->FormSSLInfo()],
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'WLAN',
                        'items'   => $this->FormWIFIInfo()],
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'Remote access',
                        'items'   => $this->FormRemoteInfo()],
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'Upnp',
                        'items'   => $this->FormUPNPInfo()],
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'Onvif',
                        'items'   => $this->FormONVIFInfo()]]],
            [
                'type'    => 'ExpansionPanel',
                'caption' => 'Multimeadia Menu',
                'items'   => [
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'Audio',
                        'items'   => $this->FormAudioSettings()],
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'Video',
                        'items'   => $this->FormVideoSettings()],
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'Image settings',
                        'items'   => $this->FormImageSettings()],
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'Video overlays',
                        'items'   => $this->FormImageOverlaySettings()],
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'Privacy settings',
                        'items'   => $this->FormPrivacySettings()]]],
            [
                'type'    => 'ExpansionPanel',
                'caption' => 'Features Menu',
                'items'   => [
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'Email settings',
                        'items'   => $this->FormShowINSTAREmail()],
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'FTP',
                        'items'   => $this->FormShowFTP()],
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'IR night vision',
                        'items'   => $this->FormShowIR_night_vision()],
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'Pan & tilt',
                        'items'   => $this->FormShowPan_Tilt()],
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'PTZ tour',
                        'items'   => $this->FormShowPTZ_tour()],
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'Manual record',
                        'items'   => $this->FormShowManual_record()],
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'SD card',
                        'items'   => $this->FormShowSD_card()],
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'Status LED',
                        'visible' => false,
                        'items'   => $this->FormShowStatus_LED()],
                    [
                        'type'    => 'ExpansionPanel',
                        'visible' => false,
                        'caption' => 'Wizard',
                        'items'   => $this->FormShowWizard()]]],
            [
                'type'    => 'ExpansionPanel',
                'caption' => 'Alarm Menu',
                'items'   => [
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'Actions',
                        'items'   => $this->FormShowActions()],
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'Areas',
                        'items'   => $this->FormShowAreas()],
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'Schedule',
                        'items'   => $this->FormShowSchedule()],
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'Push',
                        'items'   => $this->FormShowPush()],
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'Alarmserver',
                        'items'   => $this->FormShowAlarmserver()]]],
            [
                'type'    => 'ExpansionPanel',
                'caption' => 'Tasks Menu',
                'items'   => [
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'Photo series',
                        'items'   => $this->FormShowPhoto_series()],
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'Recordings',
                        'items'   => $this->FormShowRecordings()]]],
            [
                'type'    => 'ExpansionPanel',
                'caption' => 'System Menu',
                'items'   => [
                    [
                        'type'    => 'ExpansionPanel',
                        'caption' => 'Overview',
                        'items'   => [
                            [
                                'type'    => 'ExpansionPanel',
                                'caption' => 'Information',
                                'items'   => $this->FormShowInformation()],
                            [
                                'type'    => 'ExpansionPanel',
                                'caption' => 'Network',
                                'items'   => $this->FormShowNetwork()]],
                        [
                            'type'    => 'ExpansionPanel',
                            'caption' => 'Users',
                            'items'   => $this->FormShowUsers()],
                        [
                            'type'    => 'ExpansionPanel',
                            'caption' => 'Date & Time',
                            'items'   => $this->FormShowDate_Time()],
                        [
                            'type'    => 'ExpansionPanel',
                            'caption' => 'Language Selection',
                            'items'   => $this->FormShowLanguage_Selection()],
                        [
                            'type'    => 'ExpansionPanel',
                            'caption' => 'System Logbook',
                            'items'   => $this->FormShowSystem_Logbook()],
                        [
                            'type'    => 'ExpansionPanel',
                            'caption' => 'Firmware-Update',
                            'items'   => $this->FormShowFirmware_Update()],
                        [
                            'type'    => 'ExpansionPanel',
                            'caption' => 'Reboot',
                            'items'   => $this->FormShowReboot()],
                        [
                            'type'    => 'ExpansionPanel',
                            'caption' => 'Reset',
                            'items'   => $this->FormShowReset()]]],
                [
                    'type'    => 'Label',
                    'caption' => 'Get snapshot from Camera'],
                [
                    'type'    => 'Button',
                    'caption' => 'Get snapshot',
                    'onClick' => 'INSTAR_GetSnapshot($id);'],
                [
                    'type'    => 'Label',
                    'caption' => 'Move left'],
                [
                    'type'    => 'Button',
                    'caption' => 'Left',
                    'onClick' => 'INSTAR_Left($id);'],
                [
                    'type'    => 'Label',
                    'caption' => 'Move left'],
                [
                    'type'    => 'Button',
                    'caption' => 'Right',
                    'onClick' => 'INSTAR_Right($id);'],
                [
                    'type'    => 'Label',
                    'caption' => 'Move left'],
                [
                    'type'    => 'Button',
                    'caption' => 'Up',
                    'onClick' => 'INSTAR_Up($id);'],
                [
                    'type'    => 'Label',
                    'caption' => 'Move down'],
                [
                    'type'    => 'Button',
                    'caption' => 'Left',
                    'onClick' => 'INSTAR_Down($id);'],
                [
                    'type'    => 'Button',
                    'caption' => 'Show Variables for Test',
                    'onClick' => 'INSTAR_UpdateParameter($id, "TestCenter", "visible", true);'],
                [
                    'type'    => 'Button',
                    'caption' => 'Hide Variables for Test',
                    'onClick' => 'INSTAR_UpdateParameter($id, "TestCenter", "visible", false);'],
                [
                    'type'    => 'TestCenter',
                    'visible' => false]],
            [
                'type'    => 'PopupAlert',
                'name'    => 'popup',
                'visible' => false,
                'popup'   => [
                    'closeCaption' => 'Ok',
                    'items'        => [
                        [
                            'type'    => 'ValidationTextBox',
                            'visible' => false,
                            'name'    => 'popup_message',
                            'caption' => 'Response from INSTAR'],]]],];
        return $form;
    }

    /**
     * return from status.
     *
     * @return array
     */
    protected function FormStatus()
    {
        $form = [
            [
                'code'    => 101,
                'icon'    => 'inactive',
                'caption' => 'Creating instance.'],
            [
                'code'    => 102,
                'icon'    => 'active',
                'caption' => 'INSTAR accessible.'],
            [
                'code'    => 104,
                'icon'    => 'inactive',
                'caption' => 'interface closed.'],
            [
                'code'    => 201,
                'icon'    => 'inactive',
                'caption' => 'Please follow the instructions.'],
            [
                'code'    => 202,
                'icon'    => 'error',
                'caption' => 'INSTAR IP adress must not empty.'],
            [
                'code'    => 203,
                'icon'    => 'error',
                'caption' => 'No valid IP adress or host.'],
            [
                'code'    => 204,
                'icon'    => 'error',
                'caption' => 'connection to INSTAR lost.'],
            [
                'code'    => 205,
                'icon'    => 'error',
                'caption' => 'Field can not be left empty'],
            [
                'code'    => 206,
                'icon'    => 'error',
                'caption' => 'category must not be empty.'],
            [
                'code'    => 207,
                'icon'    => 'error',
                'caption' => 'email not valid.'],
            [
                'code'    => 208,
                'icon'    => 'error',
                'caption' => 'category INSTAR snapshot not set.'],
            [
                'code'    => 209,
                'icon'    => 'error',
                'caption' => 'Please select a camera model'],
            [
                'code'    => 210,
                'icon'    => 'error',
                'caption' => 'webhook field must not be empty']];

        return $form;
    }

    /**
     * send debug log.
     *
     * @param string $notification
     * @param string $message
     * @param int    $format 0 = Text, 1 = Hex
     */
    private function _debug(string $notification = null, string $message = null, $format = 0)
    {
        $this->SendDebug($notification, $message, $format);
    }

    /**
     * return incremented position.
     *
     * @return int
     */
    private function _getPosition()
    {
        $this->position++;
        return $this->position;
    }

    /***********************************************************
     * Migrations
     ***********************************************************/

    /**
     * Polyfill for IP-Symcon 4.4 and older.
     *
     * @param string $Ident
     * @param mixed  $Value
     */
    //Add this Polyfill for IP-Symcon 4.4 and older
    protected function SetValue($Ident, $Value)
    {

        if (IPS_GetKernelVersion() >= 5) {
            parent::SetValue($Ident, $Value);
        } else {
            SetValue($this->GetIDForIdent($Ident), $Value);
        }
    }
}
