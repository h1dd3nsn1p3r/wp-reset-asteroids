<script setup>
import HelpTip from "@components/core/HelpTip.vue";
import ControlMaster from "@components/options/ControlMaster.vue";

/**
 *
 * Define props that we will use in this component.
 * @since: 2.0.0
 */

const props = defineProps({
	optionBox: {
		type: Object,
		required: false,
	},
	reactiveState: {
		type: Object,
		required: true,
	},
});

//console.log(props.optionBox);
</script>
<template>
	<div class="adfy-option-boxes">
		<div
			class="adfy-option-box"
			:class="field.className ? field.className : ''"
			:data_width="field.width ? field.width : 'default'"
			v-for="(field, fieldKey) in props.optionBox.sub_sections"
		>
			<div class="column column-left">
				<p class="option-label">
					{{ field.label ? field.label : "?????" }}
					<HelpTip
						v-if="Object.hasOwn(field, 'description')"
						:content="field.description"
					/>
				</p>
			</div>
			<div class="column column-right">
				<div class="adfy-option">
					<ControlMaster
						:field="field"
						:fieldKey="fieldKey"
						:reactiveState="props.reactiveState"
					/>
				</div>
			</div>
		</div>
	</div>
</template>
