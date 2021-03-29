<?php

class AlternativeRequirementDocumentAssetModel extends CI_Model
{
    private $_table = "alternative_requirement_document_asset";

    public function get_alternative_accessibility($id)
    {
        $this->db->where('alternative_id', $id);
    	return $query = $this->db->get($this->_table);
    }

    public function insert($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function get_data($id)
    {
        $this->db->where('id', $id);
        return $query = $this->db->get($this->_table);
    }

    public function get_data_by_alt($id)
    {
        $this->db->where('alternative_id', $id);
        return $query = $this->db->get($this->_table);
    }    

    public function get_data_by_email($email)
    {
        $this->db->where('email', $email);
        return $query = $this->db->get($this->_table);
    }    

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->_table, $data);
    }    

    public function destroy($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->_table);
    }            

    public function count_alternative()
    {        
        return $this->db->count_all_results($this->_table);
    }

    public function destroy_by_alternative($id)
    {
        $this->db->where('alternative_id', $id);
        return $this->db->delete($this->_table);
    }      
    
    public function insert_rd($alternative_id, $filename)
    {
        if($filename!='' ){
            $filename1 = explode(',',$filename);
             foreach($filename1 as $file){
                  $file_data = array(
                    'alternative_id' => $alternative_id,
                    'image' => $file
                    );
                  $this->db->insert('alternative_requirement_document_asset', $file_data);
           }
        }
    }

    public function get_alternative_value($id)
    {
    	return $this->db->query("SELECT alternative_requirement_document_asset.*, alternative.alternative_code AS alternative_code FROM alternative_requirement_document_asset JOIN alternative ON alternative_requirement_document_asset.alternative_id = alternative.id  WHERE alternative_requirement_document_asset.alternative_id = $id");
    }        
}