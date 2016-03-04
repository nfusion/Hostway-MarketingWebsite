# Hostway Marketing Website
## Development Workflow

### User Roles and Requrements

All users must have GitHub accounts that use two-factor authentication; this will be audited before granting access.

nFusion will designate a technical lead who will be the sole user responsible for merging pull requests. The technical lead will not be a developer involved in active work on the site and will serve as a point of code review.

### Branch Structure

* The Production branch will be the master branch of the project

* The Staging branch will be the aggregation of Feature branches for full regression testing

* Every Feature branch should reference a GitHub issue in the beginning of the name 

* Every Commit should be in its own branch relevant to a specific issue in GitHub. 

* Every Commit should reference a GitHub issue at the beginning of the commit such as "#23: task completed"

### Pull Requests

* Code will flow through CircleCI to ensure quality prior to manual review; requests that fail the test process will not be promoted to the tech lead

* The technical lead will manually review the issue and code change set when a pull request successfully passes all automated tests

* In the event of conflicts, the technical lead will assign code back to responsible developer to resolve

## Coding Standards

Code standards are important to ensure the code will remain easy to work on for future iterations.  We propose using WordPress coding standards.  A lot can be said about coding standards, but while it’s important, it’s also important that people read the requirements.  Here’s the TL;DR version:

* **Don’t hack core**

* Code to power a New Feature goes into a Custom Plugin

* Code to power Layout goes into the Custom Theme

* Use Github Pull Requests for code reviews

### More Information
#### Standards
* [PHP Coding Standards – Make WordPress Core](https://make.wordpress.org/core/handbook/best-practices/coding-standards/php/)
* [PHP Documentation Standards – Make WordPress Core](https://make.wordpress.org/core/handbook/best-practices/inline-documentation-standards/php/)

* [JavaScript Coding Standards – Make WordPress Core](https://make.wordpress.org/core/handbook/best-practices/coding-standards/javascript/) 

* [HTML Coding Standards – Make WordPress Core](https://make.wordpress.org/core/handbook/best-practices/coding-standards/html/)

* [CSS Coding Standards – Make WordPress Core](https://make.wordpress.org/core/handbook/best-practices/coding-standards/css/) 

* [Accessibility Coding Standards – Make WordPress Core](https://make.wordpress.org/core/handbook/best-practices/coding-standards/accessibility-coding-standards/) 

* WordPress HTML / CSS / JavaScript standards are derived from:

    * [Design Patterns Library | Fellowship Technologies](http://developer.fellowshipone.com/patterns/code.php)

#### Dev Utilities
* [Theme Check — WordPress Plugins](https://wordpress.org/plugins/theme-check/)
* [WP-CLI](http://wp-cli.org/)

