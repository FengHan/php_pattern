<?php
namespace Vendor;

interface IUserProxy
{
    function getUserName($id);
    function setUserName($id, $name);
}