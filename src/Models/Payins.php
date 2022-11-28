<?php

namespace App\Models;


use App\Models\Support\Traits\BindsDynamically;
use Illuminate\Database\Eloquent\Model;


class Payins extends Model
{
    /**
     * Inbox ATTRIBUTES
     * $this->attributes['id'] - int - contains the Inbox primary key (id)
     * $this->attributes['updatedindb'] - int - contains the Inbox updatedindb
     * $this->attributes['receivingdatetime'] - int - contains the Inbox receivingdatetime
     * $this->attributes['sendernumber'] - int - contains the Inbox sendernumber
     * $this->attributes['txncode'] - int - contains the Inbox txncode
     * $this->attributes['fname'] - int - contains the Inbox fname
     * $this->attributes['lname'] - int - contains the Inbox lname
     * $this->attributes['msisdn'] - int - contains the Inbox msisdn
     * $this->attributes['vendorid'] - int - contains the Inbox vendorid
     * $this->attributes['idscomm_fee'] - int - contains the Inbox idscomm_fee
     * $this->attributes['txnamt'] - int - contains the Inbox txnamt
     * $this->attributes['curr'] - int - contains the Inbox curr
     * $this->attributes['running_balance'] - int - contains the Inbox running_balance
     * $this->attributes['ref'] - int - contains the Inbox ref
     * $this->attributes['channeltype'] - int - contains the Inbox channeltype
     * $this->attributes['orderid'] - longtext - contains the Inbox orderid
     * $this->attributes['email'] - timestamp - contains the Inbox email
     * $this->attributes['mask'] - timestamp - contains the Inbox mask
     * $this->attributes['description'] - timestamp - contains the Inbox description
     * $this->attributes['created_at'] - timestamp - contains the Inbox created_at
     * $this->attributes['update_at'] - timestamp - contains the Inbox update_at
     */

    use BindsDynamically;
    public function __construct($table = null) {

        parent::__construct();

        $this->setTable($table);
    }
    protected $guarded = [];

    /**
     * @return string
     */
    public function getTable(): string
    {
        return $this->table;
    }
    /**
     * @param string $table
     */
    public function setTable($table)
    {
        $this->table = $table;
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
    public function getReceivingdatetime()
    {
        return $this->attributes['receivingdatetime'];
    }

    /**
     * @param mixed $receivingdatetime
     */
    public function setReceivingdatetime($receivingdatetime)
    {
        $this->attributes['receivingdatetime'] = $receivingdatetime;
    }

    /**
     * @return mixed
     */
    public function getSendernumber()
    {
        return $this->attributes['sendernumber'];
    }

    /**
     * @param mixed $sendernumber
     */
    public function setSendernumber($sendernumber)
    {
        $this->attributes['sendernumber'] = $sendernumber;
    }

    /**
     * @return mixed
     */
    public function getTxncode()
    {
        return $this->attributes['txncode'];
    }

    /**
     * @param mixed $txncode
     */
    public function setTxncode($txncode)
    {
        $this->attributes['txncode'] = $txncode;
    }

    /**
     * @return mixed
     */
    public function getFname()
    {
        return $this->attributes['fname'];
    }

    /**
     * @param mixed $fname
     */
    public function setFname($fname)
    {
        $this->attributes['fname'] = $fname;
    }

    /**
     * @return mixed
     */
    public function getLname()
    {
        return $this->attributes['lname'];
    }

    /**
     * @param mixed $lname
     */
    public function setLname($lname)
    {
        $this->attributes['lname'] = $lname;
    }

    /**
     * @return mixed
     */
    public function getMsisdn()
    {
        return $this->attributes['msisdn'];
    }

    /**
     * @param mixed $msisdn
     */
    public function setMsisdn($msisdn)
    {
        $this->attributes['msisdn'] = $msisdn;
    }

    /**
     * @return mixed
     */
    public function getVendorid()
    {
        return $this->attributes['vendorid'];
    }

    /**
     * @param mixed $vendorid
     */
    public function setVendorid($vendorid)
    {
        $this->attributes['vendorid'] = $vendorid;
    }

    /**
     * @return mixed
     */
    public function getIdscommFee()
    {
        return $this->attributes['idscomm_fee'];
    }

    /**
     * @param mixed $idscomm_fee
     */
    public function setIdscommFee($idscomm_fee)
    {
        $this->attributes['idscomm_fee'] = $idscomm_fee;
    }

    /**
     * @return mixed
     */
    public function getTxnamt()
    {
        return $this->attributes['txnamt'];
    }

    /**
     * @param mixed $txnamt
     */
    public function setTxnamt($txnamt)
    {
        $this->attributes['txnamt'] = $txnamt;
    }

    /**
     * @return mixed
     */
    public function getCurr()
    {
        return $this->attributes['curr'];
    }

    /**
     * @param mixed $curr
     */
    public function setCurr($curr)
    {
        $this->attributes['curr'] = $curr;
    }

    /**
     * @return mixed
     */
    public function getRunningBalance()
    {
        return $this->attributes['running_balance'];
    }

    /**
     * @param mixed $running_balance
     */
    public function setRunningBalance($running_balance)
    {
        $this->attributes['running_balance'] = $running_balance;
    }


    /**
     * @return mixed
     */
    public function getChanneltype()
    {
        return $this->attributes['channeltype'];
    }

    /**
     * @param mixed $channeltype
     */
    public function setChanneltype($channeltype)
    {
        $this->attributes['channeltype'] = $channeltype;
    }

    /**
     * @return mixed
     */
    public function getOrderid()
    {
        return $this->attributes['orderid'];
    }

    /**
     * @param mixed $orderid
     */
    public function setOrderid($orderid)
    {
        $this->attributes['orderid'] = $orderid;
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
    // public function getDemoBox()
    // {
    //     return $this->attributes[$this->getTable()];
    // }

    /**
     * @param mixed $dm
     */
    // public function setDemoBox($dm)
    // {
    //     $this->attributes[$this->getTable()] = $dm;
    // }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->attributes['description'];
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->attributes['description'] = $description;
    }

}