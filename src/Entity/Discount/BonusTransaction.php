<?php

namespace MoySklad\Entity\Discount;

use MoySklad\Entity\MetaEntity;
use JMS\Serializer\Annotation\Type;

class BonusTransaction extends MetaEntity
{
    /**
     * @Type("string")
     */
    public $name;

    /**
     * @Type("string")
     */
    public $externalCode;

    /**
     * @Type("string")
     */
    public $transactionType;

    /**
     * @Type("int")
     */
    public $bonusValue;

    /**
     * @Type("bool")
     */
    public $shared;

    /**
     * @Type("bool")
     */
    public $applicable;

    /**
     * @Type("DateTime<'Y-m-d H:i:s.v'>")
     */
    public $updated;

    /**
     * @Type("DateTime<'Y-m-d H:i:s.v'>")
     */
    public $created;

    /**
     * @Type("DateTime<'Y-m-d H:i:s.v'>")
     */
    public $moment;

    /**
     * @Type("MoySklad\Entity\Agent\Employee")
     */
    public $owner;

    /**
     * @Type("MoySklad\Entity\Agent\Counterparty")
     */
    public $agent;

    /**
     * @Type("MoySklad\Entity\MetaEntity") //@todo add Document retaildemand type
     */
    public $parentDocument;

    /**
     * @Type("MoySklad\Entity\Discount\BonusProgram")
     */
    public $bonusProgram;
}
