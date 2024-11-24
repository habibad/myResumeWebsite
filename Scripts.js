let blogs = [];
let index = 0;

async function fetchBlogs() {
    try {
        const response = await fetch('fetchBlogs.php');
        blogs = await response.json();
        initializeBlogs();
    } catch (error) {
        console.error("Error fetching blogs:", error);
    }
}

function initializeBlogs() {
    const blogContainer = document.getElementById('blog-container');
    blogContainer.innerHTML = '';

    // Display the first 4 blogs
    for (let i = 0; i < 4; i++) {
        const blogCard = createBlogCard(blogs[i]);
        blogContainer.appendChild(blogCard);
    }

    // Update title and description initially
    //updateTitleAndDescription(0);

    // Start cycling blogs
    setInterval(cycleBlogs, 5000);
}

function createBlogCard(blog) {
    const blogCard = document.createElement('div');
    blogCard.classList.add('blog-card');
    const truncatedTitle = truncateText(blog.title, 4); // Limit to 5 words
    blogCard.innerHTML = `
        <img src="${blog.image_url}" alt="${blog.title}">
        <div class="blog-card-content">
            <span class="category-badge">${blog.author}</span>
            <span class="blog-date">${blog.date}</span>
            <h2>${truncatedTitle}</h2>
            <p>${blog.description}</p>
        </div>
    `;
    return blogCard;
}

function truncateText(text, maxWords) {
    const words = text.split(' ');
    return words.length > maxWords ? words.slice(0, maxWords).join(' ') + '...' : text;
}


function cycleBlogs() {
    const blogContainer = document.getElementById('blog-container');
    const blogCards = blogContainer.children;

    // Fade out the first blog card
    const firstCard = blogCards[0];
    firstCard.classList.add('hidden');

    setTimeout(() => {
        blogContainer.removeChild(firstCard);

        // Add the next blog in the sequence
        const nextBlogIndex = (index + 4) % blogs.length;
        const newCard = createBlogCard(blogs[nextBlogIndex]);
        blogContainer.appendChild(newCard);

        // Update the title and description
        //updateTitleAndDescription(nextBlogIndex);

        // Update the current index
        index = (index + 1) % blogs.length;
    }, 1000); // Match CSS transition duration
}
fetchBlogs();
