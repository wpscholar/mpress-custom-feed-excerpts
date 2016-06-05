# mPress Custom Feed Excerpts

## Description
The **mPress Custom Feed Excerpts** plugin allows to you customize your WordPress feed excerpts by simply using the &lt;!-- more --&gt; tag in WordPress.

https://wordpress.org/plugins/mpress-custom-feed-excerpts/

## Contributors

### Pull Requests
All pull requests are welcome.  This plugin is relatively simple, so I'll probably be selective when it comes to features.  However, if you would like to submit a translation, this is the place to do it!

### SVN Access
If you have been granted access to SVN, this section details the processes for reliably checking out the code and committing your changes.

#### Prerequisites
- Install Node.js
- Run `npm install -g gulp`
- Run `npm install` from the project root

#### Checkout
- Run `gulp svn:checkout` from the project root

#### Check In
- Be sure that all version numbers in the code and readme have been updated.  Add changelog and upgrade notice entries.
- Tag the new version in Git
- Run `gulp project:build` from the project root.
- Run `gulp svn:addremove` from the SVN directory.
- Run `gulp svn:tag --v={version}` from the SVN directory
- Run `svn ci -m "{commit message}"` from the SVN root to commit changes