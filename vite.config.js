import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/normalize.css",
                "resources/css/client/styles.css",
                "resources/css/admin/styles.css",
                "resources/js/app.js",
                "resources/js/admin/accordeon.js",
                "resources/js/client/nav.js",
            ],
            refresh: true,
        }),
    ],
});
