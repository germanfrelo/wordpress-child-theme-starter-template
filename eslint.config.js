import js from "@eslint/js";
import globals from "globals";

export default [
	{
		languageOptions: {
			// Enable all predefined browser global variables
			globals: globals.browser,
		},
	},
	// ESLint's predefined config that enables its recommended rules
	js.configs.recommended,
	// Ignore minified files
	{
		ignores: ["*.min.*"],
	},
];
