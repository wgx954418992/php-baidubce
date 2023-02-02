<?php
/*
* Copyright 2017 Baidu, Inc.
*
* Licensed under the Apache License, Version 2.0 (the "License"); you may not
* use this file except in compliance with the License. You may obtain a copy of
* the License at
*
* Http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
* WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
* License for the specific language governing permissions and limitations under
* the License.
*/

namespace BaiduBce\Services\Eip\model;

class Billing
{
    var $paymentTiming;
    var $billingMethod;
    var $reservation;

    /**
     * Billing information.
     *
     * @param string $paymentTiming
     *          The pay time of the payment, default value 'Postpaid'
     *
     * @param string $billingMethod
     *          The way of eip charging, default value 'ByBandwidth'
     *
     * @param int $reservationLength
     *          purchase length
     *
     * @param string $reservationTimeUnit
     *          time unit of purchasing，default 'Month'
     */
    function __construct($paymentTiming='Postpaid', $billingMethod='ByBandwidth', $reservationLength=null, $reservationTimeUnit='Month')
    {
        if ($paymentTiming !== null) {
            $this->paymentTiming = $paymentTiming;
        }
        $this->billingMethod = $billingMethod;
        $this->reservation = new Reservation($reservationLength, $reservationTimeUnit);
    }
}