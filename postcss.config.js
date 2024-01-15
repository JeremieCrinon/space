import postcssImport from 'postcss-import';
import autoprefixer from 'autoprefixer';
import postcssPresetEnv from 'postcss-preset-env';
import cssnano from 'cssnano';

export default {
    map: {
        inline: true
    },
    plugins: [
        postcssImport,
        autoprefixer,
        postcssPresetEnv({ stage: 2 }),
        cssnano({ preset: 'default' }),
    ],
};