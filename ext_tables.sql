# Table structure for table 'tt_content'
#
CREATE TABLE tt_content
(
    tx_t3ce_accordion_item int(11) unsigned DEFAULT '0',
);

#
# Table structure for table 'tx_site_accordion_item'
#
CREATE TABLE tx_t3ce_accordion_item
(
    tt_content int(11) unsigned DEFAULT '0',
    header     varchar(255)     DEFAULT '' NOT NULL,
    media      int(11) unsigned DEFAULT '0',
    bodytext   text,
);
