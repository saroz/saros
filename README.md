# WordPress Theme ( saros )

_Version - 2.0.0_
_Licence - MIT_
_Updated on: September 07, 2021_

Theme for everyone individual, freelancer, Self-employed, Blogger, Artist, Developer.

## Stacks

| Stack             | Description                                                                                                                                                                                                                                                                                 |
| ----------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Gulp              | CLI version: 2.2.0<br/>Local version: 4.0.2<br/><br/>**Required Packages** <br/> "gulp": "^4.0.2",<br/>"gulp-archiver": "^1.0.0",<br/>"gulp-autoprefixer": "^8.0.0",<br/>"gulp-clean-css": "^4.3.0",<br/>"gulp-sass": "^5.0.0",<br/>"gulp-sourcemaps": "^3.0.0",<br/>"sass": "^1.35.1"<br/> |
| Node              | v14.8.0                                                                                                                                                                                                                                                                                     |
| PHP Version       | 5.6                                                                                                                                                                                                                                                                                         |
| Wordpress Version | 5.3                                                                                                                                                                                                                                                                                         |
| SCSS / CSS        |                                                                                                                                                                                                                                                                                             |

<br/>

## Plugins

| Plugin                                                                                  | Description                                                                   |
| --------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------- |
| [Email download link](https://wordpress.org/plugins/email-download-link/)               | Download link form                                                            |
| [Autoptimize](https://wordpress.org/plugins/autoptimize/)                               | Minify css & Js files                                                         |
| [Compress JPEG & PNG images](https://wordpress.org/plugins/email-download-link/)        | Optimize images                                                               |
| [Super Progressive Web Apps](https://wordpress.org/plugins/super-progressive-web-apps/) | PWA ( User can able to create shortcut icon for mobile(android/ios & desktop) |

<br/>

## Features

- Personal info on home page
  - [x] Job Title
  - [x] About Intro (3/4 lines )
- Blog
  - [x] Blog tiles on home page ( min 3 item )
  - [x] Multiple Category
  - [x] Download Link (free resources)
  - [x] Social Media Links

<br/>

## Customize your own & setup

- [x] Clone project under theme folder
- [x] Install packages **npm i**
- [x] Change colors, fonts bu changing on **\_.scss**
- [x] Watch changes over \*.scss fiels using **gulp watch**
- [x] Compile CSS using **gulp css**
- [x] Generate theme (zip) **gulp build**

and upload **saros.zip** using **cpanel** or **Apperanance > themes** (/wp-admin)

### Setup

- [x] Login to your wp-admin
- [x] Go to ** Apperanance > themes **
- [x] Uploda **saros** theme ( if not added using cpanel ) - click on add new button - click on upload theme & - borwse / drag & drop **saros.zip** - Install and then activate theme

#### Pages

Create pages under **pages** menu

**Home Page**

- [x] Create **Home page** and choose Home page template from right panel under template dropdown
- [x] Add content ( about you 3/4 line summary) and **save**

<br/>

**Privacy Policy** or **Terms of Service**

- [x] Add new page, give a title of page, add content and **save**

<br/>

**Offline Page** for PWA

- [x] Add new page, give a title **Offline**, choose **Offline Page** from right panel under template dropdown add **save**

<br/>

#### Set Home page (Front Page)

- [x] Go to **Settings > Readings** menu
- [x] Choose **A Static page** ( select below )
- [x] Choose Home from Homepage. dropdown

<br/>

#### Add Social links

- [x] Go to **Social Profiles** menu
- [x] Add social links & email, phone and **save**

<br/>

#### Create Main Menu

- [x] Go to **Apperance > Menus** from menu
- [x] Go to give menu name **Main menu** or **Header Menu** or what you like
- [x] Check Primary from below under Menu settings
- [x] **Save Menu**
- [x] Choose items from categories to add on main menu and save

<br/>

#### Create Footer Menu

- [x] Go to **Apperance > Menus** from menu
- [x] Go to give menu name **Footer menu** or **Bottom Menu** or what you like
- [x] Check Footer Menu from below under Menu settings
- [x] **Save Menu**
- [x] Choose privacy & terms page from pages to add on footer menu and save

#### Create Category & Post

- [x] Go to **Apperance > Posts** from menu
- [x] Click on categories & add category
- [x] Click on **Add New** from posts menu
- [x] Give a title, add content, choose category ( previously created ), write excerpt for short description on front page and **save**

<br/>
<br/>
Theme generate using [Underscore](https://underscores.me) (`_s`).
