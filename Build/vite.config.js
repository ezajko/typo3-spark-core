import { defineConfig } from 'vite';
import { resolve } from 'path';

export default defineConfig({
    base: '',
    build: {
        outDir: '../Resources/Public',
        emptyOutDir: true,
        rollupOptions: {
            input: {
                site: resolve(__dirname, 'src/scss/_site.scss'),
                main: resolve(__dirname, 'src/scripts/main.js'),
            },
            output: {
                entryFileNames: 'JavaScript/[name].js',
                chunkFileNames: 'JavaScript/[name].js',
                assetFileNames: (assetInfo) => {
                    if (assetInfo.name && assetInfo.name.endsWith('.css')) {
                        return 'Css/[name].css';
                    }
                    const extType = assetInfo.name.split('.').pop();
                    if (assetInfo.name.includes('bootstrap-icons')) {
                        return 'Icons/[name][extname]';
                    }
                    if (['woff', 'woff2', 'eot', 'ttf', 'otf'].includes(extType)) {
                        return 'Fonts/[name][extname]';
                    }
                    if (['ico'].includes(extType)) {
                        return 'Icons/[name][extname]';
                    }
                    if (['png', 'jpg', 'jpeg', 'svg', 'gif', 'webp'].includes(extType)) {
                        return 'Images/[name][extname]';
                    }
                    return 'Assets/[name][extname]';
                },
            },
        },
    },
});
