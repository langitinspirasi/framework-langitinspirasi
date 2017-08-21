<?php
class Model{

    public $db;
    protected $tableName;
	protected $tableName2;

    public function __construct(){
        $this->db = new Database();
    }

    public function model($modelName){
        require_once ROOT . LIF . 'models' . LIF . $modelName . 'Model.php';
        $className = ucfirst($modelName) . 'Model';
        $this->$modelName = new $className();
    }
	
	/** Fungsi Get **/
    public function get($params = "") {

        $sql = "SELECT * FROM " . $this->tableName;

        if(is_array($params)) {
			
            if(isset($params["limit"])) {

                $sql .= " LIMIT " . $params["limit"];
            }
        }
		
        $this->db->query($sql);	

        return $this->db->execute()->toObject();
    }
	
	/** Fungsi GetDesc **/
    public function getDesc($order = array(), $params = array()) {

        $sql = "SELECT * FROM " . $this->tableName;

        if(is_array($params)) {
			
            if(isset($params["limit"])) {
              
				$sql .= " ORDER BY ".$order['field']." ".$order['order']." LIMIT ".$params["limit"];
            }
        }
		
        $this->db->query($sql);	

        return $this->db->execute()->toObject();
    }
	
	/** Fungsi getWhereDesc **/   
	public function getWhereDesc($where = array()) {
		
		$headline = "";
		
		foreach($where as  $key => $value){			
			
			$headline .= $key." = '". $value. "' AND ";
			
		}		
		
		$headline = rtrim($headline," AND ");
		
        $sql = "SELECT * FROM " . $this->tableName;		
		
        if(is_array($where)) {
			
            $sql .= " WHERE ".$headline;
			
        }		
		
        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }
	
	/** Fungsi Rows **/
    public function rows() {
		
        return $this->db->getAll($this->tableName)->numRows();
		
    }
	
	/** Fungsi GetWhere **/
  //  public function getWhere($params) {

   //     return $this->db->getWhere($this->tableName, $params)->toObject();
  //  }
	
	/** Fungsi getWhere **/
	public function getWhere($where = array()) {
		
		$headline = "";
		
		foreach($where as  $key => $value){			
			
			$headline .= $key." = '". $value. "' AND ";
			
		}		
		
		$headline = rtrim($headline," AND ");
		
        $sql = "SELECT * FROM " . $this->tableName;		
		
        if(is_array($where)) {
			
            $sql .= " WHERE ".$headline;
			
        }		
		
        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }
	
	/** Fungsi GetWhereRows **/
    public function getWhereRows($params) {

        return $this->db->getWhere($this->tableName, $params)->numRows();
    }

	/** Fungsi Delete **/
    public function delete($where = array()) {

        return $this->db->delete($this->tableName, $where);
    }
	
	/** Fungsi GetJoin **/
    public function getJoin($tableJoin, $params, $join = "JOIN", $where = "") {

        $sql = "SELECT * FROM " . $this->tableName;

        if(is_array($tableJoin)) {

            foreach($tableJoin as $table) {

                $sql .= " ". $join ." " . $table . " ";
            }
			
        }else {
            $sql .= " ". $join ." " . $tableJoin . " ";
        }

        foreach($params as $key => $value) {

            $sql .=" ON " . $key . " = " . $value . " ";
        }

        if($where && is_array($where)) {

            $sql .= " WHERE ";
            $i = 0;

            foreach($where as $key => $value) {

                $sql .= " " . $key . "='" . $value . "' ";

                $i++;
                if($i < count($where)) {

                    $sql .=" AND ";
                }
            }

        }
		
        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }
	
	/** Fungsi GetJoinLimit **/
    public function GetJoinLimit($tableJoin, $params, $join = "JOIN", $where = "", $limit = array()) {

        $sql = "SELECT * FROM " . $this->tableName; 

        if(is_array($tableJoin)) {

            foreach($tableJoin as $table) {

                $sql .= " ". $join ." " . $table . " "; 			
				 
            }
			
        }else {
            $sql .= " ". $join ." " . $tableJoin . " ";
        }

        foreach($params as $key => $value) {

            $sql .=" ON " . $key . " = " . $value . " "; 
        }

        if($where && is_array($where)) {

            $sql .= " WHERE "; 
			
            $i = 0;

            foreach($where as $key => $value) {

                $sql .= " " . $key . "='" . $value . "' LIMIT ".$limit["limit"]; 

                $i++;
                if($i < count($where)) {

                    $sql .=" AND ";
                }
            }

        }
		
        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }
	
	/** Fungsi Insert **/
    public function insert($data = array()) {

        $insert = $this->db->insert($this->tableName, $data);

        if($insert) {
            return true;
        }

        return false;
    }
	
