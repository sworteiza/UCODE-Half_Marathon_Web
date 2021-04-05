<?php
    class Heroes extends Model{
        public $id;
        public $name = "";
        public $description = "";
        public $race = "";
        public $class_role = "";

        public function find($id)
        {
            if ($this->connect->getConnectionStatus()){
                $data = mysqli_query($this->connect->connection, "SELECT * FROM " . $this->tb . " WHERE id = $id" . ";");
                if ($data) {
                    $str = mysqli_fetch_assoc($data);
                    $this->id = $str["id"];
                    $this->name = $str["name"];
                    $this->description = $str["description"];
                    $this->race = $str["race"];
                    $this->class_role = $str["class_role"];
                }
            }
        }

        public function delete()
        {
            if ($this->connect->getConnectionStatus()) {
                $data = mysqli_query($this->connect->connection, "SELECT id FROM " . $this->tb . " WHERE id = " . $this->id . ";");
                $str = mysqli_fetch_assoc($data);
                if (!$str["name"]) {
                    mysqli_query($this->connect->connection, "DELETE name FROM " . $this->tb . " WHERE id = " . $this->id . ";");
                    $this->id = null;
                    $this->name = null;
                    $this->description = null;
                    $this->race = null;
                    $this->class_role = null;
                }
            }
        }

        public function save()
        {
            if ($this->connection->getConnectionStatus()) {
                $data = mysqli_query($this->connection->connection, "SELECT id FROM " . $this->tb . " WHERE id = " . $this->id . ";");
                echo $data->field_count;
                $str = mysqli_fetch_assoc($data);
                if (!$str["name"]) {
                    echo 'INSERT INTO heroes (id, name, description, race, class_role)
                    VALUES ("' . $this->id . '", "' . $this->name . '", "' . $this->description . '", "' . $this->race . '", "' . $this->class_role . '");';
                    mysqli_query($this->connection->connection, 'INSERT INTO heroes (id, name, description, race, class_role)
                        VALUES ("' . $this->id . '", "' . $this->name . '", "' . $this->description . '", "' . $this->race . '", "' . $this->class_role . '");');
                }
                else {
                    mysqli_query($this->connection->connection, "UPDATE heroes SET id = " . $this->id . ", name = '" . $this->name . "', description = '" . $this->description . "', race = '" . $this->race . "', class_role = '" . $this->class_role . "'  WHERE id = " . $this->id . ";");
                }
            }
        }
    }

?>