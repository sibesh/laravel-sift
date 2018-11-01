<?php

return [
	'api_key' => function_exists('env') ? env('SIFT_API_KEY', '') : ''
];
