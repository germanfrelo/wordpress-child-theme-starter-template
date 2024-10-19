/** @type {import('stylelint').Config} */
export default {
	extends: [
		// Order matters: later configs take precedence over (override) earlier ones.
		"stylelint-config-standard",
		"stylelint-config-recess-order",
	],
	reportDescriptionlessDisables: true,
	reportInvalidScopeDisables: true,
	reportNeedlessDisables: true,
	rules: {
		/**
		 * Avoid errors: Duplicate
		 */
		"font-family-no-duplicate-names": [
			true,
			{
				// For normalizing styles applied to `pre`, `code`, `kbd` & `samp`.
				ignoreFontFamilyNames: ["monospace"],
			},
		],

		/**
		 * Avoid errors: Unknown
		 */
		"declaration-property-value-no-unknown": true,
		"media-feature-name-value-no-unknown": true,
		"no-unknown-animations": true,
		"no-unknown-custom-media": true,
		"no-descending-specificity": [
			true,
			{
				severity: "warning",
			},
		],

		/**
		 * Enforce conventions: Empty lines
		 */
		"declaration-empty-line-before": "never",

		/**
		 * Enforce conventions: Notation
		 */
		// Override 'context' value from 'stylelint-config-standard'.
		// TODO: Remove when browser support is ~95% (https://caniuse.com/css-media-range-syntax).
		"media-feature-range-notation": null,

		/**
		 * Enforce conventions: Pattern
		 */
		"custom-media-pattern": null,
		"custom-property-pattern": null,
		"keyframes-name-pattern": null,
		"selector-class-pattern": null,
		"selector-id-pattern": null,
	},
};
