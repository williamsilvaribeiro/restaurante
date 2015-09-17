<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Fornecedor_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }


    function get($table, $fields, $where = '', $perpage = 0, $start = 0, $one = false, $array = 'array')
    {

        $this->db->select($fields);
        $this->db->from($table);
        $this->db->limit($perpage, $start);
        $this->db->order_by('idMorador', 'desc');

        if ($where) {
            $this->db->where($where);
        }

        $query = $this->db->get();

        $result = !$one ? $query->result() : $query->row();
        return $result;
    }

    function getById($id)
    {
        //$this->db->join('fotos','fotos.membro_id = membros.idMembro');
        $this->db->where('idMorador', $id);
        $this->db->limit(1);
        return $this->db->get('morador')->row();
    }

    function getMorador($id)
    {
        $this->db->join('morador as proprietario', 'morador.proprietario_id = proprietario.idMorador', 'left');
        $this->db->where('idMorador', $id);
        $this->db->limit(1);
        return $this->db->get('morador')->row();
    }


    function add($table, $data, $returnId = false)
    {
        $this->db->insert($table, $data);
        if ($this->db->affected_rows() == '1') {
            if ($returnId == true) {
                return $this->db->insert_id($table);
            }
            return TRUE;
        }

        return FALSE;
    }

    function addFotos($table, $data, $returnId = false)
    {
        $this->db->insert($table, $data);
        if ($this->db->affected_rows() == '1') {
            if ($returnId == true) {
                return $this->db->insert_id($table);
            }
            return TRUE;
        }

        return FALSE;
    }

    function edit($table, $data, $fieldID, $ID)
    {
        $this->db->where($fieldID, $ID);
        $this->db->update($table, $data);

        if ($this->db->affected_rows() >= 0) {
            return TRUE;
        }

        return FALSE;
    }

    function delete($table, $fieldID, $ID)
    {
        $this->db->where($fieldID, $ID);
        $this->db->delete($table);
        if ($this->db->affected_rows() == '1') {
            return TRUE;
        }

        return FALSE;
    }

    function count($table)
    {
        return $this->db->count_all($table);
    }

    function buscarOutrosDadosMorador($table, $fields, $idMorador, $one = false)
    {
        $this->db->select($fields);
        $this->db->from($table);
        $this->db->where('morador_id', $idMorador);

        $query = $this->db->get();

        $result = !$one ? $query->result() : $query->row();
        return $result;
    }


    public function autoCompleteMorador($q)
    {
        $this->db->select('*');
        $this->db->limit(5);
        $this->db->like('nm_morador', $q);
        $query = $this->db->get('morador');
        if ($query->num_rows > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = array('label' => $row['nm_morador'] . ' | AP: ' . $row['nr_apartamento'] . ' | Bloco: ' . $row['blocoApartamento'], 'id' => $row['idMorador']);
            }
            echo json_encode($row_set);
        }
    }


    public function autoCompleteProduto($q)
    {

        $this->db->select('*');
        $this->db->limit(5);
        $this->db->like('descricao', $q);
        $query = $this->db->get('produtos');
        if ($query->num_rows > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = array('label' => $row['descricao'] . ' | Preço: R$ ' . $row['precoVenda'] . ' | Estoque: ' . $row['estoque'], 'estoque' => $row['estoque'], 'id' => $row['idProdutos'], 'preco' => $row['precoVenda']);
            }
            echo json_encode($row_set);
        }
    }

    public function autoCompleteUsuario($q)
    {
        echo 'aqui';
        $this->db->select('*');
        $this->db->limit(5);
        $this->db->like('nome', $q);
        $this->db->where('situacao', 1);
        $query = $this->db->get('usuarios');
        if ($query->num_rows > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = array('label' => $row['nome'] . ' | Telefone: ' . $row['telefone'], 'id' => $row['idUsuarios']);
            }
            echo json_encode($row_set);
        }
    }

    public function autoCompleteImovel($q)
    {

        $this->db->select('*');
        $this->db->limit(5);
        $this->db->like('CODIMOVEL', $q);
        $this->db->where('STATUSIMOVEL', "Disponível");
        $query = $this->db->get('imoveis');
        if ($query->num_rows > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = array('label' => $row['CODIMOVEL'] .
                    ' | ' . $row['TIPOIMOVEL'] .
                    ' | ' . $row['ENDERECOIMOVEL'] .
                    ' - ' . $row['COMPENDIMOVEL'] .
                    ' | ' . $row['BAIRROIMOVEL'] .
                    ' | ' . $row['CIDADEIMOVEL'] .
                    ' | ' . $row['CEPIMOVEL']
                , 'id' => $row['CODIMOVEL']);
            }
            echo json_encode($row_set);
        }
    }

    function atualizarImovel($table, $data, $fieldID, $ID)
    {
        $this->db->where($fieldID, $ID);
        $this->db->update($table, $data);

        if ($this->db->affected_rows() >= 0) {
            return TRUE;
        }

        return FALSE;
    }


}

/* End of file vendas_model.php */
/* Location: ./application/models/vendas_model.php */