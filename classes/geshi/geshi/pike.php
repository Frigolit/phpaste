<?php
/*************************************************************************************
 * pike.php
 * -------
 * Author: Pontus Rodling (frigolit@frigolit.net)
 * Based on cpp.php by Dennis Bayer, Nigel McNie
 * Release Version: 0.1
 *
 * Pike language file for GeSHi.
 ************************************************************************************/

$language_data = array (
	'LANG_NAME' => 'Pike',
	'COMMENT_SINGLE' => array(1 => '//'),
	'COMMENT_MULTI' => array('/*' => '*/'),
	'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
	'QUOTEMARKS' => array("'", '"'),
	'ESCAPE_CHAR' => '\\',
	'KEYWORDS' => array(
		1 => array(
			'case', 'continue', 'default', 'do', 'else', 'for', 'if', 'return',
			'switch', 'while'
			),
		2 => array(
			'UNDEFINED', 'false', 'break', 'true', 'errno', 
			'public', 'private', 'protected', 'catch', 'throw', 'class'
			),
		3 => array(
			'this', 'destroy'
			'sprintf', 'write',
			'intp', 'stringp', 'floatp', 'functionp', 'objectp', 'mappingp', 'arrayp',
			'exp', 'log', 'log10', 'pow', 'sqrt', 'ceil', 'floor',
			'sin', 'cos', 'tan', 'asin', 'acos', 'atan', 'sizeof', 'sscanf', 'exit', 'atexit',
			'strerror', 'time', 'ctime', 'locatime',
			),
		4 => array(
			'bool', 'int', 'const', 'float', 'int',
			'typedef', 'void', 'string', 'mapping', 'array'
			),
		),
	'SYMBOLS' => array(
		'({', '})', '([', '])', '(<', '>)', '=', '+', '-', '*', '/', '!', '%', '^', '&', ':'
		),
	'CASE_SENSITIVE' => array(
		GESHI_COMMENTS => true,
		1 => false,
		2 => false,
		3 => false,
		4 => false,
		),
	'STYLES' => array(
		'KEYWORDS' => array(
			1 => 'color: #0000ff;',
			2 => 'color: #0000ff;',
			3 => 'color: #0000dd;',
			4 => 'color: #0000ff;'
			),
		'COMMENTS' => array(
			1 => 'color: #008800;',
			2 => 'color: #008800;',
			'MULTI' => 'color: #ff0000; font-style: italic;'
			),
		'ESCAPE_CHAR' => array(
			0 => 'color: #666666; font-weight: bold;'
			),
		'BRACKETS' => array(
			0 => 'color: #000000;'
			),
		'STRINGS' => array(
			0 => 'color: #666666;'
			),
		'NUMBERS' => array(
			0 => 'color: #0000dd;'
			),
		'METHODS' => array(
			1 => 'color: #000000;',
			2 => 'color: #000000;'
			),
		'SYMBOLS' => array(
			0 => 'color: #000000;'
			),
		'REGEXPS' => array(
			),
		'SCRIPT' => array(
			)
		),
	'URLS' => array(
		),
	'OOLANG' => true,
	'OBJECT_SPLITTERS' => array(
		1 => '.',
		2 => '::',
		3 => '->'
		),
	'REGEXPS' => array(
		),
	'STRICT_MODE_APPLIES' => GESHI_NEVER,
	'SCRIPT_DELIMITERS' => array(
		),
	'HIGHLIGHT_STRICT_BLOCK' => array(
		)
);

?>


