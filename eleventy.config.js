import { eleventyImageTransformPlugin } from '@11ty/eleventy-img';

import shortcodes from './src/_config/shortcodes.js';

export default async function (eleventyConfig) {
  eleventyConfig.addPlugin(eleventyImageTransformPlugin, {
    // output image formats
    formats: ['avif', 'webp', 'jpeg'],
    // output image widths
    widths: ['auto'],
  });

  eleventyConfig.setInputDirectory('src');
  eleventyConfig.setOutputDirectory('dist');
  eleventyConfig.setTemplateFormats(['html', 'md', 'njk']);
  eleventyConfig.addPassthroughCopy({
    'node_modules/feather-icons/dist/feather.min.js':
      'assets/js/feather.min.js',
  });
  eleventyConfig.addPassthroughCopy('src/assets/images/');
  eleventyConfig.addPassthroughCopy('src/assets/fonts/');
  eleventyConfig.addPassthroughCopy('src/assets/js/');
  eleventyConfig.addWatchTarget('src/assets/css/**/*.css');
  eleventyConfig.setServerOptions({
    showAllHosts: true,
  });

  eleventyConfig.addLayoutAlias('base', 'base.njk');
  // eleventyConfig.addLayoutAlias('page', 'page.njk');
  // eleventyConfig.addLayoutAlias('post', 'post.njk');
  // eleventyConfig.addLayoutAlias('tags', 'tags.njk');

  eleventyConfig.addShortcode('svg', shortcodes.svgShortcode);

  return {
    dir: {
      input: 'src',
      output: 'dist',
      includes: '_includes',
      layouts: '_layouts',
    },
    templateFormats: ['html', 'md', 'njk'],
    passthroughFileCopy: true,
  };
}

// Old version to copy some elements from:
// export default function (eleventyConfig) {
//   eleventyConfig.setInputDirectory('src');
//   eleventyConfig.setOutputDirectory('dist');
//   eleventyConfig.setTemplateFormats(['html', 'md', 'njk']);
//   eleventyConfig.addPassthroughCopy({
//     'node_modules/feather-icons/dist/feather.min.js':
//       'assets/js/feather.min.js',
//   });
//   eleventyConfig.addPassthroughCopy('src/assets/images/');
//   eleventyConfig.addPassthroughCopy('src/assets/fonts/');
//   eleventyConfig.addPassthroughCopy('src/assets/js/');
//   eleventyConfig.addWatchTarget('src/assets/css/**/*.css');
//   eleventyConfig.setServerOptions({
//     showAllHosts: true,
//   });

//   return {
//     dir: {
//       input: 'src',
//       output: 'dist',
//     },
//     templateFormats: ['html', 'md', 'njk'],
//     passthroughFileCopy: true,
//   };
// }
