<?php 

if(!function_exists('public_dashboard'))
{
	function public_dashboard($path)
	{
		return asset('modules/dashboard/'.$path);
	}
}
if(!function_exists('resource_dashboard'))
{
	function resource_dashboard($path)
	{
		return base_path('modules/Dashboard/Resources');
	}
}