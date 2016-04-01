<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of CancelCauseEnum
 *
 * @author obretau
 */


abstract class CancelCauseEnum {
    const REQUESTED_BY_CLIENT = 0;
    const MAJOR_FORCE = 1;
    const CONDITION_BREACH = 2;
}