import create_config from "@kucrut/vite-for-wp";
import vue from "@vitejs/plugin-vue";
import AutoImport from "unplugin-auto-import/vite";
import Components from "unplugin-vue-components/vite";
import { ElementPlusResolver } from "unplugin-vue-components/resolvers";
import { resolve } from "path";

export default create_config("admin/app/src/main.js", "admin/app/dist", {
	plugins: [
		vue(),
		AutoImport({
			resolvers: [ElementPlusResolver()],
		}),
		Components({
			resolvers: [ElementPlusResolver()],
		}),
	],
	publicDir: false,
	resolve: {
		alias: {
			"@": resolve(__dirname, "./app/src"),
			"@components": resolve(__dirname, "./app/src/components"),
			"@stores": resolve(__dirname, "./app/src/stores"),
			"@assets": resolve(__dirname, "./app/src/assets"),
			"@layouts": resolve(__dirname, "./app/src/layouts"),
			"@views": resolve(__dirname, "./app/src/views"),
			"@utilities": resolve(__dirname, "./app/src/utilities"),
			"@helpers": resolve(__dirname, "./app/src/helpers"),
		},
	},
	build: {
		sourcemap: false,
	}
});
