<?php


/**
 * BaseIcingaContactnotifications
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @property integer $contactnotification_id
 * @property integer $instance_id
 * @property integer $notification_id
 * @property integer $contact_object_id
 * @property timestamp $start_time
 * @property integer $start_time_usec
 * @property timestamp $end_time
 * @property integer $end_time_usec
 *
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseIcingaContactnotifications extends Doctrine_Record {
    public function setTableDefinition() {
        $prefix = Doctrine_Manager::getInstance()->getConnection(IcingaDoctrineDatabase::CONNECTION_ICINGA)->getPrefix();
        $this->setTableName($prefix.'contactnotifications');
        $this->hasColumn('contactnotification_id', 'integer', 4, array(
                             'type' => 'integer',
                             'length' => 4,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => true,
                             'autoincrement' => true,
                         ));
        $this->hasColumn('instance_id', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('notification_id', 'integer', 4, array(
                             'type' => 'integer',
                             'length' => 4,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('contact_object_id', 'integer', 4, array(
                             'type' => 'integer',
                             'length' => 4,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('start_time', 'timestamp', null, array(
                             'type' => 'timestamp',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0000-00-00 00:00:00',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('start_time_usec', 'integer', 4, array(
                             'type' => 'integer',
                             'length' => 4,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('end_time', 'timestamp', null, array(
                             'type' => 'timestamp',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0000-00-00 00:00:00',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('end_time_usec', 'integer', 4, array(
                             'type' => 'integer',
                             'length' => 4,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
    }

    public function setUp() {
        $this->hasOne('IcingaContacts as contact', array(
                          'local' => 'contact_object_id',
                          'foreign' => 'contact_id'
                      ));
        $this->hasOne('IcingaInstances as instance', array(
                          'local' => 'instance_id',
                          'foreign' => 'instance_id'
                      ));
        $this->hasOne('IcingaNotifications as notification', array(
                          'local' => 'notification_id',
                          'foreign' => 'notification_id'
                      ));
        $this->hasOne('IcingaContactnotificationmethods as notificationmethod', array(
                          'local' => 'contactnotification_id',
                          'foreign' => 'contactnotification_id'
                       
                      ));

        parent::setUp();

    }
}