module.exports = function (config) {
  config.dir = {
    input: 'src',
    output: '_site'
  }

  config.addPassthroughCopy('src/assets')
  config.addPassthroughCopy('src/lib')

  config.passthroughFileCopy = true

  config.addCollection('updates', function (collection) {
    return collection.getFilteredByTag('post').reverse()
  })

  return config
}
