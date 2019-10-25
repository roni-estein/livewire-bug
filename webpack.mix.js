const mix = require('laravel-mix')
require('laravel-mix-purgecss')
let tailwindcss = require('tailwindcss')
let postcssImport = require('postcss-import')
let postcssNesting = require('postcss-nesting')
let postcssPresetEnv = require('postcss-preset-env')
let selectors = require('postcss-custom-selectors')
let colorMod = require('postcss-color-mod-function')

function isInWatch(){
    return process.argv.includes('--watch')
}

function isHot(){
    return process.argv.includes('--hot')
}

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        postcssPresetEnv(),
        postcssImport(),
        postcssNesting(),
        selectors(),
        colorMod(),
        tailwindcss('tailwind.config.js'),
    ])
    .purgeCss()
if(!isHot()){
    mix.version()
        .browserSync('livewire-bug.test')
}
