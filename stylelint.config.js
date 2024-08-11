/** @type {import('stylelint').Config} */
export default {
	extends: [
		// Order matters: later configs take precedence over (override) earlier ones
		"stylelint-config-standard",
		"stylelint-config-recess-order",
	],
	reportDescriptionlessDisables: true,
	reportInvalidScopeDisables: true,
	reportNeedlessDisables: true,
	rules: {
		// Avoid errors: Unknown
		"declaration-property-value-no-unknown": true,
		"media-feature-name-value-no-unknown": true,
		"no-unknown-animations": true,
		"no-unknown-custom-media": true,
		"no-unknown-custom-properties": true,

		// Enforce conventions: Allowed, disallowed & required
		"color-named": [
			"never",
			{
				ignore: ["inside-function"],
			},
		],

		// Enforce conventions: Max & Min
		"max-nesting-depth": [
			3,
			{
				ignore: ["blockless-at-rules", "pseudo-classes"],
				severity: "warning",
			},
		],
		"selector-max-attribute": [
			3,
			{
				severity: "warning",
			},
		],
		"selector-max-class": [
			3,
			{
				severity: "warning",
			},
		],
		"selector-max-combinators": [
			2,
			{
				severity: "warning",
			},
		],
		"selector-max-compound-selectors": [
			4,
			{
				severity: "warning",
			},
		],
		"selector-max-id": [
			1,
			{
				severity: "warning",
			},
		],
		"selector-max-pseudo-class": [
			2,
			{
				severity: "warning",
			},
		],
		"selector-max-specificity": [
			"1,3,2",
			{
				severity: "warning",
			},
		],
		"selector-max-type": [
			2,
			{
				severity: "warning",
			},
		],
		"selector-max-universal": [
			2,
			{
				severity: "warning",
			},
		],

		// Enforce conventions: Patterns
		// "custom-media-pattern": null,
		// "custom-property-pattern": null,
		// "keyframes-name-pattern": null,
		// "selector-class-pattern": null,
		// "selector-id-pattern": null,
	},
};
