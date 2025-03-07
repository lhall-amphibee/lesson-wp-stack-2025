// index.js - Update with block styles
import { registerBlockType, registerBlockStyle } from '@wordpress/blocks';
import './style.scss';
import Edit from './edit';
import metadata from './block.json';

registerBlockType(metadata.name, {
	edit: Edit,
});

// Register block styles for light/dark mode
registerBlockStyle(metadata.name, {
	name: 'light',
	label: 'Light Mode',
	isDefault: true,
});

registerBlockStyle(metadata.name, {
	name: 'dark',
	label: 'Dark Mode',
});
