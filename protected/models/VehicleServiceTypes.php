<?php

class VehicleServiceTypes extends CActiveRecord {

    public $strTable = 'vehicle_service_types';

    public function tableName() {
        return $this->strTable;
    }

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @author Digital Today
     * @param integer $intStatus
     * @param integer $intVehicleType 
     * @return array It will return all vehicle service types
     */
    public static function getServiceTypes($intStatus = 1, $intVehicleType, $intSign = NULL) {
        $arrVehicleServiceTypes = array();
        $objectDB = Yii::app()->db->createCommand();
        $objectDB->select('st.id,st.name,st.code,st.icon_path');
        $objectDB->from('vehicle_service_types as vst');
        $objectDB->join('service_types as st', 'st.id = vst.service_types_id');
        if (empty($intSign)) {
            $objectDB->where('vst.status=:status and vst.vehicle_types_id=:vehicleTypeId', array(':status' => $intStatus, ':vehicleTypeId' => $intVehicleType));
        } else {
            $objectDB->where('vst.status=:status and vst.vehicle_types_id=:vehicleTypeId and st.id!=:serviceTypeId', array(':status' => $intStatus, ':vehicleTypeId' => $intVehicleType, ':serviceTypeId' => 4));
        }

        $arrVehicleServiceTypes = $objectDB->queryAll();
        return $arrVehicleServiceTypes;
    }

}
