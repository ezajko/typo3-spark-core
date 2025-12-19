CREATE TABLE tt_content (
    tx_spark_card_header varchar(255) DEFAULT '' NOT NULL,
    tx_spark_card_footer varchar(255) DEFAULT '' NOT NULL,
    tx_spark_height varchar(50) DEFAULT '' NOT NULL,
    tx_spark_icon varchar(50) DEFAULT '' NOT NULL,
    tx_spark_button_text varchar(50) DEFAULT '' NOT NULL,
    tx_spark_variant varchar(50) DEFAULT '' NOT NULL,
    tx_spark_overlay tinyint(4) unsigned DEFAULT '0' NOT NULL,
    tx_spark_alignment varchar(50) DEFAULT '' NOT NULL,
    tx_spark_orientation varchar(50) DEFAULT 'vertical' NOT NULL
);
