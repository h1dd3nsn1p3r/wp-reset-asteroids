<script setup>
import { useSettingsStore } from "@stores/settings";
import Icon from "@components/core/Icon.vue";
/**
 *
 * Define props that we will use in this component.
 *
 * @since: 2.0.0
 */

const props = defineProps({
	label: {
		type: String,
		required: true,
	},
	buttonLabel: {
		type: String,
		required: true,
	},
});

const { __ } = wp.i18n;
const store = useSettingsStore();
const isExportingText = __("Processing...", "addonify-wishlist");
</script>
<template>
	<button
		type="submit"
		class="adfy-button"
		:data_loading="store.status.isExporting"
		:disabled="store.status.isExporting"
		@click="store.exportSettings"
	>
		{{ store.status.isExporting ? isExportingText : props.buttonLabel }}

		<Icon v-if="store.status.isExporting" name="loading" size="18px" />
	</button>
</template>
