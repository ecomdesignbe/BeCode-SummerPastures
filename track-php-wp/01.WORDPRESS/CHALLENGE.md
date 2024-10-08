# Challenge

Let's first establish the goal :

- I run a news website where I post the latest news from the World.
- I want to have a **homepage** with some welcome content and a section that displays the cover image and title of the many articles (posts) I published in my website.
- When I click in one of them, I am redirected to the specific page of this article.
- This specific page is the same for each article, the difference being the content, of course :P

---

**STEPS**

For these steps, each time there is something I didn't explain yet and you'll have to find by yourself I put a (**NEW**) tag.

Some steps are implicit. (configuring dashboard in order to determine the home page, etc.)

- Create a new WordPress project with Local.
- Let's start fresh ! Delete all default pages, posts, comments, etc.
- Create a new theme from within your code editor.
- Activate your theme.
- Get rid of the default WYSIWYG editor of your pages from within the `functions.php`
- (**NEW**) Enable `feature image` for your posts
  - (This will make appear a place in your post editor where you can upload a cover image for the post.)
- Create a `home` template and link it to a `home` page in your dashboard.
- Install _ACF_ and implement the following fields for your page :

  - Hero image (image)
  - Title (text)
  - Subtitle (text)
  - Intro (text area)
  - Values title (text)
  - Values (repeater)
    - Value (text)
  - Blog section title (text)

- In your dashboard, create three posts :
  - For each one, give it a title, a lorem ipsum text content (in the WYSIWYG) and upload a cover image for the post.
- Still in the dashboard, fill the `home` page fields with whatever you want.
- In your template code for `home`, create a markup with the cover image of your website, the title in a `h1`, subtitle in a `h2`, the intro in a `p`, the title of the section "values" in a `h2` and a list `ul>li` of the three values you hold tight to your hearth. :P
- Then, put the blog section title in a `h2` (Like... "Our articles", or whatever...)
- (**NEW**) Loop through all the posts you have and display their cover image, their title in a `h3` and the date of publication in a `p`
  - For this you will need to...
  - Use `WP Query` to select all the posts you have in your website using the class `WP_Query` and store them in a variable
  - Loop though the posts (`have_posts()` and `the_post`) and for each post, create an anchor tag `a` thar contains the cover image, title and date of publication. The anchor tag href should point to the permalink of the post.
  - **RESET** the post data before the end of the loop. (try to understand the logic of that)

From this.. you should have your homepage with the posts being displayed. When you click one, you should be redirected to... a blank page!

We'll tackle this very soon !

For now... you should have something like this : (I put just a liiiiiitle style for the flex of the news)
