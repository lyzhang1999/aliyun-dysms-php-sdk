<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Aliyun\Api\Dyvms\Request\V20170525;
use Aliyun\Core\RpcAcsRequest;

class SmartCallRequest extends RpcAcsRequest
{
    function  __construct()
    {
        parent::__construct("Dyvmsapi", "2017-05-25", "SmartCall");
        $this->setMethod("POST");
    }

    private  $speed;

    private  $voiceCode;

    private  $earlyMediaAsr;

    private  $dynamicId;

    private  $actionCodeBreak;

    private  $voiceCodeParam;

    private  $ownerId;

    private  $muteTime;

    private  $outId;

    private  $asrModelId;

    private  $calledNumber;

    private  $resourceOwnerAccount;

    private  $volume;

    private  $recordFlag;

    private  $calledShowNumber;

    private  $resourceOwnerId;

    private  $pauseTime;

    public function getSpeed() {
        return $this->speed;
    }

    public function setSpeed($speed) {
        $this->speed = $speed;
        $this->queryParameters["Speed"]=$speed;
    }

    public function getVoiceCode() {
        return $this->voiceCode;
    }

    public function setVoiceCode($voiceCode) {
        $this->voiceCode = $voiceCode;
        $this->queryParameters["VoiceCode"]=$voiceCode;
    }

    public function getEarlyMediaAsr() {
        return $this->earlyMediaAsr;
    }

    public function setEarlyMediaAsr($earlyMediaAsr) {
        $this->earlyMediaAsr = $earlyMediaAsr;
        $this->queryParameters["EarlyMediaAsr"]=$earlyMediaAsr;
    }

    public function getDynamicId() {
        return $this->dynamicId;
    }

    public function setDynamicId($dynamicId) {
        $this->dynamicId = $dynamicId;
        $this->queryParameters["DynamicId"]=$dynamicId;
    }

    public function getActionCodeBreak() {
        return $this->actionCodeBreak;
    }

    public function setActionCodeBreak($actionCodeBreak) {
        $this->actionCodeBreak = $actionCodeBreak;
        $this->queryParameters["ActionCodeBreak"]=$actionCodeBreak;
    }

    public function getVoiceCodeParam() {
        return $this->voiceCodeParam;
    }

    public function setVoiceCodeParam($voiceCodeParam) {
        $this->voiceCodeParam = $voiceCodeParam;
        $this->queryParameters["VoiceCodeParam"]=$voiceCodeParam;
    }

    public function getOwnerId() {
        return $this->ownerId;
    }

    public function setOwnerId($ownerId) {
        $this->ownerId = $ownerId;
        $this->queryParameters["OwnerId"]=$ownerId;
    }

    public function getMuteTime() {
        return $this->muteTime;
    }

    public function setMuteTime($muteTime) {
        $this->muteTime = $muteTime;
        $this->queryParameters["MuteTime"]=$muteTime;
    }

    public function getOutId() {
        return $this->outId;
    }

    public function setOutId($outId) {
        $this->outId = $outId;
        $this->queryParameters["OutId"]=$outId;
    }

    public function getAsrModelId() {
        return $this->asrModelId;
    }

    public function setAsrModelId($asrModelId) {
        $this->asrModelId = $asrModelId;
        $this->queryParameters["AsrModelId"]=$asrModelId;
    }

    public function getCalledNumber() {
        return $this->calledNumber;
    }

    public function setCalledNumber($calledNumber) {
        $this->calledNumber = $calledNumber;
        $this->queryParameters["CalledNumber"]=$calledNumber;
    }

    public function getResourceOwnerAccount() {
        return $this->resourceOwnerAccount;
    }

    public function setResourceOwnerAccount($resourceOwnerAccount) {
        $this->resourceOwnerAccount = $resourceOwnerAccount;
        $this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
    }

    public function getVolume() {
        return $this->volume;
    }

    public function setVolume($volume) {
        $this->volume = $volume;
        $this->queryParameters["Volume"]=$volume;
    }

    public function getRecordFlag() {
        return $this->recordFlag;
    }

    public function setRecordFlag($recordFlag) {
        $this->recordFlag = $recordFlag;
        $this->queryParameters["RecordFlag"]=$recordFlag;
    }

    public function getCalledShowNumber() {
        return $this->calledShowNumber;
    }

    public function setCalledShowNumber($calledShowNumber) {
        $this->calledShowNumber = $calledShowNumber;
        $this->queryParameters["CalledShowNumber"]=$calledShowNumber;
    }

    public function getResourceOwnerId() {
        return $this->resourceOwnerId;
    }

    public function setResourceOwnerId($resourceOwnerId) {
        $this->resourceOwnerId = $resourceOwnerId;
        $this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
    }

    public function getPauseTime() {
        return $this->pauseTime;
    }

    public function setPauseTime($pauseTime) {
        $this->pauseTime = $pauseTime;
        $this->queryParameters["PauseTime"]=$pauseTime;
    }

}