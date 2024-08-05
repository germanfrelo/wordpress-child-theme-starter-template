# My Personal Front-End Starter Template

> [!NOTE]
> This is a **work in progress**.

This template repository provides a foundation for building simple websites using ***my preferred*** front-end web development tools.

It's preconfigured with up-to-date tools and includes comments explaining my choices throughout the codebase.

## Features

### Git

- List of **files and directories** to be **ignored by Git** (`.gitignore`).[^1]
- **Line endings** of text-based files committed to the repository are automatically **normalized** (`.gitattributes`).

### Dependencies

- **Pinned** dependencies (`.npmrc`).[^2]
- **Automated** dependency **updates**  with [GitHub's Dependabot version updates](https://docs.github.com/en/code-security/dependabot/dependabot-version-updates) (`.github/dependabot.yml`).

### Formatting and Linting

#### Formatting

- [EditorConfig](https://editorconfig.org/)
- [Prettier](https://prettier.io/)

#### Linters

- [markdownlint-cli2](https://github.com/DavidAnson/markdownlint-cli2) for **Markdown**
- [Stylelint](https://stylelint.io/) for **CSS**
- [ESLint](https://eslint.org/) for **JavaScript**

Formatters and linters are **automatically run before committing** with [husky](https://github.com/typicode/husky) + [lint-staged](https://github.com/lint-staged/lint-staged).

### Code editor integrations

To get the most out of the tools and have a better developer experience, it is highly recommended to use the integrations with the code editors.

- [VS Code](https://code.visualstudio.com/): recommended **extensions** and useful **settings**.

## Getting started

Prerequisites: [Git](https://docs.github.com/en/get-started/getting-started-with-git), and [Node.js + npm](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm).

1. **Create a new repository**[^3] from this template **and clone it**[^4] to your computer.
2. **Install the dependencies** by running `npm install` in the root directory of the repository.
3. **Install the tools' integrations with your code editor** (optional, but highly recommended).
   - [Extensions for VS Code](./.vscode/extensions.json).

## Customization

Some parts should be customized for each project, while others are optional.

### *Must* be customized

- [`package.json`](./package.json):
  - `name`
  - `description`
  - `keywords`
  - `homepage`
  - `bugs.url`
  - `repository.url`
- [`README.md`](./README.md)
- [`index.html`](./index.html)
- [`styles.css`](./styles.css)

### *May need* to be customized

- [`package.json`](./package.json):
  - `version`
  - `private`
  - `license`
  - `author`
  - `type`
  - `main`
  - `dependencies`
  - `devDependencies`
  - `scripts`
  - `lint-staged`
- [`.gitignore`](./.gitignore)
- [`.github/dependabot.yml`](./.github/dependabot.yml)
- [`.vscode/extensions.json`](./.vscode/extensions.json)
- [`.vscode/settings.json`](./.vscode/settings.json)
- [`LICENSE`](./LICENSE)

### *Don't need* to be customized (probably)

- [`.husky/`](./.husky/)
- [`.editorconfig`](./.editorconfig)
- [`.gitattributes`](./.gitattributes)
- [`.npmrc`](./.npmrc)

## Contribution

Feel free to fork this template and modify it to fit your needs! I'm open to suggestions on how to improve it.

## License

See [LICENSE](./LICENSE).

## References

- [Client-side web development tools (MDN)](https://developer.mozilla.org/en-US/docs/Learn/Tools_and_testing/Understanding_client-side_tools)

[^1]: Use [gitignore.io](http://gitignore.io).
[^2]: [Should you Pin your JavaScript Dependencies?](https://docs.renovatebot.com/dependency-pinning/) (Renovate Docs)
[^3]: [Creating a repository from a template](https://docs.github.com/en/repositories/creating-and-managing-repositories/creating-a-repository-from-a-template) (GitHub Docs)
[^4]: [Cloning a repository](https://docs.github.com/en/repositories/creating-and-managing-repositories/cloning-a-repository) (GitHub Docs)
