<?php

class QodrCrudMuseum extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $nama;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=false)
     */
    public $jenis;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $jumlah;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $alamat;

    /**
     *
     * @var integer
     * @Column(type="integer", length=15, nullable=false)
     */
    public $no_hp;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("qodr");
        $this->setSource("qodr_crud_museum");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'qodr_crud_museum';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrCrudMuseum[]|QodrCrudMuseum|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrCrudMuseum|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
