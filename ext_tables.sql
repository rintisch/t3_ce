# Table structure for table 'tt_content'
#
CREATE TABLE tt_content
(
    tx_t3ce_accordion_item int(11) unsigned DEFAULT '0',
    tx_t3ce_carousel_item  int(11) unsigned DEFAULT '0',
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


#
# Table structure for table 'tx_t3ce_carousel_item'
#
CREATE TABLE tx_t3ce_carousel_item
(
    tt_content               int(11) unsigned    DEFAULT '0',
    item_type                varchar(255)        DEFAULT ''       NOT NULL,
    header                   varchar(255)        DEFAULT ''       NOT NULL,
    header_layout            tinyint(3) unsigned DEFAULT '1'      NOT NULL,
    header_position          varchar(255)        DEFAULT 'center' NOT NULL,
    header_class             varchar(255)        DEFAULT ''       NOT NULL,
    subheader                varchar(255)        DEFAULT ''       NOT NULL,
    subheader_layout         tinyint(3) unsigned DEFAULT '2'      NOT NULL,
    subheader_class          varchar(255)        DEFAULT ''       NOT NULL,
    nav_title                varchar(255)        DEFAULT ''       NOT NULL,
    button_text              varchar(255)        DEFAULT ''       NOT NULL,
    bodytext                 text,
    image                    int(11) unsigned    DEFAULT '0',
    link                     varchar(1024)       DEFAULT ''       NOT NULL,
    text_color               varchar(255)        DEFAULT ''       NOT NULL,
    background_color         varchar(255)        DEFAULT ''       NOT NULL,
    background_image         int(11) unsigned    DEFAULT '0',
    background_image_options mediumtext,
);
