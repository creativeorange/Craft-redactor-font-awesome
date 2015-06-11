<?php
namespace Craft;



class coRedactorFontAwesomePlugin extends BasePlugin
{
	public function getName()
	{
		return 'Redactor Font Awesome plugin';
	}

	public function getVersion()
	{
		return '0.9';
	}

	public function getDeveloper()
	{
		return 'Creativeorange V.O.F.';
	}

	public function getDeveloperUrl()
	{
		return 'http://www.creativeorange.nl';
	}

	public function init()
	{
		if (!craft()->isConsole())
		{
			if (craft()->request->isCpRequest())
			{
				craft()->templates->includeCssResource('coredactorfontawesome/fontAwesome.css');
				craft()->templates->includeJsResource('coredactorfontawesome/fontAwesome.js');
			}
		}
	}
}