	/** Fungsi Update **/
    public function update($data = array(), $where = array()) {

        $update = $this->db->update($this->tableName, $data, $where);

        if($update) {
            return true;
        }

        return false;
    }	
	
	/** Fungsi Search **/
	public function search($where = array(), $order= array(), $params = "") {
		
		$keyword = "";
		
		foreach($where as  $key => $value){
			
			$keyword .= $key." LIKE '". $value. "' OR ";
			
		}
		
		$keyword = rtrim($keyword," OR ");
			
        $sql = "SELECT * FROM " . $this->tableName;		

        if(is_array($where)) {
			
            $sql .= " WHERE ".$keyword." ORDER BY ".$order['field']." ".$order['order']." LIMIT ".$params["limit"];
			
        }
		
        $this->db->query($sql);

        return $this->db->execute()->toFetch();
    }
		
	/** Fungsi Get Order By **/
	public function getOrderBy($where = array(), $order= array(), $params = "") {
		
		$headline = "";
		
		foreach($where as  $key => $value){
			
			//$headline .= $key." = '". $value. "'";
			$headline .= $key." = '". $value. "' AND ";
			
		}		
		
		$headline = rtrim($headline," AND ");
		
        $sql = "SELECT * FROM " . $this->tableName;		
		
        if(is_array($where)) {
			
            $sql .= " WHERE ".$headline." ORDER BY ".$order['field']." ".$order['order']." LIMIT ".$params["limit"];
			
        }		
		
        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }
	
	/** Fungsi Get Prev **/
	public function getPrev($where = array(), $order= array(), $params = "") {
		
		$headline = "";
		
		foreach($where as  $key => $value){
			
			$headline .= $key." < '". $value. "'";
			
		}		
			
        $sql = "SELECT * FROM " . $this->tableName;		
		
        if(is_array($where)) {
			
            $sql .= " WHERE ".$headline." ORDER BY ".$order['field']." ".$order['order']." LIMIT ".$params["limit"];
			
        }		
		
        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }
	
	/** Fungsi Get Next **/
	public function getNext($where = array(), $order= array(), $params = "") {
		
		$headline = "";
		
		foreach($where as  $key => $value){
			
			$headline .= $key." > '". $value. "'";
			
		}		
			
        $sql = "SELECT * FROM " . $this->tableName;		
		
        if(is_array($where)) {
			
            $sql .= " WHERE ".$headline." ORDER BY ".$order['field']." ".$order['order']." LIMIT ".$params["limit"];
			
        }		
		
        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }
	
	/** Fungsi Get OR **/
	public function getOr($where = array(), $order= array(), $params = "") {
		
		$kategori = "";
		
		foreach($where as  $key => $value){
			
			$kategori .= $key." = '". $value. "' OR ";
			
		}		
		
		$kategori = rtrim($kategori," OR ");
		
        $sql = "SELECT * FROM " . $this->tableName;		
		
        if(is_array($where)) {
			
            $sql .= " WHERE ".$kategori." ORDER BY ".$order['field']." ".$order['order']." LIMIT ".$params["limit"];
			
        }		
		
        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }
	
	
	/** Fungsi GetJoinPageWhere **/
    public function getJoinPageWhere($tableJoin, $params, $join = "JOIN", $where = "", $order= array(), $posisi = array()) {

        $sql = "SELECT * FROM " . $this->tableName;
		
        if(is_array($tableJoin)) {

            foreach($tableJoin as $table) {

                $sql .= " ". $join ." " . $table . " ";
            }
			
        }else {
            $sql .= " ". $join ." " . $tableJoin . " ";
        }
		
        foreach($params as $key => $value) {

            $sql .=" ON " . $key . " = " . $value . " ";
        }

        if($where && is_array($where)) {

            $sql .= " WHERE ";
            $i = 0;

            foreach($where as $key => $value) {

                $sql .= " " . $key . "='" . $value . "' ORDER BY ".$order['field']." ".$order['order']." LIMIT ".$posisi["limit"] . ", ".$posisi["batas"];

                $i++;
                if($i < count($where)) {

                    $sql .=" AND ";
                }
            }
			
        }
		
        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }
	
	/** Fungsi GetJoinPage **/
    public function getJoinPage($tableJoin, $params, $join = "JOIN",  $order= array(), $posisi = array()) {

        $sql = "SELECT * FROM " . $this->tableName;
		
        if(is_array($tableJoin)) {

            foreach($tableJoin as $table) {

                $sql .= " ". $join ." " . $table . " ";
            }
			
        }else {
			
            $sql .= " ". $join ." " . $tableJoin . " ";
			
        }
		
        foreach($params as $key => $value) {

            $sql .=" ON " . $key . " = " . $value . " ";
        }       

        $sql .= "ORDER BY ".$order['field']." ".$order['order']." LIMIT ".$posisi["limit"] . ", ".$posisi["batas"];
	
        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }
	
}
?>