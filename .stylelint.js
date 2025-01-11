module.exports = {
  extends: ["@wordpress/stylelint-config"],
  rules: {
    // Add custom rules here
  },
  // files: ["wp-content/plugins/hello-world-plugin/*.css"],
  ignoreFiles: [
    "dist/**/*.css",
    "build/**/*.css",
    "node_modules/**/*.css",
    "**/*.min.css"
  ]
};
