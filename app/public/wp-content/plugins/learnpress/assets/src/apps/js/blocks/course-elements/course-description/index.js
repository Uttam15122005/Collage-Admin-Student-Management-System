/**
 * Register block course description.
 */

import { edit } from './edit';
import { save } from './save';
import metadata from './block.json';
import { registerBlockType } from '@wordpress/blocks';
import { checkTemplatesCanLoadBlock } from '../../utilBlock.js';
import { postContent } from '@wordpress/icons';

const templatesName = [
	'learnpress/learnpress//single-lp_course',
	'learnpress/learnpress//single-lp_course-offline',
];

checkTemplatesCanLoadBlock( templatesName, metadata, ( metadataNew ) => {
	registerBlockType( metadataNew.name, {
		...metadataNew,
		icon: postContent,
		edit,
		save,
	} );
} );

registerBlockType( metadata.name, {
	...metadata,
	icon: postContent,
	edit,
	save,
} );
