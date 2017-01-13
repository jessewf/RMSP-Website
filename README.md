# `rikomethod.com`

## Tools

- `brew` - install necessary `xcode`

- `ruby`

  - `jekyll`

- `git`

  - Github


## Setup

To install Homebrew, open a Terminal and run:

```
/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
```

Once Homebrew is install, install `ruby` by running:

```
brew install ruby
```

> ed: does osx include ruby? Is it the right version?


Next, install `jekyll`:

```
gem install jekyll
```

Download the [GitHub app](https://desktop.github.com/) and install.


## Workflow

Workflow will consist of at least 2 branches:

- `master` - authoritative repository for site
- `test` - branch for testing changes

### Making Changes

1. Ensure `test` branch is selected as working branch. Otherwise, switch the branch to `test`.
2. Ensure `test` branch is current with `master` branch. If it is not, update `test` branch from `master` branch.

### Testing Changes

**EITHER**

* Open Terminal.Terminal starts in the `home` folder. Navigate to the site folder by entering the following commands:

  ```
   cd Desktop/riko-demo-master
   jekyll serve
  ```

**OR**
* Double-click on `start.sh` in the `riko-demo-master` folder.

Navigate to [page] and view changes.

### Committing Changes
Select changes
Enter `Summary` of the changes and `Description` if desired
Commit to `test`

### Merging changes
Initiate a pull request


### Deployment
Ensure `master` is the current branch.

Copy local contents of `_site` folder to remote `.htdocs` folder on server.

## Site Structure

`_data` is where data is defined. Classes of things with multiple instances should be defined here. For example, `classes.yml` defines the class items on the Classes page. `team.yml` defines the staff members for the Team page.

`_inclues` defines snippets that may be reused throughout differents pages

`_layout` defines structural template for classes of pages.

`_post` collection of all blog posts.

`_site` is generated by `jekyll build`, compiling the various templates, snippets, and markdown content into vanilla HTML for publication. This is the finished product provided by `jekyll serve` and what should be push to the server during production.

All folders and files with names **not** beginning with an underscore defines the actual content.

e.g.

- The `index.html` in the root folder defines `http://host/riko-demo/`
- For the `gallery` folder `index.html` defines `http://host/riko-demo/gallery/`

## Notes

- **important** - metadata on pages/templates must be in the form:

  ```
    ---
    layout: home
    title: Home
    ---
  ```

- content can be written in either HTML or markdown. Jekyll will parse markdown to HTML in the build process.

[page]: http://localhost:4000/riko-demo/
