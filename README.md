# the-hackey-hooker
Personal Website Milestone 1
My PWP Milestone 1 is not really here yet.
I was confused and just added to my About Me page.
Working on it now.

### Milestone 1 Feedback

&#10004; Correctly set up the git/GitHub/PhpStorm toolchain.

&#10004; Create the directory structure for the project as outlined.

&#10004; Define a purpose, audience, and goal for your project.

&#10004; Create one Persona for your proposed project.

&#10004; Create one Use Case for your proposed project, based on the Persona.

Your purpose/audience/goal and Persona and Use Case all pass, however the only concern I have is if your direction for this project is accurately defined well enough specific to your professional goals. Based on the persona and use case it looks like your direction is squarely aimed at marketing yourself as a freelance mobile app developer looking to work with entrepreneurs and startups, perhaps with a focus on healthcare. 

Just be certain that your direction is laser-focused on designing a site that will serve your specific goals, and attract the specific people and projects you want to work with and be a part of. Your HTML looks great, and nice work with CSS! Go ahead and get started on Milestone 2a. Your Milestone 1 passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/).

### Milestone 2&alpha; Feedback
&#10004; Create a sitemap outlining the pages you plan to include in your PWP.

&#10008; Document a brief plan or strategy for your content that will support the overall purpose and goal of the site.

&#10008; Map out a simple interaction flow that details the steps a user must take to successfully use your site to acheive the goal.

&#10004; Create a mobile and desktop/laptop wireframe for each page layout.

Really, really nice work on these wireframes! These will give you a very good outline upon which you can base your development. Your content strategy and interaction flow are missing, and I would have really liked to see some sort of content plan to go along with the wireframes. It looks like you have a lot of content planned in your layouts, and I'm curious as to what exactly you plan to feature. Especially on the Home page.

My initial thought is to clarify and 80/20 all of the navigation links (header,  footer, and within the content sections). I see redundancy in the nav, and featuring so many links becomes a bit cluttered. Also, based upon your 3-page sitemap, I'm a little unclear on where all of these links will go. Some redundancy and bold "calls to action" can be very appropriate depending on how you want your users to navigate your site, but I admit I'm a little confused. And I don't want your users to be confused by too many options on a 3-page website. 

Are you planning on featuring a separate "services" page, or will that direct to your "work" page? I see links to a "services" page featured many times.

Instead of a list of buttons on your mobile "work" page, we can use a mobile-friendly gallery to feature your projects like [Swipebox](http://brutaldesign.github.io/swipebox/).

Again, awesome wireframes. Such a well planned layout really necessitates an equally clear content strategy to go along with it. ;) This site will be fun to build with Bootstrap. Your HTML and CSS all look great, and I'm looking forward to seeing this project take shape.   

Your Milestone passes at [Tier I](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You're clear to begin development. Talk with me a bit more about your navigation links and content plan. 

### Milestone 2b Feedback
- Let's get your directory structure set up. Create an index.php file inside /public_html. This will be your home page.
- Create a /php directory. This will, at the very least, house a file called mailer.php
- Don't forget to add a contact form to your site
- I think you can knock out the new layout in a couple of days. Just get the Bootstrap HTML scaffolding in place, then worry about the CSS and content

Take a look at what we went over, and check in with me and/or Skyler this week. After your new layout is up, you should be ready to deploy to ASO next week. :-)

Your Milestone 2b passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/)

Set up ASO Host:
- Go over https://bootcamp-coders.cnm.edu/class-materials/php/email/, add composer.json (outside /public_html), and mailer.php (somewhere inside /public_html)
- enable shell access - chat live support and request them to enable this if it's not on already
- Add your public SSH key (CPanel, SSH Access)
- Add an email account, and add an email forwarder if you like :)
- Create a new deployment in PhpStorm that uploads to ASO, and upload your site there.
- After you've rolled out to ASO, we'll need to make a few quick updates to your .htaccess file
