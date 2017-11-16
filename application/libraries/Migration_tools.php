<?php
class Migration_tools {
    private $db;
    public function __construct($params)
    {
        $this->db = $params["db"];
    }
    //------------------------------------------------------------------------------------------------------------------
    public function _add_foreign_key($table, $local_key, $foreign_table, $foreign_key = NULL, $legacy = false)
    {
        $fkTemplate = $legacy === false
            ? "ALTER TABLE `%s` ADD CONSTRAINT `fk_" . $table . "_" . $local_key . "` FOREIGN KEY(`%s`) REFERENCES %s(`%s`) ON DELETE CASCADE ON UPDATE CASCADE"
            : "ALTER TABLE `%s` ADD FOREIGN KEY(`%s`) REFERENCES %s(`%s`) ON DELETE CASCADE ON UPDATE CASCADE";

        $foreign_key = $foreign_key !== NULL ? $foreign_key : $local_key;
        $fkQuery = sprintf($fkTemplate, $table, $local_key, $foreign_table, $foreign_key);

        $this->db->query($fkQuery);
    }

    //------------------------------------------------------------------------------------------------------------------
    public function _drop_foreign_key($table, $fkIndex = null, $legacy = false)
    {
        $fkQuery = $legacy === false
            ? "ALTER TABLE " . $table . " DROP FOREIGN KEY fk_" . $table . "_" . $fkIndex . " ;"
            : "ALTER TABLE " . $table . " DROP FOREIGN KEY " . $table . "_ibfk_" . $fkIndex . " ;";

        $this->db->query($fkQuery);
    }

    //------------------------------------------------------------------------------------------------------------------
    public function _enable_key_checks()
    {
        $enable_key_checks = "SET FOREIGN_KEY_CHECKS = 1;";
        $this->db->query($enable_key_checks);
    }

    //------------------------------------------------------------------------------------------------------------------
    public function _disable_key_checks()
    {
        $disable_key_checks = "SET FOREIGN_KEY_CHECKS = 0;";
        $this->db->query($disable_key_checks);
    }
}