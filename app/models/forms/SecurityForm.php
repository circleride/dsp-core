<?php
/**
 * This file is part of the DreamFactory Services Platform(tm) (DSP)
 *
 * DreamFactory Services Platform(tm) <http://github.com/dreamfactorysoftware/dsp-core>
 * Copyright 2012-2015 DreamFactory Software, Inc. <support@dreamfactory.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * SecurityForm class.
 * SecurityForm is the data structure for keeping
 * security question form data. It is used by the 'securityQuestion' action of 'WebController'.
 */
class SecurityForm extends CFormModel
{
	/**
	 * @var string
	 */
	public $email;
	/**
	 * @var string
	 */
	public $question;
	/**
	 * @var string
	 */
	public $answer;
	/**
	 * @var string
	 */
	public $password;
	/**
	 * @var string
	 */
	public $passwordRepeat;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// answer and password are required
			array( 'email, question, answer, password, passwordRepeat', 'required' ),
			// password repeat must match password
			array( 'passwordRepeat', 'required' ),
			array( 'passwordRepeat', 'compare', 'compareAttribute' => 'password' ),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'question'       => 'Security Question',
			'answer'         => 'Security Answer',
			'password'       => 'Desired Password',
			'passwordRepeat' => 'Verify Password',
		);
	}
}
