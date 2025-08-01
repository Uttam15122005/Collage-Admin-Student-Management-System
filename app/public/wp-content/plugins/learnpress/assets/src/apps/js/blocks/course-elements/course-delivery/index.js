/**
 * Register block course lesson.
 */

import edit from './edit.js';
import { save } from './save.js';
import metadata from './block.json';
import { registerBlockType } from '@wordpress/blocks';
import { checkTemplatesCanLoadBlock } from '../../utilBlock.js';
import { heading } from '@wordpress/icons';

const templatesName = [ 'learnpress/learnpress//single-lp_course-offline' ];

checkTemplatesCanLoadBlock( templatesName, metadata, ( metadataNew ) => {
	registerBlockType( metadataNew.name, {
		...metadataNew,
		icon: heading,
		edit,
		save,
	} );
} );

registerBlockType( metadata.name, {
	...metadata,
	icon: heading,
	edit,
	save,
} );
