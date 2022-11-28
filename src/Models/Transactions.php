<?php

namespace App\Models;


use App\Models\Support\Traits\BindsDynamically;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{

    protected $table = "transactions";
    protected $hidden = ['id','uuid','created_at','order_id','updated_at'];

    /**
     * @return string
     */
    public function getTable(): string
    {
        return $this->table;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->attributes['id'];
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    /**
     * @return mixed
     */
    public function getUuid()
    {
        return $this->attributes['uuid'];
    }

    /**
     * @param mixed $uuid
     */
    public function setUuid($uuid)
    {
        $this->attributes['uuid'] = $uuid;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->attributes['order_id'];
    }
    /**
     * @param mixed $orderid
     */
    public function setOrderId($orderid){
        $this->attributes['order_id'] = $orderid;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->attributes['email'];
    }
    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->attributes['email'] = $email;
    }
    /**
     * @return mixed
     */
    public function getServiceId()
    {
        return $this->attributes['service_id'];
    }
    /**
     * @param mixed $serviceId
     */
    public function setServiceId($serviceId)
    {
        $this->attributes['service_id'] = $serviceId;
    }
    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->attributes['amount'];
    }
    /**
     * @param mixed $amnt
     */
    public function setAmount($amnt)
    {
        $this->attributes['amount'] = $amnt;
    }
    /**
     * @return mixed
     */
    public function getPromoCode()
    {
        return $this->attributes['promo_code'];
    }
    /**
     * @param mixed $prm_cd
     */
    public function setPromoCode($prm_cd)
    {
        $this->attributes['promo_code'] = $prm_cd;
    }
    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->attributes['currency'];
    }
    /**
     * @param mixed $currency
     */
    public function setCurrency($currency)
    {
        $this->attributes['currency'] = $currency;
    }
    /**
     * @return mixed
     */
    public function getBundleId()
    {
        return $this->attributes['bundle_id'];
    }
    /**
     * @param mixed $bd_id
     */
    public function setBundleId($bd_id)
    {
        $this->attributes['bundle_id'] = $bd_id;
    }
    /**
     * @return mixed
     */
    public function getAccount()
    {
        return $this->attributes['account'];
    }
    /**
     * @param mixed $accnt
     */
    public function setAccount($accnt)
    {
        $this->attributes['account'] = $accnt;
    }
    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->attributes['phone'];
    }
    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->attributes['phone'] = $phone;
    }
    /**
     * @return mixed
     */
    public function getTransactionHash()
    {
        return $this->attributes['transaction_hash'];
    }
    /**
     * @param mixed $txn
     */
    public function setTransactionHash($txn)
    {
        $this->attributes['transaction_hash'] = $txn;
    }
    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->attributes['country'];
    }
    /**
     * @param mixed $cnt
     */
    public function setCountry($cnt)
    {
        $this->attributes['country'] = $cnt;
    }
    /**
     * @return mixed
     */
    public function getPgwStatus()
    {
        return $this->attributes['pgw_stage_status'];
    }
    /**
     * @param mixed $pgw
     */
    public function setPgwStatus($pgw)
    {
        $this->attributes['pgw_stage_status'] = $pgw;
    }
    /**
     * @return mixed
     */
    public function getBillingStatus()
    {
        return $this->attributes['billing_stage_status'];
    }
    /**
     * @param mixed $bil
     */
    public function setBillingStatus($bil)
    {
        $this->attributes['billing_stage_status'] = $bil;
    }
    /**
     * @return mixed
     * 
     */
    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->attributes['created_at'] = $created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->attributes['updated_at'] = $updated_at;
    }

}