<?php


namespace Rest\Monitoring;

use Rest\Monitoring\Orm\MonitoringProfilesTable;


class Profile
{

    public function getList()
    {        $result=MonitoringProfilesTable::GetList(array(),
        array('ID' =>ASC,
            'NAME' =>ASC,
        ));
        var_dump($result);
    }

    public function getById($id)
    {
        $result = MonitoringProfilesTable::GetList(array());
        if ($object = $result->GetNext()) {
            $arFields = $object->GetFields();
            $id = MonitoringProfilesTable::GetByID($arFields['ID']);
            echo $id['ID'];
        }
    }

    public function edit($id, array $parameters)
    {
        $result = MonitoringProfilesTable::update($id, $parameters);
        if (!$result->isSuccess())
        {
            $errors = $result->getErrorMessages();
        }

    }
    public function add(array $parameters)
{
    $result = MonitoringProfilesTable::add($parameters);

    if ($result->isSuccess())
    {
        $id = $result->getId();
    }else{
        $errors = $result->getErrorMessages();
    }

}

    public function delete($id)
{
    $result = MonitoringProfilesTable::delete($id);
    if (!$result->isSuccess())
    {
        $error= $result->getErrorMessages();
    }
}

}