<?php

if (!class_exists('SiteInfoConfig'))
{

	class SiteInfoConfig extends DataExtension
	{

		private static $db = array (



		);

		private static $has_one = array (

			'SiteLogo'			=> 'Image'

		);

		public function updateCMSFields(FieldList $fields)
		{

			$fields->addFieldsToTab (

				'Root.Main',
				array (
					UploadField::create('SiteLogo')
						->setTitle('Site Logo')
						->setAllowedFileCategories('image')
						->setDescription('<em>This file must be an image and needs to be the correct size.</em>')
						->addExtraClass('arun mistry')
				)

			);

		}

	}

}

?>