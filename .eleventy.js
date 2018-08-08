module.exports = function (config) {
  config.dir = {
    input: 'src',
    output: '_site'
  }

  config.addPassthroughCopy('src/assets')

  config.passthroughFileCopy = true

  return config
}
