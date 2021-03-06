<?php

class HireAMechanicEmail extends CActiveRecord {

    public $strTable = 'hire_a_mechanic_email';

    public function tableName() {
        return $this->strTable;
    }

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @author Digital Today
     * @param array $arrHireEmail
     * @return integer It will return last inserted live tracking 
     */
    public static function create($arrHireEmail) {
        $intHireAMechanic = NULL;
        $objHireAMechanic = new HireAMechanicEmail();
        $objHireAMechanic->hire_a_mechanic_id = $arrHireEmail['hire_a_mechanic_id'];
        $objHireAMechanic->email = $arrHireEmail['email'];
        $objHireAMechanic->status = $arrHireEmail['status'];
        $objHireAMechanic->is_primary = $arrHireEmail['is_primary'];
        if ($objHireAMechanic->save()) {
            $intHireAMechanic = $objHireAMechanic->id;
        }
        return $intHireAMechanic;
    }

}
