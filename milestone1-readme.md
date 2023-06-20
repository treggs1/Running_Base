# Running Base

The Running Base website has been created to provide comprehensive information to beginner and inexperienced runners on building their base fitness for running. Additionally, the website offers valuable insights to more experienced runners who may be struggling to make further progress in their running training. Over time, the website will be expanded to include more advanced running programs and resources. Designed with full responsiveness and accessibility in mind, the website ensures optimal user experience for all visitors.

![Am I Responsive?](/assets/readme/amiresponsive.png "Am I Responsive? Website Mockup")

[View Running Base on Github Pages](https://treggs1.github.io/Running_Base/)

---


## CONTENTS

* [User Experience](#user-experience-ux)
  * [User Stories](#user-stories)

* [Design](#design)
  * [Colour Scheme](#colour-scheme)
  * [Typography](#typography)
  * [Imagery](#imagery)
  * [Wireframes](#wireframes)

* [Features](#features)
  * [Future Implementations](#future-implementations)
  * [Accessibility](#accessibility)

* [Technologies Used](#technologies-used)
  * [Languages Used](#languages-used)
  * [Frameworks, Libraries & Programs Used](#frameworks-libraries--programs-used)

* [Deployment & Local Development](#deployment--local-development)
  * [Deployment](#deployment)
  * [Local Development](#local-development)
    * [How to Fork](#how-to-fork)
    * [How to Clone](#how-to-clone)

* [Testing](#testing)

* [Credits](#credits)
  * [Code Used](#code-used)
  * [Content](#content)
  * [Media](#media)
  * [Acknowledgments](#acknowledgments)

---


## User Experience (UX)

### User Stories

#### First Time Visitor Goals

* I want to be able to easily understand what the site is about.
* I want to be able to find the information I need and navigate to it quickly.
* I want to be able to find social madia links easily.
* As a beginner, I want to learn how to train for running properly and reduce the risk of injury.
* I want to improve my running skills and get faster.

#### Returning Visitor Goals

* I want to quickly get back to the information I need with minimal clicks.
* I want to be able to contact Running Base to ask for aditional information if needed.

- - -

## Design

### Colour Scheme

I have used a very basic colour scheme to keep the site looking clean and professional this also helps with accessibility. The background is white #ffffff and text is a dark grey #212529 any other color is provided by images on the site. 

### Typography

Google Fonts was used for the following fonts:

* Orbitron is used for logo in the header on the site. It is a sans-serif font.
* Quicksand is used for all other text and headings on the site. It is a sans-serif font.
* sans-serif was used as a backup if the fonts can not be loaded from Google Fonts.

### Imagery

A stock image from [heroimages.com](https://heroimages.com/) was used for the hero image.

### Wireframes

Wireframes were made using [Balsamiq](https://balsamiq.com/). I opted not to create wireframes for each page on all devices instead, I designed wireframes for three different pages on three distinct devices, with the main content section being the only element that varies across each page to maintain consistency across the site.

#### Mobile wireframe

![Wireframe Mobile](/assets/readme/wireframe-mobile.png "Wireframe for mobile")

#### Tablet wireframe

![Wireframe Tablet](/assets/readme/wireframe-tablet.png "Wireframe for tablet")

#### Desktop wireframe

![Wireframe Desktop](/assets/readme/wireframe-desktop.png "Wireframe for desktop")

- - -

## Features

The pages of the website are as follows:

- Home page
- Building your base page
- Heart rate zones page
- Heart rate zone calculator page
- Contact us page 
- Confirmation page that redirects user to homepage after submitting contact form.
 

### Existing Features

- **Feature #1 Navbar**

- The navigation bar is prominently displayed at the top of every page, featuring the website's logo/brand name as well as quick links to every page for convenient and accessible browsing.

![screenshot](/assets/readme/feature-navbar.png)

- **Feature #2 Navbar mobile toggler**

- The mobile navbar toggler simplifies the navbar for small devices by collapsing it into a menu button. Clicking the button opens a list of website pages for easier navigation. This provides a cleaner design while still giving users all the necessary navigation options. Clicking the icon toggles the menu between its open and cloased states.

![screenshot](/assets/readme/feature-mobile-menu.png)

- **Feature #3 Hero image with cover text**

- The site's tagline is used as the cover text over the hero image on the homepage. On most other pages, the page title is used - except on the contact form confirmation page, where it is used to confirm the message was sent and to inform the user that they will be redirected to homepage shortly.

![screenshot](/assets/readme/feature-hero-image-text.png)

**Feature #4 Footer**

- The footer includes copyright information and social links for easy access to our social media.

![screenshot](/assets/readme/feature-footer.png)

**Feature #5 Contact form**

- A basic contact form for the user to contact us. (all fields are required)

![screenshot](/assets/readme/feature-contact-form.png)

**Feature #6 Heart rate zone calculator**

- The heart rate zone calculator requires the user to input either their age or for more accuracy and if known their max heart rate it will then tell them the heart rate ranges they should be in for each training zone.

![screenshot](/assets/readme/feature-hr-zone-calc.png)

**Feature #6 Confirmation page**

- Confirm the message was sent and informs the user that they will be redirected to homepage.

![screenshot](/assets/readme/feature-redirect.png)

### Future Implementations

Upon deployment of the website on a live server, the first addition would be a blog. 
Due to the lack of support for PHP on GitHub pages, this implementation was not possible at this time. The blog will serve as a platform for more advanced training plans, information about running gear, and different types of running.

### Accessibility

I have made every effort to increase the accessibility of the website. I have incorporated various features such as aria-labels for social media icons to enable easy use of screen readers by all individuals. Additionally, I have added a span over the hero background image to enable screen readers to provide a comprehensive description of the content. To ensure further accessibility, I have used semantic HTML throughout the website.

- - -

## Technologies Used

### Languages Used

HTML and CSS were used to create this website.

### Frameworks, Libraries & Programs Used

Balsamiq - Used to create wireframes.

Git - For version control.

Github - To save and store the files for the website.

Bootstrap Version 5.3 - Code for the navigation bar.

Google Fonts - To import the fonts used on the website.

Font Awesome - For the iconography on the website.

Google Dev Tools - To troubleshoot and test features, solve issues with responsiveness and styling.

[Favicon.io](https://favicon.io/) To create favicon and mobile bookmark icons.

[Am I Responsive?](https://ui.dev/amiresponsive) To show the website image on a range of devices.

- - -

## Deployment & Local Development

### Deployment

Github Pages was used to deploy the live website. The instructions to achieve this are below:

1. Log in (or sign up) to Github.
2. Find the repository for this project, https://github.com/treggs1/Running_Base
3. Click on the Settings link.
4. Click on the Pages link in the left hand side navigation bar.
5. In the Source section, choose main from the drop down select branch menu. Select Root from the drop down select folder menu.
6. Click Save. Your live Github Pages site is now deployed at the URL shown.

### Local Development

#### How to Fork

To fork the Running_Base repository:

1. Log in (or sign up) to Github.
2. Go to the repository for this project, https://github.com/treggs1/Running_Base
3. Click the Fork button in the top right corner.

#### How to Clone

To clone the Running_Base repository:

1. Log in (or sign up) to GitHub.
2. Go to the repository for this project, https://github.com/treggs1/Running_Base
3. Click on the code button, select whether you would like to clone with HTTPS, SSH or GitHub CLI and copy the link shown.
4. Open the terminal in your code editor and change the current working directory to the location you want to use for the cloned directory.
5. Type 'git clone' into the terminal and then paste the link you copied in step 3. Press enter.

- - -


## Testing

Testing was conducted throughout the development process using Chrome developer tools to identify and help rectify any issues as they arose.

### W3C Validator

The W3C validator was used to validate the HTML on all pages of the website. It was also used to validate CSS in the style.css file.

Home page

![screenshot](/assets/readme/html-validator-index.png)

Building your base page

![screenshot](/assets/readme/html-validator-building.png)

Heart rate zones page

![screenshot](/assets/readme/html-validator-hr-zones.png)

Heart rate zone calculator page

![screenshot](/assets/readme/html-validator-hr-calc.png)

Contact us page

![screenshot](/assets/readme/html-validator-contact.png)

style.css

![screenshot](/assets/readme/css-validator.png)

### Lighthouse

I used Lighthouse within the Chrome Developer Tools to allow me to test the performance, accessibility, best practices and SEO of the website.

Home page

![screenshot](/assets/readme/lighthouse-index.png)

Building your base page

![screenshot](/assets/readme/lighthouse-building-your-base.png)

Heart rate zones page

![screenshot](/assets/readme/lighthouse-heart-rate-zones.png)

Heart rate zone calculator page

![screenshot](/assets/readme/lighthouse-heart-rate-calc.png)

Contact us page

![screenshot](/assets/readme/lighthouse-contact-us.png)

Running lighthouse in mobile mode reduced the performance on all pages to around 75/100 this was mainly due to the hero image, bootstrap CSS and bootstrap JavaScript. 

### Bugs

As I have kept the layout of the site basic I haven't had any real bugs to deal with. There is an issue with the contact form as I have the labels appearing after the input they are for in the code, and CSS is used to move them back to their proper location on the live page. However, this caused screen readers to not read the label for the input box. To fix the problem, I added `aria-labels` to the form fields.

- - -

## Credits

👩🏻‍💻 View an example of a completed Credits section [here](https://github.com/kera-cudmore/BookWorm#Credits)

The Credits section is where you can credit all the people and sources you used throughout your project.

### Code Used

If you have used some code in your project that you didn't write, this is the place to make note of it. Credit the author of the code and if possible a link to where you found the code. You could also add in a brief description of what the code does, or what you are using it for here.

### Content

Who wrote the content for the website? Was it yourself - or have you made the site for someone and they specified what the site was to say? This is the best place to put this information.

###  Media

If you have used any media on your site (images, audio, video etc) you can credit them here. I like to link back to the source where I found the media, and include where on the site the image is used.
  
###  Acknowledgments

If someone helped you out during your project, you can acknowledge them here! For example someone may have taken the time to help you on slack with a problem. Pop a little thank you here with a note of what they helped you with (I like to try and link back to their GitHub or Linked In account too). This is also a great place to thank your mentor and tutor support if you used them.
