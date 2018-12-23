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

class BatchRobotSmartCallRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Dyvmsapi", "2017-05-25", "BatchRobotSmartCall");
		$this->setMethod("POST");
	}

	private  $calledNumber;

	private  $scheduleTime;

	private  $resourceOwnerAccount;

	private  $scheduleCall;

	private  $earlyMediaAsr;

	private  $dialogId;

	private  $calledShowNumber;

	private  $corpName;

	private  $resourceOwnerId;

	private  $taskName;

	private  $ownerId;

	public function getCalledNumber() {
		return $this->calledNumber;
	}

	public function setCalledNumber($calledNumber) {
		$this->calledNumber = $calledNumber;
		$this->queryParameters["CalledNumber"]=$calledNumber;
	}

	public function getScheduleTime() {
		return $this->scheduleTime;
	}

	public function setScheduleTime($scheduleTime) {
		$this->scheduleTime = $scheduleTime;
		$this->queryParameters["ScheduleTime"]=$scheduleTime;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getScheduleCall() {
		return $this->scheduleCall;
	}

	public function setScheduleCall($scheduleCall) {
		$this->scheduleCall = $scheduleCall;
		$this->queryParameters["ScheduleCall"]=$scheduleCall;
	}

	public function getEarlyMediaAsr() {
		return $this->earlyMediaAsr;
	}

	public function setEarlyMediaAsr($earlyMediaAsr) {
		$this->earlyMediaAsr = $earlyMediaAsr;
		$this->queryParameters["EarlyMediaAsr"]=$earlyMediaAsr;
	}

	public function getDialogId() {
		return $this->dialogId;
	}

	public function setDialogId($dialogId) {
		$this->dialogId = $dialogId;
		$this->queryParameters["DialogId"]=$dialogId;
	}

	public function getCalledShowNumber() {
		return $this->calledShowNumber;
	}

	public function setCalledShowNumber($calledShowNumber) {
		$this->calledShowNumber = $calledShowNumber;
		$this->queryParameters["CalledShowNumber"]=$calledShowNumber;
	}

	public function getCorpName() {
		return $this->corpName;
	}

	public function setCorpName($corpName) {
		$this->corpName = $corpName;
		$this->queryParameters["CorpName"]=$corpName;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getTaskName() {
		return $this->taskName;
	}

	public function setTaskName($taskName) {
		$this->taskName = $taskName;
		$this->queryParameters["TaskName"]=$taskName;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}
	
}