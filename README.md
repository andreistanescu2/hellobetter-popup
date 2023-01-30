
# HelloBetter Popup

WordPress plugin for newsletter subscription popup

### Plugin boilerplate

The plugin is built based on the [WordPress Plugin Boilerplate Generator](https://wppb.me/), as i consider it a best practice when it comes to building custom plugins.

All the custom functionality is built inside the "public" directory.

### Initial Requirements

1. All assets and content are provided by us Link to Figma
2. The popup should appear on all default blog posts (no other pages or post
   types), as soon as the reader reaches 50% of the document height
3. Popup should be responsive (as per Figma).
4. The form should not do anything but show the success message when the user
   submits at this stage;
5. Validation should be in place (empty field and email)

### Development methods

The newsletter popup is loaded via JavaScript.

- I defined and used 3 actions via the define_public_hooks method in includes/class-hellobetter-popup.php

- In the enqueue_scripts method I checked to see if the user is viewing a  default blog post using the is_singular method. If true, I load the custom javascript file responsible for initializing the plugin and all front-end interactions.

- In the enqueue_styles method I include the CSS file using the same conditional as previously described.

- The hellobetter_popup_media method is intended to load custom images in the front-end templates, relative to the plugin dir path.

- Template files are located in public/partials

- CSS and JS assets are loaded in the front-end from the public/dist folder, but should be edited inside the public/src folder after installing npm and running the start script.

### Development packages

#### Dependencies:

1. [jquery](https://www.npmjs.com/package/jquery)
2. [jquery-validation](https://www.npmjs.com/package/jquery-validation)
3. [popups](https://www.npmjs.com/package/popups)
4. [the-new-css-reset](https://www.npmjs.com/package/the-new-css-reset)

#### Dev Dependencies:

1. [@parcel/transformer-sass](https://www.npmjs.com/package/@parcel/transformer-sass)
2. [buffer](https://www.npmjs.com/package/buffer)
3. [parcel](https://www.npmjs.com/package/parcel)
4. [process](https://www.npmjs.com/package/process)

### Installation

1. Upload and extract `hellobetter-popup.zip` to the `/wp-content/plugins/` directory or install via the 'Plugins' section in WordPress
2. Activate the plugin through the 'Plugins' menu in WordPress

### Authors

👤 **Andrei Stanescu**

* Website: https://www.andreistanescu.com
* LinkedIn: [@https:\/\/www.linkedin.com\/in\/stanescuandrei\/](https://linkedin.com/in/https:\/\/www.linkedin.com\/in\/stanescuandrei\/)


### Run Locally

Install the plugin

Go to the "public" folder in plugin directory

```bash
  cd wp-content/plugins/hellobetter-popup/public
```

Install dependencies

```bash
  npm install
```

Start the server

```bash
  npm start
```

