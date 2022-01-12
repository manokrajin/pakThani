<?php

namespace App\Models;

use CodeIgniter\Model;

class CartDetailsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'cart_details';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function addItemToCart($cartID, $quantity, $variantID) {
        $data = [
            'cart_id' => $cartID,
            'quantity'  => $quantity,
            'variant_id'  => $variantID,
        ];
        
        $this->db
            ->table("cart_details")
            ->insert($data);
    }
}