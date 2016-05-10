<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"             => "The :attribute must be accepted.",
	"active_url"           => "The :attribute is not a valid URL.",
	"after"                => "The :attribute must be a date after :date.",
	"alpha"                => "The :attribute may only contain letters.",
	"alpha_dash"           => "The :attribute may only contain letters, numbers, and dashes.",
	"alpha_num"            => "The :attribute may only contain letters and numbers.",
	"array"                => "The :attribute must be an array.",
	"before"               => "The :attribute must be a date before :date.",
	"between"              => [
		"numeric" => "The :attribute must be between :min and :max.",
		"file"    => "The :attribute must be between :min and :max kilobytes.",
		//"string"  => "The :attribute must be between :min and :max characters.",
		"string"  => "Từ :min đến :max ký tự",
		"array"   => "The :attribute must have between :min and :max items.",
	],
	"boolean"              => "The :attribute field must be true or false.",
	"confirmed"            => "Xác nhận :attribute không chính xác",
	"date"                 => "Vui lòng nhập ngày hợp lệ với định dạng :format.",
	"date_format"          => "Vui lòng nhập ngày với định dạng :format.",
	"different"            => "The :attribute and :other must be different.",
	/*"digits"               => "The :attribute must be :digits digits.",*/
	"digits"               => "Vui lòng chỉ nhập số.",
	"digits_between"       => "The :attribute must be between :min and :max digits.",
	/*"email"                => ":attribute must be a valid email address.",*/
	"email"                => "Vui lòng nhập email hợp lệ.",
	"filled"               => "Thông tin :attribute này bắt buộc",
	"exists"               => "The selected :attribute is invalid.",
	"image"                => "The :attribute must be an image.",
	"in"                   => "The selected :attribute is invalid.",
	"integer"              => "The :attribute must be an integer.",
	"ip"                   => "The :attribute must be a valid IP address.",
	"max"                  => [
		"numeric" => "Xin vui lòng nhập số nhỏ hơn {0}.",
		"file"    => "The :attribute may not be greater than :max kilobytes.",
		//"string"  => "The :attribute may not be greater than :max characters.",
		"string"  => "Vui lòng không nhập nhiều hơn :max ký tự.",
		"array"   => "The :attribute may not have more than :max items.",
	],
	"mimes"                => "The :attribute must be a file of type: :values.",
	"min"                  => [
		"numeric" => "Xin vui lòng nhập số lớn hơn {0}.",
		"file"    => "The :attribute must be at least :min kilobytes.",
		//"string"  => "The :attribute must be at least :min characters.",
		"string"  => "Vui lòng nhập ít nhất :min ký tự.",
		"array"   => "The :attribute must have at least :min items.",
	],
	"not_in"               => "The selected :attribute is invalid.",
	/*"numeric"              => "The :attribute must be a number.",*/
	"numeric"              => "Vui lòng nhập số hợp lệ",
	"regex"                => "The :attribute format is invalid.",
	"required"             => "Thông tin :attribute này bắt buộc",
	"required_if"          => "The :attribute field is required when :other is :value.",
	"required_with"        => "The :attribute field is required when :values is present.",
	"required_with_all"    => "The :attribute field is required when :values is present.",
	"required_without"     => "The :attribute field is required when :values is not present.",
	"required_without_all" => "The :attribute field is required when none of :values are present.",
	"same"                 => "The :attribute and :other must match.",
	"equal_password"       => "Xác nhận mật khẩu mới không trùng. ",
	"size"                 => [
		"numeric" => "The :attribute must be :size.",
		"file"    => "The :attribute must be :size kilobytes.",
		"string"  => "The :attribute must be :size characters.",
		"array"   => "The :attribute must contain :size items.",
	],
	"unique"               => ":attribute đã tồn tại.",
	"url"                  => "The :attribute format is invalid.",
	"timezone"             => "The :attribute must be a valid zone.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => [
		'attribute-name' => [
			'rule-name' => 'custom-message',
		],
	],

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => [],

];
