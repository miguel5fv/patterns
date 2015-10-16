<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 16/10/2015
 * Time: 11:35
 */

interface ObserverInterface
{
    public function update(SubjectInterface $subject);
}