<?php

protected function getListQuery()
{
    $db = $this->getDatabase();
    $query = $db->getQuery(true);
    
    // Select statement
    $query->select('*')
        ->from($db->quoteName('#__planets', 'a'));
        
    // Order by
    $query->order('a.id DESC');
    return $query;
}