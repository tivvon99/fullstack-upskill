# fullstack-upskill

# Books to read

- https://www.amazon.ca/You-Dont-Know-JS-Yet-ebook/dp/B084BNMN7T

## Project 1
- To think atomic design, treat items as blocks and name their classes appropriate to what they are. https://bradfrost.com/blog/post/atomic-web-design/
- HTML/CSS file names stick to lowercase-names-with-dashes
- Think about why you should maybe split your css into different files?
- Think about how to create a more global css file, something to share. (globals.css)


#### What's Next

- Create a new branch from main
- Enter Chat index.html page. The button should link to our chat room.
- Replicate https://www.sketchappsources.com/resources/source-image/whats-app-chat-details-view-gayatriraut.jpg
- Should end up with 5 files (2 html, 3 css)
- Challenge #1 https://fontawesome.com/start (use their CDN url to get access to their icons)

### Project 1 Feedback (#1)

- Keep everything in the root folder, index.html should be at root. Always keep project structure flat until it makes sense to make folders
- Take a look at making sure your fonts are more aligned with the design, it's important to make sure a customers design is correct. 
- Think about mobile design and breakpoints, it's important to make sure a customers design is correct.
- Alignment of icons seems to need adjustment (take a look at something called Flexbox, it should solve it using the very basics)
- Unneeded comments in HTML + CSS, this mudies the code. Only use comments when you are doing something out of ordinary. This ensures it is special case and people will take more notice.
- (#index.html) - Not sure why there is an a tag nested in a button you should only need one. Remember this, buttons are for actions, a tags are for navigation (for the most part)
- (#index.html) - Avoid unneeded element nesting. You could make that page with 1 div and a link and styling.
- (#index.html/chat-bot) - You can just have .page-container on the body
- .screen-header-left/center/right are using similar styles. It may make more sense to create a .screen-header-section that has these styles. Then use psudeo selectors for children to align them. This is less important butt he .screen-header-container means you can re-use.
- You cannot put divs inside a span screen-header-* should be divs
- <p>Chatbot Jr</p> should be a span
- Some of your icons are div > span others are span > span. Keep it consistent. However you cannot have span > div
- Your CSS files should be page specific (2 page, 1 global)